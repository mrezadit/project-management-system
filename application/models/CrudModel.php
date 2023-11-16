<?php

defined('BASEPATH') or exit('No direct script access allowed');

class CrudModel extends CI_Model
{
    public function generateCode($code, $field, $table) // $code = hanya buat 2 angka awal
    {
        return $code.sprintf('%03s', (int) substr($this->db->select_max($field)->get($table)->row()->$field, 2, 3) + 1);
    }

    public function addData($table, $data = [])
    {
        $this->db->insert($table, $data);
    }

    public function updateData($tabel, $fieldid, $fieldvalue, $data = [])
    {
        $this->db->where($fieldid, $fieldvalue)->update($tabel, $data);
    }

    public function updateDataFor($tabel, $fieldid, $fieldvalue, $data = [])
    {
        for ($i = 0; $i < count($fieldid); ++$i){
        $this->db->where($fieldid, $fieldvalue)->update($tabel, $data);
        }
    }

    public function tambahData($tabel, $data = [])
    {
        $this->db->where($tabel)->insert($tabel, $data);
    }

    public function deleteData($tabel, $fieldid, $fieldvalue)
    {
        $this->db->where($fieldid, $fieldvalue)->delete($tabel);
    }

    public function getData($tabel)
    {
        $query = $this->db->get($tabel);

        return $query;
    }

    public function getDataWhere($tabel, $id, $nilai)
    {
        $this->db->where($id, $nilai);
        $query = $this->db->get($tabel);

        return $query;
    }

    public function getDataJoin($table, $onjoin)
    {
        $this->db->from($table);
        for ($i = 0; $i < count($onjoin); ++$i) {
            $this->db->join(array_keys($onjoin)[$i], array_values($onjoin)[$i]);
        }

        return $this->db->get()->result();
    }

    public function getDataJoinWhere($table, $nilai, $onjoin)
    {
        $this->db->from($table)->where($nilai);
        for ($i = 0; $i < count($onjoin); ++$i) {
            $this->db->join(array_keys($onjoin)[$i], array_values($onjoin)[$i]);
        }

        return $this->db->get()->result();
    }

    public function getDataSum($value, $table, $field)
    {
        $this->db->from($table);
        for ($i = 0; $i < count($value); ++$i) {
            $this->db->where(array_keys($value)[$i], array_values($value)[$i]);
        }
        $this->db->select_sum($field);

        return $this->db->get()->row();
    }

    public function getDataCount($value, $table)
    {
        $this->db->from($table);
        for ($i = 0; $i < count($value); ++$i) {
            $this->db->where(array_keys($value)[$i], array_values($value)[$i]);
        }

        return $this->db->count_all_results();
    }
}
