<?php

namespace Prushak\Task7\Services;

class DeliveryService extends Service
{
    private const TYPE = 'delivery';
    public function __construct(int $deadline, int $queue, int $cost)
    {
        parent::__construct(self::TYPE, $deadline, $queue, $cost);
    }
}
