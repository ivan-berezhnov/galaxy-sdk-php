<?php
namespace SDS\Auth;
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


/**
 * 结构化存储授权相关接口(目前尚未开放)
 */
interface AuthServiceIf extends \SDS\Common\BaseServiceIf {
  /**
   * 通过第三方认证系统换发Storage Access Token，采用App Secret登录无需此过程
   * 
   * @param string $xiaomiAppId
   * @param int $appUserAuthProvider
   * @param string $authToken
   * @return \SDS\Auth\Credential 小米存储系统认证信息
   * 
   * @throws \SDS\Errors\ServiceException
   */
  public function createCredential($xiaomiAppId, $appUserAuthProvider, $authToken);
}

class AuthServiceClient extends \SDS\Common\BaseServiceClient implements \SDS\Auth\AuthServiceIf {
  public function __construct($input, $output=null) {
    parent::__construct($input, $output);
  }

  public function createCredential($xiaomiAppId, $appUserAuthProvider, $authToken)
  {
    $this->send_createCredential($xiaomiAppId, $appUserAuthProvider, $authToken);
    return $this->recv_createCredential();
  }

  public function send_createCredential($xiaomiAppId, $appUserAuthProvider, $authToken)
  {
    $args = new \SDS\Auth\AuthService_createCredential_args();
    $args->xiaomiAppId = $xiaomiAppId;
    $args->appUserAuthProvider = $appUserAuthProvider;
    $args->authToken = $authToken;
    $bin_accel = ($this->output_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_write_binary');
    if ($bin_accel)
    {
      thrift_protocol_write_binary($this->output_, 'createCredential', TMessageType::CALL, $args, $this->seqid_, $this->output_->isStrictWrite());
    }
    else
    {
      $this->output_->writeMessageBegin('createCredential', TMessageType::CALL, $this->seqid_);
      $args->write($this->output_);
      $this->output_->writeMessageEnd();
      $this->output_->getTransport()->flush();
    }
  }

  public function recv_createCredential()
  {
    $bin_accel = ($this->input_ instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_read_binary');
    if ($bin_accel) $result = thrift_protocol_read_binary($this->input_, '\SDS\Auth\AuthService_createCredential_result', $this->input_->isStrictRead());
    else
    {
      $rseqid = 0;
      $fname = null;
      $mtype = 0;

      $this->input_->readMessageBegin($fname, $mtype, $rseqid);
      if ($mtype == TMessageType::EXCEPTION) {
        $x = new TApplicationException();
        $x->read($this->input_);
        $this->input_->readMessageEnd();
        throw $x;
      }
      $result = new \SDS\Auth\AuthService_createCredential_result();
      $result->read($this->input_);
      $this->input_->readMessageEnd();
    }
    if ($result->success !== null) {
      return $result->success;
    }
    if ($result->se !== null) {
      throw $result->se;
    }
    throw new \Exception("createCredential failed: unknown result");
  }

}

// HELPER FUNCTIONS AND STRUCTURES

class AuthService_createCredential_args {
  static $_TSPEC;

  /**
   * @var string
   */
  public $xiaomiAppId = null;
  /**
   * @var int
   */
  public $appUserAuthProvider = null;
  /**
   * @var string
   */
  public $authToken = null;

  public function __construct($vals=null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'xiaomiAppId',
          'type' => TType::STRING,
          ),
        2 => array(
          'var' => 'appUserAuthProvider',
          'type' => TType::I32,
          ),
        3 => array(
          'var' => 'authToken',
          'type' => TType::STRING,
          ),
        );
    }
    if (is_array($vals)) {
      if (isset($vals['xiaomiAppId'])) {
        $this->xiaomiAppId = $vals['xiaomiAppId'];
      }
      if (isset($vals['appUserAuthProvider'])) {
        $this->appUserAuthProvider = $vals['appUserAuthProvider'];
      }
      if (isset($vals['authToken'])) {
        $this->authToken = $vals['authToken'];
      }
    }
  }

  public function getName() {
    return 'AuthService_createCredential_args';
  }

  public function read($input)
  {
    $xfer = 0;
    $fname = null;
    $ftype = 0;
    $fid = 0;
    $xfer += $input->readStructBegin($fname);
    while (true)
    {
      $xfer += $input->readFieldBegin($fname, $ftype, $fid);
      if ($ftype == TType::STOP) {
        break;
      }
      switch ($fid)
      {
        case 1:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->xiaomiAppId);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 2:
          if ($ftype == TType::I32) {
            $xfer += $input->readI32($this->appUserAuthProvider);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 3:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->authToken);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        default:
          $xfer += $input->skip($ftype);
          break;
      }
      $xfer += $input->readFieldEnd();
    }
    $xfer += $input->readStructEnd();
    return $xfer;
  }

  public function write($output) {
    $xfer = 0;
    $xfer += $output->writeStructBegin('AuthService_createCredential_args');
    if ($this->xiaomiAppId !== null) {
      $xfer += $output->writeFieldBegin('xiaomiAppId', TType::STRING, 1);
      $xfer += $output->writeString($this->xiaomiAppId);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->appUserAuthProvider !== null) {
      $xfer += $output->writeFieldBegin('appUserAuthProvider', TType::I32, 2);
      $xfer += $output->writeI32($this->appUserAuthProvider);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->authToken !== null) {
      $xfer += $output->writeFieldBegin('authToken', TType::STRING, 3);
      $xfer += $output->writeString($this->authToken);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();
    return $xfer;
  }

}

class AuthService_createCredential_result {
  static $_TSPEC;

  /**
   * @var \SDS\Auth\Credential
   */
  public $success = null;
  /**
   * @var \SDS\Errors\ServiceException
   */
  public $se = null;

  public function __construct($vals=null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        0 => array(
          'var' => 'success',
          'type' => TType::STRUCT,
          'class' => '\SDS\Auth\Credential',
          ),
        1 => array(
          'var' => 'se',
          'type' => TType::STRUCT,
          'class' => '\SDS\Errors\ServiceException',
          ),
        );
    }
    if (is_array($vals)) {
      if (isset($vals['success'])) {
        $this->success = $vals['success'];
      }
      if (isset($vals['se'])) {
        $this->se = $vals['se'];
      }
    }
  }

  public function getName() {
    return 'AuthService_createCredential_result';
  }

  public function read($input)
  {
    $xfer = 0;
    $fname = null;
    $ftype = 0;
    $fid = 0;
    $xfer += $input->readStructBegin($fname);
    while (true)
    {
      $xfer += $input->readFieldBegin($fname, $ftype, $fid);
      if ($ftype == TType::STOP) {
        break;
      }
      switch ($fid)
      {
        case 0:
          if ($ftype == TType::STRUCT) {
            $this->success = new \SDS\Auth\Credential();
            $xfer += $this->success->read($input);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 1:
          if ($ftype == TType::STRUCT) {
            $this->se = new \SDS\Errors\ServiceException();
            $xfer += $this->se->read($input);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        default:
          $xfer += $input->skip($ftype);
          break;
      }
      $xfer += $input->readFieldEnd();
    }
    $xfer += $input->readStructEnd();
    return $xfer;
  }

  public function write($output) {
    $xfer = 0;
    $xfer += $output->writeStructBegin('AuthService_createCredential_result');
    if ($this->success !== null) {
      if (!is_object($this->success)) {
        throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
      }
      $xfer += $output->writeFieldBegin('success', TType::STRUCT, 0);
      $xfer += $this->success->write($output);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->se !== null) {
      $xfer += $output->writeFieldBegin('se', TType::STRUCT, 1);
      $xfer += $this->se->write($output);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();
    return $xfer;
  }

}


