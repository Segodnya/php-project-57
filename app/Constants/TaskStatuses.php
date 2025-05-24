<?php

namespace App\Constants;

class TaskStatuses
{
    public const NEW = 'новый';
    public const IN_PROGRESS = 'в работе';
    public const TESTING = 'на тестировании';
    public const COMPLETED = 'завершен';

    public static function all(): array
    {
        return [
            self::NEW,
            self::IN_PROGRESS,
            self::TESTING,
            self::COMPLETED
        ];
    }
}
