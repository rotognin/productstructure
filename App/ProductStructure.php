<?php
namespace App;

class ProductStructure
{
    const products = [
        "preto-PP",
        "preto-M",
        "preto-G",
        "preto-GG",
        "preto-GG",
        "branco-PP",
        "branco-G",
        "vermelho-M",
        "azul-XG",
        "azul-XG",
        "azul-XG",
        "azul-P"
    ];

    public function make(): array
    {
        //todo your code.
        $arrayProducts = array();

        foreach(self::products as $valor){
            $arr = explode("-", $valor);

            if (!array_key_exists($arr[0], $arrayProducts)){
                $arrayProducts[$arr[0]] = array();
            }

            if (!array_key_exists($arr[1], $arrayProducts[$arr[0]])){
                $arrayProducts[$arr[0]][$arr[1]] = 1;
            } else {
                $arrayProducts[$arr[0]][$arr[1]] += 1;
            }
        }

        return $arrayProducts;
    }
}