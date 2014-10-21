<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- jQuery -->
<script type="text/javascript" src="<?=base_url()?>js/jquery-1.10.2.js"></script>

<!--bootstrap 3.2.0 -->
<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/bootstrap/css/bootstrap.min.css"> 
<script type="text/javascript" src="<?=base_url()?>assets/bootstrap/js/bootstrap.min.js"></script>

<!--font-awesome 4.2.0 -->
<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/font-awesome/css/font-awesome.min.css"> 

<link rel="stylesheet" type="text/css" href="<?=base_url()?>css/stk.css"> 


<title>St Kilda Film &middot; <? if(isset($page)) { echo $page['title'];} else if(isset($title)) { echo $title;}?></title>
</head>

<body>

<div id="header-wrap">
    <div class="container">
        <div class="col-xs-12 logo-wrap">
            <a href="<?=base_url()?>" class="pull"><img src="<?=base_url();?>img/logo.png" alt="logo.png" title="Logo"></a>
        </div>
        
        <div class="col-xs-12 hidden-sm hidden-xs">
            <nav class="navbar stk-nav hidden-sm hidden-xs" role="navigation">
                  <ul class="nav navbar-nav">
                    <?php 
                        $i=0;
                        foreach($links as $link) {
							$active = ''; 
							# check if this is the current link
                            $child = $this->Menu_model->get_child_links($link['id']); 
							if ($this->uri->segment(1).'/'.$this->uri->segment(2) == $link['url']) {
								$active = 'active';
							}
                            if (!$child) { 
                    ?>
                                <li><a class="<?=$active;?>" href="<?=base_url()?><?=$link['url']?>"><?=$link['name']?></a></li>
                    <?php 
                            } else{
								# check active link
								foreach($child as $clink){
									if(base_url().$this->uri->uri_string() == base_url().$clink['url']){
										$active = 'active';
									}
								}
                    ?>
                                <li class="dropdown stk-nav-dd">
                                    <a href="#" class="dropdown-toggle <?=$active;?>" data-toggle="dropdown"><?=$link['name']?></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <?php
                                            foreach($child as $childlink) {	
												$sub_nav_active = '';
                                                if($childlink['url'] == 'http://www.stkildafilmfestival.com.au/2014-s2/'){	
                                        ?>
                                                    <li> <a href="<?=$childlink['url']?>"><?=$childlink['name']?></a></li>
                                        <?php
                                                }else{
													if(base_url().$this->uri->uri_string() == base_url().$childlink['url']){
														$sub_nav_active = 'sub_nav_active';
													}
                                        ?>
                                                    <li class="<?=$sub_nav_active;?>"><a href="<?=base_url()?><?=$childlink['url']?>"><?=$childlink['name']?></a></li>
                                        <?php	
                                                }
                                            } # foreach($child as ...)
                                        ?>
                                    </ul>
                                </li>
                    
                    <?php 			
                            } # if (!$child)
                        } # foreach($links as $link)
                    ?>		

                  </ul>
            </nav>
            
            
            
        </div>
        
        <!--mob nav-->
        <div class="col-xs-12 hidden-lg hidden-md">
        	<div class="stk-mob-nav">
                <button class="btn btn-navbar" data-target=".nav-collapse" data-toggle="collapse" type="button">
                   <i class="fa fa-align-justify"></i>
                </button>
                <div class="nav-collapse collapse push">
                    <ul class="nav">
                        <?php 
                            $i=0;
                            foreach($links as $link) {  
    							$active = ''; 
								# check if this is the current link
								$child = $this->Menu_model->get_child_links($link['id']); 
								if ($this->uri->segment(1).'/'.$this->uri->segment(2) == $link['url']) {
									$active = 'active';
								}
                                if (!$child) { 
                        ?>
                                    <li><a class="<?=$active;?>" href="<?=base_url()?><?=$link['url']?>"><?=$link['name']?></a></li>
                        <?php 
                                } else{ 
									# check active link
									foreach($child as $clink){
										if(base_url().$this->uri->uri_string() == base_url().$clink['url']){
											$active = 'active';
										}
									}
                                
                        ?>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle <?=$active;?>" data-toggle="dropdown"><?=$link['name']?></a>
                                        <ul class="dropdown-menu" role="menu">
                                            <?php
                                                foreach($child as $childlink) {	
													$sub_nav_active = '';
                                                    if($childlink['url'] == 'http://www.stkildafilmfestival.com.au/2014-s2/'){	
                                            ?>
                                                        <li> <a href="<?=$childlink['url']?>"><?=$childlink['name']?></a></li>
                                            <?php
                                                    }else{
														if(base_url().$this->uri->uri_string() == base_url().$childlink['url']){
															$sub_nav_active = 'sub_nav_active';
														}
                                            ?>
                                                        <li  class="<?=$sub_nav_active;?>"><a href="<?=base_url()?><?=$childlink['url']?>"><?=$childlink['name']?></a></li>
                                            <?php	
                                                    }
                                                } # foreach($child as ...)
                                            ?>
                                        </ul>
                                    </li>
                        
                        <?php 			
                                } # if (!$child)
                            } # foreach($links as $link)
                        ?>	                </ul>
                </div>
            
            </div><!--stk-mob-nav-->
            <div class="timer-wrap">
                <div class="timer_st timer">
                    000D 00H 00M 00S
                </div>
                <span class="mob-timer-label"> - Until St Kilda Film Festival starts</span>
            </div>
        </div>
        <!--end mob nav-->
    </div>
</div>
<?php
	/**
		Note - 
		
		All javascript functions such as subscribe1() are in the footer - views/stk/common/footer.php
	
	
	*/
?>
<div id="body-wrap">
	<div class="container">
    	<!-- left panel -->
		<div class="col-lg-3 col-md-3 hidden-sm hidden-xs">
        	<div id="leftcol">
                <div id="content-leftcol">
                    <div class="timer_st timer">
                        000D 00H 00M 00S
                    </div>
                    <p class="p-leftcol">
                        Until the <br />
                        St Kilda Film<br />
                        Festival starts<br />
                    </p>
                    <p class="p-leftcol" style="margin-top:30px;">
                        Subscribe
                        <div class="subscribe-box">
                            <input type="text" id="email" />
                            <input type="button" onclick="subscribe1('email');" value="GO"/>
                        </div>
                        <div class="result_sub">
                            
                        </div>
                    </p>
                    <div class="social-icons hidden-sm hidden-xs">
                        <a target="_blank" href="http://www.facebook.com/StKildaFilmFestival"><i class="fa fa-facebook"></i></a>
                        <a target="_blank" href="https://twitter.com/stkildafilmfest"><i class="fa fa-twitter"></i></a>
                        <a target="_blank" href="http://www.youtube.com/user/stkildafilmfest"><i class="fa fa-youtube"></i></a>
                        <a target="_blank" href="mailto:filmfest@portphillip.vic.gov.au"><i class="fa fa-envelope"></i></a>
                    </div>
                </div>
            </div>
        </div><!--col-*-3-->
		<!-- end left panel -->
        
        <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 pull">