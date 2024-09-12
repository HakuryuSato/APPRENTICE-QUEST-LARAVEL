<?php

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class TodoHttpTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_should_return_http_status_200_on_get_todos()
    {
        // arrange
        $response = $this->get('/todos');

        // act,assert
        $response->assertStatus(200);
    }

    /** @test */
    public function it_should_redirect_on_post_todos()
    {
        $response = $this->post('/todos', [
            'title' => 'New Todo'
        ]);

        $response->assertStatus(302);
    }
}
