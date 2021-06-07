@extends('layouts.default')

@section('content')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 ">
        <div
            class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Add Color</h1>
        </div>
        <form action="{{ url('color/store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="exampleFormControlInput1">Color Name</label>
                <input type="text" name="color" class="form-control" placeholder="Ex. Black White Red " required>
            </div>
            <div class="form-group">
                <a href="{{ url('master/color') }}" class="btn btn-warning">Back</a>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </main>
@endsection
