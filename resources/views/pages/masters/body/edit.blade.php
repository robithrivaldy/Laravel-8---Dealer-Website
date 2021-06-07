@extends('layouts.default')

@section('content')

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 ">
        <div
            class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Edit Body {{ $item['body'] }} </h1>
        </div>
        <form action="{{ url('body/update/' . $item['id']) }}" method="POST">

            @csrf
            <div class="form-group">
                <label for="exampleFormControlInput1">Body Name</label>
                <input type="text" name="body" class="form-control" value="{{ $item['body'] }}" required>
            </div>
            <div class="form-group">
                <a href="{{ url('master/body') }}" class="btn btn-warning">Back</a>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </main>

@endsection
