Globelabs, PHP Wrapper Globelabs
=======================

- Simple PHP Wrapper for Globelabs SMS and Charging API

## Usage

```php
  <?php
    require_once __DIR__ . '/../vendor/autoload.php';

    use Globelabs\SMS;

    $options = [
      'sender_address' => '{your_sender_address}',
      'access_token' => '{your_access_token}',
      'message' => 'hello',
      'address' => '0906xxxxxxx',
    ];

    echo SMS::send_to($options);

  ?>
```

## Help and docs


## Installing Globelabs

The recommended way to install Globelabs is through
[Composer](http://getcomposer.org).

```bash
# Install Composer
curl -sS https://getcomposer.org/installer | php
```

Next, run the Composer command to install the latest stable version of Globelabs:

```bash
composer.phar require rsupan/globelabs
```

After installing, you need to require Composer's autoloader:

```php
require 'vendor/autoload.php';
```

You can then later update Globelabs using composer:

 ```bash
composer.phar update
 ```


## Version Guidance
