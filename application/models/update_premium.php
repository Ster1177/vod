<?php
class update_premium extends CI_Model{
// Function To Fetch All Students Record
function show_users(){
$query = $this->db->get('user');
$query_result = $query->result();
return $query_result;
}

// Update Query For Selected Student
function update($fname){
$this->db->set('premium', 1);
$this->db->where('fname', $fname);
$this->db->update('user');

}
}
?>