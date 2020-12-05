<?php

class About extends Controller
{
    public function index($nama = 'Sahrul', $pekerjaan = 'Pengangguran', $umur = 32)
    {
        $data['nama'] = $nama;
        $data['pekerjaan'] = $pekerjaan;
        $data['umur'] = $umur;
        $data['judul'] = 'About Me';
        $this->view('tempelates/header', $data);
        $this->view('about/index', $data);
        $this->view('tempelates/footer');
    }
    public function  page()
    {
        $data['judul'] = 'Pages';
        $this->view('tempelates/header', $data);
        $this->view('about/page');
        $this->view('tempelates/footer');
    }
}
