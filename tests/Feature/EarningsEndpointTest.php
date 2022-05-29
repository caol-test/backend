<?php

namespace Tests\Feature;

use Tests\TestCase;

class EarningsEndpointTest extends TestCase
{
    public function test_get_earnings_fails_without_valid_parameters()
    {
        $jwt = $this->getJwt();

        $response = $this->get('/api/earnings?consultants=jon&from=from&to=to', [
            'Authorization' => "Bearer $jwt"
        ]);

        $response->assertJsonPath('success', false);
    }
}
