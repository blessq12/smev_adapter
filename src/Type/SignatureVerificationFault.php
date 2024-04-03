<?php

namespace App\Type;

use \App\Type\SmevFault;

class SignatureVerificationFault extends SmevFault
{
    /**
     * @var 'PoorSOAPEnvelopeFormat' | 'NoSignatureFound' | 'IncorrectSignatureTarget' | 'SignatureIsInvalid' | 'CertificateIsNotFound' | 'CertificateIsExpired'
     */
    private string $SignatureVerificationFault;

    /**
     * @return 'PoorSOAPEnvelopeFormat' | 'NoSignatureFound' | 'IncorrectSignatureTarget' | 'SignatureIsInvalid' | 'CertificateIsNotFound' | 'CertificateIsExpired'
     */
    public function getSignatureVerificationFault() : string
    {
        return $this->SignatureVerificationFault;
    }

    /**
     * @param 'PoorSOAPEnvelopeFormat' | 'NoSignatureFound' | 'IncorrectSignatureTarget' | 'SignatureIsInvalid' | 'CertificateIsNotFound' | 'CertificateIsExpired' $SignatureVerificationFault
     * @return static
     */
    public function withSignatureVerificationFault(string $SignatureVerificationFault) : static
    {
        $new = clone $this;
        $new->SignatureVerificationFault = $SignatureVerificationFault;

        return $new;
    }
}

