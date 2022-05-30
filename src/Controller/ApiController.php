<?php

namespace App\Controller;

use App\Repository\UsersRepository;
use App\Services\MailerService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use FOS\RestBundle\Controller\Annotations\Get;
use JMS\Serializer\SerializationContext;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use OpenApi\Annotations as OA;
use Nelmio\ApiDocBundle\Annotation\Model;
use Nelmio\ApiDocBundle\Annotation\Security;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Mime\Email;



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

    /**
     * @return void
     * @Route("/forget_password", name="api_forget_password",  methods={"POST"})
     */
    public function forgetPassword(Request $request, MailerService $mailerService, UsersRepository $usersRepository)
    {
        $jsonData = json_decode($request->getContent());

        //send mail forgetpassword
        $email = $jsonData->email;

        try {
            $send = $mailerService->send('mot de passe oublier ?', 'support@example.com', 'rihaniibrahim4@gmail.com'
                , 'email/forget_password.html.twig', [
                    'nom' => 'ali'
                ]);
            return $this->json('send message success');

        } catch (\Exception $e) {
            return $this->json($e->getMessage());

        }



    }

    /**
     * @Route("/mail", name="mail")
     */
    public function sendMAIL(MailerInterface $mailer)
    {
        $email = (new Email())
            ->from('hello@example.com')
            ->to('rihnaiibrahim4@gmail.com')
            ->subject('Test de MailDev')
            ->text('Ceci est un mail de test');
        $mailer->send($email);

        return $this->json('success');
    }




}
