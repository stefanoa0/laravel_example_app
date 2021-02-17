<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PhotoTest extends TestCase
{
    /**
     * A basic test Photo.
     *
     * @return void
     */
    public function testPhotosIndex()
    {
        $response = $this->get('photos');

        $response->assertStatus(200);
    }

}
