<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DataBuku extends CI_Controller {
	function __construct(){
	parent::__construct();
	$this->load->model('MSudi');
	}
public function index()
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
			$data['content']='VBlank';
		}
		else
		{	
			$data['DataBuku']=$this->MSudi->GetData('tbl_buku');
			$data['content']='VDataBuku';
		}


		$this->load->view('VB',$data);
	}

	public function laporan()
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
			$data['content']='VBlank';
		}
		else
		{	
			$data['DataBuku']=$this->MSudi->GetData('tbl_buku');
			$data['content']='VDataBuku';
		}


		$this->load->view('VLaporan',$data);
	}

	public function LaporanPinjam()
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
			$data['content']='VBlank';
		}
		else
		{	
			$data['DataPinjam']=$this->MSudi->GetData('tbl_pinjam');
			$data['content']='VDataPinjam';
		}


		$this->load->view('VLappinjam',$data);
	}
}
