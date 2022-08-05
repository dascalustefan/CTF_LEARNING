<?php

if (isset($_COOKIE['token']) && $_COOKIE['token'] === getenv('TOKEN')) {
    echo getenv('FLAG');
} else {
    echo 'No flag for you';
}
