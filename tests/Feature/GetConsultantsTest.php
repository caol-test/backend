<?php

namespace Tests\Feature;

use App\Repositories\UserRepository;
use Illuminate\Support\Collection;
use Mockery\MockInterface;
use Tests\TestCase;

class GetConsultantsTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_the_application_returns_a_successful_response()
    {
        $this->mock(UserRepository::class, function (MockInterface $mock) {
            $mock->shouldReceive('getConsultants')->once()->andReturn(new Collection());
        });

        $response = $this->get('/api/users/consultants');

        $response->assertSeeText('success');
    }
}
