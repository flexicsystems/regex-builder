# 🤘 Regex Builder

This package provides a builder for regular expressions.

## Installation

Run
```sh
composer require flexic/regex-builder
```

# Usage

Regex-Builder allows you to build regular expressions in a fluent object-oriented way. 
 
The following example shows how to build a regular expression.

```php
$pattern = new \Flexic\RegexBuilder\Pattern();

$pattern->add(
    new \Flexic\RegexBuilder\Expr\Group([
        new \Flexic\RegexBuilder\Expr\LookAround\Ahead(
            new \Flexic\RegexBuilder\Expr\Enclosed(
                new \Flexic\RegexBuilder\Expr\Literal('<picture>'),
            ),
        ),
        new \Flexic\RegexBuilder\Expr\Enclosed(
            new \Flexic\RegexBuilder\Expr\Option([
                new \Flexic\RegexBuilder\Expr\Marker\AnyWord(),
                new \Flexic\RegexBuilder\Expr\Marker\AnyNonWord(),
            ]),
        ),
        new \Flexic\RegexBuilder\Expr\LookAround\Follow(
            new \Flexic\RegexBuilder\Expr\Literal('</picture>'),
        ),
    ]),
);
```

Patterns build with Regex-Builder can be converted to a string representation of a regular expression.

```php
$pattern->toString(); // returns: '(?=(<picture>))([\\w\\W])(?=(</picture>))'
```

or used into [`flexix/regex`](https://github.com/flexicsystems/regex) to library.

----
### License
This package is licensed using the GNU License.

Please have a look at [LICENSE.md](LICENSE.md).

----

[![Donate](https://img.shields.io/badge/Donate-PayPal-blue.svg)](https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=Q98R2QXXMTUF6&source=url)