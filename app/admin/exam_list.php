<?php require_once '../dependencies.php';?>

<?php require_once APPROOT.DS.'templates/user/header.php';?>
<style type="text/css">
	.space-up{
		margin: 5px;
	}
</style>
</head>
<body>
	<?php 
		if(postRequest('qandcreate'))
		{
			examQCACreate($_POST);
		}
	?>
<?php require_once APPROOT.DS.'templates/user/navigation.php';?>
<?php require_once APPROOT.DS.'templates/user/sidebar.php';?>
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<?php pageHeader('Exam Management') ;?>
		<div class="panel panel-default">
			<?php Flash::show();?>
			<?php $examList = getExamList();?>
			<div class="panel-heading"> Exam List </div>
			<div class="panel-body">
				<table class="table <?php echo count($examList) > 10 ? 'myTable' : ''?>">
					<thead>
						<th>Name</th>
						<th>Description</th>
						<th>Duration</th>
						<th>No of Questions</th>
						<th>Action</th>
					</thead>
					<tbody>
						<?php foreach($examList as $exam) :?>
							<tr>
								<td><?php echo $exam['name']?></td>
								<td><?php echo $exam['description']?></td>
								<td><?php echo $exam['duration']?></td>
								<td><?php echo $exam['questiontotal']?></td>
								<td>
									<a href="exam_edit.php?id=<?php echo $exam['id']?>">Edit</a>
									<a href="exam_show.php?id=<?php echo $exam['id']?>">Show</a>
								</td>
							</tr>
						<?php endforeach;?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
<?php require_once APPROOT.DS.'templates/user/scripts.php';?>
<script defer>
	$(document).ready( function () {
	    $('.myTable').DataTable();
	} );
</script>
<?php require_once APPROOT.DS.'templates/user/footer.php';?>