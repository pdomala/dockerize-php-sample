<!DOCTYPE html>
<!--
This is the index page of Launch EC2 Application.
It accepts InstanceCount, InstanceName, AccessKeyID & SecretAccessKey as input parameters and creates specified number of instances on AWS.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Dockerize PHP Sample</title>
        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <!-- Bootstrap theme -->
        <link href="css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/theme.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">My PHP Application On Docker</a>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="index.php">Home</a></li>
                    </ul>
                </div>
            </div>
        </nav>

            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="well well-lg text-center">
                            <h4>This is a sample PHP Application running on Docker.</h4>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12" style="padding-left: 20px; padding-right: 20px">
                        <?php echo phpinfo(); ?>
                    </div>
                </div>
            </div>
    </body>
</html>
