<?php
namespace VideoLibrary\Api\Domain\Model\Videos;

interface VideoRepository
{
    public function findByStatus(Status $status): VideoCollection;
    public function insert(Video $video): void;
}