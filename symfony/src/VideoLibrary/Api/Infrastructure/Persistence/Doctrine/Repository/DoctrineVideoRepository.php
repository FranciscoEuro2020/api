<?php

namespace VideoLibrary\Api\Infrastructure\Persistence\Doctrine\Repository;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\EntityManager;
use VideoLibrary\Api\Domain\Model\Subtitle\Subtitle;
use VideoLibrary\Api\Infrastructure\Persistence\Doctrine\Entity\Subtitle as SubtitleEntity;
use VideoLibrary\Api\Domain\Model\Videos\Status;
use VideoLibrary\Api\Domain\Model\Videos\Video;
use VideoLibrary\Api\Domain\Model\Videos\VideoId;
use VideoLibrary\Api\Infrastructure\Persistence\Doctrine\Entity\Video as VideoEntity;
use VideoLibrary\Api\Domain\Model\Videos\VideoCollection;
use VideoLibrary\Api\Domain\Model\Videos\VideoRepository;

class DoctrineVideoRepository extends DoctrineRepository implements VideoRepository
{
    protected function entityClassName(): string
    {
        return VideoEntity::class;
    }

    public function findByStatus(Status $status): VideoCollection
    {
        $videos = $this->repository->findBy([
            'status' => $status->value()
        ]);
        
        $videoCollection = VideoCollection::init();

        if (!empty($videos)) {
            foreach ($videos as $video) {
                $videoCollection->add($this->toDomain($video));
            }
        }

        return $videoCollection;
    }

    public function insert(Video $video): void
    {
        $this->entityManager->persist($this->toInfrastructure($video));
        $this->entityManager->flush();
    }

    private function toInfrastructure(Video $video): VideoEntity
    {
        $videoEntity = new VideoEntity(
            $video->id(),
            $video->title(),
            $video->duration(),
            $video->status()->value(),
         //   new ArrayCollection(),
            $video->createdAt(),
            $video->updatedAt()
        );

       /* foreach ($video->subtitles()->getCollection() as $subtitle) {
            $videoEntity->addSubtitle($this->subtitleToInfrastructure($subtitle));
        }*/

        return $videoEntity;
    }

    private function subtitleToInfrastructure(Subtitle $subtitle): SubtitleEntity
    {
        return new SubtitleEntity(
            $subtitle->id(),
            $subtitle->language()
        );
    }

    private function toDomain(VideoEntity $video): Video
    {
        return new Video(
            $video->id(),
            $video->title(),
            $video->duration(),
            new Status($video->status()),
            $video->createdAt(),
            $video->updatedAt()
        );
    }
}