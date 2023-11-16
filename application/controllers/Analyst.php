<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Analyst extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('CrudModel', 'crudModel');
        $this->load->library('session');
        if ($this->session->userdata('role') !== 'analyst') {
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

            'content' => 'analyst/dashboard',
            'navlink' => 'dashboard',
        ];

		$this->load->view('analyst/ui', $data);
	}

    public function project()
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

                'content' => 'analyst/project/projectview',
                'navlink' => 'project',
                'proserv' => $this->db->query('SELECT * FROM project JOIN proserv JOIN service WHERE project.id_project = '.$id.' AND proserv.id_project = project.id_project AND proserv.id_service = service.id_service')->result(),
                'service' => $this->db->query('SELECT * FROM service ')->result(),
                ];

        } else if ($this->uri->segment(3) === 'service') {

            $data = [
                'service' => $this->db->query('SELECT * FROM service')->result(),
                'project' => $this->db->query('SELECT * FROM project')->result(),
                'content' => 'analyst/project/service',
                'navlink' => 'project',
            ];

        } else {

            $data = [
                'project' => $this->db->query('SELECT * FROM project JOIN client WHERE project.id_client = client.id_client')->result(),
                'content' => 'analyst/project/project',
                'navlink' => 'project',
                ];
        }
        
        $this->load->view('analyst/ui', $data);
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

                'content' => 'analyst/analyst/analystview',
                'navlink' => 'analyst',
                'analyst' => $this->db->query('SELECT * FROM analyst JOIN proserv JOIN project JOIN service JOIN team WHERE analyst.id_proserv = proserv.id_proserv AND proserv.id_project = project.id_project AND project.id_project = '.$id.' AND proserv.id_service = service.id_service AND analyst.id_team = team.id_team ORDER BY analyst.an_enddate ASC ')->result(),
                //'analys' => $this->db->query('SELECT * FROM project JOIN proserv JOIN service JOIN analyst JOIN team WHERE project.id_project = '.$id.' AND proserv.id_project = project.id_project AND proserv.id_service = service.id_service AND analyst.id_proserv = proserv.id_proserv AND analyst.id_team = team.id_team')->result(),
                
                ];

        } else if ($this->uri->segment(4) === 'addanalyst') {

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

                'team' => $this->db->query('SELECT * FROM team')->result(),
                'proserv' => $this->db->query('SELECT * FROM project JOIN proserv JOIN service WHERE project.id_project = '.$id.' AND project.id_project = proserv.id_project AND proserv.id_service = service.id_service')->result(),
                'project' => $this->db->query('SELECT * FROM project')->result(),
                'content' => 'analyst/analyst/addanalyst',
                'navlink' => 'analyst',
            ];

        } else {

            $data = [
                'project' => $this->db->query('SELECT * FROM project JOIN client WHERE project.id_client = client.id_client')->result(),
                'content' => 'analyst/analyst/analyst',
                'navlink' => 'analyst',
                ];
        }
        
        $this->load->view('analyst/ui', $data);
    }

    public function addAnalyst()
    {
        $id = $this->uri->segment(3);
        
        $id_project = $this->input->post('id_project');

        $add = [
            'id_analyst' => $this->crudModel->generateCode(1, 'id_analyst', 'analyst'),
            'id_proserv' => trim($this->input->post('id_proserv')),
            'id_team' => trim($this->input->post('id_team')),
            'campaign' => trim($this->input->post('campaign')),
            'audience' => trim($this->input->post('audience')),
            'periode' => trim($this->input->post('periode')),
            'an_description' => trim($this->input->post('an_description')),
            'an_attachment' => trim($this->input->post('an_attachment')),
            'an_enddate' => trim($this->input->post('an_enddate')),
        ];

        $project = $this->crudModel->getDataWhere('project', 'id_project', $id_project )->row();

        $update = [
            'p_status' => 2,
            'c_log' =>  $project->c_log + 1,
            't_log' =>  $project->t_log + 1,
        ];

        $this->crudModel->addData('analyst', $add);

        $this->crudModel->updateData('project', 'id_project', $id_project, $update);

        redirect(site_url('analyst/analyst/'.$id_project.'/view'));
    }
    
    public function deleteAnalyst()
    {
        $id_project = $this->uri->segment(3);
        $id_analyst = $this->uri->segment(4);

        $this->crudModel->deleteData('analyst', 'id_analyst', $id_analyst);

        $project = $this->crudModel->getDataWhere('project', 'id_project', $id_project)->row();

        $update = [
            'c_log' =>  $project->c_log - 1,
            't_log' =>  $project->t_log - 1,
        ];

        $this->crudModel->updateData('project', 'id_project', $id_project, $update);

        redirect(site_url('analyst/analyst/'.$id_project.'/view'));
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

                'content' => 'analyst/schedule/scheduleview',
                'navlink' => 'schedule',
                'analyst' => $this->db->query('SELECT * FROM analyst JOIN proserv JOIN project JOIN service JOIN team WHERE analyst.id_proserv = proserv.id_proserv AND proserv.id_project = project.id_project AND project.id_project = '.$id.' AND proserv.id_service = service.id_service AND analyst.id_team = team.id_team ORDER BY analyst.an_enddate ASC ')->result(),
                'schedule' => $this->db->query('SELECT * FROM schedule JOIN proserv JOIN project JOIN service JOIN team JOIN staff JOIN client JOIN task JOIN analyst WHERE schedule.id_task = task.id_task AND task.id_analyst = analyst.id_analyst AND task.id_staff = staff.id_staff AND analyst.id_team = team.id_team
                                                AND analyst.id_proserv = proserv.id_proserv AND proserv.id_project = project.id_project AND proserv.id_service = service.id_service AND project.id_client = client.id_client AND project.id_project = '.$id.' ORDER BY schedule.end_time ASC, schedule.start_time ASC')->result(),
                
                ];

        } else if ($this->uri->segment(3) === 'addschedule') {

            $id = $this->uri->segment(4);

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

                'staff' => $this->db->query('SELECT * FROM staff JOIN project JOIN analyst JOIN proserv WHERE project.id_project = '.$id.' AND project.id_project = proserv.id_project AND analyst.id_proserv = proserv.id_proserv AND staff.id_team = analyst.id_team')->result(),
                'analyst' => $this->db->query('SELECT * FROM project JOIN proserv JOIN service JOIN analyst JOIN team WHERE project.id_project = '.$id.' AND project.id_project = proserv.id_project AND proserv.id_service = service.id_service AND analyst.id_proserv = proserv.id_proserv AND analyst.id_team = team.id_team')->result(),
                'proserv' => $this->db->query('SELECT * FROM project JOIN proserv JOIN service WHERE project.id_project = '.$id.' AND project.id_project = proserv.id_project AND proserv.id_service = service.id_service')->result(),
                'project' => $this->db->query('SELECT * FROM project')->result(),
                'content' => 'analyst/schedule/addschedule',
                'navlink' => 'schedule',
            ];

        } else {

            $data = [
                'project' => $this->db->query('SELECT * FROM project JOIN client WHERE project.id_client = client.id_client')->result(),
                'content' => 'analyst/schedule/schedule',
                'navlink' => 'schedule',
                ];
        }
        
        $this->load->view('analyst/ui', $data);
    }

    public function listStaff()
    {
		$id_analyst = $this->input->post('id_analyst');
		
		$staff = $this->db->query('SELECT * FROM analyst JOIN staff WHERE analyst.id_analyst = "'.$id_analyst.'" AND analyst.id_team = staff.id_team')->result();

		$lists = "<option value=''>Pilih</option>";
		 
		foreach($staff as $data){
			$lists .= "<option value='".$data->id_staff."'>".$data->staff_name."</option>"; 
		}
		
		$callback = array('list_staff'=>$lists); 

		echo json_encode($callback); 
	}

    public function addSchedule()
    {
        $id = $this->uri->segment(4);
        
        $id_project = $this->input->post('id_project');

        $add = [
            'id_task' => $this->crudModel->generateCode(1, 'id_task', 'task'),
            'id_analyst' => trim($this->input->post('id_analyst')),
            'id_staff' => trim($this->input->post('id_staff')),
            'description' => trim($this->input->post('description')),
            'task_name' => trim($this->input->post('task_name')),
            't_status' => trim($this->input->post('t_status')),
        ];

        $this->crudModel->addData('task', $add);

        $add2 = [
            'id_schedule' => $this->crudModel->generateCode(1, 'id_schedule', 'schedule'),
            'id_task' => $add['id_task'],
            'start_time' => trim($this->input->post('start_time')),
            'end_time' => trim($this->input->post('end_time')),
        ];

        $this->crudModel->addData('schedule', $add2);

        $project = $this->crudModel->getDataWhere('project', 'id_project', $id_project )->row();

        $update = [
            'p_status' => 3,
            's_log' =>  $project->s_log + 1,
        ];

        $this->crudModel->updateData('project', 'id_project', $id_project, $update);

        $this->session->set_flashdata('flash', 'ditambah');

        redirect(site_url('analyst/schedule/'.$id_project.'/view'));
    }
    
    public function deleteSchedule()
    {
        $id_project = $this->uri->segment(3);

        $id_schedule = $this->uri->segment(4);
        $id_task = $this->uri->segment(5);

        $this->crudModel->deleteData('task', 'id_task', $id_task);

        $this->crudModel->deleteData('schedule', 'id_schedule', $id_schedule);

        $project = $this->crudModel->getDataWhere('project', 'id_project', $id_project)->row();

        $update = [
            's_log' =>  $project->s_log - 1,
        ];

        $this->crudModel->updateData('project', 'id_project', $id_project, $update);

        redirect(site_url('analyst/schedule/'.$id_project.'/view'));
    }
    
    public function review()
    {
        if ($this->uri->segment(4) === 'view') {

            $id = $this->uri->segment(3);
            $id_task = $this->uri->segment(5);

            $tampil = $this->db->query('SELECT * FROM project JOIN client WHERE project.id_client = client.id_client AND project.id_project = '.$id.'')->row();

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
                    'staff_name' => $tampil2->staff_name,
                    'division' => $tampil2->division,
                    'service_name' => $tampil2->service_name,
                    'campaign' => $tampil2->campaign,
                    'periode' => $tampil2->periode,
                    'an_description' => $tampil2->an_description,
                    'an_enddate' => $tampil2->an_enddate,
                    'audience' => $tampil2->audience,
                    'task_attachment' => $tampil2->task_attachment,
                    'task_name' => $tampil2->task_name,
                    'start_time' => $tampil2->start_time,
                    'end_time' => $tampil2->end_time,
                    'time' => $tampil2->time,
                ],

                'content' => 'analyst/review/reviewview',
                'navlink' => 'review',
                'analyst' => $this->db->query('SELECT * FROM analyst JOIN proserv JOIN project JOIN service JOIN team WHERE analyst.id_proserv = proserv.id_proserv AND proserv.id_project = project.id_project AND project.id_project = '.$id.' AND proserv.id_service = service.id_service AND analyst.id_team = team.id_team ORDER BY analyst.an_enddate ASC ')->result(),
                'schedule' => $this->db->query('SELECT * FROM schedule JOIN proserv JOIN project JOIN service JOIN team JOIN staff JOIN client JOIN task JOIN analyst WHERE schedule.id_task = task.id_task AND task.id_analyst = analyst.id_analyst AND task.id_staff = staff.id_staff AND analyst.id_team = team.id_team
                                                AND analyst.id_proserv = proserv.id_proserv AND proserv.id_project = project.id_project AND proserv.id_service = service.id_service AND project.id_client = client.id_client AND project.id_project = '.$id.' ORDER BY task.t_status DESC, schedule.end_time ASC ')->result(),
                
                ];

        } else {

            $data = [
                'task' => $this->db->query('SELECT * FROM task JOIN analyst JOIN staff JOIN team JOIN schedule JOIN project JOIN proserv WHERE task.id_analyst = analyst.id_analyst AND task.id_staff = staff.id_staff AND analyst.id_team = team.id_team AND schedule.id_task = task.id_task AND analyst.id_proserv = proserv.id_proserv AND proserv.id_project = project.id_project AND task.t_status = 2 ORDER BY task.t_status DESC, schedule.end_time DESC ')->result(),
                'content' => 'analyst/review/review',
                'navlink' => 'review',
            ];
    
        }

        $this->load->view('analyst/ui', $data);
    }

    public function finishTask()
    {
        if ($_POST['action'] == 'decline') {

            $id = $this->input->post('id_task');

            $update = [
                'review' => trim($this->input->post('review')),
                't_status' => trim($this->input->post('t_status')),
            ];

            $this->crudModel->updateData('task', 'id_task', $id, $update);

        } else if ($_POST['action'] == 'accept') {

            $id = $this->input->post('id_task');

            $id_project = $this->input->post('id_project');

            $update = [
                'review' => trim($this->input->post('review')),
                't_status' => 3,
            ];

            $this->crudModel->updateData('task', 'id_task', $id, $update);

            $project = $this->db->query('SELECT * FROM project WHERE id_project = '.$id_project.'')->row();

            $update2 = [
                'b_log' => $project->b_log + 1,
            ];

            $this->crudModel->updateData('project', 'id_project', $id_project, $update2);

            }

        redirect(site_url('analyst/review/review'));

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

                'content' => 'analyst/progress/progressview',
                'navlink' => 'progress',
                'analyst' => $this->db->query('SELECT * FROM analyst JOIN proserv JOIN project JOIN service JOIN team WHERE analyst.id_proserv = proserv.id_proserv AND proserv.id_project = project.id_project AND project.id_project = '.$id.' AND proserv.id_service = service.id_service AND analyst.id_team = team.id_team ORDER BY analyst.an_enddate ASC ')->result(),
                'task' => $this->db->query('SELECT * FROM task JOIN analyst JOIN staff JOIN team JOIN schedule JOIN project JOIN proserv JOIN service WHERE task.id_analyst = analyst.id_analyst AND task.id_staff = staff.id_staff AND analyst.id_team = team.id_team AND schedule.id_task = task.id_task AND analyst.id_proserv = proserv.id_proserv AND proserv.id_project = project.id_project AND proserv.id_service = service.id_service AND project.id_project = '.$id.' AND p_status = 3 ORDER BY schedule.end_time ASC, schedule.start_time ASC ')->result(),
                'schedule' => $this->db->query('SELECT * FROM schedule JOIN proserv JOIN project JOIN service JOIN team JOIN staff JOIN client JOIN task JOIN analyst WHERE schedule.id_task = task.id_task AND task.id_analyst = analyst.id_analyst AND task.id_staff = staff.id_staff AND analyst.id_team = team.id_team
                                                AND analyst.id_proserv = proserv.id_proserv AND proserv.id_project = project.id_project AND proserv.id_service = service.id_service AND project.id_client = client.id_client AND project.id_project = '.$id.' ORDER BY schedule.end_time ASC, schedule.start_time ASC')->result(),
                
                ];

        } else {

            $data = [
                'project' => $this->db->query('SELECT * FROM project JOIN client WHERE project.id_client = client.id_client AND p_status = 3')->result(),
                'content' => 'analyst/progress/progress',
                'navlink' => 'progress',
                ];
        }
        
        $this->load->view('analyst/ui', $data);
    }
    
    public function report()
    {
        if ($this->uri->segment(4) === 'view') {
            
            $id = $this->uri->segment(3);

            $tampil = $this->db->query('SELECT * FROM project JOIN client WHERE project.id_client = client.id_client AND project.id_client = '.$id.'  ')->row();

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

                'content' => 'analyst/report/reportview',
                'navlink' => 'report',
                'analyst' => $this->db->query('SELECT * FROM analyst JOIN proserv JOIN project JOIN service JOIN team WHERE analyst.id_proserv = proserv.id_proserv AND proserv.id_project = project.id_project AND project.id_project = '.$id.' AND proserv.id_service = service.id_service AND analyst.id_team = team.id_team ORDER BY analyst.an_enddate ASC ')->result(),
                'task' => $this->db->query('SELECT * FROM task JOIN analyst JOIN staff JOIN team JOIN schedule JOIN project JOIN proserv JOIN service WHERE task.id_analyst = analyst.id_analyst AND task.id_staff = staff.id_staff AND analyst.id_team = team.id_team AND schedule.id_task = task.id_task AND analyst.id_proserv = proserv.id_proserv AND proserv.id_project = project.id_project AND proserv.id_service = service.id_service AND project.id_project = '.$id.' AND p_status = 4 ORDER BY schedule.end_time ASC, schedule.start_time ASC ')->result(),
                'schedule' => $this->db->query('SELECT * FROM schedule JOIN proserv JOIN project JOIN service JOIN team JOIN staff JOIN client JOIN task JOIN analyst WHERE schedule.id_task = task.id_task AND task.id_analyst = analyst.id_analyst AND task.id_staff = staff.id_staff AND analyst.id_team = team.id_team
                                                AND analyst.id_proserv = proserv.id_proserv AND proserv.id_project = project.id_project AND proserv.id_service = service.id_service AND project.id_client = client.id_client AND project.id_project = '.$id.' ORDER BY schedule.end_time ASC, schedule.start_time ASC')->result(),
                
                ];

                $this->load->view('analyst/print', $data);

        } else {

            $data = [
                'project' => $this->db->query('SELECT * FROM project JOIN client WHERE project.id_client = client.id_client AND p_status = 4')->result(),
                'content' => 'analyst/report/report',
                'navlink' => 'report',
                ];

                $this->load->view('analyst/ui', $data);
        }
        
    }

    public function logout()
    {
        $this->session->unset_userdata('role');
        $this->session->unset_userdata('user_id');
        redirect('login/');
    }
}
