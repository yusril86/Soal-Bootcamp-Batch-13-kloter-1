<?php
 class pegawai extends CI_Controller 
 {
     function __consruct(){
         parent::__consruct();
         $this->load->model('Pegawai_model');
     }

     public function index()
     {
         $this->load->view('navbar');
         $data ['kepegawaian'] = $this->Pegawai_model->get_product();
         $this->load->view('dokter_view' ,$data);
     }  

     function add_new(){
        $this->load->view('add_dokter_view');
        }


    function save(){
        $nama = $this->input->post('nama');
        $nip = $this->input->post('nip');
        $tmt = $this->input->post('tmt');
        $masa_kerja = $this->input->post('masa_kerja');
        $keterangan = $this->input->post('keterangan');
        $this->Pegawai_model->save($nama,$nip,$tmt,$masa_kerja,$keterangan);
        redirect('pegawai');
    }

    function delete(){
        $id = $this->uri->segment(3);
        $this->Pegawai_model->delete($id);
        redirect('pegawai');
    }

    function get_edit(){
        $id = $this->uri->segment(3);
        $result = $this->Pegawai_model->get_id($id);
        if($result->num_rows() > 0){
        $i = $result->row_array();
            $data = array(
                'id' => $i['id'],
                'nama' => $i['nama'],
                'nip' => $i['nip'],
                'tmt' => $i['tmt'],
                'masa_kerja' => $i['masa_kerja'],
                'keterangan' => $i['keterangan']
            );
            $this->load->view('edit_dokter_view',$data);
            }else{
            echo "Data Was Not Found";
            }
        }

        function update(){
            $id = $this->input->post('id');
            $nama = $this->input->post('nama');
            $nip = $this->input->post('nip');
            $tmt = $this ->input->post('tmt');
            $masa_kerja = $this ->input->post('masa_kerja');
            $keterangan = $this ->input->post('keterangan');
            $this->Pegawai_model->update
            ($id,$nama,$nip,$tmt,$masa_kerja,$keterangan);
            redirect('pegawai');
            }

        function cari(){
        $this->load->view('navbar');
        $keyword=$this->input->post('keyword');
        $data['kepegawaian']= $this->Pegawai_model->cari($keyword);
        $this->load->view('dokter_view',$data);
        }
 }
 
