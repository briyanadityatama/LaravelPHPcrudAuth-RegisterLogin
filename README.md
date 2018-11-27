## LaravelPHPcrudAuth-RegisterLogin

#### LaravelPHPcrudAuth-RegisterLogin is a Complete Build of Laravel 5.7 with Email Registration Verification, Social Authentication, User Roles and Permissions, User Profiles, and Admin restricted user management system. Built on Bootstrap 4.

### Sponsor

<table>
    <tr>
        <td>
            <img src="https://s3.amazonaws.com/sponsers/sponsor-logo.png">
        </td>
        <td>
            If you want to quickly add secure token-based authentication to Laravel apps, feel free to check Auth0's Laravel SDK and free plan at <a href="https://auth0.com/overview?utm_source=GHsponsor&utm_medium=GHsponsor&utm_campaign=laravel-auth&utm_content=auth" target="_blank">https://auth0.com/overview</a>.
        </td>
    </tr>
</table>

#### Table of contents

- [About](#about)
- [Features](#features)
- [Installation Instructions](#installation-instructions)
  - [Build the Front End Assets with Mix](#build-front-end-assets-with-mix)
  - [Optionally Build Cache](#optionally-build-cache)
- [Seeds](#seeds)
  - [Seeded Roles](#seeded-roles)
  - [Seeded Permissions](#seeded-permissions)
  - [Seeded Users](#seeded-users)
  - [Themes Seed List](#themes-seed-list)
- [Routes](#routes)
- [Socialite](#socialite)
  - [Get Socialite Login API Keys](#get-socialite-login-api-keys)
  - [Add More Socialite Logins](#add-more-socialite-logins)
- [Other API keys](#other-api-keys)
- [Environment File](#environment-file)

### About

Laravel 5.7 with user authentication, registration with email confirmation, social media authentication, password recovery, and captcha protection. Uses offical [Bootstrap 4](http://getbootstrap.com). This also makes full use of Controllers for the routes, templates for the views, and makes use of middleware for routing. Project can be stood up in minutes.

### Features

#### A [Laravel](http://laravel.com/) 5.7.x with minimal [Bootstrap](http://getbootstrap.com) 4.0.x project.

| LaravelPHPcrudAuth-RegisterLogin Features                                                                                                        |
| :----------------------------------------------------------------------------------------------------------------------------------------------- |
| Built on [Laravel](http://laravel.com/) 5.7                                                                                                      |
| Built on [Bootstrap](https://getbootstrap.com/) 4                                                                                                |
| Uses [MySQL](https://github.com/mysql) Database (can be changed)                                                                                 |
| Uses [Artisan](http://laravel.com/docs/5.7/artisan) to manage database migration, schema creations, and create/publish page controller templates |
| Dependencies are managed with [COMPOSER](https://getcomposer.org/)                                                                               |
| Laravel Scaffolding **User** and **Administrator Authentication**.                                                                               |
| User [Socialite Logins](https://github.com/laravel/socialite) ready to go - See API list used below                                              |
| [Google Maps API v3](https://developers.google.com/maps/documentation/javascript/) for User Location lookup and Geocoding                        |
| CRUD (Create, Read, Update, Delete) Themes Management                                                                                            |
| CRUD (Create, Read, Update, Delete) User Management                                                                                              |
| Robust [Laravel Logging](https://laravel.com/docs/5.7/errors#logging) with admin UI using MonoLog                                                |
| Google [reCaptcha Protection with Google API](https://developers.google.com/recaptcha/)                                                          |
| User Registration with email verification                                                                                                        |
| Makes us of Laravel [Mix](https://laravel.com/docs/5.7/mix) to compile assets                                                                    |
| Makes use of [Language Localization Files](https://laravel.com/docs/5.7/localization)                                                            |
| Active Nav states using [Laravel Requests](https://laravel.com/docs/5.7/requests)                                                                |
| Restrict User Email Activation Attempts                                                                                                          |
| Capture IP to users table upon signup                                                                                                            |
| Uses [Laravel Debugger](https://github.com/barryvdh/laravel-debugbar) for development                                                            |
| Makes us of [Password Strength Meter](https://github.com/elboletaire/password-strength-meter)                                                    |
| Makes use of [hideShowPassword](https://github.com/cloudfour/hideShowPassword)                                                                   |
| User Avatar Image AJAX Upload with [Dropzone.js](http://www.dropzonejs.com/#configuration)                                                       |
| User Gravatar using [Gravatar API](https://github.com/creativeorange/gravatar)                                                                   |
| User Password Reset via Email Token                                                                                                              |
| User Login with remember password                                                                                                                |
| User [Roles/ACL Implementation](https://github.com/briyanadityatama/LaravelPHP-roles)                                                            |
| Makes of [Laravel's Soft Delete Structure](https://laravel.com/docs/5.7/eloquent#soft-deleting)                                                  |
| Soft Deleted Users Management System                                                                                                             |
| Permanently Delete Soft Deleted Users                                                                                                            |
| User Delete Account with Goodbye email                                                                                                           |
| User Restore Deleted Account Token                                                                                                               |
| Restore Soft Deleted Users                                                                                                                       |
| View Soft Deleted Users                                                                                                                          |
| Captures Soft Delete Date                                                                                                                        |
| Captures Soft Delete IP                                                                                                                          |
| Admin Routing Details UI                                                                                                                         |
| Admin PHP Information UI                                                                                                                         |
| Eloquent user profiles                                                                                                                           |
| User Themes                                                                                                                                      |
| 404 Page                                                                                                                                         |
| 403 Page                                                                                                                                         |
| Configurable Email Notification via [Laravel-Exception-Notifier](https://github.com/jeremykenedy/laravel-exception-notifier)                     |
| User Delete with Goodby email                                                                                                                    |
| User Restore Deleted Account                                                                                                                     |
| Activity Logging using [Laravel-logger](https://github.com/jeremykenedy/laravel-logger)                                                          |
| Optional 2-step account login verfication with [Laravel 2-Step Verification](https://github.com/briyanadityatama/laravelphp2step)                |
| Uses [Laravel PHP Info](https://github.com/jeremykenedy/laravel-phpinfo) package                                                                 |

### Installation Instructions

1. Run `git clone https://github.com/briyanadityatama/LaravelPHPcrudAuth-RegisterLogin.git LaravelPHPcrudAuth-RegisterLogin`
2. Create a MySQL database for the project
   - `mysql -u root -p`, if using Vagrant: `mysql -u homestead -psecret`
   - `create database mydb2;`
   - `\q`
3. From the projects root run `cp .env.example .env`
4. Configure your `.env` file
5. Run `composer update` from the projects root folder
6. From the projects root folder run:

```
php artisan vendor:publish --tag=laravelphproles &&
php artisan vendor:publish --tag=laravelphp2step
```

7. From the projects root folder run `sudo chmod -R 755 ../LaravelPHPcrudAuth-RegisterLogin`
8. From the projects root folder run `php artisan key:generate`
9. From the projects root folder run `php artisan migrate`
10. From the projects root folder run `composer dump-autoload`
11. From the projects root folder run `php artisan db:seed`
12. Compile the front end assets with [npm steps](#using-npm) or [yarn steps](#using-yarn).

#### Build the Front End Assets with Mix

##### Using NPM:

1. From the projects root folder run `npm install`
2. From the projects root folder run `npm run dev` or `npm run production`

- You can watch assets with `npm run watch`

##### Using Yarn:

1. From the projects root folder run `yarn install`
2. From the projects root folder run `yarn run dev` or `yarn run production`

- You can watch assets with `yarn run watch`

#### Optionally Build Cache

1. From the projects root folder run `php artisan config:cache`

###### And thats it with the caveat of setting up and configuring your development environment. I recommend [Laravel Homestead](https://laravel.com/docs/5.7/homestead)

### Start the App!

1. From the projects root folder run `php artisan serve` !
2. Go to your browser and open `localhost:8000` or `http://127.0.0.1:8000>`

### Seeds

##### Seeded Roles

- Unverified - Level 0
- User - Level 1
- Administrator - Level 5

##### Seeded Permissions

- view.users
- create.users
- edit.users
- delete.users

##### Seeded Users

| Email           | Password | Access       |
| :-------------- | :------- | :----------- |
| user@user.com   | password | User Access  |
| admin@admin.com | password | Admin Access |

##### Themes Seed List

- [ThemesTableSeeder](https://github.com/briyanadityatama/LaravelPHPcrudAuth-RegisterLogin/blob/master/database/seeds/ThemesTableSeeder.php)
- NOTE: A lot of themes do not render the greated on Bootstrap 4 since their core was built to override Bootstrap 4. These will be updated soon and ones that do not render well will be removed from the seed. In the mean time you can remove them from the seed or manaully from the UI or database.

### Routes

```
+--------+----------------------------------------+---------------------------------------+----------------------------------+---------------------------------------------------------------------------------------------------+-------------------------------------------------+
| Domain | Method                                 | URI                                   | Name                             | Action                                                                                            | Middleware                                      |
+--------+----------------------------------------+---------------------------------------+----------------------------------+---------------------------------------------------------------------------------------------------+-------------------------------------------------+
|        | GET|HEAD                               | /                                     | welcome                          | App\Http\Controllers\WelcomeController@welcome                                                    | web                                             |
|        | GET|HEAD                               | _debugbar/assets/javascript           | debugbar.assets.js               | Barryvdh\Debugbar\Controllers\AssetController@js                                                  | Barryvdh\Debugbar\Middleware\DebugbarEnabled    |
|        | GET|HEAD                               | _debugbar/assets/stylesheets          | debugbar.assets.css              | Barryvdh\Debugbar\Controllers\AssetController@css                                                 | Barryvdh\Debugbar\Middleware\DebugbarEnabled    |
|        | DELETE                                 | _debugbar/cache/{key}/{tags?}         | debugbar.cache.delete            | Barryvdh\Debugbar\Controllers\CacheController@delete                                              | Barryvdh\Debugbar\Middleware\DebugbarEnabled    |
|        | GET|HEAD                               | _debugbar/clockwork/{id}              | debugbar.clockwork               | Barryvdh\Debugbar\Controllers\OpenHandlerController@clockwork                                     | Barryvdh\Debugbar\Middleware\DebugbarEnabled    |
|        | GET|HEAD                               | _debugbar/open                        | debugbar.openhandler             | Barryvdh\Debugbar\Controllers\OpenHandlerController@handle                                        | Barryvdh\Debugbar\Middleware\DebugbarEnabled    |
|        | GET|HEAD                               | activate                              | activate                         | App\Http\Controllers\Auth\ActivateController@initial                                              | web,activity,auth                               |
|        | GET|HEAD                               | activate/{token}                      | authenticated.activate           | App\Http\Controllers\Auth\ActivateController@activate                                             | web,activity,auth                               |
|        | GET|HEAD                               | activation                            | authenticated.activation-resend  | App\Http\Controllers\Auth\ActivateController@resend                                               | web,activity,auth                               |
|        | GET|HEAD                               | activation-required                   | activation-required              | App\Http\Controllers\Auth\ActivateController@activationRequired                                   | web,auth,activated,activity                     |
|        | GET|HEAD                               | active-users                          |                                  | App\Http\Controllers\AdminDetailsController@activeUsers                                           | web,auth,activated,role:admin,activity,twostep  |
|        | GET|HEAD                               | activity                              | activity                         | jeremykenedy\LaravelLogger\App\Http\Controllers\LaravelLoggerController@showAccessLog             | web,auth,activity,role:admin                    |
|        | DELETE                                 | activity/clear-activity               | clear-activity                   | jeremykenedy\LaravelLogger\App\Http\Controllers\LaravelLoggerController@clearActivityLog          | web,auth,activity,role:admin                    |
|        | GET|HEAD                               | activity/cleared                      | cleared                          | jeremykenedy\LaravelLogger\App\Http\Controllers\LaravelLoggerController@showClearedActivityLog    | web,auth,activity,role:admin                    |
|        | GET|HEAD                               | activity/cleared/log/{id}             |                                  | jeremykenedy\LaravelLogger\App\Http\Controllers\LaravelLoggerController@showClearedAccessLogEntry | web,auth,activity,role:admin                    |
|        | DELETE                                 | activity/destroy-activity             | destroy-activity                 | jeremykenedy\LaravelLogger\App\Http\Controllers\LaravelLoggerController@destroyActivityLog        | web,auth,activity,role:admin                    |
|        | GET|HEAD                               | activity/log/{id}                     |                                  | jeremykenedy\LaravelLogger\App\Http\Controllers\LaravelLoggerController@showAccessLogEntry        | web,auth,activity,role:admin                    |
|        | POST                                   | activity/restore-log                  | restore-activity                 | jeremykenedy\LaravelLogger\App\Http\Controllers\LaravelLoggerController@restoreClearedActivityLog | web,auth,activity,role:admin                    |
|        | POST                                   | avatar/upload                         | avatar.upload                    | App\Http\Controllers\ProfilesController@upload                                                    | web,auth,activated,currentUser,activity,twostep |
|        | POST                                   | broadcasting/auth                     |                                  | Illuminate\Broadcasting\BroadcastController@authenticate                                          | web                                             |
|        | GET|HEAD                               | exceeded                              | exceeded                         | App\Http\Controllers\Auth\ActivateController@exceeded                                             | web,activity,auth                               |
|        | GET|HEAD                               | home                                  | public.home                      | App\Http\Controllers\UserController@index                                                         | web,auth,activated,activity,twostep             |
|        | GET|HEAD                               | images/profile/{id}/avatar/{image}    |                                  | App\Http\Controllers\ProfilesController@userProfileAvatar                                         | web,auth,activated,currentUser,activity,twostep |
|        | POST                                   | login                                 |                                  | App\Http\Controllers\Auth\LoginController@login                                                   | web,guest                                       |
|        | GET|HEAD                               | login                                 | login                            | App\Http\Controllers\Auth\LoginController@showLoginForm                                           | web,guest                                       |
|        | GET|HEAD                               | logout                                | logout                           | App\Http\Controllers\Auth\LoginController@logout                                                  | web,auth,activated,activity                     |
|        | POST                                   | logout                                | logout                           | App\Http\Controllers\Auth\LoginController@logout                                                  | web                                             |
|        | GET|HEAD                               | logs                                  |                                  | Rap2hpoutre\LaravelLogViewer\LogViewerController@index                                            | web,auth,activated,role:admin,activity,twostep  |
|        | POST                                   | password/email                        | password.email                   | App\Http\Controllers\Auth\ForgotPasswordController@sendResetLinkEmail                             | web,guest                                       |
|        | POST                                   | password/reset                        |                                  | App\Http\Controllers\Auth\ResetPasswordController@reset                                           | web,guest                                       |
|        | GET|HEAD                               | password/reset                        | password.request                 | App\Http\Controllers\Auth\ForgotPasswordController@showLinkRequestForm                            | web,guest                                       |
|        | GET|HEAD                               | password/reset/{token}                | password.reset                   | App\Http\Controllers\Auth\ResetPasswordController@showResetForm                                   | web,guest                                       |
|        | GET|HEAD|POST|PUT|PATCH|DELETE|OPTIONS | php                                   |                                  | Illuminate\Routing\RedirectController                                                             | web                                             |
|        | GET|HEAD                               | phpinfo                               | laravelPhpInfo::phpinfo          | jeremykenedy\LaravelPhpInfo\App\Http\Controllers\LaravelPhpInfoController@phpinfo                 | web,auth,activated,role:admin,activity,twostep  |
|        | GET|HEAD                               | profile/create                        | profile.create                   | App\Http\Controllers\ProfilesController@create                                                    | web,auth,activated,currentUser,activity,twostep |
|        | GET|HEAD                               | profile/{profile}                     | profile.show                     | App\Http\Controllers\ProfilesController@show                                                      | web,auth,activated,currentUser,activity,twostep |
|        | PUT|PATCH                              | profile/{profile}                     | profile.update                   | App\Http\Controllers\ProfilesController@update                                                    | web,auth,activated,currentUser,activity,twostep |
|        | GET|HEAD                               | profile/{profile}/edit                | profile.edit                     | App\Http\Controllers\ProfilesController@edit                                                      | web,auth,activated,currentUser,activity,twostep |
|        | GET|HEAD                               | profile/{username}                    | {username}                       | App\Http\Controllers\ProfilesController@show                                                      | web,auth,activated,activity,twostep             |
|        | DELETE                                 | profile/{username}/deleteUserAccount  | {username}                       | App\Http\Controllers\ProfilesController@deleteUserAccount                                         | web,auth,activated,currentUser,activity,twostep |
|        | PUT                                    | profile/{username}/updateUserAccount  | {username}                       | App\Http\Controllers\ProfilesController@updateUserAccount                                         | web,auth,activated,currentUser,activity,twostep |
|        | PUT                                    | profile/{username}/updateUserPassword | {username}                       | App\Http\Controllers\ProfilesController@updateUserPassword                                        | web,auth,activated,currentUser,activity,twostep |
|        | GET|HEAD                               | re-activate/{token}                   | user.reactivate                  | App\Http\Controllers\RestoreUserController@userReActivate                                         | web,activity                                    |
|        | GET|HEAD                               | register                              | register                         | App\Http\Controllers\Auth\RegisterController@showRegistrationForm                                 | web,guest                                       |
|        | POST                                   | register                              |                                  | App\Http\Controllers\Auth\RegisterController@register                                             | web,guest                                       |
|        | GET|HEAD                               | routes                                |                                  | App\Http\Controllers\AdminDetailsController@listRoutes                                            | web,auth,activated,role:admin,activity,twostep  |
|        | POST                                   | search-users                          | search-users                     | App\Http\Controllers\UsersManagementController@search                                             | web,auth,activated,role:admin,activity,twostep  |
|        | GET|HEAD                               | social/handle/{provider}              | social.handle                    | App\Http\Controllers\Auth\SocialController@getSocialHandle                                        | web,activity                                    |
|        | GET|HEAD                               | social/redirect/{provider}            | social.redirect                  | App\Http\Controllers\Auth\SocialController@getSocialRedirect                                      | web,activity                                    |
|        | POST                                   | themes                                | themes.store                     | App\Http\Controllers\ThemesManagementController@store                                             | web,auth,activated,role:admin,activity,twostep  |
|        | GET|HEAD                               | themes                                | themes                           | App\Http\Controllers\ThemesManagementController@index                                             | web,auth,activated,role:admin,activity,twostep  |
|        | GET|HEAD                               | themes/create                         | themes.create                    | App\Http\Controllers\ThemesManagementController@create                                            | web,auth,activated,role:admin,activity,twostep  |
|        | DELETE                                 | themes/{theme}                        | themes.destroy                   | App\Http\Controllers\ThemesManagementController@destroy                                           | web,auth,activated,role:admin,activity,twostep  |
|        | PUT|PATCH                              | themes/{theme}                        | themes.update                    | App\Http\Controllers\ThemesManagementController@update                                            | web,auth,activated,role:admin,activity,twostep  |
|        | GET|HEAD                               | themes/{theme}                        | themes.show                      | App\Http\Controllers\ThemesManagementController@show                                              | web,auth,activated,role:admin,activity,twostep  |
|        | GET|HEAD                               | themes/{theme}/edit                   | themes.edit                      | App\Http\Controllers\ThemesManagementController@edit                                              | web,auth,activated,role:admin,activity,twostep  |
|        | GET|HEAD                               | users                                 | users                            | App\Http\Controllers\UsersManagementController@index                                              | web,auth,activated,role:admin,activity,twostep  |
|        | POST                                   | users                                 | users.store                      | App\Http\Controllers\UsersManagementController@store                                              | web,auth,activated,role:admin,activity,twostep  |
|        | GET|HEAD                               | users/create                          | users.create                     | App\Http\Controllers\UsersManagementController@create                                             | web,auth,activated,role:admin,activity,twostep  |
|        | GET|HEAD                               | users/deleted                         | deleted.index                    | App\Http\Controllers\SoftDeletesController@index                                                  | web,auth,activated,role:admin,activity,twostep  |
|        | DELETE                                 | users/deleted/{deleted}               | deleted.destroy                  | App\Http\Controllers\SoftDeletesController@destroy                                                | web,auth,activated,role:admin,activity,twostep  |
|        | PUT|PATCH                              | users/deleted/{deleted}               | deleted.update                   | App\Http\Controllers\SoftDeletesController@update                                                 | web,auth,activated,role:admin,activity,twostep  |
|        | GET|HEAD                               | users/deleted/{deleted}               | deleted.show                     | App\Http\Controllers\SoftDeletesController@show                                                   | web,auth,activated,role:admin,activity,twostep  |
|        | DELETE                                 | users/{user}                          | user.destroy                     | App\Http\Controllers\UsersManagementController@destroy                                            | web,auth,activated,role:admin,activity,twostep  |
|        | PUT|PATCH                              | users/{user}                          | users.update                     | App\Http\Controllers\UsersManagementController@update                                             | web,auth,activated,role:admin,activity,twostep  |
|        | GET|HEAD                               | users/{user}                          | users.show                       | App\Http\Controllers\UsersManagementController@show                                               | web,auth,activated,role:admin,activity,twostep  |
|        | GET|HEAD                               | users/{user}/edit                     | users.edit                       | App\Http\Controllers\UsersManagementController@edit                                               | web,auth,activated,role:admin,activity,twostep  |
|        | GET|HEAD                               | verification/needed                   | laravelphp2step::verificationNeeded | briyanadityatama\laravelphp2step\App\Http\Controllers\TwoStepController@showVerification                 | web,auth,Closure                                |
|        | POST                                   | verification/resend                   | laravelphp2step::resend             | briyanadityatama\laravelphp2step\App\Http\Controllers\TwoStepController@resend                           | web,auth,Closure                                |
|        | POST                                   | verification/verify                   | laravelphp2step::verify             | briyanadityatama\laravelphp2step\App\Http\Controllers\TwoStepController@verify                           | web,auth,Closure                                |
+--------+----------------------------------------+---------------------------------------+----------------------------------+---------------------------------------------------------------------------------------------------+-------------------------------------------------+
```

### Socialite

#### Get Socialite Login API Keys:

- [Google Captcha API](https://www.google.com/recaptcha/admin#list)
- [Facebook API](https://developers.facebook.com/)
- [Twitter API](https://apps.twitter.com/)
- [Google &plus; API](https://console.developers.google.com/)
- [GitHub API](https://github.com/settings/applications/new)
- [YouTube API](https://developers.google.com/youtube/v3/getting-started)
- [Twitch TV API](http://www.twitch.tv/kraken/oauth2/clients/new)
- [Instagram API](https://instagram.com/developer/register/)
- [37 Signals API](https://github.com/basecamp/basecamp-classic-api)

#### Add More Socialite Logins

- See full list of providers: [http://socialiteproviders.github.io](http://socialiteproviders.github.io/#providers)

###### **Steps**:

1. Go to [http://socialiteproviders.github.io](http://socialiteproviders.github.io/providers/twitch/) and select the provider to be added.
2. From the projects root folder in terminal run composer command to get the needed package.

   - Example:

   ```
      composer require socialiteproviders/twitch
   ```

3. From the projects root folder run `composer update`
4. Add the service provider to `/config/services.php`

   - Example:

   ```
      'twitch' => [
          'client_id'   => env('TWITCH_KEY'),
          'client_secret' => env('TWITCH_SECRET'),
          'redirect'    => env('TWITCH_REDIRECT_URI'),
      ],
   ```

5. Add the API credentials to `/.env`

   - Example:

   ```
      TWITCH_KEY=YOURKEYHERE
      TWITCH_SECRET=YOURSECRETHERE
      TWITCH_REDIRECT_URI=http://YOURWEBSITEURL.COM/social/handle/twitch
   ```

6. Add the social media login link:

   - Example:
     In file `/resources/views/auth/login.blade.php` add ONE of the following:

     - Conventional HTML:

     ```
     <a href="{{ route('social.redirect', ['provider' => 'twitch']) }}" class="btn btn-lg btn-primary btn-block twitch">Twitch</a>
     ```

     - Use Laravel HTML Facade with [Laravel Collective](https://laravelcollective.com/):

     ```
     {!! HTML::link(route('social.redirect', ['provider' => 'twitch']), 'Twitch', array('class' => 'btn btn-lg btn-primary btn-block twitch')) !!}
     ```

### Other API keys

- [Google Maps API v3 Key](https://developers.google.com/maps/documentation/javascript/get-api-key#get-an-api-key)

### Environment File

Example `.env` file:

```bash

APP_NAME=Laravel
APP_ENV=local
APP_KEY=
APP_DEBUG=true
APP_URL=http://localhost

LOG_CHANNEL=stack

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=mydb2
DB_USERNAME=admin
DB_PASSWORD=null

BROADCAST_DRIVER=pusher
CACHE_DRIVER=file
SESSION_DRIVER=file
SESSION_LIFETIME=120
QUEUE_DRIVER=sync

REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379

MAIL_DRIVER=smtp
MAIL_HOST=mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null

MAIL_FROM_ADDRESS=
MAIL_FROM_NAME=''

EMAIL_EXCEPTION_ENABLED=false
EMAIL_EXCEPTION_FROM=email@email.com
EMAIL_EXCEPTION_TO='email1@gmail.com, email2@gmail.com'
EMAIL_EXCEPTION_CC=''
EMAIL_EXCEPTION_BCC=''
EMAIL_EXCEPTION_SUBJECT=''

# You will also need to update the pusher credentials in /resources/assets/js/bootstrap.js - lines 64 - 66
PUSHER_APP_ID=
PUSHER_APP_KEY=
PUSHER_APP_SECRET=
PUSHER_APP_CLUSTER=

MIX_PUSHER_APP_KEY="${PUSHER_APP_KEY}"
MIX_PUSHER_APP_CLUSTER="${PUSHER_APP_CLUSTER}"

ACTIVATION=true
ACTIVATION_LIMIT_TIME_PERIOD=24
ACTIVATION_LIMIT_MAX_ATTEMPTS=3
NULL_IP_ADDRESS=0.0.0.0

DEBUG_BAR_ENVIRONMENT=local

USER_RESTORE_CUTOFF_DAYS=31
USER_RESTORE_ENCRYPTION_KEY=
USER_LIST_PAGINATION_SIZE=50

LARAVEL_2STEP_ENABLED=false
LARAVEL_2STEP_DATABASE_CONNECTION=mysql
LARAVEL_2STEP_DATABASE_TABLE=laravelphp2step
LARAVEL_2STEP_USER_MODEL=App\User
LARAVEL_2STEP_EMAIL_FROM="mail@gmail.com"
LARAVEL_2STEP_EMAIL_FROM_NAME="Laravel 2 Step Verification"
LARAVEL_2STEP_EMAIL_SUBJECT='Laravel 2 Step Verification'
LARAVEL_2STEP_EXCEEDED_COUNT=3
LARAVEL_2STEP_EXCEEDED_COUNTDOWN_MINUTES=1440
LARAVEL_2STEP_VERIFIED_LIFETIME_MINUTES=360
LARAVEL_2STEP_RESET_BUFFER_IN_SECONDS=300
LARAVEL_2STEP_CSS_FILE="css/laravelphp2step/app.css"
LARAVEL_2STEP_APP_CSS_ENABLED=false
LARAVEL_2STEP_APP_CSS="css/app.css"
LARAVEL_2STEP_BOOTSTRAP_CSS_CDN_ENABLED=true
LARAVEL_2STEP_BOOTSTRAP_CSS_CDN="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"

DEFAULT_GRAVATAR_SIZE=80
DEFAULT_GRAVATAR_FALLBACK=http://c1940652.r52.cf0.rackcdn.com/51ce28d0fb4f442061000000/Screen-Shot-2013-06-28-at-5.22.23-PM.png
DEFAULT_GRAVATAR_SECURE=false
DEFAULT_GRAVATAR_MAX_RATING=g
DEFAULT_GRAVATAR_FORCE_DEFAULT=false
DEFAULT_GRAVATAR_FORCE_EXTENSION=jpg

DROPZONE_JS_CDN=https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/dropzone.js

LARAVEL_LOGGER_DATABASE_CONNECTION=mysql
LARAVEL_LOGGER_DATABASE_TABLE=laravel_logger_activity
LARAVEL_LOGGER_ROLES_ENABLED=true
LARAVEL_LOGGER_ROLES_MIDDLWARE=role:admin
LARAVEL_LOGGER_MIDDLEWARE_ENABLED=true
LARAVEL_LOGGER_USER_MODEL=App\Models\User
LARAVEL_LOGGER_PAGINATION_ENABLED=true
LARAVEL_LOGGER_PAGINATION_PER_PAGE=25
LARAVEL_LOGGER_DATATABLES_ENABLED=false
LARAVEL_LOGGER_DASHBOARD_MENU_ENABLED=true
LARAVEL_LOGGER_DASHBOARD_DRILLABLE=true
LARAVEL_LOGGER_LOG_RECORD_FAILURES_TO_FILE=true
LARAVEL_LOGGER_FLASH_MESSAGE_BLADE_ENABLED=false
LARAVEL_LOGGER_JQUERY_CDN_ENABLED=false
LARAVEL_LOGGER_JQUERY_CDN_URL=https://code.jquery.com/jquery-2.2.4.min.js
LARAVEL_LOGGER_BLADE_CSS_PLACEMENT_ENABLED=true
LARAVEL_LOGGER_BLADE_JS_PLACEMENT_ENABLED=true
LARAVEL_LOGGER_BOOTSTRAP_JS_CDN_ENABLED=false
LARAVEL_LOGGER_BOOTSTRAP_JS_CDN_URL=https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js
LARAVEL_LOGGER_FONT_AWESOME_CDN_ENABLED=false
LARAVEL_LOGGER_FONT_AWESOME_CDN_URL=https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css
LARAVEL_LOGGER_BOOTSTRAP_CSS_CDN_ENABLED=false
LARAVEL_LOGGER_BOOTSTRAP_CSS_CDN_URL=https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css

// NOTE: YOU CAN REMOVE THE KEY CALL IN app.blade.php IF YOU GET A POP UP AND DO NOT WANT TO SETUP A KEY FOR DEV
# Google Maps API v3 Key - https://developers.google.com/maps/documentation/javascript/get-api-key#get-an-api-key
GOOGLEMAPS_API_STATUS=true
GOOGLEMAPS_API_KEY=YOURGOOGLEMAPSkeyHERE

# https://console.developers.google.com/ - NEED OAUTH CREDS
GOOGLE_ID=YOURGOOGLEPLUSidHERE
GOOGLE_SECRET=YOURGOOGLEPLUSsecretHERE
GOOGLE_REDIRECT=http://yourwebsiteURLhere.com/social/handle/google

# https://www.google.com/recaptcha/admin#list
ENABLE_RECAPTCHA=true
RE_CAP_SITE=YOURGOOGLECAPTCHAsitekeyHERE
RE_CAP_SECRET=YOURGOOGLECAPTCHAsecretHERE

# https://developers.facebook.com/
FB_ID=YOURFACEBOOKidHERE
FB_SECRET=YOURFACEBOOKsecretHERE
FB_REDIRECT=http://yourwebsiteURLhere.com/social/handle/facebook

# https://apps.twitter.com/
TW_ID=YOURTWITTERidHERE
TW_SECRET=YOURTWITTERkeyHERE
TW_REDIRECT=http://yourwebsiteURLhere.com/social/handle/twitter

# https://github.com/settings/applications/new
GITHUB_ID=YOURIDHERE
GITHUB_SECRET=YOURSECRETHERE
GITHUB_URL=https://larablog.io/social/handle/github

# https://developers.google.com/youtube/v3/getting-started
YOUTUBE_KEY=YOURKEYHERE
YOUTUBE_SECRET=YOURSECRETHERE
YOUTUBE_REDIRECT_URI=https://larablog.io/social/handle/youtube

# http://www.twitch.tv/kraken/oauth2/clients/new
TWITCH_KEY=YOURKEYHERE
TWITCH_SECRET=YOURSECRETHERE
TWITCH_REDIRECT_URI=http://laravel-authentication.local/social/handle/twitch

# https://instagram.com/developer/register/
INSTAGRAM_KEY=YOURKEYHERE
INSTAGRAM_SECRET=YOURSECRETHERE
INSTAGRAM_REDIRECT_URI=http://laravel-authentication.local/social/handle/instagram

# https://basecamp.com/
# https://github.com/basecamp/basecamp-classic-api
37SIGNALS_KEY=YOURKEYHERE
37SIGNALS_SECRET=YOURSECRETHERE
37SIGNALS_REDIRECT_URI=http://laravel-authentication.local/social/handle/37signals

```

#### Laravel Developement Packages Used References

- http://laravel.com/docs/5.7/authentication
- http://laravel.com/docs/5.7/authorization
- http://laravel.com/docs/5.7/routing
- https://laravel.com/docs/5.7/migrations
- https://laravel.com/docs/5.7/queries
- https://laravel.com/docs/5.7/views
- https://laravel.com/docs/5.7/eloquent
- https://laravel.com/docs/5.7/eloquent-relationships
- https://laravel.com/docs/5.7/requests
- https://laravel.com/docs/5.7/errors

### Laravel Auth License

LaravelPHPcrudAuth-RegisterLogin is licensed under the [MIT license](https://opensource.org/licenses/MIT). Enjoy!
