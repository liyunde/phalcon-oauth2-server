<?php

namespace Phalcon\OAuth2\Server\Storage;

use Phalcon\Mvc\User\Component as PhalconComponent;
use Phalcon\OAuth2\Server\Storage;

/**
 * Class Plugin
 * @package Phalcon\OAuth2\Server\Storage
 */
abstract class Component extends PhalconComponent
{
    use Storage;

    /**
     * @param null $params
     *
     * @return \Phalcon\Mvc\Model\Query\BuilderInterface
     */
    public function getBuilder($params = null)
    {
        return $this->modelsManager->createBuilder($params);
    }
}