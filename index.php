<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Index page</title>
  </head>
  <body>
  <h1> Varun Gaur</h1>
    <?php require 'partials/_indexnav.php' ?>  
   
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
              <div class="carousel-item active">
                 <img src="https://source.unsplash.com/1600x300/?programmer,computers" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                 <img src="https://source.unsplash.com/1600x300/?office,computers" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                 <img src="https://source.unsplash.com/1600x300/?programming,office" class="d-block w-100" alt="...">
              </div>
      </div>

  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<br><br>

<div class="containe">
  
<?php require 'nav bar/index.html' ?>

</div>

<br><br><br>
<div class="container justify-flex mx-3">
<iframe src ="https://www.programiz.com/c-programming/online-compiler/" height="600px" width="900px">  </iframe>
  <iframe src="https://www.linkedin.com/embed/feed/update/urn:li:share:7129496231491383296" height="600px" width="900px" frameborder="0" allowfullscreen="" title="Embedded post"></iframe>

</div>


<br>

<br>

<?php require 'partials/_footer.php' ?> 
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>
</html>
