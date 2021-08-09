<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <title>GLOBAL ACCESS BANK</title>
  <link rel="shortcut icon" href="images/images.png" type="image/x-icon">
  <script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>

  <style>
    @import url('https://fonts.googleapis.com/css2?family=Baloo+Bhai+2&family=Roboto:wght@300&display=swap');
  </style>
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php">

        <img src="images/images.png" alt="logo" style="width:40px;">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        
          <ul class="nav navbar-nav ms-auto">
          
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#home">Home</a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="#services"> Services offered</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact">Feedback</a>
          </li>
        </ul>

      
      </div>
    </div>
  </nav>
  <!-- End Navbar -->

  <!-- Home -->
  <section id="home" class="topContent">
    <div class="mainHeading">
      <div>
        <span class="main-content">WELCOME TO GLOBAL ACCESS BANK</span>
      </div>
      <!--<div class="intro-text">
            <h4>A Bank you can trust on</h4>
						<p>
							DIGITALLY DIVINE
						</p>-->
				
    <div class="topContentImg">
      <!--<img src="./images/hmp.jpg"   alt="Banking">-->
    </div>
  </section>
  <!-- End Home -->

  <!-- About -->
  <section id="about" class="container">
    
    <div class="container">
      <div class="row">
        <div class="col-md-6 mx-auto">
          <img class=" mt-3 " style="width:600px;"  src="./images/about-us.png" alt="GLOBAL ACCESS BANK">
        </div>
        <div class="col-md-6 mx-auto mt-4">
          <div>
            <h3>"DIGITALLY DIVINE"</h3>
          </div>
          <div class="mt-2">
            <span class="sub-content">A BANK YOU CAN TRUST ON !!<br>
             </span>
             
          
      </div>
    </div>
  </section>
  <!-- End About -->

  <!-- Services offered -->
  <section class="container" id="services">
    <h2 class="heading">SERVICES OFFERED</h2>

    <div class="container  text-center">
      <div class="row">
        <div class="card col-md-3 mx-auto" style="width: 22rem; height: 22rem; " >
          <img src="./images/cust.png" class="card-img-top mt-3 img" alt="Responsive image">
          <div class="card-body">
            <h5 class="card-title">Customer Details</h5><br><br>
          
            <a href="transfermoney.php" class="btn btn-primary btn-lg">Customer Details</a>
          </div>
        </div>

        <div class="card col-md-3 mx-auto" style="width: 22rem;">
          <img src="images/transaction-list.png" class="card-img-top mt-3 img" alt="Responsive image">
          <div class="card-body">
            <h5 class="card-title"> Transaction History</h5><br><br>
            
            <a href="transactionhistory.php" class="btn btn-success btn-lg" >Transaction History</a>
          </div>
        </div>

        <div class="card col-md-3 mx-auto" style="width: 22rem;">
          <img src="./images/transfer-money-.jpg" class="card-img-top mt-3 img" alt="Responsive image">
          <div class="card-body">
            <h5 class="card-title" id="harry">Money Transfer</h5><br><br>
            
            <a href="transfermoney.php" class="btn btn-warning btn-lg">Money Transfer</a>
          </div>
        </div>
      </div>
    </div>
    </div>
  </section>
  <!-- End Services offered -->

  <!-- feedback -->
  
  <section class="mx-auto" id="contact">
    <h2 class="heading">Feedback</h2>
    <form>
      <div class="row mb-3">
        <div class="col">
          <input type="text" class="form-control" placeholder="First name" aria-label="First name">
        </div>
        <div class="col">
          <input type="text" class="form-control" placeholder="Last name" aria-label="Last name">
        </div>
      </div>
      <div class="mb-3">

        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
          placeholder="E-mail ID">

      </div>
      <div class="mb-3">
        <input type="text" class="form-control" placeholder="City" aria-label="City">
      </div>
      <div class="mb-3">

        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
          placeholder="Comments/Feedback"></textarea>
      </div>

      <button type="submit" class="btn btn-primary">Submit</button>

    </form>
  </section>
  <!-- End feedback -->

  <!-- Footer -->
  <footer>
    <div class="follow">
      <h3 style="color: crimson; font-family: 'Brush script mt', cursive; font-size: 25px;">Follow Us</h3>
      <div class="social">
        <a href="#facebook" class="facebook">
          <i class="fa fa-facebook"></i>
        </a>
        <a href="#twitter" class="twitter">
          <i class="fa fa-twitter"></i>
        </a>
        <a href="#linkedin" class="linkedin">
          <i class="fa fa-linkedin"></i>
        </a>
        <a href="#instagram" class="instagram">
          <i class="fa fa-instagram"></i>
        </a>
      </div>
    </div>
    <p class="text-copy">
      Contact us:+9165473xxxxx <br>    
      Developed by SEZAL SAUNDARYA<BR>
      Copyright &copy; 2021 , Intern at The Sparks Foundation

    </p>
  </footer>
  <!-- End Footer -->

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
    crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
</body>

</html>