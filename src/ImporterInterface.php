<?php

namespace SquadInno\Importer;

interface ImporterInterface
{
   public function getColumns(): array;

   public function denormalize(array $data);
}
