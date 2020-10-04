  
<?php
    session_start();
    
    $con= mysqli_connect('localhost', 'root', '');
    mysqli_select_db($con,'okay');
    if(isset($_POST['submit']))
    {
     $fname=$_POST['fname'];
     $food = $_POST['food'];
     $email=$_POST['email'];
     $message=$_POST['Message'];
     $today_date =  date("Y-m-d");
     $time = date("h:i A");
     $expire_date=date('Y-m-d', strtotime('+51 year', $today_date));
     
    $s = "select * from food where fname= '$fname'";
    $result = mysqli_query($con, $s);
    $num = mysqli_fetch_row($result);
    if($num==true)
    {
  echo "<script>alert('Your have already subscribe for food')</script>";
    header("Refresh: 0; url=/ownyourrent/food_application.php?id=veg-food");
    }
     elseif ($fname==null && $hostel==null)
        {
           echo"Please fill all the fields.";
          exit();
       } 
     
    
    else
    {
    $reg="insert into food (fname,food,Message,email,app_date,app_time,expire_date) values ('$fname','$food','$message','$email','$today_date','$time','$expire_date')";
    mysqli_query($con,$reg);
    
    echo "<script>alert('Your food application is submitted')</script>";
       
    header("Refresh: 0; url=/ownyourrent/food_application.php?id=veg-food");

       exit();
     }
   }
                ?>
        