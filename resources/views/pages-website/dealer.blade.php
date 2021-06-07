@extends('layouts-website.default')

@section('content-website')
    <div class="container mt-3">
        <div class="row">
            <p class="text-muted m-4">Home / Dealers</p>
        </div>
        <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg">
            <div class="col-lg-7 p-3 p-lg-5 pt-lg-3">
                <h1 class="display-4 fw-bold lh-1">{{ $data_dealer->name }}</h1>
                <p class="lead mt-5 mb-5">
                    @php
                        echo $data_dealer->about;
                    @endphp

                </p>
                <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-4 mb-lg-3">
                    <a href="{{ url('contact') }}" class="btn btn-primary btn-lg px-4 me-md-2 fw-bold"> <i
                            class="bi bi-envelope-fill"></i> Leave a Message</a>

                </div>
            </div>
            <div class="col-lg-4 offset-lg-1 p-0 overflow-hidden shadow-lg">
                <img class="rounded-lg-3" src="{{ $data_dealer->image }}" alt="" width="720">
            </div>

        </div>

        <div class="px-4 pt-5 my-5 text-center border-bottom">
            <h1 class="display-4 fw-bold">Find on Google Maps</h1>
            @php
                echo $data_dealer->googlemaps;
            @endphp
        </div>

    </div>
@endsection
