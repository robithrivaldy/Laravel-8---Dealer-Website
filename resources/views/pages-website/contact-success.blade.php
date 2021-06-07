@extends('layouts-website.default')

@section('content-website')
    <div class="container">
        <div class="text-center mt-5 ">
            <h1>Send a Message Successfully</h1>
        </div>
        <div class="row ">
            <div class="col-lg-7 mx-auto">
                <div class="card mt-2 mx-auto p-4 rounded-3 border shadow-lg">
                    <div class="card-body">
                        <div class=" container">
                            <h5> Hi {{ Session::get('ContactSuccess') }}, </h5>
                            <h5> We reply your message several time and please wait,</h5>
                            <h5> thank you!</h5>
                        </div>
                    </div>
                </div> <!-- /.8 -->
            </div> <!-- /.row-->
        </div>
    </div>
@endsection
