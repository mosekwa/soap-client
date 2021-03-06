<?php

/*
 * This file is part of the Phpro application.
 *
 * Copyright (c) 2015-2017 Phpro
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Phpro\SoapClient\Type;

/**
 * Class MultiArgumentRequestInterface
 *
 * @package Phpro\SoapClient\Type\Legacy
 */
interface MultiArgumentRequestInterface extends RequestInterface
{
    /**
     * @return array
     */
    public function getArguments();
}
