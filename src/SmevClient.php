<?php

namespace App;

use Phpro\SoapClient\Caller\Caller;
use App\Type;
use Phpro\SoapClient\Type\MixedResult;
use Phpro\SoapClient\Type\ResultInterface;
use Phpro\SoapClient\Exception\SoapException;
use Phpro\SoapClient\Type\RequestInterface;

class SmevClient
{
    /**
     * @var Caller
     */
    private $caller;

    public function __construct(\Phpro\SoapClient\Caller\Caller $caller)
    {
        $this->caller = $caller;
    }

    /**
     * Послать запрос.
     * Факт прихода запроса говорит о том, что СМЭВ удостоверился в том, что отправитель
     * имеет право на получение данных по этому типу запросов.
     * Дополнительный контроль доступа в ИС-поставщике данных запрещён.
     * Тип запроса идентифицируется полным именем (qualified name) элемента //SendRequestRequest/PrimaryContent/element().
     *             
     *
     * @param RequestInterface & Type\SendRequestRequest $parameters
     * @return ResultInterface & Type\SendRequestResponse
     * @throws SoapException
     */
    public function sendRequest(\App\Type\SendRequestRequest $parameters): \App\Type\SendRequestResponse
    {
        $response = ($this->caller)('SendRequest', $parameters);

        \Psl\Type\instance_of(\App\Type\SendRequestResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * Дай сообщение из моей входящей очереди, если она не пуста.
     *             
     *
     * @param RequestInterface & Type\SendResponseRequest $parameters
     * @return ResultInterface & Type\SendResponseResponse
     * @throws SoapException
     */
    public function sendResponse(\App\Type\SendResponseRequest $parameters): \App\Type\SendResponseResponse
    {
        $response = ($this->caller)('SendResponse', $parameters);

        \Psl\Type\instance_of(\App\Type\SendResponseResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * Дай сообщение из моей входящей очереди _запросов_, если она не пуста.
     *
     * @param RequestInterface & Type\GetRequestRequest $parameters
     * @return ResultInterface & Type\GetRequestResponse
     * @throws SoapException
     */
    public function getRequest(\App\Type\GetRequestRequest $parameters): \App\Type\GetRequestResponse
    {
        $response = ($this->caller)('GetRequest', $parameters);

        \Psl\Type\instance_of(\App\Type\GetRequestResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * Дай сообщение из моей входящей очереди _запросов_, если она не пуста.
     *
     * @param RequestInterface & Type\GetStatusRequest $parameters
     * @return ResultInterface & Type\GetStatusResponse
     * @throws SoapException
     */
    public function getStatus(\App\Type\GetStatusRequest $parameters): \App\Type\GetStatusResponse
    {
        $response = ($this->caller)('GetStatus', $parameters);

        \Psl\Type\instance_of(\App\Type\GetStatusResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * Дай сообщение из моей входящей очереди _ответов_, если она не пуста.
     *
     * @param RequestInterface & Type\GetResponseRequest $parameters
     * @return ResultInterface & Type\GetResponseResponse
     * @throws SoapException
     */
    public function getResponse(\App\Type\GetResponseRequest $parameters): \App\Type\GetResponseResponse
    {
        $response = ($this->caller)('GetResponse', $parameters);

        \Psl\Type\instance_of(\App\Type\GetResponseResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * Подтверждение получения сообщения из очереди.
     *                 Должен вызваться после получения сообщения методами GetRequest или GetResponse.
     *             
     *
     * @param RequestInterface & Type\AckRequest $parameters
     * @return ResultInterface & MixedResult<\App\Type\AckResponse>
     * @throws SoapException
     */
    public function ack(\App\Type\AckRequest $parameters): \Phpro\SoapClient\Type\MixedResult
    {
        $response = ($this->caller)('Ack', $parameters);

        \Psl\Type\instance_of(\Phpro\SoapClient\Type\MixedResult::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * Получение статистики входящих очередей.
     *
     * @param RequestInterface & Type\GetIncomingQueueStatisticsRequest $parameters
     * @return ResultInterface & Type\GetIncomingQueueStatisticsResponse
     * @throws SoapException
     */
    public function getIncomingQueueStatistics(\App\Type\GetIncomingQueueStatisticsRequest $parameters): \App\Type\GetIncomingQueueStatisticsResponse
    {
        $response = ($this->caller)('GetIncomingQueueStatistics', $parameters);

        \Psl\Type\instance_of(\App\Type\GetIncomingQueueStatisticsResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }
}
