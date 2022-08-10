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
  </div>
</div>
@endsection
