<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Call of Duty Mobile Garena CP</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    
    <link rel="stylesheet" href="{{ asset('css/form-order.css?v=1.2') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Serif&display=swap" rel="stylesheet">

  </head>
  <body>

    @include('navbar.index')

    <div class="container-order">
        <div class="order-col1">
            <img src="{{ asset('img/callofduty.jpg') }}" alt="call of duty (cod) mobile cp">
            <h1>Top Up Call Of Duty Mobile (COD) CP</h1>
            <h3>Proses Top Up Instan</h3>
            <p>Informasi top up Call Of Duty Mobile (COD) CP termurah hanya di sini! Proses instan, cepat dan tidak ribet! Pembayaran mudah dan paling murah di antara lainnya!</p>
            <ol>
                <li>Masukan Open ID</li>
                <li>Pilih Paket CP</li>
                <li>Pilih Metode Pembayaran</li>
                <li>Tulis Nomor Whatsapp Aktiv</li>
                <li>Klik Pesan Sekarang</li>
                <li>CP Akan Masuk Otomatis</li>
            </ol>
        </div>
        <div class="order-col2">

          <form action="#" method="post">
            @csrf
            
          <div class="isi-data">
            <h3>Lengkapi Data</h3>
            <div class="input-group mb-3">
              <input type="number" class="form-control" placeholder="Open ID" aria-label="User" name="userid" id="user">
              
            </div>
          </div>

          {{-- =================================================== --}}

          <div class="pilih-diamond">

            <div class="row-diamond" id="pilih">
              <h3>Pilih Nominal</h3>

              <div class="pilih-jumlah-diamond" >
                <input type="radio" class="btn-check" name="options1" value="26 CP = Rp.6.012" id="cod1" autocomplete="off" checked>
                <label class="btn btn-primary" for="cod1">26 CP <br>Rp.6.012</label>
                </div>
    
                <div class="pilih-jumlah-diamond">
                <input type="radio" class="btn-check" name="options1" value="31 CP = Rp.7.162" id="cod2" autocomplete="off">
                <label class="btn btn-primary" for="cod2">31 CP <br>Rp.7.162</label>
                </div>
    
                <div class="pilih-jumlah-diamond">
                <input type="radio" class="btn-check" name="options1" value="53 CP = Rp.12.807" id="cod3" autocomplete="off">
                <label class="btn btn-primary" for="cod3">53 CP <br>Rp.12.807</label>
                </div>
    
                <div class="pilih-jumlah-diamond">
                <input type="radio" class="btn-check" name="options1" value="106 CP = Rp.22.612" id="cod4" autocomplete="off">
                <label class="btn btn-primary" for="cod4">106 CP <br>Rp.22.612</label>
                </div>

                <div class="pilih-jumlah-diamond">
                <input type="radio" class="btn-check" name="options1" value="264 CP = Rp.50.962" id="cod5" autocomplete="off">
                <label class="btn btn-primary" for="cod5">264 CP <br>Rp.50.962</label>
                </div>

                <div class="pilih-jumlah-diamond">
                <input type="radio" class="btn-check" name="options1" value="528 CP = Rp.105.212" id="cod6" autocomplete="off">
                <label class="btn btn-primary" for="cod6">528 CP <br>Rp.105.212</label>
                </div>

                

            </div>
          </div>

          {{-- =================================================== --}}

          <div class="pilih-pembayaran" >
            <h3>Metode Pembayaran</h3>

            

            <div class="pilih-bayar">
            <input type="radio" class="btn-check" name="options" id="bankbri" value="BANK BRI" autocomplete="off" checked>
            <label class="btn btn-primary" for="bankbri">Bank BRI</label>
            </div>

            <div class="pilih-bayar">
            <input type="radio" class="btn-check" name="options" id="bankbca" value="BANK BCA" autocomplete="off">
            <label class="btn btn-primary" for="bankbca">Bank BCA</label>
            </div>

            <div class="pilih-bayar">
            <input type="radio" class="btn-check" name="options" id="dana" value="DANA" autocomplete="off">
            <label class="btn btn-primary" for="dana">QR DANA</label>
            </div>

            <div class="pilih-bayar">
            <input type="radio" class="btn-check" name="options" id="shopee" value="SHOPEEPAY" autocomplete="off">
            <label class="btn btn-primary" for="shopee">QR Shopee</label>
            </div>
          

          </div>

          <div class="tulis-wa">
            <h3>Masukkan Nomor Whatsapp</h3>
            <div class="input-group mb-3">
              <input type="tel"  class="form-control" placeholder="Nomor Whatsapp" aria-label="Wa" name="whatsapp" id="nomorwa">
            </div>
            <a type="submit" name="submit" id="kirim_ke_wa" class="btn btn-primary" onclick="kirimWa()">Pesan Sekarang</a>
          </div>
          

        </form>
          
        </div>
    </div>

   

    @include('footer.index')


    <script src="https://code.jquery.com/jquery-3.6.3.slim.js" integrity="sha256-DKU1CmJ8kBuEwumaLuh9Tl/6ZB6jzGOBV/5YpNE2BWc=" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>


    {{-- script js kirim wa --}}

    <script src="{{ asset('js/ordercod.js?v=1.0') }}"></script>


  </body>
</html>