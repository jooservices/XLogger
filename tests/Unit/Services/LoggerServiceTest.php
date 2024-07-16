<?php

namespace JOOservices\XLogger\Tests\Unit\Services;

use Illuminate\Foundation\Testing\RefreshDatabase;
use JOOservices\XLogger\Services\Adapters\DatabaseAdapter;
use JOOservices\XLogger\Services\Interfaces\LoggerAdapterInterface;
use JOOservices\XLogger\Services\LoggerService;
use JOOservices\XLogger\Tests\TestCase;

class LoggerServiceTest extends TestCase
{
    use RefreshDatabase;

    public function testLog()
    {
        app()->bind(LoggerAdapterInterface::class, function () {
            return new DatabaseAdapter();
        });
        $service = app(LoggerService::class);
        $service->alert('test', []);

        $this->assertDatabaseHas('loggers', [
            'level' => 'alert',
            'message' => 'test',
        ]);
    }
}
