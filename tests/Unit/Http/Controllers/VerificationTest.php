<?php

namespace Tests\Unit\Http\Controllers;

use App\Http\Controllers\VerificationController;
use Tests\TestCase;

class VerificationTest extends TestCase
{
    /**
     * The controller instance.
     *
     * @var VerificationController
     */
    protected $instance;

    /**
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();

        $this->instance = new VerificationController();
    }

    /** @test */
    public function filter_invalid_emails()
    {
        $valid_email = $this->invokeMethod($this->instance, 'isValid', ['example@example.com']);

        $this->assertTrue($valid_email);

        $invalid_email = $this->invokeMethod($this->instance, 'isValid', ['example']);

        $this->assertFalse($invalid_email);
    }
}
