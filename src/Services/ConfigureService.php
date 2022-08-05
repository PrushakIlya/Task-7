<?php

namespace Prushak\Task7\Services;

use Prushak\Task7\ServiceInterface;

class ConfigureService extends Service implements ServiceInterface
{
    private const TYPE = 'configure';
    public function __construct()
    {
        parent::__construct(self::TYPE, $this->formationDeadline(), $this->formationQueue(), $this->formationCost());
    }

    public function formationDeadline(): int
    {
        //different implements
        return rand(1, 5);
    }

    public function formationCost(): int
    {
        //different implements
        return rand(10, 50);
    }

    public function formationQueue(): int
    {
        //different implements
        return rand(1, 100);
    }

    public function getType(): string
    {
        return self::TYPE;
    }
}
