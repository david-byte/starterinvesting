<?php 
defined('BASEPATH') or exit('Ação não permitida');

class Estado_model extends CI_Model
{
    public $table = 'estado';
    public $id = 'estado_id';
    public $order = 'ASC';

    public function __construct()
    {
        
        parent::__construct();

    }

    //get all
    public function get_all()
    {
        //seleciona todos os campos
        $this->db->select('estado.estado_id, estado.estado_nome, estado.estado_uf');
        $this->db->from($this->table);
        
        $this->db->order_by($this->id, $this->order);
        return $this->db->get()->result();

    }

    // get data by id
    function get_by_id($id)
    {
        $this->db->where($this->id, $id);
        return $this->db->get($this->table)->row();
    }
    
    // get total rows
    function total_rows() {
        $this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get data with limit
    function index_limit($limit, $start = 0) {
        $this->db->order_by($this->id, $this->order);
        $this->db->limit($limit, $start);
        return $this->db->get($this->table)->result();
    }

    // get search total rows
    public function search_total_rows($keyword = NULL)
    {
        $this->db->like('estado_id', $keyword);
        $this->db->or_like('estado_nome', $keyword);
        $this->db->or_like('estado_uf', $keyword);

        $this->db->form($this->table);
        return $this->db->count_all_results();
    }

    // insert data
    function insert($data)
    {
        $this->db->insert($this->table, $data);
        return $this->db->affected_rows();
    }

    // update data
    function update($id, $data)
    {
        $this->db->where($this->id, $id);
        $this->db->update($this->table, $data);
    }

    // delete data
    function delete($id)
    {

        
        $this->db->query("ALTER TABLE ".$this->table);
        $this->db->where($this->id, $id);
        
	if($this->db->delete($this->table)){
	return TRUE;
	    }else{
	return FALSE;
	    }
	$this->db->query("ALTER TABLE ".$this->table);
    }
}