<?xml version="1.0" encoding="UTF-8"?>
<SOAP-ENV:Envelope 
    xmlns:SOAP-ENV="http://schemas.xmlsoap.org/soap/envelope/" 
    xmlns:ns1="urn://x-artefacts-smev-gov-ru/services/message-exchange/types/1.2" 
    xmlns:ns2="urn://x-artefacts-smev-gov-ru/services/message-exchange/types/basic/1.2">
    <SOAP-ENV:Body>
        <ns1:SendRequestRequest>

            
            <ns1:SenderProvidedRequestData>
                <ns1:MessageID><?php echo e($MessageID); ?></ns1:MessageID>
                
                <?php if( $MessagePrimaryContent !== null ): ?>    
                    <ns2:MessagePrimaryContent>
                        <?php $__currentLoopData = $MessagePrimaryContent; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $content): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <<?php echo e($content->name); ?>>
                                <?php echo e($content->content); ?>

                            </<?php echo e($content->name); ?>>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ns2:MessagePrimaryContent>
                <?php endif; ?>
                
            </ns1:SenderProvidedRequestData>
            
            
            <?php if( $AttachmentContentList !== null ): ?>
            
            <ns1:AttachmentContentList>
                
                <?php $__currentLoopData = $AttachmentContentList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ContentItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>    
                    <ns1:AttachmentContent>
                        <ns1:Id><?php echo e($ContentItem->id); ?></ns1:Id>
                        <ns1:Content><?php echo e($ContentItem->content); ?></ns1:Content>
                    </ns1:AttachmentContent>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                
            </ns1:AttachmentContentList>
            
            <?php endif; ?>
        </ns1:SendRequestRequest>

    </SOAP-ENV:Body>
</SOAP-ENV:Envelope><?php /**PATH /usr/local/var/www/soap-client/views/xml.blade.php ENDPATH**/ ?>