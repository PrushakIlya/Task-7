<?php

namespace Prushak\Task7\Services;

class ConfigureService extends Service
{
    private const TYPE = 'configure';
    public function __construct(int $deadline, int $queue, int $cost)
    {
        parent::__construct(self::TYPE, $deadline, $queue, $cost);
    }
}
