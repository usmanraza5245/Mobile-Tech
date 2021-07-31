<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <!--  <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css"> -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <script src="{{asset('js/app.js')}}"></script>
    <title>Mobile and Laptop Reviews</title>
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
                        <a href="#" class="nav-link text-orange fw-bold ">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('about')}}" class="nav-link text-orange fw-bold">About</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('contact')}}" class="nav-link text-orange fw-bold">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <section class="bg-dark text-light pt-4 text-center text-sm-start">
        <div class="container-fluid">
            <div class="d-md-flex row align-items-center jusify-content-between">
              <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="d-block w-100" src="{{asset('/image/img1.jpg')}}" alt="First slide">
                  </div>
                  
                  <div class="carousel-item">
                    <img class="d-block w-100" src="{{asset('/image/img2.jpg')}}" alt="Second slide">
                  </div>
                  
                  <div class="carousel-item">
                    <img class="d-block w-100" src="{{asset('/image/img3.jpg')}}" alt="Second slide">
                  </div>
                  
                  <div class="carousel-item">
                    <img class="d-block w-100" src="{{asset('/image/img4.jpg')}}" alt="Second slide">
                  </div>

                  <div class="carousel-item">
                    <img class="d-block w-100" src="{{asset('/image/img5.jpg')}}" alt="Second slide">
                  </div>
                </div>
                <a class="carousel-control-prev text-dark" href="#carouselExampleIndicators" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
            </div>
        </div>
    </section>

    <section class=" text-light p-5" style="background: lightblue;">
        <div class="container">
            <div class="d-md-flex justify-content-between align-items-center">
                <h3 class="mb-3 mb-md-0">Sign Up for NewsLetter</h3>
                <div class="input-group news-input">
                    <input type="text" name="search" id="search" class="form-control" placeholder="your Email address" >
                    <button class="btn btn-dark btn-lg" type="button" id="button-addon2">Subscribe</button>
                </div>
            </div>
        </div>
    </section>

    <section class="p-5" style="">
        <div class="container-fluid p-1">
          <div class="row mb-5">
            <div class="col-md-3 d-none d-md-block">

              <!--Phone Finder -->
              <div class="card mb-5 "style="margin-bottom: 350px !important;">
                <div class="card-header  text-center text-uppercase card-finder">
                    <p class="card-title ">
                      <a href="#" class="nav-link"><i class="bi bi-phone me-2 text-dark"></i>
                      <span class="">Phone Finder</span></a></p>
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
             <!--In Stoties now -->
             <div class="container-fluid">
              <h4 class="fw-bold text-uppercase">In Stories Now</h4>
              <div class="row lat-devices mb-5 shadow">
                 
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

             <!--End in stories-->
             <!--top 10 daily interest-->
             <div class="container-fluid mb-5">
              <h4 class="fw-bold text-uppercase bg-light">top 10 daily interest</h4>
              <div class="row mb-5">
                <table class="table fs-7 p-0 m-0">
                  <thead>
                    <tr class="table-success">
                      <th scope="col">#</th>
                      <th scope="col">Devices</th>
                      <th scope="col">Daily Hits</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr class="bgtb-row">
                      <th scope="row">1</th>
                      <td>Xiaomi Redmi Note 10 Pro</td>
                      <td>39275</td>
                    </tr>
                    <tr class="bgtb-row2">
                      <th scope="row">2</th>
                      <td>Tecno Phantom X</td>
                      <td>34784</td>
                    </tr>
                    <tr class="bgtb-row">
                      <th scope="row">3</th>
                      <td>Xiaomi Redmi Note 10</td>
                      <td>26161</td>
                    </tr>
                    <tr class="bgtb-row2">
                      <th scope="row">4</th>
                      <td>Xiaomi Poco X3 Pro</td>
                      <td>24526</td>
                    </tr>
                    <tr class="bgtb-row">
                      <th scope="row">5</th>
                      <td>Xiaomi Mi 11 Lite</td>
                      <td>23662</td>
                    </tr>
                    <tr class="bgtb-row2">
                      <th scope="row">6</th>
                      <td>Samsung Galaxy S21 Ultra 5G</td>
                      <td>22387</td>
                    </tr>
                    <tr class="bgtb-row">
                      <th scope="row">7</th>
                      <td>Samsung Galaxy A52</td>
                      <td>20988</td>
                    </tr>
                    <tr class="bgtb-row2">
                      <th scope="row">8</th>
                      <td>Xiaomi Poco F3</td>
                      <td>20449</td>
                    </tr>
                    <tr class="bgtb-row">
                      <th scope="row">9</th>
                      <td>Samsung Galaxy A32</td>
                      <td>18277</td>
                    </tr>
                    <tr class="bgtb-row2">
                      <th scope="row">10</th>
                      <td>Samsung Galaxy M32</td>
                      <td>17233</td>
                    </tr>

                  </tbody>
                </table>
               
              </div>
             </div>
              <!--End top 10 daily interest-->
              <!--top 10 by fans-->
              <div class="container-fluid mb-5">
                <h4 class="fw-bold text-uppercase bg-light">Top 10 by Fans</h4>
                <div class="row mb-5">
                  <table class="table fs-7 p-0 m-0 shadow">
                    <thead>
                      <tr class="table-success">
                        <th scope="col">#</th>
                        <th scope="col">Devices</th>
                        <th scope="col">Daily Hits</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr class="bgtb-row">
                        <th scope="row">1</th>
                        <td>Xiaomi Redmi Note 10 Pro</td>
                        <td>39275</td>
                      </tr>
                      <tr class="bgtb-row2">
                        <th scope="row">2</th>
                        <td>Tecno Phantom X</td>
                        <td>34784</td>
                      </tr>
                      <tr class="bgtb-row">
                        <th scope="row">3</th>
                        <td>Xiaomi Redmi Note 10</td>
                        <td>26161</td>
                      </tr>
                      <tr class="bgtb-row2">
                        <th scope="row">4</th>
                        <td>Xiaomi Poco X3 Pro</td>
                        <td>24526</td>
                      </tr>
                      <tr class="bgtb-row">
                        <th scope="row">5</th>
                        <td>Xiaomi Mi 11 Lite</td>
                        <td>23662</td>
                      </tr>
                      <tr class="bgtb-row2">
                        <th scope="row">6</th>
                        <td>Samsung Galaxy S21 Ultra 5G</td>
                        <td>22387</td>
                      </tr>
                      <tr class="bgtb-row">
                        <th scope="row">7</th>
                        <td>Samsung Galaxy A52</td>
                        <td>20988</td>
                      </tr>
                      <tr class="bgtb-row2">
                        <th scope="row">8</th>
                        <td>Xiaomi Poco F3</td>
                        <td>20449</td>
                      </tr>
                      <tr class="bgtb-row">
                        <th scope="row">9</th>
                        <td>Samsung Galaxy A32</td>
                        <td>18277</td>
                      </tr>
                      <tr class="bgtb-row2">
                        <th scope="row">10</th>
                        <td>Samsung Galaxy M32</td>
                        <td>17233</td>
                      </tr>
  
                    </tbody>
                  </table>
                 
                </div>
               </div>
               <!--end top 10 by fans-->
            </div>
                <div class="col-12 col-md-8 ">
                  <div class="row p-2 main_content">
                      
                    <div class="card mb-3 shadow ">
                        <div class="row g-0  p-2">
                          <div class="col-5">
                            <img src="{{asset('/image/iph12.png')}}" class="img-fluid" alt="...">
                          </div>
                          <div class="col-7">
                            <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                          </div>
                        </div>
                        <a href="{{url('description')}}" class="stretched-link"></a>
                      </div>
                      <div class="card mb-3 shadow">
                        <div class="row g-0 p-2">
                          <div class="col-5">
                            <img src="{{asset('/image/iph11.png')}}" class="img-fluid" alt="...">
                          </div>
                          <div class="col-7">
                            <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                          </div>
                        </div>
                        <a href="{{url('description')}}" class="stretched-link"></a>
                      </div>
                      <div class="card mb-3 shadow">
                        <div class="row g-0 p-2">
                          <div class="col-5">
                            <img src="{{asset('/image/iph12.png')}}" class="img-fluid" alt="...">
                          </div>
                          <div class="col-7">
                            <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                          </div>
                        </div>
                        <a href="{{url('description')}}" class="stretched-link"></a>
                      </div>
                      <div class="card mb-3 shadow">
                        <div class="row g-0 p-2">
                          <div class="col-5">
                            <img src="{{asset('/image/iph11.png')}}" class="img-fluid" alt="...">
                          </div>
                          <div class="col-7">
                            <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                          </div>
                        </div>
                        <a href="{{url('description')}}" class="stretched-link"></a>
                      </div>
                      <section class="bg-primary text-light p-5">
                        <div class="container">
                            <div class="d-md-flex justify-content-between align-items-center">
                                <h3 class="mb-3 mb-md-0">Advertisements</h3>
                                <div class="input-group news-input" style="height: 150px;">
                                    
                                </div>
                            </div>
                        </div>
                       </section>
                       <div class="card mb-3 shadow ">
                        <div class="row g-0  p-2">
                          <div class="col-5">
                            <img src="{{asset('/image/iph12.png')}}" class="img-fluid" alt="...">
                          </div>
                          <div class="col-7">
                            <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                          </div>
                        </div>
                        <a href="/description" class="stretched-link"></a>
                      </div>
                      <div class="card mb-3 shadow">
                        <div class="row g-0 p-2">
                          <div class="col-5">
                            <img src="{{asset('/image/iph11.png')}}" class="img-fluid" alt="...">
                          </div>
                          <div class="col-7">
                            <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                          </div>
                        </div>
                        <a href="/description" class="stretched-link"></a>
                      </div>
                      <div class="card mb-3 shadow">
                        <div class="row g-0 p-2">
                          <div class="col-5">
                            <img src="{{asset('/image/iph12.png')}}" class="img-fluid" alt="...">
                          </div>
                          <div class="col-7">
                            <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                          </div>
                        </div>
                        <a href="/description" class="stretched-link"></a>
                      </div>
                      <div class="card mb-3 shadow">
                        <div class="row g-0 p-2">
                          <div class="col-5">
                            <img src="{{asset('/image/iph12.png')}}" class="img-fluid" alt="...">
                          </div>
                          <div class="col-7">
                            <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                          </div>
                        </div>
                    </div>
                    <div class="card mb-3 shadow">
                        <div class="row g-0 p-2">
                          <div class="col-5">
                            <img src="{{asset('/image/iph11.png')}}" class="img-fluid" alt="...">
                          </div>
                          <div class="col-7">
                            <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                          </div>
                        </div>
                        <a href="/description" class="stretched-link"></a>
                      </div>
                      <section class="bg-primary text-light p-5">
                        <div class="container">
                            <div class="d-md-flex justify-content-between align-items-center">
                                <h3 class="mb-3 mb-md-0">Advertisements</h3>
                                <div class="input-group news-input" style="height: 150px;">
                                    
                                </div>
                            </div>
                        </div>
                       </section>
                       <div class="card mb-3 shadow ">
                        <div class="row g-0  p-2">
                          <div class="col-5">
                            <img src="{{asset('/image/iph12.png')}}" class="img-fluid" alt="...">
                          </div>
                          <div class="col-7">
                            <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                          </div>
                        </div>
                        <a href="/description" class="stretched-link"></a>
                      </div>
                </div>
                <div class="offset-md-1"></div>
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
<script src="./bootstrap/js/jquery.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<script>
 /*   $(function () {
  $(document).scroll(function () {
    var $nav = $(".fixed-top");
    $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
  });
});*/
</script>
</body>
</html>