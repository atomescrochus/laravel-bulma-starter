# Changelog

All Notable changes to `laravel-bulma-starter` will be documented in this file.

Updates should follow the [Keep a CHANGELOG](http://keepachangelog.com/) principles.

## 2.1.1 - 2017-10-09
### Fix
- Auto-discovery

## 2.1.0 - 2017-09-18
### Added
- Support for Laravel >=5.5 package auto-discovery.

### Fixed
- Some typos (@MadMikeyB)

## 2.0.2 - 2017-02-05
### Fixed
- Link to home in the header is now working

## 2.0.1 - 2017-02-03
### Fixed
- I forgot to push changes to the layout name to the templates. I was somewhere else I guess, it's fixed now!

## 2.0.0 - 2017-02-03
### Added
- Added a layout file that you can extend that will not use the auth links in the menu
- A stack to the layout file for menu
- A stack to the layout file for scripts
- A stack to the layout file for styles

### Deprecated
- The `layouts/app.blade.php` has been renamed `bulma.blade.php` for clarity's sake. `app` was a bit to generic. (**BREAKING CHANGE, SEE README.**)

## 1.0.4 - 2017-02-03
- Lang property of the `<html>` tag is taken out of config, mimicking Laravel 5.4.8

## 1.0.3 - 2017-02-01
- Added a gitignore file

## 1.0.2 - 2017-01-30

### Fixed
- Publishing the views make them go in the `resources/views/vendor/laravel-bulma-starter` folder rather than `resources/views/laravel-bulma-starter`

## 1.0.1 - 2017-01-30

### Added
- Better instructions on publishing the views

## 1.0.0 - 2017-01-30

### Added
- All the files usually included with Laravel (including auth) based on Bulma

## IGNORE BELOW THIS LINE
## NEXT - YYYY-MM-DD

### Added
### Deprecated
### Fixed
### Removed
### Security