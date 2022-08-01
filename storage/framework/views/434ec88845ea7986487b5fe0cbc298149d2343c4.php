<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>SDGs-Kalimantan Timur</title>
    
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="/assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet"/>
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="/css/styles.css" rel="stylesheet" />
  </head>
  
  <body class="d-flex flex-column h-100">
    <main class="flex-shrink-0">
      
      

      <!-- Beranda-->
      <header class="custombg py-5">
        <div class="container px-5" id="head">
          <div class="row gx-5 align-items-center justify-content-center">
            <div class="col-lg-8 col-xl-7 col-xxl-6">
              <div class="my-5 text-center text-xl-start">
                <h2 class="display-5 fw-bolder text-black mb-2">
                  Dapatkan informasi terkini pembangunan berkelanjutan daerah
                </h2>
                <p class="lead fw-normal text-black-50 mb-4">
                  SDGs untuk Pembangunan Berkelanjutan adalah kesepakatan
                  pembangunan baru yang mendorong perubahan-perubahan yang
                  bergeser ke arah pembangunan berkelanjutan yang berdasarkan
                  hak asasi manusia dan kesetaraan untuk mendorong pembangunan
                  sosial, ekonomi dan lingkungan hidup.
                </p>
                <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xl-start">
                  <a class="btn btn-success btn-lg px-4 me-sm-3" href="<?php echo e(route('login')); ?>">
                    Get Started
                  </a>
                </div>
              </div>
            </div>
            <div class="col-xl-5 col-xxl-6 d-none d-xl-block text-center">
              <img class="img-fluid rounded-3 my-5" src="/assets/hero.png" alt="..."/>
            </div>
          </div>
        </div>
      </header>

      <!-- TPB section-->
      <div class="bg-light">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-10 col-xl-7">
              <div class="text-center">
                <div class="mb-2 fst-italic" id="tpb">
                  <img src="/assets/tujuan.svg" height="110px" alt="" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- tpbpreview section-->
      <section class="bg-light">
        <div class="container px-5 my-2">
          <div class="row gx-2">
            <?php $__currentLoopData = $tujuans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tujuan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-lg-2 mb-5">
                <a href="/tujuan/<?php echo e($tujuan->id); ?>/<?php echo e($tahun); ?>">
                  <img style="width: 140px" src="<?php echo e(asset('storage/' . $tujuan->img)); ?>" alt=""/>
                </a>
              </div>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <div class="col-lg-2 mb-5">
              <a href="tpb-detail.html"
                ><img style="width: 140px" src="/assets/image 2.svg" alt=""
              /></a>
            </div>
          </div>
        </div>
      </section>
    </main>

    
    <!-- Footer-->
    <footer class="custombg py-4 mt-auto">
      <div class="container px-5">
        <div
          class="row align-items-center justify-content-between flex-column flex-sm-row"
        >
          <div class="col-auto">
            <div class="small m-0 text-black-50">
              Copyright &copy; Your Website 2022
            </div>
          </div>
          <div class="col-auto">
            <a class="link-light small text-black-50" href="#!">Privacy</a>
            <span class="text-black mx-1">&middot;</span>
            <a class="link-light small text-black-50" href="#!">Terms</a>
            <span class="text-black mx-1">&middot;</span>
            <a class="link-light small text-black-50" href="#!">Contact</a>
          </div>
        </div>
      </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="/js/scripts.js"></script>
  </body>
</html>

<?php echo $__env->make('layouts.navigation', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel\project-sdgs\resources\views/index.blade.php ENDPATH**/ ?>