## Description
A straightforward Coming Soon package for Laravel with Countdown timer and Email capture. 

Just Install the package, configure .env and you are ready to go!

![coming-soon-screenshot](https://softnweb.com/wp-content/uploads/2018/08/laravel-coming-soon.png "coming soon screenshot")




## Installation

* Install using composer

```bash
composer require tumainimosha/laravel-coming-soon
```


* After Installation run this command to publish assets

```bash
php artisan vendor:publish --provider="snw\\ComingSoon\\ComingSoonServiceProvider" --tag="assets"
```

* Add Coming Soon route to your route file

### Option (a) As the home route. Users will see this as landing page for `yourdomain.com`.
```php
// file: routes/web.php

Route::get('/', function () {
    return view('comingsoon::comingsoon');
});
```

### Option (b). As default route. Users will see this when trying to access any URL on your site

```php
// file: routes/web.php

Route::any('{query}', function () {
    return view('comingsoon::comingsoon');
})->where('query', '.*');
```

## If you want to display the Email form

Publish the migrations

```bash
php artisan vendor:publish --provider="snw\\ComingSoon\\ComingSoonServiceProvider" --tag="migrations"
```

Then run 

```bash
php artisan migrate
```

This will create a `coming_soons` table containing list of email of visitors to the site

## .env values
You will have to add the following to your `.env` and set values accordingly

- **OFFLINE_ENABLE=** {true/false} _(Enable Coming Soon page)_
- **OFFLINE_SHOW_EMAIL_FORM=** {true/false} _(Display the Email form)_
- **OFFLINE_SEND_EMAIL_TO=** {info@softnweb.in}
- **OFFLINE_YEAR=** {2018} _(Countdown year)_
- **OFFLINE_MONTH=** {12} _(Countdown month)_
- **OFFLINE_DAY=** {1} _(Countdown day)_
- **OFFLINE_HOURS=** {1} _(Countdown hours)_
- **OFFLINE_MINUTES=** {60} _(Countdown minutes)_
- **OFFLINE_SECONDS=** {60} _(Countdown seconds)_
- **OFFLINE_FACEBOOK=** {http://facebook.com/softnweb}
- **OFFLINE_INSTAGRAM=** {#}
- **OFFLINE_GITHUB=** {#}
- **OFFLINE_MAIL=** {info@softnweb.in}

## Security

If you discover any security related issues, please email [Me](mailto:princeton.mosha@gmail.com?subject=Coming+Soon+Package+Security+Issue)
instead of using the issue tracker.


## Credits

- [Tumaini Mosha](https://github.com/tumainimosha)
- [All contributors](https://github.com/tumainimosha/laravel-coming-soon/graphs/contributors)


This package is forked [SoftNWeb/laravel-coming-soon](https://github.com/SoftNWeb/laravel-coming-soon) package
