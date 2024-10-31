<?php

declare(strict_types=1);

use Illuminate\Database\QueryException;

if (! function_exists('retryOnDeadlock')) {
    /**
     * @throws Throwable
     */
    function retryOnDeadlock(callable $callback, int $times = 10, int $sleepMilliseconds = 1000)
    {
        return retry($times, $callback, $sleepMilliseconds, function ($exception) {
            return $exception instanceof QueryException && (int) $exception->getCode() === 40001;
        });
    }
}
