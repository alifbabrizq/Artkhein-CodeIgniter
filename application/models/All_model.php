<?php 

defined('BASEPATH') OR exit('No direct script access allowed');
                        
class All_model extends CI_Model {
                        
    public function get_project(){
        return $this->db->select("*")
                        ->from('project')
                        ->join('costumer', 'project.id_costumer = costumer.id_costumer')
                        // ->from('project_bid')
						->get()
						->result();    
    }
    public function get_project_placebid(){
        return $this->db->select("project.id_project, project.nama_project, project.deskripsi, project.id_costumer,
        costumer.id_costumer, project_bid.id_bid,project_bid.id_project,project_bid.id_worker,project_bid.id_costumer,project_bid.status,
        worker.id_worker, project.budget")
                        ->from('project')
                        ->join('worker', 'project_bid.id_worker = worker.id_worker')
                        ->join('project', 'project_bid.id_project = project.id_project')
                        ->join('costumer', 'project_bid.id_costumer = costumer.id_costumer')
                        ->where_not_in('project_bid.id_worker', $_SESSION['id_worker'])
						->get()
						->result();    
    }
    public function add_project_bid_worker(){
        $data=array(
            'id_project'=> $this->input->post('id_project'),
            'id_costumer'=>$this->input->post('id_costumer'),
            'id_worker'=> $_SESSION['id_worker'],
            'harga'=>$this->input->post('harga'),
            'status'=> '0'
        );
        $this->db->insert('project_bid', $data);
        $id=$this->db->last_id();
        $data_project=array(
            'id_project'=>$id,
            'id_worker'=>'99',
            'id_customer'=>$this->input->post('id_customer'),
            'harga'=>NULL,
            'status'=>'0'
        );
        return $this->db->insert('project_bid', $data_project);
    }
    public function add_project_bid(){
        $id= $this->input->post('id_project');
        $data_project=array(
            'id_project'=>$this->input->post('id_project'),
            'id_worker'=>$_SESSION['id_worker'],
            'id_costumer'=>$this->input->post('id_costumer'),
            'harga'=>$this->input->post('harga'),
            'status'=>'0'
        );
        return $this->db->where('project_bid.id_project', $id)->insert('project_bid', $data_project);
    }
                        
}
                        
/* End of file All_model.php */
    
                        