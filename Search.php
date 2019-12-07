<?php 
require("library/fpdf.php");
?>
<html>
    <head>
        <title>Search</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
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
        <div class="container" style="margin-top: 80px;" >
            <div class="card">
                <div class="card-head bg-dark text-white text-center">
                    <h4>Enter Details to perform search</h4>
                </div>
                <div class="card-body">
                    <!-- Nav pills -->
                    <ul class="nav nav-pills justify-content-center"  role="tablist">
                        <li class="nav-item">
                        <a class="nav-link active" data-toggle="pill" href="#home">General</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" data-toggle="pill" href="#menu1">Unique Id</a>
                        </li>
                    </ul>
    
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div id="home" class="container tab-pane active"><br>
                            <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>"  enctype="multipart/form-data">
                                <div class="form-group m-3">
                                    <label for="name">Name:</label>
                                    <input type="text" class="form-control" id="name" name="fullname" required>
                                </div>
                                <div class="form-group m-3">
                                    <label for="city">City:</label>
                                    <input type="text" class="form-control" id="city" name="city" required>
                                </div>
                                <div class="form-group m-3">
                                    <label for="state">State:</label>
                                    <input type="text" class="form-control" id="state" name="state" required>
                                </div>
                                <div class="form-group m-3">
                                    <label for="area">Constituency:</label>
                                    <input type="text" class="form-control" id="area" name="area" required>
                                </div>
                                <button class="btn btn-primary btn-block" type="submit" name="submit1">Search</button> 
                            </form>
                        </div>
                        <div id="menu1" class="container tab-pane fade"><br>
                            <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>"  enctype="multipart/form-data">
                                <div class="form-group m-3">
                                    <label for="uni">Enter 13 digit Unique Id of voter card :</label>
                                    <input type="text" class="form-control" id="uni" name='unique_id' required>
                                </div>
                                <button class="btn btn-primary btn-block" type="submit" name="submit2">Search</button> 
                            </form>
                        </div>
                        
                    </div>
                    
                </div>
               

            </div>
            <div class="card m-3">
            <div class="card-head bg-dark text-white">
                <h2 class="text-center ">Results</h2>
            </div>
                <div class="card-body">
                   <ul class="list-group">
                        <?php 
                            
                            $name = $city 	= $state = $area =$id_no='';		
                            if($_SERVER['REQUEST_METHOD']=="POST" )
                            {
                                if(isset($_POST['submit1']))
                                {
                                    $name 		= $_POST['fullname'];
                                    $city 	    = $_POST['city'];
                                    $state	    = $_POST['state'];
                                    $area 		= $_POST['area'];
                                }
                                if(isset($_POST['submit2']))
                                {
                                    $id_no      = $_POST['unique_id'];
                                }
                                
                            
                                $sqlconn=new mysqli('#','#','#','#')or die($sqlconn->connect_error);
                                $result=$sqlconn->query("SELECT * FROM voters") or die($sqlconn->error);
                           
                                $found=0;
                                while($temp=$result->fetch_assoc())
                                {
                                   
                                    if($name==$temp['username'] && $city==$temp['city'] && $state==$temp['states']
                                    && $area==$temp['area'] || $id_no==$temp['unique_id'])
                                    {
                                        $found=1;
                                        

                        
                                        echo "<li class='list-group-item'>
                                        <div class='row'>
                                            <div class='col-sm-4 p-0'>
                                                <img class='mx-auto d-block' width=75 height=75 src='http://".$_SERVER['HTTP_HOST']."/p3/uploads/".$temp['img_dir']."'>
                                            </div>
                                            <div class='col-sm-4'>
                                                <div style=';font-weight:bold;font-size: 16px;'>
                                                Name : ".$temp['username']."
                                                    <div>
                                                    Unique Id : ".$temp['unique_id']." 
                                                    </div>
                                                    <div>
                                                    Date Of Birth : ".$temp['dates']." ".$temp['months']." ".$temp['years']."
                                                    </div>
                                                    
                                                </div> 
                                            </div>
                                            <div class='col-sm-4'>
                                                <button class='btn btn-success btn-block' >Download</button>
                                            </div>
                                        </>
                                        
                                       
                                        </li>";
                                        
                                        //Download option(Incomplete)
                                        /*
                                        echo '<form method="post" action="Search.php"><input class="btn btn-success" type="submit" name="download" value="Download" ></form>';

                                        if (isset($_POST['download'])) {
                                           
                                                
                                            download();
                                    
                                                    
                                        }
                                       function download()
                                       {
                                            require("library/fpdf.php");



                                            $pdf=new FPDF('l','mm','A4');
                                            $pdf->AddPage();
                                            $pdf->SetFont('Arial','B',10);
                                            $pdf->cell(40,10,"Name",1,0,'C');
                                            $pdf->cell(50,10,"Father/Husband's Name",1,0,'C');
                                            $pdf->cell(30,10,"Gender",1,0,'C');
                                            $pdf->cell(40,10,"City",1,0,'C');
                                            $pdf->cell(40,10,"State",1,0,'C');
                                            $pdf->cell(40,10,"Area",1,0,'C');
                                            $pdf->cell(40,10,"DOB",1,1,'C');
                                        
                                            $pdf->SetFont('Arial','',5);

                                            
                                                $pdf->cell(40,10,$temp['username'],1,0,'C');
                                                $pdf->cell(50,10,$temp['relation'],1,0,'C');
                                                $pdf->cell(30,10,$temp['gender'],1,0,'C');
                                                $pdf->cell(40,10,$temp['city'],1,0,'C');
                                                $pdf->cell(40,10,$temp['states'],1,0,'C');
                                                $pdf->cell(40,10,$temp['area'],1,0,'C');
                                                $pdf->cell(40,10,$temp['dates'].$temp['months'].$temp['years'],1,1,'C'); 
                                            
                                        
                                        $pdf->OutPut();
                                       }
                                       */
                                    }
                                }
                                if($found==0)
                                {
                                    echo '<h1>Record not found</h1>';
                                 }
                               
                            }
                            
                           
                        ?>       
                   </ul>
                </div>
            </div>
        </div>
        <script>
            if ( window.history.replaceState ) {
                window.history.replaceState( null, null, window.location.href );
            }
        </script>
    </body>
</html>
