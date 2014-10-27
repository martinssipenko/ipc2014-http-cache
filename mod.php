<?php

$last_modified = gmdate('r', 1414445105);

header('Cache-Control: public');
header('Last-Modified: ' . $last_modified);

if (
  isset($_SERVER['HTTP_IF_MODIFIED_SINCE'])
  && $last_modified < strtotime($_SERVER['HTTP_IF_MODIFIED_SINCE'])
) {
  header('HTTP/1.1 304 Not Modified');
  exit(0);
}

// Do something very hard
sleep(5);
