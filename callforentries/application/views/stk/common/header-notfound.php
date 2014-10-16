<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="<?=base_url()?>css/stk.css"> 
<!--[if IE]>
<link rel='stylesheet' type='text/css' href='<?=base_url()?>css/iefixed.css' />
<![endif]--> 
<script type="text/javascript" src="<?=base_url()?>js/jquery.js"></script>
<title>St Kilda Film &middot; Page not found</title>
<script> var $j = jQuery.noConflict(); </script>
<script>
$j(function() { 
	hidegenre();
});
function expand(id) {
	$j('[id^=link-]').removeClass('current');
	$j('[id^=submenu-]').slideUp();
	$j('#link-' + id).addClass('current');
	$j('#submenu-' + id).slideDown();
}
function hidegenre() {
	var check = $j('#soundcheck').attr('checked');
	if (check == true) {
		$j('#genre').val(0);
		$j('#genre').attr('disabled',true);
	} else {
		$j('#genre').attr('disabled',false);
	}
}
</script>
</head>

<body>

<div id="pgwrap">
	<div id="leftcol">
    	<a href="<?=base_url()?>"><div id="logo"></div></a>
        <div id="menu">
        	<ul>
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
            </ul>
        </div>
    </div>
    
    <div id="rightcol">
    	<div id="header">
        	<div id="follow">
            	<dl>
                	<a href="http://www.facebook.com/pages/St-Kilda-Film-Festival/56206594393"><dt><img src="<?=base_url()?>img/facebook.png" /></dt>
                	<dd>St Kilda Film Festival on <span>Facebook</span></dd></a>
                    <a href="http://twitter.com/stkildafilmfest">
                	<dt><img src="<?=base_url()?>img/twitter.png" /></dt>
                	<dd>Follow St Kilda Film Festival on <span>Twitter</span></dd></a>
                </dl>    
            </div>
        </div>