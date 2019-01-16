## Starting point ##
This repository is to simulate the problem described in: https://github.com/humbug/php-scoper/issues/298

## Starting point ##

Have a look at this file:
https://github.com/Smitsel/guzzle-scoper-reproduction/blob/master/examples/initialize.php

When running this it will show you the problem. And when looking at the 2 `composer/autoload_static.php` files. 

Scoped: https://github.com/Smitsel/guzzle-scoper-reproduction/blob/master/vendor/composer/autoload_static.php
Unscoped: https://github.com/Smitsel/guzzle-scoper-reproduction/blob/master/guzzle/vendor/composer/autoload_static.php

The hash is the same.
