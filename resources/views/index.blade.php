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
      @include('layout.sidebar-shop')
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
  @guest
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
    @endguest
      <!-- Container-fluid Ends-->





      <!-- Games catalogue-->
      <div class="container-fluid product-wrapper">
          <div class="product-wrapper-grid">
            <div class="row">


              @foreach($games as $game)
              <div class="col-xl-3 col-sm-6 xl-4">
                 <x-catalogue-card-component :game=$game/>
              </div>
              @endforeach
            </div>

          </div>
        </div>
      </div>
      <!-- Games catalogue ends-->



      <!-- Container-fluid CATALOGUE Ends-->


    </div>

    <!-- footer start-->
    <div class="container-fluid">
      <footer class="footer">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-6">
              <p class="mb-0"></p>
            </div>
            <div class="col-md-6 footer-copyright">
              <p class="mb-0">Copyright {{date('Y')}} © Cubica</p>
            </div>
          </div>
        </div>
      </footer>
    </div>
</div>
@endsection
