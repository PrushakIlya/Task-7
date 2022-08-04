<?php

namespace Prushak\Task7\Services;

use Prushak\Task7\ServiceInterface;

class DeliveryService extends Service implements ServiceInterface
{
    private const TYPE = 'delivery';
    public function __construct(int $queue)
    {
        parent::__construct(self::TYPE, $this->formationDeadline(), $queue, $this->formationCost());
    }
    public function formationDeadline(): int
    {
        //different implements
        return 10;
    }

    public function formationCost(): int
    {
        //different implements
        return 5;
    }
}
