### Shorthand Character Classes
These meta characters boast a pre-defined meaning and make various typical patterns easier to use.

`/d/` matches any digit, short for `[0-9]`

`/D/` matches non-digits, short for `[^0-9]`

`/S/` matches non-white space character

`/s/` matches any white space character

`/w/` matches character, short for `[a-zA-Z_0-9]`

`/W/` matches non-word character `[^w]`

`/b/` Matches a word boundary where a word character is `[a-zA-Z0-9_]`

<br>

### Matching Using Quantifiers
A quantifies helps developers to define how often an element occurs.

`/X./` matches any character

`/X*/` Matches zero or several repetitions of letter X, is short for `{0,}`

`/X+-/` Matches one or more repetitions of letter X, is short for `{1,}`

`/X?/` Finds now or exactly one letter X, is short for is short for `{0,1}`

`// d{3}` matches three digits. `{}` describes the order of the preceding liberal

`// d{1,4}` means d must occur at least once and at a maximum of four

<br>

### Character Ranges
`/[a-z]/` matches all lowercase letters

`/[A-Z]/` matches all uppercase letters

`/[e-l]/` matches lowercase letters e to l (inclusive)

`/[F-P]/` matches all uppercase letters F to P (inclusive)

`/[0-9]/` matches all digits

`/[5-9]/` matches any digit from 5 to 9 (inclusive)

`/ [a-d1-7]/` matches a letter between a and d and figures from 1 to 7, but not d1

`/[a-zA-Z]/` matches all lowercase and uppercase letters

`/[^a-zA-Z]/` matches non-letters

<br>

### Matching Using Anchors
`/ ^The/` matches any string that starts with `The`

`/ End$/` matches a string that ends with `End`

`/ ^The End$/` exact string match starting with `“The”` and ending with `End`

<br>

### Escape Characters
It is critical to note that escape characters are case-sensitive

`/ a/` match a bell or alarm

`/ e/` matches an escape

`/ f/` matches a form feed

`/ n/` matches a new line

`/ Q…E/` ignores any special meanings in what is being matched

`/ r/` matches a carriage return

`/ v/` matches a vertical tab

<br>

### Matching Using Flags
`/ i`/ ignores the case in pattern ( upper and lower case allowed)

`/ m/` multi-line match

`/ s/` match new lines

`/ x/` allow spaces and comments

`/ j/` duplicate group names allowed

`/ U/` unready match
