ClearCacheBundle
===============
Allow to clear the application's cache via an url

Installation:
-------------
Via composer:
```composer
$ composer require nitrique/ClearCacheBundle
```

Register bundle in app/AppKernel.php:
```php
 new Nitrique\ClearCacheBundle\NitriqueClearCacheBundle(),
```

In app/config/routing.yml add:
```yaml
nitrique_clear_cache:
    resource: "@NitriqueClearCacheBundle/Resources/config/routing.yml"
    prefix:   /
```

Usage:
------
Clear cache using /api/cache/clear
