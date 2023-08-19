<?php

declare(strict_types=1);

namespace App\Http;

/**
 * Class Kernel
 *
 * @author tresor-ilunga <ilungat82@gmail.com>
 */
class Kernel
{
    public function handle(Request $request): Response
    {
        $body = '{"id":1,"title":"Clean Code: A Handbook of Agile Software Craftsmanship","year_published":2008,"author":{"id":1,"name":"Robert C. Martin","bio":"This is an author"}}';

        return new Response(body: $body, statusCode: 200, headers: []);
    }
}
