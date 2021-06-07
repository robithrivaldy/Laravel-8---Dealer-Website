@extends('layouts.app')
@section('content')

    <div class="container ">

        <div class="row mt-5 text-center">
            <div class="col-lg-4 m-auto mt-5 ">
                <h1 class="text-dark"><i class="bi bi-person"></i>Administrator</h1>
                <div class="mt-5">
                    <main class="form-signin">
                        <form action="{{ route('login') }}" method="POST">
                            @csrf
                            <div class="form-floating">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
                                    placeholder="Email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <label for="floatingInput">Email address</label>
                            </div>
                            <div class="form-floating mt-3">
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password" required
                                    autocomplete="current-password" placeholder="Password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <label for="floatingPassword">Password</label>
                            </div>


                            <div class="form-floating mt-3">
                                <button class="w-100 btn btn-lg bg-dark text-white" type="submit">Login</button>
                            </div>


                            <p class="mt-5 mb-3 text-muted">©Belimobilkuy 2020–2021</p>
                        </form>
                    </main>

                </div>

            </div>
        </div>
    </div>

@endsection
