<?php
use PHPUnit\Framework\TestCase;

class FunctionTest extends TestCase {


    public function testFuncaoSeculoAno()
    {
        $funcoes = new \SRC\Funcoes();

        $anos = [99,105,300,2101];
        $seculos = [1,2,3,22];

        foreach($anos as $indice => $ano){
            $this->assertEquals($funcoes->SeculoAno($ano),$seculos[$indice]);
        }
    }

    public function testFuncaoPrimoAnterior()
    {
        $funcoes = new \SRC\Funcoes();

        $numeros = [89,71,60,29];
        $primos = [83,67,59,23];

        foreach($numeros as $indice => $numero){
            $this->assertEquals($funcoes->PrimoAnterior($numero),$primos[$indice]);
        }

    }

    public function testFuncaoSegundoMaior()
    {
        $funcoes = new \SRC\Funcoes();

        $array = array(
                    array(
                        [89,71,60,29],
                        [40, 50, 60, 10, 20, 30],
                        [1, 2, 3, 4, 5, 3, 5, 6],
                        [1, 2, 3, 4, 99, 5, 6]
                    ),
                    array(
                        [89,71,60,29],
                        [40, 50, 160, 10, 20, 30],
                        [1, 152, 3, 4, 5, 3, 5, 6],
                        [1, 2, 3, 4, 99, 5, 6]
                    ),
                    array(
                        [9,71,60,29],
                        [40, 50, 16, 10, 20, 30],
                        [1, 15, 3, 4, 5, 3, 5, 6],
                        [1, 2, 3, 4, 99, 5, 6]
                    ),
                    array(
                        [9,1,6,9],
                        [40, 50, 10, 10, 20, 30],
                        [1, 52, 3, 4, 5, 3, 5, 6],
                        [1, 2, 3, 4, 99, 98, 6]
                        )
			   );
            $resultado = [89,152,71,98];

               foreach($array as $indice => $numero){
                    $this->assertEquals($funcoes->SegundoMaior($numero),$resultado[$indice]);
                }
    }

    public function testFuncaoSequenciaCrescente()
    {
        $funcoes = new \SRC\Funcoes();

        $seq = array(
            array(1, 3, 2, 1),
            array(1, 3, 2),
            array(1, 2, 1, 2),
            array(3, 6, 5, 8, 10, 20, 15),
            array(1, 1, 2, 3, 4, 4),
            array(1, 4, 10, 4, 2),
            array(10, 1, 2, 3, 4, 5),
            
            array(1, 1, 1, 2, 3),
            array(0, -2, 5, 6),
            array(1, 2, 3, 4, 5, 3, 5, 6),
            array(40, 50, 60, 10, 20, 30),
            array(1, 1),
            array(1, 2, 5, 3, 5),
            array(1, 2, 5, 5, 5),
            
            array(10, 1, 2, 3, 4, 5, 6, 1),
            array(1, 2, 3, 4, 3, 6),
            array(1, 2, 3, 4, 99, 5, 6),
            array(123, -17, -5, 1, 2, 3, 12, 43, 45),
            array(3, 5, 67, 98, 3),
            array(-10,3, 5, 67, 98, 3)
            );

            $seqres = [false,true,false,false,false,false,true,false,true,false,false,true,true,false,false,true,true,true,true,true];

            foreach($seq as $indice => $seq){
                $this->assertEquals($funcoes->sequenciacrescente($seq),$seqres[$indice]);
            }
    }




}