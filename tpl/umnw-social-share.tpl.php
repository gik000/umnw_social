<?php
/**
 * AVAILABLE VARIABLES
 * $socials = array( 'id' => array('fontawesome' => 'fa-value', 'url' => '#'))
 */
?>
<div class="block-inner gik-social-block gik-social-block-inner">
  <div class="block-inner-container gik-social-block-container">
    <?php
    foreach($socials as $id => $values){
      ?>
      <span class="social social-<?=$id?>">
        <a href="<?=$values['share-link']?>" target="_blank" class="fa <?=$values['fontawesome']?>"></a>
      </span>
      <?php
    }
    ?>
  </div>
</div>
<div class="clearfix"></div>
