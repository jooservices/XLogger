<?php

namespace JOOservices\XLogger\Services\Interfaces;

interface LoggerAdapterInterface
{
    public function log(string $ip, array $context, string $message, string $level, string $status);
}
