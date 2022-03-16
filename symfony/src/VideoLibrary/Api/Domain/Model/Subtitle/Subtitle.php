<?php


namespace VideoLibrary\Api\Domain\Model\Subtitle;


use VideoLibrary\Api\Domain\Model\Videos\Video;

class Subtitle
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
    /**
     * Undocumented variable
     *
     * @var Video
     */
    private $video;

    public function __construct(int $id, string $language)
    {
        $this->id = $id;
        $this->language = $language;
    }

    public function id(): int
    {
        return $this->id;
    }

    public function language(): string
    {
        return $this->language;
    }

    public function video(): Video
    {
        return $this->video;
    }

}