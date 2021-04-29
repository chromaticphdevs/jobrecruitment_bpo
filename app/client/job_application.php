<?php 	
	require_once '../dependencies.php';

	if(postRequest('sendApplication'))
		sendJobApplication($_POST);

	$job = getJob($_GET['id']);
?>

<?php build('content') ?>

	<div class="col-md-12 mx-auto">
		<div class="card">
			<div class="card-header">
				<h4><?php echo $job['title'] . ' - ' .$job['sub_title']?></h4>
				<?php Flash::show();?>
			</div>
			<div class="card-body">
				<?php if(!Session::check('user')) : ?>
					<div class="alert alert-danger">
						<h5>You must have an account to apply</h5>
					</div>
				<?php endif;?>


				<?php if(Session::check('user')) :?>
				<?php 	
					$hasApplied = false;
					if(isset($_SESSION['auth'] , $_SESSION['user']))
						$hasApplied = hasApplied($_SESSION['user']['id'], $job['id']);
				?>

				<?php if($hasApplied): ?>
					<div class="alert alert-danger ">
						<p>You already applied for this job.</p>
					</div>
				<?php endif?>


				<div class="row">
					<section id="job_information" class="col-md-5">
						<h3><?php echo $job['position']?> - <?php echo $job['title']?></h3>
						<div class="job-desc">
							<div>
								<p><?php echo $job['address']?></p>
							</div>
							<div>
								<p><?php echo $job['notes']?></p>
							</div>
							<div class="row">
								<dl class="col-md-5">
									<dd><?php echo $job['email']?></dd>
									<dt>Email</dt>
									<dd><?php echo $job['phone']?></dd>
									<dt>Phone</dt>
								</dl>

								<dl class="col-md-5">
									<dd><?php echo to_money($job['salary'])?></dd>
									<dt>Salary</dt>
									<dd><?php echo $job['salary_type']?></dd>
									<dt>Salary Type</dt>
								</dl>
							</div>
						</div>
					</section>
					<section id="job_application" class="col-md-5">
						<?php $userinfo = getUser(Session::get('user')['id']);?>
						<div id="personalinfo">
							<p><strong><?php echo $userinfo['fullname']?></strong> <br>
							Email : <?php echo $userinfo['email']?> | Phone : <?php echo $userinfo['phone']?></p>
						</div>
						<form method="post" enctype="multipart/form-data">
							<input type="hidden" name="jobid" value="<?php echo $job['id']?>">
							<div class="form-group">
								<label>Make your pitch <sup>*</sup> </label>
								<small>Minimum of 50 characters</small>
								<?php FormTextarea('applicant_pitch' , '' , [
									'class' => 'form-control',
									'rows'  => 10
								])?>
							</div>

							<div class="form-group">
								<label>Image Type Resume</label>
								<input type="file" name="resume_image">
								<small>Jpeg , PNG only</small>
							</div>

							<div class="form-group">
								<label>Text type Resume</label>
								<input type="file" name="resume_text">
								<small>Word / PDF</small>
							</div>
							<input type="submit" name="sendApplication" class="btn btn-primary" value="Send Application">
						</form>
					</section>
				</div>
				<?php endif;?>
			</div>
		</div>
	</div>
<?php endbuild()?>

<?php loadTo('orbit/index.php')?>