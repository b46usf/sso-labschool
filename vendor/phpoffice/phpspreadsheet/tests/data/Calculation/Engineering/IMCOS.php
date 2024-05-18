<?php

use PhpOffice\PhpSpreadsheet\Calculation\Information\ExcelError;

return [
    [
        '141.319179436356+32.547610312508j',
        '12.34+5.67j',
    ],
    [
        ExcelError::NAN(),
        'Invalid Complex Number',
    ],
    [
        '-5.74262349163406+2.12231025604134i',
        '3.5+2.5i',
    ],
    [
        '-1.44502817950166+0.412240867891067i',
        '3.5+i',
    ],
    [
        '-0.936456687290796',
        '3.5',
    ],
    [
        '-1.44502817950166-0.412240867891067i',
        '3.5-i',
    ],
    [
        '-5.74262349163406-2.12231025604134i',
        '3.5-2.5i',
    ],
    [
        '3.31329014611322-5.0910715229497i',
        '1+2.5i',
    ],
    [
        '0.833730025131149-0.988897705762865i',
        '1+i',
    ],
    [
        '0.54030230586814',
        '1',
    ],
    [
        '0.833730025131149+0.988897705762865i',
        '1-i',
    ],
    [
        '3.31329014611322+5.0910715229497i',
        '1-2.5i',
    ],
    [
        '6.13228947966369',
        '2.5i',
    ],
    [
        '1.54308063481524',
        'i',
    ],
    [
        '1',
        '0',
    ],
    [
        '1.54308063481524',
        '-i',
    ],
    [
        '6.13228947966369',
        '-2.5i',
    ],
    [
        '3.31329014611322+5.0910715229497i',
        '-1+2.5i',
    ],
    [
        '0.833730025131149+0.988897705762865i',
        '-1+i',
    ],
    [
        '0.54030230586814',
        '-1',
    ],
    [
        '0.833730025131149-0.988897705762865i',
        '-1-i',
    ],
    [
        '3.31329014611322-5.0910715229497i',
        '-1-2.5i',
    ],
    [
        '-5.74262349163406-2.12231025604134i',
        '-3.5+2.5i',
    ],
    [
        '-1.44502817950166-0.412240867891067i',
        '-3.5+i',
    ],
    [
        '-0.936456687290796',
        '-3.5',
    ],
    [
        '-1.44502817950166+0.412240867891067i',
        '-3.5-i',
    ],
    [
        '-5.74262349163406+2.12231025604134i',
        '-3.5-2.5i',
    ],
    [
        '-0.989992496600445',
        '3',
    ],
];
