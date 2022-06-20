<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
        <meta name="description" content="" />
        <meta name="author" content="" />

        <title>SDGs Kaltim - Daftar akun</title>

        <!-- Custom fonts for this template-->
        <link href="/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css"/>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet"/>

        <!-- Custom styles for this template-->
        <link href="/css/sb-admin-2.min.css" rel="stylesheet" />
    </head>

    <body class="bg-gradient-success">
        <div class="container">
            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-6">
                            <img src="/img/regis.svg" width="580em" alt="" />
                        </div>
                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">
                                        Buat akun baru!
                                    </h1>
                                </div>
                                <form method="POST" action="{{ route('register') }} class="user">
                                    <div class="form-group">
                                        <input
                                            type="text"
                                            id="name"
                                            name="name"
                                            class="form-control form-control-user"
                                            placeholder="Nama lengkap"
                                        />
                                    </div>
                                    <div class="form-group">
                                        <input
                                            type="email"
                                            name="email"
                                            id="email"
                                            class="form-control form-control-user"
                                            placeholder="Alamat email"
                                        />
                                    </div>
                                    <div class="form-group">
                                        <input
                                            type="text"
                                            id="noWa"
                                            name="noWa"
                                            class="form-control form-control-user"
                                            placeholder="Nomor Whastapp"
                                        />
                                    </div>
                                    <div class="form-group">
                                        <select id="role" name="role" class="form-control form-control-user">
                                            <option value="pusat">Pemerintah Pusat</option>
                                            <option value="ngo">NGO</option>
                                            <option value="akademia">Akademik</option>
                                            <option value="swasta">Swasta</option>
                                        </select>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <input 
                                                id="password" 
                                                class="form-control form-control-user"
                                                type="password"
                                                name="password"
                                                placeholder="Kata Sandi"
                                                required autocomplete="new-password" />
                                        </div>
                                        <div class="col-sm-6">
                                            <input 
                                                id="password_confirmation" 
                                                class="form-control form-control-user"
                                                type="password"
                                                name="password_confirmation" 
                                                placeholder="Input ulang kata sandi"
                                                required
                                            />
                                        </div>
                                    </div>

                                    <hr />
                                    <div class="text-center">
                                        <a class="small" href="{{ route('password.request') }}">
                                            Lupa kata sandi?
                                        </a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="{{ route('login') }}">
                                            Sudah punya akun? Masuk!
                                        </a>
                                    </div>

                                    <button class="btn btn-success btn-user btn-block">
                                        Daftar
                                    </button>
                                    
                                    <hr />
                                </form>
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
