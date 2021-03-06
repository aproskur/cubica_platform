@extends('app')

@section('content')

<!-- page-wrapper Start-->
<div class="page-wrapper" id="pageWrapper">
  <!-- Page Header Start Top Navbar-->

  @include ('layout/top-navbar')

  <!-- Page Body Start-->
  <div class="page-body-wrapper">
    <!-- Page Sidebar Start-->
    <header class="main-nav">
      @include('layout.sidebar-empty')
    </header>
    <!-- Page Sidebar Ends-->
    <div class="page-body">
              <!-- Container-fluid starts-->
              <div class="container-fluid">
                  <div class="row product-page-main p-0">
                    <div class="col-xl-6 order-3 col-md-6  order-lg-1 col-lg-6  box-col-12 xl-50">
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
                    <div class="col-xl-6 order-1 col-md-12  order-lg-2 col-lg-6  box-col-6 xl-50">
                      <div class="card">
                        <div class="card-body">
                          <div class="pro-group pt-0 border-0">
                            <div class="product-page-details mt-0">
                              <h3>{{$game->name ?? 'Default name'}}</h3>
                            </div>
                          </div>
                            <div class="game-page-details">


                              <div class="data-rating-board">
                                <div class="d-flex stars-reviews">
                                  <div class="">
                                    <select id="u-rating-fontawesome" name="rating" autocomplete="off" style="display: none;">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                  </select>
                                  <a href="#" data-rating-value="1" data-rating-text="1" class="br-selected"></a>
                                  <a href="#" data-rating-value="2" data-rating-text="2" class="br-selected"></a>
                                  <a href="#" data-rating-value="3" data-rating-text="3" class="br-selected br-current"></a>
                                  <a href="#" data-rating-value="4" data-rating-text="4" class=""></a>
                                  <a href="#" data-rating-value="5" data-rating-text="5" class=""></a>
                                </div>
                                <div><a href="#">244 ????????????</a></div>
                              </div>


                                <div>???????????? 6800 ??????</div>
                              </div>

                              <div class="gamepage_product-price">
                                <div class="price-1">
                                  {{ number_format($game->price, 0, '.', ' ') }}<span> &#8381;/????????????</span>
                                </div>
                                <div class="price-2">
                                 {{ number_format($game->subscr_price, 0, '.', ' ') }}<span> &#8381;/????????????</span>
                                </div>
                              </div>
                            </div>


                            <div class="gamepage_buttons-panel wide-buttons-bar">
                              <a class="theme-button theme-button-std" role="button"  href="cart.html">????????????</a>
                              <a class="theme-button theme-button-std" role="button"  href="cart.html">????????????</a>
                              <a class="theme-button theme-button-std" role="button"  href="cart.html">????????&nbsp;????????</a>
                              <button class="theme-button theme-button-std">??&nbsp;??????????????????</button>
                            </div>


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
                                      <td> <b>???????? ????????:</b></td>
                                      <td class="txt-success">&nbsp;In stock</td>
                                    </tr>
                                    <tr>
                                      <td> <b>??????????:</b></td>
                                      <td>&nbsp;Pixelstrap</td>
                                    </tr>
                                    <tr>
                                      <td> <b>????????????????????????:</b></td>
                                      <td>&nbsp;ABC</td>
                                    </tr>
                                    <tr>
                                      <td> <b>??????????:</b></td>
                                      <td>&nbsp;Cotton                                </td>
                                    </tr>
                                  </tbody>
                                </table>
                              </div>
                            </div>
                          </div>
                          <div class="pro-group">
                            <div class="row">
                              <div class="gamepage_buttons-panel">
                                <button class="theme-button theme-button-square" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="??????????????????????????"><i data-feather="edit"></i></button>
                                <button class="theme-button theme-button-square" data-bs-toggle="tooltip" data-bs-placement="top" title="????????????????????"><i data-feather="copy"></i></button>
                                <button class="theme-button theme-button-square" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="????????????????????"><i class="fa fa-check-square-o"></i></button>
                                <div data-bs-toggle="tooltip" data-bs-placement="top" title="???????????????? ?? ??????????"><button class="theme-button theme-button-square"><i data-feather="archive"></i></button></div>
                              </div>
                           </div>
                      </div>
                    </div></div>
                    <div class="col-xl-12 order-2 col-md-12  order-lg-3 col-lg-12 box-col-6 xl-100">
                          <div class="card">
                            <div class="row product-page-main">
                              <div class="col-sm-12">
                                <ul class="nav nav-tabs border-tab mb-0" id="top-tab" role="tablist">
                                  <li class="nav-item"><a class="nav-link active" id="top-home-tab" data-bs-toggle="tab" href="#top-home" role="tab" aria-controls="top-home" aria-selected="false">?????? ???????? ?? ????????</a>
                                    <div class="material-border"></div>
                                  </li>
                                  <li class="nav-item"><a class="nav-link" id="profile-top-tab" data-bs-toggle="tab" href="#top-profile" role="tab" aria-controls="top-profile" aria-selected="false">?????????? ????????</a>
                                    <div class="material-border"></div>
                                  </li>
                                  <li class="nav-item"><a class="nav-link" id="contact-top-tab" data-bs-toggle="tab" href="#top-contact" role="tab" aria-controls="top-contact" aria-selected="true">????????????</a>
                                    <div class="material-border"></div>
                                  </li>
                                  <li class="nav-item"><a class="nav-link" id="brand-top-tab" data-bs-toggle="tab" href="#top-brand" role="tab" aria-controls="top-brand" aria-selected="true">???? ????????????</a>
                                    <div class="material-border"></div>
                                  </li>
                                  <li class="nav-item"><a class="nav-link" id="support-top-tab" data-bs-toggle="tab" href="#top-brand" role="tab" aria-controls="top-brand" aria-selected="true">??????????????????</a>
                                    <div class="material-border"></div>
                                  </li>
                                </ul>
                                <div class="tab-content" id="top-tabContent">
                                  <div class="tab-pane fade active show" id="top-home" role="tabpanel" aria-labelledby="top-home-tab">
                                    <p class="mb-0 m-t-20">?????????? ?????????????????????? </p>
                                    <p class="mb-0 m-t-20">?????????????????? ????????</p>
                                    <p class="mb-0 m-t-20">???????? ????????</p>
                                    <p class="mb-0 m-t-20">??????????????</p>
                                  </div>
                                  <div class="tab-pane fade" id="top-profile" role="tabpanel" aria-labelledby="profile-top-tab">
                                    <p class="mb-0 m-t-20">?????????? ????????. ???????????????? ???????????? ????????</p>
                                  </div>
                                  <div class="tab-pane fade" id="top-contact" role="tabpanel" aria-labelledby="contact-top-tab">
                                    <p class="mb-0 m-t-20">?????????? 1</p>
                                    <p class="mb-0 m-t-20">?????????? 2</p>
                                    <p class="mb-0 m-t-20">?????????? 3</p>
                                    <p class="mb-0 m-t-20">?????????? 4</p>
                                    <p class="mb-0 m-t-20">?????????? 5</p>
                                    <p class="mb-0 m-t-20">?????????? 6</p>
                                  </div>
                                  <div class="tab-pane fade" id="top-brand" role="tabpanel" aria-labelledby="brand-top-tab">
                                    <p class="mb-0 m-t-20">???????? ???? ????????????</p>
                                    <p class="mb-0 m-t-20">???????? ????????????</p>
                                    <p class="mb-0 m-t-20">???????? ????????????</p>
                                    <p class="mb-0 m-t-20">???????? ????????????</p>
                                    <p class="mb-0 m-t-20">???????? ????????????</p>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>




      <!-- Container-fluid CATALOGUE Ends-->
    </div>

          <footer class="footer">
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-6">
                  <p class="mb-0"></p>
                </div>
                <div class="col-md-6 footer-copyright">
                  <p class="mb-0">Copyright {{date('Y')}} ?? Cubica</p>
                </div>
              </div>
            </div>
          </footer>
</div>



<!-- login js-->
<!-- Plugin used-->

@endsection
