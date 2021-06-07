<footer class="mt-5 pt-5">
    <hr>
    <div class="container mt-3 pb-5 mb-5">
        <div class="row">
            <div class="col-lg-3 pt-5 me-5">
                <h1 class="text-dark font-36 fw-600">{{ $webname }}</h1>
                <p class="pt-5"></p>
            </div>

            <div class="col-lg-2 pt-5 me-5">
                <h3 class="">The Dealer</h3>
                <p class="pt-3"><a href="{{ url('brands') }}">Brands</a></p>
                <p class="pt-1"><a href="{{ url('dealers') }}">Visit Dealer</a></p>
                <p class="pt-1"><a href="{{ url('contact') }}">Contact us</a></p>
                {{-- <p class="pt-1">Layanan Kredit</p> --}}
            </div>

            <div class="col-lg-3 pt-5">
                <h3 class="">Contact</h3>
                <p class="pt-3">{{ $webemail }}</p>
                <p class="pt-1">{{ $webphonenumber }}</p>
                <p class="pt-1">{{ $webaddress }}</p>
                {{-- <p class="pt-1">Kodepos 59465</p> --}}
            </div>

            <div class="col-lg-2 pt-5">
                <h3 class="">Follow Us</h3>
                <p class="pt-3">Instagram</p>
                <p class="pt-1">Facebook</p>
                <p class="pt-1">Telegram</p>
                <p class="pt-1">WhatsApp</p>
            </div>

        </div>


    </div>
    <div class="container text-center">
        <p class="text-dark">@2020 - 2021 Belimobilkuy. All Right Reserved. Work From Home</p>
    </div>
</footer>
