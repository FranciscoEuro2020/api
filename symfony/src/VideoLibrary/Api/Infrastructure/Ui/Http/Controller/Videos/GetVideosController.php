<?php
namespace VideoLibrary\Api\Infrastructure\Ui\Http\Controller\Videos;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use VideoLibrary\Api\Application\Query\Video\GetVideosHandler;
use VideoLibrary\Api\Application\Request\Video\GetVideosRequest;
use VideoLibrary\Api\Domain\Model\Videos\InvalidStatusValueException;

class GetVideosController
{
   // private GetVideosHandler $getVideosHandler;

    public function __construct(GetVideosHandler $getVideosHandler)
    {
        $this->getVideosHandler = $getVideosHandler;
    }

    public function __invoke(Request $request)
    {
        try {
            $videos = ($this->getVideosHandler)(
                new GetVideosRequest($request->get('status', 'published'))
            );

            $response = new JsonResponse([
                'status' => 'ok',
                'hits' => [
                    $videos->toArray(),
                ]
            ]);
        } catch (InvalidStatusValueException $e) {
            $response = new JsonResponse([
                'status' => 'error',
                'errorMesage' => 'Invalid status value. Must be published, pending or removed'
            ], 500);
        }

        return $response;
    }
}