<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/sql/v1/cloud_sql_connect.proto

namespace Google\Cloud\Sql\V1\ConnectSettings;

use UnexpectedValueException;

/**
 * Various Certificate Authority (CA) modes for certificate signing.
 *
 * Protobuf type <code>google.cloud.sql.v1.ConnectSettings.CaMode</code>
 */
class CaMode
{
    /**
     * CA mode is unknown.
     *
     * Generated from protobuf enum <code>CA_MODE_UNSPECIFIED = 0;</code>
     */
    const CA_MODE_UNSPECIFIED = 0;
    /**
     * Google-managed self-signed internal CA.
     *
     * Generated from protobuf enum <code>GOOGLE_MANAGED_INTERNAL_CA = 1;</code>
     */
    const GOOGLE_MANAGED_INTERNAL_CA = 1;
    /**
     * Google-managed regional CA part of root CA hierarchy hosted on Google
     * Cloud's Certificate Authority Service (CAS).
     *
     * Generated from protobuf enum <code>GOOGLE_MANAGED_CAS_CA = 2;</code>
     */
    const GOOGLE_MANAGED_CAS_CA = 2;

    private static $valueToName = [
        self::CA_MODE_UNSPECIFIED => 'CA_MODE_UNSPECIFIED',
        self::GOOGLE_MANAGED_INTERNAL_CA => 'GOOGLE_MANAGED_INTERNAL_CA',
        self::GOOGLE_MANAGED_CAS_CA => 'GOOGLE_MANAGED_CAS_CA',
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


