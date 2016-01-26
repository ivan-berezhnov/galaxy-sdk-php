<?php
namespace EMQ\Range;

/**
 * Autogenerated by Thrift Compiler (0.9.2)
 *
 * DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
 *  @generated
 */
use Thrift\Base\TBase;
use Thrift\Type\TType;
use Thrift\Type\TMessageType;
use Thrift\Exception\TException;
use Thrift\Exception\TProtocolException;
use Thrift\Protocol\TProtocol;
use Thrift\Protocol\TBinaryProtocolAccelerated;
use Thrift\Exception\TApplicationException;


final class Constant extends \Thrift\Type\TConstant {
  static protected $GALAXY_EMQ_QUEUE_DELAY_SECONDS_DEFAULT;
  static protected $GALAXY_EMQ_QUEUE_DELAY_SECONDS_MINIMAL;
  static protected $GALAXY_EMQ_QUEUE_DELAY_SECONDS_MAXIMAL;
  static protected $GALAXY_EMQ_QUEUE_INVISIBILITY_SECONDS_DEFAULT;
  static protected $GALAXY_EMQ_QUEUE_INVISIBILITY_SECONDS_MINIMAL;
  static protected $GALAXY_EMQ_QUEUE_INVISIBILITY_SECONDS_MAXIMAL;
  static protected $GALAXY_EMQ_QUEUE_RECEIVE_WAIT_SECONDS_DEFAULT;
  static protected $GALAXY_EMQ_QUEUE_RECEIVE_WAIT_SECONDS_MINIMAL;
  static protected $GALAXY_EMQ_QUEUE_RECEIVE_WAIT_SECONDS_MAXIMAL;
  static protected $GALAXY_EMQ_QUEUE_RECEIVE_NUMBER_DEFAULT;
  static protected $GALAXY_EMQ_QUEUE_RECEIVE_NUMBER_MINIMAL;
  static protected $GALAXY_EMQ_QUEUE_RECEIVE_NUMBER_MAXIMAL;
  static protected $GALAXY_EMQ_QUEUE_RETENTION_SECONDS_DEFAULT;
  static protected $GALAXY_EMQ_QUEUE_RETENTION_SECONDS_MINIMAL;
  static protected $GALAXY_EMQ_QUEUE_RETENTION_SECONDS_MAXIMAL;
  static protected $GALAXY_EMQ_QUEUE_MAX_MESSAGE_BYTES_DEFAULT;
  static protected $GALAXY_EMQ_QUEUE_MAX_MESSAGE_BYTES_MINIMAL;
  static protected $GALAXY_EMQ_QUEUE_MAX_MESSAGE_BYTES_MAXIMAL;
  static protected $GALAXY_EMQ_QUEUE_PARTITION_NUMBER_DEFAULT;
  static protected $GALAXY_EMQ_QUEUE_PARTITION_NUMBER_MINIMAL;
  static protected $GALAXY_EMQ_QUEUE_PARTITION_NUMBER_MAXIMAL;
  static protected $GALAXY_EMQ_MESSAGE_DELAY_SECONDS_DEFAULT;
  static protected $GALAXY_EMQ_MESSAGE_DELAY_SECONDS_MINIMAL;
  static protected $GALAXY_EMQ_MESSAGE_DELAY_SECONDS_MAXIMAL;
  static protected $GALAXY_EMQ_MESSAGE_INVISIBILITY_SECONDS_DEFAULT;
  static protected $GALAXY_EMQ_MESSAGE_INVISIBILITY_SECONDS_MINIMAL;
  static protected $GALAXY_EMQ_MESSAGE_INVISIBILITY_SECONDS_MAXIMAL;
  static protected $GALAXY_EMQ_QUEUE_MAX_SPACE_QUOTA_DEFAULT;
  static protected $GALAXY_EMQ_QUEUE_MAX_SPACE_QUOTA_MINIMAL;
  static protected $GALAXY_EMQ_QUEUE_MAX_SPACE_QUOTA_MAXIMAL;
  static protected $GALAXY_EMQ_QUEUE_READ_QPS_DEFAULT;
  static protected $GALAXY_EMQ_QUEUE_READ_QPS_MINIMAL;
  static protected $GALAXY_EMQ_QUEUE_READ_QPS_MAXIMAL;
  static protected $GALAXY_EMQ_QUEUE_WRITE_QPS_DEFAULT;
  static protected $GALAXY_EMQ_QUEUE_WRITE_QPS_MINIMAL;
  static protected $GALAXY_EMQ_QUEUE_WRITE_QPS_MAXIMAL;
  static protected $GALAXY_EMQ_QUEUE_REDRIVE_POLICY_MAX_RECEIVE_TIME_DEFAULT;
  static protected $GALAXY_EMQ_QUEUE_REDRIVE_POLICY_MAX_RECEIVE_TIME_MINIMAL;
  static protected $GALAXY_EMQ_QUEUE_REDRIVE_POLICY_MAX_RECEIVE_TIME_MAXIMAL;

  static protected function init_GALAXY_EMQ_QUEUE_DELAY_SECONDS_DEFAULT() {
    return     /**
     * message delay seconds in this queue, default 0s (0s ~ 15min)
     */
0;
  }

  static protected function init_GALAXY_EMQ_QUEUE_DELAY_SECONDS_MINIMAL() {
    return 0;
  }

  static protected function init_GALAXY_EMQ_QUEUE_DELAY_SECONDS_MAXIMAL() {
    return 900;
  }

  static protected function init_GALAXY_EMQ_QUEUE_INVISIBILITY_SECONDS_DEFAULT() {
    return     /**
     * message invisibility seconds in this queue, default 30s (1s ~ 12hour)
     */
30;
  }

  static protected function init_GALAXY_EMQ_QUEUE_INVISIBILITY_SECONDS_MINIMAL() {
    return 2;
  }

  static protected function init_GALAXY_EMQ_QUEUE_INVISIBILITY_SECONDS_MAXIMAL() {
    return 43200;
  }

  static protected function init_GALAXY_EMQ_QUEUE_RECEIVE_WAIT_SECONDS_DEFAULT() {
    return     /**
     * receive message seconds in this queue, default 0s which means no wait (0s ~ 20s)
     */
0;
  }

  static protected function init_GALAXY_EMQ_QUEUE_RECEIVE_WAIT_SECONDS_MINIMAL() {
    return 0;
  }

  static protected function init_GALAXY_EMQ_QUEUE_RECEIVE_WAIT_SECONDS_MAXIMAL() {
    return 20;
  }

  static protected function init_GALAXY_EMQ_QUEUE_RECEIVE_NUMBER_DEFAULT() {
    return     /**
     * maximum receive message number in this queue, default 100(1 ~ 100)
     */
100;
  }

  static protected function init_GALAXY_EMQ_QUEUE_RECEIVE_NUMBER_MINIMAL() {
    return 1;
  }

  static protected function init_GALAXY_EMQ_QUEUE_RECEIVE_NUMBER_MAXIMAL() {
    return 100;
  }

  static protected function init_GALAXY_EMQ_QUEUE_RETENTION_SECONDS_DEFAULT() {
    return     /**
     * message retention seconds in this queue, default 4days (60s ~ 14days)
     */
345600;
  }

  static protected function init_GALAXY_EMQ_QUEUE_RETENTION_SECONDS_MINIMAL() {
    return 60;
  }

  static protected function init_GALAXY_EMQ_QUEUE_RETENTION_SECONDS_MAXIMAL() {
    return 1209600;
  }

  static protected function init_GALAXY_EMQ_QUEUE_MAX_MESSAGE_BYTES_DEFAULT() {
    return     /**
     * max message size in this queue, default 256K (1K ~ 256K)
     */
262144;
  }

  static protected function init_GALAXY_EMQ_QUEUE_MAX_MESSAGE_BYTES_MINIMAL() {
    return 1024;
  }

  static protected function init_GALAXY_EMQ_QUEUE_MAX_MESSAGE_BYTES_MAXIMAL() {
    return 262144;
  }

  static protected function init_GALAXY_EMQ_QUEUE_PARTITION_NUMBER_DEFAULT() {
    return 4;
  }

  static protected function init_GALAXY_EMQ_QUEUE_PARTITION_NUMBER_MINIMAL() {
    return 1;
  }

  static protected function init_GALAXY_EMQ_QUEUE_PARTITION_NUMBER_MAXIMAL() {
    return 255;
  }

  static protected function init_GALAXY_EMQ_MESSAGE_DELAY_SECONDS_DEFAULT() {
    return     /**
     * message delay seconds that overwrite GALAXY_EMQ_QUEUE_DELAY_SECONDS,
     * default 0s (0s ~ 15min)
     */
0;
  }

  static protected function init_GALAXY_EMQ_MESSAGE_DELAY_SECONDS_MINIMAL() {
    return 0;
  }

  static protected function init_GALAXY_EMQ_MESSAGE_DELAY_SECONDS_MAXIMAL() {
    return 900;
  }

  static protected function init_GALAXY_EMQ_MESSAGE_INVISIBILITY_SECONDS_DEFAULT() {
    return     /**
     * message invisibility seconds that overwrite
     * GALAXY_EMQ_QUEUE_INVISIBILITY_SECONDS, default 30s (0s ~ 12hour)
     */
30;
  }

  static protected function init_GALAXY_EMQ_MESSAGE_INVISIBILITY_SECONDS_MINIMAL() {
    return 2;
  }

  static protected function init_GALAXY_EMQ_MESSAGE_INVISIBILITY_SECONDS_MAXIMAL() {
    return 43200;
  }

  static protected function init_GALAXY_EMQ_QUEUE_MAX_SPACE_QUOTA_DEFAULT() {
    return     /**
     * queue space quota
     * default 1G (0 ~ 100G)
     */
1000000000;
  }

  static protected function init_GALAXY_EMQ_QUEUE_MAX_SPACE_QUOTA_MINIMAL() {
    return 0;
  }

  static protected function init_GALAXY_EMQ_QUEUE_MAX_SPACE_QUOTA_MAXIMAL() {
    return 100000000000;
  }

  static protected function init_GALAXY_EMQ_QUEUE_READ_QPS_DEFAULT() {
    return     /**
     * queue read qps, default 1000 (0 ~ 100000)
     */
1000;
  }

  static protected function init_GALAXY_EMQ_QUEUE_READ_QPS_MINIMAL() {
    return 0;
  }

  static protected function init_GALAXY_EMQ_QUEUE_READ_QPS_MAXIMAL() {
    return 100000;
  }

  static protected function init_GALAXY_EMQ_QUEUE_WRITE_QPS_DEFAULT() {
    return     /**
     * queue write qps, default 1000 (0 ~ 100000)
     */
1000;
  }

  static protected function init_GALAXY_EMQ_QUEUE_WRITE_QPS_MINIMAL() {
    return 0;
  }

  static protected function init_GALAXY_EMQ_QUEUE_WRITE_QPS_MAXIMAL() {
    return 100000;
  }

  static protected function init_GALAXY_EMQ_QUEUE_REDRIVE_POLICY_MAX_RECEIVE_TIME_DEFAULT() {
    return     /**
     * queue redrive policy max receive time, default 2 (1 ~ 100)
     */
2;
  }

  static protected function init_GALAXY_EMQ_QUEUE_REDRIVE_POLICY_MAX_RECEIVE_TIME_MINIMAL() {
    return 1;
  }

  static protected function init_GALAXY_EMQ_QUEUE_REDRIVE_POLICY_MAX_RECEIVE_TIME_MAXIMAL() {
    return 100;
  }
}


