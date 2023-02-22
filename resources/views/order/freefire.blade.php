<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Free Fire Diamond</title>

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
            <img src="{{ asset('img/ff.jpeg') }}" alt="diamond ff">
            <h1>Top Up Diamond Free Fire</h1>
            <h3>Proses Top Up Instan</h3>
            <p>Informasi top up diamond free fire termurah hanya di sini! Proses instan, cepat dan tidak ribet! Pembayaran mudah dan paling murah di antara lainnya!</p>
            <ol>
                <li>Masukan Player ID</li>
                <li>Pilih Paket Diamond</li>
                <li>Pilih Metode Pembayaran</li>
                <li>Tulis Nomor Whatsapp Aktiv</li>
                <li>Klik Pesan Sekarang</li>
                <li>Diamond Akan Masuk Otomatis</li>
            </ol>
        </div>
        <div class="order-col2">

          <form action="#" method="post">
            @csrf
            
          <div class="isi-data">
            <h3>Lengkapi Data</h3>
            <div class="input-group mb-3">
              <input type="number" class="form-control" placeholder="Player ID" aria-label="User" name="userid" id="user">
              
            </div>
          </div>

          {{-- =================================================== --}}

          <div class="pilih-diamond">

            <div class="row-diamond" id="pilih">
              <h3>Pilih Nominal</h3>

              <div class="pilih-jumlah-diamond" >
                <input type="radio" class="btn-check" name="options1" value="75 Diamond = Rp.11.026" id="ff1" autocomplete="off" checked>
                <label class="btn btn-primary" for="ff1">75 Diamond <br>Rp.11.026</label>
                </div>
    
                <div class="pilih-jumlah-diamond">
                <input type="radio" class="btn-check" name="options1" value="100 Diamond = Rp.15.339" id="ff2" autocomplete="off">
                <label class="btn btn-primary" for="ff2">100 Diamond <br>Rp.15.339</label>
                </div>
    
                <div class="pilih-jumlah-diamond">
                <input type="radio" class="btn-check" name="options1" value="140 Diamond = Rp.20.271" id="ff3" autocomplete="off">
                <label class="btn btn-primary" for="ff3">140 Diamond <br>Rp.20.271</label>
                </div>
    
                <div class="pilih-jumlah-diamond">
                <input type="radio" class="btn-check" name="options1" value="200 Diamond = Rp.29.491" id="ff4" autocomplete="off">
                <label class="btn btn-primary" for="ff4">200 Diamond <br>Rp.29.491</label>
                </div>

                <div class="pilih-jumlah-diamond">
                <input type="radio" class="btn-check" name="options1" value="280 Diamond = Rp.39.355" id="ff5" autocomplete="off">
                <label class="btn btn-primary" for="ff5">280 Diamond <br>Rp.39.355</label>
                </div>

                <div class="pilih-jumlah-diamond">
                <input type="radio" class="btn-check" name="options1" value="355 Diamond = Rp.48.397" id="ff6" autocomplete="off">
                <label class="btn btn-primary" for="ff6">355 Diamond <br>Rp.48.397</label>
                </div>

                <div class="pilih-jumlah-diamond">
                <input type="radio" class="btn-check" name="options1" value="400 Diamond = Rp.54.699" id="ff7" autocomplete="off">
                <label class="btn btn-primary" for="ff7">400 Diamond <br>Rp.54.699</label>
                </div>

                <div class="pilih-jumlah-diamond">
                <input type="radio" class="btn-check" name="options1" value="500 Diamond = Rp.67.353" id="ff8" autocomplete="off">
                <label class="btn btn-primary" for="ff8">500 Diamond <br>Rp.67.353</label>
                </div>

                <div class="pilih-jumlah-diamond">
                <input type="radio" class="btn-check" name="options1" value="1000 Diamond = Rp.131.825" id="ff9" autocomplete="off">
                <label class="btn btn-primary" for="ff9">1000 Diamond <br>Rp.131.825</label>
                </div>

                <div class="pilih-jumlah-diamond">
                <input type="radio" class="btn-check" name="options1" value="1440 Diamond = Rp.186.877" id="ff10" autocomplete="off">
                <label class="btn btn-primary" for="ff10">1440 Diamond <br>Rp.186.877</label>
                </div>

                <div class="pilih-jumlah-diamond">
                <input type="radio" class="btn-check" name="options1" value="2000 Diamond = Rp.256.837" id="ff11" autocomplete="off">
                <label class="btn btn-primary" for="ff11">2000 Diamond <br>Rp.256.837</label>
                </div>

                <div class="pilih-jumlah-diamond">
                <input type="radio" class="btn-check" name="options1" value="3620 Diamond = Rp.466.162" id="ff12" autocomplete="off">
                <label class="btn btn-primary" for="ff12">3620 Diamond <br>Rp.466.162</label>
                </div>

                <div class="pilih-jumlah-diamond">
                <input type="radio" class="btn-check" name="options1" value="4000 Diamond = Rp.510.537" id="ff13" autocomplete="off">
                <label class="btn btn-primary" for="ff13">4000 Diamond <br>Rp.510.537</label>
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

    <script src="{{ asset('js/orderff.js?v=1.0') }}"></script>


  </body>
</html>