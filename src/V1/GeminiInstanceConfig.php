<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/sql/v1/cloud_sql_instances.proto

namespace Google\Cloud\Sql\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Gemini configuration.
 *
 * Generated from protobuf message <code>google.cloud.sql.v1.GeminiInstanceConfig</code>
 */
class GeminiInstanceConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. Whether gemini is enabled.
     *
     * Generated from protobuf field <code>optional bool entitled = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $entitled = null;
    /**
     * Output only. Whether vacuum management is enabled.
     *
     * Generated from protobuf field <code>optional bool google_vacuum_mgmt_enabled = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $google_vacuum_mgmt_enabled = null;
    /**
     * Output only. Whether oom session cancel is enabled.
     *
     * Generated from protobuf field <code>optional bool oom_session_cancel_enabled = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $oom_session_cancel_enabled = null;
    /**
     * Output only. Whether active query is enabled.
     *
     * Generated from protobuf field <code>optional bool active_query_enabled = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $active_query_enabled = null;
    /**
     * Output only. Whether index advisor is enabled.
     *
     * Generated from protobuf field <code>optional bool index_advisor_enabled = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $index_advisor_enabled = null;
    /**
     * Output only. Whether flag recommender is enabled.
     *
     * Generated from protobuf field <code>optional bool flag_recommender_enabled = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $flag_recommender_enabled = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $entitled
     *           Output only. Whether gemini is enabled.
     *     @type bool $google_vacuum_mgmt_enabled
     *           Output only. Whether vacuum management is enabled.
     *     @type bool $oom_session_cancel_enabled
     *           Output only. Whether oom session cancel is enabled.
     *     @type bool $active_query_enabled
     *           Output only. Whether active query is enabled.
     *     @type bool $index_advisor_enabled
     *           Output only. Whether index advisor is enabled.
     *     @type bool $flag_recommender_enabled
     *           Output only. Whether flag recommender is enabled.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Sql\V1\CloudSqlInstances::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. Whether gemini is enabled.
     *
     * Generated from protobuf field <code>optional bool entitled = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return bool
     */
    public function getEntitled()
    {
        return isset($this->entitled) ? $this->entitled : false;
    }

    public function hasEntitled()
    {
        return isset($this->entitled);
    }

    public function clearEntitled()
    {
        unset($this->entitled);
    }

    /**
     * Output only. Whether gemini is enabled.
     *
     * Generated from protobuf field <code>optional bool entitled = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param bool $var
     * @return $this
     */
    public function setEntitled($var)
    {
        GPBUtil::checkBool($var);
        $this->entitled = $var;

        return $this;
    }

    /**
     * Output only. Whether vacuum management is enabled.
     *
     * Generated from protobuf field <code>optional bool google_vacuum_mgmt_enabled = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return bool
     */
    public function getGoogleVacuumMgmtEnabled()
    {
        return isset($this->google_vacuum_mgmt_enabled) ? $this->google_vacuum_mgmt_enabled : false;
    }

    public function hasGoogleVacuumMgmtEnabled()
    {
        return isset($this->google_vacuum_mgmt_enabled);
    }

    public function clearGoogleVacuumMgmtEnabled()
    {
        unset($this->google_vacuum_mgmt_enabled);
    }

    /**
     * Output only. Whether vacuum management is enabled.
     *
     * Generated from protobuf field <code>optional bool google_vacuum_mgmt_enabled = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param bool $var
     * @return $this
     */
    public function setGoogleVacuumMgmtEnabled($var)
    {
        GPBUtil::checkBool($var);
        $this->google_vacuum_mgmt_enabled = $var;

        return $this;
    }

    /**
     * Output only. Whether oom session cancel is enabled.
     *
     * Generated from protobuf field <code>optional bool oom_session_cancel_enabled = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return bool
     */
    public function getOomSessionCancelEnabled()
    {
        return isset($this->oom_session_cancel_enabled) ? $this->oom_session_cancel_enabled : false;
    }

    public function hasOomSessionCancelEnabled()
    {
        return isset($this->oom_session_cancel_enabled);
    }

    public function clearOomSessionCancelEnabled()
    {
        unset($this->oom_session_cancel_enabled);
    }

    /**
     * Output only. Whether oom session cancel is enabled.
     *
     * Generated from protobuf field <code>optional bool oom_session_cancel_enabled = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param bool $var
     * @return $this
     */
    public function setOomSessionCancelEnabled($var)
    {
        GPBUtil::checkBool($var);
        $this->oom_session_cancel_enabled = $var;

        return $this;
    }

    /**
     * Output only. Whether active query is enabled.
     *
     * Generated from protobuf field <code>optional bool active_query_enabled = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return bool
     */
    public function getActiveQueryEnabled()
    {
        return isset($this->active_query_enabled) ? $this->active_query_enabled : false;
    }

    public function hasActiveQueryEnabled()
    {
        return isset($this->active_query_enabled);
    }

    public function clearActiveQueryEnabled()
    {
        unset($this->active_query_enabled);
    }

    /**
     * Output only. Whether active query is enabled.
     *
     * Generated from protobuf field <code>optional bool active_query_enabled = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param bool $var
     * @return $this
     */
    public function setActiveQueryEnabled($var)
    {
        GPBUtil::checkBool($var);
        $this->active_query_enabled = $var;

        return $this;
    }

    /**
     * Output only. Whether index advisor is enabled.
     *
     * Generated from protobuf field <code>optional bool index_advisor_enabled = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return bool
     */
    public function getIndexAdvisorEnabled()
    {
        return isset($this->index_advisor_enabled) ? $this->index_advisor_enabled : false;
    }

    public function hasIndexAdvisorEnabled()
    {
        return isset($this->index_advisor_enabled);
    }

    public function clearIndexAdvisorEnabled()
    {
        unset($this->index_advisor_enabled);
    }

    /**
     * Output only. Whether index advisor is enabled.
     *
     * Generated from protobuf field <code>optional bool index_advisor_enabled = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param bool $var
     * @return $this
     */
    public function setIndexAdvisorEnabled($var)
    {
        GPBUtil::checkBool($var);
        $this->index_advisor_enabled = $var;

        return $this;
    }

    /**
     * Output only. Whether flag recommender is enabled.
     *
     * Generated from protobuf field <code>optional bool flag_recommender_enabled = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return bool
     */
    public function getFlagRecommenderEnabled()
    {
        return isset($this->flag_recommender_enabled) ? $this->flag_recommender_enabled : false;
    }

    public function hasFlagRecommenderEnabled()
    {
        return isset($this->flag_recommender_enabled);
    }

    public function clearFlagRecommenderEnabled()
    {
        unset($this->flag_recommender_enabled);
    }

    /**
     * Output only. Whether flag recommender is enabled.
     *
     * Generated from protobuf field <code>optional bool flag_recommender_enabled = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param bool $var
     * @return $this
     */
    public function setFlagRecommenderEnabled($var)
    {
        GPBUtil::checkBool($var);
        $this->flag_recommender_enabled = $var;

        return $this;
    }

}

