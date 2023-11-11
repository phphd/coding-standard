PhPhD Coding Standard
---------------------

## Installation

1. Add VCS-repository in `composer.json` to this package:
    
    ```json
    {
        "repositories": [
            {
                "type": "vcs",
                "url": "https://github.com/phphd/coding-standard"
            }
        ]
    }
    ```
   
2. Install via composer:
   ```sh
   composer require --dev phphd/coding-standard
   ```
   
3. Add set list to your `ecs.php` config file:

   ```diff
   +use PhPhD\CodingStandard\ValueObject\Set\PhdSetList;
   use Symplify\EasyCodingStandard\Config\ECSConfig;
   
   return static function (ECSConfig $ecsConfig): void {
       $ecsConfig->paths([__DIR__.'/']);
       $ecsConfig->skip([__DIR__.'/vendor']);
   
   +   $ecsConfig->sets([PhdSetList::ecs()->getPath()]);
   };
   ```

4. Add set list to your `rector.php` config file:

    ```diff
    +use PhPhD\CodingStandard\ValueObject\Set\PhdSetList;
    use Rector\Config\RectorConfig;
    use Rector\Core\ValueObject\PhpVersion;
    
    return static function (RectorConfig $rectorConfig): void {
        $rectorConfig->paths([__DIR__.'/']);
        $rectorConfig->skip([__DIR__.'/vendor']);
    
    +   $rectorConfig->sets([PhdSetList::rector()->getPath()]);
        $rectorConfig->phpVersion(PhpVersion::PHP_80);
    };
   ```

5. Run the tools:

    ```shell
    vendor/bin/ecs check
    vendor/bin/rector --dry-run
    ```
