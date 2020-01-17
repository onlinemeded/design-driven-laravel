<?php

namespace OnlineMedEd\DomainDrivenLaravel\DomainSupport\Contract;

use OnlineMedEd\DomainDrivenLaravel\DomainSupport\DomainEventContract;

interface AggregateRootContract
{
    public function __destruct();
    public function record(DomainEventContract $domainEvent);
}