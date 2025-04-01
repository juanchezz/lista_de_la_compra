<?php

namespace Deg540\StringCalculatorPHP;

class StringListaCompra
{
    private array $productos = [];

    public function ejecutar($string): string
    {
        if (str_starts_with(strtolower($string), 'añadir')) {
            $partes = explode(' ', $string);
            $nombre = strtolower($partes[1]);
            $cantidad = $partes[2] ?? 1;
            $this->productos[$nombre] = ($this->productos[$nombre] ?? 0) + (int)$cantidad;

            ksort($this->productos, SORT_STRING | SORT_FLAG_CASE);

            return implode(', ', array_map(
                fn($nombre) => "$nombre x{$this->productos[$nombre]}",
                array_keys($this->productos)
            ));
        }
        return '';
    }
}
