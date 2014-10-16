        <div id="bodier">
        	<div class="col1">
            	<!--
                <h2><?=$news['title']?></h2>
                <div id="content">
					<?=$news['content']?>
                </div>
                <dl></dl><br />
                -->              
                <?php require_once('flashcomponent_jquery/index.php');?>
                 <div class="banner" style=" z-index:1;">
                        <div class="screen" style="height:400px;">
                            <noscript>
                                <!--Placeholder Image When Javascript is Off-->
                                <img src="<?=base_url()?>/photos/news_sticker/<?= $all[0]['image']?>" alt=""/>
                            </noscript>
                        </div>
                        <div class="items" >
                            <ul>
                            <?php foreach($all as $alls)
                            {
                                
								?>
                                <li>
                                  <div class="button">
                                        <p style="margin-top:10px; line-height:17px;">
                                            <span style="font-size:15px;"><?= $alls['heading']?></span>
                                            <br />
                                            <span style="color:#9a9a9a;"><?= $alls['subheading']?></span>
                                        </p>
                                    </div>
            
                                    <a href="<?=base_url()?>/photos/news_sticker/<?= $alls['image']?>"></a>
                                                            <a href="<?= $alls['url']?>"></a>
                                    <div class="content" style="top:220px; left:0px; width:340px; height:192px;">
                                        <h1 class="poplarStd" style="text-transform:normal;"><?= $alls['heading']?></h1>
                                        <style>
										.subheading
										{
											color:#fff !important;
										}
										</style>
                                        <h2 class="subheading" style="text-transform:normal;"><?= $alls['subheading']?></h2>
                                        <div style="margin-top:10px;text-transform:none!important;" class="DidactGothic"><?= $alls['description']?></div>
                                    </div>                   
                                   
                                </li>
                             <?
                             }
                             ?>
                            </ul>
                         </div>
                 </div>
            </div>
            <!--
            <div class="col2">
               
                <div class="youtube">
                	<?=$video['content']?>
                </div>
            </div>
            -->
            <dl></dl>
        </div>
        
