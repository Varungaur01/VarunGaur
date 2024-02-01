<!-- Button trigger modal -->

<button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
 Signup
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5 text-center" id="exampleModalLabel">Signup to our website</h1>
        <button type="button" class="btn btn-close  btn btn-danger mt-1" data-bs-dismiss="modal" aria-label="Close">X</button>
      </div>
      <div class="modal-body">
    <div class="container my-4">
     
     <form action="/myweb/signup.php" method="post">
        <div class="form-group">
            <label for="username">Username <?php echo '(enter your email id)*'?></label>
            <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp">
            
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        <div class="form-group">
            <label for="cpassword">Confirm Password</label>
            <input type="password" class="form-control" id="cpassword" name="cpassword">
            <small id="emailHelp" class="form-text text-muted">Make sure to type the same password</small>
        </div>
         
        <button type="submit" class="btn btn-primary">SignUp</button>
     </form>
    </div>
      </div>
      
    </div>
  </div>
</div>