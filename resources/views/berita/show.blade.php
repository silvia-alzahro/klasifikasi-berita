<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>The News Reporter</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/font/font-awesome.min.css')}}" />
<link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/font/font.css')}}" />
<link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/bootstrap.min.css')}}" media="screen" />
<link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/style.css')}}" media="screen" />
<link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/responsive.css')}}" media="screen" />
<link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/jquery.bxslider.css')}}" media="screen" />
</head>
<body>
<div class="body_wrapper">
  <div class="center">
    <div class="header_area">
      <div class="logo floatleft"><a href="#"><img src="{{asset('frontend/images/logo.png')}}" alt="" /></a></div>
      <div class="top_menu floatleft">
        <ul>
          <li><a href="layouts/frontend">Home</a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Contact us</a></li>
          <li><a href="#">Subscribe</a></li>
          <li><a href="">Login</a></li>
        </ul>
      </div>
      <div class="social_plus_search floatright">
        <div class="social">
          <ul>
            <li><a href="#" class="twitter"></a></li>
            <li><a href="#" class="facebook"></a></li>
            <li><a href="#" class="feed"></a></li>
          </ul>
        </div>
        <div class="search">
          <form action="#" method="post" id="search_form">
            <input type="text" value="Search news" id="s" />
            <input type="submit" id="searchform" value="search" />
            <input type="hidden" value="post" name="post_type" />
          </form>
        </div>
      </div>
    </div>
    <div class="main_menu_area">
      <ul id="nav">
        <li><a href="#">Terbaru</a>
          <ul>
            <li><a href="#">Single item</a></li>
            <li><a href="#">Single item</a></li>
            <li><a href="#">Single item</a>
              <ul>
                <li><a href="#">Single item</a></li>
                <li><a href="#">Single item</a></li>
                <li><a href="#">Single item</a></li>
                <li><a href="#">Single item</a></li>
                <li><a href="#">Single item</a></li>
              </ul>
            </li>
            <li><a href="#">Single item</a></li>
            <li><a href="#">Single item</a></li>
          </ul>
        </li>
        <ul id="nav">
        <li><a href="#">olahraga</a>
          <ul>
            <li><a href="#">Sepak bola</a></li>
            <li><a href="#">Bulu tangkis</a></li>
            <li><a href="#">Bola voli</a>
              <ul>
                <li><a href="#">Bola basket</a></li>
                <li><a href="#">Single item</a></li>
                <li><a href="#">Single item</a></li>
                <li><a href="#">Single item</a></li>
                <li><a href="#">Single item</a></li>
              </ul>
            </li>
            <li><a href="#">Single item</a></li>
            <li><a href="#">Single item</a></li>
          </ul>
        </li>
        <li><a href="#">Ekonomi & Bisnis</a>
          <ul>
            <li><a href="#">Single item</a></li>
            <li><a href="#">Single item</a></li>
            <li><a href="#">Single item</a></li>
            <li><a href="#">Single item</a></li>
            <li><a href="#">Single item</a></li>
          </ul>
        </li>
        <li><a href="#">Entertainment</a>
          <ul>
            <li><a href="#">Single item</a></li>
            <li><a href="#">Single item</a></li>
            <li><a href="#">Single item</a>
              <ul>
                <li><a href="#">Single item</a></li>
                <li><a href="#">Single item</a></li>
                <li><a href="#">Single item</a></li>
                <li><a href="#">Single item</a></li>
                <li><a href="#">Single item</a></li>
              </ul>
            </li>
            <li><a href="#">Single item</a></li>
            <li><a href="#">Single item</a></li>
          </ul>
        </li>
        <li><a href="#">Politik</a>
          <ul>
            <li><a href="#">Single item</a></li>
            <li><a href="#">Single item</a></li>
            <li><a href="#">Single item</a></li>
            <li><a href="#">Single item</a></li>
            <li><a href="#">Single item</a></li>
          </ul>
        </li>
        <li><a href="#">Berita dunia</a>
          <ul>
            <li><a href="#">Single item</a></li>
            <li><a href="#">Single item</a></li>
            <li><a href="#">Single item</a></li>
            <li><a href="#">Single item</a></li>
            <li><a href="#">Single item</a></li>
          </ul>
        </li>
        
      </ul>
    </div>
<html>

<div class="container mt-3">
    <div class="row">
        <div class="col md-12">
<div class="card">
    <div class="card-header bg-dark">
    </div>
    <div class="card-body">
        <center>
       <label for="">
        </label>
        <h2>{{ $berita->judul }}</h2>
        <br>
        <img src="{{ $berita->image()}}" alt="" style="width:600px; height:400px;" alt="poto">
        <br>
        <label for="">
        </label>
        <h2>{{ $berita->isi }}</h2>
        <br>

        <label for="">
        </label>
        <h1>{{ $berita->kategori->nama_kategori }}</h1>
        <br>

        <label for="">
        </label>
        <h2>{{ $berita->nama_penulis }}</h2>
        <br>

        <label for="">
        </label>
        <h2>{{ $berita->tanggal }}</h2>
        <br>
</center>
<center><a class="btn btn-danger ml-2" href="{{ route('berita.index') }}">Kembali</a></center>
    </div>
</div>
</div>
</div>
</div>
</html>