<?php require_once('../dependencies.php')?>


<?php require_once('functions/main.php')?>


<?php build('content')?>
<div class="col-md-6 mx-auto">
	<div class="alert alert-info">
		<h1>Verify your registration on your email</h1>
		<p>You can close this page now.</p>
	</div>
</div>
<?php endbuild()?>

<?php loadTo('orbit/index.php')?>