<?php require_once '../dependencies.php';?>

<?php require_once APPROOT.DS.'templates/user/header.php';?>
<style type="text/css">
	.space-up{
		margin: 5px;
	}
</style>
</head>
<body>
<?php require_once APPROOT.DS.'templates/user/navigation.php';?>
<?php require_once APPROOT.DS.'templates/user/sidebar.php';?>
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<?php pageHeader('Exam Management') ;?>
		<div class="panel panel-default">
			<?php Flash::show();?>
			<?php $examList = getExaminationlist();?>
			<div class="panel-heading"> Exam List </div>
			<div class="panel-body">
				<table class="table <?php echo count($examList) > 10 ? 'myTable' : ''?>">
					<thead>
						<th>Name</th>
						<th>Examname</th>
						<th>Score</th>
						<th>Remarks</th>
						<th>View Result</th>
					</thead>
					<tbody>
						<?php foreach($examList as $exam) :?>
							<tr>
								<td><?php echo $exam['examineename']?></td>
								<td><?php echo $exam['examname']?></td>
								<td><?php echo $exam['correct'] . ' out of ' .($exam['correct'] + $exam['incorrect']) ?></td>
								<td><?php echo $exam['remarks']?></td>
								<td><a href="examination_result.php?resultid=<?php echo $exam['resultid']?>">Edit</a></td>
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