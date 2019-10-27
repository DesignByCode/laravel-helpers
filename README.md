# Laravel Helpers

[![Latest Stable Version](https://poser.pugx.org/designbycode/laravel-helpers/v/stable)](https://packagist.org/packages/designbycode/laravel-helpers)
[![Total Downloads](https://poser.pugx.org/designbycode/laravel-helpers/downloads)](https://packagist.org/packages/designbycode/laravel-helpers)
[![Latest Unstable Version](https://poser.pugx.org/designbycode/laravel-helpers/v/unstable)](https://packagist.org/packages/designbycode/laravel-helpers)
[![License](https://poser.pugx.org/designbycode/laravel-helpers/license)](https://packagist.org/packages/designbycode/laravel-helpers)
[![composer.lock](https://poser.pugx.org/designbycode/laravel-helpers/composerlock)](https://packagist.org/packages/designbycode/laravel-helpers)
[![GitHub stars](https://img.shields.io/github/stars/DesignByCode/laravel-helpers?style=social)](https://github.com/DesignByCode/Laravel-Helpers/stargazers)
[![Twitter](https://img.shields.io/twitter/url?style=social&url=https%3A%2F%2Ftwitter.com%2FDesign_By_Code)](https://twitter.com/intent/tweet?text=Wow:&url=https%3A%2F%2Fgithub.com%2FDesignByCode%2FLaravel-Helpers)

## Introduction to Laravel Helpers
Laravel helpers is a very simple utilities class that help with small things like settings classes to html elements.

### Install with composer
```
$ composer require designbycode/laravel-helpers
```


### Set an class of active for links
Set link for navigation to active on page.
```php
<a href="{{ url('/') }}" class='{{ Set::isActive('/') }}'>Home</a>
or
<a href="{{ url('/') }}" class='{{ set_active('/') }}'>Home</a>
```
Add custom active classes or change the helpers config file for global changes.

```php
<a href="{{ url('/') }}" class='{{ Set::isActive('/', 'active open' ) }}'>Home</a>
or
<a href="{{ url('/') }}" class='{{ set_active('/', 'active open') }}'>Home</a>
```
### Set html body class to route name and route name with body prefix

```html 
// Example
// <body class="body body-home home">
```

```php
<body class="{{ Set::bodyClass() }}">
    ...
<body class="{{ set_body() }}">
    ...
```

Classes can be added or remove passing 2 arrays. The first array will add classes and the second array will exclude classes. 
```php
<body class="{{ Set::bodyClass(['foo', 'bar'], ['body', 'foo-bar']) }}">
    ...
<body class="{{ set_body(['foo', 'bar'], ['body', 'foo-bar']) }}">
    ...
```

### Config Helpers
Run the following command to publish config helpers to set global class names.
```
php artisan vendor:publish --provider=DesignByCode\Helpers\Providers\HelpersServiceProvider
```

## License

Laravel UI is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
