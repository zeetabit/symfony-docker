<?php

namespace App\MessageHandler;

use App\Entity\User;
use App\Message\SendRegistrationEmailMessage;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Messenger\Attribute\AsMessageHandler;

#[AsMessageHandler]
readonly class SendRegistrationEmailMessageHandler
{
    public function __construct(
        private EntityManagerInterface $entityManager
    ) {}

    public function __invoke(SendRegistrationEmailMessage $message): void
    {
//        $user = $this->entityManager->getRepository(User::class)->find($message->getUserId());
//
//        if (!$user instanceOf User) {
//            // Handle entity not found case
//        }

        // Send the email
    }
}