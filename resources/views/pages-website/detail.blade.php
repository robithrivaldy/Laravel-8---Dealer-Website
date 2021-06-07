@extends('layouts-website.default')

@section('content-website')


    <section>
        <div class="container ">
            <div class="row justify-content-center">
                <div class="col-12 pt-5 shadow-none ">
                    <div class="row">
                        <p class="text-muted">Home / Product / {{ $data_product->name }}</p>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="text-dark">$ {{ $data_product->price }}.00</h1>
                            <h3 class="text-muted">{{ $data_product->name }}</h3>

                        </div>
                        <div class="col-lg-8">

                            <img class="card-img-top mx-auto pt-5" id="preview" alt="Thumbnail [100%x225]"
                                src="{{ url($data_product->image1) }}" style="height: auto; width: 80%; display: block;">

                            <div class="justify-content-center text-center mt-5">
                                {{-- Image 1 --}}
                                @if ($data_product->image1 != '')
                                    <img onClick="document.getElementById('preview').src=document.getElementById('img1').src;"
                                        id="img1" src="{{ url($data_product->image1) }}" width="100"
                                        class="border rounded-1">
                                @else
                                    <img src="{{ url('products/dummy.png') }}" width="100" class="border rounded-1"
                                        onClick="document.getElementById('preview').src=document.getElementById('img1').src;"
                                        id="img1">
                                @endif

                                {{-- Image 2 --}}
                                @if ($data_product->image2 != '')
                                    <img onClick="document.getElementById('preview').src=document.getElementById('img2').src;"
                                        id="img2" src="{{ url($data_product->image2) }}" width="100"
                                        class="border rounded-1">
                                @endif

                                {{-- Image 3 --}}
                                @if ($data_product->image3 != '')
                                    <img onClick="document.getElementById('preview').src=document.getElementById('img3').src;"
                                        id="img3" src="{{ url($data_product->image3) }}" width="100"
                                        class="border rounded-1">

                                @endif

                                {{-- Image 4 --}}
                                @if ($data_product->image4 != '')
                                    <img onClick="document.getElementById('preview').src=document.getElementById('img4').src;"
                                        id="img4" src="{{ url($data_product->image4) }}" width="100"
                                        class="border rounded-1">

                                @endif
                            </div>


                            <div class="col-lg-12 p-3 mt-5 border rounded-3 ">
                                <h4>DETAIL </h4>
                                <hr>
                                <table class="table table-borderless">
                                    <tbody>
                                        <tr>
                                            <td><b>Brand</b></td>
                                            <td>{{ $data_product->brand->brand }}</td>
                                        </tr>
                                        <tr>
                                            <td><b>Body Style</b></td>
                                            <td>{{ $data_product->body->body }}</td>
                                        </tr>
                                        <tr>
                                            <td><b>Color</b></td>
                                            <td>{{ $data_product->color->color }}</td>
                                        </tr>

                                        <tr>
                                            <td><b>Fuel </b></td>
                                            <td>{{ $data_product->fuel->fuel }}</td>
                                        </tr>
                                        <tr>
                                            <td><b>Transmission</b></td>
                                            <td>{{ $data_product->transmission->transmission }}</td>
                                        </tr>
                                        <tr>
                                            <td><b>Engine Capacity</b></td>
                                            <td>{{ $data_product->engine_capacity }}cc</td>
                                        </tr>
                                        <tr>
                                            <td><b>Condition</b></td>
                                            <td>{{ $data_product->condition->condition }}</td>
                                        </tr>
                                        <tr>
                                            <td><b>Year Production</b></td>
                                            <td>{{ $data_product->year }}</td>
                                        </tr>
                                        <tr>
                                            <td><b>Mileage</b></td>
                                            <td>{{ $data_product->mileage }} KM</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-lg-12 p-3 border rounded-3 mt-3 ">
                                <h4>ABOUT</h4>
                                <hr>
                                <p>
                                    @php
                                        echo $data_product->description;
                                    @endphp
                                </p>

                            </div>

                        </div>
                        <div class="col-lg-4 h-100 p-3 border rounded-2 mt-5">
                            <h4 class="fs-5 pb-3">THE DEALER</h4>
                            <a href="#"
                                class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
                                <img class="bi me-2 rounded-5" src="{{ url($webimage) }}" width="100">
                                <span class="fs-5 text-muted">{{ $webname }}</span>
                            </a>
                            <p class="text-muted">
                                @php
                                    echo ucwords($webabout);
                                @endphp
                            <div class="img-maps mx-auto" width="90%" style="max-width:90%;">
                                @php
                                    echo ucwords($webgooglemaps);
                                @endphp
                            </div>

                            <a class="btn btn-warning col-lg-12 my-2 py-2 " href="#"><i class="bi bi-eye"></i> Visit
                                Dealer</a>
                            <a class="btn btn-success col-lg-12 my-2 py-2" href="#"><i class="bi bi-card-text"></i> Leave a
                                Message</a>

                        </div>

                    </div>

                </div>
            </div>
        </div>


        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-12 pt-2 shadow-none">
                    <div class="row">
                        <h2 class="pb-3">Similar Cars</h2>
                        @forelse ( $data_product_other as $item_product_other )

                            <div class="col-md-3 ">
                                <a href="{{ url('detail/' . $item_product_other->id) }}">
                                    <div class="card mb-4 box-shadow product-box">
                                        <div class="img-box">
                                            <img class="card-img-top photo-product" alt=""
                                                src="{{ url($item_product_other->image1) }}" data-holder-rendered="true">
                                        </div>
                                        <div class="card-body">
                                            <h5 class="text-dark pt-2">$ {{ $item_product_other->price }}.00</h5>
                                            <p class="card-text fw-bold">{{ $item_product_other->name }}</p>
                                            <p class="text-muted">{{ $item_product_other->brand->brand }}</p>
                                            <div class="d-flex justify-content-between align-items-center">

                                                <p>{{ $item_product_other->year }} -
                                                    {{ $item_product_other->transmission->transmission }}
                                                </p>

                                                <p class="text-muted">{{ $item_product_other->condition->condition }}</p>
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
            </div>
        </div>
    </section>


@endsection
