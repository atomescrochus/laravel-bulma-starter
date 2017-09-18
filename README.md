# Bulma template starter kit for Laravel

A quick replacement for Laravel's basic templates, built with Bulma. It requires Laravel >= 5.4.

[![Total Downloads](https://poser.pugx.org/atomescrochus/laravel-bulma-starter/downloads)](https://packagist.org/packages/atomescrochus/laravel-bulma-starter)

## Install

Via Composer

``` bash
$ composer require atomescrochus/laravel-bulma-starter
```

Then you have to install the package' service provider, _unless you are running Laravel >=5.5_ (it'll use package auto-discovery). :

```php
// config/app.php
'providers' => [
    ...
    Atomescrochus\LaravelBulmaStarter\LaravelBulmaStarterServiceProvider::class,
];
```

Then, follow theses simple steps:

1. Add `"bulma": "^0.3.1"` to your `package.json` file;
2. Run `npm update`
3. (If you don't want to use Bootstrap anymore) Remove, or comment out the reference to `sass_bootstrap` and `variables` in your `resources/assets/sass/app.scss` file and from `resources/assets/js/bootstrap.js`.
4. Add `@import "node_modules/bulma/bulma";` to the `resources/assets/sass/app.scss` file
5. Run `npm run [your-choice-of-env]` (the template files max uses of the `mix()` helper)

## Usage
### Publish the package's view files
If you want to take a peak at the code, you can publish the package's files using:

```bash
php artisan vendor:publish --provider="Atomescrochus\LaravelBulmaStarter\LaravelBulmaStarterServiceProvider" --tag="views"
```

You'll find them in `resources/views/vendor/laravel-bulma-starter`.

### Replace Laravel default files
If I wanted to replace the `welcome.blade.php` to the one provided in the package, I would just open the one provided with Laravel, and replace its content by `@include('laravel-bulma-starter::welcome')`. For the `auth.login` view, I'd use `@include('laravel-bulma-starter::auth.login')`, and so on.

### Using the package default template by yourself
Just create a new blade file and extend it with `@extends('laravel-bulma-starter::layouts.bulma')`.

You can pass content to this layout file using

```
@section('content')
Some content.
@endsection
```

You can add elements to the top right menu as such

```
@push('right-nav-menu')
    <a class="nav-item is-tab" href="{{ url('/some-link') }}">A menu item</a>
    <a class="nav-item is-tab" href="{{ url('/some-other-link') }}">Another menu item</a>
@endpush
```

If you need to add other scripts, or stylesheets, you can use some additionnal stacks (`scripts-before`, `scripts-after`, `styles-before` and `styles-after`) like so

```
@push('scripts-before')
    <!-- This will be added right before the inclusion of app.js --> 
    <!-- You still have to use the <script> tags here. -->
@endpush

@push('styles-before')
    <!-- This will be added right before the inclusion of app.css --> 
    <!-- You still have to use the <link> tags here. -->
@endpush
```

### Error display component
The only real difference between this packages' views and Laravel's default, beside using Bulma, is that I use a custom component for errors. It can be used as such:

```php
// if using it in a "horizontal form"
@include('laravel-bulma-starter::components.forms-errors', ['field' => 'nameOfField', 'type' => 'horizontal'])

// or if in a regular form, just omit the type
@include('laravel-bulma-starter::components.forms-errors', ['field' => 'nameOfField'])
```

Of course, you are in now way forced to use the components outisde this package's views, but I find it really useful so give it a try!

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CONDUCT](CONDUCT.md) for details.

## Security

If you discover any security related issues, please email jp@atomescroch.us instead of using the issue tracker.

## Credits

- [Jean-Philippe Murray][https://github.com/jpmurray]
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
