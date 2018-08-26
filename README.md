# Routes Cached Card for Laravel Nova

<img src="https://user-images.githubusercontent.com/15817188/44622904-7ad6a380-a87f-11e8-8c42-553818de74cb.png" width="350">

<img src="https://user-images.githubusercontent.com/15817188/44622903-7ad6a380-a87f-11e8-85ca-ba8220d57731.png" width="350">

## Installation

You can install this package with Composer to any application that uses Laravel Nova:

```bash
composer require wilburpowery/routes-cached
```

Next, you must register the card with Nova. This is typically done in the cards method of the NovaServiceProvider.

```php
// in app/Providers/NovaServiceProvider.php

// ...
public function cards()
{
    return [
        // ...
        new \Wilburpowery\RoutesCached\RoutesCached,
    ];
}
```

**TODO:**

- Show is your cache is out of date
- Click a button to cache your routes
