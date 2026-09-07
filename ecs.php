<?php

declare(strict_types=1);

use PhPhD\CodingStandard\ValueObject\Set\PhdSetList;
use Symplify\EasyCodingStandard\Config\ECSConfig;

return ECSConfig::configure()
    ->withPaths([__DIR__.'/'])
    ->withSkip([__DIR__.'/vendor'])
    ->withSets([PhdSetList::ecs()->getPath()])
;
