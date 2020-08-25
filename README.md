# zxcvbn-php-nl

- Plugin for [Zxcvbn-PHP](https://github.com/bjeavons/zxcvbn-php), containing Dutch dictionaries
- Dictionaries were pulled from [pepve/zxcvbn-nl](https://github.com/pepve/zxcvbn-nl)

Usage:
```php
$zxcvbn = new ZxcvbnPhp\Zxcvbn();
$zxcvbn->addMatcher(ZxcvbnPhp\Matchers\NL\DutchDictionaryMatch::class);
$zxcvbn->addMatcher(ZxcvbnPhp\Matchers\NL\DutchReverseDictionaryMatch::class);

...
$zxcvbn->passwordStrength('password');
```
