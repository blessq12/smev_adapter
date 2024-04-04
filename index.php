<?php

require 'vendor/autoload.php';

use App\SmevClientFactory;
use App\Type\AttachmentContentList;
use App\Type\MessagePrimaryContent;
use App\Type\SenderProvidedRequestData;
use App\Type\SendRequestRequest;
use App\Type\XMLDSigSignatureType;
use Ramsey\Uuid\Uuid;

spl_autoload_register(function ($class_name) {
    $array = explode('\\', $class_name);
    $name = end($array);

    if (file_exists('src/Type/' . $name . '.php'))
        require 'src/Type/' . $name . '.php';
    if (file_exists('src/' . $name . '.php'))
        require 'src/' . $name . '.php';
});

// $client = SmevClientFactory::factory('http://smev3-n0.test.gosuslugi.ru:7500/smev/v1.2/ws?wsdl');

$client = new SoapClient('http://smev3-n0.test.gosuslugi.ru:7500/smev/v1.2/ws?wsdl', ['trace' => true]);

try {
    // $client->sendRequest(
    //     new SendRequestRequest(
    //         new SenderProvidedRequestData(
    //             Uuid::uuid1(),
    //             new MessagePrimaryContent(['any' => 'any content'])
    //         ),
    //         // new AttachmentContentList(),
    //         null,
    //         // new XMLDSigSignatureType()
    //         null
    //     )
    // );
    $content = new stdClass();
    $content->any = 'Some content';
    $client->sendRequest(
        [
            'SenderProvidedRequestData' => [
                'MessageID' => Uuid::uuid1(),
                'MessagePrimaryContent' => [
                    'any' => [
                        'asfafad' => 'asdasdasd',
                        'asdasd' => 'asdasd'
                    ],
                ]
            ]
        ],
        ['AttachmentContentList' => 'asdasd'],
        ['XMLDSigSignature' => ['asdasd' => 'asdasd']]
    );
} catch (SoapFault $fault) {

    // <xmp> tag displays xml output in html

    echo 'Request : <br/><xmp>',

    $client->__getLastRequest(),

    '</xmp><br/><br/> Error Message : <br/>',

    $fault->getMessage(),

    '</xmp><br/><br/> Response : <br/>',

    $client->__getLastResponse();
}
