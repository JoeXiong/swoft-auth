<?php
/**
 * Created by PhpStorm.
 * User: sl
 * Date: 2018/5/20
 * Time: 下午9:37
 * @author April2 <ott321@yeah.net>
 */

namespace Swoft\Auth\Bean;

use Swoft\Bean\Annotation\Bean;
use Swoft\Bean\Annotation\Scope;

/**
 * Class AuthSession
 * @package Swoft\Auth\Bean
 * @Bean(scope=Scope::PROTOTYPE)
 */
class AuthSession
{
    /**
     * @var string User personal information credentials
     */
    protected $identity='';

    /**
     * @var string Login method name
     */
    protected $accountTypeName='';

    /**
     * @var string Authentication credentials
     */
    protected $token='';

    /**
     * @var int Creation time
     */
    protected $createTime=0;

    /**
     * @var int
     */
    protected $expirationTime=0;

    /**
     * @var array Expand data, define it yourself
     */
    protected $extendedData=[];

    /**
     * @return string
     */
    public function getIdentity(): string
    {
        return $this->identity;
    }

    /**
     * @param string $identity
     * @return AuthSession
     */
    public function setIdentity(string $identity): AuthSession
    {
        $this->identity = $identity;
        return $this;
    }

    /**
     * @return string
     */
    public function getAccountTypeName(): string
    {
        return $this->accountTypeName;
    }

    /**
     * @param string $accountTypeName
     * @return AuthSession
     */
    public function setAccountTypeName(string $accountTypeName): AuthSession
    {
        $this->accountTypeName = $accountTypeName;
        return $this;
    }

    /**
     * @return string
     */
    public function getToken(): string
    {
        return $this->token;
    }

    /**
     * @param string $token
     * @return AuthSession
     */
    public function setToken(string $token): AuthSession
    {
        $this->token = $token;
        return $this;
    }

    /**
     * @return int
     */
    public function getCreateTime(): int
    {
        return $this->createTime;
    }

    /**
     * @param int $createTime
     * @return AuthSession
     */
    public function setCreateTime(int $createTime): AuthSession
    {
        $this->createTime = $createTime;
        return $this;
    }

    /**
     * @return int
     */
    public function getExpirationTime(): int
    {
        return $this->expirationTime;
    }

    /**
     * @param int $expirationTime
     * @return AuthSession
     */
    public function setExpirationTime(int $expirationTime): AuthSession
    {
        $this->expirationTime = $expirationTime;
        return $this;
    }

    /**
     * @return array
     */
    public function getExtendedData(): array
    {
        return $this->extendedData;
    }

    /**
     * @param array $extendedData
     * @return AuthSession
     */
    public function setExtendedData(array $extendedData): AuthSession
    {
        $this->extendedData = $extendedData;
        return $this;
    }


}