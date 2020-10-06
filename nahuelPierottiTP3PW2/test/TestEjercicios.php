<?php

namespace SebastianBergmann\Exporter;
require_once ("../ejercicio4/contador_visitas.php");


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

    function testQueCalculeDiagonalPpal(){
        
    }

}
