<?php

namespace Prushak\Task7;

use Prushak\Task7\ServiceTrait;

class BlankProduct
{
    use ServiceTrait;

    private $fullBlank = [];

    public function createBlank(array $list)
    {
        foreach ($list as $item) {
            array_push($this->fullBlank, [...$item[0]->getData(), ...$this->requestService($item[1])]);
        }
    }

    public function getBlank(): array
    {
        return $this->fullBlank;
    }

    private function requestService(ServiceInterface $service)
    {
        return [
            'serviceCost' => $service->formationCost(),
            'serviceDeadline' => $service->formationDeadline(),
            'serviceQueue' => $service->formationQueue(),
            'serviceType' => $service->getType(),
        ];
    }
}
