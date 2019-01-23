<?php

function getCurrentStatus($what) {
  // tu w przyszłości będzie pobieranie danych z bazy, a na dzisiaj...
  return rand(10,40); // tak na przykład
}
$what = $_REQUEST['what'];
$result = getCurrentStatus($what);
echo $result;
?>