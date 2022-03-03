<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Project_bid extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('All_model');
    }
    public function index()
    {
        
        if ($_SESSION['level'] == 2) {
            $id_work = $_SESSION['id_worker'];
            $data['content_view']='worker/mycustomer.php';
            $data['project'] = $this->db->select("*")->from('project_bid')
                        ->join('worker', 'project_bid.id_worker = worker.id_worker')
                        ->join('project', 'project_bid.id_project = project.id_project')
                        ->join('costumer', 'project.id_costumer = costumer.id_costumer')
                        ->where('project_bid.status', 1)
                        ->where('project_bid.id_worker', $id_work)
                        ->get()->result();
        } else if($_SESSION['level'] == 3) {
            $id_customer = $_SESSION['id_costumer'];
            $data['content_view']='customer/daftar_bidding.php';
            $data['project'] = $this->db->select("*")->from('project_bid')
            ->join('worker', 'project_bid.id_worker = worker.id_worker')
            ->join('project', 'project_bid.id_project = project.id_project')
            ->join('costumer', 'project.id_costumer = costumer.id_costumer')
            ->where('project.id_costumer', $id_customer)
            ->get()->result();
        }
        
        $this->load->view('theme/sidebar.php', $data);
    }

    public function mywork()
    {
        if($_SESSION['level'] == 3) {
            $id_customer = $_SESSION['id_costumer'];
            $data['content_view']='customer/myworker.php';
            $data['project'] = $this->db->select("*")->from('project_bid')
            ->join('worker', 'project_bid.id_worker = worker.id_worker')
            ->join('project', 'project_bid.id_project = project.id_project')
            ->join('costumer', 'project.id_costumer = costumer.id_costumer')
            ->where('project_bid.status', 1)
            ->where('project_bid.id_costumer',$id_customer)
            ->where('project.id_costumer', $id_customer)
            ->get()->result();
        }
        // print_r($data); die;
        $this->load->view('theme/sidebar.php', $data);
    }
    public function add_project_bid_worker(){
        $proses = $this->All_model->add_project_bid_worker();
        if($proses == TRUE){
            
            redirect('Project/','refresh');
            
        } else {
            echo '2';
            die;
        }
    }
    public function add_project_bid(){
        $proses = $this->All_model->add_project_bid();
        if($proses == TRUE){
            
            redirect('Project/','refresh');
            
        } else {
            echo '2';
            die;
        }
    }

    public function store($id)
    {
        $data['content_view']='worker/prosesbid.php';
        $data['id'] = $id;
        if (isset($_POST['submit'])) {
            $data = [
                'id_project' => $id,
                'id_worker' => $_SESSION['id_worker'],
                'harga' => $this->input->post('harga'),
            ];
    
            $this->db->insert('project_bid', $data);
        }
        $this->load->view('theme/sidebar.php', $data);
        
        // redirect('project_bid','refresh');
        

    }

    public function konfirmasi($id)
    {
        // if ($_SESSION['id_worker']) {
            // $this->db->where('id_worker', $_SESSION['id_worker']);
            $this->db->where('id_bid', $id);
            $this->db->update('project_bid', [
                'status' => 1
        ]);
        
        redirect('project_bid','refresh');
        // }
        
    }


}

/* End of file Project_bid.php */
