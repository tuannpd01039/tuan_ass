Gio Hang Cua ban
</br>
<?php

if($cart){
foreach ($cart as $product_id => $item) :
 echo 'ten san pham la:'.$item['name'].'</br>';  
 echo 'ma san pham la:'.$product_id .'</br>';
 echo 'so luong la:'.$item['product_qty'].'</br>';
  echo  'gia san pham la:'.$item['price'].'</br>';
  endforeach;}
  else{ echo "ko co mawtj hang nao trong ho hang";}
?>
