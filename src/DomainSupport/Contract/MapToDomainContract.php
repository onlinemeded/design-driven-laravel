<?php

namespace OnlineMedEd\DomainDrivenLaravel\DomainSupport\Contract;

interface MapToDomainContract
{
    public static function toDomain($model): EntityContract;
}