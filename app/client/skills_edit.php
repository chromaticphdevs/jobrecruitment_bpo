<?php require_once('../dependencies.php')?>
<?php require_once('functions/main.php')?>
<?php
	if(postRequest('updateSkill'))
	{
		updateUserSkills($_POST['skills']);
	}

	if(postRequest('createNewSkill'))
	{
		createNewSkill($_POST['category'] , $_POST['description']);
	}

	$skillCategoryList = getCategoryList();
	$skills   = __profile()->getSkills();
?>
<?php build('content') ?>
<div style="height: 75px;"></div>
<section class="panel">
	<div class="panel-heading">
		<h3>Skills</h3>
		<?php Flash::show()?>
	</div>
	<div class="panel-body">
		<section class="card">
			<div class="card-body">
				<div class="row">
					<?php foreach($skills as $key => $row) :?>
						<div class="col-md-6 col-lg-6 col-xl-3">
		                    <div class="card text-white bg-dark m-b-30">
		                        <div class="card-header"><?php echo $row['category']?></div>
		                        <div class="card-body">
		                            <p class="card-text"><?php echo $row['description']?></p>
		                        </div>
		                    </div>
		                </div>
					<?php endforeach?>
				</div>
			</div>
		</section>

		<div class="divider"></div>
		<hr>
		<div class="card">
			<div class="card-header">
				<h4>Update Skills</h4>
			</div>

			<div class="card-body">
				<div class="row">
					<div class="col-md-7">
						<form method="post">
							<fieldset>
								<legend>Skills</legend>
								<small>Hold *crtl* to select multiple</small>
								<select class="form-control" name="skills[]" multiple>
									<?php foreach($skillCategoryList as $cat) :?>
										<option value="<?php echo $cat['id']?>">
											<?php echo $cat['category']?>
										</option>
									<?php endforeach;?>
								</select>
							</fieldset>
							<hr>
							<input type="submit" name="updateSkill" value="Update skill" class="btn btn-primary">
						</form>
					</div>

					<div class="col-md-5">
						<form method="post" action="" class="col-md-5">
							<div class="form-group">
								<label>Category</label>
								<input type="" name="category" class="form-control">
							</div>
							<div class="form-group">
								<label>Description</label>
								<input type="" name="description" class="form-control">
							</div>
							<input type="submit" name="createNewSkill" class="btn btn-success">
						</form>
					</div>
				</div>
			</div>
		</div>
		
	</div>
</section>

<?php endbuild()?>

<?php build('headers')?>

<style type="text/css">
	.clean-box{
		background: #fff;
		padding: 10px;
		width: 300px;
		margin-bottom: 10px;
	}
	#image
	{
		width: 150px;
		height: 150px;
		background: red;
	}
	#image img {
		width: 100%;
	}
</style>
<?php endbuild()?>
<?php loadTo('orbit/app')?>

