<?php

namespace Deg540\StringCalculatorPHP\Test;

use Deg540\StringCalculatorPHP\StringListaCompra;
use PHPUnit\Framework\TestCase;

final class StringListaCompraTest extends TestCase
{
    /**
     * @test Añadir x1 cuando se añade un producto sin cantidad VERDE
     */
    public function devuelve_x1_al_añadir_sin_cantidad()
    {
        $lista = new StringListaCompra();
        $resultado = $lista->ejecutar("añadir pan");
        $this->assertEquals("pan x1", $resultado);
    }
    /**
     * @test Devuelve la lista vacia cuando el usuario quiere vaciarla y hay algo en la lista
     */
    public function devuelve_lista_vacia_tras_vaciar(): void
    {
        $lista = new StringListaCompra();
        $lista->ejecutar("añadir pan");
        $resultado = $lista->ejecutar("vaciar");
        $this->assertEquals("", $resultado);
    }
}