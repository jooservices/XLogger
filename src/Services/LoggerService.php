<?php

namespace JOOservices\XLogger\Services;

use JOOservices\XLogger\Models\Interfaces\LoggerEntityInterface;
use JOOservices\XLogger\Services\Interfaces\LoggerAdapterInterface;
use JOOservices\XLogger\Services\Interfaces\LoggerInterface;

readonly class LoggerService implements LoggerInterface
{
    public function __construct(private LoggerAdapterInterface $logger) {}

    public function emergency(string $message, array $context = []): LoggerEntityInterface
    {
        return $this->log(__FUNCTION__, $message, $context);
    }

    public function alert(string $message, array $context = []): LoggerEntityInterface
    {
        return $this->log(__FUNCTION__, $message, $context);
    }

    public function critical(string $message, array $context = []): LoggerEntityInterface
    {
        return $this->log(__FUNCTION__, $message, $context);
    }

    public function error(string $message, array $context = []): LoggerEntityInterface
    {
        return $this->log(__FUNCTION__, $message, $context);
    }

    public function warning(string $message, array $context = []): LoggerEntityInterface
    {
        return $this->log(__FUNCTION__, $message, $context);
    }

    public function notice(string $message, array $context = []): LoggerEntityInterface
    {
        return $this->log(__FUNCTION__, $message, $context);
    }

    public function info(string $message, array $context = []): LoggerEntityInterface
    {
        return $this->log(__FUNCTION__, $message, $context);
    }

    public function debug(string $message, array $context = []): LoggerEntityInterface
    {
        return $this->log(__FUNCTION__, $message, $context);
    }

    public function log(string $level, string $message, array $context = []): LoggerEntityInterface
    {
        return $this->logger->log(request()->ip(), $context, $message, $level, LoggerConstants::INIT);
    }
}
