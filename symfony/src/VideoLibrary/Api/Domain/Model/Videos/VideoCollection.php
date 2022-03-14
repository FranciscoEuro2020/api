<?php
namespace VideoLibrary\Api\Domain\Model\Videos;

use VideoLibrary\Api\Domain\Collection\ObjectCollection;

class VideoCollection extends ObjectCollection
{
    protected function className(): string
    {
        return Video::class;
    }
}