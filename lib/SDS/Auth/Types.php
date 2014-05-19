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
 * 小米存储系统认证信息类型
 */
final class UserType {
  /**
   * 小米开发者用户SSO登录，此登录方式不支持签名，需要设置：
   * secretKeyId = sid (目前开发者站sid为mideveloper)，
   * secretKey = serviceToken
   */
  const DEV_XIAOMI_SSO = 1;
  /**
   * 小米开发者用户，目前不支持
   */
  const DEV_XIAOMI = 2;
  /**
   * 小米开发者AppID, AppSecret登录
   */
  const APP_SECRET = 10;
  /**
   * 存储平台签发的Storage Access Token登录，
   * 用于支持第三方认证系统(如各大OAuth系统)
   * 目前不支持
   */
  const APP_ACCESS_TOKEN = 11;
  /**
   * 小米SSO登录的用户用户，此登录方式不支持签名，需要设置：
   * secretKeyId = appId，
   * secretKey = serviceToken (对应的sid为galaxysds)
   */
  const APP_XIAOMI_SSO = 12;
  /**
   * 匿名登录
   */
  const APP_ANONYMOUS = 13;
  static public $__names = array(
    1 => 'DEV_XIAOMI_SSO',
    2 => 'DEV_XIAOMI',
    10 => 'APP_SECRET',
    11 => 'APP_ACCESS_TOKEN',
    12 => 'APP_XIAOMI_SSO',
    13 => 'APP_ANONYMOUS',
  );
}

/**
 * 签名使用的HMMAC算法
 */
final class MacAlgorithm {
  const HmacMD5 = 1;
  const HmacSHA1 = 2;
  const HmacSHA256 = 3;
  static public $__names = array(
    1 => 'HmacMD5',
    2 => 'HmacSHA1',
    3 => 'HmacSHA256',
  );
}

/**
 * 第三方身份认证提供方，用于认证应用用户(非开发者)。
 * 目前提供小米SSO和几种常见OAuth系统
 */
final class AppUserAuthProvider {
  const XIAOMI_SSO = 1;
  const XIAOMI_OAUTH = 2;
  const QQ_OAUTH = 3;
  const SINA_OAUTH = 4;
  const RENREN_OAUTH = 5;
  static public $__names = array(
    1 => 'XIAOMI_SSO',
    2 => 'XIAOMI_OAUTH',
    3 => 'QQ_OAUTH',
    4 => 'SINA_OAUTH',
    5 => 'RENREN_OAUTH',
  );
}

/**
 * 小米存储系统认证信息
 */
class Credential {
  static $_TSPEC;

  /**
   * 用户登录类型
   * 
   * @var int
   */
  public $type = null;
  /**
   * 用于服务端查询SecretKey的键值:
   * 1) userId: 对应User Secret
   * 2) appId: 对应App Secret，匿名登录也需设置
   * 3) storageAccessTokenId: 对应Storage Access Token
   * 
   * @var string
   */
  public $secretKeyId = null;
  /**
   * Secret Key
   * 
   * @var string
   */
  public $secretKey = null;

  public function __construct($vals=null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'type',
          'type' => TType::I32,
          ),
        2 => array(
          'var' => 'secretKeyId',
          'type' => TType::STRING,
          ),
        3 => array(
          'var' => 'secretKey',
          'type' => TType::STRING,
          ),
        );
    }
    if (is_array($vals)) {
      if (isset($vals['type'])) {
        $this->type = $vals['type'];
      }
      if (isset($vals['secretKeyId'])) {
        $this->secretKeyId = $vals['secretKeyId'];
      }
      if (isset($vals['secretKey'])) {
        $this->secretKey = $vals['secretKey'];
      }
    }
  }

  public function getName() {
    return 'Credential';
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
          if ($ftype == TType::I32) {
            $xfer += $input->readI32($this->type);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 2:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->secretKeyId);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 3:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->secretKey);
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
    $xfer += $output->writeStructBegin('Credential');
    if ($this->type !== null) {
      $xfer += $output->writeFieldBegin('type', TType::I32, 1);
      $xfer += $output->writeI32($this->type);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->secretKeyId !== null) {
      $xfer += $output->writeFieldBegin('secretKeyId', TType::STRING, 2);
      $xfer += $output->writeString($this->secretKeyId);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->secretKey !== null) {
      $xfer += $output->writeFieldBegin('secretKey', TType::STRING, 3);
      $xfer += $output->writeString($this->secretKey);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();
    return $xfer;
  }

}

/**
 * Authorization头包含的内容
 */
class HttpAuthorizationHeader {
  static $_TSPEC;

  /**
   * @var string
   */
  public $version = "SDS-V1";
  /**
   * @var int
   */
  public $userType =   13;
  /**
   * @var string
   */
  public $secretKeyId = null;
  /**
   * 直接使用sercetKey，此项被设置时，signature将被忽略，
   * 非安全传输应使用签名
   * 
   * @var string
   */
  public $secretKey = null;
  /**
   * 如secretKey未设置，则认为使用签名，此时必须设置，
   * 被签名的正文格式：header1[\nheader2[\nheader3[...]]]，
   * 如使用默认SUGGESTED_SIGNATURE_HEADERS时为：$host\n$timestamp\n$md5
   * 
   * @var string
   */
  public $signature = null;
  /**
   * 签名HMAC算法，客户端可定制，
   * 使用签名时必须设置
   * 
   * @var int
   */
  public $algorithm = null;
  /**
   * 包含所有签名涉及到的部分，建议使用SUGGESTED_SIGNATURE_HEADERS，
   * 服务端未强制必须使用所列headers，定制的client自己负责签名的安全强度，
   * 使用签名时必须设置
   * 
   * @var string[]
   */
  public $signedHeaders = array(
  );

  public function __construct($vals=null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'version',
          'type' => TType::STRING,
          ),
        2 => array(
          'var' => 'userType',
          'type' => TType::I32,
          ),
        3 => array(
          'var' => 'secretKeyId',
          'type' => TType::STRING,
          ),
        4 => array(
          'var' => 'secretKey',
          'type' => TType::STRING,
          ),
        5 => array(
          'var' => 'signature',
          'type' => TType::STRING,
          ),
        6 => array(
          'var' => 'algorithm',
          'type' => TType::I32,
          ),
        7 => array(
          'var' => 'signedHeaders',
          'type' => TType::LST,
          'etype' => TType::STRING,
          'elem' => array(
            'type' => TType::STRING,
            ),
          ),
        );
    }
    if (is_array($vals)) {
      if (isset($vals['version'])) {
        $this->version = $vals['version'];
      }
      if (isset($vals['userType'])) {
        $this->userType = $vals['userType'];
      }
      if (isset($vals['secretKeyId'])) {
        $this->secretKeyId = $vals['secretKeyId'];
      }
      if (isset($vals['secretKey'])) {
        $this->secretKey = $vals['secretKey'];
      }
      if (isset($vals['signature'])) {
        $this->signature = $vals['signature'];
      }
      if (isset($vals['algorithm'])) {
        $this->algorithm = $vals['algorithm'];
      }
      if (isset($vals['signedHeaders'])) {
        $this->signedHeaders = $vals['signedHeaders'];
      }
    }
  }

  public function getName() {
    return 'HttpAuthorizationHeader';
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
            $xfer += $input->readString($this->version);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 2:
          if ($ftype == TType::I32) {
            $xfer += $input->readI32($this->userType);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 3:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->secretKeyId);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 4:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->secretKey);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 5:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->signature);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 6:
          if ($ftype == TType::I32) {
            $xfer += $input->readI32($this->algorithm);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 7:
          if ($ftype == TType::LST) {
            $this->signedHeaders = array();
            $_size0 = 0;
            $_etype3 = 0;
            $xfer += $input->readListBegin($_etype3, $_size0);
            for ($_i4 = 0; $_i4 < $_size0; ++$_i4)
            {
              $elem5 = null;
              $xfer += $input->readString($elem5);
              $this->signedHeaders []= $elem5;
            }
            $xfer += $input->readListEnd();
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
    $xfer += $output->writeStructBegin('HttpAuthorizationHeader');
    if ($this->version !== null) {
      $xfer += $output->writeFieldBegin('version', TType::STRING, 1);
      $xfer += $output->writeString($this->version);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->userType !== null) {
      $xfer += $output->writeFieldBegin('userType', TType::I32, 2);
      $xfer += $output->writeI32($this->userType);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->secretKeyId !== null) {
      $xfer += $output->writeFieldBegin('secretKeyId', TType::STRING, 3);
      $xfer += $output->writeString($this->secretKeyId);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->secretKey !== null) {
      $xfer += $output->writeFieldBegin('secretKey', TType::STRING, 4);
      $xfer += $output->writeString($this->secretKey);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->signature !== null) {
      $xfer += $output->writeFieldBegin('signature', TType::STRING, 5);
      $xfer += $output->writeString($this->signature);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->algorithm !== null) {
      $xfer += $output->writeFieldBegin('algorithm', TType::I32, 6);
      $xfer += $output->writeI32($this->algorithm);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->signedHeaders !== null) {
      if (!is_array($this->signedHeaders)) {
        throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
      }
      $xfer += $output->writeFieldBegin('signedHeaders', TType::LST, 7);
      {
        $output->writeListBegin(TType::STRING, count($this->signedHeaders));
        {
          foreach ($this->signedHeaders as $iter6)
          {
            $xfer += $output->writeString($iter6);
          }
        }
        $output->writeListEnd();
      }
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();
    return $xfer;
  }

}

final class Constant extends \Thrift\Type\TConstant {
  static protected $SIGNATURE_SUPPORT;
  static protected $HK_HOST;
  static protected $HK_TIMESTAMP;
  static protected $HK_CONTENT_MD5;
  static protected $HK_AUTHORIZATION;
  static protected $SUGGESTED_SIGNATURE_HEADERS;
  static protected $MAX_CONTENT_SIZE;

  static protected function init_SIGNATURE_SUPPORT() {
    return     /**
     * 登录方式是否支持签名
     */
array(
            1 => false,
            2 => true,
            10 => true,
            11 => true,
            12 => false,
            13 => false,
    );
  }

  static protected function init_HK_HOST() {
    return     /**
     * 签名相关的HTTP头，
     * 根据分层防御的设计，使用HTTPS也建议进行签名:
     * http://bitcoin.stackexchange.com/questions/21732/why-api-of-bitcoin-exchanges-use-hmac-over-https-ssl
     */
"Host";
  }

  static protected function init_HK_TIMESTAMP() {
    return     /**
     * 签名时间，1970/0/0开始的秒数，如客户端与服务器时钟相差较大，会返回CLOCK_TOO_SKEWED错误
     */
"X-Xiaomi-Timestamp";
  }

  static protected function init_HK_CONTENT_MD5() {
    return "X-Xiaomi-Content-MD5";
  }

  static protected function init_HK_AUTHORIZATION() {
    return     /**
     * 内容为TJSONTransport.encode(HttpAuthorizationHeader)
     */
"Authorization";
  }

  static protected function init_SUGGESTED_SIGNATURE_HEADERS() {
    return     /**
     * 建议签名应包含的HTTP头
     */
array(
      "Host",
      "X-Xiaomi-Timestamp",
      "X-Xiaomi-Content-MD5",
    );
  }

  static protected function init_MAX_CONTENT_SIZE() {
    return     /**
     * HTTP Body最大字节数
     */
524288;
  }
}


