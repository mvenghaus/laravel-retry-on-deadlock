# Laravel - Retry on Deadlock

A simple function to retry a callback if a deadlock occurs.

## Installation

Install the package via composer:

```bash
composer require mvenghaus/laravel-retry-on-deadlock
```

## Definition

```php
function retryOnDeadlock(callable $callback, int $times = 10, int $sleepMilliseconds = 1000)
```

## Usage

After installation, you can use the function immediately as it is automatically loaded via composer.

```php
retryOnDeadlock(function() {
    // do database stuff
});
```
