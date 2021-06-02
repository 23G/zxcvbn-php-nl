<p align="center">
    <img src=".github/23g.svg" alt="23G">
</p>

# zxcvbn-php-nl

- Plugin for [Zxcvbn-PHP](https://github.com/bjeavons/zxcvbn-php), containing Dutch dictionaries
- Dictionaries were pulled from [pepve/zxcvbn-nl](https://github.com/pepve/zxcvbn-nl)

## Usage

```php
use ZxcvbnPhp\Matchers\NL\DutchDictionaryMatch;
use ZxcvbnPhp\Matchers\NL\DutchReverseDictionaryMatch;
use ZxcvbnPhp\Zxcvbn;

$zxcvbn = new Zxcvbn();
$zxcvbn->addMatcher(DutchDictionaryMatch::class);
$zxcvbn->addMatcher(DutchReverseDictionaryMatch::class);

...

$result = $zxcvbn->passwordStrength('password');
```
