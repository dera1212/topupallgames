<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mobile Legends</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    
    <link rel="stylesheet" href="{{ asset('css/form-order.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Serif&display=swap" rel="stylesheet">

  </head>
  <body>

    @include('navbar.index')

    <div class="container-order">
        <div class="order-col1">
            <img src="{{ asset('img/ML.jpg') }}" alt="">
            <h1>Top Up Diamond Mobile Legends Bang - Bang</h1>
            <h3>Proses Top Up Instan</h3>
            <p>Informasi top up diamond mobile legends termurah hanya di sini! Proses instan, cepat dan tidak ribet! Pembayaran mudah dan paling murah di antara lainnya!</p>
            <ol>
                <li>Masukan User ID & Server</li>
                <li>Pilih Paket Diamond</li>
                <li>Pilih Metode Pembayaran</li>
                <li>Tulis Nomor Whatsapp Aktiv</li>
                <li>Klik Beli & Bayar</li>
                <li>Diamond Akan Masuk Otomatis</li>
            </ol>
        </div>
        <div class="order-col2">

          <div class="isi-data">
            <h3>Lengkapi Data</h3>
            <div class="input-group mb-3">
              <input type="text" class="form-control" placeholder="User ID" aria-label="User" name="userid">
              <input type="text" class="form-control" placeholder="Server ID" aria-label="Server" name="serverid">
            </div>
          </div>

          {{-- =================================================== --}}

          <div class="pilih-diamond">

            <div class="row-diamond">
              <h3>Pilih Nominal</h3>

              <div class="pilih-jumlah-diamond">
                <input type="radio" class="btn-check" name="options1" value="900" id="900" autocomplete="off" checked>
                <label class="btn btn-primary" for="900">900 Diamond <br>RP.200.000</label>
                </div>
    
                <div class="pilih-jumlah-diamond">
                <input type="radio" class="btn-check" name="options1" value="1050" id="1050" autocomplete="off">
                <label class="btn btn-primary" for="1050">1050 Diamond</label>
                </div>
    
                <div class="pilih-jumlah-diamond">
                <input type="radio" class="btn-check" name="options1" value="1200" id="1200" autocomplete="off">
                <label class="btn btn-primary" for="1200">1200 Diamond</label>
                </div>
    
                <div class="pilih-jumlah-diamond">
                <input type="radio" class="btn-check" name="options1" value="1500" id="1500" autocomplete="off">
                <label class="btn btn-primary" for="1500">1500 Diamond</label>
                </div>

            </div>
          </div>

          {{-- =================================================== --}}

          <div class="pilih-pembayaran">
            <h3>Metode Pembayaran</h3>

            <div class="pilih-bayar">
            <input type="radio" class="btn-check" name="options" id="bankbri" value="bankbri" autocomplete="off" checked>
            <label class="btn btn-primary" for="bankbri">Bank BRI</label>
            </div>

            <div class="pilih-bayar">
            <input type="radio" class="btn-check" name="options" id="bankbca" value="bankbca" autocomplete="off">
            <label class="btn btn-primary" for="bankbca">Bank BCA</label>
            </div>

            <div class="pilih-bayar">
            <input type="radio" class="btn-check" name="options" id="dana" value="dana" autocomplete="off">
            <label class="btn btn-primary" for="dana">QR DANA</label>
            </div>

            <div class="pilih-bayar">
            <input type="radio" class="btn-check" name="options" id="shopee" value="shopee" autocomplete="off">
            <label class="btn btn-primary" for="shopee">QR Shopee</label>
            </div>

          </div>

          <div class="tulis-wa">
            <h3>Masukkan Nomor Whatsapp</h3>
            <div class="input-group mb-3">
              <input type="text" class="form-control" placeholder="Nomor Whatsapp" aria-label="Wa" name="whatsapp">
            </div>
          </div>

        </div>
    </div>

    @include('footer.index')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>