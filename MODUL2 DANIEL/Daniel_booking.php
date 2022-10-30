<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/checkout/">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <title>MODUL2</title>

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
</section><BR>
<br>
<br>
<h2 align="center">Rent Your Car Now!</h2><br>

<div class="container">
  <div class="row">
    <div class="col">
    <img src="veloz.jpg" class="card-img-top">
    </div>
  <div class="col">
  <form action="Daniel_my booking.php" method="GET">
  <div class="form-group mb-3">
    <label for="nama">Name</label>
    <input type="text" class="form-control" name="nama" value="DANIEL YUSRIL JASLI_1202204014" aria-label="readonly input example" readonly>
  </div>

  <div class="form-outline datepicker mb-3">
    <label for="date">Date</label>
    <input type="date" class="form-control form-icon-trailing" id="date" name="date" placeholder="mm/dd/yyyy"/>
  </div>

  <div class="col-12">
    <label for="time">Start Time</label>
    <input type="time" class="form-control" id="time" name="time" value="">
  </div>
        
  <div class="col-12">
    <label for="days">Duration Days </label>
    <input type="number" class="form-control" id="days" name="days">
  </div>

  <div class="col-12">
      <label for="car" class="form-label"></br>Car Type </label>
      <select class="form-select" id="car" name="car">
      <option selected>Select Vehicle</option>
      <option value="Toyota Veloz">Toyota Veloz</option>
      <option value="BMW X6">BMW X6</option>
      <option value="Mercedes Benz AMG GT">Mercedes Benz AMG GT</option>
    </select>
  </div>

  <div class="col-12">
    <label for="phonenumber">Phone Number</label>
    <input type="numb" class="form-control" id="phonenumber" name="phonenumber">
  </div>

  <div class="container mt-3">
    <label for="service"> Add Service:</label>
    <form action="/Daniel_my booking.php" method= "post">
      <div class="form-check">
        <input type="checkbox" class="form-check-input" id="check1" name="service[]" value="something" checked>
        <label class="form-check-label" for="check1">Health Protocol/Rp25.000</label>
      </div>
      <div class="form-check">
        <input type="checkbox" class="form-check-input" id="check2" name="service[]" value="something">
        <label class="form-check-label" for="check2">Driver / Rp100.000</label>
      </div>
      <div class="form-check">
        <input type="checkbox" class="form-check-input" id="check3" name="service[]" value="something">
        <label class="form-check-label" for="check3">Fuel filled / Rp250.000</label>
      </div>
    </form>
    <div class="d-grid gap-2" style="margin-top : 20px;">
    <input class="btn btn-success" type="submit" value="Book" name="Book">   
  </div>
</div>
</div>

  <footer>
          <nav class="navbar fixed-bottom bg-light">
            <div class="container-fluid justify-content-center">
              <a class="navbar-brand">CREATED BY DANIEL YUSRIL JASLI_1202204014</a>
            </div>
          </nav>
    </footer> 
</div>

      <script src="form-validation.js"></script>
  </body>
</html>
