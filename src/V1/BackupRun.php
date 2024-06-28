<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/sql/v1/cloud_sql_backup_runs.proto

namespace Google\Cloud\Sql\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A BackupRun resource.
 *
 * Generated from protobuf message <code>google.cloud.sql.v1.BackupRun</code>
 */
class BackupRun extends \Google\Protobuf\Internal\Message
{
    /**
     * This is always `sql#backupRun`.
     *
     * Generated from protobuf field <code>string kind = 1;</code>
     */
    protected $kind = '';
    /**
     * The status of this run.
     *
     * Generated from protobuf field <code>.google.cloud.sql.v1.SqlBackupRunStatus status = 2;</code>
     */
    protected $status = 0;
    /**
     * The time the run was enqueued in UTC timezone in
     * [RFC 3339](https://tools.ietf.org/html/rfc3339) format, for example
     * `2012-11-15T16:19:00.094Z`.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp enqueued_time = 3;</code>
     */
    protected $enqueued_time = null;
    /**
     * The identifier for this backup run. Unique only for a specific Cloud SQL
     * instance.
     *
     * Generated from protobuf field <code>int64 id = 4;</code>
     */
    protected $id = 0;
    /**
     * The time the backup operation actually started in UTC timezone in
     * [RFC 3339](https://tools.ietf.org/html/rfc3339) format, for example
     * `2012-11-15T16:19:00.094Z`.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 5;</code>
     */
    protected $start_time = null;
    /**
     * The time the backup operation completed in UTC timezone in
     * [RFC 3339](https://tools.ietf.org/html/rfc3339) format, for example
     * `2012-11-15T16:19:00.094Z`.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 6;</code>
     */
    protected $end_time = null;
    /**
     * Information about why the backup operation failed. This is only present if
     * the run has the FAILED status.
     *
     * Generated from protobuf field <code>.google.cloud.sql.v1.OperationError error = 7;</code>
     */
    protected $error = null;
    /**
     * The type of this run; can be either "AUTOMATED" or "ON_DEMAND" or "FINAL".
     * This field defaults to "ON_DEMAND" and is ignored, when specified for
     * insert requests.
     *
     * Generated from protobuf field <code>.google.cloud.sql.v1.SqlBackupRunType type = 8;</code>
     */
    protected $type = 0;
    /**
     * The description of this run, only applicable to on-demand backups.
     *
     * Generated from protobuf field <code>string description = 9;</code>
     */
    protected $description = '';
    /**
     * The start time of the backup window during which this the backup was
     * attempted in [RFC 3339](https://tools.ietf.org/html/rfc3339) format, for
     * example `2012-11-15T16:19:00.094Z`.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp window_start_time = 10;</code>
     */
    protected $window_start_time = null;
    /**
     * Name of the database instance.
     *
     * Generated from protobuf field <code>string instance = 11;</code>
     */
    protected $instance = '';
    /**
     * The URI of this resource.
     *
     * Generated from protobuf field <code>string self_link = 12;</code>
     */
    protected $self_link = '';
    /**
     * Location of the backups.
     *
     * Generated from protobuf field <code>string location = 13;</code>
     */
    protected $location = '';
    /**
     * Encryption configuration specific to a backup.
     *
     * Generated from protobuf field <code>.google.cloud.sql.v1.DiskEncryptionConfiguration disk_encryption_configuration = 16;</code>
     */
    protected $disk_encryption_configuration = null;
    /**
     * Encryption status specific to a backup.
     *
     * Generated from protobuf field <code>.google.cloud.sql.v1.DiskEncryptionStatus disk_encryption_status = 17;</code>
     */
    protected $disk_encryption_status = null;
    /**
     * Specifies the kind of backup, PHYSICAL or DEFAULT_SNAPSHOT.
     *
     * Generated from protobuf field <code>.google.cloud.sql.v1.SqlBackupKind backup_kind = 19;</code>
     */
    protected $backup_kind = 0;
    /**
     * Backup time zone to prevent restores to an instance with
     * a different time zone. Now relevant only for SQL Server.
     *
     * Generated from protobuf field <code>string time_zone = 23;</code>
     */
    protected $time_zone = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $kind
     *           This is always `sql#backupRun`.
     *     @type int $status
     *           The status of this run.
     *     @type \Google\Protobuf\Timestamp $enqueued_time
     *           The time the run was enqueued in UTC timezone in
     *           [RFC 3339](https://tools.ietf.org/html/rfc3339) format, for example
     *           `2012-11-15T16:19:00.094Z`.
     *     @type int|string $id
     *           The identifier for this backup run. Unique only for a specific Cloud SQL
     *           instance.
     *     @type \Google\Protobuf\Timestamp $start_time
     *           The time the backup operation actually started in UTC timezone in
     *           [RFC 3339](https://tools.ietf.org/html/rfc3339) format, for example
     *           `2012-11-15T16:19:00.094Z`.
     *     @type \Google\Protobuf\Timestamp $end_time
     *           The time the backup operation completed in UTC timezone in
     *           [RFC 3339](https://tools.ietf.org/html/rfc3339) format, for example
     *           `2012-11-15T16:19:00.094Z`.
     *     @type \Google\Cloud\Sql\V1\OperationError $error
     *           Information about why the backup operation failed. This is only present if
     *           the run has the FAILED status.
     *     @type int $type
     *           The type of this run; can be either "AUTOMATED" or "ON_DEMAND" or "FINAL".
     *           This field defaults to "ON_DEMAND" and is ignored, when specified for
     *           insert requests.
     *     @type string $description
     *           The description of this run, only applicable to on-demand backups.
     *     @type \Google\Protobuf\Timestamp $window_start_time
     *           The start time of the backup window during which this the backup was
     *           attempted in [RFC 3339](https://tools.ietf.org/html/rfc3339) format, for
     *           example `2012-11-15T16:19:00.094Z`.
     *     @type string $instance
     *           Name of the database instance.
     *     @type string $self_link
     *           The URI of this resource.
     *     @type string $location
     *           Location of the backups.
     *     @type \Google\Cloud\Sql\V1\DiskEncryptionConfiguration $disk_encryption_configuration
     *           Encryption configuration specific to a backup.
     *     @type \Google\Cloud\Sql\V1\DiskEncryptionStatus $disk_encryption_status
     *           Encryption status specific to a backup.
     *     @type int $backup_kind
     *           Specifies the kind of backup, PHYSICAL or DEFAULT_SNAPSHOT.
     *     @type string $time_zone
     *           Backup time zone to prevent restores to an instance with
     *           a different time zone. Now relevant only for SQL Server.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Sql\V1\CloudSqlBackupRuns::initOnce();
        parent::__construct($data);
    }

    /**
     * This is always `sql#backupRun`.
     *
     * Generated from protobuf field <code>string kind = 1;</code>
     * @return string
     */
    public function getKind()
    {
        return $this->kind;
    }

    /**
     * This is always `sql#backupRun`.
     *
     * Generated from protobuf field <code>string kind = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setKind($var)
    {
        GPBUtil::checkString($var, True);
        $this->kind = $var;

        return $this;
    }

    /**
     * The status of this run.
     *
     * Generated from protobuf field <code>.google.cloud.sql.v1.SqlBackupRunStatus status = 2;</code>
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * The status of this run.
     *
     * Generated from protobuf field <code>.google.cloud.sql.v1.SqlBackupRunStatus status = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Sql\V1\SqlBackupRunStatus::class);
        $this->status = $var;

        return $this;
    }

    /**
     * The time the run was enqueued in UTC timezone in
     * [RFC 3339](https://tools.ietf.org/html/rfc3339) format, for example
     * `2012-11-15T16:19:00.094Z`.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp enqueued_time = 3;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getEnqueuedTime()
    {
        return $this->enqueued_time;
    }

    public function hasEnqueuedTime()
    {
        return isset($this->enqueued_time);
    }

    public function clearEnqueuedTime()
    {
        unset($this->enqueued_time);
    }

    /**
     * The time the run was enqueued in UTC timezone in
     * [RFC 3339](https://tools.ietf.org/html/rfc3339) format, for example
     * `2012-11-15T16:19:00.094Z`.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp enqueued_time = 3;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setEnqueuedTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->enqueued_time = $var;

        return $this;
    }

    /**
     * The identifier for this backup run. Unique only for a specific Cloud SQL
     * instance.
     *
     * Generated from protobuf field <code>int64 id = 4;</code>
     * @return int|string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * The identifier for this backup run. Unique only for a specific Cloud SQL
     * instance.
     *
     * Generated from protobuf field <code>int64 id = 4;</code>
     * @param int|string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkInt64($var);
        $this->id = $var;

        return $this;
    }

    /**
     * The time the backup operation actually started in UTC timezone in
     * [RFC 3339](https://tools.ietf.org/html/rfc3339) format, for example
     * `2012-11-15T16:19:00.094Z`.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 5;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getStartTime()
    {
        return $this->start_time;
    }

    public function hasStartTime()
    {
        return isset($this->start_time);
    }

    public function clearStartTime()
    {
        unset($this->start_time);
    }

    /**
     * The time the backup operation actually started in UTC timezone in
     * [RFC 3339](https://tools.ietf.org/html/rfc3339) format, for example
     * `2012-11-15T16:19:00.094Z`.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 5;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setStartTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->start_time = $var;

        return $this;
    }

    /**
     * The time the backup operation completed in UTC timezone in
     * [RFC 3339](https://tools.ietf.org/html/rfc3339) format, for example
     * `2012-11-15T16:19:00.094Z`.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 6;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getEndTime()
    {
        return $this->end_time;
    }

    public function hasEndTime()
    {
        return isset($this->end_time);
    }

    public function clearEndTime()
    {
        unset($this->end_time);
    }

    /**
     * The time the backup operation completed in UTC timezone in
     * [RFC 3339](https://tools.ietf.org/html/rfc3339) format, for example
     * `2012-11-15T16:19:00.094Z`.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 6;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setEndTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->end_time = $var;

        return $this;
    }

    /**
     * Information about why the backup operation failed. This is only present if
     * the run has the FAILED status.
     *
     * Generated from protobuf field <code>.google.cloud.sql.v1.OperationError error = 7;</code>
     * @return \Google\Cloud\Sql\V1\OperationError|null
     */
    public function getError()
    {
        return $this->error;
    }

    public function hasError()
    {
        return isset($this->error);
    }

    public function clearError()
    {
        unset($this->error);
    }

    /**
     * Information about why the backup operation failed. This is only present if
     * the run has the FAILED status.
     *
     * Generated from protobuf field <code>.google.cloud.sql.v1.OperationError error = 7;</code>
     * @param \Google\Cloud\Sql\V1\OperationError $var
     * @return $this
     */
    public function setError($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Sql\V1\OperationError::class);
        $this->error = $var;

        return $this;
    }

    /**
     * The type of this run; can be either "AUTOMATED" or "ON_DEMAND" or "FINAL".
     * This field defaults to "ON_DEMAND" and is ignored, when specified for
     * insert requests.
     *
     * Generated from protobuf field <code>.google.cloud.sql.v1.SqlBackupRunType type = 8;</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * The type of this run; can be either "AUTOMATED" or "ON_DEMAND" or "FINAL".
     * This field defaults to "ON_DEMAND" and is ignored, when specified for
     * insert requests.
     *
     * Generated from protobuf field <code>.google.cloud.sql.v1.SqlBackupRunType type = 8;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Sql\V1\SqlBackupRunType::class);
        $this->type = $var;

        return $this;
    }

    /**
     * The description of this run, only applicable to on-demand backups.
     *
     * Generated from protobuf field <code>string description = 9;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * The description of this run, only applicable to on-demand backups.
     *
     * Generated from protobuf field <code>string description = 9;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * The start time of the backup window during which this the backup was
     * attempted in [RFC 3339](https://tools.ietf.org/html/rfc3339) format, for
     * example `2012-11-15T16:19:00.094Z`.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp window_start_time = 10;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getWindowStartTime()
    {
        return $this->window_start_time;
    }

    public function hasWindowStartTime()
    {
        return isset($this->window_start_time);
    }

    public function clearWindowStartTime()
    {
        unset($this->window_start_time);
    }

    /**
     * The start time of the backup window during which this the backup was
     * attempted in [RFC 3339](https://tools.ietf.org/html/rfc3339) format, for
     * example `2012-11-15T16:19:00.094Z`.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp window_start_time = 10;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setWindowStartTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->window_start_time = $var;

        return $this;
    }

    /**
     * Name of the database instance.
     *
     * Generated from protobuf field <code>string instance = 11;</code>
     * @return string
     */
    public function getInstance()
    {
        return $this->instance;
    }

    /**
     * Name of the database instance.
     *
     * Generated from protobuf field <code>string instance = 11;</code>
     * @param string $var
     * @return $this
     */
    public function setInstance($var)
    {
        GPBUtil::checkString($var, True);
        $this->instance = $var;

        return $this;
    }

    /**
     * The URI of this resource.
     *
     * Generated from protobuf field <code>string self_link = 12;</code>
     * @return string
     */
    public function getSelfLink()
    {
        return $this->self_link;
    }

    /**
     * The URI of this resource.
     *
     * Generated from protobuf field <code>string self_link = 12;</code>
     * @param string $var
     * @return $this
     */
    public function setSelfLink($var)
    {
        GPBUtil::checkString($var, True);
        $this->self_link = $var;

        return $this;
    }

    /**
     * Location of the backups.
     *
     * Generated from protobuf field <code>string location = 13;</code>
     * @return string
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Location of the backups.
     *
     * Generated from protobuf field <code>string location = 13;</code>
     * @param string $var
     * @return $this
     */
    public function setLocation($var)
    {
        GPBUtil::checkString($var, True);
        $this->location = $var;

        return $this;
    }

    /**
     * Encryption configuration specific to a backup.
     *
     * Generated from protobuf field <code>.google.cloud.sql.v1.DiskEncryptionConfiguration disk_encryption_configuration = 16;</code>
     * @return \Google\Cloud\Sql\V1\DiskEncryptionConfiguration|null
     */
    public function getDiskEncryptionConfiguration()
    {
        return $this->disk_encryption_configuration;
    }

    public function hasDiskEncryptionConfiguration()
    {
        return isset($this->disk_encryption_configuration);
    }

    public function clearDiskEncryptionConfiguration()
    {
        unset($this->disk_encryption_configuration);
    }

    /**
     * Encryption configuration specific to a backup.
     *
     * Generated from protobuf field <code>.google.cloud.sql.v1.DiskEncryptionConfiguration disk_encryption_configuration = 16;</code>
     * @param \Google\Cloud\Sql\V1\DiskEncryptionConfiguration $var
     * @return $this
     */
    public function setDiskEncryptionConfiguration($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Sql\V1\DiskEncryptionConfiguration::class);
        $this->disk_encryption_configuration = $var;

        return $this;
    }

    /**
     * Encryption status specific to a backup.
     *
     * Generated from protobuf field <code>.google.cloud.sql.v1.DiskEncryptionStatus disk_encryption_status = 17;</code>
     * @return \Google\Cloud\Sql\V1\DiskEncryptionStatus|null
     */
    public function getDiskEncryptionStatus()
    {
        return $this->disk_encryption_status;
    }

    public function hasDiskEncryptionStatus()
    {
        return isset($this->disk_encryption_status);
    }

    public function clearDiskEncryptionStatus()
    {
        unset($this->disk_encryption_status);
    }

    /**
     * Encryption status specific to a backup.
     *
     * Generated from protobuf field <code>.google.cloud.sql.v1.DiskEncryptionStatus disk_encryption_status = 17;</code>
     * @param \Google\Cloud\Sql\V1\DiskEncryptionStatus $var
     * @return $this
     */
    public function setDiskEncryptionStatus($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Sql\V1\DiskEncryptionStatus::class);
        $this->disk_encryption_status = $var;

        return $this;
    }

    /**
     * Specifies the kind of backup, PHYSICAL or DEFAULT_SNAPSHOT.
     *
     * Generated from protobuf field <code>.google.cloud.sql.v1.SqlBackupKind backup_kind = 19;</code>
     * @return int
     */
    public function getBackupKind()
    {
        return $this->backup_kind;
    }

    /**
     * Specifies the kind of backup, PHYSICAL or DEFAULT_SNAPSHOT.
     *
     * Generated from protobuf field <code>.google.cloud.sql.v1.SqlBackupKind backup_kind = 19;</code>
     * @param int $var
     * @return $this
     */
    public function setBackupKind($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Sql\V1\SqlBackupKind::class);
        $this->backup_kind = $var;

        return $this;
    }

    /**
     * Backup time zone to prevent restores to an instance with
     * a different time zone. Now relevant only for SQL Server.
     *
     * Generated from protobuf field <code>string time_zone = 23;</code>
     * @return string
     */
    public function getTimeZone()
    {
        return $this->time_zone;
    }

    /**
     * Backup time zone to prevent restores to an instance with
     * a different time zone. Now relevant only for SQL Server.
     *
     * Generated from protobuf field <code>string time_zone = 23;</code>
     * @param string $var
     * @return $this
     */
    public function setTimeZone($var)
    {
        GPBUtil::checkString($var, True);
        $this->time_zone = $var;

        return $this;
    }

}

