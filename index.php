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




$client = new SoapClient('http://smev3-n0.test.gosuslugi.ru:7500/smev/v1.2/ws?wsdl', ['trace' => true]);

try {

    $client->sendRequest([
        'SenderProvidedRequestData' => [
            'MessageID' => 'asdjksdf4355445',
            'MessagePrimaryContent' => [
                'any' => ''
            ]
        ]
    ]);
} catch (SoapFault $fault) {

    // <xmp> tag displays xml output in html

    echo 'Request : <br/><xmp>',

    $client->__getLastRequest(),

    '</xmp><br/><br/> Error Message : <br/>',

    $fault->getMessage(),

    '</xmp><br/><br/> Response : <br/>',

    $client->__getLastResponse();
}
