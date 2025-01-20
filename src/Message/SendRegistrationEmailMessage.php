<?php

namespace App\Message;

readonly class SendRegistrationEmailMessage
{
    public function __construct(
        private int $userId
    ) {}

    public function getUserId(): int
    {
        return $this->userId;
    }
}