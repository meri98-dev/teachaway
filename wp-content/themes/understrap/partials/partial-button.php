<?php if(!empty(get_sub_field('button'))): ?>
<div class="button">
	<?php $button = get_sub_field('button'); ?>
		<?php if(!empty(get_sub_field('button'))): ?>
		<a class="cta-button" href="<?php echo $button['cta_link']  ?>"><?php echo $button['cta_text']  ?></a>
		</div>				
	<?php endif; ?>