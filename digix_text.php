<?php 
$atvQuantity = 0; // Assuming getting quantity from cart
// atv calculation
$discountAtv =  $atvQuantity / 3;
$discountAtv = (int)$discountAtv * 219;
$numberOfAtv = $atvQuantity % 3;
$normalAtv = $numberOfAtv * 109.50;
$grndTotAtv = $discountAtv + $normalAtv;

// ipad calculation
$ipadQuantity = 1; //Assuming getting quantity from cart
$ipadPrice = 549.99;
if($ipadQuantity >=5 )
	$ipadPrice = 499.99;
$grandTotIpad = $ipadQuantity * $ipadPrice;

//vga & mbp adapter calculation
$vgaPrice = 30;
$mbpQnty = 1; //Assuming getting quantity from cart
$grndTotMbp = $mbpQnty * 1399.99;
$vgaQnty = 1; //Assuming getting quantity from cart
$vgaCheck = $vgaQnty <=> $mbpQnty;
$grndVgaTot = 0;
if($vgaCheck == 1 )
{ 	$vgaDiscQty = $mbpQnty; $vgaNormalQty = $vgaQnty - $mbpQnty; 
	$grndVgaTot = $vgaNormalQty * $vgaPrice;
}
echo $grandCustomerTotal = $grndTotAtv + $grandTotIpad +$grndTotMbp + $grndVgaTot;
?>