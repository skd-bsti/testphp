<?php 
//$p =['php', 'java ', 'python'];

//array_push($p, 'C++', 'C');

//echo '<pre>';
//print_r($p);
//echo '<pre>';


// $names= 'shashi';
// //echo (strlen($names));
// for ($i=0; $i <strlen($names) ; $i++) { 
//     echo $names[$i] .'<br/>';
// }


// $text = ['a', 'b', 'c', 'd'];
// for ($i=0; $i < count($text); $i++) { 
//     echo $text[$i] .'<br/>';
// }


// $letters = ['a', 'b', 'c', 'd'];
// foreach ($letters as $letter) {
//     echo $letter . '<br>';
// }



// $user =[
//     'name'=>'shashi',
//     'age' =>30,
//     'email'=>'shashidas95@gmail.com',
//     'education'=>'BSc',
//     'skills' => ['php', 'C++', 'Phython', 'java', 'C']
// ];

// foreach ($user as $key => $value) {
//     if(is_array($value)){
//         $value = implode(',', $value);
//     }
//     echo $key . ':'. $value . '<br>';
// }

// $paymentStatus ='paid';
// switch ($paymentStatus) {
//     case 'decline':
//         echo 'decline' ;
//         break;
//         case 'clear':
//             echo 'clear' ;
//             break;
//             case 'unpaid':
//                 echo 'unpaid' ;
//                 break;
//                 case 'paid':
//                     echo 'paid' ;
//                     break;
                                  
//     default:
//         echo 'default value';
//         break;
// }
// declare(strict_types=1);
// require './Transaction.php';

//  $transaction1 = (new Transaction(100, 'transaction 1'))
//  ->addTax(15)->applyDiscount(5);

//  $transaction2 =(new Transaction(200, 'transaction2'))
//  ->addTax(10)
//  ->applyDiscount(5);

//  var_dump($transaction1->getAmount(), $transaction2->getAmount());


//  function sum()
//  {
//    static $visit =0;
//     $visit++;
//     echo $visit;
//  }

// sum();
//  sum(); 
//   sum(); 
//    sum();


echo str_repeat('*', 50);
$name = "john doe";
$parts = explode(" ", $name);
echo $parts[0];
echo "<br>";
echo $parts[1];
?>
