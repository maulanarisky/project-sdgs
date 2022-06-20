<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
        <meta name="description" content="" />
        <meta name="author" content="" />

        <title>SDGs Kaltim - Lupa kata sandi?</title>

        <!-- Custom fonts for this template-->
        <link href="/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css"/>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet"/>

        <!-- Custom styles for this template-->
        <link href="/css/sb-admin-2.min.css" rel="stylesheet" />
    </head>

    <body class="bg-gradient-success">
        <div class="container">
            <!-- Outer Row -->
            <div class="row justify-content-center">
                <div class="col-xl-10 col-lg-12 col-md-9">
                    <div class="card o-hidden border-0 shadow-lg my-5">
                        <div class="card-body p-0">
                            <!-- Nested Row within Card Body -->
                            <div class="row">
                                <div class="col-lg-6 d-none d-lg-block">
                                    <div class="row">
                                        <img src="/img/forgot.svg" width="450em" alt=""/>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="p-5">
                                        <div class="text-center">
                                            <h1 class="h4 text-gray-900 mb-2">
                                                Lupa kata sandi?
                                            </h1>
                                            <p class="mb-4">
                                                Kami mengerti apa yang terjadi.
                                                Cukup dengan memasukkan alamat
                                                email anda di bawah ini dan kami
                                                akan mengirim tautan untuk
                                                mengatur ulang kata sandi anda!
                                            </p>
                                        </div>
                                        <form method="POST" action="{{ route('password.email') }} class="user">
                                            @csrf
                                            <div class="form-group">
                                                <input 
                                                    type="email"
                                                    class="form-control form-control-user"
                                                    id="exampleInputEmail"
                                                    aria-describedby="emailHelp"
                                                    placeholder="Masukkan alamat email..."
                                                />
                                            </div>
                                            <hr />
                                            <div class="text-center">
                                                <a class="small" href="{{ route('register') }}">
                                                    Buat akun baru!
                                                </a>
                                            </div>
                                            <div class="text-center">
                                                <a class="small" href="{{ route('login') }}">
                                                    Sudah punya akun? Masuk!
                                                </a>
                                            </div>
                                            <button class="btn btn-success btn-user btn-block">
                                                Kirim
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bootstrap core JavaScript-->
        <script src="/vendor/jquery/jquery.min.js"></script>
        <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="/vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="/js/sb-admin-2.min.js"></script>
    </body>
</html>
