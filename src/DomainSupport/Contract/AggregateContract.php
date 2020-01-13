<?php

namespace OnlineMedEd\DomainDrivenLaravel\DomainSupport\Contract;

interface AggregateContract
{
    public function record($event, array $context);
    public function __destruct();
}
