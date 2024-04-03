<?php

namespace App;

use App\Type;
use Soap\ExtSoapEngine\Configuration\ClassMap\ClassMapCollection;
use Soap\ExtSoapEngine\Configuration\ClassMap\ClassMap;

class SmevClassmap
{
    public static function getCollection() : \Soap\ExtSoapEngine\Configuration\ClassMap\ClassMapCollection
    {
        return new ClassMapCollection(
            new ClassMap('SendRequestRequest', Type\SendRequestRequest::class),
            new ClassMap('SendRequestResponse', Type\SendRequestResponse::class),
            new ClassMap('SendResponseRequest', Type\SendResponseRequest::class),
            new ClassMap('SendResponseResponse', Type\SendResponseResponse::class),
            new ClassMap('GetStatusRequest', Type\GetStatusRequest::class),
            new ClassMap('GetStatusResponse', Type\GetStatusResponse::class),
            new ClassMap('SmevAsyncProcessingMessage', Type\SmevAsyncProcessingMessage::class),
            new ClassMap('GetRequestRequest', Type\GetRequestRequest::class),
            new ClassMap('GetResponseRequest', Type\GetResponseRequest::class),
            new ClassMap('GetRequestResponse', Type\GetRequestResponse::class),
            new ClassMap('RequestMessage', Type\RequestMessage::class),
            new ClassMap('GetResponseResponse', Type\GetResponseResponse::class),
            new ClassMap('ResponseMessage', Type\ResponseMessage::class),
            new ClassMap('AsyncProcessingStatus', Type\AsyncProcessingStatus::class),
            new ClassMap('AsyncProcessingStatusData', Type\AsyncProcessingStatusData::class),
            new ClassMap('AckRequest', Type\AckRequest::class),
            new ClassMap('AckResponse', Type\AckResponse::class),
            new ClassMap('GetIncomingQueueStatisticsRequest', Type\GetIncomingQueueStatisticsRequest::class),
            new ClassMap('GetIncomingQueueStatisticsResponse', Type\GetIncomingQueueStatisticsResponse::class),
            new ClassMap('QueueStatistics', Type\QueueStatistics::class),
            new ClassMap('SenderProvidedRequestData', Type\SenderProvidedRequestData::class),
            new ClassMap('BusinessProcessMetadata', Type\BusinessProcessMetadata::class),
            new ClassMap('SenderProvidedResponseData', Type\SenderProvidedResponseData::class),
            new ClassMap('RequestRejected', Type\RequestRejected::class),
            new ClassMap('RequestStatus', Type\RequestStatus::class),
            new ClassMap('StatusParameter', Type\StatusParameter::class),
            new ClassMap('Request', Type\Request::class),
            new ClassMap('Response', Type\Response::class),
            new ClassMap('Cancel', Type\Cancel::class),
            new ClassMap('MessageMetadata', Type\MessageMetadata::class),
            new ClassMap('Sender', Type\Sender::class),
            new ClassMap('Recipient', Type\Recipient::class),
            new ClassMap('SupplementaryData', Type\SupplementaryData::class),
            new ClassMap('AttachmentHeaderType', Type\AttachmentHeaderType::class),
            new ClassMap('FSAuthInfo', Type\FSAuthInfo::class),
            new ClassMap('AttachmentContentType', Type\AttachmentContentType::class),
            new ClassMap('RefAttachmentHeaderType', Type\RefAttachmentHeaderType::class),
            new ClassMap('XMLDSigSignatureType', Type\XMLDSigSignatureType::class),
            new ClassMap('Void', Type\VoidType::class),
            new ClassMap('SmevFault', Type\SmevFault::class),
            new ClassMap('MessagePrimaryContent', Type\MessagePrimaryContent::class),
            new ClassMap('AttachmentHeaderList', Type\AttachmentHeaderList::class),
            new ClassMap('AttachmentContentList', Type\AttachmentContentList::class),
            new ClassMap('FSAttachmentsList', Type\FSAttachmentsList::class),
            new ClassMap('RefAttachmentHeaderList', Type\RefAttachmentHeaderList::class),
            new ClassMap('MessageReference', Type\MessageReference::class),
            new ClassMap('AckTargetMessage', Type\AckTargetMessage::class),
            new ClassMap('MessageTypeSelector', Type\MessageTypeSelector::class),
            new ClassMap('Timestamp', Type\Timestamp::class),
            new ClassMap('BusinessDataTypeIsNotSupported', Type\BusinessDataTypeIsNotSupported::class),
            new ClassMap('InvalidContent', Type\InvalidContent::class),
            new ClassMap('ValidationError', Type\ValidationError::class),
            new ClassMap('AttachmentSizeLimitExceeded', Type\AttachmentSizeLimitExceeded::class),
            new ClassMap('QuoteLimitExceeded', Type\QuoteLimitExceeded::class),
            new ClassMap('SignatureVerificationFault', Type\SignatureVerificationFault::class),
            new ClassMap('DestinationOverflow', Type\DestinationOverflow::class),
            new ClassMap('UnknownMessageType', Type\UnknownMessageType::class),
            new ClassMap('TransactionCodeInvalid', Type\TransactionCodeInvalid::class),
            new ClassMap('MessageIsAlreadySent', Type\MessageIsAlreadySent::class),
            new ClassMap('InvalidMessageIdFormat', Type\InvalidMessageIdFormat::class),
            new ClassMap('StaleMessageId', Type\StaleMessageId::class),
            new ClassMap('AttachmentContentMiscoordination', Type\AttachmentContentMiscoordination::class),
            new ClassMap('AccessDenied', Type\AccessDenied::class),
            new ClassMap('SMEVFailure', Type\SMEVFailure::class),
            new ClassMap('IncorrectResponseContentType', Type\IncorrectResponseContentType::class),
            new ClassMap('RecipientIsNotFound', Type\RecipientIsNotFound::class),
            new ClassMap('SenderIsNotRegistered', Type\SenderIsNotRegistered::class),
            new ClassMap('RequestIsNotFound', Type\RequestIsNotFound::class),
            new ClassMap('TargetMessageIsNotFound', Type\TargetMessageIsNotFound::class),
            new ClassMap('EndOfLifeReached', Type\EndOfLifeReached::class),
        );
    }
}

