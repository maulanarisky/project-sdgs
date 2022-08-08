<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Tujuan - SDGs Kaltim</title>

    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="/assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css"
      rel="stylesheet"
    />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="/css/styles.css" rel="stylesheet" />
  </head>
  <body class="d-flex flex-column h-100">

    <main class="flex-shrink-0">

      @extends('layouts.header')

      <!--head-->
      <header class="py-5">
        <div class="container px-5">
          <div class="row gx-5 align-items-center justify-content-center"></div>
        </div>
      </header>

      <!--detail-->
      <div class="container">
        <div class="row px-5">
          
          <div class="col-lg-2 mt-2">
            <img src="{{ asset('storage/' . $tujuan->img) }}" height="150px" alt="" />
          </div>
          
          <div class="col-lg">
            <div class="row">
              <div class="col-lg mb-2" style="text-transform :uppercase"><h1>{{ $tujuan->name }}</h1></div>
            </div>
            <div class="row">
              <div class="col-lg mb-2">
                {{ $tujuan->deskripsi }}
              </div>
            </div>
            <div class="row">
              <div class="col-lg mt-2 text-success"><h4>Pilar {{ $tujuan->pilar->name }}</h4></div>
            </div>
          </div>
          
          <div class="col-lg">
            <div class="form-group">
              
            </div>
          </div> 
        </div>
      </div>

      <div class="section">
        <div class="container">
          <div class="row px-5">
            <div class="col-lg mt-3">
              <!-- Example single danger button -->
              <div class="btn-group">
                <button type="button" class="btn btn-success dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                  Filter Tahun :
                </button>
                <ul class="dropdown-menu">
                  @foreach ($tahunsAll as $thn)
                    <li><a class="dropdown-item" href="/tujuan/{{ $tujuan->id }}/{{ $thn->name }}">{{ $thn->name }}</a></li>
                  @endforeach
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- tabel drop-->
      <div class="section">
        <div class="container">
          <div class="row mt-3">
            <div class="col-lg px-5">
              <!--pertama-->
              @foreach ($targets as $target)
                @if ($target->tujuan_id == $tujuan->id) 
                  <div class="accordion-item mb-1" id="accordionExample">
                    <div class="accordion-item">

                      <h3 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                          <div class="col-lg-1"><strong>{{ $target->kode_target }}</strong></div>
                          <div class="col-lg"> {{$target->deskripsi}} </div>
                        </button>
                      </h3>

                      <div class="accordion-collapse collapse show" id="collapseOne" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                          <!--permulaan-->
                          <div class="card-body">
                            <div class="table-responsive">
                              <table class="table table-bordered table-striped table-hover">
                                <thead>
                                  <tr align="center" valign="middle">
                                    <td rowspan="2">Kode Indikator</td>
                                    <td rowspan="2">Deskripsi Indikator</td>
                                    <td rowspan="2">Satuan</td>
                                    <td rowspan="2">Baseline</td>
                                    <td colspan="3" align="center"> {{ $tahun->name }}</td>
                                    <td rowspan="2" align="center">Sumber Data</td>
                                  </tr>
                                  <tr>
                                    <td>Target</td>
                                    <td>Capaian</td>
                                    <td>Status</td>
                                  </tr>
                                </thead>

                                <tbody>
                                  @foreach ($indikators as $indikator)
                                      @if ($indikator->target_id == $target->id)
                                        <tr align="center">
                                          <td>{{ $indikator->kode_indikator }}</td>
                                          <td align="left">{{ $indikator->deskripsi }}</td>
                                          @foreach ($capaians as $capaian)
                                            @if ($indikator->id == $capaian->indikator_id  && $capaian->tahun_id == $tahun->id)
                                              <td>{{ $indikator->satuan }}</td>
                                              <td>{{ $capaian->baseline }}</td>
                                              <td>{{ $capaian->target_awal }}</td>
                                              <td>{{ $capaian->capaian }}</td>
                                              @if ($capaian->status == 'tercapai')
                                                <td valign="middle"> <i class="bi bi-circle-fill text-success"></i> </td>  
                                              @elseif($capaian->status == 'akan_tercapai')
                                                <td valign="middle"> <i class="bi bi-play-fill text-warning"></i> </td>
                                              @elseif($capaian->status == 'perlu_perhatian_kusus')
                                                <td valign="middle"> <i class="bi bi-caret-down-fill text-danger"></i> </td>
                                              @else
                                                <td></td>
                                              @endif 
                                                <td>{{ $capaian->user->name }}</td>
                                            @endif
                                          @endforeach
                                          
                                        </tr>
                                      @endif
                                  @endforeach     
                                </tbody>
                              </table>
                            </div>
                          </div>
                          <!--end-->
                        </div>
                      </div>
                    </div>
                  </div>
                @endif   
              @endforeach
              
            </div>
          </div>
        </div>
      </div>
      <!--end-->
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
