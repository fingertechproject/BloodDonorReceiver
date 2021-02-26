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
    


    <?php
if(isset($_POST['pname'])){

  $pname=$_POST['pname'];
  $bgroup=$_POST['bgroup'];
  $age=$_POST['age'];
  $rdate=$_POST['rdate'];
  $unit=$_POST['unit'];
  $phone=$_POST['phone'];
  $hname=$_POST['hname'];
  $hlocation=$_POST['hlocation'];
  $padd=$_POST['padd'];
  $purpose=$_POST['purpose'];





$sql="INSERT INTO `bloodreq`(`pfname`, `bg`, `page`, `datetime`, `unit`, `mobile`, `hname`, `hlocate`, `padd`, `pdisc`, `timedate`) VALUES ('$pname','$bgroup','$age','$rdate','$unit','$phone','$hname','$hlocation','$padd','$purpose'current_timestamp());";
$run=mysqli_query($con,$sql);
if($run==true)
{
  echo "inserted";

}
else{
  echo "not inserted".mysqli_error($sql);
}
}

 ?>
    
    <div class="shadow p-3 mb-5 bg-body rounded ">
<div class="container  mt-3 mb-2 col-md-3">
    <a tabindex="0" class="btn btn-lg btn-danger" role="button" data-bs-toggle="popover" data-bs-trigger="focus" title="Donate Blood for Humanity" data-bs-content="Donate Your Blood And Save Others Life">Request For Blood Form</a>
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
    <div class="shadow p-3 mb-5 bg-body rounded ">
      <div class="p-3 mb-2 bg-info text-dark">
    <div class="container mb-2 col-md-3">
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="4img.jpg" class="d-block w-60">
              </div>
              <div class="carousel-item">
                <img src="8img.jpg" class="d-block w-60">
              </div>
              <div class="carousel-item">
                <img src="h2h.jpg" class="d-block w-60">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade"  data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade"  data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
    </div>
    </div>
    </div>
    <div class="shadow p-3 mb-5 bg-body rounded ">
      <div class="p-3 mb-2 bg-info text-dark">
    <div class="container mb-2 w-40 col-md-3 ">
        <form action="requestblood.php" method="post"class="mb-3 w-60 ">
              
            <div class="mb-2">
                <input type="text" class="form-control" id="pname" name="pname" placeholder="Patiant Full Name">
                </div>
                <div class="container mb-2 ">
                    <select  name="bgroup" id="bgroup" class="form-select " aria-label="Default select example">
                        <option selected>Select Your Blood Group</option>
                        <option value="1">A+</option>
                        <option value="2">A-</option>
                        <option value="3">B+</option>
                        <option value="4">B-</option>
                        <option value="5">AB+</option>
                        <option value="6">AB-</option>
                        <option value="7">O+</option>
                        <option value="8">O-</option>
                        <option value="9">A1+</option>
                        <option value="10">A1-</option>
                        <option value="11">A2+</option>
                        <option value="12">A2-</option>
                        <option value="13">A1B+</option>
                        <option value="14">A1B-</option>
                        <option value="15">A2B+</option>
                        <option value="16">A2B-</option>
                        <option value="17">Bombay Blood Group</option>
                        <option value="18">INRA</option>

                      </select>
                </div>
            
            <div class="mb-2">
                <input type="text" class="form-control" name="age" id="age" placeholder="Patiant Age">
                </div>
            <div class="mb-2">
               <label for="rdate">When You Need Blood</label>
                <input type="date" class="form-control" name="rdate" id="rdate" placeholder="When You Need Blood">
            </div>
            <div class="mb-2">
                <input type="text" class="form-control" name="unit" id="unit" placeholder=" How Many Unit You Need">
            </div>
            <div class="mb-2">
                <input type="phone" class="form-control" name="phone" id="phone" placeholder="Mobile Number">
            </div>
            <div class="mb-2">
                <input type="text" class="form-control" name="hname" id="hname" placeholder="Hospital Name">
            </div>
            <div class="mb-2">
                <input type="text" class="form-control" name="hlocation" id="hlocation" placeholder="Hospital Location">
            </div>
            <div class="form-floating">
                <textarea class="form-control" name="padd"  id="padd"></textarea>
                <label for="floatingTextarea">Patient Address</label>
              </div>
          
            <div class="form-floating">
                <textarea class="form-control" name="purpose"  id="purpose"></textarea>
                <label for="floatingTextarea">Write Your Purpose In Brief</label>
              </div>
           
            <div class="mb-2 form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            
          </form>
    </div>
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