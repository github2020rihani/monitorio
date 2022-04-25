<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use FOS\RestBundle\Controller\Annotations\Get;
use JMS\Serializer\SerializationContext;
use Symfony\Component\HttpFoundation\Response;
use OpenApi\Annotations as OA;
use Nelmio\ApiDocBundle\Annotation\Model;
use Nelmio\ApiDocBundle\Annotation\Security;


class ApiController extends AbstractController
{

    /**
     * @Get(
     *     path = "/api/test/{id}",
     *     name = "api_test_id",
     *     requirements = {"id"="\d+"}
     * ),
     *
     * @OA\Parameter (
     *     name="key",
     *     in="query",
     *     description="The authorization key provided by HMF"
     * ),
     * @OA\Response(
     *     response=200,
     *     @OA\Schema(type="object",
     *         example={"foo": "bar", "hello": "world"}
     *     ),
     *     description="Response ok"
     * )
     * @OA\Response(
     *     response=401,
     *     description="Access Denied"
     * ),
     * @OA\Response(
     *     response=403,
     *     description="Forbidden"
     * ),
     * @OA\Response(
     *     response=404,
     *     description="Not Found"
     * )
     */
    public function index()
    {
        $detail=['test'=>'value'];

        $serializer = $this->get('serializer');
        $response = new Response(
            $serializer->serialize(['detail' => $detail], 'json'),
            Response::HTTP_OK
        );
        $response->headers->set('Content-Type', 'application/json');

        return $response;
    }



}
