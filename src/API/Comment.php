<?php

declare(strict_types=1);

/*
 * This file is part of VirusTotal PHP Client.
 *
 * (c) Brian Faust <hello@basecode.sh>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Plients\VirusTotal\API;

use Plients\Http\HttpResponse;

class Comment extends AbstractAPI
{
    public function make(string $resource, string $comment): HttpResponse
    {
        return $this->client->post('comments/put', compact('resource', 'comment'));
    }
}
