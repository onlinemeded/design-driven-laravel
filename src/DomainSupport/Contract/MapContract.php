<?php

namespace OnlineMedEd\DomainDrivenLaravel\DomainSupport\Contract;

interface MapContract
{
    public static function toDTO(AggregateContract $aggregate): array;
    public static function toDomain($rawData): AggregateContract;
    public static function toPersistence(AggregateContract $aggregate): array;
}