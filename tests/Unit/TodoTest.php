<?php

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\Todo;
use Illuminate\Support\Facades\Validator;

class TodoTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_should_fail_validation_when_title_is_empty()
    {
        $data = ['title' => ''];
        $validator = Validator::make($data, ['title' => 'required']);

        $this->assertTrue($validator->fails());
        $this->assertCount(1, $validator->errors()->get('title'));
    }

    /** @test */
    public function it_should_pass_validation_when_title_is_provided()
    {
        $data = ['title' => 'Sample Task'];
        $validator = Validator::make($data, ['title' => 'required']);

        $this->assertFalse($validator->fails());
    }
}

