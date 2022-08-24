<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />

    <!-- icons -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css"
    />
    <!-- style -->
    <style>
      table {
        width: 100%;
        margin-top: 30px;
      }
      table td {
        font-weight: 400;
        vertical-align: top;
        height: 30px;
        padding-bottom: 12px;
      }

      table .title {
        width: 25%;
      }
      table .spasi {
        width: 5%;
      }
    </style>
  </head>
  <body>
    <section>
      <div class="container">
        <div class="row">
          <div class="col">
            <div class="card-body mt-4">
              <div class="row">
                <div class="col">
                  <h2 class="mb-2 text-center">PELAPORAN PEMBELAJARAN</h2>
                </div>
              </div>
              <table class="tabel">
                <!-- data 1 -->
                <tr>
                  <td class="title">Sumber Data</td>
                  <td class="spasi">:</td>
                  <td class="subtitle">{{$pp->user->name}}</td>
                </tr>
                <!-- data 2 -->
                <tr>
                  <td class="title">Nama Tujuan SDGs</td>
                  <td class="spasi">:</td>
                  <td class="subtitle">{{ $pp->tujuan->kode_tujuan }}.{{$pp->tujuan->name}}</td>
                </tr>
                <!-- data 3 -->
                <tr>
                  <td class="title">Program</td>
                  <td class="spasi">:</td>
                  <td class="subtitle">{{$pp->name_program}}</td>
                </tr>
                <!-- data 4 -->
                <tr>
                  <td class="title">Lokasi dan Waktu Kegiatan</td>
                  <td class="spasi">:</td>
                  <td class="subtitle">{{ $pp->lokasi }}, {{ $pp->waktu }}</td>
                </tr>
                <!-- data 5 -->
                <tr>
                  <td class="title">Latar Belakang</td>
                  <td class="spasi">:</td>
                  <td class="subtitle">{{$pp->latar_belakang}}
                  </td>
                </tr>
                <!-- data 6 -->
                <tr>
                  <td class="title">Proses Pelaksanaan</td>
                  <td class="spasi">:</td>
                  <td class="subtitle">{{$pp->proses_pelaksanaan}}
                  </td>
                </tr>
                <!-- data 7 -->
                <tr>
                  <td class="title">Hasil</td>
                  <td class="spasi">:</td>
                  <td class="subtitle">{{$pp->hasil}}
                  </td>
                </tr>
                <!-- data 8 -->
                <tr>
                  <td class="title">Dampak</td>
                  <td class="spasi">:</td>
                  <td class="subtitle">{{$pp->dampak}}
                  </td>
                </tr>
                <!-- data 9 -->
                <tr>
                  <td class="title">Tantangan</td>
                  <td class="spasi">:</td>
                  <td class="subtitle">{{$pp->tantangan}}
                  </td>
                </tr>
                <!-- data 10 -->
                <tr>
                  <td class="title">Pembelajaran</td>
                  <td class="spasi">:</td>
                  <td class="subtitle">{{$pp->pembelajaran}}
                  </td>
                </tr>
                <!-- data 11 -->
                <tr>
                  <td class="title">Peluang Replikasi</td>
                  <td class="spasi">:</td>
                  <td class="subtitle">{{$pp->peluang_replikasi}}
                  </td>
                </tr>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>
    <script>
        window.print();
    </script>
  </body>
</html>
