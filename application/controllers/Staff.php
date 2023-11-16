<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Staff extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('CrudModel', 'crudModel');
        $this->load->library('session');
        if ($this->session->userdata('role') !== 'staff') {
            redirect('login/'); 
        }
    }

	public function index()
	{
        $data = [
            'projects' => $this->db->query('SELECT * FROM project')->num_rows(),
            'analyst' => $this->db->query('SELECT * FROM analyst')->num_rows(),
            'task' => $this->db->query('SELECT * FROM task')->num_rows(),
            'staff' => $this->db->query('SELECT * FROM staff')->num_rows(),

            'progress' => $this->db->query('SELECT * FROM project')->result(),
            'project' => $this->db->query('SELECT * FROM project WHERE p_status = 4 ')->result(),

            'content' => 'staff/dashboard',
            'navlink' => 'dashboard',
        ];

		$this->load->view('staff/ui', $data);
	}

    public function analyst()
    {
        if ($this->uri->segment(4) === 'view') {
            
            $id = $this->uri->segment(3);

            $tampil = $this->db->query('SELECT * FROM project JOIN client WHERE project.id_client = client.id_client AND project.id_project = '.$id.'')->row();

            $data = [
                'detail' => [
                    'id_project' => $tampil->id_project,
                    'client_name' => $tampil->client_name,
                    'company' => $tampil->company,
                    'phone' => $tampil->phone,
                    'email' => $tampil->email,
                    'address' => $tampil->address,
                    'project_name' => $tampil->project_name,
                    'project_priod' => $tampil->project_priod,
                    'start_date' => $tampil->start_date,
                    'end_date' => $tampil->end_date,
                    'description' => $tampil->description,
                    'attachment' => $tampil->attachment,
                    'p_status' => $tampil->p_status,
                ],

                'content' => 'staff/analyst/analystview',
                'navlink' => 'analyst',
                'analyst' => $this->db->query('SELECT * FROM analyst JOIN proserv JOIN project JOIN service JOIN team WHERE analyst.id_proserv = proserv.id_proserv AND proserv.id_project = project.id_project AND project.id_project = '.$id.' AND proserv.id_service = service.id_service AND analyst.id_team = team.id_team ORDER BY analyst.an_enddate ASC ')->result(),
                //'analys' => $this->db->query('SELECT * FROM project JOIN proserv JOIN service JOIN analyst JOIN team WHERE project.id_project = '.$id.' AND proserv.id_project = project.id_project AND proserv.id_service = service.id_service AND analyst.id_proserv = proserv.id_proserv AND analyst.id_team = team.id_team')->result(),
                
                ];

        } else {

            $data = [
                'project' => $this->db->query('SELECT * FROM project JOIN client WHERE project.id_client = client.id_client')->result(),
                'content' => 'staff/analyst/analyst',
                'navlink' => 'analyst',
                ];
        }
        
        $this->load->view('staff/ui', $data);
    }

    public function schedule()
    {
        if ($this->uri->segment(4) === 'view') {
            
            $id = $this->uri->segment(3);

            $tampil = $this->db->query('SELECT * FROM project JOIN client WHERE project.id_client = client.id_client AND project.id_project = '.$id.'')->row();

            $data = [
                'detail' => [
                    'id_project' => $tampil->id_project,
                    'client_name' => $tampil->client_name,
                    'company' => $tampil->company,
                    'phone' => $tampil->phone,
                    'email' => $tampil->email,
                    'address' => $tampil->address,
                    'project_name' => $tampil->project_name,
                    'project_priod' => $tampil->project_priod,
                    'start_date' => $tampil->start_date,
                    'end_date' => $tampil->end_date,
                    'description' => $tampil->description,
                    'attachment' => $tampil->attachment,
                    'p_status' => $tampil->p_status,
                ],

                'content' => 'staff/schedule/scheduleview',
                'navlink' => 'schedule',
                'analyst' => $this->db->query('SELECT * FROM analyst JOIN proserv JOIN project JOIN service JOIN team WHERE analyst.id_proserv = proserv.id_proserv AND proserv.id_project = project.id_project AND project.id_project = '.$id.' AND proserv.id_service = service.id_service AND analyst.id_team = team.id_team ORDER BY analyst.an_enddate ASC ')->result(),
                'schedule' => $this->db->query('SELECT * FROM schedule JOIN proserv JOIN project JOIN service JOIN team JOIN staff JOIN client JOIN task JOIN analyst WHERE schedule.id_task = task.id_task AND task.id_analyst = analyst.id_analyst AND task.id_staff = staff.id_staff AND analyst.id_team = team.id_team
                                                AND analyst.id_proserv = proserv.id_proserv AND proserv.id_project = project.id_project AND proserv.id_service = service.id_service AND project.id_client = client.id_client AND project.id_project = '.$id.' ORDER BY schedule.end_time ASC, schedule.start_time ASC')->result(),
                
                ];

        } else {

            $data = [
                'project' => $this->db->query('SELECT * FROM project JOIN client WHERE project.id_client = client.id_client')->result(),
                'content' => 'staff/schedule/schedule',
                'navlink' => 'schedule',
                ];
        }
        
        $this->load->view('staff/ui', $data);
    }

    public function task()
    {
        if ($this->uri->segment(4) === 'view') {

            $id = $this->uri->segment(3);
            $id_task = $this->uri->segment(5);

            $tampil = $this->db->query('SELECT * FROM project JOIN client WHERE project.id_client = client.id_client AND project.id_client = '.$id.'')->row();

            $tampil2 = $this->db->query('SELECT * FROM schedule JOIN proserv JOIN project JOIN service JOIN team JOIN staff JOIN client JOIN task JOIN analyst WHERE schedule.id_task = task.id_task AND task.id_analyst = analyst.id_analyst AND task.id_staff = staff.id_staff AND analyst.id_team = team.id_team
            AND analyst.id_proserv = proserv.id_proserv AND proserv.id_project = project.id_project AND proserv.id_service = service.id_service AND project.id_client = client.id_client AND project.id_project = '.$id.' AND task.id_task = '.$id_task.'')->row();

            $data = [
                'detail' => [
                    'id_project' => $tampil->id_project,
                    'client_name' => $tampil->client_name,
                    'company' => $tampil->company,
                    'phone' => $tampil->phone,
                    'email' => $tampil->email,
                    'address' => $tampil->address,
                    'project_name' => $tampil->project_name,
                    'project_priod' => $tampil->project_priod,
                    'start_date' => $tampil->start_date,
                    'end_date' => $tampil->end_date,
                    'description' => $tampil->description,
                    'attachment' => $tampil->attachment,
                    'p_status' => $tampil->p_status,
                ],

                'detail2' => [
                    'id_analyst' => $tampil2->id_analyst,
                    'id_task' => $tampil2->id_task,
                    'description' => $tampil2->description,
                    'service_name' => $tampil2->service_name,
                    'campaign' => $tampil2->campaign,
                    'periode' => $tampil2->periode,
                    't_status' => $tampil2->t_status,
                    'an_description' => $tampil2->an_description,
                    'an_enddate' => $tampil2->an_enddate,
                    'audience' => $tampil2->audience,
                    'an_attachment' => $tampil2->an_attachment,
                    'task_name' => $tampil2->task_name,
                    'start_time' => $tampil2->start_time,
                    'end_time' => $tampil2->end_time,
                    'review' => $tampil2->review,
                ],

                'content' => 'staff/task/taskview',
                'navlink' => 'task',
                'analyst' => $this->db->query('SELECT * FROM analyst JOIN proserv JOIN project JOIN service JOIN team WHERE analyst.id_proserv = proserv.id_proserv AND proserv.id_project = project.id_project AND project.id_project = '.$id.' AND proserv.id_service = service.id_service AND analyst.id_team = team.id_team ORDER BY analyst.an_enddate ASC ')->result(),
                'schedule' => $this->db->query('SELECT * FROM schedule JOIN proserv JOIN project JOIN service JOIN team JOIN staff JOIN client JOIN task JOIN analyst WHERE schedule.id_task = task.id_task AND task.id_analyst = analyst.id_analyst AND task.id_staff = staff.id_staff AND analyst.id_team = team.id_team
                                                AND analyst.id_proserv = proserv.id_proserv AND proserv.id_project = project.id_project AND proserv.id_service = service.id_service AND project.id_client = client.id_client AND project.id_project = '.$id.' ORDER BY task.t_status DESC, schedule.end_time ASC ')->result(),
                
                ];

        } else {

            $data = [
                'task' => $this->db->query('SELECT * FROM task JOIN analyst JOIN staff JOIN team JOIN schedule JOIN project JOIN proserv WHERE task.id_analyst = analyst.id_analyst AND task.id_staff = staff.id_staff AND analyst.id_team = team.id_team AND schedule.id_task = task.id_task AND analyst.id_proserv = proserv.id_proserv AND proserv.id_project = project.id_project ORDER BY task.t_status DESC, schedule.end_time DESC ')->result(),
                'content' => 'staff/task/task',
                'navlink' => 'task',
            ];
    
        }

        $this->load->view('staff/ui', $data);
    }
    
    public function addTask()
    {
        $id = $this->input->post('id_task');

        $update = [
            'task_attachment' => trim($this->input->post('task_attachment')),
            't_status' => trim($this->input->post('t_status')),
        ];

        $this->crudModel->updateData('task', 'id_task', $id, $update);

        $this->session->set_flashdata('flash', 'ditambah');

        redirect(site_url('staff/task/task'));
    }

    public function progress()
    {
        if ($this->uri->segment(4) === 'view') {
            
            $id = $this->uri->segment(3);

            $tampil = $this->db->query('SELECT * FROM project JOIN client WHERE project.id_client = client.id_client AND project.id_client = '.$id.'')->row();

            $data = [
                'detail' => [
                    'id_project' => $tampil->id_project,
                    'client_name' => $tampil->client_name,
                    'company' => $tampil->company,
                    'phone' => $tampil->phone,
                    'email' => $tampil->email,
                    'address' => $tampil->address,
                    'project_name' => $tampil->project_name,
                    'project_priod' => $tampil->project_priod,
                    'start_date' => $tampil->start_date,
                    'end_date' => $tampil->end_date,
                    'description' => $tampil->description,
                    'attachment' => $tampil->attachment,
                    'p_status' => $tampil->p_status,
                    'cot' => $tampil->s_log - $tampil->b_log,
                    's_log' => $tampil->s_log,
                    'b_log' => $tampil->b_log,
                    'persen' => $tampil->b_log / $tampil->s_log * 100,
                ],

                'content' => 'staff/progress/progressview',
                'navlink' => 'progress',
                'analyst' => $this->db->query('SELECT * FROM analyst JOIN proserv JOIN project JOIN service JOIN team WHERE analyst.id_proserv = proserv.id_proserv AND proserv.id_project = project.id_project AND project.id_project = '.$id.' AND proserv.id_service = service.id_service AND analyst.id_team = team.id_team ORDER BY analyst.an_enddate ASC ')->result(),
                'task' => $this->db->query('SELECT * FROM task JOIN analyst JOIN staff JOIN team JOIN schedule JOIN project JOIN proserv JOIN service WHERE task.id_analyst = analyst.id_analyst AND task.id_staff = staff.id_staff AND analyst.id_team = team.id_team AND schedule.id_task = task.id_task AND analyst.id_proserv = proserv.id_proserv AND proserv.id_project = project.id_project AND proserv.id_service = service.id_service AND project.id_project = '.$id.' AND p_status = 3 ORDER BY schedule.end_time ASC, schedule.start_time ASC ')->result(),
                'schedule' => $this->db->query('SELECT * FROM schedule JOIN proserv JOIN project JOIN service JOIN team JOIN staff JOIN client JOIN task JOIN analyst WHERE schedule.id_task = task.id_task AND task.id_analyst = analyst.id_analyst AND task.id_staff = staff.id_staff AND analyst.id_team = team.id_team
                                                AND analyst.id_proserv = proserv.id_proserv AND proserv.id_project = project.id_project AND proserv.id_service = service.id_service AND project.id_client = client.id_client AND project.id_project = '.$id.' ORDER BY schedule.end_time ASC, schedule.start_time ASC')->result(),
                
                ];

        } else {

            $data = [
                'project' => $this->db->query('SELECT * FROM project JOIN client WHERE project.id_client = client.id_client AND p_status = 3')->result(),
                'content' => 'staff/progress/progress',
                'navlink' => 'progress',
                ];
        }
        
        $this->load->view('staff/ui', $data);
    }

    public function logout()
    {
        $this->session->unset_userdata('role');
        $this->session->unset_userdata('user_id');
        redirect('login/');
    }
}
