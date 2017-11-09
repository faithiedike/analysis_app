<!doctype html>
<html>

<head>
    <title>Security Scan</title>
    <meta charset="utf-8" />
    <link href="css/style.css" rel="stylesheet" media="all">
    <script src="js/jquery.min.js"></script>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/jquery.min.js"></script>
    <script src="js/all.js"></script>
    <script src="js/bootstrap.min.js"></script>

</head>

<body>

<div class="container">
    <nav class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Full Security Scan</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#search">Search</a></li>
                </ul>
            </div>
            </div><!-- /.container-fluid -->
    </nav>

    <!-- report process -->

    <?php if(isset($_GET['url'])){?>

        <?php
        $url = $_GET['url'];
        require_once("vendor/autoload.php");
        $certificate = \Spatie\SslCertificate\SslCertificate::createForHostName($url);
        $tags = get_meta_tags($url);
        ?>
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-primary">
                <!-- Default panel contents -->
                <div class="panel-heading">
                    <h2 class="panel-title">
                        Reports
                    </h2>
                </div>
                <ul class="list-group">

                    <li class="list-group-item">
                        <h4>SSL Reports</h4>
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>Issuer</th>
                                <th>Validity</th>
                                <th>Expiration</th>
                                <th>Encryption Algorithm</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td><?php echo $certificate->getIssuer()?></td>
                                <td> <?php echo $certificate->isValid();?></td>
                                <td><?php echo $certificate->expirationDate(); ?></td>
                                <td><?php echo $certificate->getSignatureAlgorithm();?></td>
                            </tr>

                            </tbody>
                        </table>
                    </li>

                    <li class="list-group-item">
                        <h4>Website Expiry Date</h4>
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>Age</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td><?php echo $certificate->expirationDate(); ?> </td>
                            </tr>
                            </tbody>
                        </table>
                    </li>

                    <li class="list-group-item">
                        <h4>Meta Tags</h4>
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>Author</th>
                                <th>Keywords</th>
                                <th>Description</th>
                                <th>Geo Position</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td><?php echo $tags['author']; ?></td>
                                <td><?php echo $tags['keywords']; ?></td>
                                <td><?php echo $tags['description']; ?></td>
                                <td><?php echo $tags['geo_position']; ?></td>
                            </tr>
                            </tbody>
                        </table>
                    </li>

                    <li class="list-group-item">
                        <h4>Anti-Scanning Bots</h4>
                        <div class="alert alert-info">
                            Check if<br/> "User-agent: *<br/>
                            Disallow: /"<br/>

                            exist on <?php echo $url."/robot.txt"?>
                        </div>
                    </li>

                    <li class="list-group-item">
                        <h4>Sql Injection</h4>
                        <div class="alert alert-info">
                            Kindly download this tools to stress test your website <a href="http://sqlninja.sourceforge.net/sqlninjademo.html" target="_blank">Checkout</a>
                        </div>
                    </li>

                    <li class="list-group-item">
                        <h4>Cookies</h4>
                        <div class="alert alert-info">
                            We cannot access Cookies of another website as they are prohibited W3C standard
                        </div>
                    </li>


                </ul>
            </div>
        </div>
    </div>
    <?php }else{?>
    <div class="alert alert-danger">No Report to give Enter a URL by clicking on the search button</div>
    <?php  }?>


</div>


<div id="search">
    <button type="button" class="close">×</button>
    <form method="get">
        <input type="search" name="url" placeholder="enter url" />
        <button type="submit" class="btn btn-primary">Search</button>
    </form>
</div>

</body>

</html>