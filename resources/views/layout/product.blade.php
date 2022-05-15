<!-- Container-fluid starts-->
<div class="container-fluid product-wrapper">

    <div class="product-wrapper-grid">
      <div class="row">
        <div class="col-xl-3 col-sm-6 xl-4">
          <div class="card">
            <div class="product-box">
              <div class="product-img"><img class="img-fluid" src="../assets/images/pinguin.jpg" alt="">
                <div class="product-hover">
                  <ul>
                    <li><a href="cart.html"><i class="icon-shopping-cart"></i></a></li>
                    <li><a data-bs-toggle="modal" data-bs-target="#exampleModalCenter16"><i class="icon-eye"></i></a></li>
                  </ul>
                </div>
              </div>
              <div class="modal fade" id="exampleModalCenter16">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                  <div class="modal-content">
                    <div class="modal-header">
                      <div class="product-box row">
                        <div class="product-img col-lg-6"><img class="img-fluid" src="../assets/images/pinguin_portrait.png" alt=""></div>
                        <div class="product-details col-lg-6 text-start"><a href="{{ route('game-page') }}" >
                            <h4>Игра 1                                       </h4></a>
                          <div class="product-price">$26.00
                            <del>$35.00</del>
                          </div>
                          <div class="product-view">
                            <h6 class="f-w-600">Описание игры</h6>
                            <p class="mb-0">форма деятельности в условных ситуациях, направленная на воссоздание и усвоение общественного опыта, фиксированного в социально закрепленных способах осуществления предметных действий, в предметах науки и культуры</p>
                          </div>
                          <div class="product-size">
                            <ul>
                              <li>
                                <button class="btn btn-outline-light" type="button">M</button>
                              </li>
                              <li>
                                <button class="btn btn-outline-light" type="button">L</button>
                              </li>
                              <li>
                                <button class="btn btn-outline-light" type="button">Xl</button>
                              </li>
                            </ul>
                          </div>
                          <div class="product-qnty">
                            <h6 class="f-w-600">Quantity</h6>
                            <fieldset>
                              <div class="input-group">
                                <input class="touchspin text-center" type="text" value="5">
                              </div>
                            </fieldset>
                            <div class="addcart-btn"><a class="btn btn-primary me-3" href="cart.html">Add to Cart                                                     </a><a class="btn btn-primary" href="{{ route('game-page') }}" >View Details</a></div>
                          </div>
                        </div>
                      </div>
                      <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="product-details"><a href="{{ route('game-page') }}" >
                  <h4>Игра 1                                      </h4></a>
                <p>Параграф про игру</p>
                <div class="product-price">$26.00
                  <del>$35.00</del>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 xl-4">
          <div class="card">
            <div class="product-box">
              <div class="product-img">
                <div class="ribbon ribbon-danger">Sale</div><img class="img-fluid" src="../assets/images/pinguin.jpg" alt="">
                <div class="product-hover">
                  <ul>
                    <li><a href="cart.html"><i class="icon-shopping-cart"></i></a></li>
                    <li><a data-bs-toggle="modal" data-bs-target="#exampleModalCenter1"><i class="icon-eye"></i></a></li>
                  </ul>
                </div>
              </div>
              <div class="modal fade" id="exampleModalCenter1">
                <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <div class="product-box row">
                        <div class="product-img col-lg-6"><img class="img-fluid" src="../assets/images/pinguin.jpg" alt=""></div>
                        <div class="product-details col-lg-6 text-start"><a href="{{ route('game-page') }}" >
                            <h4>Игра 2</h4></a>
                          <div class="product-price">$55.00
                            <del>$62.00 </del>
                          </div>
                          <div class="product-view">
                            <h6 class="f-w-600">Product Details</h6>
                            <p class="mb-0">Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo.</p>
                          </div>
                          <div class="product-size">
                            <ul>
                              <li>
                                <button class="btn btn-outline-light" type="button">M</button>
                              </li>
                              <li>
                                <button class="btn btn-outline-light" type="button">L</button>
                              </li>
                              <li>
                                <button class="btn btn-outline-light" type="button">Xl</button>
                              </li>
                            </ul>
                          </div>
                          <div class="product-qnty">
                            <h6 class="f-w-600">Quantity</h6>
                            <fieldset>
                              <div class="input-group">
                                <input class="touchspin text-center" type="text" value="5">
                              </div>
                            </fieldset>
                            <div class="addcart-btn"><a class="btn btn-primary me-3" href="cart.html">Add to Cart</a><a class="btn btn-primary" href="{{ route('game-page') }}" >View Details</a></div>
                          </div>
                        </div>
                      </div>
                      <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="product-details"><a href="{{ route('game-page') }}" >
                  <h4>Игра 2</h4></a>
                <p>Параграф про игру</p>
                <div class="product-price">$55.00
                  <del>$62.00</del>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 xl-4">
          <div class="card">
            <div class="product-box">
              <div class="product-img"><img class="img-fluid" src="../assets/images/pinguin.jpg" alt="">
                <div class="product-hover">
                  <ul>
                    <li><a href="cart.html"><i class="icon-shopping-cart"></i></a></li>
                    <li><a data-bs-toggle="modal" data-bs-target="#exampleModalCenter2"><i class="icon-eye"></i></a></li>
                  </ul>
                </div>
              </div>
              <div class="modal fade" id="exampleModalCenter2">
                <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <div class="product-box row">
                        <div class="product-img col-lg-6"><img class="img-fluid" src="../assets/images/pinguin.jpg" alt=""></div>
                        <div class="product-details col-lg-6 text-start"><a href="{{ route('game-page') }}" >
                            <h4>Игра 3</h4></a>
                          <div class="product-price">$45.00
                            <del>$52.00</del>
                          </div>
                          <div class="product-view">
                            <h6 class="f-w-600">Product Details</h6>
                            <p class="mb-0">Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo.</p>
                          </div>
                          <div class="product-size">
                            <ul>
                              <li>
                                <button class="btn btn-outline-light" type="button">M</button>
                              </li>
                              <li>
                                <button class="btn btn-outline-light" type="button">L</button>
                              </li>
                              <li>
                                <button class="btn btn-outline-light" type="button">Xl</button>
                              </li>
                            </ul>
                          </div>
                          <div class="product-qnty">
                            <h6 class="f-w-600">Quantity</h6>
                            <fieldset>
                              <div class="input-group">
                                <input class="touchspin text-center" type="text" value="5">
                              </div>
                            </fieldset>
                            <div class="addcart-btn"><a class="btn btn-primary me-3" href="cart.html">Add to Cart</a><a class="btn btn-primary" href="{{ route('game-page') }}" >View Details</a></div>
                          </div>
                        </div>
                      </div>
                      <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="product-details"><a href="{{ route('game-page') }}" >
                  <h4>Игра 3</h4></a>
                <p>Параграф про игру 3</p>
                <div class="product-price">$45.00
                  <del>$52.00</del>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 xl-4">
          <div class="card">
            <div class="product-box">
              <div class="product-img">
                <div class="ribbon ribbon-success ribbon-right">50%</div><img class="img-fluid" src="../assets/images/pinguin.jpg" alt="">
                <div class="product-hover">
                  <ul>
                    <li><a href="cart.html"><i class="icon-shopping-cart"></i></a></li>
                    <li><a data-bs-toggle="modal" data-bs-target="#exampleModalCenter3"><i class="icon-eye"></i></a></li>
                  </ul>
                </div>
              </div>
              <div class="modal fade" id="exampleModalCenter3">
                <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <div class="product-box row">
                        <div class="product-img col-lg-6"><img class="img-fluid" src="../assets/images/pinguin.jpg" alt=""></div>
                        <div class="product-details col-lg-6 text-start"><a href="{{ route('game-page') }}" >
                            <h4>Игра</h4></a>
                          <div class="product-price">$38.00
                            <del>$45.00    </del>
                          </div>
                          <div class="product-view">
                            <h6 class="f-w-600">Product Details</h6>
                            <p class="mb-0">Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo.</p>
                          </div>
                          <div class="product-size">
                            <ul>
                              <li>
                                <button class="btn btn-outline-light" type="button">M</button>
                              </li>
                              <li>
                                <button class="btn btn-outline-light" type="button">L</button>
                              </li>
                              <li>
                                <button class="btn btn-outline-light" type="button">Xl</button>
                              </li>
                            </ul>
                          </div>
                          <div class="product-qnty">
                            <h6 class="f-w-600">Quantity</h6>
                            <fieldset>
                              <div class="input-group">
                                <input class="touchspin text-center" type="text" value="5">
                              </div>
                            </fieldset>
                            <div class="addcart-btn"><a class="btn btn-primary me-3" href="cart.html">Add to Cart</a><a class="btn btn-primary" href="{{ route('game-page') }}" >View Details</a></div>
                          </div>
                        </div>
                      </div>
                      <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"> </button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="product-details"><a href="{{ route('game-page') }}" >
                  <h4>Игра</h4></a>
                <p>Параграф про игру</p>
                <div class="product-price">$38.00
                  <del>$45.00 </del>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 xl-4">
          <div class="card">
            <div class="product-box">
              <div class="product-img">
                <div class="ribbon ribbon-success ribbon-right">50%</div><img class="img-fluid" src="../assets/images/pinguin_portrait.png" alt="">
                <div class="product-hover">
                  <ul>
                    <li><a href="cart.html"><i class="icon-shopping-cart"></i></a></li>
                    <li><a data-bs-toggle="modal" data-bs-target="#exampleModalCenter4"><i class="icon-eye"></i></a></li>
                  </ul>
                </div>
              </div>
              <div class="modal fade" id="exampleModalCenter4">
                <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <div class="product-box row">
                        <div class="product-img col-lg-6"><img class="img-fluid" src="../assets/images/pinguin_portrait.png" alt=""></div>
                        <div class="product-details col-lg-6 text-start"><a href="{{ route('game-page') }}" >
                            <h4>Игра</h4></a>
                          <div class="product-price">$38.00
                            <del>$45.00    </del>
                          </div>
                          <div class="product-view">
                            <h6 class="f-w-600">Product Details</h6>
                            <p class="mb-0">Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo.</p>
                          </div>
                          <div class="product-size">
                            <ul>
                              <li>
                                <button class="btn btn-outline-light" type="button">M</button>
                              </li>
                              <li>
                                <button class="btn btn-outline-light" type="button">L</button>
                              </li>
                              <li>
                                <button class="btn btn-outline-light" type="button">Xl</button>
                              </li>
                            </ul>
                          </div>
                          <div class="product-qnty">
                            <h6 class="f-w-600">Quantity</h6>
                            <fieldset>
                              <div class="input-group">
                                <input class="touchspin text-center" type="text" value="5">
                              </div>
                            </fieldset>
                            <div class="addcart-btn"><a class="btn btn-primary me-3" href="cart.html">Add to Cart</a><a class="btn btn-primary" href="{{ route('game-page') }}" >View Details</a></div>
                          </div>
                        </div>
                      </div>
                      <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"> </button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="product-details"><a href="{{ route('game-page') }}" >
                  <h4>Игра</h4></a>
                <p>Параграф про игру</p>
                <div class="product-price">$38.00
                  <del>$45.00 </del>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 xl-4">
          <div class="card">
            <div class="product-box">
              <div class="product-img"><img class="img-fluid" src="../assets/images/pinguin.jpg" alt="">
                <div class="product-hover">
                  <ul>
                    <li><a href="cart.html"><i class="icon-shopping-cart"></i></a></li>
                    <li><a data-bs-toggle="modal" data-bs-target="#exampleModalCenter5"><i class="icon-eye"></i></a></li>
                  </ul>
                </div>
              </div>
              <div class="modal fade" id="exampleModalCenter5">
                <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <div class="product-box row">
                        <div class="product-img col-lg-6"><img class="img-fluid" src="../assets/images/pinguin.jpg" alt=""></div>
                        <div class="product-details col-lg-6 text-start"><a href="{{ route('game-page') }}" >
                            <h4>Игра                                       </h4></a>
                          <div class="product-price">$26.00
                            <del>$35.00</del>
                          </div>
                          <div class="product-view">
                            <h6 class="f-w-600">Product Details</h6>
                            <p class="mb-0">Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo.</p>
                          </div>
                          <div class="product-size">
                            <ul>
                              <li>
                                <button class="btn btn-outline-light" type="button">M</button>
                              </li>
                              <li>
                                <button class="btn btn-outline-light" type="button">L</button>
                              </li>
                              <li>
                                <button class="btn btn-outline-light" type="button">Xl</button>
                              </li>
                            </ul>
                          </div>
                          <div class="product-qnty">
                            <h6 class="f-w-600">Quantity</h6>
                            <fieldset>
                              <div class="input-group">
                                <input class="touchspin text-center" type="text" value="5">
                              </div>
                            </fieldset>
                            <div class="addcart-btn"><a class="btn btn-primary me-3" href="cart.html">Add to Cart</a><a class="btn btn-primary" href="{{ route('game-page') }}" >View Details</a></div>
                          </div>
                        </div>
                      </div>
                      <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="product-details"><a href="{{ route('game-page') }}" >
                  <h4>Игра                                       </h4></a>
                <p>Solid Denim Jacket</p>
                <div class="product-price">$26.00
                  <del>$35.00</del>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 xl-4">
          <div class="card">
            <div class="product-box">
              <div class="product-img">
                <div class="ribbon ribbon-danger">Sale</div><img class="img-fluid" src="../assets/images/pinguin.jpg" alt="">
                <div class="product-hover">
                  <ul>
                    <li><a href="cart.html"><i class="icon-shopping-cart"></i></a></li>
                    <li><a data-bs-toggle="modal" data-bs-target="#exampleModalCenter6"><i class="icon-eye"></i></a></li>
                  </ul>
                </div>
              </div>
              <div class="modal fade" id="exampleModalCenter6" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter1" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <div class="product-box row">
                        <div class="product-img col-lg-6"><img class="img-fluid" src="../assets/images/pinguin.jpg" alt=""></div>
                        <div class="product-details col-lg-6 text-start"><a href="{{ route('game-page') }}" >
                            <h4>Игра</h4></a>
                          <div class="product-price">$55.00
                            <del>$62.00 </del>
                          </div>
                          <div class="product-view">
                            <h6 class="f-w-600">Product Details</h6>
                            <p class="mb-0">Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo.</p>
                          </div>
                          <div class="product-size">
                            <ul>
                              <li>
                                <button class="btn btn-outline-light" type="button">M</button>
                              </li>
                              <li>
                                <button class="btn btn-outline-light" type="button">L</button>
                              </li>
                              <li>
                                <button class="btn btn-outline-light" type="button">Xl</button>
                              </li>
                            </ul>
                          </div>
                          <div class="product-qnty">
                            <h6 class="f-w-600">Quantity</h6>
                            <fieldset>
                              <div class="input-group">
                                <input class="touchspin text-center" type="text" value="5">
                              </div>
                            </fieldset>
                            <div class="addcart-btn"><a class="btn btn-primary me-3" href="cart.html">Add to Cart</a><a class="btn btn-primary" href="{{ route('game-page') }}" >View Details</a></div>
                          </div>
                        </div>
                      </div>
                      <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="product-details"><a href="{{ route('game-page') }}" >
                  <h4>Игра</h4></a>
                <p>Solid Polo Collar T-shirt</p>
                <div class="product-price">$55.00
                  <del>$62.00</del>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 xl-4">
          <div class="card">
            <div class="product-box">
              <div class="product-img"><img class="img-fluid" src="../assets/images/pinguin.jpg" alt="">
                <div class="product-hover">
                  <ul>
                    <li><a href="cart.html"><i class="icon-shopping-cart"></i></a></li>
                    <li><a data-bs-toggle="modal" data-bs-target="#exampleModalCenter7"><i class="icon-eye"></i></a></li>
                  </ul>
                </div>
              </div>
              <div class="modal fade" id="exampleModalCenter7" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter2" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <div class="product-box row">
                        <div class="product-img col-lg-6"><img class="img-fluid" src="../assets/images/pinguin.jpg" alt=""></div>
                        <div class="product-details col-lg-6 text-start"><a href="{{ route('game-page') }}" >
                            <h4>Игра</h4></a>
                          <div class="product-price">$45.00
                            <del>$52.00</del>
                          </div>
                          <div class="product-view">
                            <h6 class="f-w-600">Product Details</h6>
                            <p class="mb-0">Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo.</p>
                          </div>
                          <div class="product-size">
                            <ul>
                              <li>
                                <button class="btn btn-outline-light" type="button">M</button>
                              </li>
                              <li>
                                <button class="btn btn-outline-light" type="button">L</button>
                              </li>
                              <li>
                                <button class="btn btn-outline-light" type="button">Xl</button>
                              </li>
                            </ul>
                          </div>
                          <div class="product-qnty">
                            <h6 class="f-w-600">Quantity</h6>
                            <fieldset>
                              <div class="input-group">
                                <input class="touchspin text-center" type="text" value="5">
                              </div>
                            </fieldset>
                            <div class="addcart-btn"><a class="btn btn-primary me-3" href="cart.html">Add to Cart</a><a class="btn btn-primary" href="{{ route('game-page') }}" >View Details</a></div>
                          </div>
                        </div>
                      </div>
                      <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="product-details"><a href="{{ route('game-page') }}" >
                  <h4>Игра</h4></a>
                <p>Woman Gray Round T-shirt</p>
                <div class="product-price">$45.00
                  <del>$52.00</del>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 xl-4">
          <div class="card">
            <div class="product-box">
              <div class="product-img"><img class="img-fluid" src="../assets/images/pinguin.jpg" alt="">
                <div class="product-hover">
                  <ul>
                    <li><a href="cart.html"><i class="icon-shopping-cart"></i></a></li>
                    <li><a data-bs-toggle="modal" data-bs-target="#exampleModalCenter8"><i class="icon-eye"></i></a></li>
                  </ul>
                </div>
              </div>
              <div class="modal fade" id="exampleModalCenter8" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter2" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <div class="product-box row">
                        <div class="product-img col-lg-6"><img class="img-fluid" src="../assets/images/pinguin.jpg" alt=""></div>
                        <div class="product-details col-lg-6 text-start"><a href="{{ route('game-page') }}" >
                            <h4>Игра</h4></a>
                          <div class="product-price">$45.00
                            <del>$52.00</del>
                          </div>
                          <div class="product-view">
                            <h6 class="f-w-600">Product Details</h6>
                            <p class="mb-0">Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo.</p>
                          </div>
                          <div class="product-size">
                            <ul>
                              <li>
                                <button class="btn btn-outline-light" type="button">M</button>
                              </li>
                              <li>
                                <button class="btn btn-outline-light" type="button">L</button>
                              </li>
                              <li>
                                <button class="btn btn-outline-light" type="button">Xl</button>
                              </li>
                            </ul>
                          </div>
                          <div class="product-qnty">
                            <h6 class="f-w-600">Quantity</h6>
                            <fieldset>
                              <div class="input-group">
                                <input class="touchspin text-center" type="text" value="5">
                              </div>
                            </fieldset>
                            <div class="addcart-btn"><a class="btn btn-primary me-3" href="cart.html">Add to Cart</a><a class="btn btn-primary" href="{{ route('game-page') }}" >View Details</a></div>
                          </div>
                        </div>
                      </div>
                      <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="product-details"><a href="{{ route('game-page') }}" >
                  <h4>Игра</h4></a>
                <p>Woman Gray Round T-shirt</p>
                <div class="product-price">$45.00
                  <del>$52.00</del>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 xl-4">
          <div class="card">
            <div class="product-box">
              <div class="product-img">
                <div class="ribbon ribbon-success ribbon-right">50%</div><img class="img-fluid" src="../assets/images/pinguin_portrait.png" alt="">
                <div class="product-hover">
                  <ul>
                    <li><a href="cart.html"><i class="icon-shopping-cart"></i></a></li>
                    <li><a data-bs-toggle="modal" data-bs-target="#exampleModalCenter9"><i class="icon-eye"></i></a></li>
                  </ul>
                </div>
              </div>
              <div class="modal fade" id="exampleModalCenter9" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter3" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <div class="product-box row">
                        <div class="product-img col-lg-6"><img class="img-fluid" src="../assets/images/pinguin_portrait.png" alt=""></div>
                        <div class="product-details col-lg-6 text-start"><a href="{{ route('game-page') }}" >
                            <h4>Игра 4</h4></a>
                          <div class="product-price">$38.00
                            <del>$45.00    </del>
                          </div>
                          <div class="product-view">
                            <h6 class="f-w-600">Product Details</h6>
                            <p class="mb-0">Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo.</p>
                          </div>
                          <div class="product-size">
                            <ul>
                              <li>
                                <button class="btn btn-outline-light" type="button">M</button>
                              </li>
                              <li>
                                <button class="btn btn-outline-light" type="button">L</button>
                              </li>
                              <li>
                                <button class="btn btn-outline-light" type="button">Xl</button>
                              </li>
                            </ul>
                          </div>
                          <div class="product-qnty">
                            <h6 class="f-w-600">Quantity</h6>
                            <fieldset>
                              <div class="input-group">
                                <input class="touchspin text-center" type="text" value="5">
                              </div>
                            </fieldset>
                            <div class="addcart-btn"><a class="btn btn-primary me-3" href="cart.html">Add to Cart</a><a class="btn btn-primary" href="{{ route('game-page') }}" >View Details</a></div>
                          </div>
                        </div>
                      </div>
                      <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"> </button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="product-details"><a href="{{ route('game-page') }}" >
                  <h4>Игра</h4></a>
                <p>Параграф про игру</p>
                <div class="product-price">$38.00
                  <del>$45.00 </del>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 xl-4">
          <div class="card">
            <div class="product-box">
              <div class="product-img"><img class="img-fluid" src="../assets/images/pinguin.jpg" alt="">
                <div class="product-hover">
                  <ul>
                    <li><a href="cart.html"><i class="icon-shopping-cart"></i></a></li>
                    <li><a data-bs-toggle="modal" data-bs-target="#exampleModalCenter10"><i class="icon-eye"></i></a></li>
                  </ul>
                </div>
              </div>
              <div class="modal fade" id="exampleModalCenter10">
                <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <div class="product-box row">
                        <div class="product-img col-lg-6"><img class="img-fluid" src="../assets/images/pinguin.jpg" alt=""></div>
                        <div class="product-details col-lg-6 text-start"><a href="{{ route('game-page') }}" >
                            <h4>Игра                                       </h4></a>
                          <div class="product-price">$26.00
                            <del>$35.00</del>
                          </div>
                          <div class="product-view">
                            <h6 class="f-w-600">Product Details</h6>
                            <p class="mb-0">Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo.</p>
                          </div>
                          <div class="product-size">
                            <ul>
                              <li>
                                <button class="btn btn-outline-light" type="button">M</button>
                              </li>
                              <li>
                                <button class="btn btn-outline-light" type="button">L</button>
                              </li>
                              <li>
                                <button class="btn btn-outline-light" type="button">Xl</button>
                              </li>
                            </ul>
                          </div>
                          <div class="product-qnty">
                            <h6 class="f-w-600">Quantity</h6>
                            <fieldset>
                              <div class="input-group">
                                <input class="touchspin text-center" type="text" value="5">
                              </div>
                            </fieldset>
                            <div class="addcart-btn"><a class="btn btn-primary me-3" href="cart.html">Add to Cart</a><a class="btn btn-primary" href="{{ route('game-page') }}" >View Details</a></div>
                          </div>
                        </div>
                      </div>
                      <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="product-details"><a href="{{ route('game-page') }}" >
                  <h4>Игра                                       </h4></a>
                <p>Solid Denim Jacket</p>
                <div class="product-price">$26.00
                  <del>$35.00</del>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 xl-4">
          <div class="card">
            <div class="product-box">
              <div class="product-img">
                <div class="ribbon ribbon-danger">Sale</div><img class="img-fluid" src="../assets/images/pinguin.jpg" alt="">
                <div class="product-hover">
                  <ul>
                    <li><a href="cart.html"><i class="icon-shopping-cart"></i></a></li>
                    <li><a data-bs-toggle="modal" data-bs-target="#exampleModalCenter11"><i class="icon-eye"></i></a></li>
                  </ul>
                </div>
              </div>
              <div class="modal fade" id="exampleModalCenter11" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter1" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <div class="product-box row">
                        <div class="product-img col-lg-6"><img class="img-fluid" src="../assets/images/pinguin.jpg" alt=""></div>
                        <div class="product-details col-lg-6 text-start"><a href="{{ route('game-page') }}" >
                            <h4>Игра</h4></a>
                          <div class="product-price">$55.00
                            <del>$62.00 </del>
                          </div>
                          <div class="product-view">
                            <h6 class="f-w-600">Product Details</h6>
                            <p class="mb-0">Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo.</p>
                          </div>
                          <div class="product-size">
                            <ul>
                              <li>
                                <button class="btn btn-outline-light" type="button">M</button>
                              </li>
                              <li>
                                <button class="btn btn-outline-light" type="button">L</button>
                              </li>
                              <li>
                                <button class="btn btn-outline-light" type="button">Xl</button>
                              </li>
                            </ul>
                          </div>
                          <div class="product-qnty">
                            <h6 class="f-w-600">Quantity</h6>
                            <fieldset>
                              <div class="input-group">
                                <input class="touchspin text-center" type="text" value="5">
                              </div>
                            </fieldset>
                            <div class="addcart-btn"><a class="btn btn-primary me-3" href="cart.html">Add to Cart</a><a class="btn btn-primary" href="{{ route('game-page') }}" >View Details</a></div>
                          </div>
                        </div>
                      </div>
                      <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="product-details"><a href="{{ route('game-page') }}" >
                  <h4>Игра</h4></a>
                <p>Solid Polo Collar T-shirt</p>
                <div class="product-price">$55.00
                  <del>$62.00</del>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 xl-4">
          <div class="card">
            <div class="product-box">
              <div class="product-img">
                <div class="ribbon ribbon-danger">Sale</div><img class="img-fluid" src="../assets/images/pinguin.jpg" alt="">
                <div class="product-hover">
                  <ul>
                    <li><a href="cart.html"><i class="icon-shopping-cart"></i></a></li>
                    <li><a data-bs-toggle="modal" data-bs-target="#exampleModalCenter12"><i class="icon-eye"></i></a></li>
                  </ul>
                </div>
              </div>
              <div class="modal fade" id="exampleModalCenter12" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter1" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <div class="product-box row">
                        <div class="product-img col-lg-6"><img class="img-fluid" src="../assets/images/pinguin.jpg" alt=""></div>
                        <div class="product-details col-lg-6 text-start"><a href="{{ route('game-page') }}" >
                            <h4>Игра</h4></a>
                          <div class="product-price">$55.00
                            <del>$62.00 </del>
                          </div>
                          <div class="product-view">
                            <h6 class="f-w-600">Product Details</h6>
                            <p class="mb-0">Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo.</p>
                          </div>
                          <div class="product-size">
                            <ul>
                              <li>
                                <button class="btn btn-outline-light" type="button">M</button>
                              </li>
                              <li>
                                <button class="btn btn-outline-light" type="button">L</button>
                              </li>
                              <li>
                                <button class="btn btn-outline-light" type="button">Xl</button>
                              </li>
                            </ul>
                          </div>
                          <div class="product-qnty">
                            <h6 class="f-w-600">Quantity</h6>
                            <fieldset>
                              <div class="input-group">
                                <input class="touchspin text-center" type="text" value="5">
                              </div>
                            </fieldset>
                            <div class="addcart-btn"><a class="btn btn-primary me-3" href="cart.html">Add to Cart</a><a class="btn btn-primary" href="{{ route('game-page') }}" >View Details</a></div>
                          </div>
                        </div>
                      </div>
                      <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="product-details"><a href="{{ route('game-page') }}" >
                  <h4>Игра</h4></a>
                <p>Solid Polo Collar T-shirt</p>
                <div class="product-price">$55.00
                  <del>$62.00</del>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 xl-4">
          <div class="card">
            <div class="product-box">
              <div class="product-img"><img class="img-fluid" src="../assets/images/pinguin.jpg" alt="">
                <div class="product-hover">
                  <ul>
                    <li><a href="cart.html"><i class="icon-shopping-cart"></i></a></li>
                    <li><a data-bs-toggle="modal" data-bs-target="#exampleModalCenter13"><i class="icon-eye"></i></a></li>
                  </ul>
                </div>
              </div>
              <div class="modal fade" id="exampleModalCenter13" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter2" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <div class="product-box row">
                        <div class="product-img col-lg-6"><img class="img-fluid" src="../assets/images/pinguin.jpg" alt=""></div>
                        <div class="product-details col-lg-6 text-start"><a href="{{ route('game-page') }}" >
                            <h4>Игра</h4></a>
                          <div class="product-price">$45.00
                            <del>$52.00</del>
                          </div>
                          <div class="product-view">
                            <h6 class="f-w-600">Product Details</h6>
                            <p class="mb-0">Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo.</p>
                          </div>
                          <div class="product-size">
                            <ul>
                              <li>
                                <button class="btn btn-outline-light" type="button">M</button>
                              </li>
                              <li>
                                <button class="btn btn-outline-light" type="button">L</button>
                              </li>
                              <li>
                                <button class="btn btn-outline-light" type="button">Xl</button>
                              </li>
                            </ul>
                          </div>
                          <div class="product-qnty">
                            <h6 class="f-w-600">Quantity</h6>
                            <fieldset>
                              <div class="input-group">
                                <input class="touchspin text-center" type="text" value="5">
                              </div>
                            </fieldset>
                            <div class="addcart-btn"><a class="btn btn-primary me-3" href="cart.html">Add to Cart</a><a class="btn btn-primary" href="{{ route('game-page') }}" >View Details</a></div>
                          </div>
                        </div>
                      </div>
                      <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="product-details"><a href="{{ route('game-page') }}" >
                  <h4>Игра</h4></a>
                <p>Woman Gray Round T-shirt</p>
                <div class="product-price">$45.00
                  <del>$52.00</del>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 xl-4">
          <div class="card">
            <div class="product-box">
              <div class="product-img">
                <div class="ribbon ribbon-success ribbon-right">50%</div><img class="img-fluid" src="../assets/images/pinguin.jpg" alt="">
                <div class="product-hover">
                  <ul>
                    <li><a href="cart.html"><i class="icon-shopping-cart"></i></a></li>
                    <li><a data-bs-toggle="modal" data-bs-target="#exampleModalCenter14"><i class="icon-eye"></i></a></li>
                  </ul>
                </div>
              </div>
              <div class="modal fade" id="exampleModalCenter14" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter3" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <div class="product-box row">
                        <div class="product-img col-lg-6"><img class="img-fluid" src="../assets/images/pinguin.jpg" alt=""></div>
                        <div class="product-details col-lg-6 text-start"><a href="{{ route('game-page') }}" >
                            <h4>Игра</h4></a>
                          <div class="product-price">$38.00
                            <del>$45.00    </del>
                          </div>
                          <div class="product-view">
                            <h6 class="f-w-600">Product Details</h6>
                            <p class="mb-0">Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo.</p>
                          </div>
                          <div class="product-size">
                            <ul>
                              <li>
                                <button class="btn btn-outline-light" type="button">M</button>
                              </li>
                              <li>
                                <button class="btn btn-outline-light" type="button">L</button>
                              </li>
                              <li>
                                <button class="btn btn-outline-light" type="button">Xl</button>
                              </li>
                            </ul>
                          </div>
                          <div class="product-qnty">
                            <h6 class="f-w-600">Quantity</h6>
                            <fieldset>
                              <div class="input-group">
                                <input class="touchspin text-center" type="text" value="5">
                              </div>
                            </fieldset>
                            <div class="addcart-btn"><a class="btn btn-primary me-3" href="cart.html">Add to Cart</a><a class="btn btn-primary" href="{{ route('game-page') }}" >View Details</a></div>
                          </div>
                        </div>
                      </div>
                      <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"> </button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="product-details"><a href="{{ route('game-page') }}" >
                  <h4>Игра</h4></a>
                <p>Параграф про игру</p>
                <div class="product-price">$38.00
                  <del>$45.00 </del>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 xl-4">
          <div class="card">
            <div class="product-box">
              <div class="product-img"><img class="img-fluid" src="../assets/images/pinguin.jpg" alt="">
                <div class="product-hover">
                  <ul>
                    <li><a href="cart.html"><i class="icon-shopping-cart"></i></a></li>
                    <li><a data-bs-toggle="modal" data-bs-target="#exampleModalCenter15"><i class="icon-eye"></i></a></li>
                  </ul>
                </div>
              </div>
              <div class="modal fade" id="exampleModalCenter15">
                <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <div class="product-box row">
                        <div class="product-img col-lg-6"><img class="img-fluid" src="../assets/images/pinguin.jpg" alt=""></div>
                        <div class="product-details col-lg-6 text-start"><a href="{{ route('game-page') }}" >
                            <h4>Игра                                       </h4></a>
                          <div class="product-price">$26.00
                            <del>$35.00</del>
                          </div>
                          <div class="product-view">
                            <h6 class="f-w-600">Product Details</h6>
                            <p class="mb-0">Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo.</p>
                          </div>
                          <div class="product-size">
                            <ul>
                              <li>
                                <button class="btn btn-outline-light" type="button">M</button>
                              </li>
                              <li>
                                <button class="btn btn-outline-light" type="button">L</button>
                              </li>
                              <li>
                                <button class="btn btn-outline-light" type="button">Xl</button>
                              </li>
                            </ul>
                          </div>
                          <div class="product-qnty">
                            <h6 class="f-w-600">Quantity</h6>
                            <fieldset>
                              <div class="input-group">
                                <input class="touchspin text-center" type="text" value="5">
                              </div>
                            </fieldset>
                            <div class="addcart-btn"><a class="btn btn-primary me-3" href="cart.html">Add to Cart</a><a class="btn btn-primary" href="{{ route('game-page') }}" >View Details</a></div>
                          </div>
                        </div>
                      </div>
                      <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="product-details"><a href="{{ route('game-page') }}" >
                  <h4>Игра                                       </h4></a>
                <p>Solid Denim Jacket</p>
                <div class="product-price">$26.00
                  <del>$35.00</del>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Container-fluid Ends-->
