<?php

namespace JOOservices\XLogger\Models\Interfaces;

interface LoggerEntityInterface
{
    public function getIp(): string;

    public function getContext(): array;

    public function getMessage(): string;

    public function getLevel(): string;

    public function getStatus(): string;
}
