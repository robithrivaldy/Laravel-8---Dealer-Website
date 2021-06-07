@extends('layouts.default')

@section('content')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 ">
        <div
            class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Edit Product</h1>
        </div>
        <form action="{{ url('product/update/' . $data_product->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            {{-- Input Product Model Name --}}
            <div class="form-group">
                <label for="model">
                    <h5>Product Name* </h5>
                </label>
                <input type="text" class="form-control" value="{{ old('name') ? old('name') : $data_product->name }}"
                    placeholder="Your product name" name="name" required>
            </div>

            {{-- Price --}}
            <div class="form-group">
                <label for="price">
                    <h5>Price <b>($)</b>*</h5>
                </label>
                <input type="number" class="form-control" value="{{ old('price') ? old('price') : $data_product->price }}"
                    placeholder="ex. 30000" name="price" required>

            </div>

            {{-- Description Product --}}

            <div class="form-group">
                <label for="Description">
                    <h5>Description*</h5>
                </label>
                <textarea class="form-control" rows="12" name="description"
                    rquired>{{ old('description') ? old('description') : $data_product->description }}</textarea>
            </div>

            {{-- Image Product --}}
            <div class="form-group">
                <label for="Description">
                    <h5>Image Product* </h5>
                </label><br>

                <i class="bi bi-x-circle-fill " id="deleteimage1"></i>
                <img src="{{ url('products/dummy.png') }}" class="m-2 border shadow rounded" id="image1" width="150">
                <i class="bi bi-x-circle-fill " id="deleteimage2"></i>
                <img src="{{ url('products/dummy.png') }}" class="m-2 border shadow rounded" id="image2" width="150">
                <i class="bi bi-x-circle-fill " id="deleteimage3"></i>
                <img src="{{ url('products/dummy.png') }}" class="m-2 border shadow rounded" id="image3" width="150">
                <i class="bi bi-x-circle-fill " id="deleteimage4"></i>
                <img src="{{ url('products/dummy.png') }}" class="m-2 border shadow rounded" id="image4" width="150">

                <p class="mt-3"><i>Note : Click Image To Edit</i></p>

                <input type="hidden" name="isdeleteimage1" id="isdeleteimage1" value="0">
                <input type="hidden" name="isdeleteimage2" id="isdeleteimage2" value="0">
                <input type="hidden" name="isdeleteimage3" id="isdeleteimage3" value="0">
                <input type="hidden" name="isdeleteimage4" id="isdeleteimage4" value="0">

                <input type="file" class="form-control d-none input-image1" name="image1" accept="image/*"
                    onchange="document.getElementById('image1').src = window.URL.createObjectURL(this.files[0])">
                <input type="file" class="form-control d-none input-image2" name="image2" accept="image/*"
                    onchange="document.getElementById('image2').src = window.URL.createObjectURL(this.files[0])">
                <input type="file" class="form-control d-none input-image3" name="image3" accept="image/*"
                    onchange="document.getElementById('image3').src = window.URL.createObjectURL(this.files[0])">
                <input type="file" class="form-control d-none input-image4" name="image4" accept="image/*"
                    onchange="document.getElementById('image4').src = window.URL.createObjectURL(this.files[0])">

                @error('isdeleteimage1') <i style="color:red"> Image 1 cannot empty image {{ $message }} </i><br>
                @enderror
                @error('image1') <i style="color:red"> {{ $message }} </i><br> @enderror
                @error('image2') <i style="color:red"> {{ $message }} </i><br> @enderror
                @error('image3') <i style="color:red"> {{ $message }} </i><br> @enderror
                @error('image4') <i style="color:red"> {{ $message }} </i><br> @enderror

            </div>

            <div
                class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-5 pb-2 mb-3 border-bottom">
                <h1 class="h2">Detail Product</h1>
            </div>

            {{-- Select Brand --}}
            <div class="form-group">
                <label for="brand">
                    <h5>Brand</h5>
                </label>
                <select class="form-select" name="brand_id" id="brand_id">
                    @foreach ($data_brand as $item_brand)
                        <option value="{{ $item_brand->id }}">{{ $item_brand->brand }}</option>
                    @endforeach
                </select>
            </div>

            {{-- Select Body --}}
            <div class="form-group">
                <label for="body">
                    <h5>Body Style</h5>
                </label>
                <select class="form-select " name="body_id" id="body_id">
                    @foreach ($data_body as $item_body)
                        <option value="{{ $item_body->id }}">{{ $item_body->body }}</option>
                    @endforeach
                </select>
            </div>

            {{-- Select Color --}}
            <div class="form-group">
                <label for="color">
                    <h5>Color</h5>
                </label>
                <select class="form-select" name="color_id" id="color_id">
                    @foreach ($data_color as $item_color)
                        <option value="{{ $item_color->id }}">{{ $item_color->color }}</option>
                    @endforeach
                </select>
            </div>

            {{-- Select Fuel --}}
            <div class="form-group">
                <label for="fuel">
                    <h5>Fuel</h5>
                </label>
                <select class="form-select" name="fuel_id" id="fuel_id">
                    @foreach ($data_fuel as $item_fuel)
                        <option value="{{ $item_fuel->id }}">{{ $item_fuel->fuel }}</option>
                    @endforeach
                </select>
            </div>

            {{-- Select Transmission --}}
            <div class="form-group">
                <label for="transmission">
                    <h5>Transmission</h5>
                </label>
                <select class="form-select" name="transmission_id" id="transmission_id">
                    @foreach ($data_transmission as $item_transmission)
                        <option value="{{ $item_transmission->id }}">{{ $item_transmission->transmission }}
                        </option>
                    @endforeach
                </select>
            </div>

            {{-- Select Condition --}}
            <div class="form-group">
                <label for="condition">
                    <h5>Condition</h5>
                </label><br>
                <select class="form-select" name="condition_id" id="condition_id">
                    @foreach ($data_condition as $item_condition)
                        <option value="{{ $item_condition->id }}">{{ $item_condition->condition }}</option>
                    @endforeach
                </select>
            </div>
            {{-- Millage --}}
            <div class="form-group">
                <label for="millage">
                    <h5>Millage(Km)</h5>
                </label>
                <input type="number" class="form-control"
                    value="{{ old('mileage') ? old('mileage') : $data_product->mileage }}" placeholder="ex. 10000"
                    name="mileage">
            </div>

            <div class="form-group">
                <label for="year">
                    <h5>Production Year*</h5>
                </label>
                <input type="number" class="form-control" value="{{ old('year') ? old('year') : $data_product->year }}"
                    placeholder="ex. 2021" name="year" required>
            </div>

            <div class="form-group">
                <label for="engine">
                    <h5>Engine Capacity (CC)*</h5>
                </label>
                <input type="number" class="form-control"
                    value="{{ old('engine_capacity') ? old('engine_capacity') : $data_product->engine_capacity }}"
                    placeholder="ex. 2000" name="engine_capacity" required>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Upload Product</button>
            </div>
        </form>
    </main>
@endsection

@push('after-style')
    <style type="text/css">
        #deleteimage1,
        #deleteimage2,
        #deleteimage3,
        #deleteimage4 {
            position: absolute;
        }


        #image1:hover,
        #image2:hover,
        #image3:hover,
        #image4:hover,
        #deleteimage1:hover,
        #deleteimage2:hover,
        #deleteimage3:hover,
        #deleteimage4:hover {
            cursor: pointer;

        }

    </style>
@endpush

@push('after-script')
    <script>
        $(document).ready(function() {
            $("#deleteimage1").toggle();
            $("#deleteimage2").toggle();
            $("#deleteimage3").toggle();
            $("#deleteimage4").toggle();

            // Event when image-thumbnail clicked
            $('#image1').click(function() {
                $('.input-image1').click();
            });
            $('#image2').click(function() {
                $('.input-image2').click();
            });
            $('#image3').click(function() {
                $('.input-image3').click();
            });
            $('#image4').click(function() {
                $('.input-image4').click();
            });

            // Event when input file image is changed or filled
            $('.input-image1').change(function() {
                $('#deleteimage1').show();
                $('#isdeleteimage1').val(0);
            });

            $('.input-image2').change(function() {
                $('#deleteimage2').show();
                $('#isdeleteimage2').val(0);
            });

            $('.input-image3').change(function() {
                $('#deleteimage3').show();
                $('#isdeleteimage3').val(0);
            });

            $('.input-image4').change(function() {
                $('#deleteimage4').show();
                $('#isdeleteimage4').val(0);
            });

            // Event when delete icon was clicked
            $('#deleteimage1').click(function() {
                $('#image1').attr('src', '../../products/dummy.png');
                $('.input-image1').val('');
                $(this).hide();
                $('#isdeleteimage1').val(1);
            });

            $('#deleteimage2').click(function() {
                $('#image2').attr('src', '../../products/dummy.png');
                $('.input-image2').val('');
                $(this).hide();
                $('#isdeleteimage2').val(1);
            });

            $('#deleteimage3').click(function() {
                $('#image3').attr('src', '../../products/dummy.png');
                $('.input-image3').val('');
                $(this).hide();
                $('#isdeleteimage3').val(1);
            });

            $('#deleteimage4').click(function() {
                $('#image4').attr('src', '../../products/dummy.png');
                $('.input-image4').val('');
                $(this).hide();
                $('#isdeleteimage4').val(1);
            });

            $("#brand_id").val('{{ $data_product->brand_id }}');
            $("#body_id").val('{{ $data_product->body_id }}');
            $("#color_id").val('{{ $data_product->color_id }}');
            $("#fuel_id").val('{{ $data_product->fuel_id }}');
            $("#transmission_id").val('{{ $data_product->transmission_id }}');
            $("#condition_id").val('{{ $data_product->condition_id }}');

        });

    </script>

    @if ($data_product->image1 != '')
        <script>
            $(document).ready(function() {
                $("#image1").attr("src", "{{ url($data_product->image1) }}");
                $("#deleteimage1").show();
            });

        </script>
    @endif

    @if ($data_product->image2 != '')
        <script>
            $(document).ready(function() {
                $("#image2").attr("src", "{{ url($data_product->image2) }}");
                $("#deleteimage2").show();
            });

        </script>
    @endif

    @if ($data_product->image3 != '')
        <script>
            $(document).ready(function() {
                $("#image3").attr("src", "{{ url($data_product->image3) }}");
                $('#deleteimage3').show();
            });

        </script>
    @endif

    @if ($data_product->image4 != '')
        <script>
            $(document).ready(function() {
                $("#image4").attr("src", "{{ url($data_product->image4) }}");
                $('#deleteimage4').show();
            });

        </script>
    @endif
@endpush
