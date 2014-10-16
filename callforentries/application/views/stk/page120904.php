<div id="bodier">
    <div id="content">
    	<?=$page['content']?>
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
						if (strlen($text) > 130) {
							$text = substr($text,0,135).'...';
						}
						print $text;
					?>
                </p>
            </div>
            <div class="more">
            	<?php if ($film['type'] > 1) { ?>
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
    
</div>