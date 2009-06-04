<?php
function assertEquals($value, $value2) {
  if ($value == $value2) {
    echo "PASS\n";
  } else {
    echo "FAIL\n";
  }
}


function assertTrue($value) {
  if ($value) {
    echo "PASS\n";
  } else {
    echo "FAIL\n";
  }
}


function assertFalse($value) {
  if (!$value) {
    echo "PASS\n";
  } else {
    echo "FAIL\n";
  }
}
