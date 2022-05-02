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
                  <h1 class="intro">Платформа обучающих игр</h1>
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid starts-->
          <div class="container-fluid">
            <div class="row starter-main">
              <div class="col-sm-12">
                <div class="card">
                  <div class="card-header d-flex align-items-center justify-content-between">
                    <h5>Какой-нибудь заголовок!</h5>

                  </div>
                  <div class="card-body">
                    <p>Сюда видео</p>
                    <div class="embed-responsive embed-responsive-1by1">
                      <iframe width="853" height="480" src="https://www.youtube.com/embed/6cHoZ7DQCMU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>

                    <div class="code-box-copy">
                      <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head" title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="card">
                  <div class="card-header">
                    <h5>Заголовок</h5>
                  </div>
                  <div class="card-body">
                    <h5>Content title</h5>
                    <p>Add a heading to card with <code>.card-header</code> class</p>
                    <p>You may also include any &lt;h1&gt;-&lt;h6&gt; with a <code>.card-header </code> & <code>.card-title</code> class to add heading.</p>
                    <p>Jelly beans sugar plum cheesecake cookie oat cake soufflé. Tart lollipop carrot cake sugar plum. Marshmallow wafer tiramisu jelly beans.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="card">
                  <div class="card-header card-no-border">
                    <h5>Заголовок</h5>
                  </div>
                  <div class="card-body">
                    <h5>Content title</h5>
                    <p>Add a heading to card with <code>.card-header </code> class & without header border<code>.border-bottom-0</code> class.</p>
                    <p>You may also include any &lt;h1&gt;-&lt;h6&gt; with a <code>.card-header </code> & <code>.card-title</code> class to add heading.</p>
                    <p>Gingerbread brownie sweet roll cheesecake chocolate cake jelly beans marzipan gummies dessert. Jelly beans sugar plum cheesecake cookie oat cake soufflé.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>


          <!-- Container-fluid Ends-->
        </div>

        <!-- footer start-->
        <div class="container-fluid">

        </div>
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
