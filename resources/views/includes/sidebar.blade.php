<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">

    <div class="position-sticky pt-3">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link" href="{{ url('dashboard') }}">
                    <i class="bi bi-house"></i>
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('product') }}">
                    <i class="bi bi-cart"></i>
                    Products
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('message') }}">
                    <i class="bi bi-chat-left"></i>
                    Message
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ url('master/brand') }}">
                    <i class="bi bi-layers"></i>
                    Master
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ url('m_dealer') }}">
                    <i class="bi bi-shop"></i>
                    Your Dealer
                </a>
            </li>

            {{-- <li class="nav-item">
                <a class="nav-link" href="{{ url('setting') }}">
                    <i class="bi bi-gear-wide"></i>
                    Settings
                </a>
            </li> --}}
            <li class="nav-item">
                <a class="nav-link" href="{{ url('logout') }}">
                    <i class="bi bi-box-arrow-left"></i>
                    Logout
                </a>
            </li>
        </ul>


    </div>
</nav>
