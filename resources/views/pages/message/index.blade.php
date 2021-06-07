@extends('layouts.default')

@section('content')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 ">
        <div
            class=" d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3
                                                                                                                                                                                                                                                                                                                                                                                                                                                                    border-bottom">
            <h1 class="h2">Message</h1>

        </div>


        <div class="table-responsive">
            <table class="table table-striped table-sm">
                <thead>
                    <tr>
                        <th>#</th>
                        <th width="95%">Message</th>

                    </tr>
                </thead>
                <tbody>

                    @php
                        $i = 1;
                    @endphp
                    @forelse ($data_message as $item_message)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>
                                <i class="bi bi-person-fill"></i> {{ $item_message->name }}<br>
                                <i class="bi bi-envelope-fill"></i> {{ $item_message->email }}<br>
                                <i class="bi bi-telephone-fill"></i> {{ $item_message->phonenumber }}<br><br>
                                Message : <br> {{ $item_message->message }}<br><br>



                            </td>

                            {{-- <td><a href="{{ url('message/show/' . $item_message->id) }}" class="btn btn-warning"><i
                                        class="bi bi-pencil"></i>
                                    Edit</a>
                                <a href="{{ url('message/destroy/' . $item_message->id) }}"
                                    onClick="return confirm_delete()" class=" btn btn-danger"><i class="bi bi-trash"></i>
                                    Delete</a>


                            </td> --}}
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
