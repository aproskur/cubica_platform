@extends('app')

@section('content')

<!-- page-wrapper Start-->
<div class="page-wrapper" id="pageWrapper">
  <!-- Page Header Start Top Navbar-->

  @include ('layout/top-navbar')

  <!-- Page Body Start-->
  <div class="page-body-wrapper horizontal-menu">
    <!-- Page Sidebar Start-->
    <header class="main-nav">
      @include('layout.sidebar-empty')
    </header>
    <!-- Page Sidebar Ends-->
    <div class="page-body">
      <div class="container-fluid">
        <div class="page-header">
          <div class="row">
            <div class="col-12">
              <!-- Container-fluid starts-->
              <div class="container-fluid">
                <div>
                  <div class="row product-page-main p-0">
                    <div class="col-xl-5 col-md-6 box-col-12 xl-50">
                      <div class="card">
                        <div class="card-body">
                          <div class="row">
                            <div class="col-xl-9 product-main">
                              <div class="pro-slide-single">
                                <div><img class="img-fluid" src="../assets/images/arctic_scenery.jpg" alt=""></div>
                                <div><img class="img-fluid" src="../assets/images/pinguin_portrait.png" alt=""></div>
                                <div><img class="img-fluid" src="../assets/images/antarctica.png" alt=""></div>
                                <div><img class="img-fluid" src="../assets/images/pinguin.jpg" alt=""></div>

                              </div>
                            </div>
                            <div class="col-xl-3 product-thumbnail">
                              <div class="pro-slide-right">
                                <div>
                                  <div class="slide-box"><img src="../assets/images/arctic_scenery.jpg" alt=""></div>
                                </div>
                                <div>
                                  <div class="slide-box"><img src="../assets/images/pinguin_portrait.png" alt=""></div>
                                </div>
                                <div>
                                  <div class="slide-box"><img src="../assets/images/antarctica.png" alt=""></div>
                                </div>
                                <div>
                                  <div class="slide-box"><img src="../assets/images/pinguin.jpg" alt=""></div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-2 col-md-6 box-col-6 xl-50 proorder-lg-1">
                      <div class="card">
                        <div class="card-body">
                          <div class="pro-group pt-0 border-0">
                            <div class="product-page-details mt-0">
                              <h3>{{$game->name ?? 'Default name'}}</h3>
                              </div>
                            </div>
                            <div class="game-page-details">
                              <div class="">
                                <ul class="product-color">
                                  <li class="fa-solid fa-star"></li>
                                  <li class="fa-solid fa-star"></li>
                                  <li class="fa-solid fa-star"></li>
                                  <li class="fa-solid fa-star"></li>
                                  <li class="fa-solid fa-star"></li>
                                </ul>
                                <div>244 отзыва</div>
                                <div>Играли 6800 раз</div>
                              </div>

                              <div class="gamepage_product-price">
                                <div class="price-1">
                                  {{ $game->price ?? 'Def'}}/запуск
                                </div>
                                <div class="price-2">
                                  1500RUB/месяц
                                </div>
                              </div>
                            </div>



                            <button class="theme-button" type="button" name="button"><a href="cart.html">Играть</a></button>
                            <button class="theme-button" type="button" name="button"><a href="cart.html">Купить</a></button>
                            <button class="theme-button" type="button" name="button"><a href="cart.html">Играть</a></button>
                            <button class="theme-button" type="button" name="button"><a href="cart.html">Играть</a></button>


                          </div>
                          <div class="pro-group">
                              <p>{{ $game->excerpt}}</p>
                          </div>
                          <div class="pro-group">
                            <div class="row">
                              <div class="col-md-6">
                                <table>
                                  <tbody>
                                    <tr>
                                      <td> <b>Жанр игры &nbsp;: &nbsp;</b></td>
                                      <td class="txt-success">In stock</td>
                                    </tr>
                                    <tr>
                                      <td> <b>Форма &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</b></td>
                                      <td>Pixelstrap</td>
                                    </tr>
                                  </tbody>
                                </table>
                              </div>
                              <div class="col-md-6">
                                <table>
                                  <tbody>
                                    <tr>
                                      <td> <b>Длительность &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;: &nbsp;&nbsp;&nbsp;</b></td>
                                      <td>ABC</td>
                                    </tr>
                                    <tr>
                                      <td> <b>Автор &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;: &nbsp;&nbsp;&nbsp;</b></td>
                                      <td>Cotton                                </td>
                                    </tr>
                                  </tbody>
                                </table>
                              </div>
                            </div>
                          </div>
                          <div class="pro-group">
                            <div class="row">
                              <div class="col-md-4 xl-50">
                                <h6 class="product-title">share it</h6>
                              </div>
                              <div class="col-md-7 xl-50">
                                <div class="product-icon">
                                  <ul class="product-social">
                                    <li class="d-inline-block"><a href="javascript:void(0)"><i class="fa fa-facebook"></i></a></li>
                                    <li class="d-inline-block"><a href="javascript:void(0)"><i class="fa fa-google-plus"></i></a></li>
                                    <li class="d-inline-block"><a href="javascript:void(0)"><i class="fa fa-twitter"></i></a></li>
                                    <li class="d-inline-block"><a href="javascript:void(0)"><i class="fa fa-instagram"></i></a></li>
                                    <li class="d-inline-block"><a href="javascript:void(0)"><i class="fa fa-rss"></i></a></li>
                                  </ul>
                                  <form class="d-inline-block f-right">                            </form>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="pro-group pb-0">
                            <div class="pro-shop"><a class="btn btn-primary m-r-10" href="cart.html">
                              <i class="fa fa-shopping-basket me-2"></i>Редактировать</a><a class="btn btn-danger" href="list-wish.html"><i class="fa fa-heart me-2"></i>Клонировать
                                <a class="btn btn-primary m-r-10" href="cart.html">
                                  <i class="fa fa-shopping-basket me-2"></i>Публикация</a>
                                  <a class="btn btn-primary m-r-10" href="cart.html">
                                    <i class="fa fa-shopping-basket me-2"></i>В архив</a>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-2 col-md-6 box-col-6 xl-50 proorder-lg-1">





                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="row product-page-main">
                    <div class="col-sm-12">
                      <ul class="nav nav-tabs border-tab mb-0" id="top-tab" role="tablist">
                        <li class="nav-item"><a class="nav-link active" id="top-home-tab" data-bs-toggle="tab" href="#top-home" role="tab" aria-controls="top-home" aria-selected="false">Для чего и кого</a>
                          <div class="material-border"></div>
                        </li>
                        <li class="nav-item"><a class="nav-link" id="profile-top-tab" data-bs-toggle="tab" href="#top-profile" role="tab" aria-controls="top-profile" aria-selected="false">Сюжет игры</a>
                          <div class="material-border"></div>
                        </li>
                        <li class="nav-item"><a class="nav-link" id="contact-top-tab" data-bs-toggle="tab" href="#top-contact" role="tab" aria-controls="top-contact" aria-selected="true">Отзывы</a>
                          <div class="material-border"></div>
                        </li>
                        <li class="nav-item"><a class="nav-link" id="brand-top-tab" data-bs-toggle="tab" href="#top-brand" role="tab" aria-controls="top-brand" aria-selected="true">Об авторе</a>
                          <div class="material-border"></div>
                        </li>
                        <li class="nav-item"><a class="nav-link" id="brand-top-tab" data-bs-toggle="tab" href="#top-brand" role="tab" aria-controls="top-brand" aria-selected="true">Поддержка</a>
                          <div class="material-border"></div>
                        </li>
                      </ul>
                      <div class="tab-content" id="top-tabContent">
                        <div class="tab-pane fade active show" id="top-home" role="tabpanel" aria-labelledby="top-home-tab">
                          <p class="mb-0 m-t-20">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
                          <p class="mb-0 m-t-20">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
                        </div>
                        <div class="tab-pane fade" id="top-profile" role="tabpanel" aria-labelledby="profile-top-tab">
                          <p class="mb-0 m-t-20">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
                        </div>
                        <div class="tab-pane fade" id="top-contact" role="tabpanel" aria-labelledby="contact-top-tab">
                          <p class="mb-0 m-t-20">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
                        </div>
                        <div class="tab-pane fade" id="top-brand" role="tabpanel" aria-labelledby="brand-top-tab">
                          <p class="mb-0 m-t-20">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Container-fluid Ends-->
            </div>
          </div>
        </div>
      </div>




      <!-- Container-fluid CATALOGUE Ends-->


    </div>

    <!-- footer start-->
    <div class="container-fluid">

    </div>
</div>
<!-- login js-->
<!-- Plugin used-->
@endsection
