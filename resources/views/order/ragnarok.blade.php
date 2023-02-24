<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ragnarok Mobile Eternal Love Big Cat Coin</title>

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
            <img src="{{ asset('img/ragnarok.jpg') }}" alt="big cat coin ragnarok">
            <h1>Top Up Big Cat Coin Ragnarok Mobile Eternal Love</h1>
            <h3>Proses Top Up Instan</h3>
            <p>Informasi top up Big Cat Coin Ragnarok Mobile Eternal Love termurah hanya di sini! Proses instan, cepat dan tidak ribet! Pembayaran mudah dan paling murah di antara lainnya!</p>
            <ol>
                <li>Masukan User ID & Server Name</li>
                <li>Pilih Paket Big Cat Coin </li>
                <li>Pilih Metode Pembayaran</li>
                <li>Tulis Nomor Whatsapp Aktiv</li>
                <li>Klik Pesan Sekarang</li>
                <li>Coin Akan Masuk Otomatis</li>
            </ol>
        </div>
        <div class="order-col2">

          <form action="#" method="post">
            @csrf
            
          <div class="isi-data">
            <h3>Lengkapi Data</h3>
            <div class="input-group mb-3">
              <input type="number" class="form-control" placeholder="User ID" aria-label="User" name="userid" id="user">
              <input type="text" class="form-control" placeholder="Server Name" aria-label="Server" name="serverid" id="server">
            </div>
          </div>

          {{-- =================================================== --}}

          <div class="pilih-diamond">

            <div class="row-diamond" id="pilih">
              <h3>Pilih Nominal</h3>

              <div class="pilih-jumlah-diamond" >
                <input type="radio" class="btn-check" name="options1" value="5 Big Cat Coin = Rp.14.112" id="rag1" autocomplete="off" checked>
                <label class="btn btn-primary" for="rag1">5 Big Cat Coin <br>Rp.14.112</label>
                </div>
    
                <div class="pilih-jumlah-diamond">
                <input type="radio" class="btn-check" name="options1" value="7 Big Cat Coin = Rp.19.862" id="rag2" autocomplete="off">
                <label class="btn btn-primary" for="rag2">7 Big Cat Coin <br>Rp.19.862</label>
                </div>
    
                <div class="pilih-jumlah-diamond">
                <input type="radio" class="btn-check" name="options1" value="8 Big Cat Coin = Rp.22.382" id="rag3" autocomplete="off">
                <label class="btn btn-primary" for="rag3">8 Big Cat Coin <br>Rp.22.382</label>
                </div>
    
                <div class="pilih-jumlah-diamond">
                <input type="radio" class="btn-check" name="options1" value="9 Big Cat Coin = Rp.24.777" id="rag4" autocomplete="off">
                <label class="btn btn-primary" for="rag4">9 Big Cat Coin <br>Rp.24.777</label>
                </div>

                <div class="pilih-jumlah-diamond">
                <input type="radio" class="btn-check" name="options1" value="20 Big Cat Coin = Rp.51.037" id="rag5" autocomplete="off">
                <label class="btn btn-primary" for="rag5">20 Big Cat Coin <br>Rp.51.037</label>
                </div>

                <div class="pilih-jumlah-diamond">
                <input type="radio" class="btn-check" name="options1" value="30 Big Cat Coin = Rp.74.762" id="rag6" autocomplete="off">
                <label class="btn btn-primary" for="rag6">30 Big Cat Coin <br>Rp.74.762</label>
                </div>

                <div class="pilih-jumlah-diamond">
                <input type="radio" class="btn-check" name="options1" value="40 Big Cat Coin = Rp.99.512" id="rag7" autocomplete="off">
                <label class="btn btn-primary" for="rag7">40 Big Cat Coin <br>Rp.99.512</label>
                </div>

                <div class="pilih-jumlah-diamond">
                <input type="radio" class="btn-check" name="options1" value="80 Big Cat Coin = Rp.196.362" id="rag8" autocomplete="off">
                <label class="btn btn-primary" for="rag8">80 Big Cat Coin <br>Rp.196.362</label>
                </div>

                <div class="pilih-jumlah-diamond">
                <input type="radio" class="btn-check" name="options1" value="120 Big Cat Coin = Rp.295.436" id="rag9" autocomplete="off">
                <label class="btn btn-primary" for="rag9">120 Big Cat Coin <br>Rp.295.436</label>
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

    <script src="{{ asset('js/orderragnarok.js?v=1.0') }}"></script>


  </body>
</html>