<?php
    $grau = $_POST['grau'];

    switch ($grau) {
        case "1":
            echo "O nível escolhido é Fácil.";
            break;
        case "2":
            echo "O nível escolhido é Intermediário.";
            break;
        case "3":
            echo "O nível escolhido é Difícil.";
            break;
        default:
            echo "Opção inválida.";
    }
?>
