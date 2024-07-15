<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head class="d-flex header">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Portifólio</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href={{ asset('css/app.css') }} rel="stylesheet" />
</head>

<body>
    <div class="contentBody">
        <div class="titleHeader">
            <h2>Portifólio</h2>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 d-flex align-items-center flex-column pt-5">
                    <h1 class="fontMonospace red-text fw-bold pt-4 pb-4">Gabriel Fernandes da Silva</h1>
                    <div class="containerImg">
                        <img src={{ asset('img/perfiljpeg.jpg') }} alt="Gabriel Fernandes da Silva">
                    </div>
                    <h4 class="fontMonospace red-text pt-4 pb-4">Desenvolvedor web full stack</h4>
                    <div class="d-flex align-items-center flex-column pt-4">
                        <div class="d-flex align-items-baseline titleLanguages">
                            <h2 class="red-text pb-4">Principais tecnologias</h2>
                            <div class="infoTechs">
                                <i class="fa-solid fa-circle-info fs-4"></i>
                                <span class="tooltiptext">Passe o mouse por cima dos ícones para mais informações!</span>
                            </div>
                        </div>
                        <div class="languages">
                            <div class="d-block langDiv">
                                <i class="fa-brands fa-php lang"></i>
                                <span class="tooltiptext">Linguagem em que tenho mais segurança e experiência.</span>
                            </div>
                            <div class="d-block langDiv">
                                <i class="fa-brands fa-js lang"></i>
                                <span class="tooltiptext">Linguagem que utilizo para melhorar a experiência do usuário.</span>
                            </div>
                            <div class="d-block langDiv">
                                <i class="fa-brands fa-laravel lang"></i>
                                <span class="tooltiptext">Framework em que tenho mais experiência.</span>
                            </div>
                            <div class="d-block langDiv">
                                <i class="fa-brands fa-react lang"></i>
                                <span class="tooltiptext">Tenho menos experiência, mas sei me virar bem.</span>
                            </div>
                            <div class="d-block langDiv">
                                <i class="fa-brands fa-html5 lang"></i>
                                <span class="tooltiptext">Utilizo para criar a estrutura e o visual da aplicação.</span>
                            </div>
                            <div class="d-block langDiv">
                                <i class="fa-brands fa-css3-alt lang"></i>
                                <span class="tooltiptext">Utilizo para deixar tudo mais bonito ao olhos do usuário.</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-12">

                </div>
            </div>
        </div>
    </div>
    <footer class="d-flex justify-content-center align-items-center">
        <div class="textFooter">
            <h5>Desenvolvido por Gabriel Fernandes da Silva</h5>
        </div>
    </footer>
</body>
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>

{{-- Script da tela --}}
<script>

    // $(".langDiv").mouseover(function(){
    //     $(this).find("p").removeClass("d-none");
    // });

    // $(".langDiv").mouseout(function(){
    //     $(this).find("p").addClass("d-none");
    // });

</script>

</html>
