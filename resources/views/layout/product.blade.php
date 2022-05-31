<?php use App\Classes\Game; ?>
<!-- Container-fluid starts-->
<div class="container-fluid product-wrapper">
    <div class="product-wrapper-grid">
      <div class="row">


        <?php $g = new Game("Игра 1", "Описание игры один", 450); ?>

        <div class="col-xl-3 col-sm-6 xl-4">
           <x-catalogue-card-component :game=$g />
           <!--/x-catalogue-card-component -->
        </div>

    </div>
  </div>
</div>
<!-- Container-fluid Ends-->
