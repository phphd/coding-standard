<?php

declare(strict_types=1);

use PhPhD\CodingStandard\ValueObject\Set\PhdSetList;
use Rector\Config\RectorConfig;
use Rector\ValueObject\PhpVersion;

return RectorConfig::configure()
    ->withPaths([__DIR__.'/'])
    ->withSkip([__DIR__.'/vendor'])
    ->withSets([PhdSetList::rector()->getPath()])
    ->withPhpVersion(PhpVersion::PHP_74)
;
