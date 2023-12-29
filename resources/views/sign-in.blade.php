<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Sign In</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    </head>
    <body>
        <header>
            <x-navbar/>

            <x-navbar-mobile/>
        </header>
        
        <main>
            <section class="container watermark mt-5 pt-5">
                <div class="row pt-5 mt-5">
                    <div class="col-md-6 watermark">

                    </div>

                    <div class="col-md-6">
                        <div class="container">
                            <form class="contact-form row">
                                <div class="row">
                                    <div class="col-6">
                                        <h1 class="text-gradient-dark float-end text-lg-start fw-bold mb-4">
                                            Entre ou
                                        </h1>
                                    </div>

                                    <div class="col-6">
                                        <a href="sign-up" class="button-gradient rounded mt-2">
                                            cadastre-se
                                        </a>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <label></label>

                                    <input type="text " class="input-contact form-control w-100  -input justify-content-around" placeholder="Email ou telefone">
                                </div>

                                <div class="col-md-12 inputs">
                                    <label></label>

                                    <input type="text " class="input-contact form-control w-100  -input justify-content-around" placeholder="Senha">
                                </div>

                                <div>
                                    <a href="# " class="button-gradient float-end mt-4 rounded mb-5">
                                        Entrar
                                    </a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>

            <!-- SOCIAL SECTION + FOOTER -->
            <section>
                <x-footer/>

                <x-footer-mobile/>
            </section>
        </main>
    </body>
    <!-- SCRIPTS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <!-- SCRIPTS -->
</html>
