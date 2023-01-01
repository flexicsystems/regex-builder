### Expressions

| Expression                                                  | Expected input          | Special                                             |
|-------------------------------------------------------------|-------------------------|-----------------------------------------------------|
| `Flexic\RegexBuilder\Expr\Alnum`                            | string, int, float      | -                                                   |
| `Flexic\RegexBuilder\Expr\Alpha`                            | string                  | -                                                   |
| `Flexic\RegexBuilder\Expr\Any`                              | -                       | -                                                   |
| `Flexic\RegexBuilder\Expr\Digit`                            | int, float              | -                                                   |
| `Flexic\RegexBuilder\Expr\Enclosed`                         | ExpressionObject        | -                                                   |
| `Flexic\RegexBuilder\Expr\EndOfString`                      | -                       | -                                                   |
| `Flexic\RegexBuilder\Expr\Expression`                       | string                  | -                                                   |
| `Flexic\RegexBuilder\Expr\Group`                            | array<ExpressionObject> | -                                                   |
| `Flexic\RegexBuilder\Expr\InSelection`                      | ExpressionObject        | -                                                   |
| `Flexic\RegexBuilder\Expr\Literal`                          | string                  | -                                                   |
| `Flexic\RegexBuilder\Expr\NotInSelection`                   | ExpressionObject        | -                                                   |
| `Flexic\RegexBuilder\Expr\OneOrMoreOf`                      | ExpressionObject        | -                                                   |
| `Flexic\RegexBuilder\Expr\Option`                           | array<ExpressionObject> | -                                                   |
| `Flexic\RegexBuilder\Expr\Range`                            | ExpressionObject        | Requires two parameters of type.                    |
| `Flexic\RegexBuilder\Expr\StartOfString`                    | -                       | -                                                   |
| `Flexic\RegexBuilder\Expr\ZeroOrMoreOf`                     | ExpressionObject        | -                                                   |
| `Flexic\RegexBuilder\Expr\ZeroOrOneOf`                      | ExpressionObject        | -                                                   |
| `Flexic\RegexBuilder\Expr\Marker\AnyDigit`                  | -                       | -                                                   |
| `Flexic\RegexBuilder\Expr\Marker\AnyNonDigit`               | -                       | -                                                   |
| `Flexic\RegexBuilder\Expr\Marker\AnyNonWhitespace`          | -                       | -                                                   |
| `Flexic\RegexBuilder\Expr\Marker\AnyNonWord`                | -                       | -                                                   |
| `Flexic\RegexBuilder\Expr\Marker\AnyUnicodeSequence`        | -                       | -                                                   |
| `Flexic\RegexBuilder\Expr\Marker\AnyWhitespace`             | -                       | -                                                   |
| `Flexic\RegexBuilder\Expr\Marker\AnyWord`                   | -                       | -                                                   |
| `Flexic\RegexBuilder\Expr\Marker\CarriageReturn`            | -                       | -                                                   |
| `Flexic\RegexBuilder\Expr\Marker\NewLine`                   | -                       | -                                                   |
| `Flexic\RegexBuilder\Expr\Marker\NullChar`                  | -                       | -                                                   |
| `Flexic\RegexBuilder\Expr\Marker\OneDataUnit`               | -                       | -                                                   |
| `Flexic\RegexBuilder\Expr\Marker\Tab`                       | -                       | -                                                   |
| `Flexic\RegexBuilder\Expr\LookAround\Ahead`                 | ExpressionObject        | -                                                   |
| `Flexic\RegexBuilder\Expr\LookAround\Follow`                | ExpressionObject        | -                                                   |
| `Flexic\RegexBuilder\Expr\LookAround\NotAhead`              | ExpressionObject        | -                                                   |
| `Flexic\RegexBuilder\Expr\LookAround\NotFollow`             | ExpressionObject        | -                                                   |
| `Flexic\RegexBuilder\Expr\Count\Between`                    | ExpressionObject        | 2nd & 3rd Parameter must be of type string or null. |
| `Flexic\RegexBuilder\Expr\Count\ExactOf`                    | ExpressionObject        | 2nd Parameter must be of type string.               |
| `Flexic\RegexBuilder\Expr\Count\OrMoreOf`                   | ExpressionObject        | 2nd Parameter must be of type string.               |
| `Flexic\RegexBuilder\Expr\CharacterClass\Alnum`             | -                       | -                                                   |
| `Flexic\RegexBuilder\Expr\CharacterClass\Alpha`             | -                       | -                                                   |
| `Flexic\RegexBuilder\Expr\CharacterClass\Ascii`             | -                       | -                                                   |
| `Flexic\RegexBuilder\Expr\CharacterClass\Blank`             | -                       | -                                                   |
| `Flexic\RegexBuilder\Expr\CharacterClass\Control`           | -                       | -                                                   |
| `Flexic\RegexBuilder\Expr\CharacterClass\Digits`            | -                       | -                                                   |
| `Flexic\RegexBuilder\Expr\CharacterClass\EndOfWord`         | -                       | -                                                   |
| `Flexic\RegexBuilder\Expr\CharacterClass\Graph`             | -                       | -                                                   |
| `Flexic\RegexBuilder\Expr\CharacterClass\HexDigits`         | -                       | -                                                   |
| `Flexic\RegexBuilder\Expr\CharacterClass\Lowercase`         | -                       | -                                                   |
| `Flexic\RegexBuilder\Expr\CharacterClass\StartOfWord`       | -                       | -                                                   |
| `Flexic\RegexBuilder\Expr\CharacterClass\Uppercase`         | -                       | -                                                   |
| `Flexic\RegexBuilder\Expr\CharacterClass\VisibleCharacters` | -                       | -                                                   |
| `Flexic\RegexBuilder\Expr\CharacterClass\VisiblePunctation` | -                       | -                                                   |
| `Flexic\RegexBuilder\Expr\CharacterClass\Whitespace`        | -                       | -                                                   |
| `Flexic\RegexBuilder\Expr\CharacterClass\Word`              | -                       | -                                                   |


* Expression-Object: Expressions which requires an Expression-Object as input expects an object of subclass from `Flexic\RegexBuilder\Expr\`.