<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // sort(array); asort(array); natsort(array); sort
// array_unique(array);
// array_slice(array, offset);
// array_merge(array1, array2); array
// list();
// compact();
// extract();
// in_array( needle, haystack );
// $arr=array_filter($arr);
// sort($arr);



// trim(str);
// strtolower(string);
// strtoupper(string);
// str_replace(search,replace,subject);
// strlen(string);
// substr(string,start);
// strstr(haystack,needle);
// strpos(haystack,needle);
// strip_tags(string);


$rows=5;
for($i=0;$i<=$rows;$i++){
    $tmp='';
    for($j=0;$j<=$i;$j++){
$tmp.=' * ';
    }
    
    echo $tmp."<br>";
}

?>
</body>
</html>