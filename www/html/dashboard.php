<!DOCTYPE html >

<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<meta name="description" content="labgrid">
	<meta name="author" content"labgrid">
	<link rel="icon" href="">

    <title>Lab Grid</title>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	
	<!-- JQuery and Styles -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <!-- Bootstrap -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css">
    <!-- Optional theme -->
    <link rel="stylesheet" href="css/dashboard.css">
	<!-- Latest compiled and minified JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.2/js/bootstrap.min.js"></script>
	
	<!-- Graphing Library -->
	<script src="Chart.js"></script>
	<script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body>
<?php
include "navigation_top_new.php";
?>
<div class="container-fluid">
<div class="row">
        <?php
        include "navigation_side.php";
        ?>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            <h1 class="page-header">Current Usage</h1>

            <div class="row placeholders">
                <div class="col-xs-6 col-sm-3 placeholder" id="computer_usage_chart_section">
                    <div>
                        <canvas class="computerUsageChart"></canvas>
                    </div>
                    <!--<img data-src="holder.js/200x200/auto/sky" class="img-responsive" alt="Generic placeholder thumbnail">-->
                    <h4>Locations</h4>
                    <span class="text-muted">Where active jobs are run</span>
                </div>
                <div class="col-xs-6 col-sm-3 placeholder">
                    <!--<img data-src="holder.js/200x200/auto/vine" class="img-responsive" alt="Generic placeholder thumbnail">-->
                    <div>
                        <canvas class="computerUsageChart"></canvas>
                    </div>
                    <h4>Size</h4>
                    <span class="text-muted">Distribution of job sizes</span>
                </div>
                <div class="col-xs-6 col-sm-3 placeholder">
                    <!--<img data-src="holder.js/200x200/auto/sky" class="img-responsive" alt="Generic placeholder thumbnail">-->
                    <div>
                        <canvas class="computerUsageChart"></canvas>
                    </div>
                    <h4>Label</h4>
                    <span class="text-muted">Something else</span>
                </div>
                <div class="col-xs-6 col-sm-3 placeholder">
                    <!--<img data-src="holder.js/200x200/auto/vine" class="img-responsive" alt="Generic placeholder thumbnail">-->
                    <div>
                        <canvas class="computerUsageChart"></canvas>
                    </div>
                    <h4>Label</h4>
                    <span class="text-muted">Something else</span>
                </div>
            </div>

            <h2 class="sub-header" id="recent_jobs">Recent Jobs</h2>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>User</th>
                        <th>Time</th>
                        <th>Size</th>
                        <th>Description</th>
                    </tr>
                    </thead>
                    <tbody>
                    	<?php include "table_data.php"; ?> 
					</tbody>
                </table>
            </div>


        </div>
    </div>
</div>

<script>
	<?php include "graph_data.php"; ?>
	Chart.defaults.global.responsive = true;
	var pie_charts = document.getElementsByClassName('computerUsageChart');
	var computer_usage_charts = [pie_charts.length];
	for(var i = 0; i < pie_charts.length; i++) {
		computer_usage_charts[i] = new Chart(pie_charts[i].getContext('2d')).Pie(usage_data);
	}
</script>

<script src="auto-styling.js"></script>
<script>
	// $('form').each(function () { this.reset() });
	$('#contact-form').submit(function (e) {
		e.preventDefault();
		this.submit();
		setTimeout(function () {
			$('#contact-form')[0].reset();
		}, 100);
		$('#contact_modal').modal('hide');
	});
</script>
<?php include "../includes/analyticstracking.php"; ?>

</body>
</html>
