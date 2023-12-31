<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MY_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->model('DataBarangModel');
		$this->load->model('DataBarangMasukModel');
		$this->load->model('DataBarangKeluarModel');
		$this->load->model('DataAssetModel');
		$this->load->model('DataSupplierModel');
		$this->load->model('DataUserModel');
		$this->load->model('DataBidangModel');
		$this->load->model('LogModel');
    }

	public function index()
	{
        $conf['title'] = 'Dashboard';
        $conf['js'] = 'dashboard';

		$data['total_databarang'] = $this->DataBarangModel->hitung_total();
		$data['total_databarangmasuk'] = $this->DataBarangMasukModel->hitung_total();
		$data['total_databarangkeluar'] = $this->DataBarangKeluarModel->hitung_total();
		$data['total_dataasset'] = $this->DataAssetModel->hitung_total();
		$data['total_datauser'] = $this->DataUserModel->hitung_total();
		$data['total_datasupplier'] = $this->DataSupplierModel->hitung_total();
		$data['total_databidang'] = $this->DataBidangModel->hitung_total();
		$data['log_activity'] = $this->LogModel->getdata();
        $data['datauser'] = $this->DataUserModel->all()->result();
        $data['datasupplier'] = $this->DataSupplierModel->all()->result();
        $data['databarangkeluar'] = $this->DataBarangKeluarModel->all(5)->result();
        $data['databarangmasuk'] = $this->DataBarangMasukModel->validated(5)->result();
        $data['databarangpending'] = $this->DataBarangMasukModel->not_validation(5)->result();

		// echo '<pre>'.print_r($data['datauser'], 1).'<pre>';
		// die;

		$this->load->view('partials/head', $conf);
		$this->load->view('partials/topbar');
		$this->load->view('partials/sidebar');
		$this->load->view('dashboard', $data);
		$this->load->view('partials/footer');
        $this->load->view('partials/plugin', $conf);
	}

	public function chart_barangmasuk()
	{
		$data = $this->DataBarangMasukModel->get_chart()->result();
		echo json_encode($data);
		// echo '<pre>'.print_r($data, 1).'</pre>';
		// die;
	}

	public function chart_barangkeluar()
	{
		$data = $this->DataBarangKeluarModel->get_chart()->result();
		echo json_encode($data);

		// echo '<pre>'.print_r($data, 1).'</pre>';
		// die;
	}

	public function chart_barangmasuk_tahun()
	{
		$data = $this->DataBarangMasukModel->get_chart_years()->result();
		echo json_encode($data);

		// echo '<pre>'.print_r($data, 1).'</pre>';
		// die;
	}

	function getChart() {
		$data['barang_masuk'] = $this->DataBarangMasukModel->get_chart()->result();
		$data['barang_keluar'] = $this->DataBarangKeluarModel->get_chart()->result();
		
		echo json_encode($data);
	}

	function getTotalBarang() 
	{
		$data['total_databarang'] = $this->DataBarangModel->hitung_total();
		$data['total_databarangmasuk'] = $this->DataBarangMasukModel->hitung_total();
		$data['total_databarangkeluar'] = $this->DataBarangKeluarModel->hitung_total();

		echo json_encode($data);
	}
}
?>