<?php
namespace VideoLibrary\Api\Application\Query\Video;

use VideoLibrary\Api\Application\Request\Video\GetVideosRequest;
use VideoLibrary\Api\Application\Response\Video\VideoCollectionResponse;
use VideoLibrary\Api\Domain\Model\Videos\Status;
use VideoLibrary\Api\Domain\Model\Videos\VideoRepository;

class GetVideosHandler
{
    /**
     * Undocumented variable
     *
     * @var VideoRepository
     */
    private  $videoRepository;

    public function __construct(VideoRepository $videoRepository)
    {
        $this->videoRepository = $videoRepository;
    }
    public function __invoke(GetVideosRequest $getVideosRequest): VideoCollectionResponse
    {
        $videos = $this->videoRepository->findByStatus(
            new Status($getVideosRequest->status())
        );

        return new VideoCollectionResponse($videos);
    }
}