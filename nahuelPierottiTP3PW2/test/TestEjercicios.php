<?php

namespace SebastianBergmann\Exporter;
require_once ("../ejercicio4/contador_visitas.php");
require_once ("../ejercicio6/dibuja_matriz.php");

use PHPUnit\Framework\TestCase;

class TestEjercicios extends TestCase
{
    function testQueCuenteNoTierra(){
        $visitas=array();
        $visitas[]=["messi","marte"];
        $visitas[]=["ronaldo","tierra"];
        $visitas[]=["maradona","mercurio"];

        $cantidad=contadorVisitasNoTerricolas($visitas);
        $this->assertEquals($cantidad,2);
    }

    function testQueCalculeSumaTotal(){
        $matriz[0][0]=1;
        $matriz[0][1]=2;
        $matriz[1][0]=3;
        $matriz[1][1]=4;

        $dimension=2;
        $suma=imprimirMatriz($matriz,$dimension);

        $this->assertEquals($suma,10);
    }

    function testQueCalculeDiagonalPpal(){
        $matriz[0][0]=1;
        $matriz[0][1]=2;
        $matriz[0][2]=3;
        $matriz[1][0]=4;
        $matriz[1][1]=5;
        $matriz[1][2]=6;
        $matriz[2][0]=7;
        $matriz[2][1]=8;
        $matriz[2][2]=9;
        $dimension=3;
        $diagonal=recorrerUnSoloForDiagonalPpal($matriz,$dimension);

        $this->assertEquals($diagonal,15);
    }

    function testQueCalculeDiagonalSecundaria(){
        $matriz[0][0]=1;
        $matriz[0][1]=2;
        $matriz[1][0]=3;
        $matriz[1][1]=4;

        $dimension=2;
        $diagonal=recorrerUnSoloForDiagonalSec($matriz,$dimension);

        $this->assertEquals($diagonal,5);
    }
}
