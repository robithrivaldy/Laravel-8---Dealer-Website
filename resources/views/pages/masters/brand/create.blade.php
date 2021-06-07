@extends('layouts.default')

@section('content')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 ">
        <div
            class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Add Brand</h1>
        </div>
        <form action="{{ url('brand/store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="exampleFormControlInput1">Brand Name</label>
                <input type="text" name="brand" class="form-control" placeholder="Ex. Toyota Honda Lexus BMW" required>
                @error('brand') <i style="color:red"> {{ $message }} </i><br> @enderror

            </div>
            <div class="form-group">
                <i class="bi bi-x-circle-fill " id="deleteimage1"></i>
                <img src="{{ url('brand/dummy.png') }}" class="m-2 border shadow rounded" id="image1" width="150">
                <p class="mt-3"><i>Note : Click Image To Edit</i></p>
                <input type="file" class="form-control d-none input-image1" name="image" accept="image/*"
                    onchange="document.getElementById('image1').src = window.URL.createObjectURL(this.files[0])">

                @error('image') <i style="color:red"> {{ $message }} </i><br> @enderror

            </div>
            <div class="form-group">
                <a href="{{ url('master/brand') }}" class="btn btn-warning">Back</a>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </main>
@endsection

@push('after-style')
    <style>
        #deleteimage1 {
            position: absolute;
            padding-left: -200px;
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
            });


            // Event when delete icon was clicked
            $('#deleteimage1').click(function() {
                $('#image1').attr('src', '../../products/dummy.png');
                $('.input-image1').val('');
                $(this).hide();
            });


        });

    </script>
@endpush
