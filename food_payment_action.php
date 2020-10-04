
<?php
    session_start();
    
    $con= mysqli_connect('localhost', 'root', '');
    mysqli_select_db($con,'okay');
    if(isset($_POST['submit']))
    {
     $fname=$_POST['fname'];
     $date=date("Y-m-d");
     $time = date("h:i A");
    $amount=$_POST['amount'];

     $payment_id=rand(1000,9999); 
     
    $s = "select * from food_payment where fname= '$fname'";
    $result = mysqli_query($con, $s);
    $num = mysqli_fetch_row($result);
    if($num==true)
    {
    echo "You have already pay your due";
    }
     elseif ($fname==null && $hostel==null)
        {
           echo"Please fill all the fields.";
          exit();
       } 
     
    
    else
    {
    $reg="insert into food_payment (fname,payment_id,date,time,amount) values ('$fname','$payment_id','$date','$time','$amount')";
    mysqli_query($con,$reg);
    

       
    header("Refresh: 0; url=/ownyourrent/128bit_food.php");

       exit();
     }
   }
                ?>
        