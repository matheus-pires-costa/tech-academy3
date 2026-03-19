<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CN Estetica</title>

    <base href="http://localhost/projeto-facul/tech-academy2/">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Flex:opsz,wght@8..144,100..1000&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="imagens/logocn.jpeg">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="home"><img src="imagens/logocn.png" alt="logo-home" title="logo home"
                    data-aos="fade-right"></a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-aos="fade-left"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0" data-aos="fade-left">
                    <li class="nav-item">
                        <a class="nav-link active fs-5" aria-current="page" href="home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-5" href="sobre">Sobre</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-5" href="servicos">Serviços</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-5" href="contato">Contato</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-5" href="resultados">Resultados</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main>
        <?php
        if (isset($_GET["param"])) {
            $p = explode("/", $_GET["param"]);
        }
        $page = $p[0] ?? "home";

        $pagina = "paginas/{$page}.php";

        //verficar se o arquivo existe
        if (file_exists($pagina)) {
            include $pagina;
        } else {
            include "paginas/erro.php";
        }

        ?>
    </main>

    <a href="https://bit.ly/4biyKWU" class="btn-whatsapp-flutuante" target="_blank" id="btnWhatsapp">
        <i class="bi bi-whatsapp"></i>
    </a>

    <footer class="footer" class="container">
        <p>
            <a href="https://www.instagram.com/chayane.esteticista/" title="instagram" target="_blank">
                <i class="bi bi-instagram"></i>
            </a>
        </p>
        <p>
            Telefone: +55 44 9734-5042
        </p>
        <p>
            &copy; <span id="copyright-year"></span> Todos os Direitos reservados.

        </p>
        <p>
            CN Estetica
        </p>
        <p>
            Desenvolvido por Matheus Pires
        </p>
    </footer>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/fslightbox.js"></script>

    <script>
        AOS.init();
    </script>
    <script>
        const anoElemento = document.getElementById('copyright-year');
        const anoAtual = new Date().getFullYear();

        if (anoElemento) {
            anoElemento.textContent = anoAtual;
        }
    </script>


    <script src="js/script.js"></script>
    <script src="js/servicos.js"></script>
    <script src="js/validacao.js"></script>
</body>

</html>