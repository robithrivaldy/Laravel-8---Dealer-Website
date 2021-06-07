@extends('layouts-website.default')

@section('content-website')
    <div class="container brand">
        <div class="row mt-3">
            <p class="text-muted m-4">Home / Brands</p>
        </div>
        <div class="row justify-content-center info-panel-group">
            <div class="col-lg-10">
                <h1 class="display-5 fw-bold text-center text-dark ">Brand Dealer</h1>
                <div class="row">
                    @foreach ($data_brand as $item_brand)
                        <div class="col-sm-2 m-3 text-center info-panel">
                            <a href="{{ url('brands/show/' . $item_brand->id) }}">
                                <img src="{{ url($item_brand->image) }}" alt="Toyota">
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

@endsection
