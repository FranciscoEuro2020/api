<?php


namespace VideoLibrary\Api\Infrastructure\Persistence\Doctrine\Entity;


class Subtitle
{
    /**
     * Undocumented variable
     *
     * @var string
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
    private  $video;

    public function __construct(string $id, string $language)
    {
        $this->id = $id;
        $this->language = $language;
    }

    public function id(): string
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

    public function setVideo(Video $video): void
    {
        $this->video = $video;
    }


}