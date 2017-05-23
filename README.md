## Install via Composer

Add repositorie in `composer.json` :

```
    "repositories": [
        {
            "type": "composer",
            "url": "https://packages.drupal.org/8"
        },
        {
            "type": "git",
            "url": "https://github.com/dom18fr/cleverdrop"
        }
    ],
```

Add requirement in `composer.json`
```
    "require": {
        "drupal/core": "~8.0",
        "drupal/cleverdrop": "dev-master"
    }
```

OR 

`composer require drupal/cleverdrop:dev-master`
