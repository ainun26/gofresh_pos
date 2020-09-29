<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Grafik extends CI_Controller{
    
	function __construct()
	{
		parent ::__construct();
		check_not_login();
		check_admin();
        $this->load->model('customer_m');
        $this->load->model('category_m');
        $this->load->model('item_m');
        $this->load->model('stock_m');
        $this->load->model('supplier_m');
        $this->load->model('unit_m');
    }

	function index(){
	if($this->session->userdata('akses')=='1'){
		$data['data']=$this->category_m->get();
		$data['kat']=$this->m_kategori->tampil_kategori();
		$data['jual_bln']=$this->m_laporan->get_bulan_jual();
		$data['jual_thn']=$this->m_laporan->get_tahun_jual();
		$this->load->view('admin/v_grafik',$data);
	}else{
        echo "Halaman tidak ditemukan";
    }
	}
	function graf_stok_barang(){
		$x['report']=$this->m_grafik->statistik_stok();
		$this->load->view('admin/grafik/v_graf_stok_barang',$x);
	}
	
}