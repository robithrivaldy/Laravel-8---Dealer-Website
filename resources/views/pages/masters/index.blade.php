@extends('layouts.default')

@section('content')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 ">
        <div
            class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Master Data </h1>
            @if ($success = Session::get('Success'))
                <script>
                    alert('{{ $success }}')

                </script>

                {{ session::forget('Success') }}
            @endif
        </div>
        <ul class="nav nav-tabs" id="myTab" role="tablist">

            <li class="nav-item" role="presentation">
                <button class="nav-link {{ $brand }}" data-bs-toggle="tab" data-bs-target="#brand">Brand</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link {{ $body }}" data-bs-toggle="tab" data-bs-target="#body">Body</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link {{ $color }}" data-bs-toggle="tab" data-bs-target="#color">Color</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link {{ $fuel }}" data-bs-toggle="tab" data-bs-target="#fuel">Fuel</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link {{ $transmission }}" data-bs-toggle="tab"
                    data-bs-target="#transmission">Transmission</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link {{ $condition }}" data-bs-toggle="tab"
                    data-bs-target="#condition">Condition</button>
            </li>

        </ul>

        <div class="tab-content" id="myTabContent">

            {{-- Brand --}}
            <div class="tab-pane fade show {{ $brand }} p-4" id="brand" role="tabpanel" aria-labelledby="brand-tab">
                <a href="{{ url('brand/create') }}" class="btn btn-primary mb-3"><i class="bi bi-plus"></i> Add Brand</a>

                <table class="table">
                    <thead class="thead-light">
                        <tr>
                            <th>#</th>
                            <th>Brand</th>
                            <th>Created at</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $i = 1;
                        @endphp
                        @forelse ($data_brand as $item_brand)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $item_brand->brand }}<br>
                                    @if ($item_brand->image != '')
                                        <img src="{{ url($item_brand->image) }}" class="img-thumbnail" width="70">
                                    @else
                                        <img src="{{ url('brand/dummy.png') }}" class="img-thumbnail" width="70">
                                    @endif

                                </td>
                                <td>{{ $item_brand->created_at }}</td>
                                <td><a href="{{ url('brand/edit/' . $item_brand->id) }}" class="btn btn-warning"><i
                                            class="bi bi-pencil"></i>
                                        Edit</a>
                                    <a href="{{ url('brand/destroy/' . $item_brand->id) }}"
                                        onClick="return confirm_delete()" class=" btn btn-danger"><i
                                            class="bi bi-trash"></i>
                                        Delete</a>


                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan=" 4">
                                    <center>Data Empty</center>
                                </td>

                            </tr>
                        @endforelse
                    </tbody>
                </table>

            </div>

            {{-- Body --}}
            <div class="tab-pane fade show {{ $body }} p-4" id="body" role="tabpanel" aria-labelledby="body-tab">
                <a href="{{ url('body/create') }}" class="btn btn-primary mb-3"><i class="bi bi-plus"></i> Add Body</a>

                <table class="table">
                    <thead class="thead-light">
                        <tr>
                            <th>#</th>
                            <th>Body</th>
                            <th>Created at</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $i = 1;
                        @endphp
                        @forelse ($data_body as $item_body)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $item_body->body }}</td>
                                <td>{{ $item_body->created_at }}</td>
                                <td><a href="{{ url('body/edit/' . $item_body->id) }}" class="btn btn-warning"><i
                                            class="bi bi-pencil"></i>
                                        Edit</a>
                                    <a href="{{ url('body/destroy/' . $item_body->id) }}"
                                        onClick="return confirm_delete()" class=" btn btn-danger"><i
                                            class="bi bi-trash"></i>
                                        Delete</a>


                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan=" 4">
                                    <center>Data Empty</center>
                                </td>

                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            {{-- Color --}}
            <div class="tab-pane fade show {{ $color }} p-4" id="color" role="tabpanel" aria-labelledby="color-tab">
                <a href="{{ url('color/create') }}" class="btn btn-primary mb-3"><i class="bi bi-plus"></i> Add Color</a>

                <table class="table">
                    <thead class="thead-light">
                        <tr>
                            <th>#</th>
                            <th>Color</th>
                            <th>Created at</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $i = 1;
                        @endphp
                        @forelse ($data_color as $item_color)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $item_color->color }}</td>
                                <td>{{ $item_color->created_at }}</td>
                                <td><a href="{{ url('color/edit/' . $item_color->id) }}" class="btn btn-warning"><i
                                            class="bi bi-pencil"></i>
                                        Edit</a>
                                    <a href="{{ url('color/destroy/' . $item_color->id) }}"
                                        onClick="return confirm_delete()" class=" btn btn-danger"><i
                                            class="bi bi-trash"></i>
                                        Delete</a>


                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan=" 4">
                                    <center>Data Empty</center>
                                </td>

                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            {{-- Fuel --}}
            <div class="tab-pane fade show {{ $fuel }} p-4" id="fuel" role="tabpanel" aria-labelledby="fuel-tab">
                <a href="{{ url('fuel/create') }}" class="btn btn-primary mb-3"><i class="bi bi-plus"></i> Add Fuel</a>

                <table class="table">
                    <thead class="thead-light">
                        <tr>
                            <th>#</th>
                            <th>Fuel</th>
                            <th>Created at</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $i = 1;
                        @endphp
                        @forelse ($data_fuel as $item_fuel)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $item_fuel->fuel }}</td>
                                <td>{{ $item_fuel->created_at }}</td>
                                <td><a href="{{ url('fuel/edit/' . $item_fuel->id) }}" class="btn btn-warning"><i
                                            class="bi bi-pencil"></i>
                                        Edit</a>
                                    <a href="{{ url('fuel/destroy/' . $item_fuel->id) }}"
                                        onClick="return confirm_delete()" class=" btn btn-danger"><i
                                            class="bi bi-trash"></i>
                                        Delete</a>


                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan=" 4">
                                    <center>Data Empty</center>
                                </td>

                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            {{-- Transmission --}}
            <div class="tab-pane fade show {{ $transmission }} p-4" id="transmission" role="tabpanel"
                aria-labelledby="transmission-tab">
                <a href="{{ url('transmission/create') }}" class="btn btn-primary mb-3"><i class="bi bi-plus"></i> Add
                    Transmission</a>

                <table class="table">
                    <thead class="thead-light">
                        <tr>
                            <th>#</th>
                            <th>Transmission</th>
                            <th>Created at</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $i = 1;
                        @endphp
                        @forelse ($data_transmission as $item_transmission)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $item_transmission->transmission }}</td>
                                <td>{{ $item_transmission->created_at }}</td>
                                <td><a href="{{ url('transmission/edit/' . $item_transmission->id) }}"
                                        class="btn btn-warning"><i class="bi bi-pencil"></i>
                                        Edit</a>
                                    <a href="{{ url('transmission/destroy/' . $item_transmission->id) }}"
                                        onClick="return confirm_delete()" class=" btn btn-danger"><i
                                            class="bi bi-trash"></i>
                                        Delete</a>


                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan=" 4">
                                    <center>Data Empty</center>
                                </td>

                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            {{-- Condition --}}
            <div class="tab-pane fade show {{ $condition }} p-4" id="condition" role="tabpanel"
                aria-labelledby="condition-tab">
                <a href="{{ url('condition/create') }}" class="btn btn-primary mb-3"><i class="bi bi-plus"></i> Add
                    Condition</a>

                <table class="table">
                    <thead class="thead-light">
                        <tr>
                            <th>#</th>
                            <th>Condition</th>
                            <th>Created at</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $i = 1;
                        @endphp
                        @forelse ($data_condition as $item_condition)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $item_condition->condition }}</td>
                                <td>{{ $item_condition->created_at }}</td>
                                <td><a href="{{ url('condition/edit/' . $item_condition->id) }}"
                                        class="btn btn-warning"><i class="bi bi-pencil"></i>
                                        Edit</a>
                                    <a href="{{ url('condition/destroy/' . $item_condition->id) }}"
                                        onClick="return confirm_delete()" class=" btn btn-danger"><i
                                            class="bi bi-trash"></i>
                                        Delete</a>


                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan=" 4">
                                    <center>Data Empty</center>
                                </td>

                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

        </div>
    </main>
@endsection

@push('after-content')

    {{-- pop_up_modals_delete --}}
