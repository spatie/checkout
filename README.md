# Remember the order id in the checkout process of a webshop

[![Build Status](https://secure.travis-ci.org/spatie/checkout.png)](http://travis-ci.org/spatie/checkout)
[![Latest Stable Version](https://poser.pugx.org/spatie/checkout/version.png)](https://packagist.org/packages/spatie/checkout)
[![StyleCI](https://styleci.io/repos/23244021/shield?branch=master)](https://styleci.io/repos/23244021)
[![License](https://poser.pugx.org/spatie/checkout/license.png)](https://packagist.org/packages/spatie/checkout)

When building a checkout process for a webshop, you likely discovery a need to store the id of a newly created order in a session.
This Laravel package provides a clean way to work the order id in the session.

## Support us

Learn how to create a package like this one, by watching our premium video course:

[![Laravel Package training](https://spatie.be/github/package-training.jpg)](https://laravelpackage.training)

We invest a lot of resources into creating [best in class open source packages](https://spatie.be/open-source). You can support us by [buying one of our paid products](https://spatie.be/open-source/support-us).

We highly appreciate you sending us a postcard from your hometown, mentioning which of our package(s) you are using. You'll find our address on [our contact page](https://spatie.be/about-us). We publish all received postcards on [our virtual postcard wall](https://spatie.be/open-source/postcards).

## Postcardware

You're free to use this package (it's [MIT-licensed](LICENSE.md)), but if it makes it to your production environment you are required to send us a postcard from your hometown, mentioning which of our package(s) you are using.

Our address is: Spatie, Kruikstraat 22, 2018 Antwerp, Belgium.

The best postcards will get published on the open source page on our website.

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

This package also comes with a facade, which provides an easy way to use this class.


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
    Checkout::getCurrentOrderId();
```

These methods are also provided:

* `Checkout::clearCurrentOrderId()`: Forget the previously stored value.
* `Checkout::isCurrentOrderId($orderId)`: Convenient method to determine if the given orderId is equal to the value stored with the previous call to `setCurrentOrderId`.
