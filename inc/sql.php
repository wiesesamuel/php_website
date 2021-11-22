<?php

// connect to db
$db = mysqli_connect($host, $user, $pass);
// select db
// on failure show error
mysqli_select_db($db, $database) OR die(mysqli_error($db));

