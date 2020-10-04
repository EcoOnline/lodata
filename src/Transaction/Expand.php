<?php

namespace Flat3\OData\Transaction;

use Flat3\OData\NavigationProperty;
use Illuminate\Http\Request;

class Expand extends Request
{
    /** @var NavigationProperty $navigationProperty */
    protected $navigationProperty;

    /** @var ParameterList $options */
    protected $options;

    /** @noinspection PhpMissingParentConstructorInspection */
    public function __construct(NavigationProperty $navigationProperty, ?string $options = '')
    {
        $this->navigationProperty = $navigationProperty;
        $this->options = new ParameterList($options, ';');
    }

    public function getMethod(): string
    {
        return Request::METHOD_GET;
    }

    public function getNavigationProperty(): NavigationProperty
    {
        return $this->navigationProperty;
    }

    public function __toString()
    {
        return $this->getPath();
    }

    public function getPath(): string
    {
        return $this->navigationProperty->getIdentifier()->get();
    }
}