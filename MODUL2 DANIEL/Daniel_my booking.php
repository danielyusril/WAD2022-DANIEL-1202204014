<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <title>MODUL2</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/album/">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </head>
  <body>
    

  <section id="Navigasi Bar">
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
          <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <div class="navbar-nav">
              <a class="nav-link" href="Daniel_home.php">Home</a>
              <a class="nav-link" href="Daniel_booking.php">Booking</a>
            </div>
          </div>
        </div>
      </nav>
  </section>

<main>
    <?php 
    $nama = "DANIEL YUSRIL JASLI_1202204014";
    $date = isset($_GET['date']) ? $_GET['date'] : '';
    $time = isset($_GET['time']) ? $_GET['time'] : '';
    $days = isset($_GET['days']) ? $_GET['days'] : '';
    $car = isset($_GET['car']) ? $_GET['car'] : '';
    $phonenumber = isset($_GET['phonenumber']) ? $_GET['phonenumber'] : '';
    $hp = isset($_GET['hp']) ? $_GET['hp'] : '';
    $driver = isset($_GET['driver']) ? $_GET['driver'] : '';
    $bensin = isset($_GET['bensin']) ? $_GET['bensin'] : '';

    $service = $hp or $driver or $bensin;
    ?> 
  <section class="py-5 text-center container">
    <div >
      <div class="col-lg-6 col-md-8 mx-auto"><br>
        <h3 >Thank You <?php echo $nama ?> For Reserving</h3>
        <h5 >Please double check your reservation details</h5>
      </div>
    </div>
  </section>

  <table class="table table-success table-striped">
    <div class="container">
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
  <thead>
    <tr>
      <th scope="col">Booking Number</th>
      <th scope="col">Name</th>
      <th scope="col">Check in</th>
      <th scope="col">Check Out</th>
      <th scope="col">Car Type</th>
      <th scope="col">Phone Number</th>
      <th scope="col">Service</th>
      <th scope="col">Total Price</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><?php
echo(rand() . "<br>");?></td>
      <td><?php echo $nama ?></td>
      <td><?php echo $date ?></td>
      <td><?php echo $time ?></td>
      <td><?php echo $car ?></td>
      <td><?php echo $phonenumber ?></td>
      <td><?php echo $service ?></td>
      <td></td>
    </tr>
  </tbody>
    </div>
  </div>
</table>

</main>

<footer>
          <nav class="navbar fixed-bottom bg-light">
            <div class="container-fluid justify-content-center">
              <a class="navbar-brand">CREATED BY DANIEL YUSRIL JASLI_1202204014</a>
            </div>
          </nav>
    </footer> 

  </body>
</html>
