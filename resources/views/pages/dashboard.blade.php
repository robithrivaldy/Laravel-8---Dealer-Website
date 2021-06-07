@extends('layouts.default')

@section('content')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 ">
        <div
            class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Dashboard</h1>

        </div>

        <div class="row">
            <div class="col-md-3">
                <div class="h-100 p-5 text-white bg-dark rounded-3">
                    <h2>Product</h2>
                    <a href="{{ url('product') }}" class="btn btn-outline-light" type="button">
                        <h1 class="bi bi-cart-fill"> 25</h1>
                    </a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="h-100 p-5 text-white btn-warning rounded-3">
                    <h2>Messsage</h2>
                    <a href="{{ url('message') }}" class="btn btn-outline-light" type="button">
                        <h1 class="bi bi-chat-left"> 27</h1>
                    </a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="h-100 p-5 text-white btn-info rounded-3">
                    <h2>Customer</h2>
                    <a href="{{ url('customer') }}" class="btn btn-outline-light" type="button">
                        <h1 class="bi bi-person-fill"> 27</h1>
                    </a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="h-100 p-5 text-white btn-danger rounded-3">
                    <h2>Request</h2>

                    <a href="{{ url('request') }}" class="btn btn-outline-light" type="button">
                        <h1 class="bi bi-bell"> 27</h1>
                    </a>
                </div>
            </div>
        </div>
    </main>
@endsection
