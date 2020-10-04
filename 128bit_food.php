<?php
  require 'includes/config.inc.php';
?>

              <?php
                          
    $fname = $_SESSION['fname'];
    $query = "SELECT * FROM food WHERE fname ='$fname'";
    $result = mysqli_query($conn,$query);

    while ($row = mysqli_fetch_assoc($result))
    {  
      $hostel_id = $row['fname'];
      $query6 = "SELECT * FROM food WHERE fname = '$hostel_id'";
       $result6 = mysqli_query($conn,$query6);
       $row6 = mysqli_fetch_assoc($result6);
       }       
          ?> 
          <?php
          $id=$row['food'];
          if($id='veg-food')
          {
            $amount='2000';
          }
      
         else
         {
          $amount='4000';
         }
          ?>

           
       



<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: Arial;
  font-size: 17px;
  padding: 8px;
}

* {
  box-sizing: border-box;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #4CAF50;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #45a049;
}

a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}


@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}
</style>
</head>
<body>

<h2>Own Your Rent Payment </h2>
<p></p>
<div class="row">
  <div class="col-75">
    <div class="container">
 
      
        <div class="row">
          <div class="col-50">
                <h3>Billing Address</h3>
        
            <h3>Payment</h3>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
                 <form action="card_details_food.php" method="post">
            <label for="cname">Name on Card</label>
            <input type="text" required=""  name="card_holder" placeholder="John More Doe">
            <label for="ccnum">Credit card number</label>
            <input type="text" required=""  name="card_number" placeholder="1111-2222-3333-4444">
            <label for="expmonth">Exp Date</label>
            <input type="Date" required=""  name="exp_month" placeholder="September">
           </div>
         </div>
   
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" required=""  name="cvv" placeholder="352">
              </div>
            </div>
          </div>
          
        </div>
         <hr>
      <p>Total <span class="price" style="color:black"><b> Rs <?php echo  $amount;?></b></span></p>
        <label>
          <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
        </label>
        <input type="submit" value="Continue to checkout" class="btn">
      </form>




    </div>
  </div>
  <div class="col-25">
    <div class="container">
     
     
     
    </div>
  </div>
</div>

</body>
</html>


           
     