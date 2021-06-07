@extends('layouts.default')

@section('content')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 ">
        <div
            class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Edit Your Dealer</h1>
            @if ($success = Session::get('Success'))
                <script>
                    alert('{{ $success }}')

                </script>

                {{ session::forget('Success') }}
            @endif
        </div>
        <form action="{{ url('m_dealer/update/' . $data_dealer->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            {{-- Input Product Dealer Name --}}
            <div class="form-group">
                <label for="model">
                    <h5>Dealer Name* </h5>
                </label>
                <input type="text" class="form-control" value="{{ old('name') ? old('name') : $data_dealer->name }}"
                    placeholder="Dealer Name" name="name" required>
            </div>

            {{-- Input Product Email --}}
            <div class="form-group">
                <label for="model">
                    <h5>Email* </h5>
                </label>
                <input type="text" class="form-control" value="{{ old('email') ? old('email') : $data_dealer->email }}"
                    placeholder="Email Dealer" name="email" required>
            </div>

            {{-- Input Product Model Name --}}
            <div class="form-group">
                <label for="model">
                    <h5>Phone Number* </h5>
                </label>
                <input type="text" class="form-control"
                    value="{{ old('phonenumber') ? old('phonenumber') : $data_dealer->phonenumber }}"
                    placeholder="Phone Number Dealer" name="phonenumber" required>
            </div>

            {{-- Input Product Model Name --}}
            <div class="form-group">
                <label for="model">
                    <h5>Address* </h5>
                </label>
                <input type="text" class="form-control"
                    value="{{ old('address') ? old('address') : $data_dealer->address }}" placeholder="Address Dealer"
                    name="address" required>
            </div>

            {{-- Description Product --}}

            <div class="form-group">
                <label for="Description">
                    <h5>About Dealer*</h5>
                </label>
                <textarea class="form-control" rows="12" name="about"
                    required>{{ old('about') ? old('about') : $data_dealer->about }}</textarea>
            </div>

            {{-- Input Product Model Name --}}
            <div class="form-group mt-5">
                <label for="model">
                    <h5>Iframe Goole Maps* </h5><br>
                    <p class="muted"><i class="bi bi-info-circle-fill"></i> You can copy iframe googlemaps from google maps
                    </p>
                </label>
                <input type="text" class="form-control"
                    value="{{ old('googlemaps') ? old('googlemaps') : $data_dealer->googlemaps }}"
                    placeholder="Address Dealer" name="googlemaps" required>
            </div>


            {{-- Image Product --}}
            <div class="form-group mt-5">
                <label for="Description">
                    <h5>Photo Dealer* </h5>
                </label><br>

                <i class="bi bi-x-circle-fill " id="deleteimage1"></i>
                <img src="{{ url('products/dummy.png') }}" class="m-2 border shadow rounded" id="image1" width="150">

                <p class="mt-3"><i><i class="bi bi-info-circle-fill"></i> Click Image To Edit</i></p>

                <input type="hidden" name="isdeleteimage1" id="isdeleteimage1" value="0">

                <input type="file" class="form-control d-none input-image1" name="image" accept="image/*"
                    onchange="document.getElementById('image1').src = window.URL.createObjectURL(this.files[0])">

                @error('isdeleteimage1') <i style="color:red"> Image cannot empty image {{ $message }} </i><br>
                @enderror

            </div>


            <div class="form-group">
                <button type="submit" class="btn btn-primary">Edit Dealer</button>
            </div>
        </form>
    </main>
@endsection

@push('after-style')
    <style type="text/css">
        #deleteimage1 {
            position: absolute;
        }

        #image1:hover,
        #deleteimage1:hover {
            cursor: pointer;

        }

    </style>
@endpush

@push('after-script')
    <script>
        $(document).ready(function() {
            $("#deleteimage1").toggle();

            // Event when image-thumbnail clicked
            $('#image1').click(function() {
                $('.input-image1').click();
            });

            // Event when input file image is changed or filled
            $('.input-image1').change(function() {
                $('#deleteimage1').show();
                $('#isdeleteimage1').val(0);
            });

            // Event when delete icon was clicked
            $('#deleteimage1').click(function() {
                $('#image1').attr('src', '../../products/dummy.png');
                $('.input-image1').val('');
                $(this).hide();
                $('#isdeleteimage1').val(1);
            });


        });

    </script>

    @if ($data_dealer->image != '')
        <script>
            $(document).ready(function() {
                $("#image1").attr("src", "{{ url($data_dealer->image) }}");
                $("#deleteimage1").show();
            });

        </script>
    @endif

@endpush
