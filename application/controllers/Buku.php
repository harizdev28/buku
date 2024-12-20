<?php

class Buku extends CI_Controller
{
    

    // Pembuatan function detail buku
    public function detail($id_buku)
    {
        $data['title']  = 'User | Detail Buku';
        $data['title_card'] = 'Detail Buku';
        $data['buku'] = $this->model_buku->detail_buku($id_buku);
      
        


		$data['content'] = 'frontend_content/detail';
		
		$this->load->view('templates/header', $data);
		$this->load->view('templates/topBar', $data);
		$this->load->view('templates/footer');
    }


   public function terlaris(){
  
  
    


    $data['content'] = 'frontend_content/buku-terlaris';
    
    $this->load->view('templates/header', $data);
    $this->load->view('templates/topBar', $data);
    $this->load->view('templates/footer');
    }


}
