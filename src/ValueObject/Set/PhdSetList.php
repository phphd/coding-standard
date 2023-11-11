<?php

declare(strict_types=1);

namespace PhPhD\CodingStandard\ValueObject\Set;

final class PhdSetList
{
    private const ECS_PATH = __DIR__.'/../../../config/set/ecs/phphd.php';

    private const RECTOR_PATH = __DIR__.'/../../../config/set/rector/phphd.php';

    private string $path;

    private function __construct(string $path)
    {
        $this->path = $path;
    }

    public static function ecs(): self
    {
        return new self(self::ECS_PATH);
    }

    public static function rector(): self
    {
        return new self(self::RECTOR_PATH);
    }

    public function getPath(): string
    {
        return $this->path;
    }
}
