<!DOCTYPE html >

<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="labgrid">
    <meta name="author" content"labgrid">
    <link rel="icon" href="">

    <title>About</title>

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

</head>
<body>
    <?php include "navigation_top.php"; ?>

    <div class="main">
        <h1 class="sub-header">About</h1>
        <h2 class="sub-header">The Idea</h2>
        <p>LabGrid is an open-source distributed computing project.  The goal is to take the often idle computers at the University of Chicago Laboratory School and link them into a single computing cluster, which can execute high-throughput programs and jobs, as a resource for the school.  Students and faculty will be welcome to submit jobs through our web interface(under construction).</p>
        <h2 class="sub-header">How It Works </h2>
        <p>Using HTCondor, the computers are linked to a secure private network through the internet.  One computer is the central manager, controlling the flow of jobs.  The computers do not run jobs constantly, rather small clusters are created elastically and dynamically as needed.  Each computer is configured to only run jobs when idle, monitoring keyboard and mouse input to determine when it is available.</p>
        <h2 class="sub-header">Meet the Team</h2>
        <h2 class="sub-header">Theodore Ando</h2>
        <img class="img-responsive" src="the_team.jpg">
            <p>The Brian Sliva of the team.</p>
        <h2 class="sub-header">Ben Glick</h2> 
            <img class="img-responsive" src="https://www.cs.uchicago.edu/sites/cs/files/styles/columnwidth-wider/public/uploads/images/foster_0.jpg?itok=PJqRsRCD">  
            <p>Top Geezer</p>
        <h2 class="sub-header">Logan Young</h2>   
            <p>Kinda Cool, I guess</p>
        
    </div>

</body>
</html>

