# laravel-lost-interfaces

[![Latest Stable Version](https://poser.pugx.org/jalle19/laravel-lost-interfaces/v/stable)](https://packagist.org/packages/jalle19/laravel-lost-interfaces)

If you've used the Laravel framework for a while, you may have noticed that the common convention is to add certain 
methods that will magically get called at some point.

Common examples are console commands that should have a `handle()` method, middleware that should have a `handle()` 
method, and so on.

This can get pretty annoying since you need to look up the correct method names and their signatures from the 
documentation. Not having interfaces also makes it harder to use your IDE to find which classes implement some 
functionality (e.g. finding all event subscribers to ensure you've actually registered all of them).

This library provides some of these missing interfaces.

## Installation

```bash
composer require jalle19/laravel-lost-interfaces
```

## Usage

Just implement the interfaces you need. The following list shows the currently available interfaces:

```
src/
├── Console
│   └── Command.php
├── Events
│   └── Subscriber.php
├── Http
│   ├── Middleware
│   │   └── Middleware.php
│   └── Requests
│       └── FormRequest.php
├── Mail
│   └── Buildable.php
└── Providers
    └── ServiceProvider.php
```

## Contributing

If you feel like some interface is missing, feel free to make a pull request. Remember to update the list in the 
README using `tree src/`.

## License

MIT
