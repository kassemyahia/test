<?php
///**
// * @param array $arr
// * @return int|float
// */
//function arrSum(array $arr): string
//{
//
//    $ans = "";
//    foreach ($arr as  $value) {
//        foreach ($value as $key => $value2) {
//            $ans .= "$key : $value2 <br>";
//        }
//        $ans.="<br>**************<br><br>";
//    }
//
//    return $ans;
//}
//
//$arr = [['name' => 'Kassem', 'Address' => 'Aleppo', 'phone' => '0947471234'],
//['name' => 'John' , 'Address' => 'Aleppo', 'phone' => '???']
//];
//echo arrSum($arr);

$block = [ 'dog', 'blabla','test'];

function dotRep(array $arr , $str ): string
{
$temp = explode(' ', $str);
for($i =0 ; $i < count($temp); $i++){
    for($j =0 ; $j < count($arr); $j++){
        if($temp[$i] == $arr[$j])
            $temp[$i]='...';
    }
}
$str=implode(' ', $temp);
return $str;
}
$str = 'this is a dog and blabla';
echo dotRep($block, $str);

echo"git hub";