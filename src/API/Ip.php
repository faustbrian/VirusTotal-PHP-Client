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

class Ip extends AbstractAPI
{
    public function report(string $ip): HttpResponse
    {
        return $this->client->get('ip-address/report', compact('ip'));
    }
}
