<?php

namespace OnlineMedEd\DomainDrivenLaravel\DomainSupport\Contract;

interface EntityIdContract extends ValueObjectContract
{
    public function __construct($id);
    public function isValid($id);
    public function value();
    public function __toString();
}