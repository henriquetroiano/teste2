<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contiplan | Home</title>

    <!-- Primary Meta Tags -->
    <title>Contiplan | Cuidamos de todos os detalhes para o sucesso da sua marca!</title>
    <meta name="title" content="Contiplan | Cuidamos de todos os detalhes para o sucesso da sua marca!">
    <meta name="description" content="A contiplan está no mercado há 29 anos, atendendo empresas de diversos segmentos públicos e privados, em âmbito nacional.">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://contiplan.com.br/">
    <meta property="og:title" content="Contiplan | Cuidamos de todos os detalhes para o sucesso da sua marca!">
    <meta property="og:description" content="A contiplan está no mercado há 29 anos, atendendo empresas de diversos segmentos públicos e privados, em âmbito nacional.">
    <meta property="og:image" content="./public/img/metaphoto.png">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://contiplan.com.br/">
    <meta property="twitter:title" content="Contiplan | Cuidamos de todos os detalhes para o sucesso da sua marca!">
    <meta property="twitter:description" content="A contiplan está no mercado há 29 anos, atendendo empresas de diversos segmentos públicos e privados, em âmbito nacional.">
    <meta property="twitter:image" content="./public/img/metaphoto.png">

    <!-- Favicon Section -->
    <link rel="apple-touch-icon" sizes="57x57" href="./public/img/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="./public/img/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="./public/img/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="./public/img/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="./public/img/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="./public/img/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="./public/img/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="./public/img/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="./public/img/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="./public/img/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./public/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="./public/img/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./public/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="./public/img/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="./public/img/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <!-- Bootstrap css -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
    <!-- Splide Slider Css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/css/splide.min.css">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.0/css/all.css"
        integrity="sha384-Mmxa0mLqhmOeaE8vgOSbKacftZcsNYDjQzuCOm6D02luYSzBG8vpaOykv9lFQ51Y" crossorigin="anonymous">
    
    <!-- Personal CSS -->
    <link rel="stylesheet" href="./public/css/main.css">

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

    <!-- jQuery Mask -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js" integrity="sha512-pHVGpX7F/27yZ0ISY+VVjyULApbDlD0/X0rgGbTqCE7WFW5MezNTWG/dnhtbBuICzsd0WQPgpE4REBLv+UqChw==" crossorigin="anonymous"></script>


</head>
<body>
    <?php require './components/header.php';?>

    <?php require './home.php';?>

    



    <?php require './components/footer.php';?>

    

    <!-- Bootstrap scripts -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


    <!-- SplideJs JS files -->
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js"></script>



    <script>
        new Splide( '.splide', {
            type: "loop",
            perPage: 1,
            arrows: false,
            // autoplay: true,
            // interval: 3000
        } ).mount();
    </script>
</body>
</html>