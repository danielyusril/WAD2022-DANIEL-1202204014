<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

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
            <div class="col-xl-6">
              <div class="card-body p-md-5 text-black">
                <h3 class="mb-5">Register</h3>

                <form action="../config/configregis.php" method="POST" enctype="multipart/form-data">
                <div class="form-outline mb-4">
                  <label class="form-label" for="Email">Email</label>
                  <input type="text" id="email" class="form-control form-control-lg" />
                </div>

                <div class="form-outline mb-4">
                  <label class="form-label" for="Nama">Nama</label>
                  <input type="text" id="nama" class="form-control form-control-lg" />
                </div>

                <div class="form-outline mb-4">
                  <label class="form-label" for="nohp">Nomor Handphone</label>
                  <input type="phone" id="nohp" class="form-control form-control-lg" />
                </div>

                <div class="form-outline mb-4">
                  <label class="form-label" for="password">Kata Sandi</label>
                  <input type="password" id="password" class="form-control form-control-lg" />
                </div>

                <div class="form-outline mb-4">
                  <label class="form-label" for="repass">Konfirmasi Kata Sandi</label>
                  <input type="password" id="repass" class="form-control form-control-lg" />
                </div>

                <div class="text-center text-lg-start mt-4 pt-2">
                  <a type="button" class="btn btn-primary btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem" href="../pages/Homemobil.php">Daftar</a>
                  <p class="small fw-bold mt-2 pt-1 mb-0">Sudah punya akun? <a href="../pages/login.php" class="link-danger">Login</a></p>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>