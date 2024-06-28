<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/sql/v1/cloud_sql_resources.proto

namespace Google\Cloud\Sql\V1\ExportContext;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>google.cloud.sql.v1.ExportContext.SqlExportOptions</code>
 */
class SqlExportOptions extends \Google\Protobuf\Internal\Message
{
    /**
     * Tables to export, or that were exported, from the specified database. If
     * you specify tables, specify one and only one database. For PostgreSQL
     * instances, you can specify only one table.
     *
     * Generated from protobuf field <code>repeated string tables = 1;</code>
     */
    private $tables;
    /**
     * Export only schemas.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue schema_only = 2;</code>
     */
    protected $schema_only = null;
    /**
     * Generated from protobuf field <code>.google.cloud.sql.v1.ExportContext.SqlExportOptions.MysqlExportOptions mysql_export_options = 3;</code>
     */
    protected $mysql_export_options = null;
    /**
     * Optional. The number of threads to use for parallel export.
     *
     * Generated from protobuf field <code>.google.protobuf.Int32Value threads = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $threads = null;
    /**
     * Optional. Whether or not the export should be parallel.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue parallel = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $parallel = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $tables
     *           Tables to export, or that were exported, from the specified database. If
     *           you specify tables, specify one and only one database. For PostgreSQL
     *           instances, you can specify only one table.
     *     @type \Google\Protobuf\BoolValue $schema_only
     *           Export only schemas.
     *     @type \Google\Cloud\Sql\V1\ExportContext\SqlExportOptions\MysqlExportOptions $mysql_export_options
     *     @type \Google\Protobuf\Int32Value $threads
     *           Optional. The number of threads to use for parallel export.
     *     @type \Google\Protobuf\BoolValue $parallel
     *           Optional. Whether or not the export should be parallel.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Sql\V1\CloudSqlResources::initOnce();
        parent::__construct($data);
    }

    /**
     * Tables to export, or that were exported, from the specified database. If
     * you specify tables, specify one and only one database. For PostgreSQL
     * instances, you can specify only one table.
     *
     * Generated from protobuf field <code>repeated string tables = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTables()
    {
        return $this->tables;
    }

    /**
     * Tables to export, or that were exported, from the specified database. If
     * you specify tables, specify one and only one database. For PostgreSQL
     * instances, you can specify only one table.
     *
     * Generated from protobuf field <code>repeated string tables = 1;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTables($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->tables = $arr;

        return $this;
    }

    /**
     * Export only schemas.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue schema_only = 2;</code>
     * @return \Google\Protobuf\BoolValue|null
     */
    public function getSchemaOnly()
    {
        return $this->schema_only;
    }

    public function hasSchemaOnly()
    {
        return isset($this->schema_only);
    }

    public function clearSchemaOnly()
    {
        unset($this->schema_only);
    }

    /**
     * Returns the unboxed value from <code>getSchemaOnly()</code>

     * Export only schemas.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue schema_only = 2;</code>
     * @return bool|null
     */
    public function getSchemaOnlyUnwrapped()
    {
        return $this->readWrapperValue("schema_only");
    }

    /**
     * Export only schemas.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue schema_only = 2;</code>
     * @param \Google\Protobuf\BoolValue $var
     * @return $this
     */
    public function setSchemaOnly($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\BoolValue::class);
        $this->schema_only = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\BoolValue object.

     * Export only schemas.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue schema_only = 2;</code>
     * @param bool|null $var
     * @return $this
     */
    public function setSchemaOnlyUnwrapped($var)
    {
        $this->writeWrapperValue("schema_only", $var);
        return $this;}

    /**
     * Generated from protobuf field <code>.google.cloud.sql.v1.ExportContext.SqlExportOptions.MysqlExportOptions mysql_export_options = 3;</code>
     * @return \Google\Cloud\Sql\V1\ExportContext\SqlExportOptions\MysqlExportOptions|null
     */
    public function getMysqlExportOptions()
    {
        return $this->mysql_export_options;
    }

    public function hasMysqlExportOptions()
    {
        return isset($this->mysql_export_options);
    }

    public function clearMysqlExportOptions()
    {
        unset($this->mysql_export_options);
    }

    /**
     * Generated from protobuf field <code>.google.cloud.sql.v1.ExportContext.SqlExportOptions.MysqlExportOptions mysql_export_options = 3;</code>
     * @param \Google\Cloud\Sql\V1\ExportContext\SqlExportOptions\MysqlExportOptions $var
     * @return $this
     */
    public function setMysqlExportOptions($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Sql\V1\ExportContext\SqlExportOptions\MysqlExportOptions::class);
        $this->mysql_export_options = $var;

        return $this;
    }

    /**
     * Optional. The number of threads to use for parallel export.
     *
     * Generated from protobuf field <code>.google.protobuf.Int32Value threads = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Int32Value|null
     */
    public function getThreads()
    {
        return $this->threads;
    }

    public function hasThreads()
    {
        return isset($this->threads);
    }

    public function clearThreads()
    {
        unset($this->threads);
    }

    /**
     * Returns the unboxed value from <code>getThreads()</code>

     * Optional. The number of threads to use for parallel export.
     *
     * Generated from protobuf field <code>.google.protobuf.Int32Value threads = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int|null
     */
    public function getThreadsUnwrapped()
    {
        return $this->readWrapperValue("threads");
    }

    /**
     * Optional. The number of threads to use for parallel export.
     *
     * Generated from protobuf field <code>.google.protobuf.Int32Value threads = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Protobuf\Int32Value $var
     * @return $this
     */
    public function setThreads($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int32Value::class);
        $this->threads = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\Int32Value object.

     * Optional. The number of threads to use for parallel export.
     *
     * Generated from protobuf field <code>.google.protobuf.Int32Value threads = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int|null $var
     * @return $this
     */
    public function setThreadsUnwrapped($var)
    {
        $this->writeWrapperValue("threads", $var);
        return $this;}

    /**
     * Optional. Whether or not the export should be parallel.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue parallel = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\BoolValue|null
     */
    public function getParallel()
    {
        return $this->parallel;
    }

    public function hasParallel()
    {
        return isset($this->parallel);
    }

    public function clearParallel()
    {
        unset($this->parallel);
    }

    /**
     * Returns the unboxed value from <code>getParallel()</code>

     * Optional. Whether or not the export should be parallel.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue parallel = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return bool|null
     */
    public function getParallelUnwrapped()
    {
        return $this->readWrapperValue("parallel");
    }

    /**
     * Optional. Whether or not the export should be parallel.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue parallel = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Protobuf\BoolValue $var
     * @return $this
     */
    public function setParallel($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\BoolValue::class);
        $this->parallel = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\BoolValue object.

     * Optional. Whether or not the export should be parallel.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue parallel = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param bool|null $var
     * @return $this
     */
    public function setParallelUnwrapped($var)
    {
        $this->writeWrapperValue("parallel", $var);
        return $this;}

}


