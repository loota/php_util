<?php
require_once 'assert.php';
require_once 'Util.php';

$x = array(null => null);
function testArrayIsEmpty() {
  assertTrue(Util::isEmptyArray(array()));
  assertFalse(Util::isEmptyArray(array(1)));
  assertTrue(Util::isEmptyArray(array(1 => null)));
  assertTrue(Util::isEmptyArray(array(null => null)));
}
function testArrayIsEmptyAndKeyless() {
  assertTrue(Util::isEmptyArrayAndKeyless(array()));
  assertFalse(Util::isEmptyArrayAndKeyless(array(1)));
  assertTrue(Util::isEmptyArrayAndKeyless(array(null => null)));
  assertFalse(Util::isEmptyArrayAndKeyless(array(1 => '')));
}

testArrayIsEmpty();
testArrayIsEmptyAndKeyless();
