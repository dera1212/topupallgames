<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Top Up Diamond, Voucher All Games - Ateng Store</title>

    <meta name="description" content="Semua kebutuhan top up diamond, voucer all games mobile ada di Ateng Store. Harga diamond paling murah dan proses paling cepat. Tersedia mulai dari diamond game favorit mobile legends, free fire, pubg dan lainnya.">

    <meta name="keywords" content="top up diamond, jual diamond murah, top up termurah, diamond mobile legends paling murah, diamond free fire, diamond pubg, top up vocher games, vocher game terlengkap">

    <meta name="author" content="Rizal Ahmad">

    <link rel="canonical" href="https://topupallgames.com/"/>

    <meta property="og:type" content="website"/>
    <meta property="og:url" content="https://topupallgames.com/"/>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Serif&display=swap" rel="stylesheet">

    <!-- Favicons -->
    <link rel="icon" type="image/x-icon" href="{{ asset('img/topupallgames.png') }}">
    <link rel="shortcut icon" href="{{ asset('img/topupallgames.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('img/topupallgames.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('img/topupallgames.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('img/topupallgames.png') }}">


</head>
<body>
    @include('navbar.index')
    
      <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item banner-custom active">
            <img src="{{ asset('img/ML.jpg') }}" class="d-block w-50 mx-auto my-3" alt="...">
          </div>
          <div class="carousel-item banner-custom">
            <img src="{{ asset('img/ff.jpeg') }}" class="d-block w-50 mx-auto my-3" alt="...">
          </div>
          <div class="carousel-item banner-custom">
            <img src="{{ asset('img/pubg.jpg') }}" class="d-block w-50 mx-auto my-3" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

      <div class="container">
        <h1 class="h1-gaya">Top Up Diamond, Voucher All Games</h1>
        <p class="p-gaya">Semua kebutuhan top up diamond, voucer all games mobile ada di Ateng Store. Harga diamond paling murah dan proses paling cepat. Tersedia mulai dari diamond game favorit mobile legends, free fire, pubg dan lainnya.</p>
      </div>

      <div class="layanan">
        <h3 class="h3-gaya">Pilih Game Mobile</h3>
        <div class="row">

          <div class="col-gaya"><a href="{{url('order/mobile-legeds-diamond')}}">
            <img src="{{ asset('img/ML.jpg') }}" alt="">
            <h4 class="h4-gaya">Mobile Legends</h4></a>
          </div>

          <div class="col-gaya"><a href="{{url('order/free-fire-diamond')}}">
            <img src="{{ asset('img/ff.jpeg') }}" alt="">
            <h4 class="h4-gaya">Free Fire</h4></a>
          </div>

          <div class="col-gaya"><a href="{{url('order/pubg-uc')}}">
            <img src="{{ asset('img/pubg.jpg') }}" alt="">
            <h4 class="h4-gaya">PUBG Mobile</h4></a>
          </div>

          <div class="col-gaya"><a href="#">
            <img src="{{ asset('img/aov.jpg') }}" alt="">
            <h4 class="h4-gaya">AOV</h4></a>
          </div>

          <div class="col-gaya"><a href="#">
            <img src="{{ asset('img/ragnarok.jpg') }}" alt="">
            <h4 class="h4-gaya">Ragnarok M.E.L</h4></a>
          </div>

          <div class="col-gaya"><a href="#">
            <img src="{{ asset('img/callofduty.jpg') }}" alt="">
            <h4 class="h4-gaya">Call Of Duty</h4></a>
          </div>

          <div class="col-gaya"><a href="#">
            <img src="{{ asset('img/steam.jpg') }}" alt="">
            <h4 class="h4-gaya">Steam IDR</h4></a>
          </div>

          <div class="col-gaya"><a href="#">
            <img src="{{ asset('img/megaxus.jpg') }}" alt="">
            <h4 class="h4-gaya">Megaxus</h4></a>
          </div>

          <div class="col-gaya"><a href="#">
            <img src="{{ asset('img/pointblank.jpg') }}" alt="">
            <h4 class="h4-gaya">Point Blank</h4></a>
          </div>

          <div class="col-gaya"><a href="#">
            <img src="{{ asset('img/hago.jpg') }}" alt="">
            <h4 class="h4-gaya">Hago</h4></a>
          </div>
         
        </div>
      </div>

      @include('footer.index')

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>
</html>