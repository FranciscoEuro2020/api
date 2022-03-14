<?php
namespace VideoLibrary\Api\Domain\Model\Videos;

class Video
{
    /**
     *
     * @var int
     */
    private  $id;
    /**
     *
     * @var string
     */
    private  $title;
    /**
     *
     * @var string
     */
    private  $duration;

    public function __construct(int $id,string $title, int $duration)
    {
        $this->id = $id;
        $this->title = $title;
        $this->duration = $duration;
    }

    public function getId(): int
    {
        return $this->id;
    }
    public function getTitle(): string
    {
        return $this->title;
    }
    public function getDuration(): int
    {
        return $this->duration;
    }
}