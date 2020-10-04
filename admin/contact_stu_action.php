

 <?php
    session_start();
    
    $con= mysqli_connect('localhost', 'root', '');
    mysqli_select_db($con,'okay');
    $fname=$_POST['fname'];
    $hostel_name=$_POST['hostel_name'];
    $subject_h=$_POST['subject_h'];
    $message=$_POST['message'];
    $today_date =  date("Y-m-d");
    $time = date("h:i A");
    $s = "select * from admin_message where message= '$message'";
    $result = mysqli_query($con, $s);
    $num = mysqli_fetch_row($result);
    if($num==true)
    {
    echo "Message already sent";
    }
     elseif ($fname==null && $hostel_name==null)
        {
           echo"Please fill all the fields.";
          exit();
       } 
     
    
    else
    {
    $reg="insert into admin_message (fname,hostel_name,subject_h,message,msg_date,msg_time) values ('$fname','$hostel_name','$subject_h','$message','$today_date','$time')";
    mysqli_query($con,$reg);
    
    header("Refresh: 1; url=/ownyourrent/contact_stu.php");
       exit();
     }
                ?>
        