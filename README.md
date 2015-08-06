Globelabs, PHP Wrapper Globelabs
=======================

- Simple PHP Wrapper for Globelabs SMS and Charging API

## Usage

## SMS API

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

    var_dump(SMS::send_to($options));
  ?>
```

## Charging API

```php
  <?php
    require_once __DIR__ . '/../vendor/autoload.php';

    use Globelabs\Charging;

    $options = [
      'amount' => '0.00',
      'description' => 'Allowance',
      'msisdn' => '906xxxxxxxx',
      'transactionOperationStatus' => 'Charged',
      'reference_code' => '{reference_code_see_documentation}',
      'access_token' => '{access_token}',
    ];

    var_dump(Charging::charge_to($options));

  ?>
```

## Help and docs
  [Globelabs API Documentation](http://www.globelabs.com.ph/docs).

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
