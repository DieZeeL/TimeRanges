<?php

namespace DieZeeL\TimeRanges;

use Illuminate\Support\Facades\Facade;

/**
 * @see \DieZeeL\TimeRanges\Skeleton\SkeletonClass
 */
class TimeRangesFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'timeranges';
    }
}
