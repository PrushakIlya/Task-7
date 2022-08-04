<?php

namespace Prushak\Task7\Services;

class InstallService extends Service
{
    private const TYPE = 'install';
    public function __construct(int $deadline, int $queue, int $cost)
    {
        parent::__construct(self::TYPE, $deadline, $queue, $cost);
    }
}
