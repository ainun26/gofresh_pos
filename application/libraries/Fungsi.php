<?php

Class Fungsi {
    protected $ci;

    function __construct() {
        $this->ci =& get_instance();
    }

    function user_login(){
        $this->ci ->load->model('user_m');
        $userid = $this->ci->session->userdata('user_id');
        $user_data = $this->ci->user_m->get($userid)->row();
        return $user_data;
    }

    function PdfGenerator($html, $filename, $paper, $orientation){
        $dompdf = new Dompdf\Dompdf();
        $dompdf ->loadHtml($html);
        // Optional setup paper
        $dompdf ->setPaper($paper, $orientation);
        // Reader html as PDF
        $dompdf ->render();  
        // Output the generate PDF to browser
        $dompdf ->stream($filename, array('Attachment' => 0));
    }

    public function count_item(){
        $this->ci->load->model('item_m');
        return $this->ci->item_m->get()->num_rows();
    }

    public function count_supplier(){
        $this->ci->load->model('supplier_m');
        return $this->ci->supplier_m->get()->num_rows();
    }

    public function count_customer(){
        $this->ci->load->model('customer_m');
        return $this->ci->customer_m->get()->num_rows();
    }

    public function count_user(){
        $this->ci->load->model('user_m');
        return $this->ci->user_m->get()->num_rows();
    }

}