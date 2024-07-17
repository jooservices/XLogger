<?php

namespace JOOservices\XLogger\Services\Adapters;

use JOOservices\XLogger\Models\Interfaces\LoggerEntityInterface;
use JOOservices\XLogger\Models\Logger;
use JOOservices\XLogger\Services\Interfaces\LoggerAdapterInterface;

class DatabaseAdapter implements LoggerAdapterInterface
{
    public function log(
        string $ip,
        array $context,
        string $message,
        string $level,
        string $status
    ): LoggerEntityInterface {
        return Logger::create([
            'ip' => $ip,
            'context' => $context,
            'message' => $message,
            'level' => $level,
            'status' => $status,
        ]);
    }
}
