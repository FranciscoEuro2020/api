<?php
namespace VideoLibrary\Api\Infrastructure\Ui\Http\Controller\Videos;

use Symfony\Component\HttpFoundation\JsonResponse;
use VideoLibrary\Api\Domain\Model\Videos\Video;

class GetVideosController
{
    public function __invoke()
    {
        $video = new Video(
            1,
            'Test title',
            '250'
        );
        return new JsonResponse([
            'status' => 'ok',
            'video' => [
                'id' => $video->getId(),
                'title' => $video->getTitle(),
                'duration' => $video->getDuration(),
            ]
        ]);
    }

}