<?php

declare(strict_types=1);

namespace Tests;

use App\Http\Response;
use PHPUnit\Framework\TestCase as BaseTestCase;

/**
 * Abstract class ApiTestCase
 *
 * @author tresor-ilunga <ilungat82@gmail.com>
 */
abstract class ApiTestCase extends BaseTestCase
{
    public function json(string $method = 'GET', string $uri = '/', array $data = [], array $headers = []): Response
    {
        $body = '{"id":1,"title":"Clean Code: A Handbook of Agile Software Craftsmanship","year_published":2008,
        "author":{"id":1,"name":"Robert C. Martin","bio":"This is an author"}}';

        return new Response(body: $body, statusCode: 200, headers: []);
    }
}
