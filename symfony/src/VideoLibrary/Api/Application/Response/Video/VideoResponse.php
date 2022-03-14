<?php


namespace VideoLibrary\Api\Application\Response\Video;


use VideoLibrary\Api\Application\Response\Subtitle\SubtitleCollectionResponse;
use VideoLibrary\Api\Domain\Model\Videos\Video;

class VideoResponse
{
    /**
     * Undocumented variable
     *
     * @var int
     */
    private $id;
    /**
     * Undocumented variable
     *
     * @var string
     */
    private $title;
    /**
     * Undocumented variable
     *
     * @var int
     */
    private $duration;
    /**
     * Undocumented variable
     *
     * @var string
     */
    private  $status;
   // private SubtitleCollectionResponse $subtitles;

    public function __construct(Video $video)
    {
        $this->id = $video->Id();
        $this->title = $video->title();
        $this->duration = $video->duration();
        $this->status = $video->status()->value();
     //   $this->subtitles = new SubtitleCollectionResponse($video->subtitles());
    }

    public function id(): int
    {
        return $this->id;
    }

    public function title(): string
    {
        return $this->title;
    }

    public function duration(): int
    {
        return $this->duration;
    }

    public function status(): string
    {
        return $this->status;
    }

    public function subtitles(): SubtitleCollectionResponse
    {
        return $this->subtitles;
    }

    public function toArray()
    {
        return [
            'id' => $this->id(),
            'title' => $this->title(),
            'duration' => $this->duration(),
            'status' => $this->status(),
           // 'subtitles' => $this->subtitles()->toArray(),
        ];
    }
}