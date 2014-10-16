<script type="text/javascript" src="<?=base_url()?>js/jquery.cycle.js"></script>
<script>
$(document).ready(function() {
    $('#addspace').cycle({
		fx: 'fade', // choose your transition type, ex: fade, scrollUp, shuffle, etc...
		timeout: 8000
	});
});
function subscribe() {
	var email = $('#email').val();
	$.ajax({
		url: '<?=base_url()?>subscribe',
		type: 'POST',
		data: ({email:email}),
		dataType: "html",
		success: function(html) {
			if (html == 0) {
				$('#submsg').css('color','#ff0000');
				$('#submsg').html('Please enter a valid email address');
				$('#submsg').slideDown();
			}
			if (html == 1) {
				$('#submsg').css('color','#008000');
				$('#submsg').html('You have subscribed successfully!');
				$('#submsg').slideDown();
			}
			if (html == 2) {
				$('#submsg').css('color','#000');
				$('#submsg').html('You have already subscribed!');
				$('#submsg').slideDown();
			}
		}
	})	
	
}
</script>
        
        <div id="addspace">
			<?php $banners = $this->Content_model->get_banners(); 
			foreach($banners as $banner) { 
				if (strstr($banner['name'],'.swf')) { ?>
                <div><object xcodebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab" height="110" width="260" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" >
            <param name="Movie" value="<?=base_url()?>uploads/banners/<?=$banner['name']?>" />
            <param name="allowFullScreen" value="true"/>
            <embed src="<?=base_url()?>uploads/banners/<?=$banner['name']?>" width="260" height="110" allowfullscreen="true"  type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" ></embed></object></div>
                <?php } else { ?>
            <div></div>
            <?php } 
			} ?>
            <!--<img src="<?=base_url()?>img/addspace.png" />-->
        </div>
        <div id="sponsor">
        	<a href="http://www.portphillip.vic.gov.au/" target="_blank"><img src="<?=base_url()?>img/blank.gif" width="95" height="100" /></a>
            <a style="margin-left:85px;" href="http://film.vic.gov.au/www/html/7-home-page.asp" target="_blank"><img src="<?=base_url()?>img/blank.gif" width="223" height="100" /></a>
            <a style="margin-left:108px;" href="http://www.screenaustralia.gov.au/" target="_blank"><img src="<?=base_url()?>img/blank.gif" width="185" height="100" /></a>
        </div>
        <!--<div id="download"><a href="/Uploads/CPP1321 SKFF Program FA for website.pdf" target="_blank"><img src="<?=base_url()?>img/download.jpg" /></a></div>-->
        <!--
        <div id="subscribe">
        	<dl>
            	<dt><img src="<?=base_url()?>img/subscribe.png" /></dt>
                <dt><input type="text" class="textfield" id="email" /></dt>
                <dt class="enter"><a href="javascript:subscribe()"><img src="<?=base_url()?>img/enter.png" /></a></dt>
            </dl>
        </div>
        <div id="submsg">
        	
        </div>
        -->
    </div>
    </div>
</div>
</body>
</html>
