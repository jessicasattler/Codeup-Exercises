<?php

$companies = [
    'Sun Microsystems' => [
        'Vinod Khosla',
        'Bill Joy',
        'Andy Bechtolsheim',
        'Scott McNealy'
    ],
    'Silicon Graphics' => [
        'Jim Clark',
        'Ed McCracken'
    ],
    'Cray' => [
        'William Norris',
        'Seymour Cray'
    ],
    'NeXT' => [
        'Steve Jobs',
        'Avie Tevanian',
        'Joanna Hoffman',
        'Bud Tribble',
        'Susan Kare'
    ],
    'Acorn Computers' => [
        'Steve Furber',
        'Sophie Wilson',
        'Hermann Hauser',
        'Jim Mitchell'
    ],
    'MIPS Technologies' => [
        'Skip Stritter',
        'John L. Hennessy'
    ],
    'Commodore' => [
        'Yash Terakura',
        'Bob Russell',
        'Bob Yannes',
        'David A. Ziembicki',
        'Jay Miner'
    ],
    'Be Inc' => [
        'Steve Sakoman',
        'Jean-Louis Gassée'
    ]
];

//I'm making a copy of companies to remember the original when we modify it later
$copyCompanies = $companies;
print_r($companies);

// sort the $companies array by company name and output the results
echo "ksort by \$company name".PHP_EOL;
ksort($companies);
print_r($companies);


//Order the people in each company alphabetically. You will need to use a foreach loop and will need to reassign each inner array after sorting. Output the result.

foreach ($companies as $key => $value){
    asort($value);
    //this is the correct way to reassign a sorted array 
    $companies[$key] = $value;


    echo "the following will be assorted alphabetically".PHP_EOL;
    print_r($value);
}
echo "End".PHP_EOL;

//sorts by array with the smallest amounts elements to the most amount of elements
asort($companies);
print_r($companies);




















