<?php

namespace Prushak\Task7\Services;

abstract class Service
{
    private string $type;
    private int $deadline;
    private int $queue;
    private int $cost;

    public function __construct(string $type, int $deadline, int $queue, int $cost)
    {
        $this->type = $type;
        $this->deadline = $deadline;
        $this->queue = $queue;
        $this->cost = $cost;
    }

    public function setType(string $type): void
    {
        $this->type = $type;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function setDeadline(string $deadline): void
    {
        $this->deadline = $deadline;
    }

    public function getDeadline(): string
    {
        return $this->deadline;
    }

    public function setQueue(string $queue): void
    {
        $this->queue = $queue;
    }

    public function getQueue(): string
    {
        return $this->queue;
    }

    public function setCost(string $cost): void
    {
        $this->cost = $cost;
    }

    public function getCost(): string
    {
        return $this->cost;
    }
}
