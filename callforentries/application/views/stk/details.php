<div id="bodier">
    <div class="col1">
        <h2>
        	<?php if($film['type'] == "2") { print "SoundKILDA"; } else { print "Film"; } ?>
           	<br />Details
        </h2>
        <h3><?=$film['title']?></h3><dl></dl>
        <p class="intro"><?=$film['synopsis']?></p>
        <div class="more">
            <p><b><?=$film['year']?>
            <?php if($film['format'] != "") { ?>
            / <?=$film['format']?>
            <?php } ?>
            <?php if ($film['running_time'] != "") { ?>
            / <?=$film['running_time']?></b>
            <?php } ?>
            
            </p>
            
            <?php if($film['artist'] != "") { ?>
            <p><span>Artist</span> <?=$film['artist']?></p>
            <?php } ?>
            
			<?php if($genre != "") { ?>            
            <p><span>Genre</span> <?=$genre?></p>
            <?php } ?>
            
            <?php if($film['director'] != "") { ?>
            <p><span>Director</span> <?=$film['director']?></p>
            <?php } ?>
            
			<?php if($film['photography_director'] != "") { ?>
            <p><span>Photography Director</span> <?=$film['photography_director']?></p>
            <?php } ?>
            
            <?php if($film['animator'] != "") { ?>
            <p><span>Animator</span> <?=$film['animator']?></p>
            <?php } ?>
            
            <?php if($film['producer'] != "") { ?>
            <p><span>Producer</span> <?=$film['producer']?></p>
            <?php } ?>
            
            <?php if($film['screen_writer'] != "") { ?>
            <p><span>Screen Writer</span> <?=$film['screen_writer']?></p>
            <?php } ?>
            
            <?php if($film['cast'] != "") { ?>
            <p><span>Principal Cast</span> <?=$film['cast']?></p>
            <?php } ?>
            
            <?php if($film['competition_session'] > 0) { ?>
            <p><span>Session</span> <?=$film['competition_session']?></p>
            <?php } ?>
		</div><br />
        <p><?=$film['publicity_blurb']?></p><br />
        <div class="links">
            <p><a href="<?=base_url()?>page-6/tickets">Buy tickets to this session</a></p>
            <p><a href="<?=base_url()?>page-8/touring">St Kilda Film Festival National Tour Details</a></p>
            <?php if($film['competition_session'] > 0) { ?>
            <p><a href="<?=base_url()?>advancesearch/session/<?=$film['competition_session']?>">View session <?=$film['competition_session']?></a></p>
            <?php } ?>
    	</div>
    </div>
    <div class="col2">
        <h2><?=date('l jS F',strtotime($sessions[0]['time']))?><br />
        	<?=date('h:ia',strtotime($sessions[0]['time']))?> - <?=date('h:ia',strtotime($sessions[0]['finish_time']))?>
        </h2>
        <div>
        	<?php if($film['large_image'] != "") { ?>
            <img src="<?=base_url()?>uploads/films/<?=$film['large_image']?>" width="378" />
            <?php } else { ?>
            <img src="<?=base_url()?>img/youtube.jpg" />
            <?php } ?>        	
        </div>
    </div>
    <dl></dl>
</div>

