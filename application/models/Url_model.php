<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Url_model extends CI_Model {
	
	public function add_url( $url ) {

		$data = array(
			'url'		=> (string) $url,
			'alias'		=> $this->randomNum(5),
			'created'	=> date('Y-m-d H:i:s'),
		);
		 
		// inserts the data into database
		$this->db->insert('urls', $data);
		
		// return this ID of the new inserted record
		return $this->db->insert_id();
	}
	
	
	public function get_url_by_id( $id ) {
		$this->db->select('*');
		$this->db->from('urls');
		$this->db->where('id', (int) $id);
		$result = $this->db->get()->row_object();
		return $result;
	}
	
	
	public function get_url( $alias ) {
		$this->db->select('*');
		$this->db->from('urls');
		$this->db->where('alias', (string) $alias);
		$result = $this->db->get()->row_object();
		return $result;
	}

	function randomNum($size) {
		$alpha_key = '';
		$keys = range('a', 'z');
		
		for ($i = 0; $i < 4; $i++) {
			$alpha_key .= $keys[array_rand($keys)];
		}
		
		$length = $size - 2;
		
		$key = '';
		$keys = range(0, 9);
		
		for ($i = 0; $i < $length; $i++) {
			$key .= $keys[array_rand($keys)];
		}
		
		return $alpha_key . $key;
	}

}

?>