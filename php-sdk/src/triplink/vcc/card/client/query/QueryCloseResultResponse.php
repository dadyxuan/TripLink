<?php

namespace triplink\vcc\card\client\query;

/**
 * Created by PhpStorm.
 * User: wang.xiaoliang
 * Date: 2021/8/2
 * Time: 18:58
 */
class QueryCloseResultResponse
{
    /**
     * query close result
     * SUCCEED：成功
     * FAILURE：失败
     * EXCEPTION：异常
     */
    var $qResultStatus;

    /**
     * query result code
     */
    var $qResultCode;

    /**
     * query result desc
     */
    var $qResultMsg;

    /**
     * close result
     * PROCESS：处理中
     * SUCCEED：成功
     * FAILURE：失败
     * EXCEPTION：异常
     */
    var $resultStatus;

    /**
     * close result code
     */
    var $resultRespCode;

    /**
     * close result desc
     */
    var $resultRespMsg;

    /**
     * channel type, TripLink distribution
     */
    var $channelType;

    /**
     * TripLink ccOpId
     */
    var $ccOpId;

    /**
     * close request number
     */
    var $requestId;

    /**
     * close request time
     */
    var $requestTime;

    /**
     * close merchant name
     */
    var $merchantName;

    /**
     * response extra info
     * json type
     * eg: {"BinFlagDcre":"12345"}
     */
    var $respExtra;

    /**
     * TripLink unique reference number
     */
    var $cardLogId;

    /**
     * @return mixed
     */
    public function getQResultStatus()
    {
        return $this->qResultStatus;
    }

    /**
     * @param mixed $qResultStatus
     */
    public function setQResultStatus($qResultStatus): void
    {
        $this->qResultStatus = $qResultStatus;
    }

    /**
     * @return mixed
     */
    public function getQResultCode()
    {
        return $this->qResultCode;
    }

    /**
     * @param mixed $qResultCode
     */
    public function setQResultCode($qResultCode): void
    {
        $this->qResultCode = $qResultCode;
    }

    /**
     * @return mixed
     */
    public function getQResultMsg()
    {
        return $this->qResultMsg;
    }

    /**
     * @param mixed $qResultMsg
     */
    public function setQResultMsg($qResultMsg): void
    {
        $this->qResultMsg = $qResultMsg;
    }

    /**
     * @return mixed
     */
    public function getResultStatus()
    {
        return $this->resultStatus;
    }

    /**
     * @param mixed $resultStatus
     */
    public function setResultStatus($resultStatus): void
    {
        $this->resultStatus = $resultStatus;
    }

    /**
     * @return mixed
     */
    public function getResultRespCode()
    {
        return $this->resultRespCode;
    }

    /**
     * @param mixed $resultRespCode
     */
    public function setResultRespCode($resultRespCode): void
    {
        $this->resultRespCode = $resultRespCode;
    }

    /**
     * @return mixed
     */
    public function getResultRespMsg()
    {
        return $this->resultRespMsg;
    }

    /**
     * @param mixed $resultRespMsg
     */
    public function setResultRespMsg($resultRespMsg): void
    {
        $this->resultRespMsg = $resultRespMsg;
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
    public function getCcOpId()
    {
        return $this->ccOpId;
    }

    /**
     * @param mixed $ccOpId
     */
    public function setCcOpId($ccOpId): void
    {
        $this->ccOpId = $ccOpId;
    }

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
    public function getRespExtra()
    {
        return $this->respExtra;
    }

    /**
     * @param mixed $respExtra
     */
    public function setRespExtra($respExtra): void
    {
        $this->respExtra = $respExtra;
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




}

?>