<?php

namespace App\Type;

class SenderProvidedRequestData
{
    /**
     * Идентификатор, присвоенный сообщению отправителем.
     *  Генерируется в соответствии с RFC-4122, по варианту 1 (на основании MAC-адреса и текущего времени).
     *
     * @var string
     */
    private string $MessageID;

    /**
     * Идентификатор сообщения, порождающего цепочку сообщений.
     *  При отправке подчиненных сообщений значение соответствует MessageID корневого сообщения цепочки сообщений.
     *  Для корневого сообщения значение совпадает с MessageID
     *
     * @var null | string
     */
    private ?string $ReferenceMessageID;

    /**
     * Идентификатор кода транзакции.
     *
     * @var null | string
     */
    private ?string $TransactionCode;

    /**
     * Идентификатор нода отправителя.
     *
     * @var null | string
     */
    private ?string $NodeID;

    /**
     * Ограничение жизни сообщения.
     *
     * @var null | \DateTimeInterface
     */
    private ?\DateTimeInterface $EOL;

    /**
     * Содержательная часть запроса, XML-документ.
     *
     * @var \App\Type\MessagePrimaryContent
     */
    private \App\Type\MessagePrimaryContent $MessagePrimaryContent;

    /**
     *  ЭП-СП содержательной части запроса.
     *  Подписывается элемент, находящийся сразу под MessagePrimaryContent.
     *  Хотя этот элемент не обязателен, поставщик данных может потребовать,
     *  чтобы в запросах определённых типов ЭП-СП всегда была.
     *  Это вызвано тем, что в ряде случаев, согласно ФЗ, сведения могут предоставляться только по запросам
     *  должностных лиц определённого уровня.
     *
     * @var null | \App\Type\XMLDSigSignatureType
     */
    private ?\App\Type\XMLDSigSignatureType $PersonalSignature;

    /**
     * Заголовки вложенных файлов.
     *
     * @var null | \App\Type\AttachmentHeaderList
     */
    private ?\App\Type\AttachmentHeaderList $AttachmentHeaderList;

    /**
     * Заголовки файлов по ссылке.
     *
     * @var null | \App\Type\RefAttachmentHeaderList
     */
    private ?\App\Type\RefAttachmentHeaderList $RefAttachmentHeaderList;

    /**
     *  Информация о бизнес-процессе, в рамках которого пересылается данное сообщение.
     *  Формат данных определяется в отдельной схеме (схемах).
     *  На текущий эта информация не обязательна для заполнения отправителем.
     *
     * @var null | \App\Type\BusinessProcessMetadata
     */
    private ?\App\Type\BusinessProcessMetadata $BusinessProcessMetadata;

    /**
     * Если этот элемент присутствует, то запрос - тестовый.
     *  В этом случае, ИС-поставщик данных должна гарантировать, что её данные не будут изменены
     *  в результате выполнения этого запроса.
     *
     * @var null | \App\Type\VoidType
     */
    private ?\App\Type\VoidType $TestMessage;

    /**
     * @var null | string
     */
    private ?string $Id;

    public function __construct(string $MessageID, $MessagePrimaryContent)
    {
        $this->MessageID = $MessageID;
        $this->MessagePrimaryContent = $MessagePrimaryContent;
    }

    /**
     * @return string
     */
    public function getMessageID(): string
    {
        return $this->MessageID;
    }

    /**
     * @param string $MessageID
     * @return static
     */
    public function withMessageID(string $MessageID): static
    {
        $new = clone $this;
        $new->MessageID = $MessageID;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getReferenceMessageID(): ?string
    {
        return $this->ReferenceMessageID;
    }

    /**
     * @param null | string $ReferenceMessageID
     * @return static
     */
    public function withReferenceMessageID(?string $ReferenceMessageID): static
    {
        $new = clone $this;
        $new->ReferenceMessageID = $ReferenceMessageID;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getTransactionCode(): ?string
    {
        return $this->TransactionCode;
    }

    /**
     * @param null | string $TransactionCode
     * @return static
     */
    public function withTransactionCode(?string $TransactionCode): static
    {
        $new = clone $this;
        $new->TransactionCode = $TransactionCode;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getNodeID(): ?string
    {
        return $this->NodeID;
    }

    /**
     * @param null | string $NodeID
     * @return static
     */
    public function withNodeID(?string $NodeID): static
    {
        $new = clone $this;
        $new->NodeID = $NodeID;

        return $new;
    }

    /**
     * @return null | \DateTimeInterface
     */
    public function getEOL(): ?\DateTimeInterface
    {
        return $this->EOL;
    }

    /**
     * @param null | \DateTimeInterface $EOL
     * @return static
     */
    public function withEOL(?\DateTimeInterface $EOL): static
    {
        $new = clone $this;
        $new->EOL = $EOL;

        return $new;
    }

    /**
     * @return \App\Type\MessagePrimaryContent
     */
    public function getMessagePrimaryContent(): \App\Type\MessagePrimaryContent
    {
        return $this->MessagePrimaryContent;
    }

    /**
     * @param \App\Type\MessagePrimaryContent $MessagePrimaryContent
     * @return static
     */
    public function withMessagePrimaryContent(\App\Type\MessagePrimaryContent $MessagePrimaryContent): static
    {
        $new = clone $this;
        $new->MessagePrimaryContent = $MessagePrimaryContent;

        return $new;
    }

    /**
     * @return null | \App\Type\XMLDSigSignatureType
     */
    public function getPersonalSignature(): ?\App\Type\XMLDSigSignatureType
    {
        return $this->PersonalSignature;
    }

    /**
     * @param null | \App\Type\XMLDSigSignatureType $PersonalSignature
     * @return static
     */
    public function withPersonalSignature(?\App\Type\XMLDSigSignatureType $PersonalSignature): static
    {
        $new = clone $this;
        $new->PersonalSignature = $PersonalSignature;

        return $new;
    }

    /**
     * @return null | \App\Type\AttachmentHeaderList
     */
    public function getAttachmentHeaderList(): ?\App\Type\AttachmentHeaderList
    {
        return $this->AttachmentHeaderList;
    }

    /**
     * @param null | \App\Type\AttachmentHeaderList $AttachmentHeaderList
     * @return static
     */
    public function withAttachmentHeaderList(?\App\Type\AttachmentHeaderList $AttachmentHeaderList): static
    {
        $new = clone $this;
        $new->AttachmentHeaderList = $AttachmentHeaderList;

        return $new;
    }

    /**
     * @return null | \App\Type\RefAttachmentHeaderList
     */
    public function getRefAttachmentHeaderList(): ?\App\Type\RefAttachmentHeaderList
    {
        return $this->RefAttachmentHeaderList;
    }

    /**
     * @param null | \App\Type\RefAttachmentHeaderList $RefAttachmentHeaderList
     * @return static
     */
    public function withRefAttachmentHeaderList(?\App\Type\RefAttachmentHeaderList $RefAttachmentHeaderList): static
    {
        $new = clone $this;
        $new->RefAttachmentHeaderList = $RefAttachmentHeaderList;

        return $new;
    }

    /**
     * @return null | \App\Type\BusinessProcessMetadata
     */
    public function getBusinessProcessMetadata(): ?\App\Type\BusinessProcessMetadata
    {
        return $this->BusinessProcessMetadata;
    }

    /**
     * @param null | \App\Type\BusinessProcessMetadata $BusinessProcessMetadata
     * @return static
     */
    public function withBusinessProcessMetadata(?\App\Type\BusinessProcessMetadata $BusinessProcessMetadata): static
    {
        $new = clone $this;
        $new->BusinessProcessMetadata = $BusinessProcessMetadata;

        return $new;
    }

    /**
     * @return null | \App\Type\VoidType
     */
    public function getTestMessage(): ?\App\Type\VoidType
    {
        return $this->TestMessage;
    }

    /**
     * @param null | \App\Type\VoidType $TestMessage
     * @return static
     */
    public function withTestMessage(?\App\Type\VoidType $TestMessage): static
    {
        $new = clone $this;
        $new->TestMessage = $TestMessage;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getId(): ?string
    {
        return $this->Id;
    }

    /**
     * @param null | string $Id
     * @return static
     */
    public function withId(?string $Id): static
    {
        $new = clone $this;
        $new->Id = $Id;

        return $new;
    }
}
