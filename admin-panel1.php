<!DOCTYPE html>
<?php 
$con=mysqli_connect("localhost","root","","vaccinems");

include('newfunc.php');

if(isset($_POST['docsub']))
{
  $doctorname=$_POST['doctorname'];
  $doctor=$_POST['doctor'];
  $dpassword=$_POST['dpassword'];
  $demail=$_POST['demail'];
  $spec=$_POST['special'];
  $docFees=$_POST['docFees'];
  $query="insert into doctb(doctorname,username,password,email,spec,docFees)values('$doctorname','$doctor','$dpassword','$demail','$spec','$docFees')";
  $result=mysqli_query($con,$query);
  if($result)
    {
      // echo "<script>alert('Doctor added successfully!');</script>";
  }
}


if(isset($_POST['docsub1']))
{
  $demail=$_POST['demail'];
  $query="delete from doctb where email='$demail';";
  $result=mysqli_query($con,$query);
  if($result)
    {
      echo "<script>alert('hosp/vacci removed successfully!');</script>";
  }
  else{
    echo "<script>alert('Unable to delete!');</script>";
  }
}


?>
<html lang="en">
  <head>


    <!-- Required meta tags -->
    <meta charset="utf-8">
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
      <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
      <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <a class="navbar-brand" href="#"><i class="fas fa-syringe" aria-hidden="true"></i> VACCINATION MANAGEMENT SYSTEM</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <script >
    var check = function() {
  if (document.getElementById('dpassword').value ==
    document.getElementById('cdpassword').value) {
    document.getElementById('message').style.color = '#5dd05d';
    document.getElementById('message').innerHTML = 'Matched';
  } else {
    document.getElementById('message').style.color = '#f55252';
    document.getElementById('message').innerHTML = 'Password fields doesnot match';
  }
}

    function alphaOnly(event) {
  var key = event.keyCode;
  return ((key >= 65 && key <= 90) || key == 8 || key == 32);
};
  </script>

  <style >
    .bg-primary {
      background: #F0F2F0;  /* fallback for old browsers */
    background: -webkit-linear-gradient(to right, #000C40, #F0F2F0);  /* Chrome 10-25, Safari 5.1-6 */
    background: linear-gradient(to right, #000C40, #F0F2F0); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
}

.col-md-4{
  max-width:20% !important;
}

.list-group-item.active {
    z-index: 2;
    color: #fff;
    background: #F0F2F0; 
    background: -webkit-linear-gradient(to right, #000C40, #F0F2F0);
    background: linear-gradient(to right, #000C40, #F0F2F0);
    border-color: #c3c3c3;
}
.text-primary {
    color: #342ac1!important;
}

#cpass {
  display: -webkit-box;
}

#list-app{
  font-size:15px;
}

.btn-primary{
  background-color: #3c50c1;
  border-color: #3c50c1;
}




#scroll-top{
  position: fixed;
  top:-120%;
  right:2rem;
  padding:.5rem 1.5rem;
  font-size: 4rem;
  background:var(--red);
  color:#471a33;
  border-radius: .5rem;
  transition: 1s linear;
  z-index: 1000;
}

#scroll-top.active{
  top:calc(100% - 12rem)
}

.loader-container{
  position: fixed;
  top:0; left:0;
  z-index: 10000;
  background:#fff;
  display: flex;
  align-items: center;
  justify-content: center;
  height:100%;
  width:100%;
}

.loader-container.fade-out{
  top:-120%;
}
  </style>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
     <ul class="navbar-nav mr-auto">
       <li class="nav-item">
        <a class="nav-link" href="logout1.php"><i class="fa fa-power-off" aria-hidden="true"></i> Logout</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="#"></a>
      </li>
    </ul>
  </div>
</nav>
  </head>
  <style type="text/css">
    button:hover{cursor:pointer;}
    #inputbtn:hover{cursor:pointer;}
  </style>
  <body style="padding-top:50px;">
   <div class="container-fluid" style="margin-top:50px;">
    <h3 style = "margin-left: 40%; padding-bottom: 20px;font-family: 'IBM Plex Sans', sans-serif;"> WELCOME ADMINISTRATOR </h3>
    <div class="row">
  <div class="col-md-4" style="max-width:25%;margin-top: 3%;">
    <div class="list-group" id="list-tab" role="tablist">
      <a class="list-group-item list-group-item-action active" id="list-dash-list" data-toggle="list" href="#list-dash" role="tab" aria-controls="home">Dashboard</a>
      <a class="list-group-item list-group-item-action" href="#list-doc" id="list-doc-list"  role="tab"    aria-controls="home" data-toggle="list">View Hospitals & View Vaccines</a>
      <a class="list-group-item list-group-item-action" href="#list-pat" id="list-pat-list"  role="tab" data-toggle="list" aria-controls="home">View Patient</a>
      <a class="list-group-item list-group-item-action" href="#list-app" id="list-app-list"  role="tab" data-toggle="list" aria-controls="home">Appointment Details</a>
      <a class="list-group-item list-group-item-action" href="#list-pres" id="list-pres-list"  role="tab" data-toggle="list" aria-controls="home">Vaccine Prescription List</a>
      <a class="list-group-item list-group-item-action" href="#list-settings" id="list-adoc-list"  role="tab" data-toggle="list" aria-controls="home">Add Hospital/Add Vaccine</a>
      <a class="list-group-item list-group-item-action" href="#list-settings1" id="list-ddoc-list"  role="tab" data-toggle="list" aria-controls="home">Delete Hospital/Delete Vaccine</a>
      <a class="list-group-item list-group-item-action" href="#list-mes" id="list-mes-list"  role="tab" data-toggle="list" aria-controls="home">Message</a>
      
    </div><br>
  </div>
  <div class="col-md-8" style="margin-top: 3%;">
    <div class="tab-content" id="nav-tabContent" style="width: 980px;">



      <div class="tab-pane fade show active" id="list-dash" role="tabpanel" aria-labelledby="list-dash-list">
        <div class="container-fluid container-fullw bg-white" >
              <div class="row">
               <div class="col-sm-4">
                  <div class="panel panel-white no-radius text-center">
                    <div class="panel-body">
                      <span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i class=" fas fa-clinic-medical fa-stack-1x fa-inverse"></i> </span>
                      <h4 class="StepTitle" style="margin-top: 5%;">Hospitals & Vaccines List</h4>
                      <script>
                        function clickDiv(id) {
                          document.querySelector(id).click();
                        }
                      </script> 
                      <p class="links cl-effect-1">
                        <a href="#list-doc" onclick="clickDiv('#list-doc-list')">
                          View Hospitals & view vaccine
                        </a>
                      </p>
                    </div>
                  </div>
                </div>

                <div class="col-sm-4" style="left: -3%">
                  <div class="panel panel-white no-radius text-center">
                    <div class="panel-body" >
                      <span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fa fa-users fa-stack-1x fa-inverse"></i> </span>
                      <h4 class="StepTitle" style="margin-top: 5%;">Patient List</h4>
                      
                      <p class="cl-effect-1">
                        <a href="#app-hist" onclick="clickDiv('#list-pat-list')">
                          View Patient
                        </a>
                      </p>
                    </div>
                  </div>
                </div>
              

                <div class="col-sm-4">
                  <div class="panel panel-white no-radius text-center">
                    <div class="panel-body" >
                      <span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fa fa-paperclip fa-stack-1x fa-inverse"></i> </span>
                      <h4 class="StepTitle" style="margin-top: 5%;">Appointment Details</h4>
                    
                      <p class="cl-effect-1">
                        <a href="#app-hist" onclick="clickDiv('#list-app-list')">
                          View Appointments
                        </a>
                      </p>
                    </div>
                  </div>
                </div>
                </div>

                <div class="row">
                <div class="col-sm-4" style="left: 13%;margin-top: 5%;">
                  <div class="panel panel-white no-radius text-center">
                    <div class="panel-body" >
                      <span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fas fa-file-medical fa-stack-1x fa-inverse"></i> </span>
                      <h4 class="StepTitle" style="margin-top: 5%;">Vaccine Prescription List</h4>
                    
                      <p class="cl-effect-1">
                        <a href="#list-pres" onclick="clickDiv('#list-pres-list')">
                          Vaccine Prescription List
                        </a>
                      </p>
                    </div>
                  </div>
                </div>

                <div class="col-sm-4" style="left: 18%;margin-top: 5%">
                  <div class="panel panel-white no-radius text-center">
                    <div class="panel-body" >
                      <span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fa fa-plus-circle fa-stack-1x fa-inverse"></i> </span>
                      <h4 class="StepTitle" style="margin-top: 5%;">Manage Hospitals & Vaccines</h4>
                    
                      <p class="cl-effect-1">
                        <a href="#app-hist" onclick="clickDiv('#list-adoc-list')">Add Hospitals & Add Vaccine</a>
                        &nbsp|
                        <a href="#app-hist" onclick="clickDiv('#list-ddoc-list')">
                          Delete Hospitals & Delete Vaccine
                        </a>
                      </p>
                    </div>
                  </div>
                </div>
       
                </div>
                        

      
                
              </div>
            </div>
      
                
      






      <div class="tab-pane fade" id="list-doc" role="tabpanel" aria-labelledby="list-home-list">
              

              <div class="col-md-8">
      <!-- <form class="form-group" action="doctorsearch.php" method="post"> -->
        <!-- <div class="row">
        <div class="col-md-10"><input type="text" name="doctor_contact" placeholder="Enter Email ID" class = "form-control"></div>
        <div class="col-md-2"><input type="submit" name="doctor_search_submit" class="btn btn-primary" value="Search"></div></div>
      </form> -->
    </div>
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Hospital Name</th>
                    <th scope="col">Vaccine</th>
                    <th scope="col">Email</th>
                    <th scope="col">Vaccine name</th>
                    <th scope="col">Fees</th>
                    
                  </tr>
                </thead>
                <tbody>
                  <?php 
                    $con=mysqli_connect("localhost","root","","vaccinems");
                    global $con;
                    $query = "select * from doctb";
                    $result = mysqli_query($con,$query);
                    $cnt=1;
                    while ($row = mysqli_fetch_array($result)){
                      $doctorname = $row['doctorname'];
                      $spec = $row['spec'];
                      $email = $row['email'];
                      $username = $row['username'];
                      $password = $row['password'];
                      $docFees = $row['docFees'];
                      
                      // <tr>
                      //   <td>$cnt</td>
                      //   <td>$doctorname</td>
                      //   <td>$spec</td>
                      //   <td>$email</td>
                      //   <td>$username</td>
                      //   <td>$$docFees</td>
                      // </tr>
                  
                  ?>

<tr>
               <td><?php echo $cnt;?></td>
               <td><?php echo $row['doctorname'];?>
               <td><?php echo $row['spec'];?></td>
               <td><?php echo $row['email'];?></td>
               <td><?php echo $row['username'];?></td>
               <td><?php echo '$'.$row['docFees'];?></td>
               <td>
      


                      


                      </tr></a>
           <?php $cnt++; } ?>





                </tbody>
              </table>
        <br>
      </div>
    

    <div class="tab-pane fade" id="list-pat" role="tabpanel" aria-labelledby="list-pat-list">

       <div class="col-md-8">
      <!-- <form class="form-group" action="patientsearch.php" method="post">
        <div class="row">
        <div class="col-md-10"><input type="text" name="patient_contact" placeholder="Enter Contact" class = "form-control"></div>
        <div class="col-md-2"><input type="submit" name="patient_search_submit" class="btn btn-primary" value="Search"></div></div>
      </form> -->
    </div>
              <table class="table table-hover">
                <thead>
                  <tr>
                  <th scope="col">#</th>
                    <th scope="col">Fullname of Child</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Email</th>
                    <th scope="col">Contact</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                    $con=mysqli_connect("localhost","root","","vaccinems");
                    global $con;
                    $query = "select * from patreg";
                    $result = mysqli_query($con,$query);
                    $cnt=1;
                    while ($row = mysqli_fetch_array($result)){
                      $pid = $row['pid'];
                      $fname = $row['fname'];
                      $lname = $row['lname'];
                      $gender = $row['gender'];
                      $email = $row['email'];
                      $contact = $row['contact'];
                      
                      echo "<tr>
                        <td>$cnt</td>
                        <td>$fname $lname</td>
                        <td>$gender</td>
                        <td>$email</td>
                        <td>$contact</td>
                      </tr>";
                  $cnt++;  }

                  ?>
                </tbody>
              </table>
        <br>
      </div>

      <div class="tab-pane fade" id="list-pres" role="tabpanel" aria-labelledby="list-pres-list">
<div class="col-md-12">
 <div class="row">
 
       <table class="table table-hover">
         <thead>
           <tr>
             <th scope="col">#</th>
             <th scope="col">Child Name</th>
             <th scope="col">Appointment Date</th>
             <th scope="col">Appointment Time</th>
             <th scope="col">Disease</th>
             <th scope="col">Symptoms</th>
             <th scope="col">Vaccine</th>
           </tr>
         </thead>
         <tbody>
           <?php 
             $con=mysqli_connect("localhost","root","","vaccinems");
             global $con;
             $query = "select * from prestb";
             $result = mysqli_query($con,$query);
             $cnt=1;
             while ($row = mysqli_fetch_array($result)){
               $pid = $row['pid'];
               $ID = $row['ID'];
               $fname = $row['fname'];
               $lname = $row['lname'];
               $appdate = $row['appdate'];
               $apptime = $row['apptime'];
               $disease = $row['disease'];
               $allergy = $row['allergy'];
               $pres = $row['prescription'];

               
               echo "<tr>
               <td>$cnt</td>
                 <td>$fname $lname</td>
                 <td>$appdate</td>
                 <td>$apptime</td>
                 <td>$disease</td>
                 <td>$allergy</td>
                 <td>$pres</td>
               </tr>";
            $cnt++; }

           ?>
         </tbody>
       </table>
 <br>
</div>
</div>
</div>

      <div class="tab-pane fade" id="list-app" role="tabpanel" aria-labelledby="list-pat-list">

        
              <table class="table table-hover">
                <thead>
                  <tr>
                  <th scope="col">#</th>
                    <th scope="col">Child Name</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Email</th>
                    <th scope="col">Contact</th>
                    <th scope="col">Doctor</th>
                    <th scope="col">Fees</th>
                    <th scope="col">Date</th>
                    <th scope="col">Time</th>
                    <th scope="col">Status</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 

                    $con=mysqli_connect("localhost","root","","vaccinems");
                    global $con;

                    $query = "select * from appointmenttb;";
                    $result = mysqli_query($con,$query);
                    $cnt=1;
                    while ($row = mysqli_fetch_array($result)){
                  ?>
                      <tr>
                        <td><?php echo $cnt;?></td>
                        <td><?php echo $row['fname'];?> <?php echo $row['lname'];?></td>
                        <td><?php echo $row['gender'];?></td>
                        <td><?php echo $row['email'];?></td>
                        <td><?php echo $row['contact'];?></td>
                        <td><?php echo $row['doctor'];?></td>
                        <td><?php echo '$'.$row['docFees'];?></td>
                        <td><?php echo $row['appdate'];?></td>
                        <td><?php echo $row['apptime'];?></td>
                        <td>
                    <?php if(($row['userStatus']==1) && ($row['doctorStatus']==1))  
                    {
                      echo "Active";
                    }
                    if(($row['userStatus']==0) && ($row['doctorStatus']==1))  
                    {
                      echo "Cancelled by Patient";
                    }

                    if(($row['userStatus']==1) && ($row['doctorStatus']==0))  
                    {
                      echo "Cancelled by Doctor";
                    }
                        ?></td>
                      </tr>
                    <?php $cnt++; } ?>
                </tbody>
              </table>
        <br>
      </div>

<div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">...</div>

      <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">
        <form class="form-group" method="post" action="admin-panel1.php">
          <div class="row">
          <div class="col-md-4"><label>Hospital Name:</label></div>
                  <div class="col-md-8"><input type="text" class="form-control" name="doctorname" onkeydown="return alphaOnly(event);" required></div><br><br>
                  <div class="col-md-4"><label>Vaccine name:</label></div>
                  <div class="col-md-8"><input type="text" class="form-control" name="doctor" onkeydown="return alphaOnly(event);" required></div><br><br>
                  <div class="col-md-4"><label>Vaccine:</label></div>
                  <div class="col-md-8">
                   <select name="special" class="form-control" id="special" required="required">
                      <option value="head" name="spec" disabled selected>Vaccine</option>
                      <option value="available" name="spec">Available</option>
                      <option value="unavailable" name="spec">Unavailable</option>
                     
                    </select>
                    </div><br><br>
                  <div class="col-md-4"><label>Email ID:</label></div>
                  <div class="col-md-8"><input type="email"  class="form-control" name="demail" required></div><br><br>
                  <div class="col-md-4"><label>Password:</label></div>
                  <div class="col-md-8"><input type="password" class="form-control"  onkeyup='check();' name="dpassword" id="dpassword"  required></div><br><br>
                  <div class="col-md-4"><label>Confirm Password:</label></div>
                  <div class="col-md-8"  id='cpass'><input type="password" class="form-control" onkeyup='check();' name="cdpassword" id="cdpassword" required>&nbsp &nbsp<span id='message'></span> </div><br><br>
                   
                  
                  <div class="col-md-4"><label>Consultancy Fees:</label></div>
                  <div class="col-md-8"><input type="text" class="form-control"  name="docFees" required></div><br><br>
                </div>
          <input type="submit" name="docsub" value="Add Hospital & Add vaccine" class="btn btn-primary">
        </form>
      </div>
           
      <div class="tab-pane fade" id="list-settings1" role="tabpanel" aria-labelledby="list-settings1-list">
        <form class="form-group" method="post" action="admin-panel1.php">
          <div class="row">
          
                  <div class="col-md-4"><label>Email ID:</label></div>
                  <div class="col-md-8"><input type="email"  class="form-control" name="demail" required></div><br><br>
                  
                </div>
          <input type="submit" name="docsub1" value="Delete Hospital & vaccine" class="btn btn-primary" onclick="confirm('do you really want to delete?')">
        </form>
      </div>


       <div class="tab-pane fade" id="list-attend" role="tabpanel" aria-labelledby="list-attend-list">...</div>

       <div class="tab-pane fade" id="list-mes" role="tabpanel" aria-labelledby="list-mes-list">

         <div class="col-md-8">
     
    </div>
    
        
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Contact</th>
                    <th scope="col">Message</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 

                    $con=mysqli_connect("localhost","root","","vaccinems");
                    global $con;

                    $query = "SELECT * from contact;";
                    $result = mysqli_query($con,$query);
                    $cnt=1;
                    while ($row = mysqli_fetch_array($result)){
              
                      #$fname = $row['fname'];
                      #$lname = $row['lname'];
                      #$email = $row['email'];
                      #$contact = $row['contact'];
                  ?>
                      <tr>
                        <td><?php echo $cnt;?></td>
                        <td><?php echo $row['name'];?></td>
                        <td><?php echo $row['email'];?></td>
                        <td><?php echo $row['contact'];?></td>
                        <td><?php echo $row['message'];?></td>
                      </tr>
                    <?php $cnt++; } ?>
                </tbody>
              </table>
        <br>
      </div>

    </div>
  </div>
</div>
   </div>

   <div class="loader-container">
    <img src="images/load.webp" alt="">
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.10.1/sweetalert2.all.min.js"></script>
 <script>
function loader(){
  document.querySelector('.loader-container').classList.add('fade-out');
}

function fadeOut(){
  setInterval(loader, 3000);
}

window.onload = fadeOut();
</script>
  </body>
</html>