@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                <section style="background-color: #eee;">
                    <div class="text-center container py-5">
                      <h4 class="mt-4 mb-5"><strong>Bestsellers</strong></h4>

                      <div class="row">
                        <div class="col-lg-4 col-md-12 mb-4">
                          <div class="card">
                            <div class="bg-image hover-zoom ripple ripple-surface ripple-surface-light"
                              data-mdb-ripple-color="light">
                              <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Products/belt.webp"
                                class="w-100" />
                              <a href="#!">
                                <div class="mask">
                                  <div class="d-flex justify-content-start align-items-end h-100">
                                    <h5><span class="badge bg-primary ms-2">New</span></h5>
                                  </div>
                                </div>
                                <div class="hover-overlay">
                                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                </div>
                              </a>
                            </div>
                            <div class="card-body">
                              <a href="" class="text-reset">
                                <h5 class="card-title mb-3">Product name here</h5>
                              </a>

                              <button type="button" id="update-cart" class="btn btn-primary">Add to Cart</button> <button type="button" class="btn btn-info">Buy Now</button>
                            </a>
                            <h6 class="mb-3 mt-2">
                           $61.99</h6>
                            </div>
                          </div>
                        </div>

                        <div class="col-lg-4 col-md-6 mb-4">
                          <div class="card">
                            <div class="bg-image hover-zoom ripple ripple-surface ripple-surface-light"
                              data-mdb-ripple-color="light">
                              <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Products/img%20(4).webp"
                                class="w-100" />
                              <a href="#!">
                                <div class="mask">
                                  <div class="d-flex justify-content-start align-items-end h-100">
                                    <h5><span class="badge bg-success ms-2">Ecom</span></h5>
                                  </div>
                                </div>
                                <div class="hover-overlay">
                                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                </div>
                              </a>
                            </div>
                            <div class="card-body">
                              <a href="" class="text-reset">
                                <h5 class="card-title mb-3">Product Title</h5>
                              </a>
                              <button type="button" class="btn btn-primary">Add to Cart</button> <button type="button" class="btn btn-info">Buy Now</button>
                            </a>
                            <h6 class="mb-3 mt-2">
                           $61.99</h6>
                            </div>
                          </div>
                        </div>

                        <div class="col-lg-4 col-md-6 mb-4">
                          <div class="card">
                            <div class="bg-image hover-zoom ripple" data-mdb-ripple-color="light">
                              <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Products/shoes%20(3).webp"
                                class="w-100" />
                              <a href="#!">
                                <div class="mask">
                                  <div class="d-flex justify-content-start align-items-end h-100">
                                    <h5><span class="badge bg-danger ms-2">-10%</span></h5>
                                  </div>
                                </div>
                                <div class="hover-overlay">
                                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                </div>
                              </a>
                            </div>
                            <div class="card-body">
                              <a href="" class="text-reset">
                                <h5 class="card-title mb-3">Product name</h5>
                              </a>
                              <button type="button" class="btn btn-primary">Add to Cart</button> <button type="button" class="btn btn-info">Buy Now</button>
                            </a>
                            <h6 class="mb-3 mt-2">
                                  <s>$61.99</s><strong class="ms-2 text-danger">$50.99</strong>
                              </h6>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-lg-4 col-md-12 mb-4">
                          <div class="card">
                            <div class="bg-image hover-zoom ripple" data-mdb-ripple-color="light">
                              <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Products/img%20(23).webp"
                                class="w-100" />
                              <a href="#!">
                                <div class="mask">
                                  <div class="d-flex justify-content-start align-items-end h-100">
                                    <h5>
                                      <span class="badge bg-success ms-2">Eco</span><span
                                        class="badge bg-danger ms-2">-10%</span>
                                    </h5>
                                  </div>
                                </div>
                                <div class="hover-overlay">
                                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                </div>
                              </a>
                            </div>
                            <div class="card-body">
                              <a href="" class="text-reset">
                                <h5 class="card-title mb-3">Product name</h5>
                              </a>
                              <button type="button" class="btn btn-primary">Add to Cart</button> <button type="button" class="btn btn-info">Buy Now</button>
                            </a>
                            <h6 class="mb-3 mt-2">
                                <s>$61.99</s><strong class="ms-2 text-danger">$50.99</strong>
                              </h6>
                            </div>
                          </div>
                        </div>

                        <div class="col-lg-4 col-md-6 mb-4">
                          <div class="card">
                            <div class="bg-image hover-zoom ripple ripple-surface ripple-surface-light"
                              data-mdb-ripple-color="light">
                              <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Products/img%20(17).webp"
                                class="w-100" />
                              <a href="#!">
                                <div class="mask">
                                  <div class="d-flex justify-content-start align-items-end h-100"></div>
                                </div>
                                <div class="hover-overlay">
                                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                </div>
                              </a>
                            </div>
                            <div class="card-body">
                              <a href="" class="text-reset">
                                <h5 class="card-title mb-3">Product name</h5>
                              </a>
                              <button type="button" class="btn btn-primary">Add to Cart</button> <button type="button" class="btn btn-info">Buy Now</button>
                            </a>
                            <h6 class="mb-3 mt-2">
                                <s>$61.99</s><strong class="ms-2 text-danger">$50.99</strong>
                            </h6>
                            </div>
                          </div>
                        </div>

                        <div class="col-lg-4 col-md-6 mb-4">
                          <div class="card">
                            <div class="bg-image hover-zoom ripple" data-mdb-ripple-color="light">
                              <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Products/img%20(30).webp"
                                class="w-100" />
                              <a href="#!">
                                <div class="mask">
                                  <div class="d-flex justify-content-start align-items-end h-100">
                                    <h5>
                                      <span class="badge bg-primary ms-2">New</span><span
                                        class="badge bg-success ms-2">Eco</span><span class="badge bg-danger ms-2">-10%</span>
                                    </h5>
                                  </div>
                                </div>
                                <div class="hover-overlay">
                                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                </div>
                              </a>
                            </div>
                            <div class="card-body">
                              <a href="" class="text-reset">
                                <h5 class="card-title mb-3">Product name</h5>
                              </a>
                              <a href="" class="text-reset">
                                <button type="button" class="btn btn-primary" id="update-cart">Add to Cart</button> <button type="button" class="btn btn-info">Buy Now</button>
                              </a>
                              <h6 class="mb-3 mt-2">
                                <s>$61.99</s><strong class="ms-2 text-danger">$50.99</strong>
                              </h6>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </section>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
