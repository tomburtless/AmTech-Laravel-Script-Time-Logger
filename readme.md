# AmTech Laravel Script Time Logger

The AmTech Script Time Logger is an addon to Laravel that allows you track the duration of a script you are running to a database.  This can be utilized for setting cron schedules, checking performance etc.

## Installation

Use Composer to install into Laravel project.

```bash
# install package
composer require american-technologies/laravel-script-time-logger

# run migrate to create database
php artisan migrate 
```

## Usage

```php


use AmericanTechnologies\ScriptTimeLogger\ScriptTimeLogger;

$scriptLog = new ScriptTimeLogger();

$scriptLog->startTimer($nameOfScript);

...

$scriptLog->endTimer($optionalNote);

```


## License
[MIT](https://choosealicense.com/licenses/mit/)