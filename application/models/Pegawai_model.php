<?php
 class Pegawai_model extends CI_Model
 {
     function get_product()
     {
        $result = $this->db->get('kepegawaian');
        return $result; 
     }

     function save($nama,$nip,$tmt,$masa_kerja,$keterangan){
        $data = array (
            'nama' => $nama,
            'nip' => $nip,
            'tmt' =>$tmt,
            'masa_kerja' =>$masa_kerja,
            'keterangan' =>$keterangan
        );
        $this->db->insert('kepegawaian',$data);
     }

     function delete($id){
         $this->db->where('id', $id);
         $this->db->delete('kepegawaian');
     }

     function get_id($id){
        $query = $this->db->get_where('kepegawaian', array('id' =>
        $id));
        return $query;
        }
        
        function update($id,$nama,$nip,$tmt,$masa_kerja,$keterangan){
            $data = array(
            'nama' => $nama,
            'nip' => $nip,
            'tmt' => $tmt,
            'masa_kerja' => $masa_kerja,
            'keterangan' => $keterangan
            );
            $this->db->where('id', $id);
            $this->db->update('kepegawaian', $data);
            }

            function cari($keyword)
            {
                $this->db->like('keterangan',$keyword);
                $this->db->or_like('nama',$keyword);
                return $this->db->get('kepegawaian');
            }
 }
 
?>
