<?php namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\DataSantri_m;
class Data_Santri extends BaseController
{
	public function __construct() {

        $this->santri = new DataSantri_m();
    }

	public function index()
	{
		echo view('templates/header');
		echo view('pages/add_santri');
	}

	public function store_santri(){

		$no_induk = $this->request->getPost('no-induk');
		$nama = $this->request->getPost('nama');
		$gender = $this->request->getPost('gender');
		$tempat = $this->request->getPost('tempat-lahir');
		$ttl = $this->request->getPost('tanggal-lahir');
		$agama = $this->request->getPost('agama');
		$alamat = $this->request->getPost('alamat');

		$data = [
			'no_induk' => $no_induk,
			'nama' => $nama,
			'gender' => $gender,
			'tempat_lahir' => $tempat,
			'tanggal_lahir' => $ttl,
			'agama' => $agama,
			'alamat' => $alamat
		];

    $simpan = $this->santri->insert_santri($data);

	if($simpan){ 
	   		$callback = array(
			'status'=>'sukses',
			'pesan'=>'Data berhasil disimpan');
		}else{
			$callback = array(
			'status'=>'gagal',
			'pesan'=>validation_errors());
		}
			echo json_encode($callback);
  } 
}
