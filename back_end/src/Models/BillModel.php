<?php

  namespace App\Models;

  use App\Entity\Bill;
  use App\Repository\BillRepository;

  class BillModel
  {
      public function store(string $data, BillRepository $billRepository): bool
      {
          if ($data) {
              $data = json_decode($data);

              $bill = new Bill();
              $bill->setName($data->firstname);
              $bill->setMobile($data->mobile);
              $bill->setType($data->types);
              $bill->setBrand($data->brands);
              $bill->setModel($data->model);
              $bill->setDeadline($data->deadline);
              $bill->setCost($data->cost);
              $bill->setService($data->service);
              $bill->setDescription($data->description);
              $bill->setProgress(0);
              $bill->setDate(new \DateTime());

              $billRepository->add($bill, true);

              return true;
          }

          return false;
      }
  }
