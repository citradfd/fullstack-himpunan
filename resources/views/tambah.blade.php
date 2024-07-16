<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content />
        <meta name="author" content />
        <title>HMIT Telkom University Jakarta</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Custom Google font-->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    </head>
    <body class="d-flex flex-column">
        <main class="flex-shrink-0">
            <!-- Navigation-->
            <nav class="navbar navbar-expand-lg navbar-light bg-white py-3">
                <div class="container px-5">
                    <a class="navbar-brand" href="index.html"><span class="fw-bolder text-primary">HMIT Telkom University Jakarta</span></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 small fw-bolder">
                        <li class="nav-item"><a class="nav-link" href="{{ url('/anggota/home') }}">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('/anggota/struktur') }}">Struktur Organisasi</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('/anggota') }}">List Anggota</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('/anggota/proker') }}">Program Kerja</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('/anggota/tambah') }}">Daftar</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- Page content-->
            <!-- Projects Section-->
<section class="py-5">
    <div class="container px-5">
        <!-- Contact form-->
        <div class="bg-light rounded-4 py-5 px-4 px-md-5">
            <div class="text-center mb-5">
                <div class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 mb-3"><i class="bi bi-archive-fill"></i></div>
                <h1 class="fw-bolder">Daftar</h1>
                <p class="lead fw-normal text-muted mb-0">Mahasiswa S1 Teknologi Informasi Telkom University Jakarta wajib mendaftar HMIT</p>
            </div>
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-8 col-xl-6">
                <form action="/anggota/store" method="post">
    {{ csrf_field() }}
    <!-- Name input -->
    <div class="form-floating mb-3">
        <input class="form-control" id="nama" name="nama" type="text" placeholder="Enter your full name..." data-sb-validations="required" />
        <label for="nama">Full name</label>
        <div class="invalid-feedback" data-sb-feedback="nama:required">Full name is required.</div>
    </div>

    <!-- NIM input -->
    <div class="form-floating mb-3">
        <input class="form-control" id="nim" name="nim" type="text" placeholder="Enter your student ID number..." data-sb-validations="required" />
        <label for="nim">NIM</label>
        <div class="invalid-feedback" data-sb-feedback="nim:required">A student ID number is required.</div>
    </div>

    <!-- Email address input -->
    <div class="form-floating mb-3">
        <input class="form-control" id="email" name="email" type="email" placeholder="name@example.com" data-sb-validations="required,email" />
        <label for="email">Email address</label>
        <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
        <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
    </div>

    <!-- Phone number input -->
    <div class="form-floating mb-3">
        <input class="form-control" id="phone" name="phone" type="tel" placeholder="+62 XX XXXX XXXX" data-sb-validations="required" />
        <label for="phone">Phone number</label>
        <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
    </div>

    <!-- Submit Button -->
    <div class="d-grid">
    <button class="btn btn-primary btn-lg" type="submit">Daftar</button>
    <!-- Input hidden untuk tampilan yang sama seperti tombol submit -->
    <input type="submit" value="Simpan Data" class="btn btn-primary btn-lg d-none">
</div>

</form>

                </div>
            </div>
        </div>
    </div>
</section>

        </main>
        <!-- Footer-->
        <footer class="bg-white py-4 mt-auto">
            <div class="container px-5">
                <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                    <div class="col-auto"><div class="small m-0">Copyright &copy; HMIT Telkom University Jakarta 2023</div></div>
                    <div class="col-auto">
                        <a class="small" href="#!">Privacy</a>
                        <span class="mx-1">&middot;</span>
                        <a class="small" href="#!">Terms</a>
                        <span class="mx-1">&middot;</span>
                        <a class="small" href="https://instagram.com/hmit.teluj/">Contact</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>