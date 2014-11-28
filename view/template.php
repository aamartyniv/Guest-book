<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link href="../design/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../design/css/style.css">
</head>

<body>

<header id="nav">
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Назва проекта</a>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="#">Стартова</a></li>
                    <li><a href="#about">Про сайт</a></li>
                    <li><a href="#contact">Контакти</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<br>
<br>

<div class="row">
    <div class="col-xs-2"></div>

    <div class="col-xs-8">
        <div id="content">

            <h1>
                <?php include_once PATH . "/core/route.php"; ?>
            </h1>

        </div>
    </div>

    <div class="col-xs-2"></div>
</div>


<footer>



</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="../design/bootstrap/js/bootstrap.min.js"></script>

</body>
</html>