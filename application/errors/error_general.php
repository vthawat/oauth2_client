<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="shortcut icon" href="../oauth2_server/uiux/web/vendors/ecs/images/app_icons/analytics.png">

    <title>Error</title>

    <!-- Bootstrap core CSS -->
     <link href="https://localhost/oauth2_server/uiux/web/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="https://localhost/oauth2_server/uiux/web/vendors/Font-Awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Custom styles for this template -->
   <link href="https://localhost/oauth2_server/uiux/web/vendors/ecs/css/error-404.css" rel="stylesheet" type="text/css" />
  </head>
  <body>
		<div class="container">
		    <div class="row">
		        <div class="col-md-12">
		            <div class="error-template well">
		            	<div class="jumbotron">
		                <h1>Oops!</h1>
		                <h2>Error <?=$status_code?></h2>
		                <div class="error-details">
		                    <?=$message?>
		                </div>
		                <div class="error-actions">
		                    <a href="<?=base_url()?>" class="btn btn-primary btn-lg"><span class="fa fa-fw fa-home"></span>Home</a>
		                </div>
		            </div>
		            </div>
		        </div>
		    </div>
		</div>  	
  </body>
</html>