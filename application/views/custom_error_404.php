<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <?php if (isset($titulo)): ?>
            <title><?php echo 'System Car |&nbsp;' . $titulo ?></title>
        <?php else: ?>
            <title>System Car | Seu veículo em boas mãos</title>
        <?php endif; ?>

        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- FAZER O FAVICON -->
        <link rel="icon" href="<?php echo base_url('public/src/img/favicon.ico'); ?>" type="image/x-icon" />

        <link href="<?php echo base_url('public/dist/css/sb-admin-2.min.css'); ?>" rel="stylesheet">

        <style>
            *, body {
                -webkit-font-smoothing: antialiased;
                text-rendering: optimizeLegibility;
                -moz-osx-font-smoothing: grayscale;
            }
            * {
                line-height: 1.2;
                margin: 0;
            }

            html {
                color: #888;
                display: table;
                font-family: 'Nunito Sans', sans-serif;
                height: 100%;
                text-align: center;
                width: 100%;
            }

            .h1, .h2, .h3, .h4, .h5, .h6, h1, h2, h3, h4, h5, h6 {
                font-family: 'Nunito Sans', sans-serif;
            }

            body {
                display: table-cell;
                vertical-align: middle;
                margin: 2em auto;
            }

            h1 {
                color: #ef4153;
                text-shadow: rgba(235, 82, 93, 0.3) 5px 1px, rgba(235, 82, 93, 0.2) 10px 3px;
                font-size: 150px;
                font-weight: 800;
                margin-bottom: 10px;
                letter-spacing: 2px;
            }
            h4 {
                color: #4a5361;
                text-transform: capitalize;
                font-size: 28px;
            }

            p {
                margin: 0 auto;
                max-width: 790px;
                margin-top: 20px;
                color: #666 ;
                margin-bottom: 10px;
                font-size: 15px;
                line-height: 20px;
            }
            a {
                display: inline-block;
                padding: 8px 15px;
                background-color: #ef4153;
                color: #fff;
                text-decoration: none;
                border-radius: 4px;
                margin-top: 20px;
            }

            @media only screen and (max-width: 280px) {

                body, p {
                    width: 95%;
                }

                h1 {
                    font-size: 1.5em;
                    margin: 0 0 0.3em;
                }

            }
        </style>

    </head>

    <body id="page-top">

        <!-- Page Wrapper -->
        <div id="wrapper">

            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- 404 Error Text -->
                <div class="text-center">
                    <h1 class="error mx-auto text-danger font-weight-bold" data-text="404">404</h1>
                    <p class="lead text-gray-900 mb-5">Página não encontrada</p>
                    <p class="mb-5">Parece que você pode ter tomado uma direção errada. Não se preocupe ...<br/> Aqui está uma pequena dica que pode ajudá-lo a voltar ao Início.<br/>Caso nao esteja conseguindo, entre em contato.<br/>Desenvolvedor: e-mail: visaotec.com@gmail.com</p>
                    <a class="btn btn-danger" href="<?php echo base_url('/'); ?>">Voltar para página principal</a>
                </div>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Content Wrapper -->

    </body>
    <!-- End of Page Wrapper -->

