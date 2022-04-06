<?php

require_once('../banco/conecta.php');
require_once('../classes/Usuario.php');


class CadastroUser
{

    public function __construct($bd)
    {

        $user = new Usuario($bd);

        if (!$user->saoIguais($_POST['senha'], $_POST['confirma'])) {
            echo "Senha e sua confirmação não conferem";
        }

        $saida = $user->cadastrar($_POST);

        if ($saida === true) {
            header('Location: ../telas/formlogin.php');
        } else {

            switch ($saida) {
                case 1:
                    echo $saida[1];
                    break;

                case 2:
                    echo $saida[2];
                    break;

                case 3:
                    echo $saida[3];
                    break;

                default:
                    echo "Erro desconhecido";
            }
        }
    }
}

new CadastroUser($bd);
