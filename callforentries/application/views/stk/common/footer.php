			
            
            
            
            </div><!--col-*-8-->
		</div><!--container-->
	</div><!--body-wrap-->
    
	   
    <div id="footer-wrap">
    	<div class="container">
        	
        	<div class="col-lg-offset-3 col-md-offset-3 col-lg-9 col-md-9 col-sm-12 col-xs-12">
				
               <div class="carousel slide" data-ride="carousel">
        		 <?php $banners = $this->Content_model->get_banners();?> 
          		  <!-- Wrapper for slides -->
                  <div class="carousel-inner">
                  	<?php 
						$count = 0;
						foreach($banners as $banner) {
					?>
                    <div class="item <?=$count == 0 ? 'active' : '';?>">
                      <a href="<?=base_url()?>adredirect/<?=$banner['id']?>" target="_blank"><img src="<?=base_url()?>uploads/banners/<?=$banner['name']?>" /></a>
                    </div>
                    <?php $count++; } ?>
                  </div>
        
                </div>
                
                <!-- social icons and subscribe for mobile view-->
                <div class="col-xs-12 remove-gutters hidden-lg hidden-md vgap">
                    <div class="col-sm-6 col-xs-12 remove-gutters social-icons">
                        <a target="_blank" href="http://www.facebook.com/StKildaFilmFestival"><i class="fa fa-facebook"></i></a>
                        <a target="_blank" href="https://twitter.com/stkildafilmfest"><i class="fa fa-twitter"></i></a>
                        <a target="_blank" href="http://www.youtube.com/user/stkildafilmfest"><i class="fa fa-youtube"></i></a>
                        <a target="_blank" href="mailto:filmfest@portphillip.vic.gov.au"><i class="fa fa-envelope"></i></a>
                    </div>
                    <div class="col-sm-6 col-xs-12 remove-gutters">
                        <div class="subscribe-box">
                            <input type="text" id="email-footer" placeholder="subscribe - your@email-address" />
                            <input type="button" onclick="subscribe1('email-footer');" value="GO"/>
                        </div>
                        <div class="result_sub">
                            
                        </div>
                    </div>
                </div><!-- end social icons and subscribe for mobile view-->
                
                <div class="col-xs-12 sponsors remove-gutters">
                	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 remove-gutters">
                		<span class="sponsors-label">Proudly Produced<br>And Presented By</span>
                        <a class="col-xs-12 remove-gutters" href="http://www.portphillip.vic.gov.au/" target="_blank"><img src="<?=base_url()?>img/sponsors/port-phillip.png" /></a>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 remove-gutters">
                		<span class="sponsors-label gov-partners">Government Partners</span>
                        <a class="col-lg-6 col-md-6 col-sm-6 col-xs-12 remove-gutters" href="http://film.vic.gov.au/www/html/7-home-page.asp" target="_blank"><img src="<?=base_url()?>img/sponsors/film-vic.png" /></a>
                    	<a class="col-lg-6 col-md-6 col-sm-6 col-xs-12 remove-gutters vgap" href="http://www.screenaustralia.gov.au/" target="_blank"><img src="<?=base_url()?>img/sponsors/screen-aus.png"  /></a>
                    </div>
                </div>
            </div><!--col-*-*-->
        </div>
    </div><!--footer-wrap-->
<?php
	$opening = $this->Menu_model->get_opening_date();
	$now = time(); // or your date as well
	$your_date = strtotime($opening['opening_date']);
	$y = date('Y',$your_date);
	$m = date('n',$your_date);
	$d = date('j',$your_date);
	$datediff = ($now - $your_date)*-1;
?>  
    
<script src="<?=base_url()?>js/countdown.js"></script>
<script>
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
$(function(){
	
	hidegenre();
	
	var note = $('.timer_st'),
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

			note.html(message);
		}
	});

});

function hidegenre() {
	var check = $('#soundcheck').attr('checked');
	if (check == true) {
		$('#genre').val(0);
		$('#genre').attr('disabled',true);
	} else {
		$('#genre').attr('disabled',false);
	}
}
function subscribe1(field_id)
{
	var email = $('#'+field_id).val();
	$.ajax({
	url: '<?=base_url()?>stk/subscribe',
	type: 'POST',
	data: ({email:email}),
	dataType: "html",
	success: function(html) {
			if(html == 0)
			{
				$('.result_sub').html('Please Insert a Valid Email Address');
				$('.result_sub').fadeIn().delay(2000).fadeOut();
				
			}
			if(html == 1)
			{
				$('.result_sub').html('Thank You For Registering');
				$('.result_sub').fadeIn().delay(2000).fadeOut();
			}
			if(html == 2)
			{
				$('.result_sub').html('Your Email Has Been Registered Before');
				$('.result_sub').fadeIn().delay(2000).fadeOut();
			}
		}
	})	
}
</script>
</body>
</html>
