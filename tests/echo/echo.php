<?php

echo "Hello World";

echo "This spans
multiple lines. The newlines will be
output as well";

echo "This spans\nmultiple lines. The newlines will be\noutput as well.";

echo "Escaping characters is done \"Like this\".";

// You can use variables inside of an echo statement
$foo = "foobar";
$bar = "barbaz";

echo "foo is $foo"; // foo is foobar

// Using single quotes will print the variable name, not the value
echo 'foo is $foo'; // foo is $foo

// If you are not using any other characters, you can just echo variables
echo $foo;          // foobar
echo $foo,$bar;     // foobarbarbaz

// Strings can either be passed individually as multiple arguments or
// concatenated together and passed as a single argument
echo 'This ', 'string ', 'was ', 'made ', 'with multiple parameters.', chr(10);
echo 'This ', 'string ', 'was ', 'made ', 'with multiple parameters.', chr(10), 'and', 'other', 'long', 'long', 'long', 'long', 'string';

echo 'This ' . 'string ' . 'was ' . 'made ' . 'with concatenation.' . "\n";
echo 'This ' . 'string ' . 'was ' . 'made ' . 'with concatenation.' . 'This ' . 'string ' . 'was ' . 'made ' . 'with concatenation.' . "\n";

echo <<<END
This uses the "here document" syntax to output
multiple lines with $variable interpolation. Note
that the here document terminator must appear on a
line with just a semicolon. no extra whitespace!
END;

echo $some_var ? 'true': 'false';
echo $some_var ? 'VeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryLongString': 'VeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryLongString';

echo 1000000000 + 1000000000 + 1000000000 + 1000000000 + 1000000000 + 1000000000 + 1000000000 + 1000000000 + 1000000000 + 1000000000 + 1000000000;
echo (1000000000 + 1000000000 + 1000000000 + 1000000000 + 1000000000 + 1000000000 + 1000000000 + 1000000000 + 1000000000 + 1000000000 + 1000000000);
echo (1000000000), ('String'), $object->property, $object->method(), method(), ($foo ? true : false);
echo (1000000000 . 'String'), $object->property + $object->method(), method((method('string'))), ($foo ? ($bar . 'foo') + 'test' : false);

echo $veryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryLongVariable->veryVeryVeryVeryVeryVeryLongProperty;

echo(1);
echo (1);
echo (((1)));
echo (((1))), (((1)));

echo "The sum is " . 1 | 2; // output: "2". Parentheses needed.
echo "The sum is ", 1 | 2; // output: "The sum is 3". Fine.

echo "Foo" . f("bar") . "Foo";
echo "\n\n";
echo "Foo", f("bar"), "Foo";

echo "Loop start!\n", sleep(1);
