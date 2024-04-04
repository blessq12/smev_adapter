<?php

use App\SmevClientFactory;
use App\Type\AttachmentContentList;
use App\Type\AttachmentContentType;
use App\Type\MessagePrimaryContent;
use App\Type\SenderProvidedRequestData;
use App\Type\SendRequestRequest;
use App\Type\XMLDSigSignatureType;
use Ramsey\Uuid\Nonstandard\Uuid;

require 'vendor/autoload.php';
require 'src/SmevClientFactory.php';
require 'src/SmevClassmap.php';
require 'src/SmevClient.php';
require 'src/Type/SendRequestRequest.php';
require 'src/Type/SenderProvidedRequestData.php';
require 'src/Type/AttachmentContentList.php';
require 'src/Type/AttachmentContentType.php';
require 'src/Type/XMLDSigSignatureType.php';
require 'src/Type/MessagePrimaryContent.php';

$client = SmevClientFactory::factory('http://smev3-n0.test.gosuslugi.ru:7500/smev/v1.1/ws?wsdl');

$req = new SendRequestRequest(
    new SenderProvidedRequestData(
        Uuid::uuid1(),
        new MessagePrimaryContent('')
    ),
    new AttachmentContentList(
        new AttachmentContentType(123123, ['name' => '', 'data' => 'asdasd']),
        'asdasd'
    ),
    new XMLDSigSignatureType
);

$client->sendRequest($req);
