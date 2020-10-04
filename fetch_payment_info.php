
<?php
    $fname = $_SESSION['fname'];
    $query = "SELECT * FROM payment WHERE fname ='$fname'";
    $result = mysqli_query($conn,$query);

    while ($row = mysqli_fetch_assoc($result))
    {  
    
              
          ?> 
          <?php $date=$row['date'];?>
           <?php $amount=$row['amount'];?>
             <?php $payment_id=$row['payment_id'];?>


<?php
}
?>













<?php

 
  $servername = "localhost"; 
  $dBUsername = "root";
  $dBPassword = "";
  $dBName = "okay";
 
  $conn=mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

  if (!$conn)
   {
    die("Connection Failed: ".mysqli_connect_error());
  }






 
        $check5 = $_SESSION['fname'];
        $query3="SELECT * FROM payment WHERE fname = '$check5'";
        $result = mysqli_query($conn, $query3);
        $num = mysqli_fetch_row($result);
        if($num==false)
        {

       ?><h4 style="text-align: center;color:black;font-size: 25px;font-weight: bold"><i class="fa fa-angle-"></i><?php echo "Your Room payment is due";?>
       <br>
       <br>
       <button><a style ="text-align: center"href="make_payment.php">Click here to pay your due for your room</a></button></h4>
       <?php

        }

        else
        {
         
        	?><h4 style="text-align: center;color:black;font-size: 25px;font-weight: bold"><i class="fa fa-angle-">Room booked payment details:-<br>
             <br>
            </i>
            <br>
            <?php echo "Payment made of &nbsp"  .$amount.   ",&nbsp on &nbsp"      .$date ."&nbsp Transaction id : &nbsp".$payment_id;
      }
          
   
?>
