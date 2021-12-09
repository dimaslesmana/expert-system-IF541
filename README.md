# Laptop Guide

## Sigma-4

- Ade Kiswara (00000040037)
- Dimas Lesmana (00000041281)
- Rassel Billiono (00000037399)

## Installation & updates

`composer create-project codeigniter4/appstarter` then `composer update` whenever
there is a new release of the framework.

When updating, check the release notes to see if there are any changes you might need to apply
to your `app` folder. The affected files can be copied or merged from
`vendor/codeigniter4/framework/app`.

## Setup

- Make sure you have XAMPP installed on your system.
- Clone this repository or Download ZIP this project
- Rename `.env.example` to `.env` and tailor for your app, specifically the baseURL
and any database settings.
- Add PHP to environment variables [(Add XAMPP PHP to Environment Variables in Windows 10)](https://dinocajic.medium.com/add-xampp-php-to-environment-variables-in-windows-10-af20a765b0ce).
- Start XAMPP Apache and MySQL services.
- Import `.sql` file to MySQL database.
- Serve project using this command `php spark serve`.


## .env Configuration
```
CI_ENVIRONMENT = development
app.baseURL = 'http://localhost:8080/'
database.default.hostname = localhost
database.default.database = if541_expert_system_sigma4_web
database.default.username = root
database.default.password =
database.default.DBDriver = MySQLi
```

## Server Requirements

PHP version 7.3 or higher is required, with the following extensions installed:

- [intl](https://php.net/manual/en/intl.requirements.php)
- [libcurl](https://php.net/manual/en/curl.requirements.php) if you plan to use the HTTP\CURLRequest library

Additionally, make sure that the following extensions are enabled in your PHP:

- json (enabled by default - don't turn it off)
- [mbstring](https://php.net/manual/en/mbstring.installation.php)
- [mysqlnd](https://php.net/manual/en/mysqlnd.install.php)
- xml (enabled by default - don't turn it off)