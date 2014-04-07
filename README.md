spanish-utils [![Build Status](https://travis-ci.org/alrik11es/spanish-utils.png?branch=master)](https://travis-ci.org/alrik11es/spanish-utils) [![Latest Unstable Version](https://poser.pugx.org/alrik11es/spanish-utils/v/unstable.png)](https://packagist.org/packages/alrik11es/spanish-utils) [![License](https://poser.pugx.org/alrik11es/spanish-utils/license.png)](https://packagist.org/packages/alrik11es/spanish-utils) [![Latest Stable Version](https://poser.pugx.org/alrik11es/spanish-utils/v/stable.png)](https://packagist.org/packages/alrik11es/spanish-utils)
=============

A set of tools for Spanish bureaucracy like CIF calculation, IBAN...

Installation with composer
--------------------------

Take a look to this link https://packagist.org/packages/alrik11es/spanish-utils

Usage
-----

As simple as this:
```php
$dni = \SpanishUtils\Components\NIF::setUp('04381012H');
$result = $dni->checkData();
```

Other example:
```php
$cif = \SpanishUtils\Components\CIF::setUp('N99461501');
$result = $cif->checkData();
```

IBAN validator:
```php
$iban = \SpanishUtils\Components\IBAN::setUp('CZ49 2339 0395 7989 0507 1131');
$result = $iban->checkData();
```

References
----------

This package uses another libraries that you can also use in your package:

* https://github.com/ronanguilloux/IsoCodes/tree/1.0.0
