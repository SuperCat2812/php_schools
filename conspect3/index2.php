<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="row">
        <?php
        // $arr=[
        //     'database_type'=>'mysql',
        //     'datobase_name'=>'todo',
        //     'server'=>'localhost',
        //     'username'=>'root',
        //     'password'=>'root',
        //     'charset'=>'utf8']
        
        // $arr=[
        //     'who'=>'Finn',
        //     'wat'=>'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veniam perferendis ex obcaecati totam a itaque nihil fuga enim ipsum ea.',
        // ];
        


        $adventure = [
            [
                'who' => 'Finn',
                'wat' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veniam perferendis ex obcaecati totam a itaque nihil fuga enim ipsum ea.',
                'inventory'=>'inventory,inventory,inventory,inventory,inventory,inventory',
                ]
        ];

//         echo '<pre>';
//         print_r($adventure);
//         echo '</pre>';
        
//         echo '<pre>';
//         print_r(array_filter(explode('/',$_SERVER['SCRIPT_FILENAME'])));
//         echo '</pre>';

// $file=explode('/',$_SERVER['SCRIPT_FILENAME'])[3];
// echo '<pre>';
// print_r(explode('.',$file));
// echo '</pre>';
//         // echo '<pre>';
//         // print_r($arr);
//         // echo '</pre>';

//         foreach($adventure as $dude){
//             echo "<h3>${dude['who']}</h3>";
//             if(isset($dude['inventory']) && is_array($dude['inventory']) ){
//                 echo implode(', ', $dude['inventory']);
//             }
//         }
// $names="
// Finn
// Jake
// Ice King
// PB
// Marcy
// ";
// $names= explode( PHP_EOL, $names);

// // echo '<pre>';
// // print_r(trim($names[1]));
// // echo '</pre>';
// echo '<pre>';
// print_r(array_map('trim', $names));
// echo '</pre>';


        ?>
        <?php foreach($adventure as $dude) :?>
<h3><?=$dude['who']?></h3>
<p><?=$dude['wat']?></p>
<?php endforeach;?>  
    </div>
</body>

</html>