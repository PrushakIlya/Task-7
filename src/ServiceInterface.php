<?php

namespace Prushak\Task7;

interface ServiceInterface
{
    public function formationDeadline(): int ;
    public function formationCost(): int;
    public function formationQueue(): int;
    public function getType(): string;
}
