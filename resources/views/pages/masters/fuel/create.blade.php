@extends('layouts.default')

@section('content')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 ">
        <div
            class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Add Fuel</h1>
        </div>
        <form action="{{ url('fuel/store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="exampleFormControlInput1">Fuel Name</label>
                <input type="text" name="fuel" class="form-control" placeholder="Ex. Gasonlin Solar Elektrik" required>
            </div>
            <div class="form-group">
                <a href="{{ url('master/fuel') }}" class="btn btn-warning">Back</a>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </main>
@endsection
