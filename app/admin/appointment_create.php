<?php require_once '../dependencies.php';?>

<?php require_once APPROOT.DS.'templates/user/header.php';?>

<?php
	
	if(postRequest('sendAppointment'))
	{
		$res = createAppointment($_POST);

		if($res) {
			Flash::set("Appointment created!");

			return redirect('application_view.php?id='.$_POST['applicationid']);
		}
	}

	$applicationid = $_GET['applicationid'];
?>
</head>
<body>
	<?php require_once APPROOT.DS.'templates/user/navigation.php';?>
	<?php require_once APPROOT.DS.'templates/user/sidebar.php';?>
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="card">
			<div class="card-header">
				<h4>Set an appointment</h4>
			</div>

			<div class="card-body">
				<?php
					FormOpen([
						'method' => 'post',
					]);

					FormHidden('applicationid' , $applicationid);
				?>

				<div class="form-group row">
					<div class="col-md-6">
						<?php
							FormLabel('date');
							FormDate('date' , '' , [
								'class' => 'form-control',
								'required' => ''
							])
						?>
					</div>

					<div class="col-md-6">
						<?php
							FormLabel('Time');
							FormTime('time' , '' , [
								'class' => 'form-control',
								'required' => ''
							])
						?>
					</div>
				</div>

				<div class="form-group">
					<?php
						FormLabel('Address');
						FormText('address' , '' , [
							'class' => 'form-control',
							'required' => ''
						])
					?>
				</div>


				<div class="form-group">
					<?php
						FormLabel('Notes');
						FormTextarea('notes' , '' , [
							'class' => 'form-control',
							'rows' => 5
						])
					?>
				</div>

				<?php
					FormSubmit('sendAppointment' , ' Send Apointment' , [
						'class' => 'btn btn-primary'
					]);
				?>

				<a href="application_view.php?id=<?php echo $applicationid?>">Cancel</a>

				<?php FormClose()?>
			</div>
		</div>
	</div>
<?php require_once APPROOT.DS.'templates/user/scripts.php';?>
<?php require_once APPROOT.DS.'templates/user/footer.php';?>