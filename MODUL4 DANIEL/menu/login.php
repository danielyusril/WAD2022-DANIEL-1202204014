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

	<title>LOGIN</title>
</head>
<body>
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
                    <h1 class="fw-bold">Login</h1>
                    <form action="../pages/Homemobil.php" method="POST" enctype="multipart/form-data">

                    <div class="mb-3">
                        <label for="email" class="form-label fw-bold">Email</label>
                        <input type="text" class="form-control" id="email" name="email"required>
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label fw-bold">password</label>
                        <input type="text" class="form-control" id="password" name="password"required>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                        <label class="form-check-label" for="flexCheckChecked">Remember Me</label>
                    </div>

                    <div class="mt-3 mb-1">
                        <button type="submit" class="btn btn-primary" name="masuk">Masuk</button>
                    </div>

                    <p>Anda belum punya akun? 
                        <a href="menu/register.php">Daftar</a>
                    </p>
                </div>
            
            </div>
        </div>
    </section>
</body>
</html>
