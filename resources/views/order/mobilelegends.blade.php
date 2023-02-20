<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mobile Legends</title>

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

          <form action="#" method="post">
            @csrf
            
          <div class="isi-data">
            <h3>Lengkapi Data</h3>
            <div class="input-group mb-3">
              <input type="number" class="form-control" placeholder="User ID" aria-label="User" name="userid" id="user">
              <input type="number" class="form-control" placeholder="Server ID" aria-label="Server" name="serverid" id="server">
            </div>
          </div>

          {{-- =================================================== --}}

          <div class="pilih-diamond">

            <div class="row-diamond" id="pilih">
              <h3>Pilih Nominal</h3>

              <div class="pilih-jumlah-diamond" >
                <input type="radio" class="btn-check" name="options1" value="42 Diamond = Rp.12.756" id="ml1" autocomplete="off" checked>
                <label class="btn btn-primary" for="ml1">42 Diamond <br>Rp.12.756</label>
                </div>
    
                <div class="pilih-jumlah-diamond">
                <input type="radio" class="btn-check" name="options1" value="86 Diamond = Rp.22.543" id="ml2" autocomplete="off">
                <label class="btn btn-primary" for="ml2">86 Diamond <br>Rp.22.543</label>
                </div>
    
                <div class="pilih-jumlah-diamond">
                <input type="radio" class="btn-check" name="options1" value="172 Diamond = Rp.40.634" id="ml3" autocomplete="off">
                <label class="btn btn-primary" for="ml3">172 Diamond <br>Rp.40.634</label>
                </div>
    
                <div class="pilih-jumlah-diamond">
                <input type="radio" class="btn-check" name="options1" value="257 Diamond = Rp.60.843" id="ml4" autocomplete="off">
                <label class="btn btn-primary" for="ml4">257 Diamond <br>Rp.60.843</label>
                </div>

                <div class="pilih-jumlah-diamond">
                <input type="radio" class="btn-check" name="options1" value="344 Diamond = Rp.80.837" id="ml5" autocomplete="off">
                <label class="btn btn-primary" for="ml5">344 Diamond <br>Rp.80.837</label>
                </div>

                <div class="pilih-jumlah-diamond">
                <input type="radio" class="btn-check" name="options1" value="429 Diamond = Rp.100.993" id="ml6" autocomplete="off">
                <label class="btn btn-primary" for="ml6">429 Diamond <br>Rp.100.993</label>
                </div>

                <div class="pilih-jumlah-diamond">
                <input type="radio" class="btn-check" name="options1" value="514 Diamond = Rp.120.021" id="ml7" autocomplete="off">
                <label class="btn btn-primary" for="ml7">514 Diamond <br>Rp.120.021</label>
                </div>

                <div class="pilih-jumlah-diamond">
                <input type="radio" class="btn-check" name="options1" value="600 Diamond = Rp.139.215" id="ml8" autocomplete="off">
                <label class="btn btn-primary" for="ml8">600 Diamond <br>Rp.139.215</label>
                </div>

                <div class="pilih-jumlah-diamond">
                <input type="radio" class="btn-check" name="options1" value="706 Diamond = Rp.158.157" id="ml9" autocomplete="off">
                <label class="btn btn-primary" for="ml9">706 Diamond <br>Rp.158.157</label>
                </div>

                <div class="pilih-jumlah-diamond">
                <input type="radio" class="btn-check" name="options1" value="878 Diamond = Rp.197.192" id="ml10" autocomplete="off">
                <label class="btn btn-primary" for="ml10">878 Diamond <br>Rp.197.192</label>
                </div>

                <div class="pilih-jumlah-diamond">
                <input type="radio" class="btn-check" name="options1" value="963 Diamond = Rp.216.610" id="ml11" autocomplete="off">
                <label class="btn btn-primary" for="ml11">963 Diamond <br>Rp.216.610</label>
                </div>

                <div class="pilih-jumlah-diamond">
                <input type="radio" class="btn-check" name="options1" value="1050 Diamond = Rp.240.200" id="ml12" autocomplete="off">
                <label class="btn btn-primary" for="ml12">1050 Diamond <br>Rp.240.200</label>
                </div>

                <div class="pilih-jumlah-diamond">
                <input type="radio" class="btn-check" name="options1" value="1120 Diamond = Rp.278.127" id="ml13" autocomplete="off">
                <label class="btn btn-primary" for="ml13">1120 Diamond <br>Rp.278.127</label>
                </div>

                <div class="pilih-jumlah-diamond">
                <input type="radio" class="btn-check" name="options1" value="1412 Diamond = Rp.316.121" id="ml14" autocomplete="off">
                <label class="btn btn-primary" for="ml14">1412 Diamond <br>Rp.316.121</label>
                </div>

                <div class="pilih-jumlah-diamond">
                <input type="radio" class="btn-check" name="options1" value="1669 Diamond = Rp.378.556" id="ml15" autocomplete="off">
                <label class="btn btn-primary" for="ml15">1669 Diamond <br>Rp.378.556</label>
                </div>

                <div class="pilih-jumlah-diamond">
                <input type="radio" class="btn-check" name="options1" value="2195 Diamond = Rp.475.980" id="ml16" autocomplete="off">
                <label class="btn btn-primary" for="ml16">2195 Diamond <br>Rp.475.980</label>
                </div>

                <div class="pilih-jumlah-diamond">
                <input type="radio" class="btn-check" name="options1" value="2539 Diamond = Rp.555.619" id="ml17" autocomplete="off">
                <label class="btn btn-primary" for="ml17">2539 Diamond <br>Rp.555.619</label>
                </div>

                <div class="pilih-jumlah-diamond">
                <input type="radio" class="btn-check" name="options1" value="2901 Diamond = Rp.627.091" id="ml18" autocomplete="off">
                <label class="btn btn-primary" for="ml18">2901 Diamond <br>Rp.627.091</label>
                </div>

                <div class="pilih-jumlah-diamond">
                <input type="radio" class="btn-check" name="options1" value="3688 Diamond = Rp.783.092" id="ml19" autocomplete="off">
                <label class="btn btn-primary" for="ml19">3688 Diamond <br>Rp.783.092</label>
                </div>

                <div class="pilih-jumlah-diamond">
                <input type="radio" class="btn-check" name="options1" value="4394 Diamond = Rp.932.881" id="ml20" autocomplete="off">
                <label class="btn btn-primary" for="ml20">4394 Diamond <br>Rp.932.881</label>
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

    <script src="{{ asset('js/order.js') }}"></script>


  </body>
</html>