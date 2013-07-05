<?php
/**
 * @file
 * Provide the HTML output for a jPlayer interface.
 */
?>

<div class="jp-<?php print $type; if($type == 'video') print ' jp-video-360p'; ?>">
  <div class="jp-type-playlist">
    <div id="<?php print $player_id; ?>" class="jp-jplayer"></div>
    <div id="<?php print $player_id; ?>_interface" class="jp-interface">
      <?php if ($type == 'video'): ?>
      <div class="jp-video-play"></div>
      <?php endif; ?>
      <ul class="jp-controls">
        <li><a href="#" class="jp-play" tabindex="1"><i class="icon-play"></i></a></li>
        <li><a href="#" class="jp-pause" tabindex="1"><i class="icon-pause"></i></a></li>
        <li><a href="#" class="jp-stop" tabindex="1"><i class="icon-stop"></i></a></li>
        <li><a href="#" class="jp-mute" tabindex="1"><i class="icon-volume-up"></i></a></li>
        <li><a href="#" class="jp-unmute" tabindex="1"><i class="icon-volume-off"></i></a></li>
        <?php if ($mode == 'playlist'): ?>
        <li><a href="#" class="jp-previous" tabindex="1"><i class="icon-backward"></i></a></li>
        <li><a href="#" class="jp-next" tabindex="1"><i class="icon-forward"></i></a></li>
        <?php endif; ?>
      </ul>
      
      <div class="jp-progress">
        <div class="jp-seek-bar">
          <div class="jp-play-bar"></div>
        </div>
      </div>
      
      <div class="jp-volume-bar">
        <div class="jp-volume-bar-value"></div>
      </div>
      
      <div class="jp-current-time"></div>
      <div class="jp-duration"></div>
    </div>
    
    <div id="<?php print $player_id; ?>_playlist" class="jp-playlist">
      <?php if ($mode == 'playlist' || $mode == 'single'): ?>
        <?php print $playlist; ?>
      <?php else: ?>
        <ul>
          <li><?php print check_plain($label); ?></li>
        </ul>
      <?php endif; ?>
    </div>
  </div>
</div>
<?php print drupal_render($dynamic); ?>

