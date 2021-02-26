<?php
include 'serverconnect.php';

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <!-- Bootstrap CSS -->
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>


    <div class="shadow p-3 mb-5 bg-body rounded ">
<div class="container  mt-3 mb-2 col-md-3">
    <a tabindex="0" class="btn btn-lg btn-danger" role="button" data-bs-toggle="popover" data-bs-trigger="focus" title="Donate Blood for Humanity" data-bs-content="Donate Your Blood And Save Others Life">New User Registration For Blood Donation</a>
</div>
    </div>
<div class="shadow p-3 mb-5 bg-body rounded ">
    <div class="container mt-2 mb-2">
        <ul class="nav justify-content-center">
            <li class="nav-item">
              <a class="nav-link  btn btn-outline-info"  href="register.php">Donate Blood</a>
            </li>
            <li class="nav-item">
              <a class="nav-link btn btn-outline-info" href="donor.php">Search For Donor</a>
            </li>
            <li class="nav-item">
              <a class="nav-link btn btn-outline-info" href="requestblood.php">Request For Blood</a>
            </li>
           
          </ul>
    </div>
</div>
<?php
if(isset($_POST['name'])){

  $name=$_POST['name'];
  $bgroup=$_POST['bgroup'];
  $dage=$_POST['dage'];
  $phone=$_POST['phone'];
  $state=$_POST['state'];
  $district=$_POST['district'];
  $city=$_POST['city'];
  $email=$_POST['email'];
  $userid=$_POST['userid'];
  $password=$_POST['password'];
  $rpassword=$_POST['rpassword'];
  $avail=$_POST['avail'];




$sql="INSERT INTO `register` ( `fname`, `bgroup`, `age`, `mobile`, `state`, `district`, `city`, `email`, `userid`, `password`, `rpassword`, `availbility`, `datetime`) VALUES ( '$name', '$bgroup', '$dage', '$phone', '$state', '$district', '$city', '$email', '$userid', '$password', '$rpassword', '$avail', current_timestamp());";
 $run=mysqli_query($con,$sql);
 if($run==true)
 {
   echo "
   <div class='alert alert-success alert-dismissible fade show' role='alert'>
   <strong>ThankYou!</strong> Your Form is Submitted Successfully.
   <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
 </div>";
   

 }
 else{
   echo "not inserted";
 }
}

  ?>
    <div class="shadow p-3 mb-5 bg-body rounded ">
    <div class="container mb-2 w-40 col-md-3 ">
    <form  action="register.php" method="post"class="mb-3 w-60  ">
          
        <div class="mb-2">
            <input type="text" class="form-control" id="name" name="name" placeholder=" Full Name">
            </div>
            <div class="container mb-2 ">
                <select  name="bgroup" id="bgroup" class="form-select " aria-label="Default select example">
                    <option selected>Select Your Blood Group</option>
                    <option value="A+">A+</option>
                    <option value="A-">A-</option>
                    <option value="B+">B+</option>
                    <option value="B-">B-</option>
                    <option value="AB+">AB+</option>
                    <option value="AB-">AB-</option>
                    <option value="0+">O+</option>
                    <option value="O-">O-</option>
                    <option value="A1+">A1+</option>
                    <option value="A1-">A1-</option>
                    <option value="A2+">A2+</option>
                    <option value="A2-">A2-</option>
                    <option value="A1B+">A1B+</option>
                    <option value="A1B-">A1B-</option>
                    <option value="A2B+">A2B+</option>
                    <option value="A2B-">A2B-</option>
                    <option value="Bombay Blood Group">Bombay Blood Group</option>
                    <option value="INRA">INRA</option>

                  </select>
            </div>
        
        <div class="mb-2">
            <input type="text" class="form-control" id="dage" name="dage" placeholder="Your Age">
            </div>
   
        <div class="mb-2">
            <input type="phone" class="form-control" id="phone" name="phone" placeholder="Mobile Number">
        </div>
      
        <div class="container mb-2 ">
            <select  name="state" id="state" class="form-select " aria-label="Default select example">
                <option selected>Select Your State</option>
                <option value="A+">A+</option>
                <option value="A-">A-</option>
                <option value="B+">B+</option>
                <option value="B-">B-</option>
                <option value="AB+">AB+</option>
                <option value="AB-">AB-</option>
                <option value="O+">O+</option>
                <option value="O-">O-</option>
                <option value="A1+">A1+</option>
                <option value="A1-">A1-</option>
                <option value="A2+">A2+</option>
                <option value="A2-">A2-</option>
                <option value="A1B+">A1B+</option>
                <option value="A1B-">A1B-</option>
                <option value="A2B+">A2B+</option>
                <option value="A2B-">A2B-</option>
                <option value="Bombay Blood Group">Bombay Blood Group</option>
                <option value="INRA">INRA</option>

              </select>
        </div>
        <div class="container mb-2 ">
            <select  name="district" id="district" class="form-select " aria-label="Default select example">
                <option selected>Select Your District</option>
                <option value="A+">A+</option>
                <option value="A-">A-</option>
                <option value="B+">B+</option>
                <option value="B-">B-</option>
                <option value="AB+">AB+</option>
                <option value="AB-">AB-</option>
                <option value="O+">O+</option>
                <option value="O-">O-</option>
                <option value="A1+">A1+</option>
                <option value="A1-">A1-</option>
                <option value="A2+">A2+</option>
                <option value="A2-">A2-</option>
                <option value="A1B+">A1B+</option>
                <option value="A1B-">A1B-</option>
                <option value="A2B+">A2B+</option>
                <option value="A2B-">A2B-</option>
                <option value="Bombay Blood Group">Bombay Blood Group</option>
                <option value="INRA">INRA</option>

              </select>
        </div>
        <div class="container mb-2 ">
            <select  name="city" id="city" class="form-select " aria-label="Default select example">
                <option selected>Select Your City</option>
                <option value="A+">A+</option>
                <option value="A-">A-</option>
                <option value="B+">B+</option>
                <option value="B-">B-</option>
                <option value="AB+">AB+</option>
                <option value="AB-">AB-</option>
                <option value="O+">O+</option>
                <option value="O-">O-</option>
                <option value="A1+">A1+</option>
                <option value="A1-">A1-</option>
                <option value="A2+">A2+</option>
                <option value="A2-">A2-</option>
                <option value="A1B+">A1B+</option>
                <option value="A1B-">A1B-</option>
                <option value="A2B+">A2B+</option>
                <option value="A2B-">A2B-</option>
                <option value="Bombay Blood Group">Bombay Blood Group</option>
                <option value="INRA">INRA</option>

              </select>
        </div>
       
        <div class="mb-2">
            <input type="email" class="form-control" id="email" name="email" placeholder="Enter Your Email">
        </div>
        <div class="mb-2">
            <input type="userid" class="form-control" id="userid" name="userid" placeholder="User ID">
        </div>
        <div class="mb-2">
            <input type="password" class="form-control" id="password" name="password" placeholder="Create A New Password">
        </div>
        <div class="mb-2">
            <input type="password" class="form-control" id="rpassword" name="rpassword" placeholder="Confirm Your Password ">
        </div>
       
        <div class="container mb-2 ">
            <label for="avail">Please Confirm Your Availbility to Donate Blood</label>
            <select  id="avail" name="avail" class="form-select " aria-label="Default select example">
                <option selected>Please Confirm Your Availbility to Donate Blood</option>
                <option value="1">Available</option>
                <option value="2">UnAvailable</option>
                

              </select>
        </div>

        <div class="mb-2 form-check">
          <input type="checkbox" class="form-check-input" id="exapmleCheck1">
          <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" name="submit" id="submit" class="btn btn-primary">Submit</button>
        
      </form>
</div>
</div>


    
    
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script sr c="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
  </body>
</html>