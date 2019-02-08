
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

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}
</style>


<div class="row">
  <div class="col-75">
    <div class="container">
      <form action="" onsubmit="return validateForm1()" name="myForm1" method="post">
      
        <div class="row">
          <div class="col-50">
            <h3>Billing Address</h3>
            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="fname" name="firstname" >
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" >
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="adr" name="address" >
            <label for="city"><i class="fa fa-institution"></i> City</label>
            <input type="text" id="city" name="city" >

            <div class="row">
              <div class="col-50">
                <label for="state">State</label>
                <input type="text" id="state" name="state" >
              </div>
              <div class="col-50">
                <label for="zip">Zip</label>
                <input type="text" id="zip" name="zip" >
              </div>
            </div>
          </div>

          <div class="col-50">
            <h3>Payment</h3>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cardname" >
            <label for="ccnum">Credit card number</label>
            <input type="text" id="ccnum" name="cardnumber">
            <label for="expmonth">Exp Month</label>
            <input type="text" id="expmonth" name="expmonth" >
            <div class="row">
              <div class="col-50">
                <label for="expyear">Exp Year</label>
                <input type="text" id="expyear" name="expyear">
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv">
              </div>
            </div>
          </div>
          
        </div>
        <label>
          <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
        </label>
        <input type="submit" value="Continue to checkout" class="btn">
      </form>
    </div>
  </div>
    <script>
            function validateForm1() {
                var a = document.forms["myForm1"]["firstname"].value;
                var b = document.forms["myForm1"]["email"].value;
                var c = document.forms["myForm1"]["address"].value;
                var d = document.forms["myForm1"]["city"].value;
                var e = document.forms["myForm1"]["state"].value;
                var f = document.forms["myForm1"]["zip"].value;
                var g = document.forms["myForm1"]["cardname"].value;
                var h = document.forms["myForm1"]["expmonth"].value;
                var i = document.forms["myForm1"]["expyear"].value;
                var j = document.forms["myForm1"]["cvv"].value;
                
                if (b == "") {
                        alert("Email must be filled out");
                        return false;
                        }
                         
                if (a == "") {
                        alert("Name  must be filled out");
                        return false;
                        }
                if (c == "") {
                        alert("Address must be filled out");
                        return false;
                        }
                if (d == "") {
                        alert("City  must be filled out");
                        return false;
                        }
                if (e == "") {
                        alert("State  must be filled out");
                        return false;
                        }
                if (f == "") {
                        alert("Zip must be filled out");
                        return false;
                        }
                if (g == "") {
                        alert("Cardname  must be filled out");
                        return false;
                        }
                if (h == "") {
                        alert("expmonth  must be filled out");
                        return false;
                        }
                if (i == "") {
                        alert("expmonth  must be filled out");
                        return false;
                        }
                if (j == "") {
                        alert("cvv  must be filled out");
                        return false;
                        }
                alert("Congratulations!!! You Have Successfully Placed Your Order..");
                        return true;
                        }    
                                 
</script>  

</div>


