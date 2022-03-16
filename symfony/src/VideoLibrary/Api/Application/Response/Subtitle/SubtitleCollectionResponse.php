<?php


namespace VideoLibrary\Api\Application\Response\Subtitle;


use VideoLibrary\Api\Domain\Model\Subtitle\SubtitleCollection;

class SubtitleCollectionResponse
{
    /**
     * Undocumented variable
     *
     * @var array
     */
    private  $subtitles;

    public function __construct(SubtitleCollection $subtitles)
    {
        $this->subtitles = [];

        foreach ($subtitles->getCollection() as $subtitle) {
            $this->subtitles[] = new SubtitleResponse($subtitle);
        }
    }

    public function subtitles(): array
    {
        return $this->subtitles;
    }

    public function toArray(): array
    {
        return array_map(
            function($subtitle) {
                return $subtitle->toArray();
            }, $this->subtitles()
        );
    }
}