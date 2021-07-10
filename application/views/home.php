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
			<h1>URL Shorter</h1>
		</div>
		
		<?php echo form_open(); ?>
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="input-group">
						<input type="url" name="url" class="form-control" placeholder="Enter your URL here..." autocomplete="off" />
						<span class="input-group-btn">
							<button class="btn btn-default" type="submit">Click Here!</button>
						</span>
					</div>
					
					<?php if( $error ): ?>
					<p class="text-danger"><?php echo $error; ?></p>
					<?php endif; ?>
				</div>
			</div>
		<?php echo form_close(); ?>
		
		<?php if( $show_details ): ?>
		<div class="well url_data">
			<h2>Your new created Short URL :</h2>
			
			<div class="input-group">
				<input type="text" value="<?php echo base_url( $url_data->alias ); ?>" class="form-control input-lg" readonly="readonly" />
				<span class="input-group-btn">
					<a href="<?php echo base_url( $url_data->alias ); ?>" class="btn btn-default btn-lg" target="_blank">
						<span class="glyphicon glyphicon-share-alt" aria-hidden="true"></span>
					</a>
				</span>
			</div>
			
			<p>&nbsp;</p>
			<p>You can view your URL here: <a href="<?php echo base_url( 'view/'.$url_data->alias  ); ?>" target="_blank"><?php echo base_url( 'view/'.$url_data->alias  ); ?></a></p>
			
		</div>
		<?php endif; ?>

	</div>

	
	<script  src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
	
	<script  src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	</body>
	</html>
