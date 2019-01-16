<?php

namespace _PhpScoper5c3efd0df2edb\GuzzleHttp\Promise;

/**
 * Exception thrown when too many errors occur in the some() or any() methods.
 */
class AggregateException extends \_PhpScoper5c3efd0df2edb\GuzzleHttp\Promise\RejectionException
{
    public function __construct($msg, array $reasons)
    {
        parent::__construct($reasons, \sprintf('%s; %d rejected promises', $msg, \count($reasons)));
    }
}
