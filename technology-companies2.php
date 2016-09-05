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

//Add code to output the $companies array in its current form.

print_r($companies);

//Sort the $companies array by company name and output the results.

echo "ksort by company name".PHP_EOL;
ksort($companies).PHP_EOL;
print_r($companies);

//Sort the people in each company alphabetically. You will need to use a foreach loop and will need to reassign each inner array after sorting. Output the result.


    foreach($companies as $company => $people){
            asort($people);
        //this is the correct eay to reassign a sorted array
            $companies[$company] = $people;

        
    }
    echo "the following is outside of loop".PHP_EOL;
    print_r($companies);


arsort ($companies);
echo "The following is sorting the companies from biggest to smallest".PHP_EOL;
print_r($companies);