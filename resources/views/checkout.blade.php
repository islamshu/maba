﻿@extends('adminlayout')
@section('content')

    <div class="container" style="margin-top:100px">
        <div class="py-5 text-center">
            <i class="material-icons"> add_shopping_cart </i>
            <h2>Checkout</h2>
        </div>

        <div class="row">
            <div class="col-md-4 order-md-2 mb-4">
                <h4 class="d-flex justify-content-between align-items-center mb-3">
                    <span class="text-muted">Your cart</span>
                    <span class="badge badge-secondary badge-pill">{{$totalcount}}</span>
                </h4>
                <ul class="list-group mb-3">
                    @foreach ($carts as $cart)
                    <li class="list-group-item d-flex justify-content-between lh-condensed"
                    *ngFor="let c of cart">
                    <div>
                        <h6 class="my-0">{{$cart->name}}</h6>
                        <small class="text-muted">{{$cart->subtitle}}</small>
                    </div>
                    <span class="text-muted"> Count({{$cart->pivot->count}})</span>
                    <span class="text-muted"> {{$cart->price}}$ </span>
                </li>

                    @endforeach


                <li class="list-group-item d-flex justify-content-between">
                    <span>Total (USD)</span> <strong>{{$total}}$</strong>
                </li>
                </ul>
            </div>
            <div class="col-md-8 order-md-1">
                <h4 class="mb-3">Billing address</h4>
                <form class="needs-validation" novalidate="">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="firstName">First name</label>
                            <input type="text"
                                   class="form-control"
                                   id="firstName"
                                   placeholder=""
                                   value=""
                                   required="" />
                            <div class="invalid-feedback">
                                Valid first name is required.
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="lastName">Last name</label>
                            <input type="text"
                                   class="form-control"
                                   id="lastName"
                                   placeholder=""
                                   value=""
                                   required="" />
                            <div class="invalid-feedback">Valid last name is required.</div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="email">Email<span class="text-muted">(Optional)</span></label>
                        <input type="email"
                               class="form-control"
                               id="email"
                               placeholder="you@example.com" />
                        <div class="invalid-feedback">
                            Please enter a valid email address for shipping updates.
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="address">Address</label>
                        <input type="text"
                               class="form-control"
                               id="address"
                               placeholder="1234 Main St"
                               required="" />
                        <div class="invalid-feedback">
                            Please enter your shipping address.
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="address2">Address 2<span class="text-muted">(Optional)</span></label>
                        <input type="text"
                               class="form-control"
                               id="address2"
                               placeholder="Apartment or suite" />
                    </div>

                    <div class="row">
                        <div class="col-md-5 mb-3">
                            <label for="country">Country</label>
                            <select class="custom-select d-block w-100"
                                    id="country"
                                    required="">
                                <option value="">Choose...</option>
                                <option>Palestine</option>
                            </select>
                            <div class="invalid-feedback">
                                Please select a valid country.
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="state">State</label>
                            <select class="custom-select d-block w-100"
                                    id="state"
                                    required="">
                                <option value="">Choose...</option>
                                <option>Gaza</option>
                            </select>
                            <div class="invalid-feedback">
                                Please provide a valid state.
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="zip">Zip</label>
                            <input type="text"
                                   class="form-control"
                                   id="zip"
                                   placeholder=""
                                   required="" />
                            <div class="invalid-feedback">Zip code required.</div>
                        </div>
                    </div>
                    <hr class="mb-4" />

                    <h4 class="mb-3">Payment</h4>

                    <div class="d-block my-3">
                        <div class="custom-control custom-radio">
                            <input id="credit"
                                   name="paymentMethod"
                                   type="radio"
                                   class="custom-control-input"
                                   checked=""
                                   required="" />
                            <label class="custom-control-label" for="credit">Credit card</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input id="debit"
                                   name="paymentMethod"
                                   type="radio"
                                   class="custom-control-input"
                                   required="" />
                            <label class="custom-control-label" for="debit">Debit card</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input id="paypal"
                                   name="paymentMethod"
                                   type="radio"
                                   class="custom-control-input"
                                   required="" />
                            <label class="custom-control-label" for="paypal">PayPal</label>
                        </div>
                    </div>
                    <hr class="mb-4" />
                    <button class="btn btn-primary btn-lg btn-block" type="submit">
                        Continue to checkout
                    </button>
                </form>
            </div>
        </div>
        <footer class="my-5 pt-5 text-muted text-center text-small">
            <p class="mb-1">© 2017-2018 Maba</p>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="#">Privacy</a></li>
                <li class="list-inline-item"><a href="#">Terms</a></li>
                <li class="list-inline-item"><a href="#">Support</a></li>
            </ul>
        </footer>
    </div>
@endsection
