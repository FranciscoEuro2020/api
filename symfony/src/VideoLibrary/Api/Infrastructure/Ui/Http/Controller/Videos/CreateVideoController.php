<?php


namespace VideoLibrary\Api\Infrastructure\Ui\Http\Controller\Videos;


use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use VideoLibrary\Api\Application\Command\Video\CreateVideoHandler;
use VideoLibrary\Api\Application\Request\Video\CreateVideoRequest;
use VideoLibrary\Api\Domain\Model\Videos\InvalidStatusValueException;

class CreateVideoController
{
    /**
     * Undocumented variable
     *
     * @var CreateVideoHandler
     */
    private  $createVideoHandler;

    public function __construct(CreateVideoHandler $createVideoHandler)
    {
        $this->createVideoHandler = $createVideoHandler;
    }

    public function __invoke(Request $request)
    {
        try {
            $video = ($this->createVideoHandler)(new CreateVideoRequest(
                $request->get('title'),
                $request->get('duration'),
                $request->get('status'),
                $request->get('subtitles')
            ));

            $response = new JsonResponse([
                'status' => 'ok',
                'hits' => [
                    $video->toArray(),
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