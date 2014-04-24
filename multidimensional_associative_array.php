<?php
/*$products=  array(
    'paper'=>array(
    'copier'=>"Copier & Multipurpose",
    'inkjet'=>"Inkjet Printer",
    'laser'=>"Laser Printer",
    'photo'=>"Photographic Paper"),
    
    'pens'=>array(
    'ball'=>"Ball Point",
    'hilite'=>"Highlighters",
    'marker'=>"Markers"),
    
    'misc'=>array(
    'tape'=>"Sticky Tape",
    'glue'=>"Adhesives",
    'clips'=>"Paperclips"));

echo "<pre>";
foreach($products as $section=>$items)
    foreach($items as $key=> $value)
        echo "$section:\t$key\t($value)<br>";
echo "</pre>";*/
$musteri1=array(
     'ad'=>'Hasan',
     'soyad'=>'Tokatli',
     'email'=>'cehasan@gmail.com',
     'adres'=>array (
         'ev'=>'Eyüp',
         'fatura'=>'Beşiktaş',
         ),
     'banka'=>array(
         array(
             'Bankaadi'=>'Garanti Bankası',
             'subekodu'=>6523,
             'hesapno'=>2635721,
             'ekbilgi'=>'maas hesabı',
         ),
         array(
             'Bankaadi'=>'Halk Bankası',
             'subekodu'=>6233,
             'hesapno'=>26354321,
             'ekbilgi'=>'maas hesabı',
         ),
     )
 );




echo $musteri1['ad'];
echo "<br>";
echo $musteri1['soyad'];
echo "<br>";
echo $musteri1['banka'][0];
echo $musteri1['adres']['fatura']."<br>";

//diziyi objecte çevirme
$oMusteri=(object)$musteri1;
echo $oMusteri->ad.'<br>';
echo $oMusteri->adres['fatura'];
        
?>

