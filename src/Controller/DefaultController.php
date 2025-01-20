<?php

namespace App\Controller;

use App\Message\SendRegistrationEmailMessage;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Messenger\MessageBusInterface;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    public function __construct(
        private readonly MessageBusInterface $messageBus
    ) {}

    #[Route(path: '/', name: 'main', methods: ['GET'])]
    public function index(): Response
    {
        return new Response('Just a simple text response.');
    }

    #[Route(path: '/message', name: 'message', methods: ['GET'])]
    public function message(): Response
    {
        $message = new SendRegistrationEmailMessage(0);
        $this->messageBus->dispatch($message);

        return new Response('SendRegistrationMessage is dispatched.');
    }
}
