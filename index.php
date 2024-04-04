<?php require 'vendor/autoload.php';

use App\SmevClientFactory;
use App\Type\AttachmentContentList;
use App\Type\SenderProvidedRequestData;
use App\Type\SendRequestRequest;
use App\Type\XMLDSigSignatureType;
use Ramsey\Uuid\Nonstandard\Uuid;

spl_autoload_register(function ($class_name) {
    $array = explode('\\', $class_name);
    $name = end($array);

    if (file_exists('src/Type/' . $name . '.php'))
        require 'src/Type/' . $name . '.php';
    if (file_exists('src/' . $name . '.php'))
        require 'src/' . $name . '.php';
});

$client = SmevClientFactory::factory('http://smev3-n0.test.gosuslugi.ru:7500/smev/v1.2/ws?wsdl');

$response = $client->sendRequest(
    new SendRequestRequest(
        new SenderProvidedRequestData(),
        new AttachmentContentList(),
        new XMLDSigSignatureType()
    )
);
