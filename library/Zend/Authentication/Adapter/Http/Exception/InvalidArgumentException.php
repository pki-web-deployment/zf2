<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/zf2 for the canonical source repository
 * @copyright Copyright (c) 2005-2013 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 * @package   Zend_Authentication
 */

namespace Zend\Authentication\Adapter\Http\Exception;

use Zend\Authentication\Adapter\Exception;

/**
 * @category   Zend
 * @package    Zend_Authentication
 * @subpackage Adapter_Http
 */
class InvalidArgumentException extends Exception\InvalidArgumentException implements
    ExceptionInterface
{
}
