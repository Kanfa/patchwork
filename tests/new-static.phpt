--TEST--
https://github.com/antecedent/patchwork/issues/69

--FILE--
<?php

assert_options(ASSERT_ACTIVE, 1);
assert_options(ASSERT_WARNING, 1);
error_reporting(E_ALL | E_STRICT);

require __DIR__ . "/../Patchwork.php";
require __DIR__ . "/includes/NewStatic.php";

?>
===DONE===

--EXPECT--
===DONE===
