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
    public function __construct(
        private readonly array $queryParams, // $_GET
        private readonly array $serverVars  = [], // $_SERVER
        private readonly array $postParams  = [],
        private readonly array $cookies     = [],
        private readonly array $files       = []
    )
    {}

    public static function create(string $method, string $uri, array $server, string $content): self
    {
        $uriParts = parse_url($uri);
        parse_str($uriParts['query'] ?? '', $queryParams);

        $_SERVER['REQUEST_URI']    = $uri;
        $_SERVER['REQUEST_METHOD'] = $method;
        $serverVars                = array_merge($server, $_SERVER);

        return new self($queryParams, $serverVars);
    }

    public function getQueryParams(): array
    {
        return $this->queryParams;
    }

    public function getPath(): string
    {
        return strtok($this->serverVars['REQUEST_URI'], '?');
    }

    public function getMethod(): string
    {
        return $this->serverVars['REQUEST_METHOD'];
    }
}