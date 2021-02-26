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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>


    <div class="shadow p-3 mb-5 bg-body rounded ">
<div class="container  mt-3 mb-2 col-md-3">
    <a tabindex="0" class="btn btn-lg btn-danger" role="button" data-bs-toggle="popover" data-bs-trigger="focus" title="Donate Blood for Humanity" data-bs-content="Donate Your Blood And Save Others Life">Search For A Blood Donor</a>
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

    <div class="shadow p-3 mb-2 bg-body rounded ">
        <div class="p-3 mb-2 bg-info text-dark">
    <div class="container mb-2 w-40 col-md-3 ">
        <form action="donor.php" method="post" class="mb-3 w-60 ">
              
    <div class="container mb-2 ">
        <select  name="bgroup" id="bgroup" class="form-select " aria-label="Default select example">
            <option selected>Select Your Blood Group</option>
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
        <select  name="bgroup" id="bgroup" class="form-select " aria-label="Default select example">
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
        <select  name="bgroup" id="bgroup" class="form-select " aria-label="Default select example">
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
        <select  name="bgroup" id="bgroup" class="form-select " aria-label="Default select example">
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

   <div class="container col-md-3">
      <button class="btn btn-outline-success " type="submit"><i class="fa fa-search" ></i></button>
    </div>
</form>
</div>
</div>
</div>


<div class="container  col-md-15">
<table class="table table-success table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Blood Group</th>
      <th scope="col">Phone</th>
      <th scope="col">City</th>
      <th scope="col">Availability</th>
    </tr>
  </thead>
  <tbody>
  
   <?php
   

  $sql = "SELECT * FROM `register` WHERE bgroup='$bgroup' AND  state='$state' AND district='$district' AND city='$city'";
$result = mysqli_query($con, $sql);
echo "<br>";

if(isset($_POST['city'])){
   
  $bgroup=$_POST['bgroup'];
  $state=$_POST['state'];
  $district=$_POST['district'];
  $city=$_POST['city'];
$num= mysqli_num_rows($result);
if($num>0){
  while($row=mysqli_fetch_assoc($result)){
    
    echo "<tr>
    <th scope='row'>".$row['srn']."</th>
    <td>".$row['fname']."</td>
    <td>".$row['bgroup']."</td>
    <td>".$row['mobile']."</td>
    <td>".$row['city']."</td>
    <td>".$row['availbility']."</td>
  </tr>";
 
  }
}
   }

?> 
   
  </tbody>
</table>
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