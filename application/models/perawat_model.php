<?php
class perawat_model extends CI_Model
{
    function get_perawat()
    {
        $result = $this->db->get('perawat');
        return $result;
    }

    function save($nama,$gelar)// $nama dan $gelar adalah parameter untuk value yg di database
    {
        $data = array( // fungsi ini sebagai memeberikan value pada database
            'nama' => $nama,
            'gelar' => $gelar
        );

        $this->db->insert('perawat',$data);
    }

    function delete($id)
    {
        $this->db->where('id',$id); //dimana id database value nya $id 
        $this->db->delete('perawat');// maka akan berfungsi function delete
    }

    function get_id($id)
    {
       $query= $this->db->get_where('perawat',array('id'=>
    $id));
    return $query;
    }

    function update($id,$nama,$gelar)
    {
        $data = array (
            'nama' => $nama,
            'gelar' => $gelar 
        );
        $this->db->where('id',$id);
        $this->db->update('perawat',$data);
    }

   
}
?>