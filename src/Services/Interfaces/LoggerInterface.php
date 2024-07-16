<?php

namespace JOOservices\XLogger\Services\Interfaces;

use JOOservices\XLogger\Models\Interfaces\LoggerEntityInterface;

/**
 * @link https://www.php-fig.org/psr/psr-3/
 */
interface LoggerInterface
{
    /**
     * System is unusable.
     */
    public function emergency(string $message, array $context = []): LoggerEntityInterface;

    /**
     * Action must be taken immediately.
     *
     * Example: Entire website down, database unavailable, etc. This should
     * trigger the SMS alerts and wake you up.
     */
    public function alert(string $message, array $context = []): LoggerEntityInterface;

    /**
     * Critical conditions.
     *
     * Example: Application component unavailable, unexpected exception.
     */
    public function critical(string $message, array $context = []): LoggerEntityInterface;

    /**
     * Runtime errors that do not require immediate action but should typically
     * be logged and monitored.
     */
    public function error(string $message, array $context = []): LoggerEntityInterface;

    /**
     * Exceptional occurrences that are not errors.
     *
     * Example: Use of deprecated APIs, poor use of an API, undesirable things
     * that are not necessarily wrong.
     */
    public function warning(string $message, array $context = []): LoggerEntityInterface;

    /**
     * Normal but significant events.
     */
    public function notice(string $message, array $context = []): LoggerEntityInterface;

    /**
     * Interesting events.
     *
     * Example: User logs in, SQL logs.
     */
    public function info(string $message, array $context = []): LoggerEntityInterface;

    /**
     * Detailed debug information.
     */
    public function debug(string $message, array $context = []): LoggerEntityInterface;

    /**
     * Logs with an arbitrary level.
     */
    public function log(string $level, string $message, array $context = []): LoggerEntityInterface;
}
