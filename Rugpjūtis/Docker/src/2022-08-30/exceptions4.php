<?php

try {
    echo $str;
} catch (Exception $e){
    echo sprintf('Exception: %s, code: %d', $e->getMessage(), $e->getCode());
}