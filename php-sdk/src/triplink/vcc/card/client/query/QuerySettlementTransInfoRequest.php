<?php

namespace triplink\vcc\card\client\query;
/**
 * Created by PhpStorm.
 * User: wang.xiaoliang
 * Date: 2021/8/4
 * Time: 14:13
 */
class QuerySettlementTransInfoRequest
{
    /**
     * the request number of the original close request number
     */
    var $requestId;
    /**
     * request time
     */
    var $requestTime;
    /**
     * merchant name , TripLink distribution
     */
    var $merchantName;
    /**
     * channel type, TripLink distribution
     */
    var $channelType;
    /**
     * settlement trans start time
     */
    var $startDate;
    /**
     * settlement trans end time
     */
    var $endDate;
    /**
     * TripLink unique reference number
     */
    var $cardLogId;
    /**
     * request extra info
     * json type
     * eg: {"BinFlagDcre":"12345"}
     */
    var $reqExtra;
    /**
     * operator
     */
    var $operator;

    /**
     * @return mixed
     */
    public function getRequestId()
    {
        return $this->requestId;
    }

    /**
     * @param mixed $requestId
     */
    public function setRequestId($requestId): void
    {
        $this->requestId = $requestId;
    }

    /**
     * @return mixed
     */
    public function getRequestTime()
    {
        return $this->requestTime;
    }

    /**
     * @param mixed $requestTime
     */
    public function setRequestTime($requestTime): void
    {
        $this->requestTime = $requestTime;
    }

    /**
     * @return mixed
     */
    public function getMerchantName()
    {
        return $this->merchantName;
    }

    /**
     * @param mixed $merchantName
     */
    public function setMerchantName($merchantName): void
    {
        $this->merchantName = $merchantName;
    }

    /**
     * @return mixed
     */
    public function getChannelType()
    {
        return $this->channelType;
    }

    /**
     * @param mixed $channelType
     */
    public function setChannelType($channelType): void
    {
        $this->channelType = $channelType;
    }

    /**
     * @return mixed
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * @param mixed $startDate
     */
    public function setStartDate($startDate): void
    {
        $this->startDate = $startDate;
    }

    /**
     * @return mixed
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * @param mixed $endDate
     */
    public function setEndDate($endDate): void
    {
        $this->endDate = $endDate;
    }

    /**
     * @return mixed
     */
    public function getCardLogId()
    {
        return $this->cardLogId;
    }

    /**
     * @param mixed $cardLogId
     */
    public function setCardLogId($cardLogId): void
    {
        $this->cardLogId = $cardLogId;
    }

    /**
     * @return mixed
     */
    public function getReqExtra()
    {
        return $this->reqExtra;
    }

    /**
     * @param mixed $reqExtra
     */
    public function setReqExtra($reqExtra): void
    {
        $this->reqExtra = $reqExtra;
    }

    /**
     * @return mixed
     */
    public function getOperator()
    {
        return $this->operator;
    }

    /**
     * @param mixed $operator
     */
    public function setOperator($operator): void
    {
        $this->operator = $operator;
    }



}

?>