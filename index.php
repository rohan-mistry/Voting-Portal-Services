<!DOCTYPE html>
<html>
<head>
    <title>Voter Id</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body style="background-color:#e3e1da" onload="typeWriter(text1,'typeEffect1',i);typeWriter(text2,'typeEffect2',j);typeWriter(text3,'typeEffect3',k);">
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top justify-content-end">

        <?php      
            echo "<a class='navbar-brand' href='http://".$_SERVER['HTTP_HOST']."/index.php/'>
                <img src='http://".$_SERVER['HTTP_HOST']."/logo.jpg' style='width:40px;'>
                <span class='ml-1'>Voter Portal Services</span>
            </a>";
        ?> 
         <!-- Toggler/collapsibe Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav ml-auto" >
                <li class="nav-item">
                    <?php
                        
                        echo "<a style='color:white' class='nav-link' href='http://".$_SERVER['HTTP_HOST']."/index.php/'>
                            <i class='fas fa-home' style='font-size: 18px'>Home</i>
                        </a>";
                    ?> 
                </li>
                <li class="nav-item">
                    <?php
                        
                        echo "<a style='color:white' class='nav-link' href='http://".$_SERVER['HTTP_HOST']."/Search.php/'>
                            <i class='fas fa-search' style='font-size: 18px'>Search</i>
                        </a>";
                    ?> 
                </li>
                <li class="nav-item">
                    <?php
                        
                        echo "<a style='color:white' class='nav-link' href='http://".$_SERVER['HTTP_HOST']."/Newuser.php/'>
                            <i class='fas fa-user-plus' style='font-size: 18px'>Register</i>
                        </a>";
                    ?> 
                </li>
            </ul>
        </div>  
    </nav>
   <div class="container-fluid" style="margin-top: 80px;" >
        <div class="row">   
            <div class="col-sm-6">
                <div class="card  ">
                    <div class="card-header text-center bg-dark text-white">
                        <h3>Click to avail following facilities</h3>
                    </div>
                    <div class="card-body">
                        <table class="table text-center ">
                            <tr class="table-primary">
                                <th>
                                <?php
                    
                                    echo "<a class='text-dark' href='http://".$_SERVER['HTTP_HOST']."/Search.php/'>Search</a>";
                                ?>    
                                </th>
                            </tr>
                            <tr class="table-info ">
                                <th>
                                <?php
                    
                                    echo "<a class='text-dark' href='http://".$_SERVER['HTTP_HOST']."/Newuser.php/'>New Registration</a>";
                                ?>  
                                </th>
                            </tr>
                            
                        </table>
                        
                    </div>
                </div>
                <div class="card m-3 ">
                    <div class="card-header text-center bg-dark text-white">
                        <h4>Just 3 steps away from being an independent citizen</h4>
                    </div>
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><h3> <span class="badge badge-dark mr-1">1</span>Enter required details.</h3></li>
                            <li class="list-group-item"><h3> <span class="badge badge-dark mr-1">2</span>Upload your recent image.</h3></li>
                            <li class="list-group-item"><h3> <span class="badge badge-dark mr-1">3</span>Create.</h3></li>
                            
                            
                        </ul>
                        
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card bg-primary text-white text-center">
                    <div class="card-body">
                        <h1 id="typeEffect1"></h1>
                    </div>
                </div>
                <div class="card mt-3 bg-warning text-white text-center">
                    <div class="card-body">
                        <h1 id="typeEffect2"></h1>
                        <h3 class="text-center">
                        <?php
                            echo "<a class='text-danger'style='text-decoration:underline' href='http://".$_SERVER['HTTP_HOST']."/Newuser.php/'>Register Now!!</a>";
                        ?> 
                        </h3>
                    </div>
                </div>
                <div class="card bg-success mt-3 text-white text-center">
                    <div class="card-body">
                        <h1 style="font-family: 'Courier New', Courier, monospace;">
                            <blockquote id="typeEffect3"></blockquote>
                            <footer>-John F. Kennedy</footer>
                        </h1>
                    </div>
                </div>
            </div>
        </div>   
   </div>
</body>
<script>
    var i = 0,j=0,k=0;
    var text1 = 'Have you registered as a voter yet?'; 
    var text2 = 'If not What are you waiting for?';
    var text3 = 'The igorance of one voter in a democracy impairs the security of all.';
    var speed = 50; 
    function typeWriter(txt,id,x) {
    if (x < txt.length) {
        document.getElementById(id).innerHTML += txt.charAt(x);
        x++;
        setTimeout(typeWriter, speed,txt,id,x);
    }
    }
</script>
</html>  