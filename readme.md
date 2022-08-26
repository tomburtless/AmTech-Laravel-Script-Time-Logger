# AmTech Laravel Script Time Logger

The AmTech Script Time Logger is an addon to Laravel that allows you track the duration of a script you are running to a database.  This can be utilized for setting cron schedules, checking performance etc.

## Installation

Use Composer to install into Laravel project.

```bash
composer require american-technologies/laravel-script-time-logger
```

## Usage

```php

$scriptLog = new ScriptTimeLogger();

$scriptLog->startTimer($nameOfScript);

...

$scriptLog->endTimer($optionalNote)

```


## License
[MIT](https://choosealicense.com/licenses/mit/)