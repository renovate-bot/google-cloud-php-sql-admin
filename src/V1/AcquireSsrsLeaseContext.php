<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/sql/v1/cloud_sql_resources.proto

namespace Google\Cloud\Sql\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Acquire SSRS lease context.
 *
 * Generated from protobuf message <code>google.cloud.sql.v1.AcquireSsrsLeaseContext</code>
 */
class AcquireSsrsLeaseContext extends \Google\Protobuf\Internal\Message
{
    /**
     * The username to be used as the setup login to connect to the database
     * server for SSRS setup.
     *
     * Generated from protobuf field <code>optional string setup_login = 1;</code>
     */
    private $setup_login = null;
    /**
     * The username to be used as the service login to connect to the report
     * database for SSRS setup.
     *
     * Generated from protobuf field <code>optional string service_login = 2;</code>
     */
    private $service_login = null;
    /**
     * The report database to be used for SSRS setup.
     *
     * Generated from protobuf field <code>optional string report_database = 3;</code>
     */
    private $report_database = null;
    /**
     * Lease duration needed for SSRS setup.
     *
     * Generated from protobuf field <code>optional .google.protobuf.Duration duration = 4;</code>
     */
    private $duration = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $setup_login
     *           The username to be used as the setup login to connect to the database
     *           server for SSRS setup.
     *     @type string $service_login
     *           The username to be used as the service login to connect to the report
     *           database for SSRS setup.
     *     @type string $report_database
     *           The report database to be used for SSRS setup.
     *     @type \Google\Protobuf\Duration $duration
     *           Lease duration needed for SSRS setup.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Sql\V1\CloudSqlResources::initOnce();
        parent::__construct($data);
    }

    /**
     * The username to be used as the setup login to connect to the database
     * server for SSRS setup.
     *
     * Generated from protobuf field <code>optional string setup_login = 1;</code>
     * @return string
     */
    public function getSetupLogin()
    {
        return isset($this->setup_login) ? $this->setup_login : '';
    }

    public function hasSetupLogin()
    {
        return isset($this->setup_login);
    }

    public function clearSetupLogin()
    {
        unset($this->setup_login);
    }

    /**
     * The username to be used as the setup login to connect to the database
     * server for SSRS setup.
     *
     * Generated from protobuf field <code>optional string setup_login = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setSetupLogin($var)
    {
        GPBUtil::checkString($var, True);
        $this->setup_login = $var;

        return $this;
    }

    /**
     * The username to be used as the service login to connect to the report
     * database for SSRS setup.
     *
     * Generated from protobuf field <code>optional string service_login = 2;</code>
     * @return string
     */
    public function getServiceLogin()
    {
        return isset($this->service_login) ? $this->service_login : '';
    }

    public function hasServiceLogin()
    {
        return isset($this->service_login);
    }

    public function clearServiceLogin()
    {
        unset($this->service_login);
    }

    /**
     * The username to be used as the service login to connect to the report
     * database for SSRS setup.
     *
     * Generated from protobuf field <code>optional string service_login = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setServiceLogin($var)
    {
        GPBUtil::checkString($var, True);
        $this->service_login = $var;

        return $this;
    }

    /**
     * The report database to be used for SSRS setup.
     *
     * Generated from protobuf field <code>optional string report_database = 3;</code>
     * @return string
     */
    public function getReportDatabase()
    {
        return isset($this->report_database) ? $this->report_database : '';
    }

    public function hasReportDatabase()
    {
        return isset($this->report_database);
    }

    public function clearReportDatabase()
    {
        unset($this->report_database);
    }

    /**
     * The report database to be used for SSRS setup.
     *
     * Generated from protobuf field <code>optional string report_database = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setReportDatabase($var)
    {
        GPBUtil::checkString($var, True);
        $this->report_database = $var;

        return $this;
    }

    /**
     * Lease duration needed for SSRS setup.
     *
     * Generated from protobuf field <code>optional .google.protobuf.Duration duration = 4;</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getDuration()
    {
        return $this->duration;
    }

    public function hasDuration()
    {
        return isset($this->duration);
    }

    public function clearDuration()
    {
        unset($this->duration);
    }

    /**
     * Lease duration needed for SSRS setup.
     *
     * Generated from protobuf field <code>optional .google.protobuf.Duration duration = 4;</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setDuration($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->duration = $var;

        return $this;
    }

}
