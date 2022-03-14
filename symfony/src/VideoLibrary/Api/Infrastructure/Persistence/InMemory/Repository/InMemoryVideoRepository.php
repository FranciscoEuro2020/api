<?php


namespace VideoLibrary\Api\Infrastructure\Persistence\InMemory\Repository;


use VideoLibrary\Api\Domain\Model\Videos\Status;
use VideoLibrary\Api\Domain\Model\Videos\Video;
use VideoLibrary\Api\Domain\Model\Videos\VideoCollection;
use VideoLibrary\Api\Domain\Model\Videos\VideoRepository;

class InMemoryVideoRepository implements VideoRepository
{
   // private array $videos;

    public function __construct()
    {
        $this->videos[] = new Video(
            1,
            'published video 1',
            120,
            new Status('published')
        );

        $this->videos[] = new Video(
            2,
            'published video 2',
            120,
            new Status('published')
        );

        $this->videos[] = new Video(
            3,
            'pending video 1',
            120,
            new Status('pending')
        );

        $this->videos[] = new Video(
            4,
            'pending video 2',
            120,
            new Status('pending')
        );

        $this->videos[] = new Video(
            5,
            'removed video 1',
            120,
            new Status('removed')
        );
    }

    public function insert(Video $video): void
    {
        // TODO: Implement insert() method.
    }


    public function findByStatus(Status $status): VideoCollection
    {
        $videoCollection = new VideoCollection();

        array_map(function ($video) use ($videoCollection, $status) {
            if ($video->status()->equals($status)) {
                $videoCollection->add($video);
            }
        }, $this->videos);

        return $videoCollection;
    }
}