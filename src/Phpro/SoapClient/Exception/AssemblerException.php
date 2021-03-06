<?php

/*
 * This file is part of the Phpro application.
 *
 * Copyright (c) 2015-2017 Phpro
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Phpro\SoapClient\Exception;

/**
 * Class AssemblerException
 *
 * @package Phpro\SoapClient\Exception
 */
class AssemblerException extends RuntimeException
{
    /**
     * @param \Exception $e
     *
     * @return AssemblerException
     */
    public static function fromException(\Exception $e)
    {
        return new self($e->getMessage(), $e->getCode(), $e);
    }
}
