<?php


namespace VideoLibrary\Api\Application\Command\Video;


use VideoLibrary\Api\Application\Request\Video\CreateVideoRequest;
use VideoLibrary\Api\Application\Response\Subtitle\SubtitleCollectionResponse;
use VideoLibrary\Api\Application\Response\Video\VideoResponse;
use VideoLibrary\Api\Domain\Model\Subtitle\Subtitle;
use VideoLibrary\Api\Domain\Model\Subtitle\SubtitleCollection;
use VideoLibrary\Api\Domain\Model\Videos\Status;
use VideoLibrary\Api\Domain\Model\Videos\Video;
use VideoLibrary\Api\Domain\Model\Videos\VideoRepository;


class CreateVideoHandler
{
    /**
     * Undocumented variable
     *
     * @var VideoRepository
     */
    private  $videoRepository;
    //private IdStringGenerator $idStringGenerator;

    public function __construct(VideoRepository $videoRepository)
    {
        $this->videoRepository = $videoRepository;
        //$this->idStringGenerator = $idStringGenerator;
    }


    public function __invoke(CreateVideoRequest $createVideoRequest): VideoResponse
    {
        $video = new Video(
            1,
            $createVideoRequest->title(),
            $createVideoRequest->duration(),
            new Status($createVideoRequest->status()),
            $this->buildSubtitleCollection($createVideoRequest->subtitles())
        );

        $this->videoRepository->insert($video);

        return new VideoResponse($video);
    }

    private function buildSubtitleCollection(array $subtitles): SubtitleCollection
    {
        $subtileCollection = SubtitleCollection::init();
        if (!empty($subtitles)) {
            foreach ($subtitles as $subtitle) {
                $subtileCollection->add(new Subtitle(
                    1,
                    $subtitle
                ));
            }
        }

        return $subtileCollection;
    }
}