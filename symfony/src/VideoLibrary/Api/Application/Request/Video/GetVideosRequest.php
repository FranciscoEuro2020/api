<?php


namespace VideoLibrary\Api\Application\Request\Video;


class GetVideosRequest
{
    /**
     * Undocumented variable
     *
     * @var string
     */
    private  $status;

    public function __construct(string $status)
    {
        $this->status = $status;
    }

    public function status(): string
    {
        return $this->status;
    }


}