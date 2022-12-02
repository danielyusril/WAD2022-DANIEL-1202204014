
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
       

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">


	<link rel="stylesheet" type="text/css" href="style.css">

	<title>Register Form </title>
</head>
      <!-- Section: Design Block -->
      <section>
      <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col">
                <div class="card card-registration my-4">
                    <div class="row g-0">
                        <div class="col-xl-6 d-none d-xl-block">
                            <img src="https://images.unsplash.com/photo-1546518071-fddcdda7580a?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NXx8bWVyY2VkZXN8ZW58MHx8MHx8&w=1000&q=80"
                            alt="Sample photo" class="img-fluid"/> 
                </div>
                <div class="col-sm">
                    <h1 class="fw-bold">Register</h1>
                    <form action="../config/configregis.php" method="POST" enctype="multipart/form-data">

                        <div class="form-outline mb-4">
                            <label for="email" class="form-label fw-bold">Email</label>
                            <input type="text" class="form-control" id="email" name="email">
                        </div>

                        <div class="form-outline mb-4">
                            <label for="nama" class="form-label fw-bold">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama">
                        </div>

                        <div class="form-outline mb-4">
                            <label for="no_hp" class="form-label fw-bold">Nomor Handphone</label>
                            <input type="text" class="form-control" id="no_hp" name="no_hp">
                        </div>
                        
                        <div class="form-outline mb-4">
                            <label for="passwordi" class="form-label fw-bold">Kata Sandi</label>
                            <input type="text" class="form-control" id="passwordi" name="passwordi">
                        </div>
                        
                        <div class="form-outline mb-4">
                            <label for="cpassword" class="form-label fw-bold">Konfirmasi Kata Sandi</label>
                            <input type="text" class="form-control" id="cpassword" name="cpassword">
                        </div>

                        <div class="mt-3 mb-1">
                            <button type="submit" class="btn btn-primary" name="daftar" href= "login.php">Daftar</button>
                        </div>

                        <p>Anda sudah punya akun? 
                            <a href="login.php">Login</a>
                        </p>
                    </form>
                </div>
            
            </div>
        </div>
    </section>