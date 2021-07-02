# Install packages in an easy way

## Installation

You can install the package via composer:

```bash
composer require pkboom/laravel-install-packages --dev
```

## Publishing the config file

Publish the config file and add packages you want to add to your applications.

```bash
php artisan vendor:publish --provider="Pkboom\InstallPackages"
```

## Install default packages

```bash
php artisan install:packages
```

## Install optional packages

```bash
php artisan install:packages --optional
```
