<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data extends CI_Controller {
	function __construct(){
	parent::__construct();
	$this->load->model('MSudi');
	}
	public function DataAnggota()
	{	

		if($this->uri->segment(4)=='view')
		{
			$id_anggota=$this->uri->segment(3);
			$tampil=$this->MSudi->GetDataWhere('tbl_anggota','id_anggota',$id_anggota)->row();
			$data['detail']['id_anggota']= $tampil->id_anggota;

            		$data['detail']['nama']= $tampil->nama;
            		$data['detail']['alamat']= $tampil->alamat;
            		$data['detail']['kota']= $tampil->kota;
            		$data['detail']['no_telp']= $tampil->no_telp;
            		$data['detail']['tgl_lahir']= $tampil->tgl_lahir;
			$data['content']='VFormUpdateAnggota';
		}
		else
		{	
			$data['DataAnggota']=$this->MSudi->GetData('tbl_anggota');
			$data['content']='VAnggota';
		}


		$this->load->view('VBackend',$data);
	}


	public function VFormAddAnggota()
	{
		$data['content']='VFormAddAnggota';
		$this->load->view('VBackend',$data);
	}
	public function AddDataAnggota()
	{
		 $add['id_anggota']=$this->input->post('id_anggota');
         	 $add['nama']= $this->input->post('nama');
         	 $add['alamat']= $this->input->post('alamat');  
         	 $add['kota']= $this->input->post('kota');  
         	 $add['no_telp']= $this->input->post('no_telp'); 
         	 $add['tgl_lahir']= $this->input->post('tgl_lahir');   
        	 $this->MSudi->AddData('tbl_anggota',$add);
        	 redirect(site_url('Data/DataAnggota'));
	}



	public function UpdateDataAnggota()
	{
		 $id_anggota=$this->input->post('id_anggota');
		 $update['nama']= $this->input->post('nama');         	 
		 $update['alamat']= $this->input->post('alamat');
         	 $update['kota']= $this->input->post('kota');
         	 $update['no_telp']= $this->input->post('no_telp');
         	 $update['tgl_lahir']= $this->input->post('tgl_lahir');
             	 $this->MSudi->UpdateData('tbl_anggota','id_anggota',$id_anggota,$update);
		 redirect(site_url('Data/DataAnggota'));
	}



	public function DeleteDataAnggota()
	{
		 $id_anggota=$this->uri->segment('3');
        	 $this->MSudi->DeleteData('tbl_anggota','id_anggota',$id_anggota);
        	 redirect(site_url('Data/DataAnggota'));
	}

public function DataBuku()
	{	

		if($this->uri->segment(4)=='view')
		{
			$no_buku=$this->uri->segment(3);
			$tampil=$this->MSudi->GetDataWhere('tbl_buku','no_buku',$no_buku)->row();
			$data['detail']['no_buku']= $tampil->no_buku;
            		$data['detail']['judul']= $tampil->judul;
            		$data['detail']['pengarang']= $tampil->pengarang;
            		$data['detail']['tahun_terbit']= $tampil->tahun_terbit;
            		$data['detail']['jenis_buku']= $tampil->jenis_buku;
            		$data['detail']['status']= $tampil->status;
			$data['content']='VFormUpdateBuku';
		}
		else
		{	
			$data['DataBuku']=$this->MSudi->GetData('tbl_buku');
			$data['content']='VBuku';
		}


		$this->load->view('VBackend',$data);
	}


	public function VFormAddBuku()
	{
		$data['content']='VFormAddBuku';
		$this->load->view('VBackend',$data);
	}
	public function AddDataBuku()
	{
		 $add['no_buku']=$this->input->post('no_buku');
         	 $add['judul']= $this->input->post('judul');
         	 $add['pengarang']= $this->input->post('pengarang');  
         	 $add['tahun_terbit']= $this->input->post('tahun_terbit');  
         	 $add['jenis_buku']= $this->input->post('jenis_buku'); 
         	 $add['status']= $this->input->post('status');   
        	 $this->MSudi->AddData('tbl_buku',$add);
        	 redirect(site_url('Data/DataBuku'));
	}



	public function UpdateDataBuku()
	{
		 $no_buku=$this->input->post('no_buku');
		 $update['judul']= $this->input->post('judul');         	 
		 $update['pengarang']= $this->input->post('pengarang');
         	 $update['tahun_terbit']= $this->input->post('tahun_terbit');
         	 $update['jenis_buku']= $this->input->post('jenis_buku');
         	 $update['status']= $this->input->post('status');
             	 $this->MSudi->UpdateData('tbl_buku','no_buku',$no_buku,$update);
		 redirect(site_url('Data/DataBuku'));
	}



	public function DeleteDataBuku()
	{
		 $no_buku=$this->uri->segment('3');
        	 $this->MSudi->DeleteData('tbl_buku','no_buku',$no_buku);
        	 redirect(site_url('Data/DataBuku'));
	}

	public function DataPinjam()
	{	

		if($this->uri->segment(4)=='view')
		{
			$no_pinjam=$this->uri->segment(3);
			$tampil=$this->MSudi->GetDataWhere('tbl_pinjam','no_pinjam',$no_pinjam)->row();
			$data['detail']['no_pinjam']= $tampil->no_pinjam;
            		$data['detail']['id_anggota']= $tampil->id_anggota;
            		$data['detail']['no_buku']= $tampil->no_buku;
            		$data['detail']['tgl_pinjam']= $tampil->tgl_pinjam;
            		$data['detail']['tgl_kembali']= $tampil->tgl_kembali;
			$data['content']='VFormUpdatePinjam';
		}
		else
		{	
			$data['DataPinjam']=$this->MSudi->GetData('tbl_pinjam');
			$data['content']='VPinjam';
		}


		$this->load->view('VBackend',$data);
	}


	public function VFormAddPinjam()
	{
		$data['content']='VFormAddPinjam';
		$this->load->view('VBackend',$data);
	}
	public function AddDataPinjam()
	{
		 $add['no_pinjam']=$this->input->post('no_pinjam');
         	 $add['id_anggota']= $this->input->post('id_anggota');
         	 $add['no_buku']= $this->input->post('no_buku');  
         	 $add['tgl_pinjam']= $this->input->post('tgl_pinjam');  
         	 $add['tgl_kembali']= $this->input->post('tgl_kembali');    
        	 $this->MSudi->AddData('tbl_pinjam',$add);
        	 redirect(site_url('Data/DataPinjam'));
	}



	public function UpdateDataPinjam()
	{
		 $no_pinjam=$this->input->post('no_pinjam');
		 $update['id_anggota']= $this->input->post('id_anggota');         	 $update['no_buku']= $this->input->post('no_buku');
         	 $update['tgl_pinjam']= $this->input->post('tgl_pinjam');
         	 $update['tgl_kembali']= $this->input->post('tgl_kembali');
             	 $this->MSudi->UpdateData('tbl_pinjam','no_pinjam',$no_pinjam,$update);
		 redirect(site_url('Data/DataPinjam'));
	}



	public function DeleteDataPinjam()
	{
		 $no_pinjam=$this->uri->segment('3');
        	 $this->MSudi->DeleteData('tbl_pinjam','no_pinjam',$no_pinjam);
        	 redirect(site_url('Data/DataPinjam'));
	}
	public function Logout()
	{
		$this->load->library('session');
		$this->session->unset_userdata('Login');
		redirect(site_url('Login'));
	}

}
