<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Statistics_model extends CI_Model {
	
	
	function add_log( $url_id )
	{
		// build up data array
		$data = array(
			'url_id'		=> (int) $url_id,
			'created'	=> date('Y-m-d H:i:s'),
		);
		 
		// inserts the data into database
		$this->db->insert('statistics', $data);
		
		// return this ID of the new inserted record
		return $this->db->insert_id();
	}
	
	
	public function get_logs( $url_id )
	{
		$this->db->select( array('*', 'COUNT(id) AS sum') );
		$this->db->from('statistics');
		$this->db->where('url_id', (int) $url_id);
		$this->db->group_by('DATE_FORMAT(created, "%m-%y-%d")');
		$this->db->order_by('YEAR(created) ASC, MONTH(created) ASC, DAY(created) ASC');
		
		$result = $this->db->get()->result_object();

		// check if the requested record was found
		if (count($result) > 0) {
			return $result;
		} else {
			return FALSE;
		}
	}
	

}