<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: google/protobuf/descriptor.proto

namespace Google\Protobuf\Internal\FeatureSet;

use UnexpectedValueException;

/**
 * Protobuf type <code>google.protobuf.FeatureSet.MessageEncoding</code>
 */
class MessageEncoding
{
    /**
     * Generated from protobuf enum <code>MESSAGE_ENCODING_UNKNOWN = 0;</code>
     */
    const MESSAGE_ENCODING_UNKNOWN = 0;
    /**
     * Generated from protobuf enum <code>LENGTH_PREFIXED = 1;</code>
     */
    const LENGTH_PREFIXED = 1;
    /**
     * Generated from protobuf enum <code>DELIMITED = 2;</code>
     */
    const DELIMITED = 2;

    private static $valueToName = [
        self::MESSAGE_ENCODING_UNKNOWN => 'MESSAGE_ENCODING_UNKNOWN',
        self::LENGTH_PREFIXED => 'LENGTH_PREFIXED',
        self::DELIMITED => 'DELIMITED',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

