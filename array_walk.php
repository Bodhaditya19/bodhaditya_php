
<?php
/*
*   One Dimensional Array
*/
$alphabets = array(
    'a'  =>  'apple',
    'b'  =>  'ball',
    'c' =>  'cat',
);

array_walk($alphabets, 'myFunc', 'for');

function myFunc($value, $key, $param)
{
    echo "$key $param $value <br>";
}
?>

<?php
/*
*   Two Dimensional Array   
**/
$alphabets = array(
    'a'  =>  'apple',
    'b'  =>  'ball',
    'c' =>  'cat',
    array(
        'd' =>  'dog',
        'e' =>  'elephant',
    )
);

array_walk_recursive($alphabets, 'myFunc2', 'for' );

function myFunc2($value, $key, $param){
    echo "$key $param $value <br><br>";
};
?>