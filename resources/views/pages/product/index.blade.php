@extends('layouts.default')

@section('content')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 ">
        <div
            class=" d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3
                                                                                                                                                                                                                                                                                                                border-bottom">
            <h1 class="h2">Product</h1>

        </div>

        <a href="{{ url('product/create') }}" class="btn btn-primary mb-3"><i class="bi bi-plus"></i> Create Product</a>
        @if ($success = Session::get('Success'))
            <script>
                alert('{{ $success }}')

            </script>

            {{ session::forget('Success') }}
        @endif
        <div class="table-responsive">
            <table class="table table-striped table-sm">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Brand</th>
                        <th>Engine</th>
                        <th>Condition</th>
                        <th>ACtion</th>
                    </tr>
                </thead>
                <tbody>

                    @php
                        $i = 1;
                    @endphp
                    @forelse ($data_product as $item_product)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $item_product->name }}<br>
                                @if ($item_product->image1 != '')
                                    <img src="{{ $item_product->image1 }}" class="img-thumbnail" width="90">
                                @else
                                    <img src="products/dummy.png" class="img-thumbnail" width="90">
                                @endif

                            </td>
                            <td>{{ $item_product->brand->brand }} ({{ $item_product->body->body }})<br>
                                {{ $item_product->color->color }}
                            </td>

                            <td>
                                {{ $item_product->engine_capacity }} CC <br>
                                {{ $item_product->fuel->fuel }} <br>
                                {{ $item_product->transmission->transmission }}
                            </td>
                            <td>
                                {{ $item_product->condition->condition }}<br>
                                @if ($item_product->mileage > 0)
                                    {{ $item_product->mileage }} Km
                                @endif
                            </td>
                            <td><a href="{{ url('product/edit/' . $item_product->id) }}" class="btn btn-warning"><i
                                        class="bi bi-pencil"></i>
                                    Edit</a>
                                <a href="{{ url('product/destroy/' . $item_product->id) }}"
                                    onClick="return confirm_delete()" class=" btn btn-danger"><i class="bi bi-trash"></i>
                                    Delete</a>


                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6">
                                <center>Data Empty</center>
                            </td>

                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </main>
@endsection
