@extends('layouts-website.default')

@section('content-website')


    <section>
        <div class="container mt-5">
            <div class="row justify-content-center mt-5">
                <div class="col-12">
                    <div class="row">
                        <p>Home / {{ $title_brand->brand }} </p>
                    </div>
                    <div class="row">

                        <div class="col-lg-12">
                            <h4>Menampilkan Mobil Bekas Terbaru bulan Ini - 24 Hasil</h4>
                            <p> Menampilkan Mobil Bekas Terbaru bulan Ini - 24 Hasil</p>

                            <div class="row mt-5 text-dark ">
                                @forelse ( $data_brand as $item_product )

                                    <div class="col-lg-3">
                                        <a href="{{ url('detail/' . $item_product->id) }}">
                                            <div class="card mb-4 box-shadow product-box ">
                                                <div class="img-box">
                                                    <img class="card-img-top photo-product" alt=""
                                                        src="{{ url($item_product->image1) }}"
                                                        data-holder-rendered="true">
                                                </div>
                                                <div class="card-body">
                                                    <h5 class="text-dark pt-2">$ {{ $item_product->price }}.00</h5>
                                                    <p class="card-text fw-bold">{{ $item_product->name }}</p>
                                                    <p class="text-muted">{{ $item_product->brand->brand }}</p>
                                                    <div class="d-flex justify-content-between align-items-center">

                                                        <p>{{ $item_product->year }} -
                                                            {{ $item_product->transmission->transmission }}
                                                        </p>

                                                        <p class="text-muted">{{ $item_product->condition->condition }}
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>



                                @empty
                                    <p class="center">Data Empty</p>
                                @endforelse

                            </div>
                            <div class="row justify-content-center">
                                <a href="#" class="btn btn-outline-primary center">Muat Item Lainnya</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>





    </section>


@endsection
