<?php

namespace OnlineMedEd\DomainDrivenLaravel\DomainSupport\Contract;

use OnlineMedEd\DomainDrivenLaravel\DomainSupport\DomainEventContract;

interface AggregateContract
{
    public function record(DomainEventContract $event);
}
