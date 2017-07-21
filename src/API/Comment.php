<?php

/*
 * This file is part of VirusTotal PHP Client.
 *
 * (c) Brian Faust <hello@brianfaust.me>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\VirusTotal\API;

use BrianFaust\Http\HttpResponse;

class Comment extends AbstractAPI
{
    public function make(string $resource, string $comment): HttpResponse
    {
        return $this->client->post('comments/put', compact('resource', 'comment'));
    }
}