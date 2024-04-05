<?xml version="1.0" encoding="UTF-8"?>
<SOAP-ENV:Envelope 
    xmlns:SOAP-ENV="http://schemas.xmlsoap.org/soap/envelope/" 
    xmlns:ns1="urn://x-artefacts-smev-gov-ru/services/message-exchange/types/1.2" 
    xmlns:ns2="urn://x-artefacts-smev-gov-ru/services/message-exchange/types/basic/1.2">
    <SOAP-ENV:Body>
        <ns1:SendRequestRequest>

            {{-- SenderProvidedRequestData --}}
            <ns1:SenderProvidedRequestData>
                <ns1:MessageID>{{ $MessageID }}</ns1:MessageID>
                
                @if ( $MessagePrimaryContent !== null )    
                    <ns2:MessagePrimaryContent>
                        @foreach ($MessagePrimaryContent as $content)
                            <{{ $content->name }}>
                                {{ $content->content }}
                            </{{ $content->name }}>
                        @endforeach
                    </ns2:MessagePrimaryContent>
                @endif
                
            </ns1:SenderProvidedRequestData>
            {{-- end SenderProvidedRequestData --}}
            
            @if ( $AttachmentContentList !== null )
            {{-- AttachmentContentList --}}
            <ns1:AttachmentContentList>
                {{-- foreach item --}}
                @foreach ($AttachmentContentList as $ContentItem)    
                    <ns1:AttachmentContent>
                        <ns1:Id>{{ $ContentItem->id }}</ns1:Id>
                        <ns1:Content>{{ $ContentItem->content }}</ns1:Content>
                    </ns1:AttachmentContent>
                @endforeach
                {{-- end foreach item --}}
            </ns1:AttachmentContentList>
            {{-- end AttachmentContentList --}}
            @endif
        </ns1:SendRequestRequest>

    </SOAP-ENV:Body>
</SOAP-ENV:Envelope>