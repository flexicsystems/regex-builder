# 🤘 Regex Builder

This package provides a builder for regular expressions.

It is designed to make using regular expressions easier and more readable for developers.

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
$patternString = (string) $pattern; // returns: '(?=(\<picture\>))(\w|\W)(?<=\<\/picture\>)'
```

or used into [`flexix/regex`](https://github.com/flexicsystems/regex) to library.

At [Expressions.md](Expressions.md) you can find a list of all available expressions.

### Expression Lexing

Regex-Builder provides a lexer to convert a string representation of a regular expression into an object representation.

🚧 Lexer is currently under development and will be finished later.

----
### License
This package is licensed using the GNU License.

Please have a look at [LICENSE.md](LICENSE.md).

----

[![Donate](https://img.shields.io/badge/Donate-PayPal-blue.svg)](https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=Q98R2QXXMTUF6&source=url)