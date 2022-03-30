<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="css/styles.css">
    <title>DAKING'S PORTFOLIO</title>
  </head>
  <body>
 <section id="sec1">
<nav class="navbar navbar-expand-lg navbar-light bg-transparent">
  <a class="navbar-brand" href="#">
  <img src="imgss/profile-pic.png" width="30" height="30" class="d-inline-block align-top" alt="">
  <?php echo "DAVID AKINJARE"; ?>
  </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
           <a class="nav-link text-white" href="#sd"><i class="fas fa-user-tie"></i> ABOUT ME <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="#td"><i class="fas fa-cogs"></i> MY SKILLS AND SERVICES </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="#ud"><i class="fas fa-briefcase"></i> MY PORTFOLIO</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="#vd"><i class="fas fa-laptop-code"></i> TESTIMONIALS </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="#wd"><i class="fas fa-comments"></i> CONTACT ME </a>
          </li>
        </ul>
      </div>
    </nav>
    <div class="container">
      <div class="row">
       <div class="col-sm">
         <!-- 1 -->
       </div>
      <div class="col-sm">
        <!-- 2 -->
      <img class="pic" src="imgss/profile-pic.png" alt="profile-pic">
      <?php
    echo "<h3 class='htext'>DAVID AKINJARE O.</h3>";
    echo "<h4 class='htext'>{daKing}</h4>";
    echo "<p class='hptext'> Student In Training </p>";
       ?>

      </div>
     <div class="col-sm">
       <!-- 3 -->
     </div>
    </div>
   </div>
   </section>

   <section id="sec2">
   <?php echo "<h3 class='about' id='sd'>ABOUT ME</h3>"; ?>
   <div class="container">
   <div class="row">
    <div class="col-sm">
      <!-- 1 -->
      <img class="torch" src="imgss/torch1.jpg" alt="torch">

    </div>
    <div class="col-sm">
      <!-- 2 -->
      <img class="gif" src="https://media.giphy.com/media/wFqvfWGxJSG7Qwze7Y/giphy.gif" alt="king"> <?php echo "<p class='para'>
        Hi there! I am David Olaoluwa Akinjare (Daking). I am a Full stack Web and Mobile App Developer in training, from Lagos, Nigeria. I create custom websites for all purposes.
      </p>";  ?>

      <img class="gif" src="https://media.giphy.com/media/d9AC9cKuNu165UxNtj/giphy.gif" alt="king"> <?php echo "<p class='para'>
        I love building clean, smart, responsive and professional projects with latest modern technology tools, and I'm very passionate and dedicated to my work.
      </p>"; ?>

      <img class="gif" src="https://media.giphy.com/media/d91mOUkiBnKjgMhjBp/giphy.gif" alt="king"> <?php echo "<p class='para'>
        My studies, experience, skills and commitment have provided me with a very strong foundation in my career and thus enables me to develop stronger customer efficient skills.
      </p>";  ?>

    </div>
  </div>
  </div>

   </section>

   <section id="sec3">
     <?php echo "<h3 class='service' id='td'>MY SERVICES</h3>"; ?>
     <div class="container">
  <div class="row">
    <div class="col-sm">
      <!-- 1 -->
      <div class="card" style="width: 18rem;">
   <img src="https://media.giphy.com/media/eN57iVfipaoPGWBWbP/giphy.gif" class="card-img" alt="...">
   <div class="card-body">
     <?php echo "<h5 class='card-title'>FRONT-END DEV</h5>";
     echo "<p class='card-text'>Do you need a beautiful user friendly Frontend design for your business, that's what I love doing with the use of latest technology as HTML5, CSS3, BOOTSTRAP 4 and many more</p>"; ?>
     <center> <a href="c" class="hire"><button type="button" class="btn btn-primary">HIRE ME</button></a> </center>
   </div>
 </div>
    </div>
    <div class="col-sm">
      <!-- 2 -->
      <div class="card" style="width: 18rem;">
   <img src="https://media.giphy.com/media/WFZvB7VIXBgiz3oDXE/giphy.gif" class="card-img" alt="...">
   <div class="card-body">
     <?php
    echo "<h5 class='card-title'>BACK-END DEV</h5>";
    echo "<p class='card-text'>Beyond the scope of Frontend, am a professional backend developer. I use latest technologies like Python, PHP, MongoDB and many more to furnish your project(s).</p>";  ?>
    <center> <a href="#" class="hire"><button type="button" class="btn btn-primary">HIRE ME</button></a> </center>
   </div>
 </div>
    </div>
    <div class="col-sm">
      <!-- 3 -->
      <div class="card" style="width: 18rem;">
   <img src="https://media.giphy.com/media/KdxXHFKFgPkdMahzTI/giphy.gif" class="card-img" alt="...">
   <div class="card-body">
     <?php
     echo "<h5 class='card-title'>FULL STACK DEV</h5>";
     echo "<p class='card-tex'>Let me handle your awesome project from scratch to the finishing with my Full Stack Development skill.</p>"; ?>
    <center> <a href="#" class="hire"><button type="button" class="btn btn-primary">HIRE ME</button></a> </center>
   </div>
 </div>
    </div>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="col-8">
      <!-- 1 -->
      <div class="card" style="width: 18rem;">
   <img src="https://media.giphy.com/media/UQJlZ2OcaCA2RLfGiZ/giphy.gif" class="card-img" alt="...">
   <div class="card-body">
     <?php
     echo "<h5 class='card-title'>ANDROID APP DEV</h5>";
     echo "<p class='card-tex'>Need Android mobile application for your business? You're at the right place, I'll give you the best of your taste.</p>"; ?>
    <center> <a href="#" class="hire"><button type="button" class="btn btn-primary">HIRE ME</button></a> </center>
   </div>
 </div>
    </div>
    <div class="col-4">
      <!-- 2 -->
      <div class="card" style="width: 18rem;">
   <img src="https://media1.giphy.com/media/GP1TJJSV4Ys1r64q2A/giphy.gif" class="card-img" alt="...">
   <div class="card-body">
     <?php
     echo "<h5 class='card-title'>PENETRATION TESTING</h5>";
     echo "<p class='card-text'>As a Cyber Security Specialist, finding vulnerabilities and loopholes has become my hobby. Let me fix your network, server, website, etc before the bad guys detect the loopholes and exploit.</p>"; ?>
    <center> <a href="#" class="hire"><button type="button" class="btn btn-primary">HIRE ME</button></a> </center>
   </div>
 </div>
    </div>
  </div>
</div>
   </section>

   <section id="sec4">
     <?php
     echo "<h3 class='about' id='ud'>MY PORTFOLIO</h3>";
      ?>

   </section>

   <section id="sec5">
     <?php echo "<h3 class='service' id='vd'> TESTIMONIALS </h3>"; ?>
     <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
    <?php echo "<p class='testimony'>'One of the best developer I've ever met, my project stands out as the best, after well furnished by David. I'll recommend you to everyone.'</p>";
    echo "<center>  <img src='testimony/p1.png' class='d-block w-20'>";
      echo "<em class='name'> Abdul Salam </em> </center>"; ?>
    </div>
    <div class="carousel-item">
      <?php
      echo "<p class='testimony'>'Your services are exceptional, greater height is what I wish you. Superb skill are what you get.'</p>";
    echo "<center>  <img src='testimony/p3.png' class='d-block w-20'>";
       echo "<em class='name'> Mary Jane </em> </center>";  ?>
    </div>
    <div class="carousel-item">
      <?php
      echo "<p class='testimony'>'David Akinjare to the world, I would have love to qualify you with any word better than professional cos your services are fucking awesome.'</p>";
    echo "<center>  <img src='testimony/p2.png' class='d-block w-20'>";
      echo "<em class='name'> Misty Smith </em> </center>";  ?>
    </div>
  </div>
 <button class="carousel-control-prev" type="button" data-target="#carouselExampleControls" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-target="#carouselExampleControls" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </button>
</div>

   </section>

   <section id="sec6">
     <h3 class="about" id="wd"> CONTACT ME</h3>
     <div class="container">
  <div class="row">
    <div class="col-lg-4">
      <!-- 1 -->
      <div class="card" style="width: 18rem;">
  <img src="https://media.giphy.com/media/8rElnPqWAxlP83PPI3/giphy.gif" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">WHATSAPP</h5>
  <center>  <a href="#" class="hire"><button type="button" class="btn btn-success"><i class="fab fa-whatsapp"></i> WHATSAPP</button></a> <center>
  </div>
</div>
    </div>
    <div class="col-lg-4">
      <!-- 2 -->
      <div class="card" style="width: 18rem;">
  <img src="https://media.giphy.com/media/KcnlGHBpnKnjZIuCMv/giphy.gif" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">SMS</h5>
  <center>  <a href="#" class="hire"><button type="button" class="btn btn-success"><i class="fas fa-sms"></i> TEXT ME</button></a> <center>
  </div>
</div>
    </div>
    <div class="col-lg-4">
      <!-- 3 -->
      <div class="card" style="width: 18rem;">
  <img src="https://media.giphy.com/media/WqXjQsd0MAhc2CvtkQ/giphy.gif" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">PHONE CALL</h5>
  <center>  <a href="tel:+23422753589" target="_blank" class="hire"><button type="button" class="btn btn-success"><i class="fas fa-phone-volume"></i> CALL ME</button></a> <center>
  </div>
</div>
    </div>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="col-lg-4">
      <!-- 1 -->
      <div class="card" style="width: 18rem;">
  <img src="https://media.giphy.com/media/QWpK88H1g9PtmtQly1/giphy.gif" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">INTAGRAM</h5>
  <center>  <a href="#" target="_blank" class="hire"><button type="button" class="btn btn-success"><i class="fab fa-instagram"></i> FOLLOW ME</button></a> <center>
  </div>
</div>
    </div>
    <div class="col-lg-4">
      <!-- 2 -->
      <div class="card" style="width: 18rem;">
  <img src="https://media.giphy.com/media/Kc7YcguTAnj7d35Zho/giphy.gif" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">TWITTER</h5>
  <center>  <a href="#" target="_blank" class="hire"><button type="button" class="btn btn-success"><i class="fab fa-twitter"></i> TWITTER</button></a> <center>
  </div>
</div>
    </div>
    <div class="col-lg-4">
      <!-- 3 -->
      <div class="card" style="width: 18rem;">
  <img src="https://media.giphy.com/media/HQTYdpx1yhxWpugAi2/giphy.gif" class="card-img-top">
  <div class="card-body">
    <h5 class="card-title">LINKEDIN</h5>
  <center>  <a href="#" target="_blank" class="hire"><button type="button" class="btn btn-success"><i class="fab fa-linkedin"></i> MY PROFILE</button></a> <center>
  </div>
</div>
    </div>
  </div>
</div>

   </section>

   <section id="sec7">
     <?php
         echo "<br>";
         echo "<br>";
         echo "<br>";
          ?>
     <footer class="last">© 2022 David Akinjare Olaoluwa {DaKing} | All Rights Reserved</footer>
     <?php
         echo "<br>";
         echo "<br>";
         echo "<br>";
          ?>
   </section>









    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>


  </body>
</html>
