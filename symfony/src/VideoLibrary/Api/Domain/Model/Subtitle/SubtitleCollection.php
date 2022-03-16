<?php


namespace VideoLibrary\Api\Domain\Model\Subtitle;


use VideoLibrary\Api\Domain\Collection\ObjectCollection;

class SubtitleCollection extends ObjectCollection
{
    protected function className(): string
    {
        return Subtitle::class;
    }

}