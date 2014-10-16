<?php
class Film_model extends CI_Model {
	function __construct() {
		parent::__construct();
	}
	function add($table,$data) {
		$this->db->insert($table,$data);
		return $this->db->insert_id();
	}
	function update($table,$id,$data) {
		$this->db->where('id',$id);
		return $this->db->update($table,$data);
	}
	function id($table,$id) {
		$this->db->where('id',$id);
		$query = $this->db->get($table);
		return $query->first_row('array');
	}
	function search_count($keyword,$type,$date,$genre,$session) {
		$sql = "SELECT `films`.*
				FROM `films`,`films_sessions`";
		if ($type != 2) {
			$sql .= ",`films_genres`";
		}
		$sql .= " WHERE `films`.`published` = 1			
				AND `films`.`id` = `films_sessions`.`film_id`";
		if ($type != 2) {
			$sql .= " AND `films`.`id` = `films_genres`.`film_id`";
		}
		if ($keyword != "") {
			$sql .= " AND (`films`.`title` LIKE '%$keyword%' OR `films`.`director` LIKE '%$keyword%' OR `films`.`producer` LIKE '%$keyword%' OR `films`.`artist` LIKE '%$keyword%')";
		}
		if ($genre != 0) {
			$sql .= " AND `films_genres`.`genre_id` = $genre";
		}
		if ($date != "") {
			$sql .= " AND `films_sessions`.`time` LIKE '$date%'";
		}
		if ($type != 0) {
			$sql .= " AND `films`.`type` = $type";
		}
		if ($session) {
			$sql .= " AND `films`.`competition_session` = $session";
		}
		$query = $this->db->query($sql);
		return $query->num_rows();
	}
	function search_row($keyword,$type,$date,$genre,$session,$row,$sort) {
		$sql = "SELECT `films`.*
				FROM `films`,`films_sessions`";
		if ($type != 2) {
			$sql .= ",`films_genres`";
		}
		$sql .= " WHERE `films`.`published` = 1			
				AND `films`.`id` = `films_sessions`.`film_id`";
		if ($type != 2 && $type != 0) {
			$sql .= " AND `films`.`id` = `films_genres`.`film_id`";
		}
		if ($keyword != "") {
			$sql .= " AND (`films`.`title` LIKE '%$keyword%' OR `films`.`director` LIKE '%$keyword%' OR `films`.`producer` LIKE '%$keyword%' OR `films`.`artist` LIKE '%$keyword%')";
		}
		if ($genre != 0 && $type != 2) {
			$sql .= " AND `films_genres`.`genre_id` = $genre";
		}
		if ($date != "") {
			$sql .= " AND `films_sessions`.`time` LIKE '$date%'";
		}
		if ($type != 0) {
			$sql .= " AND `films`.`type` = $type";
		}
		if ($session) {
			$sql .= " AND `films`.`competition_session` = $session";
		}
		$sql .=  " GROUP BY `films`.`id`";
		if ($sort == "title") {
			$sql .= " ORDER BY `films`.`title` ASC";
		} else if ($sort == "order") {
			$sql .= " ORDER BY `films`.`order` ASC";
		}
		if (!$session) {
			if ($row != "") { $sql .= " LIMIT $row,5"; }
			else { $sql .= " LIMIT 5"; }
		}
		$query = $this->db->query($sql);
		#return $sql;
		return $query->result_array();
	}
	
	function search_total($keyword,$type) {
		if ($keyword != '') {
			$this->db->like('title',$keyword);
		}
		if ($type != '0') {
			$this->db->where('type',$type);
		}
		$query = $this->db->get('films');
		return $query->result_array();
	}
	function search_in_rows($keyword,$type,$row) {
		if ($keyword != '') {
			$this->db->like('title',$keyword);
		}
		if ($type != '0') {
			$this->db->where('type',$type);
		}
		$this->db->order_by('title','asc');
		$query = $this->db->get('films',10,$row);
		return $query->result_array();
	}
	function delete($table,$id) {
		$this->db->where('id',$id);
		return $this->db->delete($table);
	}
	function get_genres() {
		$this->db->order_by('id','asc');
		$query = $this->db->get('genres');
		return $query->result_array();
	}
	function get_film_genres($film_id) {
		$sql = "SELECT `genres`.`name` 
				FROM `genres`,`films_genres`
				WHERE `films_genres`.`film_id` = $film_id
				AND `films_genres`.`genre_id` = `genres`.`id`
				ORDER BY `genres`.`name` ASC";
		$query = $this->db->query($sql);
		return $query->result_array();
	}
	function check_genre($film_id,$genre_id) {
		$this->db->where('film_id',$film_id);
		$this->db->where('genre_id',$genre_id);
		$query = $this->db->get('films_genres');
		if ($query->num_rows() > 0) {
			return true;
		}
		return false;
	}
	function reset_genres($film_id) {
		$this->db->where('film_id',$film_id);
		return $this->db->delete('films_genres');
	}
	function get_dates() {
		$this->db->order_by('id','asc');
		$query = $this->db->get('dates');
		return $query->result_array();
	}
	function get_venues() {
		$this->db->order_by('id','asc');
		$query = $this->db->get('venues');
		return $query->result_array();
	}
	function get_sessions($film_id) {
		$this->db->where('film_id',$film_id);
		$query = $this->db->get('films_sessions');
		return $query->result_array();
	}
	function reset_sessions($film_id) {
		$this->db->where('film_id',$film_id);
		return $this->db->delete('films_sessions');
	}
}
?>