<?php

function func1() {

    throw new Exception('func1 Exception', 1);

}

function func2() {

    throw new RuntimeException('func2 Exception', 2);

}

function getWorkerSalaryRange($work, $price) {
    if ($price > 1000) {
        throw new RangeException;
    }
}

try {
    // func1();
    // func2();
    getWorkerSalaryRange('make shop', 10000);   
} catch (RangeException $e) {
    echo 'RangeException: Too overpriced';
} catch (RuntimeException $e) {
    echo sprintf('RuntimeException: %s, code: %d', $e->getMessage(), $e->getCode());
} catch (Exception $e) {
    echo sprintf('Exception: %s, code: %d', $e->getMessage(), $e->getCode());
}