<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ImportExcel extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library(array('excel','session'));
        date_default_timezone_set("Asia/Bangkok");
		if($this->session->userdata('nip') == ''){
            redirect('auth');
        }
        
	}

	public function index()
	{
		$this->load->model('insertjadwal');
		$data = array(
			'list_data'	=> $this->ImportJadwal->getData()
		);
		$this->load->view('import_excel.php',$data);
	}

	public function export_excel(){

        $tglAwal = strtoupper($this->input->post('tglawal'));
        $bulanAwal = strtoupper($this->input->post('bulanawal'));
        $tahunAwal = strtoupper($this->input->post('tahunawal'));

        $tglAkhir = strtoupper($this->input->post('tglakhir'));
        $bulanAkhir = strtoupper($this->input->post('bulanakhir'));
        $tahunAkhir = strtoupper($this->input->post('tahunakhir'));

        $periode = $tglAwal . " " . $bulanAwal . " " . $tahunAwal . "-" . $tglAkhir . " " . $bulanAkhir . " " . $tahunAkhir;

		if (isset($_FILES["fileExcel"]["name"])) {
			$path = $_FILES["fileExcel"]["tmp_name"];
			$object = PHPExcel_IOFactory::load($path);
			foreach($object->getWorksheetIterator() as $worksheet)
			{
				$highestRow = $worksheet->getHighestRow();
				$highestColumn = $worksheet->getHighestColumn();	
				for($row=2; $row<=$highestRow; $row++)
				{
                    $nip_pelayan = $worksheet->getCellByColumnAndRow(1, $row)->getValue();
                    $posisi = $worksheet->getCellByColumnAndRow(2, $row)->getValue();
					$nama = $worksheet->getCellByColumnAndRow(3, $row)->getValue();
					$shift = $worksheet->getCellByColumnAndRow(4, $row)->getValue();
					$tanggal = $worksheet->getCellByColumnAndRow(5, $row)->getValue();
         
                    $InvDate = date('Y-m-d',PHPExcel_Shared_Date::ExcelToPHP($tanggal));
                    
                    //$InvDate = date($format, PHPExcel_Shared_Date::ExcelToPHP($tanggal)); 
        
					$temp_data[] = array(
                        'jwl_nip_penggungah'=> $this->session->userdata('nip'),
						'jwl_periode'=> $periode,
                        'jwl_nip_pelayan'	=> strtoupper($nip_pelayan),
                        'jwl_posisi'	=> strtoupper($posisi),
						'jwl_nama'	=> strtoupper($nama),
						'jwl_shift'	=> strtoupper($shift),
						'jwl_tanggal'	=> $InvDate
					); 	
				}
			}
			$this->load->model('insertjadwal');
			$insert = $this->insertjadwal->insert($temp_data);

            $exp_username = explode(".", $this->session->userdata('username'));
            $nama_pengunggah = $exp_username[0] . " " . $exp_username[1];  

            $data_users = array(
                'hjdw_id' => NULL,
                'hjdw_nip' => $this->session->userdata('nip'),
                'hjdw_name' => $nama_pengunggah,
                //'hjdw_jabatan' => 'SEKRETARIS',
                'hjdw_periode' => $periode,  
                'hjdw_status' => 'TERUPLOAD',
                'hjdw_timestamp' => (string)date("Y-m-d H:i:s")
            );
            $insert_history = $this->insertjadwal->inserthistoryupload($data_users);
			
			if($insert){
				//$hapus_jadwal_kosong = $this->insertjadwal->hapusjadwalkosong();  //fungsi untuk delete field kosong
				$res['status'] = "SUCCESS";
	            $res['message'] = "Berhasil Insert jadwal baru !";
			}else{
				$res['status'] = "ERROR";
	            $res['message'] = "Gagal insert jadwal baru !";
			}
		}else
        {
            $res['status'] = "ERROR";
	        $res['message'] = "Tidak ada File yang masuk !";
		}
        echo json_encode($res);
	}

}