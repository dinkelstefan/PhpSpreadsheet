<?php

return [
    [
        false,
    ],
    [
        null,
        false,
    ],
    [
        -1,
        true,
    ],
    [
        0,
        true,
    ],
    [
        9,
        true,
    ],
    [
        1.5,
        true,
    ],
    [
        '',
        false,
    ],
    [
        '-1',
        false,
    ],
    [
        '2',
        false,
    ],
    [
        '-1.5',
        false,
    ],
    [
        'ABC',
        false,
    ],
    [
        '#VALUE!',
        false,
    ],
    [
        '#N/A',
        false,
    ],
    [
        'TRUE',
        false,
    ],
    [
        true,
        false,
    ],
    [
        false,
        false,
    ],
];