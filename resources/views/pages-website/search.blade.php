@extends('layouts-website.default')

@section('content-website')


    <section>
        <div class="container mt-5">
            <div class="row justify-content-center mt-5">
                <div class="col-12">
                    <div class="row">
                        <p>Home / Search / {{ $search }} </p>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <h4>Menampilkan hasil pencarian '{{ $search }}'' </h4>

                            <div class="row mt-5 text-dark ">
                                @forelse ( $data_search as $item_search )

                                    <div class="col-lg-3">
                                        <a href="{{ url('detail/' . $item_search->id) }}">
                                            <div class="card mb-4 box-shadow search-box ">
                                                <div class="img-box">
                                                    <img class="card-img-top photo-search" alt=""
                                                        src="{{ url($item_search->image1) }}" data-holder-rendered="true">
                                                </div>
                                                <div class="card-body">
                                                    <h5 class="text-dark pt-2">$ {{ $item_search->price }}.00</h5>
                                                    <p class="card-text fw-bold">{{ $item_search->name }}</p>
                                                    <p class="text-muted">{{ $item_search->brand->brand }}</p>
                                                    <div class="d-flex justify-content-between align-items-center">

                                                        <p>{{ $item_search->year }} -
                                                            {{ $item_search->transmission->transmission }}
                                                        </p>

                                                        <p class="text-muted">{{ $item_search->condition->condition }}
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
