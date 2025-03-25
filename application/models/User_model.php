
<?php 
class User_model extends CI_model{

    function add($data){
        $this->db->insert('users',$data);
    }
    function get_users(){
        $query=$this->db->get('users');
        return $query->result_array();
    }
    function get_user_row($id){
        return $this->db->where('id',$id)->get('users')->row();
    }
    function edit($id,$data){
        $this->db->where('id',$id)->update('users',$data);
    }
    function delete($id){
$this->db->where('id',$id)->delete('users');
    }
    
}