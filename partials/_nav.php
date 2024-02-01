<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   
</head>
<body>
<?php 
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
  $loggedin= true;
}
else{
  $loggedin = false;
}
echo '
<h1> Varun Gaur </h1>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="/myweb">Coders C</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>'; 


      if($loggedin){
      echo '
     
     
      <div class="nav">
    <div class="collapse navbar-collapse ml-5" id="navbarSupportedContent">
     
      <div class="nav justify-content-end ">

      <li class="nav-item active">
        <a class="nav-link" href="/myweb/welcome.php">Home <span class="sr-only">(current)</span></a>
      </li>
      
      <li class="nav-item">
          <a class="nav-link" href="about.php">About</a>
       </li>
      <li class="nav-item">
          <a class="nav-link btn btn-warning mr-3" href="signup.php">MY BATCH</a>
       </li>
       <li class="nav-item">
        <a class="nav-link btn btn-danger mr-3" href="/myweb/logout.php">Logout</a>
      </li>
      <li class="nav-item">
       <img src="avatar.png" alt="Avatar" style=" vertical-align: middle; width: 30px; height: 30px; border-radius: 50%;" class="mx-2">
       <a>profile</a>
       </li>
      </div>';
    }



    if(!$loggedin){
      echo '
       <li class="nav-item">
        <a class="nav-link" href="/myweb/login.php">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/myweb/signup.php">Signup</a>
      </li>';
      } 
      

    echo '</ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>

  </div>
  
  </div>
  </div>
</nav>
'
;

?>
</body>
</html>