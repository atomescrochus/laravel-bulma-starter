# laravel-bulma-starter

A quick replacement for Laravel's basic templates, built with Bulma. It requires Laravel >= 5.4

## Install

Via Composer

``` bash
$ composer require atomescrochus/laravel-bulma-starter
```

Then you have to install the package' service provider:

```php
// config/app.php
'providers' => [
    ...
    Atomescrochus\LaravelBulmaStarter\LaravelBulmaStarterServiceProvider::class,
];
```

## Usage

1. Add `"bulma": "^0.3.1"` to your `package.json` file;
2. Run `npm update`
3. (If you don't want Boostrap anymore) Remove, or comment out the reference to `sass_bootstrap` and `variables` in your `resources/assets/sass/app.scss` file
4. Add `@import "node_modules/bulma/bulma";` to the `resources/assets/sass/app.scss` file
5. Run `npm run [your-choice-of-env]`

If I wanted, for example, to replace the main welcome file, I would open the one provided with Laravel, remove its content and add `@include('laravel-bulma-starter::welcome')`. For the `auth.login` view, I'd add `@include('laravel-bulma-starter::auth.login')`, and so on.

If you want to take a peak at the code, you can publish the package's files using:

```bash
php artisan vendor:publish --provider="Atomescrochus\LaravelBulmaStarter\LaravelBulmaStarterServiceProvider" --tag="views"
```

You'll find them in `resources/views/vendor/laravel-bulma-starter` and you can then use them as your regular view files: `@include('vendor.laravel-bulma-starter.welcome')`

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

- [Jean-Philippe Murray][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
