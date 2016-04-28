# Remember the order id in the checkout process of a webshop

[![Build Status](https://secure.travis-ci.org/spatie/checkout.png)](http://travis-ci.org/spatie/checkout)
[![Latest Stable Version](https://poser.pugx.org/spatie/checkout/version.png)](https://packagist.org/packages/spatie/checkout)
[![License](https://poser.pugx.org/spatie/checkout/license.png)](https://packagist.org/packages/spatie/checkout)

When building a checkout process for a webshop, you likely discovery a need to store the id of a newly created order in a session.
This Laravel package provides a clean way to work the order id in the session.


## Installation

This package can be installed through Composer.

```
composer require spatie/checkout
```

There is a service provider you can make use of.

```php

// app/config/app.php

'providers' => [
    '...',
    'Spatie\Checkout\CheckoutServiceProvider'
];
```

This package also comes with a facade, which provides an easy way to call the the class.


```php

// app/config/app.php

'aliases' => array(
	...
	'Checkout' => 'Spatie\Checkout\CheckoutFacade',
)
```

## Usage

You can store the order id using this method:

```php
    Checkout::setCurrentOrderId($yourOrderId);
```

Your order id will be stored in Laravel's session store.

You can retrieve the value with:

```php
    Checkout::getCurrentOrderId($yourOrderId);
```

These methods are also provided:

* `Checkout::clearCurrentOrderId()`: Forget the previously stored value.
* `Checkout::isCurrentOrderId($orderId)`: Convenience method to determine if the given orderId is equal to the value stored with the previous call to `setCurrentOrderId`

