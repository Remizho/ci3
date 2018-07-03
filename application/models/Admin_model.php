<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model
{

    public function __construct() 
    {
        parent::__construct();
    }

    public function get_all_admin()
    {
        // Urutkan berdasar abjad
        $this->db->order_by('user_id', 'DESC');

        $query = $this->db->get('users');
        return $query->result();
    }

    public function register($enc_password){
        // Array data user 
        $data = array(
            'nama' => $this->input->post('nama'),
            'email' => $this->input->post('email'),
            'username' => $this->input->post('username'),
            'password' => $enc_password,
            'kodepos' => $this->input->post('kodepos'),
            'fk_level_id' => $this->input->post('membership')
        );

        // Insert user
        return $this->db->insert('users', $data);
    }

    public function update_admin($data, $id, $enc_password) 
    {
        if ( !empty($data) && !empty($id) ){
            $update = $this->db->update( 'users', $data, array('user_id'=>$id) );
            return $update ? true : false;
        } else {
            return false;
        }
    }

    public function get_member_by_id($id)
    {
        $query = $this->db->get_where('users', array('user_id' => $id));
        return $query->row();
    }

    public function delete_member($id)
    {
        if ( !empty($id) ){
            $delete = $this->db->delete('users', array('user_id'=>$id) );
            return $delete ? true : false;
        } else {
            return false;
        }
    }

}
