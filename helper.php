<?php
  function printValueGivenKey($arr, $key, $default)
  {
    $val = $default;
    if(isset($arr[$key]))
      $val = $arr[$key];
    return $val;
  }

  function printValueGivenKey2D($arr, $key1, $key2, $default)
  {
    $val = $default;
    if(isset($arr[$key1]) && isset($arr[$key1][$key2]))
      $val = $arr[$key1][$key2];
    return $val;
  }

  function addOrUpdateUrlParam($name, $value)
  {
    $params = $_GET;
    unset($params[$name]);
    $params[$name] = $value;
    return basename($_SERVER['PHP_SELF']) . '?' . http_build_query($params);
  }
?>


