<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: login.php");
    exit;
}

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>welcome_<?php $_SESSION['username']?></title>
  </head>
  <body>
    <?php require 'partials/_nav.php' ?>
    

      <p class="mb-0">Whenever you need to, be sure to logout <a href="/myweb/logout.php"> LOG OUT </a></p>
    
  <h2 class="alert-heading">Welcome <?php echo $_SESSION['username']?></h2>





  <div class="container px-4 text-center">
  <div class="row gx-5">
    <div class="col">
     <div class="p-3 border bg-light">Custom column padding
                  <div class="card text-center" style="width: 18rem;">
                <img src="c logo .png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
     </div>
    </div>
    <div class="col">
      <div class="p-3 border bg-light">Custom column padding

      <form class="row g-3">
  <div class="col-md-6">
    <label for="validationServer01" class="form-label">First name</label>
    <input type="text" class="form-control is-valid" id="validationServer01" value="Mark" required>
    <div class="valid-feedback">
      your first name!!
    </div>
  </div>
  <div class="col-md-6">
    <label for="validationServer02" class="form-label">Last name</label>
    <input type="text" class="form-control is-valid" id="validationServer02" value="Otto" required>
    <div class="valid-feedback">
    your last name!!
    </div>
  </div>
  
  <div class="col-md-6">
    <label for="validationServer03" class="form-label">City</label>
    <input type="text" class="form-control is-invalid" id="validationServer03" aria-describedby="validationServer03Feedback" required>
    <div id="validationServer03Feedback" class="invalid-feedback">
      Please provide a valid city.
    </div>
  </div>
  
  <div class="col-md-6">
    <label for="validationServer04" class="form-label">State</label>
    <select class="form-select is-invalid" id="validationServer04" aria-describedby="validationServer04Feedback" required>
      <option selected disabled value="">Choose...</option>
      <option> Andhra Pradesh  </option>
      <option> Andaman and Nicobar Islands </option>
      <option> Arunachal Pradesh </option>
      <option> Assam </option>
      <option> Bihar </option>
      <option> Chandigarh	 </option>
      <option> Chhattisgarh </option>
      <option> Delhi </option>
      <option> Goa </option>
      <option> Gujarat </option>
      <option> Haryana </option>
      <option> Himachal Pradesh </option>
      <option> Jammu and Kashmir </option>
      <option> Jharkhand </option>
      <option> Jharkhand </option>
      <option> Jharkhand </option>
      <option> Karnataka </option>
      <option> Kerala </option>
      <option> Ladakh </option>
      <option> Lakshadweep </option>
      <option> Madhya Pradesh </option>
      <option> Maharashtra </option>
      <option> Manipur </option>
      <option> Meghalaya </option>
      <option> Mizoram </option>
      <option> Nagaland </option>
      <option> Odisha </option>
      <option> Puducherry </option>
      <option> Punjab </option>
      <option> Rajasthan </option>
      <option> Sikkim </option>
      <option> Tamil Nadu </option>
      <option> Telangana </option>
      <option> Tripura </option>
      <option> Uttar Pradesh </option>
      <option> Uttarakhand </option>
      <option> West Bengal </option>
      
    </select>
    <div id="validationServer04Feedback" class="invalid-feedback">
      Please select a valid state.
    </div>
  </div>
  <div class="col-md-3">
    <label for="validationServer05" class="form-label">Zip</label>
    <input type="text" class="form-control is-invalid" id="validationServer05" aria-describedby="validationServer05Feedback" required>
    <div id="validationServer05Feedback" class="invalid-feedback">
      Please provide a valid zip.
    </div>
  </div>
 
     <div class="col-12">
    <div class="form-check">
      <input class="form-check-input is-invalid" type="checkbox" value="" id="invalidCheck3" aria-describedby="invalidCheck3Feedback" required>
      <label class="form-check-label" for="invalidCheck3">
        Agree to terms and conditions
      </label>
      <div id="invalidCheck3Feedback" class="invalid-feedback">
        You must agree before submitting.
      </div>
    </div>
  </div>
  <div class="col-12">
    <button class="btn btn-primary" type="submit">Submit form</button>
  </div>

 
</form>
      </div>
    </div>
  </div>
</div>


<br>
<hr>
<br>

<div class="container">
  <div class="container text-center"><h1>Connect with us on !!..</h1></div> 
      <div class="card" style="width: 18rem;">
            <img src="telelogo.jpg" width="10px" class="card-img-top" alt="...">
            <div class="card-body">
              <h2 class="card-text"> Telegram </h2>
            </div>
               
          </div>

</div>


<br> 
<hr>
<br>


<?php require 'partials/_footer.php' ?> 




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>