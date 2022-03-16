<?php

namespace VideoLibrary\Api\Application\Response\Subtitle;


use VideoLibrary\Api\Domain\Model\Subtitle\Subtitle;

class SubtitleResponse
{
    /**
     * Undocumented variable
     *
     * @var int
     */
    private  $id;
    /**
     * Undocumented variable
     *
     * @var string
     */
    private  $language;

    public function __construct(Subtitle $subtitle)
    {
        $this->id = $subtitle->id();
        $this->language = $subtitle->language();
    }

    public function id(): string
    {
        return $this->id;
    }

    public function language(): string
    {
        return $this->language;
    }

    public function toArray()
    {
        return [
            'id' => $this->id(),
            'language' => $this->language(),
        ];
    }
}