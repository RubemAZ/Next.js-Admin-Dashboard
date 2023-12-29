<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Common quests</title>

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
            <div class="container py-5 my-5">
                <h1 class="fw-bold text-center py-5 my-5">
                    Sem perguntas frequentes no momento, por favor, fale conosco e tiraremos suas dúvidas.
                </h1>
            </div>
            
 

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
