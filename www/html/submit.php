<!DOCTYPE html >

<html>
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="labgrid">
        <meta name="author" content"labgrid">
        <link rel="icon" href="">

    <title>Submit A Job--Lab Grid</title>

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
    <link rel="stylesheet" href="dashboard.css">
        <!-- Latest compiled and minified JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.2/js/bootstrap.min.js"></script>

        <!-- Graphing Library -->
        <script src="Chart.js"></script>

        <script>
                $(document).ready(function () {
                        $(".side_tab").click(function () {
                                $(".side_tab").removeClass("active");
                                $(this).addClass("active");
                        })
                })
        </script>
</head>
<body>
<?php
include "navigation_top.php";
?>
<div class="container-fluid">
<div class="row">
        <?php
        include "navigation_side.php";
        ?>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            <h1 class="page-header">Submit A Job</h1>

            <div class="row placeholders">
                <p>This Page is Under Construction</p>
            </div>


        </div>
    </div>
</div>

<?php include "login_window.php"; ?>

</body>
</html>

