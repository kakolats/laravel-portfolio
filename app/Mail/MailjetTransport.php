<?php

namespace App\Mail;

use Symfony\Component\Mailer\Transport\AbstractTransport;
use Symfony\Component\Mailer\SentMessage;
use Symfony\Component\Mime\Email;
use Mailjet\Client;
use Mailjet\Resources;
use Symfony\Contracts\EventDispatcher\EventDispatcherInterface;
use Psr\Log\LoggerInterface;

class MailjetTransport extends AbstractTransport
{
    protected $client;

    public function __construct(Client $client, EventDispatcherInterface $dispatcher = null, LoggerInterface $logger = null)
    {
        parent::__construct($dispatcher, $logger);
        $this->client = $client;
    }

    protected function doSend(SentMessage $message): void
    {
        $email = $message->getOriginalMessage();

        if (!$email instanceof Email) {
            throw new \LogicException('You can only send instances of ' . Email::class);
        }

        $envelope = $message->getEnvelope();

        $response = $this->client->post(Resources::$Email, [
            'body' => [
                'FromEmail' => $envelope->getSender()->getAddress(),
                'FromName'  => $envelope->getSender()->getName(),
                'Subject'   => $email->getSubject(),
                'Text-part' => $email->getTextBody(),
                'Html-part' => $email->getHtmlBody(),
                'Recipients' => array_map(function ($recipient) {
                    return ['Email' => $recipient->getAddress()];
                }, $envelope->getRecipients()),
            ],
        ]);

        if (!$response->success()) {
            throw new \RuntimeException('Mailjet API request failed.');
        }
    }

    public function __toString(): string
    {
        return 'mailjet';
    }
}
