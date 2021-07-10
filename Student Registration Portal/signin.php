<?php

if(isset($_POST['name'])){                                         //post-gets data more secure than get
    $server="localhost";
    $username="root";
    $password="";

    $con = mysqli_connect($server,$username,$password);

    if(!$con){
        die("conection die due to ".mysqli_connect_error());
    }
    //echo "Successfully Connected to db";

    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $address = $_POST['address'];
    $department = $_POST['department'];
    $class = $_POST['class'];
    $password = $_POST['password'];
    
    $sql = "INSERT INTO `students`.`students` (`name`, `email`, `number`, `address`, `department`, `class`, `password`) 
            VALUES ('$name', '$email', '$number', '$address', '$department', '$class', '$password');";
    //echo $sql;

    if($con->query($sql) == true){
        //echo "succesfully Inserted";
      }
  
      else{
        echo "ERROR: $sql <br> $con->error";
      }
  
      $con->close();
    }
?>



<!DOCTYPE html>

<head>
    <title>Sinhgad Students Signup</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="signin.css">
</head>

<body>

    <center> <img src="D:\N O T E S\TE\WT PRACTICAL\ASSIGN 1\sihagad.jpg" width: "300" height="150" alt="Sinhgad Logo"> </center>

    <br>
    
        <form method="post" action="signin.php">
            <div class="heading" align="center">
                <h3>Student Sign-in Form </h3>
            </div>
      
            <center>
                <br> <br>
                <label> <b>Name</b></label> <i class="fa fa-user-circle" style="font-size:25px"></i>
                <br><br>
                <input type="text" name="name" placeholder="Enter Fullname" required>
                <br><br>

                <label> <b>Email</b></label> <i class="fa fa-envelope" style="font-size:24px"></i>
                <br><br>
                <input type="email" name="email" placeholder="Enter Email ID" required>
                <br><br>

                <label> <b>Contact No</b></label> <i class="fa fa-mobile-phone" style="font-size:36px"></i>
                <br><br>
                <input type="number" name="number" placeholder="Enter Contact No" required>
                <br><br>

                <label> <b>Address</b></label> <i class="fa fa-address-card" style="font-size:24px"></i>
                <br><br>
                <input type="text" name="address" placeholder="Enter Address" required>
                <br><br><br>


                <label> <b>Department</b></label> <i class="fa fa-building" style="font-size:24px"></i>
                <input id="list" type="text" name="department" list="Department" style="height: 19px; width:50px">
                <!--datalist id="Department">
                   <option value="CSE">
                   <option value="IT">
                   <option value="Mech Engg">  
                   <option value="Civil Engg"> 
                 </datalist-->
                <br><br> <br>

                <label> <b>Class</b></label> <i class="fa fa-book" style="font-size:24px"></i>
                <input id="list" type="text"  name="class" list="Class" style="height: 19px; width:40px">
                <!--datalist id="Class">
                   <option value="FE">
                   <option value="SE">
                   <option value="TE">  
                   <option value="BE"> 
                 </datalist-->
                <br><br> <br>

                <label><b>Password</b></label> <i class="fa fa-lock" style="font-size:24px"></i>
                <br><br>
                <input type="password" name="password" placeholder="Enter Password" name="psw" required>
                <br><br>


                <button type="submit"><b>Sign-in </b> </button>
                <input type="reset" value="Reset">
                <br><br>
                <hr>
                <br>
                <a href="login.html">  <b style="color:red;"> I already have a account, Log in !!</b> </a>

            </center>
        </form>
        <br>     
                 <div id="footer">
                                          <em> &copy Sinhgad Technical Institutes </em> 
                 </div> 
</body>

</html>