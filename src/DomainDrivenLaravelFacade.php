<?php

namespace OnlineMedEd\DomainDrivenLaravel;

use Illuminate\Support\Facades\Facade;

/**
 * @see \OnlineMedEd\DomainDrivenLaravel\Skeleton\SkeletonClass
 */
class DomainDrivenLaravelFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'domain-driven-laravel';
    }
}
