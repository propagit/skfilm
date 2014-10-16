<?php
class Content_model extends CI_Model {
	function __construct() {
		parent::__construct();
	}
	function add($data) {
		$this->db->insert('pages',$data);
		return $this->db->insert_id();
	}
	function id($id) {
		$this->db->where('id',$id);
		$query = $this->db->get('pages');
		return $query->first_row('array');
	}
	function update($id,$data) {
		$this->db->where('id',$id);
		return $this->db->update('pages',$data);
	}
	function updatemenu($id,$data) {
		$this->db->where('id',$id);
		return $this->db->update('categories',$data);
	}
	
	function delete($id) {
		$this->db->where('page_id',$id);
		$this->db->delete('pages_menus');
		
		$this->db->where('page_id',$id);
		$this->db->delete('pages_staffs');
	
		$this->db->where('id',$id);
		$this->db->delete('pages');		
	}
	function get_page_menu($id)
	{
		$this->db->where('page_id',$id);
		$query = $this->db->get('pages_menus');
		return $query->first_row('array');
	}
	function clear($category_id) {
		$this->db->where('category_id',$category_id);
		$this->db->delete('pages');
	}
	function get($category_id) {
		$this->db->where('category_id',$category_id);
		$this->db->order_by('title','asc');
		$query = $this->db->get('pages');
		return $query->result_array();
	}
	function search($category_id) {
		$this->db->where('category_id',$category_id);
		$this->db->order_by('title','asc');
		$query = $this->db->get('pages');
		return $query->result_array();
	}
	function lookup_total($keyword) {
		$sql = "SELECT * FROM `pages` WHERE `status` < 6
				AND `content` LIKE '%$keyword%'";
		$query = $this->db->query($sql);
		return $query->num_rows();
	}
	function lookup($row,$keyword) {
		$sql = "SELECT * FROM `pages` WHERE `status` < 6
				AND `content` LIKE '%$keyword%' LIMIT $row,10";
		$query = $this->db->query($sql);
		return $query->result_array();
	}
	function add_staff($data) {
		$this->db->insert('pages_staffs',$data);
		return $this->db->insert_id();
	}
	function add_menu($data) {
		$this->db->insert('pages_menus',$data);
		return $this->db->insert_id();
	}
	function update_staff($id,$data) {
		$this->db->where('id',$id);
		return $this->db->update('pages_staffs',$data);
	}
	function update_menu($id,$data) {
		$this->db->where('id',$id);
		return $this->db->update('pages_menus',$data);
	}
	function check_staff($page_id,$staff_id) {
		$this->db->where('page_id',$page_id);
		$this->db->where('staff_id',$staff_id);
		$query = $this->db->get('pages_staffs');
		if ($query->num_rows() > 0) {
			return true;
		}
		return false;
	}
	function check_menu($page_id,$menu_id) {
		$this->db->where('page_id',$page_id);
		$this->db->where('menu_id',$menu_id);
		$query = $this->db->get('pages_menus');
		if ($query->num_rows() > 0) {
			return true;
		}
		return false;
	}
	function get_staffs($page_id) {
		$sql = "SELECT `staffs`.* FROM `staffs`,`pages_staffs`
				WHERE `pages_staffs`.`page_id` = $page_id
				AND `pages_staffs`.`staff_id` = `staffs`.`id`
				ORDER BY `pages_staffs`.`order` ASC";
		$query = $this->db->query($sql);
		return $query->result_array();
	}
	function get_menus($page_id) {
		$sql = "SELECT `menus`.* FROM `menus`,`pages_menus`
				WHERE `pages_menus`.`page_id` = $page_id
				AND `pages_menus`.`menu_id` = `menus`.`id`
				ORDER BY `pages_menus`.`order` ASC";
		$query = $this->db->query($sql);
		return $query->result_array();
	}
	function delete_menu($page_id,$menu_id) {
		$this->db->where('page_id',$page_id);
		$this->db->where('menu_id',$menu_id);
		return $this->db->delete('pages_menus');
	}
	function delete_staff($page_id,$staff_id) {
		$this->db->where('page_id',$page_id);
		$this->db->where('staff_id',$staff_id);
		return $this->db->delete('pages_staffs');
	}
	function add_category($data) {
		$this->db->insert('categories',$data);
		return $this->db->insert_id();
	}
	function delete_category($id) {
		$this->db->where('id',$id);
		$this->db->delete('categories');
	}
	function get_category($id) {
		$this->db->where('id',$id);
		$query = $this->db->get('categories');
		return $query->first_row('array');
	}
	function get_categories() {
		$this->db->where('parent_id',0);
//		$this->db->where('location_id',$location_id);
		$this->db->order_by('id','asc');
		$query = $this->db->get('categories');
		return $query->result_array();
	}
	function root_categories() {
		$this->db->where('parent_id',0);
		$this->db->order_by('name','asc');
		$query = $this->db->get('categories');
		return $query->result_array();
	}
	function sub_categories($parent_id) {
		$this->db->where('parent_id',$parent_id);
		$this->db->order_by('name','asc');
		$query = $this->db->get('categories');
		return $query->result_array();
	}
	
	function get_services() {
		$this->db->order_by('id','asc');
		$query = $this->db->get('services');
		return $query->result_array();
	}
	function get_locations() {
		$this->db->order_by('id','asc');
		$query = $this->db->get('locations');
		return $query->result_array();
	}
	function get_location($id) {
		$this->db->where('id',$id);
		$query = $this->db->get('locations');
		return $query->first_row('array');
	}
	function add_news($data) {
		$this->db->insert('news',$data);
		return $this->db->insert_id();
	}
	function update_news($id,$data) {
		$this->db->where('id',$id);
		$this->db->update('news',$data);
	}
	function delete_news($id) {
		$this->db->where('id',$id);
		$this->db->delete('news');
	}
	function get_news() {
		$this->db->order_by('order','asc');
		$query = $this->db->get('news');
		return $query->result_array();
	}
	function get_published_news() {
		$this->db->where('published',1);
		$this->db->order_by('order','asc');
		$query = $this->db->get('news');
		return $query->result_array();
	}
	
	function meta($title) {
		$title = trim($title);
		$title = str_replace(' / ','-',$title);
		$title = str_replace("'",'',$title);
		$title = str_replace('"','',$title);
		$title = str_replace(' - ','-',$title);
		return str_replace(' ','-',$title);
	}
	
	function track_link($link_id) {
		$this->db->where('id',$link_id);
		$query = $this->db->get('links');
		$link = $query->first_row('array');
		
		$data = array(
			'page_id' => 1,
			'category_id' => 1,
			'location_id' => 0
		);
		if ($link['url'] != '#') {
			$seg = explode('/',$link['url']);
			if (count($seg) > 1 && is_numeric($seg[0])) {
				$page_id = $seg[0];
				$data['page_id'] = $page_id;
				
				$this->db->where('id',$page_id);
				$query = $this->db->get('pages');
				$page = $query->first_row('array');
				if($page) {
					$category_id = $page['category_id'];
					$data['category_id'] = $category_id;
					
					$this->db->where('id',$category_id);
					$query = $this->db->get('categories');
					$category = $query->first_row('array');
					if($category) {
						$location_id = $category['location_id'];
						$data['location_id'] = $location_id;
					}				
				}
			}			
		}
		return $data;
	}
	
	function track_menu($menu_id) {
		$this->db->where('id',$menu_id);
		$query = $this->db->get('menus');
		$menu = $query->first_row('array');
		
		$data = array(
			'page_id' => 1,
			'category_id' => 1,
			'location_id' => 0
		);
		if ($menu['url'] != '') {
			$seg = explode('/',$menu['url']);
			if (count($seg) > 1 && is_numeric($seg[0])) {
				$page_id = $seg[0];
				$data['page_id'] = $page_id;
				
				$this->db->where('id',$page_id);
				$query = $this->db->get('pages');
				$page = $query->first_row('array');
				if($page) {
					$category_id = $page['category_id'];
					$data['category_id'] = $category_id;
					
					$this->db->where('id',$category_id);
					$query = $this->db->get('categories');
					$category = $query->first_row('array');
					if($category) {
						$location_id = $category['location_id'];
						$data['location_id'] = $location_id;
					}				
				}
			}			
		}
		return $data;
	}
}
?>