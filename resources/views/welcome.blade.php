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
          @include('layout.sidebar-welcome')
        </header>
        <!-- Page Sidebar Ends-->
        <div class="page-body">
          <div class="container-fluid">
            <div class="page-header">
              <div class="row">
                <div class="col-12">

                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid starts-->
          <div class="container-fluid m-t-0">
            <div class="row starter-main m-t-0">
              <div class="col-sm-12 m-t-0">
                <div class="card m-t-0" id="video-intro">
                  <div class="card-body">
                    <div class="col-12">
                      <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item youtube" src="https://www.youtube.com/embed/6cHoZ7DQCMU" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>

          <!-- Container-fluid Ends-->

          <!-- Container-fluid CATALOGUE starts-->
          <div class="container-fluid">
            <div class="row">
              <div class="col-sm-12">
                <div class="card" id="catalogue">
                  <div class="card-header pb-0">
                    <h5>Каталог игр</h5>
                  </div>
                  <div class="my-gallery card-body row gallery-with-description" itemscope="">
                    <figure class="reveal col-xl-3 col-sm-6 xl-33" itemprop="associatedMedia" itemscope=""><a href="../assets/images/pinguin.jpg" itemprop="contentUrl" data-size="1600x950"><img src="../assets/images/pinguin.jpg" itemprop="thumbnail" alt="Image description">
                        <div class="caption">
                          <h4>Игра 1</h4>
                          <p>Описание игры</p>
                        </div></a>
                      <figcaption itemprop="caption description">
                        <h4>Portfolio Title</h4>
                        <p>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.</p>
                      </figcaption>
                    </figure>
                    <figure class="reveal col-xl-3 col-sm-6 xl-33" itemprop="associatedMedia" itemscope=""><a href="../assets/images/pinguin.jpg" itemprop="contentUrl" data-size="1600x950"><img src="../assets/images/pinguin.jpg" itemprop="thumbnail" alt="Image description">
                        <div class="caption">
                          <h4>Игра 2</h4>
                          <p>Описание игры</p>
                        </div></a>
                      <figcaption itemprop="caption description">
                        <h4>Portfolio Title</h4>
                        <p>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.</p>
                      </figcaption>
                    </figure>
                    <figure class="reveal col-xl-3 col-sm-6 xl-33" itemprop="associatedMedia" itemscope=""><a href="../assets/images/big-lightgallry/03.jpg" itemprop="contentUrl" data-size="1600x950"><img src="../assets/images/pinguin_portrait.png" itemprop="thumbnail" alt="Image description">
                        <div class="caption">
                          <h4>Игра 3</h4>
                          <p>Описание игры</p>
                        </div></a>
                      <figcaption itemprop="caption description">
                        <h4>Portfolio Title</h4>
                        <p>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.</p>
                      </figcaption>
                    </figure>
                    <figure class="reveal col-xl-3 col-sm-6 xl-33" itemprop="associatedMedia" itemscope=""><a href="../assets/images/big-lightgallry/04.jpg" itemprop="contentUrl" data-size="1600x950"><img src="../assets/images/lightgallry/04.jpg" itemprop="thumbnail" alt="Image description">
                        <div class="caption">
                          <h4>Portfolio Title</h4>
                          <p>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.</p>
                        </div></a>
                      <figcaption itemprop="caption description">
                        <h4>Portfolio Title</h4>
                        <p>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.</p>
                      </figcaption>
                    </figure>
                    <figure class="reveal col-xl-3 col-sm-6 xl-33" itemprop="associatedMedia" itemscope=""><a href="../assets/images/big-lightgallry/01.jpg" itemprop="contentUrl" data-size="1600x950"><img src="../assets/images/lightgallry/01.jpg" itemprop="thumbnail" alt="Image description">
                        <div class="caption">
                          <h4>Portfolio Title</h4>
                          <p>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.</p>
                        </div></a>
                      <figcaption itemprop="caption description">
                        <h4>Portfolio Title</h4>
                        <p>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.</p>
                      </figcaption>
                    </figure>
                    <figure class="reveal col-xl-3 col-sm-6 xl-33" itemprop="associatedMedia" itemscope=""><a href="../assets/images/big-lightgallry/02.jpg" itemprop="contentUrl" data-size="1600x950"><img src="../assets/images/lightgallry/02.jpg" itemprop="thumbnail" alt="Image description">
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
          <!-- Container-fluid CATALOGUE Ends-->


        </div>

        <!-- footer start-->
        <div class="container-fluid">

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
    <!--
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js" integrity="sha512-lOtDAY9KMT1WH9Fx6JSuZLHxjC8wmIBxsNFL6gJPaG7sLIVoSO9yCraWOwqLLX+txsOw0h2cHvcUJlJPvMlotw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="../assets/js/animation/scroll-reveal/reveal-custom.js"></script>
    <script src="../assets/js/animation/scroll-reveal/scrollreveal.min.js"></script> -->
    <!-- Theme js-->
    <script src="../assets/js/script.js"></script>
    <script src="../assets/js/theme-customizer/customizer.js"></script>
    <script src="../assets/js/offcanvas.js"></script>
    <script src="./js/app.js"></script>


    </script>
    <!-- login js-->
    <!-- Plugin used-->
  </body>
</html>
