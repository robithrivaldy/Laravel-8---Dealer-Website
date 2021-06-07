@extends('layouts-website.default')

@section('content-website')
    <div class="container">
        <div class="row mt-3">
            <p class="text-muted m-4">Home / Contact Us</p>
        </div>
        <div class="text-center">
            <h1>Contact Us</h1>
        </div>
        <div class="row ">
            <div class="col-lg-12 mx-auto">
                <div class="card mt-2 mx-auto p-4 rounded-3 border shadow-lg">
                    <div class="card-body">
                        <div class=" container">
                            <form id="contact-form" method="POST" action="{{ url('contact/store') }}" role="form">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6">
                                        <h1 class="display-4 fw-bold lh-1 mb-5">{{ $data_dealer->name }}</h1>
                                        <p class="lead mt-4 mb-3 p-1">You can leave a message and please wait we will
                                            contact
                                            you several time</p>
                                        <p><i class="bi bi-telephone-fill"></i> {{ $data_dealer->phonenumber }}</p>
                                        <p><i class="bi bi-envelope-fill"></i> {{ $data_dealer->email }}</p>
                                        <p><i class="bi bi-geo-alt-fill"></i> {{ $data_dealer->address }}</p>
                                        <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-4 mb-lg-3">
                                            <a href="{{ url('dealers') }}"
                                                class="btn btn-primary btn-lg px-4 me-md-2 fw-bold"> <i
                                                    class="bi bi-geo-alt-fill"></i> Visit Dealer</button>
                                                <a href="tel:{{ $data_dealer->phonenumber }}"
                                                    class="btn btn-outline-secondary btn-lg px-4"><i
                                                        class="bi bi-telephone-fill"></i> Call Now </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="controls">
                                            <div class="row">
                                                <h1 class="display-4 fw-bold lh-1">Leave a Message</h1>

                                                <div class="col-md-12 mt-4">
                                                    <div class="form-group"> <label for="form_name">Your Name *</label>
                                                        <input id="form_name" type="text" name="name" class="form-control"
                                                            placeholder="Please enter your firstname *" required="required"
                                                            data-error="Firstname is required.">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mt-4">
                                                <div class="col-md-12">
                                                    <div class="form-group"> <label for="form_email">Email *</label> <input
                                                            id="form_email" type="email" name="email" class="form-control"
                                                            placeholder="Please enter your email *" required="required"
                                                            data-error="Valid email is required."> </div>
                                                </div>
                                            </div>
                                            <div class="row mt-4">
                                                <div class="col-md-12">
                                                    <div class="form-group"> <label for="form_email">Phone Number *</label>
                                                        <input id="form_email" type="number" name="phonenumber"
                                                            class="form-control"
                                                            placeholder="Please enter your phone number *"
                                                            required="required" data-error="Valid phonenumber is required.">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mt-4">
                                                <div class="col-md-12">
                                                    <div class="form-group"> <label for="form_message">Message *</label>
                                                        <textarea id="form_message" name="message" class="form-control"
                                                            placeholder="Write your message here." rows="4"
                                                            required="required"
                                                            data-error="Please, leave us a message."></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 mt-4">
                                                    <input type="submit" class="btn btn-success btn-send pt-2 btn-block "
                                                        value="Send Message">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div> <!-- /.8 -->
            </div> <!-- /.row-->
        </div>
    </div>
@endsection
