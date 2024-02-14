<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/sql/v1beta4/cloud_sql_resources.proto

namespace Google\Cloud\Sql\V1beta4\DatabaseInstance;

use UnexpectedValueException;

/**
 * The SQL network architecture for the instance.
 *
 * Protobuf type <code>google.cloud.sql.v1beta4.DatabaseInstance.SqlNetworkArchitecture</code>
 */
class SqlNetworkArchitecture
{
    /**
     * Generated from protobuf enum <code>SQL_NETWORK_ARCHITECTURE_UNSPECIFIED = 0;</code>
     */
    const SQL_NETWORK_ARCHITECTURE_UNSPECIFIED = 0;
    /**
     * The instance uses the new network architecture.
     *
     * Generated from protobuf enum <code>NEW_NETWORK_ARCHITECTURE = 1;</code>
     */
    const NEW_NETWORK_ARCHITECTURE = 1;
    /**
     * The instance uses the old network architecture.
     *
     * Generated from protobuf enum <code>OLD_NETWORK_ARCHITECTURE = 2;</code>
     */
    const OLD_NETWORK_ARCHITECTURE = 2;

    private static $valueToName = [
        self::SQL_NETWORK_ARCHITECTURE_UNSPECIFIED => 'SQL_NETWORK_ARCHITECTURE_UNSPECIFIED',
        self::NEW_NETWORK_ARCHITECTURE => 'NEW_NETWORK_ARCHITECTURE',
        self::OLD_NETWORK_ARCHITECTURE => 'OLD_NETWORK_ARCHITECTURE',
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


