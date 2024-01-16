<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>FastCoding TI</title>

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

            <!-- BANNER -->
            <section>

            </section>
            
            <!-- BANNER MOBILE CAROUSEL -->
            <section>
                <x-carousel/>
            </section>

            <!-- BANNER SECTION -->
            <section class="join-section yellow py-5 mb-5">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 root-section my-auto">
                            <h1 class="fw-bold text-gradient-dark mb-4">
                                A solução em Tecnologia que sua empresa precisa.
                            </h1>

                            <h2 class="text-center text-gradient-dark fw-bold p-2">
                                Sites <br>
                                Aplicativos <br>
                                E-commerce <br>
                                Outros sistemas
                            </h2>
                        </div>

                        <div class="col-md-3 mt-5 mx-0 px-0">
                            <div class="justify-content-around pt-5">
                                <img src="{{ asset('img/card-1.jpg') }}" class="img-fluid">
                            </div>

                            <div class="justify-content-around pb-5">
                                <img src="{{ asset('img/card-2.jpg') }}" class="img-fluid">
                            </div>
                        </div>

                        <div class="col-md-3  mx-0 px-0">
                            <div class="justify-content-around pt-5">
                                <img src="{{ asset('img/card-3.png') }}" class="img-fluid">
                            </div>

                            <div class="justify-content-around pb-5 mb-4">
                                <img src="{{ asset('img/card-4.jpg') }}" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </section>

             <!-- ABOUT US SECTION -->
             <section class="container watermark mt-5">
                 <h1 class="text-gradient-dark text-center text-lg-start fw-bold mb-4">
                     Sobre Nós
                 </h1>
                <div class="row">
                    <div class="col-md-4">
                        <h3 class="text-gradient-dark text-center text-lg-start fw-bold mb-4">
                            Missão
                        </h3>

                        <p class="text-gradient-dark text-center text-lg-start fw-bold">
                            Nossa missão é entregar o que há de melhor em tecnologia para cada cliente de acordo com suas necessidades.
                        </p>
                    </div>

                    <div class="col-md-4">
                        <h3 class="text-gradient-dark text-center text-lg-start fw-bold mb-4">
                            Visão
                        </h3>

                        <p class="text-gradient-dark text-center text-lg-start fw-bold">
                            Nossa visão está no futuro e no presente. Estamos focados em encontrar o que há de melhor com o melhor custo benefício para cada cliente.
                        </p>
                    </div>

                    <div class="col-md-4">
                        <h3 class="text-gradient-dark text-center text-lg-start fw-bold mb-4">
                            Valores
                        </h3>

                        <p class="text-gradient-dark text-center text-lg-start fw-bold">
                            Prezamos acima de tudo pela ética e pelo respeito, entendemos que a função de todo profissional é melhorar o mundo dentro da sua área de atuação.
                        </p>
                    </div>
                </div>
            </section>

            <!-- TALK US SECTION -->
            <section class="mt-5">
                <div class="row">
                    <div class="col-md-6">
                        <h1 class="text-gradient-dark text-center text-lg-start fw-bold mb-4">
                            Fale Conosco
                        </h1>

                        <h5 class="text-center text-lg-start fw-bold text-gradient mx-5 mb-5">
                            Estamos prontos para lhe atender e dar o suporte necessário, contate-nos.
                        </h5>
                    </div>

                    <div class="col-md-6">
                        <form class="contact-form row mx-3">
                            <div class="col-md-12 inputs">
                                <label></label>

                                <input type="text " class="input-contact form-control w-100  -input justify-content-around" placeholder="Nome">
                            </div>

                            <div class="col-md-12">
                                <label></label>

                                <input type="text " class="input-contact form-control w-100  -input justify-content-around" placeholder="Email">
                            </div>

                            <div class="col-md-12 inputs">
                                <label></label>

                                <input type="text " class="input-contact form-control w-100  -input justify-content-around" placeholder="Assunto">
                            </div>


                            <div class="col-md-12">
                                <label></label>

                                <textarea class="input-contact form-control w-100  -input justify-content-around" rows="4 " placeholder="Mensagem"></textarea>
                            </div>

                            <div class="col-md-8"></div>

                            <div>
                                <a href="# " class="button-gradient float-end fs-2 rounded mt-4 mb-5">
                                    Enviar
                                </a>
                            </div>
                        </form>
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
