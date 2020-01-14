<?php
include 'db.php';

session_start();
if(!isset($_SESSION['username'])){
	header("Location: index.php?acces_denide");
}

?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Let'sGoToba</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/modern-business.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="user.php">Let'sGoToba</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="indexx.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Transportasi.php">Transportasi</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Kuliner.php">Kuliner</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Souvenir.php">Souvenir</a>
            </li>
                <li class="nav-item">
              <a class="nav-link" href="Logout.php">Logout</a>
            </li>
            

            
           
          </ul>
        </div>
      </div>
    </nav>

    <header>
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <!-- Slide One - Set the background image for this slide in the line below -->
          <div class="carousel-item active" style="background-image: url('gambar/danayyy.jpg')">
            <div class="carousel-caption d-none d-md-block">
              <h3>Bukit Holbung</h3>
              <p>Deskripsi bukit holbung</p>
            </div>
          </div>
          <!-- Slide Two - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('gambar/danayyy.jpg')">
            <div class="carousel-caption d-none d-md-block">
              <h3>Paropo</h3>
              <p>deskripsi paropo</p>
            </div>
          </div>
          <!-- Slide Three - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('gambar/pusukbuhit.jpg')">
            <div class="carousel-caption d-none d-md-block">
              <h3>PusukBuhit</h3>
              <p>Deskripsi pusukbuhit</p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </header>

    <!-- Page Content -->
    <div class="container">

      <h1 class="my-4">Welcome to Let'sGoToba</h1>

      <!-- Marketing Icons Section -->
      <div class="row">
        <div class="col-lg-4 mb-4">
          <div class="card h-100">
            <h4 class="card-header">Danau Toba nomor 2 di dunia sebagai danau non vulkanik</h4>
            <div class="card-body">
              <p class="card-text">“Selain Samosir, Toba juga punya Parapat, Pulau Sibandang, Pusuk Buhit, juga Tongging yang punya Air terjun Sipiso-Piso. Yang gemar memancing bisa ke Bakara. Masih ada banyak lokasi lain, tetapi setidaknya itu bisa memberi gambaran indahnya kawasan Danau Toba di Sumatera Utara,” paparnya</p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">Learn More</a>
            </div>
          </div>
        </div>
        <div class="col-lg-8 mb-4">
          <div class="card h-100">
            <h4 class="card-header">Hot News</h4>
            <div class="card-body">
              <p class="card-text"><strong>Sammy Simorangkir Prihatin Danau Toba Sepi Wisatawan </strong>
             <br> Pradita Ananda, Jurnalis · Senin 17 September 2018 07:32 WIB.</p>
              DANAU Toba adalah salah satu destinasi wisata terkenal di Tanah Air yang ikonik. Namun sayangnya, beberapa waktu belakangan ini, minat wisatawan untuk memilih Danau Toba sebagai destinasi wisata sedang menurun. Bisa dikatakan, sekarang Danau Toba sedang kalah pamor dengan tempat wisata lain, sebut saja seperti Gunung Bromo atau Sumba yang sedang sekarang begitu hits di kalangan traveler.

            <br>Adanya penurunan animo terhadap Danau Toba sebagai tujuan untuk berlibur, sejatinya memang disebabkan oleh berbagai faktor. Seperti pandangan dari solois Sammy Simorangkir, sebagai pemuda asli Sumatera.
            Menurutnya,  sekarang Danau Toba tidak semenonjol tempat-tempat wisata lainnya di Indonesia salah satunya ialah kurang mumpuninya pembangunan infrastruktur yang terintegrasi dari pemerintah, hingga kurang diedukasinya masyarakat setempat</p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">Learn More</a>
            </div>
          </div>
        </div>
  
      </div>
      <!-- /.row -->

      <!-- Portfolio Section -->
      <h2>Destinasi Danau Toba yang paling sering dikunjungi</h2>

      <div class="row">
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="gambar/pusukbuh.jpg" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">Pusuk Buhit</a>
              </h4>
              <p class="card-text"><strong>Pusuk Buhit di Samosir Menyaksikan Pemandangan Menakjubkan di Tempat Asal Mula Suku Batak</strong><br>Ada gunung berapi di dalam gunung berapi super, dan Gunung Pusuk Buhit adalah fenomena alam ajaib itu. Berada di pulau Samosir, yang berada di kaldera gunung berapi super Toba, Gunung Pusuk Buhit menawarkan keindahan tersendiri<br>Dari Medan atau Jakarta Anda dapat naik pesawat langsung menuju Bandara Silangit di Siborong-borong.</p>
              <a href="pusukbuhit.php" class="btn btn-secondary">readmore</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="gambar/ranu.jpg" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">Paropo Danau Toba</a>
              </h4>
              <p class="card-text"><strong>Wisata ke Paropo, Surga Kecil di Danau Toba</strong><br>Siapa pun yang sudah pernah ke Semeru dan sampai ke Ranu Kumbolo, kemudian bertandangan ke Paropo, pinggiran Danau Toba, mungkin akan merasa sedang berada di tempat yang sama.</p>
               <a href="paropo.php" class="btn btn-secondary">readmore</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="gaja.php"><img class="card-img-top" src="gambar/gaja.jpg" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#"> Bukit Gajah Bobok</a>
              </h4>
              <p class="card-text"><strong>Sunrise indah di perbukitan Toba – Bukit Gajah Bobok</strong>
                <br>Ingin mendapatkan kesan maksimal menikmati pagi? Berkunjung saja ke Bukit Gajah Bobok sebelum matahari terbit. Dari puncaknya, kamu bisa menikmati sunrise yang keren di ufuk timur, sekaligus menyaksikan keindahan lanskap perbukitan di sekitar Danau Toba</p>
                <br>
                 <a href="gaja.php" class="btn btn-secondary">readmore</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="gambar/sapo.jpg" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">Sapo Juma</a>
              </h4>
              <p class="card-text"><strong>Menikmati sisi romantis Danau Toba: Kebun Bunga Sapo Juma Tongging</strong><br>Sapo Juma sebenarnya merupakan sebuah penginapan di pinggir Danau Toba. Suasana yang tenang dengan suguhan kecantikan Danau Toba adalah hal yang akan anda dapatkan.</p>
                <a href="sapo.php" class="btn btn-secondary">readmore</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">Project Five</a>
              </h4>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">Project Six</a>
              </h4>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque earum nostrum suscipit ducimus nihil provident, perferendis rem illo, voluptate atque, sit eius in voluptates, nemo repellat fugiat excepturi! Nemo, esse.</p>
            </div>
          </div>
        </div>
      </div>
      <!-- /.row -->

      <!-- Features Section -->
    
      <!-- /.row -->

      <hr>

      <!-- Call to Action Section -->
      

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-8 bg-dark">
      <div class="container">
       <p class="m-0 text-center text-white">Copyright &copy; Let's Go Toba</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
