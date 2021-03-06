<?php

/**
 * @author     Written by Mark Ogilvie <mark.ogilvie@specshaper.com>, 11 2015
 */
namespace SpecShaper\GdprBundle\Exception;

/**
 * Encrypt Exception.
 **
 * @author      Mark Ogilvie <mark.ogilvie@specshaper.com>
 */
class GdprException extends \Exception
{
    /**
     * The value trying to be encrypted.
     */
    private $value;

    /**
     * Constructor.
     *
     * Typically provide a custom message key when throwing the exception.
     * Set the text and html of the exception in the messages translation file.
     *
     * @since Available since Release 1.0.0
     *
     * @param string $message Optional message
     */
    public function __construct($message = null, $value = null)
    {
        if ($message === null) {
            $message = 'ssg.exception.gdprException';
        }

        if ($value !== null) {
            $this->value = $value;
        }


        parent::__construct($message);
    }

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Set Value.
     *
     * @param mixed $value
     *
     * @return GdprException
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }


}
