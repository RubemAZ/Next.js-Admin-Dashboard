<div class="navbar-mobile position-absolute top-0 z-50 w-100">
    <nav class="navbar fixed-top white shadow-lg">
        <div class="container">
            <div class="row">
                <div class="col-9">
                    <a class="navbar-brand" href="/">
                        <img src="{{ asset('img/navbar-logo.png')}}"  width="90%">
                        <h1>FastCoding TI</h1>
                    </a>
                </div>

                <div class="col-3 m-auto float-end">
                    <button class="navbar-toggler float-end" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
            </div>                   
            
            <div class="offcanvas offcanvas-end white watermark" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <!-- <div class="row">
                        <div class="col-6">
                            <a class="nav-link fw-bold" href="#"><img src="{{ asset('img/link-apple.png') }}" alt=""></a>
                        </div>

                        <div class="col-6">
                            <a class="nav-link fw-bold" href="#"><img src="{{ asset('img/link-google.png') }}" alt=""></a>
                        </div>
                    </div> -->

                    <button type="button" class="btn-close float-end" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>

                <div class="offcanvas-body"> 
                    <ul class="navbar-nav text-center flex-grow-1 pe-3">
                        <li class="nav-item mx-2 my-3">
                            <a class="nav-link fw-bold fs-2" href="/">
                               Home
                            </a>
                        </li>

                        <li class="nav-item mx-2 my-3">
                            <a class="nav-link fw-bold fs-2" href="catalog">
                               Catálogo
                            </a>
                        </li>

                        <li class="nav-item mx-2 my-3">
                            <a class="nav-link fw-bold fs-2" href="sign-up">
                                Cadastre
                            </a>
                        </li>

                        <li class="nav-item mx-auto my-5">
                            <a href="sign-in" class="button-gradient rounded fw-bold fs-2">
                                Entre
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</div>