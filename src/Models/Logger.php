<?php

namespace JOOservices\XLogger\Models;

use Dyrynda\Database\Support\GeneratesUuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use JOOservices\XLogger\Models\Interfaces\LoggerEntityInterface;

/**
 * @property string $ip
 * @property array $context
 * @property string $message
 * @property string $level
 * @property string $status
 */
class Logger extends Model implements LoggerEntityInterface
{
    use GeneratesUuid;
    use HasFactory;

    protected $table = 'loggers';

    protected $fillable = [
        'uuid',
        'ip',
        'context',
        'message',
        'level',
        'status',
    ];

    protected $casts = [
        'uuid' => 'string',
        'ip' => 'string',
        'context' => 'array',
        'message' => 'string',
        'level' => 'string',
        'status' => 'string',
    ];

    public function getIp(): string
    {
        return $this->ip;
    }

    public function getContext(): array
    {
        return $this->context;
    }

    public function getMessage(): string
    {
        return $this->message;
    }

    public function getLevel(): string
    {
        return $this->level;
    }

    public function getStatus(): string
    {
        return $this->status;
    }
}
