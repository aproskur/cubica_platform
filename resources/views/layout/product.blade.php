
<!-- Container-fluid starts-->
<div class="container-fluid product-wrapper">
    <div class="product-wrapper-grid">
      <div class="row">


        @foreach($games as $game)
        <div class="col-xl-3 col-sm-6 xl-4">
           <x-catalogue-card-component :game=$game/>
        </div>
        @endforeach
        <div class="col-xl-3 col-sm-6 xl-4">
             @livewire('catalogue-card')

        </div>
      </div>

    </div>
  </div>
</div>
<!-- Container-fluid Ends-->
