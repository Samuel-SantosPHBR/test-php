<?php
use PHPUnit\Framework\TestCase;

class FunctionTest extends TestCase {


    public function testFuncaoSeculoAno()
    {
        $funcoes = new \SRC\Funcoes();

        $this->assertEquals($funcoes->SeculoAno(1905),0);
        $this->assertEquals($funcoes->SeculoAno(1700),0);
    }

    // public function testFuncaoPrimos()
    // {
    //     $funcoes = new \SRC\Funcoes();

    //     $this->assertEquals($funcoes->Primos(10,29),[11,13,17,19,23]);
    //     $this->assertEquals($funcoes->Primos(1,29),[2,3,5,7,11,13,17,19,23]);
    // }

    // public function testFuncaoNumerosNaoRepetidos()
    // {
    //     $funcoes = new \SRC\Funcoes();

    //     $this->assertEquals($funcoes->NumerosNaoRepetidos([2,5,8,2,8,5,3,9,6,3,4,6,3,1,2,1,2,3,7,1]),[4,7]);
    //     $this->assertEquals($funcoes->NumerosNaoRepetidos([7,9,4,4,2,7,7,9]),[2]);
    // }


    // public function testFuncaoSequenciaCrescente()
    // {
    //     $funcoes = new \SRC\Funcoes();

    //     $this->assertFalse($funcoes->SequenciaCrescente([1, 3, 2, 1]));
    //     $this->assertFalse($funcoes->SequenciaCrescente([1, 4, 10, 4, 2]));
    //     $this->assertFalse($funcoes->SequenciaCrescente([1, 2, 5, 5, 5]));
    //     $this->assertFalse($funcoes->SequenciaCrescente([10, 1, 2, 3, 4, 5, 6, 1]));

    //     $this->assertTrue($funcoes->SequenciaCrescente([1, 3, 2]));
    //     $this->assertTrue($funcoes->SequenciaCrescente([10, 1, 2, 3, 4, 5]));
    //     $this->assertTrue($funcoes->SequenciaCrescente([123, -17, -5, 1, 2, 3, 12, 43, 45]));
    //     $this->assertTrue($funcoes->SequenciaCrescente([3, 5, 67, 98, 3]));
    // }




}