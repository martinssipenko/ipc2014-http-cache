<?php

$id = 1;
$last_mod = 1414495719;

$content = $id . $last_mod;
$etag = md5($content);

header('Etag: ' . $etag);

if (
  isset($_SERVER['HTTP_IF_NONE_MATCH'])
  && $_SERVER['HTTP_IF_NONE_MATCH'] === $etag
) {
  header('HTTP/1.1 304 Not Modified');
  exit(0);
}

// Dom something hard here 
sleep(5);
