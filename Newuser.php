
<html>

    <head>
         <title>New User</title>
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
        <div class="container-fluid" style="margin-top: 80px;">
            <div class="card">
                <div class="card-head bg-dark text-white text-center">
                    <h4>New User</h4>
                </div>
                <div class="card-body">
                    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" enctype="multipart/form-data" >
                        <div class="row">
                            <div class="col-sm form-group m-3">
                                <label for="name">Name :</label>
                                <input type="text" class="form-control"  name="fullname" required/>
                            </div>
                            <div class=" col-sm form-group m-3">
                                <label for="rel">Father's/Husband's Name :</label>
                                <input type="text" class="form-control" id="rel" name="relation"  required/>
                            </div>
                        </div>
                        <div class="row">
                            
                           
                                <div class="col-sm form-group m-3">
                                    <label for="dateBorn">Date :</label>
                                    <input type="number" maxlength="2" class="form-control " name="date" id="dateBorn" onKeyPress="if(this.value.length==2) return false;"  required />
                                </div>
                                <div class="form-group col-sm m-3">
                                    <label for="month">Month :</label>
                                    <select type="text" class="form-control " name="month" id="month"  required>
                                    <option value="Jan">Jan</option>
                                    <option value="Feb">Feb</option>
                                    <option value="March">March</option>
                                    <option value="April">April</option>
                                    <option value="May">May</option>
                                    <option value="June">June</option>
                                    <option value="July">July</option>
                                    <option value="August">August</option>
                                    <option value="September">September</option>
                                    <option value="October">October</option>
                                    <option value="November">November</option>
                                    <option value="December">December</option>
                                </select>
                                </div>
                                <div class="form-group col-sm m-3">
                                    <label for="year">Year :</label>
                                    <input type="number" class="form-control " name="year" maxlength="4" id="year"  onKeyPress="if(this.value.length==4) return false;"  required/>
                                </div>

                                
                                
                                
                                
                            
                            <div class="col-sm form-group m-3">
                                <label for="gender">Gender :</label>
                                <select type="text" class="form-control" id="gender" name="gender" >
                                    <option >Male</option>
                                    <option >Female</option>
                                    <option >Others</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-sm form-group m-3">
                                <label for="city">City :</label>
                                <input type="text" class="form-control" id="city" name="city" required>
                            </div>
                            <div class="col-sm form-group m-3">
                                <label for="state">State :</label>
                                <input type="text" class="form-control" id="state" name="state" required>
                            </div>
                            <div class="col-sm form-group m-3">
                                <label for="area">Constituency(Area) :</label>
                                <input type="text" class="form-control" id="area" name="area" required>
                            </div>
                            
                        </div>
                        <div class="row">
                            <div class="col form-group m-3">
                                <label for="file">Upload the image</label>
                                <input type="file" class="form-control-file border" id="fileToUpload" name="fileToUpload" required>
                            </div>
                        </div>
                        <button class="btn btn-success btn-block btn-block" id="create" type="submit">Create</button>
                        
                        

                    </form>
                    
                </div>
                <div class="card-footer" id="Result">
                <?php 
                    $name = $relation  = $city 	= $state = $area= $gender  = $date= $month = $year ='';		
                    if($_SERVER['REQUEST_METHOD']=="POST")
                    {
                        $name 		= $_POST['fullname'];
                        $relation   = $_POST['relation'];
                        $city 	    = $_POST['city'];
                        $state	    = $_POST['state'];
                        $area 		= $_POST['area'];
                        $gender     = $_POST['gender'];
                        $date 		= $_POST['date'];
                        $month 		= $_POST['month'];
                        $year 		= $_POST['year'];
                        $unique     = uniqid();        
                        $target_dir = "uploads/";
                        $target_file = $target_dir . basename($_FILES['fileToUpload']['name']);
                        $image=$_FILES['fileToUpload']['name'];
            
                    }
            
                    if(!empty($name) && !empty($relation) && !empty($city) && !empty($state) && !empty($area) && !empty($gender)
                    && !empty($date) && !empty($month) && !empty($year))
                    {
                        $db_username="id11849615_root";
                        $db_password="pass123";
                        $db_host="localhost";
                        $db_name="id11849615_votertable";

                        $conn=new mysqli($db_host,$db_username,$db_password,$db_name);
                        if(mysqli_connect_error())
                        {
                            die('Connect Errror('.mysqli_connect_errno().')'. mqsqli_connect_error());
                        }
                        else{
                            move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target_file);
                            $INSERT="INSERT Into voters (username,relation,city,states,area,gender,dates,months,years,img_dir,unique_id) values(?,?,?,?,?,?,?,?,?,?,?)";
                            $stmt=$conn->prepare($INSERT);
                            $stmt->bind_param("ssssssisiss",$name,$relation,$city,$state,$area,$gender,$date,$month,$year,$image,$unique );
                            $stmt->execute();
                            echo "<div class='alert alert-success'><strong>New Record added Successfully!!</strong></div>";
                        }
                        $stmt->close();
                        $conn->close();

                    }
                    else
                    {
                        echo "All fields are required.";
                        die();
                    }

                ?>  
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