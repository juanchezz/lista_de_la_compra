<?php

namespace Deg540\StringCalculatorPHP\Test;

use Deg540\StringCalculatorPHP\StringListaCompra;
use PHPUnit\Framework\TestCase;

final class StringListaCompraTest extends TestCase
{
    /**
     * @test Añadir x1 cuando se añade un producto sin cantidad
     */
    public function devuelve_x1_al_añadir_sin_cantidad()
    {
        $lista = new StringListaCompra();
        $resultado = $lista->ejecutar("pan");
        $this->assertEquals("pan x1", $resultado);
    }


}