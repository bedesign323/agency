<?php if(isset($form['title']['#default_value'])): ?>
<div class="admin-actions">
	<div class="body">
		<div class="buttons">
			<a href="#" class="admin-btn" >Basic Info</a>
			<a href="#" class="admin-btn" >Portfolios</a>
			<a href="#" class="admin-btn" >Videos</a>
			<a href="#" class="admin-btn" >Videos</a>
		</div>
	</div>
</div>
<?php endif; ?>

<div class="form-holder clearfix">
	<?php print render($form['title']); ?>
	<?php print render($form['field_artist']); ?>
	<div class="form-group collapsible collapsed">
		<h2 class="icon">Artist Bio</h2>
		<div class="body">
			<?php print render($form['field_artist_bio_image']); ?>
			<?php print render($form['field_artist_bio']); ?>
		</div>
	</div>

	<div class="form-group collapsible collapsed">
		<h2 class="icon">Social Links</h2>
		<div class="body">
			<?php print render($form['field_artist_instagram']); ?>
			<?php print render($form['field_artist_twitter']); ?>
			<?php print render($form['field_artist_facebook']); ?>
			<?php print render($form['field_artist_youtube']); ?>
			<?php print render($form['field_artist_google_plus']); ?>
			<?php print render($form['field_artist_pinterest']); ?>
		</div>
	</div>
	


	<div class="actions">
		<?php print render($form['actions']); ?>
	</div> 
</div>

<div class="form-hidden">
	<?php print drupal_render_children($form); ?>
</div>