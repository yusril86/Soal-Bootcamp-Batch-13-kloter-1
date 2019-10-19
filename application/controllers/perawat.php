<?php
Class perawat extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('perawat_model');
    }

    function index()
    {
       
        $data['perawat']= $this->perawat_model->get_perawat(); //megambil data di model method (get_perawat) dimana datanya berbentuk array = data['perawat']
       $this->load->view('nav_perawat');
        $this->load->view('perawat_view',$data); //ini untuk menampilkan data di perawat_view
        
    }

    function tambah_perawat()
    {
        $this->load->view('add_perawat_view');
        //halaman form isi biiodata perawat akan muncul ketika fungsi ini ditekan(Tambah perawat)
    }

    function save()
    {
        $nama = $this->input->POST('nama'); //sesuai dengan name di add_perawat_viewpada inputan
        $gelar = $this->input->POST('gelar');
        $this->perawat_model->save($nama,$gelar); // ini meload model dan parameter di perawat_model
        redirect('perawat'); // setelah fungsi terjadi di atas maka akan kembali di perawat index
    }

    function delete()
    {
        $id= $this->uri->segment(3);// id sama dengan link yang ada di segment 3
        $this->perawat_model->delete($id); // yang terbaca sebagai id di model adalah di segment(3)
        redirect('perawat');
    }

    function get_edit()
    {
        $id = $this->uri->segment(3);
        $result = $this->perawat_model->get_id($id);
        if ($result->num_rows() > 0)
        {
            $i = $result->row_array();
            $data = array(
                'id' => $i['id'],
                'nama' => $i['nama'],
                'gelar' => $i['gelar']
            );
            $this->load->view('edit_perawat_view',$data);
        }else{
            echo "Data Tidak ditemukan";
        }
    }

    function update()
    {
        $id = $this->input->POST('id');
        $nama = $this->input->POST('nama');
        $gelar = $this->input->POST('gelar');
        $this->perawat_model->update($id,$nama,$gelar);
        redirect('perawat');
    }
}
?>