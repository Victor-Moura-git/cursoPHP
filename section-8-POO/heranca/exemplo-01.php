<?php

//a classe filha acessa os dados da classe pai, mas a classe pai nao acessa os dados da classe pai

class Documento
{
    private $numero;

    public function getNumero()
    {
        return $this->$numero;
    }

    public function setNumero($n)
    {
        $this->$numero = $n;
    }
}

class CPF extends Documento
{
    public function validar()
    {
        $cpf = $this->getNumero();

        if (empty($cpf)) {
            return 0;
        }

        $cpf = preg_match('/[0-9]/', $cpf)?$cpf:0;

        $cpf = str_pad($cpf, 11, '0', STR_PAD_LEFT);


        if (strlen($cpf) != 11) {
            echo "length";
            return 0;
        } elseif ($cpf == '00000000000' ||
          $cpf == '11111111111' ||
          $cpf == '22222222222' ||
          $cpf == '33333333333' ||
          $cpf == '44444444444' ||
          $cpf == '55555555555' ||
          $cpf == '66666666666' ||
          $cpf == '77777777777' ||
          $cpf == '88888888888' ||
          $cpf == '99999999999') {
            return 0;
        } else {
            for ($t = 9; $t < 11; $t++) {
                for ($d = 0, $c = 0; $c < $t; $c++) {
                    $d += $cpf{$c} * (($t + 1) - $c);
                }
                $d = ((10 * $d) % 11) % 10;
                if ($cpf{$c} != $d) {
                    return 0;
                }
            }

            return 1;
        }
    }

    public function teste()
    {
        $valida = $this -> validar();

        if ($valida == 1) {
            echo "Seu numero eh valido";
        } else {
            echo "Seu numero nao eh valido";
        }
    }
}

/*
class valida extends CPF
{
    public function teste()
    {
        $valida = $this -> validar();

        if ($valida == 1) {
            echo "Seu numero eh valido";
        } else {
            echo "Seu numero nao eh valido";
        }
    }
}
*/

$doc = new CPF();

$doc -> setNumero("45537626845");

$penacho = $doc -> teste();

/*
$penacho = $doc -> validar();
echo $penacho;

if ($penacho == 1) {
    echo "Seu numero eh valido";
} else {
    echo "Seu numero nao eh valido";
}
*/
