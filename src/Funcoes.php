<?php

class Funcoes
{
    /*

    Desenvolva uma função que receba como parametro o ano e retorne o século ao qual este ano faz parte. O primeiro século começa no ano 1 e termina no ano 100, o segundo século começa no ano 101 e termina no 200.

    Exemplos para teste:

    Ano 1905 = século 20
    Ano 1700 = século 17

     * */
    public function SeculoAno($ano) {
        return 0;
    }

    /*

    Crie uma função que receba como parâmetro 2 números  inteiros (inicial e final)  e retorne um array com os números primos estão compreendidos entre o valor inicial e o final, desprezando o número inicial e final recebidos como parâmetro.

    Exemplo para teste:

    Numero Inicial = 10
    Número Final = 29
    Resposta: Array [11,13,17,19,23]

     * */
    public function Primos($inicial,$final) {
        return  0;
    }

    /*

    Escreva uma função que receba um arrei de numeros entre 1 e 10. Depois informe qual ou quais número(s) não se repetiram.

    Exemplo

    Array sorteado = [2,5,8,2,8,5,3,9,6,3,4,6,3,1,2,1,2,3,7,1]
    Os números que não se repetem são o 4 e 7.
    Resposta: Array [4,7]

     * */
    public function NumerosNaoRepetidos($array) {
        return 0;
    }

    /*
     Receba como parametro um array de números inteiros e responda TRUE or FALSE se é possível obter uma sequencia crescente removendo apenas um elemento do array.

    Exemplos para teste

    Obs.:-  É Importante  realizar todos os testes abaixo para garantir o funcionamento correto.
             -  Sequencias com apenas um elemento são consideradas como TRUE

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
    public function SequenciaCrescente($array) {
        return 0;
    }
}
