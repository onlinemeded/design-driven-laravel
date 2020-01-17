<?php

namespace OnlineMedEd\DomainDrivenLaravel\DomainSupport;

use DateTimeImmutable;
use OnlineMedEd\DomainDrivenLaravel\DomainSupport\Contract\EntityIdContract;

interface DomainEventContract
{
    public function __construct(EntityIdContract $id, array $data, ?DateTimeImmutable $dateTime = null);
}
