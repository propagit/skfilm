<!-- jQuery -->
<script type="text/javascript" src="<?=base_url()?>js/jquery-1.8.1.js"></script>
 <div id="bodier" class="hidden-sm hidden-xs">
    <div class="col1">
                      
        <?php require_once('flashcomponent_jquery/index.php');?>
         <div class="banner">
                <div class="screen">
                    <noscript>
                        <!--Placeholder Image When Javascript is Off-->
                        <img src="<?=base_url()?>photos/news_sticker/<?= $all[0]['image']?>" alt=""/>
                    </noscript>
                </div>
                <div class="items" >
                    <ul>
                    <?php foreach($all as $alls)
                    {
                        
                        ?>
                        <li>
                          <div class="button btn-banner ">
                              <p>
                                  <span class="heading"><?= $alls['heading']?></span>
                                  <span class="subheading"><?= $alls['subheading']?></span>
                              </p>
                          </div>
    
                          <a href="<?=base_url()?>photos/news_sticker/<?= $alls['image']?>"></a>
                          <a href="<?= $alls['url']?>"></a>
                          <div class="content">
                              <h1 class="poplarStd"><?= $alls['heading']?></h1>
                              <h2 class="subheading"><?= $alls['subheading']?></h2>
                              <div class="DidactGothic"><?= $alls['description']?></div>
                          </div>                   
                           
                        </li>
                     <?
                     }
                     ?>
                    </ul>
                 </div>
         </div>
    </div>
</div>

<!-- mobile banners -->
<div id="home-mob-banners" class="carousel slide hidden-lg hidden-md" data-ride="carousel">
    <!-- Wrapper for slides -->
    
     <!-- Indicators -->
      <?php
	 	 if(0){ 
	  	#if(1){
	  ?>
          <ol class="carousel-indicators">
                <li data-target="#home-mob-banners" data-slide-to="0" class="active"></li>
            <?php for($i = 1; $i < count($all) ; $i++) { ?>
                <li data-target="#home-mob-banners" data-slide-to="<?=$i;?>"></li>
            <?php } ?>
          </ol>
      <?php } ?>
      
    <div class="carousel-inner">
      <?php 
          $count = 0;
          foreach($all as $alls){
      ?>
      <div class="item <?=$count == 0 ? 'active' : '';?>">
        <a href="<?=$alls['url'];?>" target="_blank"><img src="<?=base_url()?>photos/news_sticker/<?=$alls['image']?>" /></a>
        <div class="carousel-caption">
        	<h1><?= $alls['heading']?></h1>
            <h2><?= $alls['subheading']?></h2>
            <p><?= $alls['description']?></p>
      	</div>
      </div>
      <?php $count++; } ?>
    </div>

</div>
<!-- mobile baners -->
        

