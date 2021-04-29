<?php require_once '../dependencies.php';?>

<?php require_once APPROOT.DS.'templates/user/header.php';?>
<style type="text/css">
	.space-up{
		margin: 5px;
	}
	.choices img
	{
		width: 70px;
		height: 70px;
	}

	.image-container{
		display: none;
		width: 300px;
	}
	.image-container img{
		width: 100%;
		height: 100%;
	}
</style>
</head>
<body>
	<?php 
		if(postRequest('qandupdate'))
		{
			examQCAUpdate($_POST);
		}

		if(postRequest('updateOrderNumber')){
			updateOrderNumber($_POST['oldOrderNumber'], $_POST['questionid'] , $_POST['toswitchid']);
		}

		if(postRequest('updateImage'))
		{
			examQCImageUpdate($_POST['examqaid'] , $_POST['field'] , $_FILES['image']);
		}
	?>
<?php require_once APPROOT.DS.'templates/user/navigation.php';?>
<?php require_once APPROOT.DS.'templates/user/sidebar.php';?>
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<?php pageHeader('Exam Management') ;?>
		<div class="panel panel-default">
			<?php Flash::show('examcreate');?>
			<?php Flash::show();?>

			<?php $examQa = getExamQA($_GET['id']);?>
			<?php $exam   = getExam($examQa['examid']);?>
			<?php $examQuestions = getExamQAList($examQa['examid'])?>
			<div class="panel-heading">
				Question and Answer Info
				<a href="exam_show.php?id=<?php echo $examQa['examid']?>">Show Exam</a>
			</div>
			<div class="panel-body">
				<form method="post">
					<input type="hidden" name="examqaid" value="<?php echo $examQa['id']?>">
					<div class="form-group">
						<label>Question</label>
						<input type="text" name="question" class="form-control" 
						value="<?php echo $examQa['question']?>">

						<a href="#" class="link-toggle" data-target='#question_img'>Show Image</a>
						<div class="image-container" id="question_img">
							<?php  echo convertImage($examQa['question_img'])?>
						</div>
					</div>
					<div class="well">
						<h4>Choices</h4>
						<div class="row form-group">
							<div class="col-md-6">
								<?php 
									wrapWithDiv(
										isEqual($examQa['answer'] , 'choice_1') , 
										"<label>A.</label>
										<input type='text' name='choice_1' value='{$examQa['choice_1']}' class='form-control'>"
									)
								?>
								
								<a href="#" class="link-toggle" data-target='#image_1'>Show Image</a>
								<div class="image-container" id="image_1">
									<?php  echo convertImage($examQa['image_1'])?>
								</div>
							</div>
							<div class="col-md-6">
								<?php 
									wrapWithDiv(
										isEqual($examQa['answer'] , 'choice_2') , 
										"<label>B.</label>
										<input type='text' name='choice_2' value='{$examQa['choice_2']}' class=
										form-control>"
									)
								?>

								<a href="#" class="link-toggle" data-target='#image_2'>Show Image</a>
								<div class="image-container" id="image_2">
									<?php  echo convertImage($examQa['image_2'])?>
								</div>
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-6">
								<?php 
									wrapWithDiv(
										isEqual($examQa['answer'] , 'choice_3') , 
										"<label>C.</label>
										<input type='text' name='choice_3' 
										value='{$examQa['choice_3']}' class='form-control'>"
									)
								?>

								<a href="#" class="link-toggle" data-target='#image_3'>Show Image</a>
								<div class="image-container" id="image_3">
									<?php  echo convertImage($examQa['image_3'])?>
								</div>
							</div>
							<div class="col-md-6">
								<?php 
									wrapWithDiv(
										isEqual($examQa['answer'] , 'choice_4') , 
										"<label>D.</label>
										<input type='text' name='choice_4' 
										value='{$examQa['choice_4']}' class='form-control'>"
									)
								?>

								<a href="#" class="link-toggle" data-target='#image_4'>Show Image</a>
								<div class="image-container" id="image_4">
									<?php  echo convertImage($examQa['image_4'])?>
								</div>
							</div>
						</div>

						<div class="form-group">


							<?php
							
							FormLabel('Correct Answer');
							FormSelect('answer' , [
									'choice_1' => 'A.',
									'choice_2' => 'B.',
									'choice_3' => 'C.',
									'choice_4' => 'D.'
								], $examQa['answer'] , [
									'class' => 'form-control'
								]);
							?>
						</div>
					</div>

					<input type="submit" name="qandupdate" 
						class="btn btn-primary" value="Save Changes">
				</form>
			</div>
		</div>

		<div class="panel panel-default">
			<div class="panel-heading"> Question and Answer Images</div>

			<div class="panel-body">
				<div class="col-md-12">
					<div class="form-group">
						<label>Question Image</label>
						<?php
							FormOpenMeta([
								'method' => 'post'
							]);

							FormHidden('examqaid' , $examQa['id']);

							FormHidden('field','question_img');

							FormFile('image' , ['class' => 'form-control']);
							FormSubmit('updateImage' , 'Change Image');
							FormClose();
						?>
					</div>
				</div>

				<div class="form-group">
					<div class="row">
						<div class="col-md-6">
							<label>Choice 1 Image</label>
							<?php
								FormOpenMeta([
									'method' => 'post'
								]);

								FormHidden('examqaid' , $examQa['id']);

								FormHidden('field','image_1');

								FormFile('image' , ['class' => 'form-control']);
								FormSubmit('updateImage' , 'Change Image');
								FormClose();
							?>
						</div>

						<div class="col-md-6">
							<label>Choice 2 Image</label>
							<?php
								FormOpenMeta([
									'method' => 'post'
								]);

								FormHidden('examqaid' , $examQa['id']);

								FormHidden('field','image_2');

								FormFile('image' , ['class' => 'form-control']);
								FormSubmit('updateImage' , 'Change Image');
								FormClose();
							?>
						</div>
					</div>
				</div>

				<div class="form-group">
					<div class="row">
						<div class="col-md-6">
							<label>Choice 1 Image</label>
							<?php
								FormOpenMeta([
									'method' => 'post'
								]);

								FormHidden('examqaid' , $examQa['id']);

								FormHidden('field','image_3');

								FormFile('image' , ['class' => 'form-control']);
								FormSubmit('updateImage' , 'Change Image');
								FormClose();
							?>
						</div>

						<div class="col-md-6">
							<label>Choice 2 Image</label>
							<?php
								FormOpenMeta([
									'method' => 'post'
								]);

								FormHidden('examqaid' , $examQa['id']);

								FormHidden('field','image_4');

								FormFile('image' , ['class' => 'form-control']);
								FormSubmit('updateImage' , 'Change Image');
								FormClose();
							?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php
	//page function

	function wrapWithDiv($wrapped , $html)
	{	
		if($wrapped) {
			print <<<EOF
				<div class='bg-green text-white'>
					$html 
				</div>
			EOF;
		}else{
			print <<<EOF
				<div>
					$html 
				</div>
			EOF;
		}
	}
?>
<?php require_once APPROOT.DS.'templates/user/scripts.php';?>
<?php require_once APPROOT.DS.'templates/user/footer.php';?>