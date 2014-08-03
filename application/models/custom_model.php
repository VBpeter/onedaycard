<?php

class Custom_model extends CI_Model
{
	public function createPage($to, $from, $message ) 
	{
		$sql = "INSERT INTO love_pages(to, from_sender, message, created_at, updated_at)
				VALUES(?, ?, ?, NOW(), NOW())";
		$query = $this->db->query($sql, array($to, $from, $message));
		return $this->db->insert_id();
	}

	public function getPage($id)
	{
		$sql = "SELECT * FROM love_pages WHERE id=?";
		$query = $this->db->query($sql, array($id));
		return $query->result();
	}
}