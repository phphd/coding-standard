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
   
   +    $ecsConfig->sets([PhdSetList::PATH]);
   };
   ```
