<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <!--  <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css"> -->
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <script src="{{asset('js/app.js')}}"></script>
    <title>Mobile and Laptop Reviews</title>
    <style>
      .bg-info{
        background-color: #EBF1FA !important;
      }
    </style>
</head>
<body class="bg-light">
    <nav class="navbar fixed-top navbar-expand-lg bg-dark navbar-dark py-3">
        <div class="container">
            <a href="#" class="navbar-brand">GSMarena</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navmenu">
              <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a href="{{url('index')}}" class="nav-link text-light fw-bold ">Home</a>
                </li>
                <li class="nav-item">
                    <a href="{{url('about')}}" class="nav-link text-light fw-bold">About</a>
                </li>
                <li class="nav-item">
                    <a href="{{url('contact')}}" class="nav-link text-light fw-bold">Contact Us</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>
    <section class="p-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3 d-none d-md-block">
                     <!--Phone Finder -->
              <div class="card mb-5 "style="margin-bottom: 350px !important;">
                <div class="card-header bg-light-dark text-center text-white text-uppercase card-finder">
                    <p class="card-title ">
                      <a href="#" class="nav-link"><i class="bi bi-phone me-2 text-dark"></i>
                      <span class="text-white">Phone Finder</span></a></p>
                </div>
                <div class="card-body p-0">
                  <div class="row shadow phonefind">
                    <div class="col-md-4 card-list">
                      <ul class="list-group text-center">
                        <li class="list-group-item"><a href="#" class="nav-link">SAMSUNG</a></li>
                        <li class="list-group-item"><a href="#" class="nav-link">APPLE</a></li>
                        <li class="list-group-item"><a href="#" class="nav-link">HUAWEI</a></li>
                        <li class="list-group-item"><a href="#" class="nav-link">NOKIA</a></li>
                        <li class="list-group-item"><a href="#" class="nav-link">SONY</a></li>
                        <li class="list-group-item"><a href="#" class="nav-link">APPLE</a></li>
                        <li class="list-group-item"><a href="#" class="nav-link">HUAWEI</a></li>
                        <li class="list-group-item"><a href="#" class="nav-link">NOKIA</a></li>
                        <li class="list-group-item"><a href="#" class="nav-link">SONY</a></li>
                      </ul>
                    </div>
                    <div class="col-md-4 card-list">
                      <ul class="list-group text-center">
                        <li class="list-group-item"><a href="#" class="nav-link">SAMSUNG</a></li>
                        <li class="list-group-item"><a href="#" class="nav-link">APPLE</a></li>
                        <li class="list-group-item"><a href="#" class="nav-link">HUAWEI</a></li>
                        <li class="list-group-item"><a href="#" class="nav-link">NOKIA</a></li>
                        <li class="list-group-item"><a href="#" class="nav-link">SONY</a></li>
                        <li class="list-group-item"><a href="#" class="nav-link">APPLE</a></li>
                        <li class="list-group-item"><a href="#" class="nav-link">HUAWEI</a></li>
                        <li class="list-group-item"><a href="#" class="nav-link">NOKIA</a></li>
                        <li class="list-group-item"><a href="#" class="nav-link">SONY</a></li>
                      </ul>
                    </div>
                    <div class="col-md-4 card-list">
                      <ul class="list-group text-center">
                        <li class="list-group-item"><a href="#" class="nav-link">SAMSUNG</a></li>
                        <li class="list-group-item"><a href="#" class="nav-link">APPLE</a></li>
                        <li class="list-group-item"><a href="#" class="nav-link">HUAWEI</a></li>
                        <li class="list-group-item"><a href="#" class="nav-link">NOKIA</a></li>
                        <li class="list-group-item"><a href="#" class="nav-link">SONY</a></li>
                        <li class="list-group-item"><a href="#" class="nav-link">APPLE</a></li>
                        <li class="list-group-item"><a href="#" class="nav-link">HUAWEI</a></li>
                        <li class="list-group-item"><a href="#" class="nav-link">NOKIA</a></li>
                        <li class="list-group-item"><a href="#" class="nav-link">SONY</a></li>
                      </ul>
                    </div>
                    
                  </div>
                </div>
              </div>
              <!--Phone finder -->

             <!--Latest Devices -->
             <div class="container-fluid">
              <h4 class="fw-bold text-uppercase">Latest Devices</h4>
              <div class="row lat-devices mb-5 shadow">
                
                <div class="col-md-4 p-2">
                    <div class="card text-center card-body-color">
                        <img src="{{asset('/image/12.png')}}" alt="" class="card-img-top img-fluid">
                        <a href="#" class="stretched-link"><p class="card-title">Lenovo yoga tab 11</p></a>
                    </div>
                  </div>
                  <div class="col-md-4 p-2">
                    <div class="card text-center card-body-color">
                        <img src="{{asset('/image/12.png')}}" alt="">
                        <a href="#" class="stretched-link"><p class="card-title">Lenovo yoga tab 11</p></a>
                    </div>
                  </div>
                  <div class="col-md-4 p-2">
                    <div class="card text-center card-body-color">
                        <img src="{{asset('/image/12.png')}}" alt="">
                        <a href="#" class="stretched-link"><p class="card-title">Lenovo yoga tab 11</p></a>
                    </div>
                  </div>
                  <div class="col-md-4 p-2">
                    <div class="card text-center card-body-color">
                        <img src="{{asset('/image/12.png')}}" alt="">
                        <a href="#" class="stretched-link"><p class="card-title">Lenovo yoga tab 11</p></a>
                    </div>
                  </div>
                  <div class="col-md-4 p-2">
                    <div class="card text-center card-body-color">
                        <img src="{{asset('/image/12.png')}}" alt="">
                        <a href="#" class="stretched-link"><p class="card-title">Lenovo yoga tab 11</p></a>
                    </div>
                  </div>
                  <div class="col-md-4 p-2">
                    <div class="card text-center card-body-color">
                        <img src="{{asset('/image/12.png')}}" alt="">
                        <a href="#" class="stretched-link"><p class="card-title">Lenovo yoga tab 11</p></a>
                    </div>
                  </div>
                  <div class="col-md-4 p-2">
                    <div class="card text-center card-body-color">
                        <img src="{{asset('/image/12.png')}}" alt="">
                        <a href="#" class="stretched-link"><p class="card-title">Lenovo yoga tab 11</p></a>
                    </div>
                  </div>
                  <div class="col-md-4 p-2">
                    <div class="card text-center card-body-color">
                        <img src="{{asset('/image/12.png')}}" alt="">
                        <a href="#" class="stretched-link"><p class="card-title">Lenovo yoga tab 11</p></a>
                    </div>
                  </div>
                  <div class="col-md-4 p-2">
                    <div class="card text-center card-body-color">
                        <img src="{{asset('/image/12.png')}}" alt="">
                        <a href="#" class="stretched-link"><p class="card-title">Lenovo yoga tab 11</p></a>
                    </div>
                  </div>
                  <div class="col-md-4 p-2">
                    <div class="card text-center card-body-color">
                        <img src="{{asset('/image/12.png')}}" alt="">
                        <a href="#" class="stretched-link"><p class="card-title">Lenovo yoga tab 11</p></a>
                    </div>
                  </div>
                  <div class="col-md-4 p-2">
                    <div class="card text-center card-body-color">
                        <img src="{{asset('/image/12.png')}}" alt="">
                        <a href="#" class="stretched-link"><p class="card-title">Lenovo yoga tab 11</p></a>
                    </div>
                  </div>
                  <div class="col-md-4 p-2">
                    <div class="card text-center card-body-color">
                        <img src="{{asset('/image/12.png')}}" alt="">
                        <a href="#" class="stretched-link"><p class="card-title">Lenovo yoga tab 11</p></a>
                    </div>
                  </div>
                  <div class="col-md-4 p-2">
                    <div class="card text-center card-body-color">
                        <img src="{{asset('/image/12.png')}}" alt="">
                        <a href="#" class="stretched-link"><p class="card-title">Lenovo yoga tab 11</p></a>
                    </div>
                  </div>
                  <div class="col-md-4 p-2">
                    <div class="card text-center card-body-color">
                        <img src="{{asset('/image/12.png')}}" alt="">
                        <a href="#" class="stretched-link"><p class="card-title">Lenovo yoga tab 11</p></a>
                    </div>
                  </div>
                  <div class="col-md-4 p-2">
                    <div class="card text-center card-body-color">
                        <img src="{{asset('/image/12.png')}}" alt="">
                        <a href="#" class="stretched-link"><p class="card-title">Lenovo yoga tab 11</p></a>
                    </div>
                  </div>
                  <div class="col-md-4 p-2">
                    <div class="card text-center card-body-color">
                        <img src="{{asset('/image/12.png')}}" alt="">
                        <a href="#" class="stretched-link"><p class="card-title">Lenovo yoga tab 11</p></a>
                    </div>
                  </div>
                  <div class="col-md-4 p-2">
                    <div class="card text-center card-body-color">
                        <img src="{{asset('/image/12.png')}}" alt="">
                        <a href="#" class="stretched-link"><p class="card-title">Lenovo yoga tab 11</p></a>
                    </div>
                  </div>
                  <div class="col-md-4 p-2">
                    <div class="card text-center card-body-color">
                        <img src="{{asset('/image/12.png')}}" alt="">
                        <a href="#" class="stretched-link"><p class="card-title">Lenovo yoga tab 11</p></a>
                    </div>
                  </div>
              </div>
             </div>
             <!--End Latest devices --> 
                </div>
                <div class="col-10 col-md-8">
                    <h3 class="my-5">Vivo y15 Reviews</h3>
                    <div class="row">
                      <div class="col-md-6">
                        <section class="bg-primary text-light p-5">
                          <div class="container">
                              <div class="d-md-flex justify-content-between align-items-center">
                                  <h3 class="mb-3 mb-md-0">Advertisements</h3>
                                  <div class="input-group news-input" style="height: 150px;">
                                      
                                  </div>
                              </div>
                          </div>
                         </section> 
                      </div>
                      <div class="col-md-6">
                        <img src="{{asset('/image/iph12.jpg')}}" alt="" class="img-fluid">
                      </div>
                    </div>
                    <div class="p-4">
                      <h5>Vivo Y15 price in Pakistan and launch offers</h5>
                      <p class="lead">Vivo Y15 price in Pakistan starts at Rs. Discontinued. This is for the base variant that comes with 4GB of RAM and 64GB of internal storage.</p>
                      <ul>
                        <li>Retail Price of Vivo Y15 in Pakistan is Rs. Discontinued.</li>
                        <li>Retail Price of Vivo in USD is $0</li>
                      </ul>
                      <h4 class="text-success">Vivo Y15 - A Stunning Entry-level Smartphone</h4>
                      <table class="table table-responsive table-stripped table-bordered">
                        <tbody>
                          <tr>
                            <th rowspan="6" scope="row" class="h3 text-danger">Build</th>
                            <td class="h6">OS</td>
                            <td class="lead">Android 900 Pie</td>
                          </tr>
                          <tr>
                            <td class="h6">UI</td>
                            <td class="lead">Function OS 9 </td>
                          </tr>
                          <tr>
                            <td class="h6">Dimensions</td>
                            <td class="lead">159.4 x 76.8 x 8.9 mm </td>
                          </tr>
          
                          <tr>
                            <td class="h6">Weight</td>
                            <td class="lead">190 g</td>
                          </tr>
                          <tr>
                            <td class="h6">SIM</td>
                            <td class="lead">Dual Sim, Dual Standby (Nano-SIM) </td>
                          </tr>
          
                          <tr>
                            <td class="h6">Colors</td>
                            <td class="lead">Aqua Blue, Burgundy Red</td>
                          </tr>
                          <tr>
                            <th rowspan="3" scope="row" class="h3 text-danger">Frequency</th>
                            <td class="h6">2G Band</td>
                            <td class="lead">SIM1: GSM 850 / 900 / 1800 / 1900 <br>
                              SIM2: GSM 850 / 900 / 1800 / 1900  </td>
                          </tr>
                          <tr>
                            <td class="h6">3G Band</td>
                            <td class="lead">HSDPA 850 / 900 / 1900 / 2100 </td>
                          </tr>
                          <tr>
                            <td class="h6">4G Band</td>
                            <td class="lead">LTE band 1(2100), 5(850), 8(900), 40(2300)  </tr>
                          </tr>
                          <tr>
                            <th rowspan="3" scope="row" class="h3 text-danger">Processor</th>
                            <td  class=h6w">CPU</td>
                            <td class="lead">2.0 Ghz Octa Core Cortex-A53  </td>
                          </tr>
                          <tr>
                            <td class="h6">Chipset</td>
                            <td class="lead">Mediatek MT6762 Helio P22 (12 nm)</td>
                          </tr>
                          <tr>
                            <td class="h6">GPU</td>
                            <td class="lead">PowerVR GE8320</td>
                          </tr>
                          <tr>
                            <th rowspan="3" scope="row" class="h3 text-danger">Display</th>
                            <td class="h6">Techonology</td>
                            <td class="lead">IPS LCD Capacitive Touchscreen, 16M Colors, Multitouch</td>
                          </tr>
                          <tr>
                            <td class="h6">Size</td>
                            <td class="lead">6.4 Inches</td>
                          </tr>
                          <tr>
                            <td class="h6">Resolution</td>
                            <td class="lead">720 x 1544 Pixels (~268 PPI)</td>
                          </tr>
                          <tr>
                            <th rowspan="2" scope="row" class="h3 text-danger">Memory</th>
                            <td class="h6">Built in</td>
                            <td class="lead">64GB Built-in, 4GB RAM</td>
                          </tr>
                          <tr>
                            <td class="h6">Card</td>
                            <td class="lead">microSD Card, (supports upto 256GB)</td>
                          </tr>
                          <tr>
                            <th rowspan="3" scope="row" class="h3 text-danger">Camera</th>
                            <td class="h6">Main</td>
                            <td class="lead">Triple Camera: 13 MP, f/2.2, PDAF + 8 MP, f/2.2, 16mm (ultrawide) + 2 MP, f/2.4, depth sensor, LED Flash</td>
                          </tr>
                          <tr>
                            <td class="h6">Features</td>
                            <td class="lead">Geo-tagging, Phase detection, Panorama, HDR, Video (1080p@30fps)</td>
                          </tr>
                          <tr>
                            <td class="h6">Front</td>
                            <td class="lead">16 MP, f/2.0</td>
                          </tr>
                          <th rowspan="7" scope="row" class="h3 text-danger">Connectivity</th>
                            <td class="h6">WLAN</td>
                            <td class="lead">Wi-Fi 802.11 a/b/g/n, Wi-Fi Direct, hotspot, 2.4GHz/5GHz  </td>
                          </tr>
                          <tr>
                            <td class="h6">Bluetooth</td>
                            <td class="lead">v5.0 with A2DP, LE</td>
                          </tr>
                          <tr>
                            <td class="h6">GPS</td>
                            <td class="lead">Yes + A-GPS support, GLONASS, BDS, GALILEO </td>
                          </tr>
                          <tr>
                            <td class="h6">RADIO</td>
                            <td class="lead">FM Radio</td>
                          </tr>
                          <tr>
                            <td class="h6">USB</td>
                            <td class="lead">microUSB 2.0, USB On-The-Go</td>
                          </tr>
                          <tr>
                            <td class="h6">NFC</td>
                            <td class="lead">No</td>
                          </tr>
                          <tr>
                            <td class="h6">Data</td>
                            <td class="lead">GPRS, Edge, 3G (HSPA 42.2/5.76 Mbps), 4G (LTE-A (2CA) Cat6 300/50 Mbps)</td>
                          </tr>
                          <tr>
                            <th rowspan="7" scope="row" class="h3 text-danger">Features</th>
                            <td class="h6">Sensors</td>
                            <td class="lead">Accelerometer, Compass, Fingerprint (rear mounted), Proximity  </td>
                          </tr>
                          <tr>
                            <td class="h6">Audio</td>
                            <td class="lead">3.5mm Audio Jack, MP4/H.264 player, MP3/WAV/eAAC+/FLAC player, Speaker Phone</td>
                          </tr>
                          <tr>
                            <td class="h6">Browser</td>
                            <td class="lead">HTML5</td>
                          </tr>
                          <tr>
                            <td class="h6">Messaging</td>
                            <td class="lead">SMS(threaded view), MMS, Email, Push Mail, IM</td>
                          </tr>
                          <tr>
                            <td class="h6">Games</td>
                            <td class="lead">Built-in + Downloadable  </td>
                          </tr>
                          <tr>
                            <td class="h6">Torch</td>
                            <td class="lead">Yes</td>
                          </tr>
                          <tr>
                            <td class="h6">Extra</td>
                            <td class="lead">Active noise cancellation with dedicated mic, Document viewer, Photo/video editor </td>
                          </tr>
                          <tr>
                            <th class="h3 text-danger">Battery</th>
                            <td class="h6">Capacity</td>
                            <td class="lead">(Li-Po Non removable), 5000 mAh</td>
                          </tr>
                          <tr>
                            <th class="h3 text-danger">Ratings</th>
                            <td colspan="2"  class="lead">Average Rating is 4.4 stars - based on 594 user reviews</td>
                          </tr>
                          <tr>
                            <th class="h3 text-danger" rowspan="3">Price</th>
                            <td class="h6">64GB 6GB RAM</td>
                            <td class="lead">309$</td>
                          </tr>
                          <tr>
                            <td class="h6">128GB 6GB RAM</td>
                            <td class="lead">315$</td>
                          </tr>
                          <tr>
                            <td class="h6">128GB 8GB RAM</td>
                            <td class="lead">354$</td>
                          </tr>
                        </tbody>
                      </table>

                      <div class="p-3" id="similar-price">
                        <h4 class="h4">Similary priced  <i class="fas fa-info-circle ml-3"></i></h4>
                        <div class="row">
                          <div class="col-md-2 p-2">
                            <div class="card text-center">
                              <img src="{{asset('/image/12.png')}}" alt="">
                              <a href="#" class="stretched-link"><p class="card-title">Lenovo yoga tab 11</p></a>
                            </div>
                          </div>
                          <div class="col-md-2 p-2">
                            <div class="card text-center">
                              <img src="{{asset('/image/12.png')}}" alt="">
                              <a href="#" class="stretched-link"><p class="card-title">Lenovo yoga tab 11</p></a>
                            </div>
                          </div>
                          <div class="col-md-2 p-2">
                            <div class="card text-center">
                              <img src="{{asset('/image/12.png')}}" alt="">
                              <a href="#" class="stretched-link"><p class="card-title">Lenovo yoga tab 11</p></a>
                            </div>
                          </div>
                          <div class="col-md-2 p-2">
                            <div class="card text-center">
                              <img src="{{asset('/image/12.png')}}" alt="">
                              <a href="#" class="stretched-link"><p class="card-title">Lenovo yoga tab 11</p></a>
                            </div>
                          </div>
                          <div class="col-md-2 p-2">
                            <div class="card text-center">
                              <img src="{{asset('/image/12.png')}}" alt="">
                              <a href="#" class="stretched-link"><p class="card-title">Lenovo yoga tab 11</p></a>
                            </div>
                          </div>
                          <div class="col-md-2 p-2">
                            <div class="card text-center">
                              <img src="{{asset('/image/12.png')}}" alt="">
                              <a href="#" class="stretched-link"><p class="card-title">Lenovo yoga tab 11</p></a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="p-3">
                        <h4 class="h4">Review Video  <i class="fas fa-info-circle ml-3"></i></h4>
                        <div class=" p-4 embed-responsive embed-responsive-1by1" style="margin-left:80px; margin-top:20px;">
                          <iframe class="embed-responsive-item" width="520" height="315" src="https://www.youtube.com/embed/c7-HkztGahM" allowfullscreen></iframe>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
        <!-- Footer -->
<footer class="text-center text-lg-start bg-light text-muted" style=" background: linear-gradient(to right, #FFC0CB, #00FFFF);">
  <!-- Section: Social media -->
  <section
    class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom"
  >
    <!-- Left -->
    <div class="me-5 d-none d-lg-block">
      <span style="color:orange;">Get connected with us on social networks:</span>
    </div>
    <!-- Left -->

    <!-- Right -->
    <div>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-google"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-instagram"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-linkedin"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-github"></i>
      </a>
    </div>
    <!-- Right -->
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="" style=" background: linear-gradient(to right, #FFC0CB, #00FFFF);">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4">
            <i class="fas fa-gem me-3"></i>Company name
          </h6>
          <p>
            Here you can use rows and columns to organize your footer content. Lorem ipsum
            dolor sit amet, consectetur adipisicing elit.
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Products
          </h6>
          <p>
            <a href="#!" class="text-reset">Angular</a>
          </p>
          <p>
            <a href="#!" class="text-reset">React</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Vue</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Laravel</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Useful links
          </h6>
          <p>
            <a href="#!" class="text-reset">Pricing</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Settings</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Orders</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Help</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Contact
          </h6>
          <p><i class="fas fa-home me-3"></i> New York, NY 10012, US</p>
          <p>
            <i class="fas fa-envelope me-3"></i>
            info@example.com
          </p>
          <p><i class="fas fa-phone me-3"></i> + 01 234 567 88</p>
          <p><i class="fas fa-print me-3"></i> + 01 234 567 89</p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-4" style=" background: linear-gradient(to right, black, gray);; color:orange;">
    © 2021 Copyright:
    <a class="text-reset fw-bold" href="#">Mobile & Laptop Reviews</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->
<!--
    <script src="./bootstrap/js/bootstrap.min.js"></script>
    <script src="./bootstrap/js/bootstrap.bundle.js"></script>
-->
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<script>
    $(function () {
  $(document).scroll(function () {
    var $nav = $(".fixed-top");
    $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
  });
});
</script>
</body>
</html>