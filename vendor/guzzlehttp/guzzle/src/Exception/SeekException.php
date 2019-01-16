<?php

namespace _PhpScoper5c3efd0df2edb\GuzzleHttp\Exception;

use _PhpScoper5c3efd0df2edb\Psr\Http\Message\StreamInterface;
/**
 * Exception thrown when a seek fails on a stream.
 */
class SeekException extends \RuntimeException implements \_PhpScoper5c3efd0df2edb\GuzzleHttp\Exception\GuzzleException
{
    private $stream;
    public function __construct(\_PhpScoper5c3efd0df2edb\Psr\Http\Message\StreamInterface $stream, $pos = 0, $msg = '')
    {
        $this->stream = $stream;
        $msg = $msg ?: 'Could not seek the stream to position ' . $pos;
        parent::__construct($msg);
    }
    /**
     * @return StreamInterface
     */
    public function getStream()
    {
        return $this->stream;
    }
}
