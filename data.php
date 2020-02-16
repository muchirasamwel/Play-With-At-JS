<?php
header('Content-Type:application/json');

$users=
    [
        'sam',
        'samkan1',
        'samkan2',
        'samkan3',
        'samkan4',
        'palma',
        'kamene1',
        'kamene2',
        'kamene3',
        'kamau'
    ];

$_GET['q'];

$results=array_values(array_filter($users,function ($name){
    return stripos($name,$_GET['q'])===0;
}));

echo json_encode($results);