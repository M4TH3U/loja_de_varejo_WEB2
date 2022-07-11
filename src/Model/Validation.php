<?php
namespace APP\Model;

class Validation{
    public static function validateName(string $name):bool{
        return mb_strlen($name) > 4;
    }

    public static function validateNome(string $nome):bool{
        return mb_strlen($nome) > 2;
    }

    public static function validateNumber(float $number):bool{
        return $number > 0;
    }

    public static function validatePhone(float $telefone):bool{
        return mb_strlen($telefone) > 8;
    }

    public static function validateCnpj(float $cnpj):bool{
        return mb_strlen($cnpj) > 13;
    }

}