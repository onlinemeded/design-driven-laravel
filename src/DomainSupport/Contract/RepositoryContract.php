<?php

namespace OnlineMedEd\DomainDrivenLaravel\DomainSupport\Contract;

interface RepositoryContract
{
    public function __construct(array $concreteModelClasses);
    public function save(AggregateContract $entity);
    public function search(EntityIdContract $id);
    public function searchByQuery(QueryContract $query);
}
