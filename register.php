<?php include_once("validate_form_register.php");?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
    /*form>div>.itemss input{border:none;outline:none;border-bottom:1px solid black;border-radius:none;}*/
    span{
      color:red;
    }
</style>

    <form method="post" action="">
        <div class="needs-validation" novalidate style="margin-left:15%;margin-right:15%;">
          <div class="row g-3">
            <div class="col-sm-6 itemss">
              <label for="firstName" class="form-label">First name</label>
              <input type="text" name="firstName" class="form-control" id="0" placeholder="FirstName" required>
              <span id="err0"></span>
            </div>

            <div class="col-sm-6 itemss" >
              <label for="lastName" class="form-label">Last name</label>
              <input type="text" name="LastName" class="form-control" id="1" placeholder="LastName" required>
              <span id="err1"></span>
            </div>

            <div class="col-12">
              <label for="username" class="form-label">Username</label>
              <div class="input-group has-validation itemss">
                <span class="input-group-text">@(Optional)</span>
                <input type="text" name="username" class="form-control" id="2" placeholder="Username" required>
                <span id="err2"></span>
              </div>
            </div>

            <div class="col-sm-6 itemss">
              <label for="Password" class="form-label">Password</label>
              <input type="password" name="password"class="form-control" id="3" placeholder="Password" required>
              <span id="err3"></span>
            </div>

            <div class="col-sm-6 itemss">
              <label for="Repeat PassWord" class="form-label">Repeat PassWord</label>
              <input type="password"  name="repassword" class="form-control" id="4" placeholder="Repeat PassWord"  required>
              <span id="err4"></span>            
            </div>
            <div class="col-12 itemss">
              <label for="email" class="form-label">Email</label>
              <input type="email"  name="mail" class="form-control" id="5" placeholder="you@example.com">
              <span id="err5"></span>
            </div>

            <div class="col-12 itemss">
              <label for="address" class="form-label">Address</label>
              <input type="text"  name="address" class="form-control" id="6" placeholder="1234 Main St" required>
              <span id="err6"></span>
            </div>

            <div class="col-12 itemss">
              <label for="address2" class="form-label">Address 2 <span class="text-muted">(Optional)</span></label>
              <input type="text" name="address2" class="form-control" id="7" placeholder="Apartment or suite">
              <span id="err7"></span>
            </div>

            <div class="col-md-6 itemss">
              <label for="Street" class="form-label">Street</label>
              <input type="text" name="street" class="form-control" id="8" placeholder="Street" required>
              <span id="err8"></span>
            </div>

            
            <div class="col-md-6 itemss">
              <label for="City" class="form-label">City</label>
              <input type="text" name="city" class="form-control" id="9" placeholder="City" required>
              <span id="err9"></span>
            </div>

            
            <div class="col-md-6 itemss">
              <label for="State" class="form-label">Driver Licence</label>
              <input type="text" name="DriverLicence" class="form-control" id="10" placeholder="Driver Licence" required>
              <span id="err10"></span>
            </div>
            <div class="col-md-6 itemss">
              <label for="Country" class="form-label">PassePort</label>
              <input type="text" name="PassePort" class="form-control" id="11" placeholder="PassePort" required>
              <span id="err11"></span>
            </div>

            
            <div class="col-md-6 itemss">
              <label for="zip" class="form-label">Zip Code</label>
              <input type="text" name="zip" class="form-control" id="12" placeholder="Zip Code" required>
              <span id="err12"></span>
            </div>

            
            <div class="col-md-6 itemss">
              <label for="PhoneNumber" class="form-label">Phone Number</label>
              <input type="text" name="tel" class="form-control" id="13" placeholder="Phone Number" required>
              <span id="err13"></span>
            </div>
          </div>

          <!--hr class="my-4">

          <!div class="form-check itemss">
            <input type="checkbox" class="form-check-input" id="showPassWord" name="show" value="ShowPassWord">
            <label class="form-check-label" for="same-address">Show PassWord</label>
          </div-->

          <hr class="my-4">

          <h4 class="mb-3">Gender</h4>

          <div class="my-3">
            <div class="form-check">
              <input id="gender" name="gender" type="radio" class="form-check-input" value="Female">
              <label class="form-check-label">Female</label>
            </div>
            <div class="form-check">
              <input id="debit" name="gender" type="radio" class="form-check-input" value="Male">
              <label class="form-check-label">Male</label> &nbsp;<span id="errgenre"></span>
            </div>
            <div class="form-check">
              <input id="paypal" name="gender" type="radio" class="form-check-input"value="Unspecified">
              <label class="form-check-label">Unspecified</label>
            </div>
          </div>
          <hr class="my-4">

          <input type="reset" value="Reset">&nbsp;&nbsp;<button name="Sign_in" id="Sign_in">Sign_in</button>
          You have a account? click <a href="sign_in.php">Here</a><br>
  </div>
  </form>
    <?php
    if(isset($_POST["Sign_in"])&& $_POST["firstName"]!="" && $_POST["LastName"]!="" && $_POST["username"]!="" && $_POST["password"]!="" && $_POST["repassword"]!="" && $_POST["mail"]!="" && $_POST["address"]!="" && $_POST["street"]!=""  && $_POST["country"]!=""  && $_POST["city"]!=""  && $_POST["state"]!="" && $_POST["zip"]!="" && $_POST["tel"]!="" && $_POST["gender"]!="")
    {
      $lastname=htmlspecialchars($_POST["LastName"]);
      $firstname=htmlspecialchars($_POST["firstName"]);
      $username=htmlspecialchars($_POST["username"]);
      $password=htmlspecialchars($_POST["password"]);
      $email=htmlspecialchars($_POST["mail"]);
      $address=htmlspecialchars($_POST["address"]);
      $address2=htmlspecialchars($_POST["address2"]);
      $street=htmlspecialchars($_POST["street"]);
      $city=htmlspecialchars($_POST["city"]);
      $state=htmlspecialchars($_POST["state"]);
      $country=htmlspecialchars($_POST["country"]);
      $zip=htmlspecialchars($_POST["zip"]);
      $gender=htmlspecialchars($_POST["gender"]);
      $req="INSERT INTO user set lastname='".$lastname."',firstname='".$firstname."',username='".$username."',password='".$password."',email='".$mail."',address='".$address."',address2='".$address2."',street='".$street."',city='".$city."',state='".$state."',country='".$country."',zip='".$zip."',phonenumber='".$_POST["tel"]."',gender='".$_POST["gender"]."'";
      $rst=$idconnexion->exec($req);
      
        //$idcon=NULL;
        header("location:index1.php");
    
      
     
    }
   ?>
   <script src="script_js/jQuery_v3.6.0_min.js"></script>
   <script src="script_js/form_validation_register.js"></script>
</body>
</html>