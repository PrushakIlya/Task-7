<?php

namespace Prushak\Task7\Services;

use Prushak\Task7\ServiceInterface;

class InstallService extends Service implements ServiceInterface
{
    private const TYPE = 'install';
    public function __construct(int $deadline, int $queue, int $cost)
    {
        parent::__construct(self::TYPE, $deadline, $queue, $cost);
    }

    public function formationDeadline(): int
    {
        //implements
        return 0;
    }

    public function formationCost(): int
    {
        //implements
        return 0;
    }
}
