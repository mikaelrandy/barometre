<?php

namespace Afup\BarometreBundle\Filtering;

use Symfony\Component\HttpFoundation\RequestStack;

class Context
{
    /**
     * @var array
     */
    protected $parameters = array();

    public function setParameter($key, $value)
    {
        $this->parameters[$key] = $value;

        return $this;
    }

    public function getParameter($key)
    {
        return $this->parameters[$key];
    }

    public function getParameters()
    {
        return $this->parameters;
    }
}