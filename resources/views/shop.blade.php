@include ('layout/head')
<link rel="stylesheet" type="text/css" href="../assets/css/photoswipe.css">
</head>
  <body class="dark-only">
    <!-- Loader starts-->
    <div class="loader-wrapper">
      <div class="theme-loader">
        <div class="loader-p"></div>
      </div>
    </div>
    <!-- Loader ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper" id="pageWrapper">
      <!-- Page Header Start Top Navbar-->

      @include ('layout/top-navbar')

      <!-- Page Body Start-->
      <div class="page-body-wrapper horizontal-menu">
        <!-- Page Sidebar Start-->
        <header class="main-nav">
          @include('layout.sidebar-shop')
        </header>
        <!-- Page Sidebar Ends-->
        <div class="page-body">
          <div class="container-fluid">
            <div class="page-header">
              <div class="row">
                <div class="col-sm-6">
                  <h3>Магазин игр</h3>
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Главная</a></li>
                    <li class="breadcrumb-item active">Магазин игр</li>
                  </ol>
                </div>
                <div class="col-sm-6">
                  <!-- Bookmark Start-->
                  <div class="bookmark">
                  </div>
                  <!-- Bookmark Ends-->
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid starts-->
          <div class="container-fluid">
            <div class="row">
              <div class="col-sm-12">
                <div class="card">
                  <div class="card-header pb-0">
                    <h5>Игры с описанием</h5>
                  </div>
                  <div class="my-gallery card-body row gallery-with-description" itemscope="">
                    <figure class="col-xl-3 col-sm-6 xl-33" itemprop="associatedMedia" itemscope=""><a href="../assets/images/pinguin.jpg" itemprop="contentUrl" data-size="1600x950"><img src="../assets/images/pinguin.jpg" itemprop="thumbnail" alt="Image description">
                        <div class="caption">
                          <h4>Игра 1</h4>
                          <p>Описание игры</p>
                        </div></a>
                      <figcaption itemprop="caption description">
                        <h4>Portfolio Title</h4>
                        <p>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.</p>
                      </figcaption>
                    </figure>
                    <figure class="col-xl-3 col-sm-6 xl-33" itemprop="associatedMedia" itemscope=""><a href="../assets/images/pinguin.jpg" itemprop="contentUrl" data-size="1600x950"><img src="../assets/images/pinguin.jpg" itemprop="thumbnail" alt="Image description">
                        <div class="caption">
                          <h4>Игра 2</h4>
                          <p>Описание игры</p>
                        </div></a>
                      <figcaption itemprop="caption description">
                        <h4>Portfolio Title</h4>
                        <p>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.</p>
                      </figcaption>
                    </figure>
                    <figure class="col-xl-3 col-sm-6 xl-33" itemprop="associatedMedia" itemscope=""><a href="../assets/images/big-lightgallry/03.jpg" itemprop="contentUrl" data-size="1600x950"><img src="../assets/images/pinguin_portrait.png" itemprop="thumbnail" alt="Image description">
                        <div class="caption">
                          <h4>Игра 3</h4>
                          <p>Описание игры</p>
                        </div></a>
                      <figcaption itemprop="caption description">
                        <h4>Portfolio Title</h4>
                        <p>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.</p>
                      </figcaption>
                    </figure>
                    <figure class="col-xl-3 col-sm-6 xl-33" itemprop="associatedMedia" itemscope=""><a href="../assets/images/big-lightgallry/04.jpg" itemprop="contentUrl" data-size="1600x950"><img src="../assets/images/lightgallry/04.jpg" itemprop="thumbnail" alt="Image description">
                        <div class="caption">
                          <h4>Portfolio Title</h4>
                          <p>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.</p>
                        </div></a>
                      <figcaption itemprop="caption description">
                        <h4>Portfolio Title</h4>
                        <p>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.</p>
                      </figcaption>
                    </figure>
                    <figure class="col-xl-3 col-sm-6 xl-33" itemprop="associatedMedia" itemscope=""><a href="../assets/images/big-lightgallry/01.jpg" itemprop="contentUrl" data-size="1600x950"><img src="../assets/images/lightgallry/01.jpg" itemprop="thumbnail" alt="Image description">
                        <div class="caption">
                          <h4>Portfolio Title</h4>
                          <p>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.</p>
                        </div></a>
                      <figcaption itemprop="caption description">
                        <h4>Portfolio Title</h4>
                        <p>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.</p>
                      </figcaption>
                    </figure>
                    <figure class="col-xl-3 col-sm-6 xl-33" itemprop="associatedMedia" itemscope=""><a href="../assets/images/big-lightgallry/02.jpg" itemprop="contentUrl" data-size="1600x950"><img src="../assets/images/lightgallry/02.jpg" itemprop="thumbnail" alt="Image description">
                        <div class="caption">
                          <h4>Portfolio Title</h4>
                          <p>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.</p>
                        </div></a>
                      <figcaption itemprop="caption description">
                        <h4>Portfolio Title</h4>
                        <p>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
                    <!--
                    Background of PhotoSwipe.
                    It's a separate element, as animating opacity is faster than rgba().
                    -->
                    <div class="pswp__bg"></div>
                    <!-- Slides wrapper with overflow:hidden.-->
                    <div class="pswp__scroll-wrap">
                      <!-- Container that holds slides. PhotoSwipe keeps only 3 slides in DOM to save memory.-->
                      <!-- don't modify these 3 pswp__item elements, data is added later on.-->
                      <div class="pswp__container">
                        <div class="pswp__item"></div>
                        <div class="pswp__item"></div>
                        <div class="pswp__item"></div>
                      </div>
                      <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed.-->
                      <div class="pswp__ui pswp__ui--hidden">
                        <div class="pswp__top-bar">
                          <!-- Controls are self-explanatory. Order can be changed.-->
                          <div class="pswp__counter"></div>
                          <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
                          <button class="pswp__button pswp__button--share" title="Share"></button>
                          <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
                          <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
                          <!-- Preloader demo https://codepen.io/dimsemenov/pen/yyBWoR-->
                          <!-- element will get class pswp__preloader--active when preloader is running-->
                          <div class="pswp__preloader">
                            <div class="pswp__preloader__icn">
                              <div class="pswp__preloader__cut">
                                <div class="pswp__preloader__donut"></div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                          <div class="pswp__share-tooltip"></div>
                        </div>
                        <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button>
                        <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button>
                        <div class="pswp__caption">
                          <div class="pswp__caption__center"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid Ends-->
        </div>
        <!-- footer start-->
        <footer class="footer">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-6 footer-copyright">
                <p class="mb-0">Copyright 2021-22 © viho All rights reserved.</p>
              </div>
              <div class="col-md-6">
                <p class="pull-right mb-0">Hand crafted & made with <i class="fa fa-heart font-secondary"></i></p>
              </div>
            </div>
          </div>
        </footer>
      </div>
    </div>
    <!-- latest jquery-->
    <script src="../assets/js/jquery-3.5.1.min.js"></script>
    <!-- feather icon js-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.29.0/feather.min.js" integrity="sha512-24XP4a9KVoIinPFUbcnjIjAjtS59PUoxQj3GNVpWc86bCqPuy3YxAcxJrxFCxXe4GHtAumCbO2Ze2bddtuxaRw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="../assets/js/icons/feather-icon/feather-icon.js"></script>
    <!-- Sidebar jquery-->
    <script src="../assets/js/sidebar-menu.js"></script>
    <script src="../assets/js/config.js"></script>
    <!-- Bootstrap js-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <!-- Plugins JS start-->
    <script src="../assets/js/photoswipe/photoswipe.min.js"></script>
    <script src="../assets/js/photoswipe/photoswipe-ui-default.min.js"></script>
    <script src="../assets/js/photoswipe/photoswipe.js"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="../assets/js/script.js"></script>
    <script src="../assets/js/theme-customizer/customizer.js"></script>
    <script src="../assets/js/offcanvas.js"></script>


    </script>
    <!-- login js-->
    <!-- Plugin used-->
  </body>
</html>
