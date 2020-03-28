 <div id="choreography-about">
         <?php print render($title_prefix); ?>
        <?php if ($title): ?><h1 class="title" id="page-title"><?php print $title; ?></h1><?php endif; ?>
        <?php print render($title_suffix); ?>
        <hr />
    	<?php if (isset($content['field_choreography'])): ?><?php print render($content['field_choreography']); ?><br /><?php endif; ?>
    	<?php if (isset($content['field_production'])): ?><?php print render($content['field_production']); ?><br /><?php endif; ?>
    	<?php if (isset($content['field_music'])): ?><?php print render($content['field_music']); ?><br /><?php endif; ?>
    	<?php if (isset($content['field_guest_artist'])): ?><?php print render($content['field_guest_artist']); ?><br /><?php endif; ?>
    	<?php if (isset($content['field_sound_artist'])): ?><?php print render($content['field_sound_artist']); ?><br /><?php endif; ?>
    	<?php if (isset($content['field_set_design'])): ?><?php print render($content['field_set_design']); ?><br /><?php endif; ?>
    	<?php if (isset($content['field_costume_design'])): ?><?php print render($content['field_costume_design']); ?><br /><?php endif; ?>
    	<?php if (isset($content['field_light_design'])): ?><?php print render($content['field_light_design']); ?><br /><?php endif; ?>
    	<?php if (isset($content['field_premier'])): ?><?php print render($content['field_premier']); ?><br /><?php endif; ?>
    	<?php if (isset($content['field_dancers'])): ?><?php print render($content['field_dancers']); ?><br /><?php endif; ?>
    	<?php if (isset($content['field_length'])): ?><?php print render($content['field_length']); ?><br /><?php endif; ?>
    
    	<br />
    	<hr />
    	<?php print render($content['body']); ?>
</div>

