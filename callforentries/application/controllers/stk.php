<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Stk extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Menu_model');
		$this->load->model('Film_model');
		$this->load->model('Content_model');
		$this->load->model('News_sticker_model');
	}
	
	function index() {
		$data['page'] = array('title' => 'Home');
		$data['news'] = $this->Content_model->id(36);
		$data['video'] = $this->Content_model->id(37);
		$data['links'] = $this->Menu_model->get_links(1,0);
		$data['dates'] = $this->Film_model->get_dates();
		$data['genres'] = $this->Film_model->get_genres();
		$data['all']=$this->News_sticker_model->get();
		$this->load->view('stk/common/header',$data);
		$this->load->view('stk/home');
		$this->load->view('stk/common/footer');
	}
	
	function text1column() {
		$data['page'] = array('title' => 'Home');
		$data['news'] = $this->Content_model->id(36);
		$data['video'] = $this->Content_model->id(37);
		$data['links'] = $this->Menu_model->get_links(1,0);
		$data['dates'] = $this->Film_model->get_dates();
		$data['genres'] = $this->Film_model->get_genres();
		$data['all']=$this->News_sticker_model->get();
		$this->load->view('stk/common/header',$data);
		$this->load->view('stk/text1column');
		$this->load->view('stk/common/footer');
	}
	
	function text1column_w_image() {
		$data['page'] = array('title' => 'Home');
		$data['news'] = $this->Content_model->id(36);
		$data['video'] = $this->Content_model->id(37);
		$data['links'] = $this->Menu_model->get_links(1,0);
		$data['dates'] = $this->Film_model->get_dates();
		$data['genres'] = $this->Film_model->get_genres();
		$data['all']=$this->News_sticker_model->get();
		$this->load->view('stk/common/header',$data);
		$this->load->view('stk/text1column_w_image');
		$this->load->view('stk/common/footer');
	}
	
	function text2column() {
		$data['page'] = array('title' => 'Home');
		$data['news'] = $this->Content_model->id(36);
		$data['video'] = $this->Content_model->id(37);
		$data['links'] = $this->Menu_model->get_links(1,0);
		$data['dates'] = $this->Film_model->get_dates();
		$data['genres'] = $this->Film_model->get_genres();
		$data['all']=$this->News_sticker_model->get();
		$this->load->view('stk/common/header',$data);
		$this->load->view('stk/text2column');
		$this->load->view('stk/common/footer');
	}
	
	function text2column_w_image() {
		$data['page'] = array('title' => 'Home');
		$data['news'] = $this->Content_model->id(36);
		$data['video'] = $this->Content_model->id(37);
		$data['links'] = $this->Menu_model->get_links(1,0);
		$data['dates'] = $this->Film_model->get_dates();
		$data['genres'] = $this->Film_model->get_genres();
		$data['all']=$this->News_sticker_model->get();
		$this->load->view('stk/common/header',$data);
		$this->load->view('stk/text2column_w_image');
		$this->load->view('stk/common/footer');
	}
	
	function page($id="") {
		$data['links'] = $this->Menu_model->get_links(1,0);
		$data['dates'] = $this->Film_model->get_dates();
		$data['genres'] = $this->Film_model->get_genres();
		$id = mysql_real_escape_string($id);
		$valid = TRUE;
		$page = NULL;
		if(!is_numeric($id))
		{
			$valid = FALSE;
			
		}
		else
		{
			
		   $page = $this->Content_model->id($id);
		   $data['page'] = $page;
		   $data['films'] = $this->Content_model->get_films($id);
		}
	
		if($page == NULL || !$valid)
		{
			#$this->load->view('stk/common/header-notfound',$data);
			$this->load->view('stk/common/header',$data);
		}
		else
		{
		$this->load->view('stk/common/header',$data);
		}
		if($page == NULL || !$valid)
		{
			$this->load->view('stk/page-notfound');
		}
		else if($id == 70)
		{
			$this->load->view('stk/sound',$data);
		}
		else if($id == 71)
		{
			$this->load->view('stk/shortfilm',$data);
		}
		else
		{
		    $this->load->view('stk/page',$data);
		}
		$this->load->view('stk/common/footer');
	}
	function vippack() {
		$data['page'] = array('title' => 'Festival VIP Pack');
		$data['links'] = $this->Menu_model->get_links(1,0);
		$data['dates'] = $this->Film_model->get_dates();
		$data['genres'] = $this->Film_model->get_genres();
		$this->load->view('stk/common/header',$data);
		$this->load->view('stk/vippack',$data);
		$this->load->view('stk/common/footer');
	}
	function enter() {
		if (!isset($_POST['name']) || !isset($_POST['mobile']) || !isset($_POST['email'])) {
			redirect('');
		}
		$name = trim($_POST['name']);
		$mobile = trim($_POST['mobile']);
		$email = trim($_POST['email']);
		$valid = true;
		if ($name == "") { 
			$this->session->set_flashdata('error_name','Please enter your name'); 
			$valid = false; 
		} else { $this->session->set_userdata('vip_name',$name); }
		if ($mobile == "") { 
			$this->session->set_flashdata('error_mobile','Please enter your mobile number'); 
			$valid = false;
		} else { $this->session->set_userdata('vip_mobile',$mobile); }
		if ($email == "") {
			$this->session->set_flashdata('error_email','Please enter an email address');
			$valid = false;
		} else {
			$this->load->helper('email');
			if (!valid_email($email)) {
				$this->session->set_flashdata('error_email','Please enter a valid email address');
				$valid = false;
			} else { $this->session->set_userdata('vip_email',$email); }
		}
		if (!$valid) {
			redirect('VIP-pack');
		} else {
			$subscribe_stkilda = 0;
			if (isset($_POST['subscribe_stkilda'])) { $subscribe_stkilda = 1; }
			$subscribe_pepe = 0;
			if (isset($_POST['subscribe_pepe'])) { $subscribe_pepe = 1; }
			$subscribe_crumpler = 0;
			if (isset($_POST['subscribe_crumpler'])) { $subscribe_crumpler = 1; }
			$data = array(
				'name' => $name,
				'mobile' => $mobile,
				'email' => $email,
				'subscribe_stkilda' => $subscribe_stkilda,
				'subscribe_pepe' => $subscribe_pepe,
				'subscribe_crumpler' => $subscribe_crumpler
			);
			$vip = $this->Content_model->search_vip($email);
			if ($vip) {
				$this->Content_model->update_vip($vip['id'],$data);
			} else {
				$this->Content_model->add_vip($data);
			}
			$this->session->set_flashdata('enter_ok',true);
			$this->session->unset_userdata('vip_name');
			$this->session->unset_userdata('vip_mobile');
			$this->session->unset_userdata('vip_email');
			redirect('VIP-pack');
		}
	}
	function advancesearch($option="",$option_id="") {
		if ($option == "australian-top-100:a-z") {
			$this->session->unset_userdata('keyword');
			$this->session->unset_userdata('date');
			$this->session->set_userdata('type',3);
			$this->session->unset_userdata('genre');
			$this->session->set_userdata('sort','title');			
		} else if ($option == "session") {
			$this->session->unset_userdata('keyword');
			$this->session->unset_userdata('date');
			$this->session->set_userdata('type',3);
			$this->session->unset_userdata('genre');
			$this->session->set_userdata('sort','order');
			$this->session->set_userdata('session',$option_id);
		} else if ($option == "soundkilda") {
			$this->session->unset_userdata('keyword');
			$this->session->unset_userdata('date');
			$this->session->set_userdata('type',2);
			$this->session->unset_userdata('genre');
			$this->session->set_userdata('sort','order');
			$this->session->unset_userdata('session');
		} else if ($option == "day") {
			$this->session->unset_userdata('keyword');
			$this->session->set_userdata('date','2010-05-'.$option_id);
			$this->session->set_userdata('type',0);
			$this->session->unset_userdata('genre');
			$this->session->set_userdata('sort','title');
			$this->session->unset_userdata('session');
		}
		redirect('search');
	}
	
	function search($row="") {
		$data['page'] = array('title' => 'Search'); 
		$data['links'] = $this->Menu_model->get_links(1,0);
		$keyword = '';
		$date = '';
		$type = 0;
		$genre = 0;
		$session = '';
		$sort = $this->session->userdata('sort');
		if (isset($_POST['keyword'])) {
			$keyword = $_POST['keyword'];		
			$this->session->set_userdata('keyword',$keyword);
			$this->session->unset_userdata('session');
			$sort = "";
		}
		if (isset($_POST['date'])) {
			$date = $_POST['date'];
			$this->session->set_userdata('date',$date);
		}
		if (isset($_POST['type'])) {
			$type = $_POST['type'];
			$this->session->set_userdata('type',$type);
		}
		if (isset($_POST['genre'])) {
			$genre = $_POST['genre'];
			$this->session->set_userdata('genre',$genre);
		}
		$keyword = $this->session->userdata('keyword');
		$date = $this->session->userdata('date');
		$type = $this->session->userdata('type');
		$genre = $this->session->userdata('genre');
		$session = $this->session->userdata('session');
		$total = $this->Film_model->search_count($keyword,$type,$date,$genre,$session);
		$this->load->library('pagination');
		$config['base_url'] = base_url().'search/';
		$config['total_rows'] = $total;
		$config['per_page'] = 5;
		$config['num_links'] = 3;
		$config['uri_segment'] = 2;
		$config['cur_tag_open'] = '&nbsp;<span class="active">';
		$config['cur_tag_close'] = '</span>';
		$config['next_link'] = '&rang;';
		$config['prev_link'] = '&lang;';
		
		$this->pagination->initialize($config);
		if (!$session) {
			$data['pages'] = '<div class="pages">'.$this->pagination->create_links().'</div>';
			$data['heading'] = "Search<br />Result";
			$data['next'] = "";
			$data['previous'] = "";
			$data['heading2'] = "Film<br />Details";
		} else { 
			$data['pages'] = '<div class="address">The Palace George Cinemas<br />Cinema One</div>'; 
			$data['heading'] = "Competition<br />Session ".$session;
			if ($session == 1) {
				$data['previous'] = "";
			} else {				
				$data['previous'] = '<a href="'.base_url().'advancesearch/session/'.($session-1).'">Previous<br />Session</a>';
			}
			if ($session == 14) {
				$data['next'] = "";
			} else {
				$data['next'] = '<a href="'.base_url().'advancesearch/session/'.($session+1).'">Next<br />Session</a>';
			}
			$com_session = $this->Content_model->get_session($session);
			$data['heading2'] = $com_session['date'].'<br />'.$com_session['time'];
		}
		
		$data['films'] = $this->Film_model->search_row($keyword,$type,$date,$genre,$session,$row,$sort);
		#print var_dump($data['films']);
		#return;
		$data['dates'] = $this->Film_model->get_dates();
		$data['genres'] = $this->Film_model->get_genres();
		$this->load->view('stk/common/header',$data);
		$this->load->view('stk/search',$data);
		$this->load->view('stk/common/footer');
	}
	function details($id="") {
		$data['links'] = $this->Menu_model->get_links(1,0);
		$data['film'] = $this->Film_model->id('films',$id);
		
		$data['page'] = array('title' => $data['film']['title']);
		$data['sessions'] = $this->Film_model->get_sessions($id);
		$genres = $this->Film_model->get_film_genres($id); 
		$genre = '';
		if ($genres) {
			$genre = $genres[0]['name'];
			for($i=1;$i<count($genres);$i++) { 
				$genre .= ', '.$genres[$i]['name'];
			} 
		}
		$data['genre'] = $genre;
		$data['dates'] = $this->Film_model->get_dates();
		$data['genres'] = $this->Film_model->get_genres();
		$this->load->view('stk/common/header',$data);
		$this->load->view('stk/details',$data);
		$this->load->view('stk/common/footer');
	}
	function adredirect($banner_id) {
		$banner = $this->Content_model->get_banner($banner_id);
		$clicked = $banner['clicked'] + 1;
		$this->Content_model->update_banner($banner_id,array('clicked' => $clicked));
		redirect($banner['url']);
	}
	function subscribe() {
		$email = $_POST['email'];
		$this->load->helper('email');
		if (!valid_email($email)) {
			print 0;
		} else {
			$check = $this->Content_model->is_subscribed($email);
			if ($check) {
				if ($check['optout'] == 1) {
					$this->Content_model->update_subscribe($email,array('optout' => 0));
					print 1;
				} else {
					print 2;
				}
			} else {
				$this->Content_model->subscribe(array('email' => $email));
				print 1;
			}
		}
	}
	function submit_form2()
	{
		echo "aa";
			//exit;
	}
	function submit_form()
	{
		if($_POST['submit'] && $_POST['entry_form'])
		{
			
			//$post = $this->input->xss_clean($_POST);
			$post = $_POST;
			$message = 'A '.$_POST['entry_form'].' form has just been submitted<br/>';
			$submit = '';
			foreach($post as $name => $value) 
			{
				if($name != 'submit')
				{
				  // check if Genre is selected
				  if($name == 'Genre')
				  {
					  $genres = '';
					  foreach($_POST['Genre'] as $_id => $_label)
					  {
						  $genres .= $_label.'/';
					  }
					  $value = $genres;
				  }
				  if($name=='publicity')
				  {
				  	$value=str_replace(array('"'), " ", $value);
				  }
				  if($name=='sypnosis')
				  {
				  	$value=str_replace(array('"'), " ", $value);
				  }
                $message .= "<b>$name</b> : $value<br/>";
				$find = array("~",",","\n");
				$replace = array("-");
				$value = str_replace($find,$replace,$value);
				$submit .= $name."~";
				$submit .= $value."~";
				}
            }
			$this->load->library('email');	
			
            $config['charset'] = 'iso-8859-1';
            $config['wordwrap'] = TRUE;
            $config['mailtype'] = 'html';
            $this->email->initialize($config);
			$this->email->from('no-reply@stkildafilmfestival.com.au');
			$this->email->to('filmfest@portphillip.vic.gov.au');
			#$this->email->to('peteryo11@gmail.com');			
			$this->email->subject('2014 Entries Form at St Kilda Film Festival');
			$this->email->message($message);
			if(!$this->email->send())
			{
			 $this->session->set_flashdata('apply_message','Could not submit the application. Please try again.');
			}
			else
			{
			  $data = array(
							'content' => $submit,
							
							'date_time' =>  date('Y-m-d H:i:s')
							);
			   $this->session->set_userdata('entry_type',$_POST['entry_form']);
			   $this->session->set_userdata('payment_page','payment');
			  if($_POST['payment_option'] == 'credit card')
			  {
			   
			    if($_POST['entry_form'] == 'soundkilda')
			    {
			      $id = $this->Content_model->submit_soundkilda($data);
			      
				  $this->session->set_userdata('entry_type','soundkilda');
				  $this->session->set_userdata('entry_id',$id);
			    }
			    else if($_POST['entry_form'] == 'shortfilm')
			    {
				  $id = $this->Content_model->submit_shortfilm($data);  
				
				  $this->session->set_userdata('entry_type','shortfilm');
				  $this->session->set_userdata('entry_id',$id);
			     }
			     $payment = 'cc';
			  }
			  else
			  {
				  
				if($_POST['entry_form'] == 'soundkilda')
			    {
			      $id = $this->Content_model->submit_soundkilda($data);
			    
			    }
			    else if($_POST['entry_form'] == 'shortfilm')
			    {
				  $id = $this->Content_model->submit_shortfilm($data);  
				
			     }
				 $payment = 'cmo';
			  }
			 
			 
			}
			redirect('process-payment/'.$payment);
		}
	}
	function process_payment()
	{
		
		if($this->session->userdata('payment_page') != NULL)
		{
			$payment = $this->uri->segment(2);
			$data['links'] = $this->Menu_model->get_links(1,0);
		   $data['dates'] = $this->Film_model->get_dates();
		 $data['title'] = "Thank you for submitting your application for the 2012 St Kilda Film Festival.";
		
			if($payment == 'cc')
			{
			   if($this->session->userdata('entry_type') == 'soundkilda')
			   {
				      $data['page'] = $this->Content_model->id(70);
			    $entry = $this->Content_model->get_soundkilda($this->session->userdata('entry_id'));
			   }
			   else if($this->session->userdata('entry_type') == 'shortfilm')
			   {
				      $data['page'] = $this->Content_model->id(71);
				$entry = $this->Content_model->get_shortfilm($this->session->userdata('entry_id'));
		       }
			   $data['entry'] = $entry;
			   $this->load->view('stk/common/header',$data);
		       $this->load->view('stk/payment_form',$data);
		       $this->load->view('stk/common/footer');
			}
			else if($payment == 'cmo')
			{
				
				$this->load->view('stk/common/header',$data);
		       $this->load->view('stk/payment_form');
		       $this->load->view('stk/common/footer');
			}
		}
		else
		{
			if($this->session->userdata('entry_type') == 'soundkilda')
			{
				$page = 70;
			}
			if($this->session->userdata('entry_type') == 'shortfilm')
			{
				$page = 71;
			}
			redirect('page-'.$page);
		}
	}
	function payment_return()
	{
		//$this->config->set_item('enable_query_strings',TRUE);
		//$this->config->set_item('uri_protocol','REQUEST_URI');
		
		//$this->config->set_item('permitted_uri_chars','a-z 0-9~%.:_\-=&');
		//echo $this->config['uri_protocol'];
		//parse_str($_SERVER['QUERY_STRING']);
		$id = $this->input->get('id',TRUE);
		$form = $this->input->get('form',TRUE);
		$data['payment_number'] = $this->input->get('payment_number',TRUE);
		//$data['payment_number'] = $payment_number;
		if($form == 'shortfilm')
		{
		  if(is_numeric($id))
		  {
		   if($this->Content_model->update_shortfilm($id,$data))
		   {
			   echo $this->Content_model->update_shortfilm($id,$data);
			   print 'updated successfully';
		   }
		   else
		   {
			   print 'failed';
		   }
		  }
		  else
		  {
			  print 'invalid';
		  }
		}
		else if($form == 'soundkilda')
		{
		  if(is_numeric($id))
		  {
		    if($this->Content_model->update_soundkilda($id,$data))
			{
				 print 'updated successfully';
			}
			else
			{
				print 'failed';
			}
		  }
		  else
		  {
			  print 'invalid';
		  }
		}
		else
		{
			  print 'invalid';
		 }
		
	}
}
?>