<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cidade_model extends CI_Model
{

    public $table = 'cidade';
    public $id = 'cidade_id';
    public $order = 'ASC';

    function __construct()
    {
        parent::__construct();
    }

    // get all
    function get_all()
    {
    	//seleciona todas os campos
 $this->db->select('cidade.cidade_id,cidade.cidade_nome,estado.estado_uf as fk_uf');
		    $this->db->from($this->table);
$this->db->join('estado','estado.estado_id = cidade.fk_estado_id','Left');
$this->db->order_by('cidade_nome', $this->order);
            //echo $this->db->get_compiled_select();
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
    function search_total_rows($keyword = NULL) {
        $this->db->like('cidade_id', $keyword);
	$this->db->or_like('cidade_nome', $keyword);
	$this->db->or_like('fk_uf', $keyword);
	$this->db->from($this->table);
           return $this->db->count_all_results();
    }

    // get search data with limit
           function search_index_limit($limit, $start = 0, $keyword = NULL) {
           $this->db->order_by($this->id, $this->order);
           $this->db->like('cidade_id', $keyword);
	$this->db->or_like('cidade_nome', $keyword);
	$this->db->or_like('fk_uf', $keyword);
	$this->db->limit($limit, $start);
        return $this->db->get($this->table)->result();
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

/* End of file Cidade_model.php */
/* Location: ./application/models/Cidade_model.php */