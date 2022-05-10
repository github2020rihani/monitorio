<?php

namespace App\Services;

use Symfony\Component\Mailer\Exception\TransportException;
use Symfony\Component\Mailer\Mailer;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mailer\Transport;
use Symfony\Component\Mailer\Transport\SendmailTransport;
use Symfony\Component\Mime\Email;
use Twig\Environment;
use Symfony\Component\Mailer\Exception\TransportExceptionInterface;

class MailerService
{
    /**
     * @var MailerInterface
     */
    private $mailer;

    /**
     * @var Environment
     */
    private $twig;

    /**
     * MailerService constructor.
     *
     * @param MailerInterface       $mailer
     * @param Environment   $twig
     */
    public function __construct(MailerInterface $mailer, Environment $twig)
    {
        $this->mailer = $mailer;
        $this->twig = $twig;
    }

    /**
     * @param string $subject
     * @param string $from
     * @param string $to
     * @param string $template
     * @param array $parameters
     * @throws TransportExceptionInterface
     * @throws \Twig\Error\LoaderError
     * @throws \Twig\Error\RuntimeError
     * @throws \Twig\Error\SyntaxError
     */
    public function send(string $subject, string $from, string $to, string $template, array $parameters): void
    {

//        $text = <<<Body
//Hello $firstName,
//Thank you for signing up!
//Body;
//
//        $html = <<<HTMLBody
//<h1 style="text-align: center; color: blue;">Welcome</h1>
//Hello $firstName,
//<br /><br />
//Thank you for signing up!
//HTMLBody;
//
//        $email = (new Email())
//            ->from('support@example.com')
//            ->to($email)
//            ->subject('Welcome!')
//            ->attach('Hello World!', 'welcome.txt')
//            ->text($text)
//            ->html($html);
//
//        $this->mailer->send($email);
//$dsn = 'smtp://mailhog:1025';
$dsn = 'smtp://localhost:1025';
$transport = Transport::fromDsn($dsn);
$mailer = new Mailer($transport);

        try {
            $email = (new Email())
                ->from('support@example.com')
                ->to('rihaniyassine674@gmail.com')

                //cc bcc replayto
                ->subject($subject)
                ->text(
                  'fggfggf'
                );

            $mailer->send($email);
        } catch (TransportException $e) {
            print $e->getMessage()."\n";
            throw $e;
        }

    }
}