<?php
require_once "view/header.php";
?>

</head>
<body id="tab-orcamento">
<!-- Barra de nevgação  -->
    <?php
        require_once "view/navbar.php";
    ?>


    <?php

        require_once "view/formulario-orcamento.php";

    ?>

    <!-- Inicio do rodapé da pagina  -->
    <?php
        require_once "view/footer.php";

    if(isset($valido) && $valido == true && $confirmacao == true) { ?>

        <script>

            $('#modal-confirm').modal({backdrop: 'static', show: true}).delay(5000).hide(0, function() {
                $(this).modal('hide');
            });

        </script>

        <?php
    }
    if(isset($confirmacao) && $confirmacao == false){ ?>

        <script>
            $('#modal-error').modal({backdrop: 'static', show: true}).delay(5000).hide(0, function() {
                $(this).modal('hide');
            });
        </script>

    <?php }

    ?>

</body>
</html>
