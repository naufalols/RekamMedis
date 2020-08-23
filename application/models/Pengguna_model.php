<?php

/**
 * 
 */
class Pengguna_model extends CI_Model
{
	var $table = 'rekam_medis'; //nama tabel dari database
	var $column_order = array(null, 'nomor_rm', 'nama', 'alamat', 'pekerjaan', 'dusun', 'kelurahan'); //field yang ada di table user
	var $column_search = array('nomor_rm', 'nama', 'alamat', 'dusun', 'kelurahan'); //field yang diizin untuk pencarian 
	var $order = array('nomor_rm' => 'asc'); // default order 

	function __construct()
	{
		parent::__construct();
	}

	public function getAllRM()
	{
		$this->datatables->select('nomor_rm,nama,alamat,pekerjaan,tanggal_buat');
		$this->datatables->from('rekam_medis');
		$this->datatables->add_column('view', '<a href="javascript:void(0);" class="edit_record btn btn-info btn-xs" data-kode="$1" data-nama="$2" data-harga="$3" data-kategori="$4">Edit</a>  <a href="javascript:void(0);" class="hapus_record btn btn-danger btn-xs" data-kode="$1">Hapus</a>', 'barang_kode,barang_nama,barang_harga,kategori_id,kategori_nama');
		return $this->datatables->generate();
	}

	private function _get_datatables_query()
	{

		$this->db->from($this->table);

		$i = 0;

		foreach ($this->column_search as $item) // looping awal
		{
			if ($_POST['search']['value']) // jika datatable mengirimkan pencarian dengan metode POST
			{

				if ($i === 0) // looping awal
				{
					$this->db->group_start();
					$this->db->like($item, $_POST['search']['value']);
				} else {
					$this->db->or_like($item, $_POST['search']['value']);
				}

				if (count($this->column_search) - 1 == $i)
					$this->db->group_end();
			}
			$i++;
		}

		if (isset($_POST['order'])) {
			$this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
		} else if (isset($this->order)) {
			$order = $this->order;
			$this->db->order_by(key($order), $order[key($order)]);
		}
	}

	function get_datatables()
	{
		$this->_get_datatables_query();
		if ($_POST['length'] != -1)
			$this->db->limit($_POST['length'], $_POST['start']);
		$query = $this->db->get();
		return $query->result();
	}

	function count_filtered()
	{
		$this->_get_datatables_query();
		$query = $this->db->get();
		return $query->num_rows();
	}

	public function count_all()
	{
		$this->db->from($this->table);
		return $this->db->count_all_results();
	}
}
