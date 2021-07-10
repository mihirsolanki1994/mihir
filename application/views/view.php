<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">

		<title>URL</title>

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	</head>

		<style>
			body {
				padding-top: 50px;
			}
			.intro {
				padding: 40px 15px;
				text-align: center;
			}

			.intro h1 {
				margin-bottom: 40px;
			}

			.url_data {
				margin-top: 60px;
				text-align: center;
			}

			.url_data h2 {
				font-size: 25px;
			}
		</style>

	<body>

	<div class="container">

		<div class="intro">
			<h1>Statistics for URL</h1>
		</div>
		
		<div class="well">		
			<h3><?php echo $url_data->url; ?></h3>
			<p class="help-block">Created: <?php echo $url_data->created; ?></p>
		</div>

		
		<?php if($logs): ?>
		
		<table class="table table-striped">
			<thead>
				<tr>
					<th>Date</th>
					<th>Number of clicks</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($logs as $log): ?>
				<tr>
					<th><?php echo date('Y-m-d', strtotime( $log->created )); ?></th>
					<th><?php echo $log->sum; ?></th>
				</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
		
		<?php else: ?>
		
		<div class="alert alert-warning">
			<p>Unfortunately, there're no statistics available.
		</div>
		
		<?php endif; ?>
				

	</div>


	
	<script  src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
	
	<script  src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	</body>
	</html>
