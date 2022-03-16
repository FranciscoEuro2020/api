<?php


namespace VideoLibrary\Api\Application\Request\Video;


class CreateVideoRequest
{
    /**
     * Undocumented variable
     *
     * @var string
     */
    private  $title;
    /**
     * Undocumented variable
     *
     * @var integer
     */
    private  $duration;
    /**
     * Undocumented variable
     *
     * @var string
     */
    private  $status;
    /**
     * Undocumented variable
     *
     * @var array
     */
    private  $subtitles;

    public function __construct(string $title, int $duration, string $status, array $subtitles)
    {
        $this->title = $title;
        $this->duration = $duration;
        $this->status = $status;
        $this->subtitles = $subtitles;
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

    public function subtitles(): array
    {
        return $this->subtitles;
    }


}