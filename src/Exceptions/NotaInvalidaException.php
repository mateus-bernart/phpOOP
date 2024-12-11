<?php

namespace ScreenMatch\Exceptions;

class NotaInvalidaException extends \InvalidArgumentException
{
    public function __construct()
    {
        parent::__construct("A nota deve ser maior que 0 e menor que 10");
    }
}
