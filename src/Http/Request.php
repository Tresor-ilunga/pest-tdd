<?php

declare(strict_types=1);

namespace App\Http;

/**
 * Class Request
 *
 * @author tresor-ilunga <ilungat82@gmail.com>
 */
class Request
{
    public static function create(string $method, string $uri, iterable $server, string $content): self
    {
        return new self();
    }
}