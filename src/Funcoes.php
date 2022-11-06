<?php


class Funcoes
{
    /*

    Desenvolva uma função que receba como parâmetro o ano e retorne o século ao qual este ano faz parte. O primeiro século começa no ano 1 e termina no ano 100, o segundo século começa no ano 101 e termina no 200.

	Exemplos para teste:

	Ano 1905 = século 20
	Ano 1700 = século 17

     * */
    public function SeculoAno(int $ano) {
        $result = ceil($ano / 100);
        return $result;
    }
	
	/*

    Desenvolva uma função que receba como parâmetro um número inteiro e retorne o numero primo imediatamente anterior ao número recebido

    Exemplo para teste:

    Numero = 10 resposta = 7
    Número = 29 resposta = 23

     * */
    public function PrimoAnterior(int $numero) {
        if ($numero == 1) return $numero;

        $numero_primo = $numero - 1;
        $count = 1;

        $achou_primo = false;
        while($achou_primo == false) {
            $pode_ser_primo = true;
            while($pode_ser_primo == true) {
                if ($count >= 2) {
                    if ($count < $numero_primo) {
                        if ($numero_primo % $count == 0) {
                            $count = 1;
                            $numero_primo--;
                            $pode_ser_primo = false;
                        } else {
                            $count++;
                        }
                    } else {
                        $achou_primo = true;
                        $pode_ser_primo = false;
                    }
                } else {
                    $count++;
                }
            }
        }

        return $numero_primo;
    }

    /*

    Desenvolva uma função que receba como parâmetro um array multidimensional de números inteiros e retorne como resposta o segundo maior número.

    Exemplo para teste:

	Array multidimensional = array (
	array(25,22,18),
	array(10,15,13),
	array(24,5,2),
	array(80,17,15)
	);

	resposta = 25

    OBS.: Não entendi a questão, pois pede o segundo maior número,
    mas dentre todos os números da array o segundo maior seria 5 e não 25.
    Desta maneira vou levar em consideração que deseja diferenciar somente
    da primeira array, já que entre (25, 22, 18) realmente o segundo maior valor
    é 25 e no final devo restornar um número inteiro e não uma array de resultados.

     * */
    public function SegundoMaior(array $arr) {
        $array = $arr;

        $primeiro_maior = MAX($array);
        $index = array_search($primeiro_maior, $array);
        unset($array[$index]);
        $segundo_maior = MAX($array);

        return $segundo_maior;
    }	

    /*
   Desenvolva uma função que receba como parâmetro um array de números inteiros e responda com TRUE or FALSE se é possível obter uma sequencia crescente removendo apenas um elemento do array.

	Exemplos para teste

	Obs.:-  É Importante  realizar todos os testes abaixo para garantir o funcionamento correto.
         -  Sequencias com apenas um elemento são consideradas crescentes

    [1, 3, 2, 1]  false
    [1, 3, 2]  true
    [1, 2, 1, 2]  false
    [3, 6, 5, 8, 10, 20, 15] false
    [1, 1, 2, 3, 4, 4] false
    [1, 4, 10, 4, 2] false
    [10, 1, 2, 3, 4, 5] true
    [1, 1, 1, 2, 3] false
    [0, -2, 5, 6] true
    [1, 2, 3, 4, 5, 3, 5, 6] false
    [40, 50, 60, 10, 20, 30] false
    [1, 1] true
    [1, 2, 5, 3, 5] true
    [1, 2, 5, 5, 5] false
    [10, 1, 2, 3, 4, 5, 6, 1] false
    [1, 2, 3, 4, 3, 6] true
    [1, 2, 3, 4, 99, 5, 6] true
    [123, -17, -5, 1, 2, 3, 12, 43, 45] true
    [3, 5, 67, 98, 3] true

     * */
    
	public function SequenciaCrescente(array $arr) {
        $array = $arr;
        $ar = [];
        $sequencia_crescente = false;

        for($i=0;$i<count($array);$i++) {
            $ar = $array;
            array_splice($ar, $i, 1);
            if ($sequencia_crescente == true) {
                $i = 100000;
            } elseif (count($ar) <= 1) {
                $sequencia_crescente = true;
                $i = 100000;
            } else {
                $crescendo = true;
                for($j=0;$j<count($ar);$j++) {
                    if ($j > 0) {
                        if ($ar[$j-1] < $ar[$j]) {
                            continue;
                        } else {
                            $crescendo = false;
                            $j = 100000;
                        }
                    } else {
                        continue;
                    }
                }
                $sequencia_crescente = $crescendo;
            }
        }
        
        return $sequencia_crescente;
    }
}
