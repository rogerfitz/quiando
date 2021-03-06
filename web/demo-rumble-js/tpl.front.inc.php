<?php $poll =& $this->poll; ?><!-- You always need this line on the top -->
<?php include( "css/style.inc.php" ); ?>

<script>
<?php include( "js/jquery.jrumble.1.3.min.js" ); ?>
(function($){
	$(document).ready(function() {
		$('.my-title, .my-option, .my-button').jrumble();
		$('.my-title, .my-option, .my-button').hover(function(){
			$(this).trigger('startRumble');
		}, function(){
			$(this).trigger('stopRumble');
		});
	});
}(jQuery));
</script>

<div class='poll-front demo-rumble-js' style='width:280px;'>
<form style='margin:0;'>

<!-- [BEGIN] Title -->
<div class='my-title' style="font-weight:bold;text-align:center;margin:10px;">
<?php echo $poll->attr( "title" ); ?>
</div>
<!-- [END] Title -->

<div style='margin:20px 10px'>
<!-- [BEGIN] Looping through all the items -->
<?php foreach( $poll->getAllItems() as $item ) { ?>
<div class='ap-container my-option' style='margin:4px 5px;text-align:left;font-size:13px;'>
	<input type="radio" name="answer"
		value="<?php echo $item->getName(); ?>"
		style='vertical-align:-15%;'/>
	<?php echo $item->getName(); ?>
</div>
<?php } ?>
<!-- [END] Looping through all the items -->
</div>

<!-- [BEGIN] Vote & View Buttons -->
<div style='text-align:center;margin:10px 10px;'>
	<input type="submit" class="ap-vote my-button" value=" Vote " />
	&nbsp;&nbsp;
	<input type="submit" class="ap-result my-button" value=" View " />
</div>
<!-- [END] Vote & View Buttons -->

<?php if ( true ): ?>
<!-- [BEGIN] Reset Button -->
<div style='text-align:center;padding:0 10px 10px 10px;'>
<input type="submit" class="ap-clear-block" value="  Clear IP & Cookie Blocks  " />
</div>
<!-- [END] Reset Button -->
<?php endif; ?>

</form>

</div>
