<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>SionganShop</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="{{asset('ezone/assets/img/logoikan.png')}}">
		
        <!-- botman -->
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/assets/css/chat.min.css">

		<!-- all css here -->
        <link rel="stylesheet" href="{{asset('ezone/assets/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{asset('ezone/assets/css/magnific-popup.css')}}">
        <link rel="stylesheet" href="{{asset('ezone/assets/css/animate.css')}}">
        <link rel="stylesheet" href="{{asset('ezone/assets/css/owl.carousel.min.css')}}">
        <link rel="stylesheet" href="{{asset('ezone/assets/css/themify-icons.css')}}">
        <link rel="stylesheet" href="{{asset('ezone/assets/css/pe-icon-7-stroke.css')}}">
        <link rel="stylesheet" href="{{asset('ezone/assets/css/icofont.css')}}">
        <link rel="stylesheet" href="{{asset('ezone/assets/css/meanmenu.min.css')}}">
        <link rel="stylesheet" href="{{asset('ezone/assets/css/bundle.css')}}">
        <link rel="stylesheet" href="{{asset('ezone/assets/css/style.css')}}">
        <link rel="stylesheet" href="{{asset('ezone/assets/css/responsive.css')}}">
        <script src="{{asset('ezone/assets/js/vendor/modernizr-2.8.3.min.js')}}"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
              <!-- header start -->
              <header class="header-area wrapper-padding-2">
            <div id="main-menu" class="sticker header-sticky">
                <div class="container-fluid">
                    <div class="logo-menu-wrapper">
                        <div class="logo-watch navbar-header">
                            <!-- disni logo -->
                            <a class="navbar-brand" href=""><img src="ezone/assets/img/logo/logoikan4.png" alt=""></a>
                        </div>
                        <div class="hamburger-wrapper">
                            <div class="hamburger-menu  " >
                                <nav class="">
                                    <ul>
                                        <li><a href="#home-area">HOME</a></li>
                                        <li><a href="#about-area">TENTANG</a></li>
                                        <li><a href="#shop-area">KATALOG</a></li>
                                        <li><a href="#contact-area">KONTAK</a></li>
                                    </ul>
                                </nav>
                                </div>
                                  </div>
                                <div class="furits-login-cart">
                            <div class="furits-login">
                            @guest
                            @if (Route::has('login'))
                                    <li>
                                        <a href="{{ route('login') }}">Login</a>
                                    </li>
                             @endif

                             @if (Route::has('register'))
                                    <li>
                                        <a href="{{ route('register') }}">Reg</a>
                                    </li>
                            @endif

                            @else

                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right warna" aria-labelledby="navbarDropdown">
                                  
                                <a class="dropdown-item " href="{{ url('profile') }}">
                                     <i class="pe-7s-user"></i> Profile
                                    </a>

                                    <a class="dropdown-item" href="{{ url('history') }}">
                                    <i class="pe-7s-note2"></i> Riwayat Pemesanan
                                    </a>

                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                       <i class="pe-7s-unlock"></i> {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                            
                            </div>

                            <div class="header-cart-4 furits-cart">
                            <?php 
                            // Solusi : digunkan percabangan
                            //seharusnya untuk mengakses halaman tidak diperlukan login, kecuali ingin pesan
                                
                            // $pesanan_utama = \App\Models\Pesanan::where('user_id', Auth::user()->id)->where ('status', 0)->first();

                            // if(!empty($pesanan_utama)){
                            //     $notif = \App\Models\PesananDetail::where('pesanan_id', $pesanan_utama->id)->count();
                            // }
                          
                           ?>
                           
                            
                                <a class="icon-cart" href="{{ url('check-out') }}">
                                    <i class="pe-7s-shopbag"></i>
                                    <!-- @if(!empty($notif))
                                        <span class="badge badge-danger">{{ $notif }}</span>
                                        @endif -->
                                </a>
                               
                              
                              
                            
                        </div>
                    </div>
                </div>
            </div>
            <!--Menu Mobile  -->
            <div class="mobile-menu-area handicraft-menu d-md-block col-md-12 col-lg-12 col-12 d-lg-none d-xl-none">
                            <div class="mobile-menu">
                                <nav id="mobile-menu-active">
                                    <ul class="menu-overflow">
                                  

                                        <li><a href="#home-area">HOME</a>
                                            
                                        </li>
                                        <li><a href="#about-area">TENTANG</a>
                                          
                                        </li>
                                        <li><a href="#shop-area">KATALOG</a>
                                          
                                        </li>
                                       
                                        <li><a href="#contact-area"> Contact  </a></li>
                                    </ul>
                                </nav>							
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
       
        <!-- header end -->
        <!-- slider start -->
        <div id="home-area" class="height-100vh bg-img watch-slider" style="background-image: url(ezone/assets/img/slider/10_.png)">
            <div class="table">
                <div class="table-cell">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 align-items-center">
                                <div class="slider-text">
                                 <!--class="tlt1"-->    <h2 >Sistem <br>Informasi <br>Siongan Shop</h2> 
                                    <div class="button-set">
                                        
                                        <a class="furits-slider-btn btn-hover animated" href="#shop-area">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- about area start -->
        <div id="about-area" class="watch-about-area bg-img ptb-150" style="background-image: url(ezone/assets/img/bg/8.jpg)">
            <div class="container">
                <div class="watch-about-content text-center">
                    <img class="tilter" src="ezone/assets/img/banner/3(2).jpg" alt="" >
                    <h2>SionganShop</h2>
                    <p>SionganShop merupakan salah satu situs e commerce yang berpusat dijember. SionganShop bertujuan untuk meningkatkan penjualan bibit ikan lele maupun ikan lele konsumsi. Beragam koleksi jenis ikan lele yang dijual di SionganShop seperti jenis Mutiara,Masamo,Dumbo,Sangkuriang dengan harga yang ekonomis dan kualitas yang terjamin. SionganShop juga menawarkan sebuah fitur yang berfungsi untuk membimbing bagaimana cara pembudidayaan serta pembesaran ikan lele. </p>
                   
                </div>
            </div>
        </div>
        
        <!-- product area start -->
        <div id="shop-area" >
            <!-- product area start -->
        <div class="product-style-area gray-bg-4 pb-105">
            <div class="container-fluid">
                <div class="section-title-furits bg-shape text-center mb-80">
                    <img src="{{asset('ezone/assets/img/icon-img/63.png')}}" >
                    <h2>Katalog</h2>
                </div>
                <div class="product-fruit-slider owl-carousel">
                
                @foreach ($produks as $produk)
                    <div class="product-fruit-wrapper">
                        <div class="product-fruit-img">
                        @if($produk->stok == 0 || $produk->stok <= 0)
                        <div class="alert alert-warning" style="text-align: center;">Produk ini habis</div>
                        @endif

                        <!-- @if($produk->stok <= 3)
                        <div class="alert alert-warning" style="text-align: center;">Produk segera habis</div>
                        @endif -->
                            <a href="{{ url ('pesan') }}/{{$produk->id}}"> <img src="{{ url('uploads') }}/{{ $produk->foto_produk}}" ></a>
                            <div class="product-furit-action">
                            <!-- Berikan kondisi untuk stok menggunakan if -->
                                <!-- <a class="furit-animate-left" title="Add To Cart" href="{{ url ('keranjang_aksi') }}/{{$produk->id}}">
                                    <i class="pe-7s-cart"></i>
                                </a>
                                <a class="furit-animate-right" title="Detail" href="{{ url ('pesan') }}/{{$produk->id}}">
                                    <i class="pe-7s-info"></i>
                                </a> -->
                            </div>
                        </div>
                        <div class="product-fruit-content text-center">
                            <h4><a href="#">{{ $produk->nama_produk }}</a></h4>
                            <span>Rp. {{ number_format($produk->harga_produk)}}</span>
                        </div>
                    </div>
                    @endforeach
                   
                </div>
            </div>
        </div>
       
        <!-- product area end -->
        <!-- video area start 
        <div id="video-area" class="video-area bg-img pt-140 pb-135" style="background-image: url(ezone/assets/img/bg/10.jpg)">
            <div class="container">
                <div class="row">
                    <div class="ml-auto col-lg-6">
                        <div class="watch-video-content">
                            <h2>Explore <br>Every part of this <br>Watch.</h2>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            <div class="video-btn">
                                <a class="video-popup" href="https://www.youtube.com/watch?v=wI4ocEF3Wfk"><i class="ti-control-play"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        features area start -->
       
      
    
        <!-- footer area start -->
        <footer id="contact-area" class="footer-area">
            <div class="footer-top-area pt-70 pb-35 wrapper-padding-5">
                <div class="container-fluid">
                    <div class="widget-wrapper">
                        <div class="footer-widget mb-30">
                            <a href="#home-area"><img src="ezone/assets/img/logo/logoikan22.png" alt=""></a>
                            
                        </div>
                        <div class="footer-widget mb-30">
                            <h3 class="footer-widget-title-5">Contact Info</h3>
                            <div class="footer-info-wrapper-3">
                                <div class="footer-address-furniture">
                                    <div class="footer-info-icon3">
                                        <span>Address: </span>
                                    </div>
                                    <div class="footer-info-content3">
                                        <p> Jl. Ledokombo Dusun Kajar RT.01/RW.13 Desa Sumberjati Kec. Silo Kab. Jember</p>
                                    </div>
                                </div>
                                <div class="footer-address-furniture">
                                    <div class="footer-info-icon3">
                                        <span>Phone: </span>
                                    </div>
                                    <div class="footer-info-content3">
                                        <p>082131296499</p>
                                    </div>
                                </div>
                                <div class="footer-address-furniture">
                                    <div class="footer-info-icon3">
                                        <span>E-mail: </span>
                                    </div>
                                    <div class="footer-info-content3">
                                        <p><a href=""> Iskandarzulkarnain5137@gmail.com</a> <br>  
                                        <!-- <a href="#"> domain@mail.info</a> --></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="footer-widget mb-30">
                            <h3 class="footer-widget-title-5">Map</h3>
                            <div class="form-group">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3949.374072350664!2d113.84724301996769!3d-8.165015275325464!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd6bec0d900d51f%3A0xdd282ca5e72342c8!2sJl.%20Ledokombo%2C%20Kabupaten%20Jember%2C%20Jawa%20Timur!5e0!3m2!1sen!2sid!4v1652642990997!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom ptb-20 gray-bg-8">
                <div class="container">
                    <div class="row">
                        <div class="col-12 text-center">
                            <div class="copyright-furniture">
                                <p>Copyright © <a href="https://hastech.company/">HasTech</a> 2018 . All Right Reserved.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        
		
		
		
		
		
		
		
		
		
		<!-- all js here -->
        <script type="text/javascript">
            var botmanWidget = {
                introMessage: "Haloo, kami akun bot Siongan Shop",
                aboutText: "ExpertRohila"
            };
        </script>
        <script src='https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/js/widget.js'></script>

        <script src="ezone/assets/js/vendor/jquery-1.12.0.min.js"></script>
        <script src="ezone/assets/js/popper.js"></script>
        <script src="ezone/assets/js/bootstrap.min.js"></script>
        <script src="ezone/assets/js/jquery.magnific-popup.min.js"></script>
        <script src="ezone/assets/js/isotope.pkgd.min.js"></script>
        <script src="ezone/assets/js/imagesloaded.pkgd.min.js"></script>
        <script src="ezone/assets/js/jquery.counterup.min.js"></script>
        <script src="ezone/assets/js/waypoints.min.js"></script>
        <script src="ezone/assets/js/ajax-mail.js"></script>
        <script src="ezone/assets/js/owl.carousel.min.js"></script>
        <script src="ezone/assets/js/plugins.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBMlLa3XrAmtemtf97Z2YpXwPLlimRK7Pk"></script>
		<script>
            function init() {
                var mapOptions = {
                    zoom: 11,
                    scrollwheel: false,
                    center: new google.maps.LatLng(40.709896, -73.995481),
                    styles: [
                        {
                            "featureType": "administrative.locality",
                            "elementType": "all",
                            "stylers": [
                                {
                                    "hue": "#2c2e33"
                                },
                                {
                                    "saturation": 7
                                },
                                {
                                    "lightness": 19
                                },
                                {
                                    "visibility": "on"
                                }
                            ]
                        },
                        {
                            "featureType": "landscape",
                            "elementType": "all",
                            "stylers": [
                                {
                                    "hue": "#ffffff"
                                },
                                {
                                    "saturation": -100
                                },
                                {
                                    "lightness": 100
                                },
                                {
                                    "visibility": "simplified"
                                }
                            ]
                        },
                        {
                            "featureType": "poi",
                            "elementType": "all",
                            "stylers": [
                                {
                                    "hue": "#ffffff"
                                },
                                {
                                    "saturation": -100
                                },
                                {
                                    "lightness": 100
                                },
                                {
                                    "visibility": "off"
                                }
                            ]
                        },
                        {
                            "featureType": "road",
                            "elementType": "geometry",
                            "stylers": [
                                {
                                    "hue": "#bbc0c4"
                                },
                                {
                                    "saturation": -93
                                },
                                {
                                    "lightness": 31
                                },
                                {
                                    "visibility": "simplified"
                                }
                            ]
                        },
                        {
                            "featureType": "road",
                            "elementType": "labels",
                            "stylers": [
                                {
                                    "hue": "#bbc0c4"
                                },
                                {
                                    "saturation": -93
                                },
                                {
                                    "lightness": 31
                                },
                                {
                                    "visibility": "on"
                                }
                            ]
                        },
                        {
                            "featureType": "road.arterial",
                            "elementType": "labels",
                            "stylers": [
                                {
                                    "hue": "#bbc0c4"
                                },
                                {
                                    "saturation": -93
                                },
                                {
                                    "lightness": -2
                                },
                                {
                                    "visibility": "simplified"
                                }
                            ]
                        },
                        {
                            "featureType": "road.local",
                            "elementType": "geometry",
                            "stylers": [
                                {
                                    "hue": "#e9ebed"
                                },
                                {
                                    "saturation": -90
                                },
                                {
                                    "lightness": -8
                                },
                                {
                                    "visibility": "simplified"
                                }
                            ]
                        },
                        {
                            "featureType": "transit",
                            "elementType": "all",
                            "stylers": [
                                {
                                    "hue": "#e9ebed"
                                },
                                {
                                    "saturation": 10
                                },
                                {
                                    "lightness": 69
                                },
                                {
                                    "visibility": "on"
                                }
                            ]
                        },
                        {
                            "featureType": "water",
                            "elementType": "all",
                            "stylers": [
                                {
                                    "hue": "#e9ebed"
                                },
                                {
                                    "saturation": -78
                                },
                                {
                                    "lightness": 67
                                },
                                {
                                    "visibility": "simplified"
                                }
                            ]
                        }
                    ]
                };
                var mapElement = document.getElementById('footer-map-2');
                var map = new google.maps.Map(mapElement, mapOptions);
                var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(40.709896, -73.995481),
                    map: map,
                    icon: 'ezone/assets/img/icon-img/46.png',
                    animation:google.maps.Animation.BOUNCE,
                    title: 'Snazzy!'
                });
            }
            google.maps.event.addDomListener(window, 'load', init);
		</script>
        <script src="ezone/assets/js/main.js"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        @include('sweet::alert')
    </body>
</html>
