<?php




// - Bir array yaradın və içərisinə 5 fərqli ad əlavə edin .
$array=["Tahira","Leman","Ayten","Reqsane","Nahid"];


//   - Array-dən 2-ci adı "Samir" olaraq yeniləyin.
$array[1]="Samir";
print_r($array);
echo "<br>";



//   - Array-dən 4-cü elementi silin.
unset($array[3]);
print_r($array);

//   - Array-də neçə element olduğunu tapın və ekrana sayını yazdırın
echo "<br> Array-de ".count($array)  ." element var";


echo "<br>";


//   - foreach dövrünü istifadə edərək array-dən bütün elementləri ekrana yazdırın.
foreach ($array as $key => $value) {
    echo $value . "<br>";
}



//   - Array-də "Nurlan" adının olub olmadığını yoxlayın
if(in_array("Nurlan",$array)){
    echo "Nurlan var";
}
else{
    echo "Nurlan yoxdur";
}


echo "<br>";
// - İçərisində rəqəmlər olan bir array yaradın və bütün elementlərin toplamını hesablayın
$arr=[1,2,3,4,5,6,7,8,9,10];

$sum=0;
foreach ($arr as $key => $value) {
    $sum+=$value;
}
echo "Cem:  ".$sum;
echo "<br>";
// - İki fərqli array-i birləşdirərək yeni bir array yaradın
$new_arr=array_merge($array,$arr);

print_r($new_arr);