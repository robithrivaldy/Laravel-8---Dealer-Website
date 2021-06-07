@extends('layouts-website.default')

@section('content-website')
    @push('after-content-website')
        <style>
            .jumbotron {
                background-image: url("assets/img/jumbotron.jpeg");
                background-size: inherit;
                height: 670px;

            }

        </style>
    @endpush
    <section>
        <div class="jumbotron jumbotron-fluid pb-5">
            <div class="container pt-5">
                <div class="row text-center pt-5">
                    <div class="col-lg-6 m-auto mt-5 pt-5">
                        <h1 class="display-5 fw-bold text-white">Find Your Dream Car!</h1>
                        <p class="mt-4 text-white fw-600">Temukan mobil impianmu di belimobilkuy banyak promo tawaran yang
                            menarik proses cepat dan mudah</p>
                        <div class="mt-5">
                            <a href="#offer" class="btn btn-warning rounded-3 p-2 me-3 font-18">What's New</a>
                            <a href="{{ url('dealers') }}" class="btn btn-success rounded-3 p-2 font-18">Visit Dealer</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="container brand">
            <div class="row justify-content-center info-panel-group">
                <div class="col-lg-10">
                    <h1 class="display-5 fw-bold text-center text-dark mt-5 mb-5">Brand Dealer</h1>
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


        <div class="container mb-4" id="offer">
            <div class="row mt-5 text-dark ">

                <h1 class="display-5 fw-bold text-center text-dark mt-5">Special Offer</h1>

                <div class="col-lg-6 my-auto text-center mt-3">
                    <img src="assets/img/promo.png" class="mt-5" width="400">
                </div>
                <div class="col-lg-6 mt-3">
                    <h3 class="text-dark mt-5">Innova Venturer 2.4 AT</h3>
                    <p class="text-dark mt-4">
                        <li> DP cuma 10% </li>
                        <li> Dapat Hadiah menarik</li>
                        <li> Dapat CAshback</li>
                        <li> Free Antar Mobil</li>
                        <li> Angsuran Mudah</li>
                        <li> Klaim Asuransi Mudah</li>
                        <li> Berlaku Hingga 20 Mei 2021</li>
                    </p>

                    <button class="btn bg-brown text-white mt-4 mb-4" type="submit">Selengkapnya</button>

                </div>
            </div>
        </div>

        <div class="container">
            <h1 class="display-5 fw-bold text-center text-dark mt-5">New Cars</h1>
            <div class="row mt-5 text-dark ">
                @forelse ( $data_product as $item_product )

                    <div class="col-lg-3">
                        <a href="{{ url('detail/' . $item_product->id) }}">
                            <div class="card mb-4 box-shadow product-box ">
                                <div class="img-box">
                                    <img class="card-img-top photo-product" alt="" src="{{ $item_product->image1 }}"
                                        data-holder-rendered="true">
                                </div>
                                <div class="card-body">
                                    <h5 class="text-dark pt-2">$ {{ $item_product->price }}.00</h5>
                                    <p class="card-text fw-bold">{{ $item_product->name }}</p>
                                    <p class="text-muted">{{ $item_product->brand->brand }}</p>
                                    <div class="d-flex justify-content-between align-items-center">

                                        <p>{{ $item_product->year }} - {{ $item_product->transmission->transmission }}
                                        </p>

                                        <p class="text-muted">{{ $item_product->condition->condition }}</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>



                @empty
                    <p class="center">Data Empty</p>
                @endforelse

            </div>

        </div>

        <div class="container">
            <div class="row mt-5 text-dark text-center">
                <h1 class="mt-5">Request a Vechiles ?</h1>
                <div class="col-lg-6 m-auto mt-2">
                    <p class="text-dark">We can help you to find your car</p>

                    <a href="{{ url('contact') }}" class="btn  btn-outline-secondary p-3" style="border-radius:5px;"
                        type="submit"><i class="bi bi-envelope-fill"></i> Request Vechiles Now</a>

                </div>
            </div>
        </div>
    </section>
@endsection
