<div id="bodier">
	<?php
	if ($this->session->userdata('type') == 2) { ?>
    <div id="content">
    	<p><span class="whiteheader">SoundKILDA : Australian Music Video Competition</span></p>
        <hr size="2" width="100%" />
        <p>&nbsp;</p>
        <span class="uppercase"><span class="">
        <p>The Palace George Cinemas</p>
        <p>133-135 FITZROY ST, ST KILDA </p>
        <p>Thursday 27 May, 9PM-10.30PM</p></span></span><br />
        The Festival's cult favourite is back with more Australian music videos playing loud and large on the big screen – the way they were meant to be seen.<br /><br />
        Join host Alan Brough for this one night only event, don't miss your chance to see the best music videos - then vote for your favourite, find out who is crowned the best at the awards and then help them celebrate at the after party. <br /><br />
        Tickets $25 Full / $20 Concession<br />
        All SoundKILDA tickets include screening, awards ceremony and after party entry.   
        <br />
        <hr /><br />
        </div>
            
	<?php } ?>
	<div class="heading">
    	<div class="session"><h2><?=$heading?></h2></div>
        <div class="nav"><?=$previous?></div>
        <div class="nav"><?=$next?></div>
        <div class="date"><h2><?=$heading2?></h2></div>
        <?=$pages?>
    </div>
    
	<?php foreach($films as $film) { 
		$genres = $this->Film_model->get_film_genres($film['id']); 
		$genre = '';
		if ($genres) {
			$genre = $genres[0]['name'];
			for($i=1;$i<count($genres);$i++) { 
				$genre .= ', '.$genres[$i]['name'];
			} 
		} ?>
    <div class="film">
        <div class="photo">
        	<a href="<?=base_url()?>details/<?=$film['id']?>">
			<?php if($film['small_image'] != "") { ?>
            <img src="<?=base_url()?>uploads/films/<?=$film['small_image']?>" />
            <?php } else { ?>
            <img src="<?=base_url()?>img/noimage.png" />
            <?php } ?>
            </a>
        </div>
        <div class="text">
        	<div class="brief">
            	<div class="title"><?=$film['title']?></div>
            	<p>
					<?php 
						$text = $film['synopsis'];
						if (strlen($text) > 160) {
							$text = substr($text,0,155).'...';
						}
						print $text;
					?>
                </p>
            </div>
            <div class="more">
            	<?php if ($film['type'] > 0) { ?>
            	<h4><a href="<?=base_url()?>details/<?=$film['id']?>">More information</a></h4>
                <?php } else { ?><br /><?php } ?>
                <p>
                	<b><?=$film['year']?>
                    <?php if($film['format'] != "") { ?>
                    / <?=$film['format']?>
                    <?php } ?>
                    
                    <?php if ($film['running_time'] != "") { ?>
                    / <?=$film['running_time']?>
                    <?php } ?>
                    </b>
                </p>
                
                <?php if ($film['artist'] != "") { ?>
                <p><span>Artist</span> 
                	<?php
					$artist = $film['artist'];
						if (strlen($artist) > 18) { $artist = substr($artist,0,18).'...'; }
						print $artist;                        
                } ?>
                </p>
                
				<?php if ($genre != "") { ?>
                <p><span>Genre</span> <?=$genre?></p>
                <?php } ?>
                
                <?php if ($film['director'] != "") { ?>
                <p><span>Director</span> 
					<?php
                    	$director = $film['director'];
						if (strlen($director) > 16) { $director = substr($director,0,16).'...'; }
						print $director;
					?>
                </p>
                <?php } ?>
                
				<?php if ($film['producer'] != "") { ?>
                <p><span>Producer</span> 
					<?php 
						$producer = $film['producer']; 
						if (strlen($producer) > 15) { $producer = substr($producer,0,15).'...'; }
						print $producer;
					?>
                </p>
                <?php } ?>
            </div>
        </div>
    </div>
    <?php } ?>
    
    <dl></dl>
</div>

