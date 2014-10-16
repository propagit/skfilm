
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="<?=base_url()?>css/stk.css"> 
<link href='http://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Karla' rel='stylesheet' type='text/css'>
<!--[if IE]>
<link rel='stylesheet' type='text/css' href='<?=base_url()?>css/iefixed.css' />
<![endif]--> 
<!--<script type="text/javascript" src="<?=base_url()?>js/jquery.js"></script>-->
<script type="text/javascript" src="<?=base_url()?>js/jquery-1.8.1.js"></script>
<title>St Kilda Film &middot; <? if(isset($page)) { echo $page['title'];} else if(isset($title)) { echo $title;}?></title>
<script>
$(function() { 
	hidegenre();
});
/*function expand(id) {
	$j('[id^=link-]').removeClass('current');
	$j('[id^=submenu-]').slideUp();
	$j('#link-' + id).addClass('current');
	$j('#submenu-' + id).slideDown();
}
function hide() {
	$j('[id^=link-]').removeClass('current');
	$j('[id^=submenu-]').slideUp();
}*/
function hidegenre() {
	var check = $('#soundcheck').attr('checked');
	if (check == true) {
		$('#genre').val(0);
		$('#genre').attr('disabled',true);
	} else {
		$('#genre').attr('disabled',false);
	}
}
function subscribe1()
		{
			var email = $('#email').val();
			$.ajax({
			url: '<?=base_url()?>stk/subscribe',
			type: 'POST',
			data: ({email:email}),
			dataType: "html",
			success: function(html) {
				if(html == 0)
				{
					$('#result_sub').html('Please Insert a Valid Email Address');
					$('#result_sub').fadeIn().delay(2000).fadeOut();
					
				}
				if(html == 1)
				{
					$('#result_sub').html('Thank You For Registering');
					$('#result_sub').fadeIn().delay(2000).fadeOut();
				}
				if(html == 2)
				{
					$('#result_sub').html('Your Email Has Been Registered Before');
					$('#result_sub').fadeIn().delay(2000).fadeOut();
				}
			}
		})	
		}


</script>
</head>

<body>

<div id="pgwrap">
	<div id="leftcolheader">
    	
        <div id="menu1">
        	<ul>
            	<!--<li><a href="<?=base_url()?>page-108/australias-top-100-intro">Call For Entries</a></li>
                <li><a href="<?=base_url()?>page-108/australias-top-100-intro">Now Closed</a></li>-->
            <!--
			<?php foreach($links as $link) { 
				$child = $this->Menu_model->get_child_links($link['id']); 
				$current = '';
				if ($this->uri->segment(1).'/'.$this->uri->segment(2) == $link['url']) {
					$current = ' class="current"';
				}
				if (!$child) { ?>
            	<li><a href="<?=base_url()?><?=$link['url']?>"<?=$current?>><?=$link['name']?></a></li>
                <?php } else { 
				$display = ' class="hide"';
				foreach($child as $childlink) {
					if ($this->uri->segment(1).'/'.$this->uri->segment(2) == $childlink['url']) {
						$current = ' class="current"';
						$display = '';
					}
				}
				?>
                <li><a href="javascript:expand(<?=$link['id']?>)" id="link-<?=$link['id']?>"<?=$current?>><?=$link['name']?></a>
                	<ul id="submenu-<?=$link['id']?>"<?=$display?>>
                    <?php foreach($child as $link) { 
						$current = '';
						if ($this->uri->segment(1).'/'.$this->uri->segment(2) == $link['url']) {
							$current = ' class="current"';
						} 
					?>
                    	<li><a href="<?=base_url()?><?=$link['url']?>"<?=$current?>><?=$link['name']?></a></li>
                    <?php } ?>
                    </ul>
                </li>
                <?php } ?>
            <?php } ?>
            -->
            </ul>
        </div>
        
        <div id="menu">
        	<ul>
            	

			<?php 
				$i=0;
				foreach($links as $link) { 
				$child = $this->Menu_model->get_child_links($link['id']); 
				$current = '';
				if ($this->uri->segment(1).'/'.$this->uri->segment(2) == $link['url']) {
					//$current = ' class="current"';
				}
				if (!$child) { ?>
            	<li><a href="<?=base_url()?><?=$link['url']?>"<?=$current?>><?=$link['name']?></a></li>
                <?php } else { 
				
				foreach($child as $childlink) {
					if ($this->uri->segment(1).'/'.$this->uri->segment(2) == $childlink['url']) {
						//$current = ' class="current"';
						$display = '';
					}
				}$display = ' class="hide"';
				?>
                <!--onmouseover="javascript:expand(<?=$link['id']?>)"-->
                <li><a  href="#" id="link-<?=$link['id']?>"<?=$current?>><?=$link['name']?></a>
                <div id="submenu-<?=$link['id']?>"<?=$display?> style="position:absolute; color:#9a9a9a; width:250px; margin-left:215px; margin-top:<?=$i*-19;?>px; height:108px; border-left:2px solid #fff; padding-left:20px;">
                	<!--<ul style="position:absolute">-->
                    <?php
					 $cc=0;
					 foreach($child as $link) { $cc++;
						//$current = '';
						if ($this->uri->segment(1).'/'.$this->uri->segment(2) == $link['url']) {
							//$current = ' class="current"';
						} 
						
					?>
                    	<!--<li><a href="<?=base_url()?><?=$link['url']?>"<?=$current?>><?=$link['name']?></a></li>-->
                        <div
                        	<?php
								if($cc>6)
								{
									$mrg = ($cc-7) * 18.2;
									echo "style='position:absolute; margin-left:150px; margin-top:".$mrg."px'";
								}
                            ?>
                        >
                        <?php
							if($link['url'] == 'http://www.stkildafilmfestival.com.au/2014-s2/'){
						?>
                        <a href="<?=$link['url']?>"><?=$link['name']?></a></div>	
                        <?php
							}else{
						?>
                        <a href="<?=base_url()?><?=$link['url']?>"<?=$current?>><?=$link['name']?></a></div>
                        
                    <?php }} ?>
                    <!--</ul>-->
                </div>
                </li>
                <?php } ?>
            <?php $i++;} ?>

            </ul>
        </div>
    </div>
    
    <div id="rightcolheader">
    	<div id="header">
        	<a href="<?=base_url()?>"><div id="logo"></div></a>
            <!--
            <div id="follow">
            	<dl>
                	<a href="http://www.facebook.com/pages/St-Kilda-Film-Festival/56206594393"><dt><img src="<?=base_url()?>img/facebook.png" /></dt>
                	<dd>St Kilda Film Festival on <span>Facebook</span></dd></a>
                    <a href="http://twitter.com/stkildafilmfest">
                	<dt><img src="<?=base_url()?>img/twitter.png" /></dt>
                	<dd>Follow St Kilda Film Festival on <span>Twitter</span></dd></a>
                </dl>    
            </div>
            -->
        </div>
   </div>
    <div style="clear:both;"></div>
    <div id="main-content">
    <div id="leftcol">
    	<div id="content-leftcol">
    	<div id="timer_st" style="color:#fff; font-size:15px; font-weight:bold; border-top:2px solid #fff; padding-top:5px; border-bottom:2px solid #fff; padding-bottom:5px; width:150px">
        	000D 00H 00M 00S
        </div>
        <p class="p-leftcol">
        Until the <br />
        St Kilda Film<br />
        Festival starts<br />
        </p>
        <p class="p-leftcol" style="margin-top:30px;">
        <!--<a class="subscribe" >Subscribe</a>-->
        <script>
		
		</script>
        Subscribe
        <div style="width:190px; height:25px; background:#fff; border-radius:5px; margin-top:8px;">

        	<input type="text" id="email" style="border:none; height:19px; padding:3px; border-radius:5px; float:left; width:139px; font-family:quicksand"/>
            <input type="button" onclick="subscribe1();" style="border:none; float:right; padding-top:4px; padding-bottom:4px; padding-left:6px; padding-right:6px; background:#382451; color:#fff; border-radius:0 5px 5px 0 ; font-weight:bold; height:25px;" value="GO"/>

        </div>
        <div id="result_sub">
        	
        </div>
        </p>
        <a class="fbButtonLink" target="_blank" href="http://www.facebook.com/StKildaFilmFestival">Fb</a>
        <a class="twButtonLink" target="_blank" href="https://twitter.com/stkildafilmfest">Twitter</a>
        <a class="ytButtonLink" target="_blank" href="http://www.youtube.com/user/stkildafilmfest">Youtube</a>
        <a class="gmButtonLink" target="_blank" href="mailto:filmfest@portphillip.vic.gov.au">Gmail</a>
        <?php if(0){ ?>
        <!--<a class="blButtonLink" target="_blank" href="http://stkildafilmfestival.blogspot.com.au/">Blog</a>-->
      	<?php } ?>  
        </div>
    </div> 
    <script src="<?=base_url()?>js/countdown.js"></script>
    <?php
		$opening = $this->Menu_model->get_opening_date();
		$now = time(); // or your date as well
		$your_date = strtotime($opening['opening_date']);
		$y = date('Y',$your_date);
		$m = date('n',$your_date);
		$d = date('j',$your_date);
		$datediff = ($now - $your_date)*-1;
		//$bet = floor($datediff/(60*60*24)) + 1;

    ?>
    <script>
		$(function(){
	
		var note = $('#timer_st'),
			//ts = new Date(2013, 0, 1),
			ts = new Date(<?=$y?>, <?=$m?>, <?=$d?>) - 2592000000,
			newYear = true;
		
		if((new Date()) > ts){
			// The new year is here! Count towards something else.
			// Notice the *1000 at the end - time must be in milliseconds
			ts = (new Date()).getTime() - 2592000000;
			newYear = false;
		}
			
		$('#count_st').countdown({
			timestamp	: ts,
			callback	: function(days, hours, minutes, seconds){
				
				var message = "";
				//alert(hours.length);
				var d = days.toString();
				var h = hours.toString();
				var m = minutes.toString();
				var s = seconds.toString();
				if(d.length == 1) {d = "0" + d;}
				if(h.length == 1) {h = "0" + h;}
				if(m.length == 1) {m = "0" + m;}
				if(s.length == 1) {s = '0' + s;}
				
				message += d + "D " + h + "H " + m + "M " + s + "S";
				
				/*message += days + " day" + ( days==1 ? '':'s' ) + ", ";
				message += hours + " hour" + ( hours==1 ? '':'s' ) + ", ";
				message += minutes + " minute" + ( minutes==1 ? '':'s' ) + " and ";
				message += seconds + " second" + ( seconds==1 ? '':'s' ) + " <br />";
				
				if(newYear){
					message += "left until the new year!";
				}
				else {
					message += "left to 10 days from now!";
				}*/
				
				note.html(message);
			}
		});
		
	});

	</script>
    <div id="rightcol">