<?php

declare(strict_types=1);

namespace App\Http;

/**
 * Class Response
 *
 * @author tresor-ilunga <ilungat82@gmail.com>
 */
class Response
{
    public function __construct(
        private readonly string $body       = '',
        private readonly int    $statusCode = 200,
        private iterable        $headers    = []
    ) {
    }

    public function getBody(): string
    {
        return $this->body;
    }

    public function getStatusCode(): int
    {
        return $this->statusCode;
    }
}