@extends('app')

@section('content')
<!-- page-wrapper Start-->
<div class="page-wrapper" id="pageWrapper">
  <!-- Page Header Start Top Navbar-->
@include ('layout/top-navbar')
  <div class="page-body-wrapper">
    <header class="main-nav">
      @include('layout.sidebar-empty')
    </header>
    <div class="page-body">

<p style="margin-top: 145px; margin-left: 300px; color:var(--theme-yellow);"> О платформе</p>


    </div>
  </div>
</div>
@endsection
