<script src="<?php echo URL?>/public/js/jquery-1.11.1.min.js"></script>
<script src="<?php echo URL?>/public/js/bootstrap.min.js"></script>
<script src="<?php echo URL?>/public/js/chart.min.js"></script>
<script src="<?php echo URL?>/public/js/chart-data.js"></script>
<script src="<?php echo URL?>/public/js/easypiechart.js"></script>
<script src="<?php echo URL?>/public/js/easypiechart-data.js"></script>
<script src="<?php echo URL?>/public/js/bootstrap-datepicker.js"></script>
<script src="<?php echo URL?>/public/js/custom.js"></script>
<script type="text/javascript" src="<?php echo URL.DS.'public/datatables/js/jquery.dataTables.min.js'?>"></script>
<script>
	window.onload = function () {
		var chart1 = document.getElementById("line-chart").getContext("2d");
		window.myLine = new Chart(chart1).Line(lineChartData, {
		responsive: true,
		scaleLineColor: "rgba(0,0,0,.2)",
		scaleGridLineColor: "rgba(0,0,0,.05)",
		scaleFontColor: "#c5c7cc"
		});
	};
</script>


<script src="<?php echo URL?>/public/js/core/core.js"></script>