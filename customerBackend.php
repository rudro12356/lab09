<style> <?php include 'stle.css'; ?> </style>
<?php 

$username = $_POST["onlineid"];
    $password = $_POST["passcode"];
    $Toy1 = $_POST["Toy1"];
    $Toy2 = $_POST["Toy2"];
    $Toy3 = $_POST["Toy3"];
    $Toy4 = $_POST["Toy4"];     
    $Toy5 = $_POST["Toy5"];
    
    echo "<p style='color:Black'>Welcome to the Web Store!</p>";
    echo "<p style='color:Black'>The password you entered is: $password </p>";
    echo "<br>";
    
    $shippingcharge=0;

    if($shipping=="Normal")
    {
        $shippingcharge=0;
    }


    else if($shipping=="Valued")
    {
        $shippingcharge=5;
    }

    else if($shipping=="Premium")
    {
        $shippingcharge=15;
    }
    
    $toy1price=$Toy1*100;
    $toy2price=$Toy2*150;
    $toy3price=$Toy3*200;
    $toy4price=$Toy4*250;
    $toy5price=$Toy5*300;


$total=$shippingcharge+$toy1price+$toy2price+$toy3price+$toy4price;
echo "<p style='color: Red; font-size:20px'>Receipt:</p>";


echo "
 <table>
	<tr>	
		<th style='background-color:#FF0000'>            </th>
		<th style='background-color:rgb(191, 209, 186)'>Quantity</th>
		<th style='background-color:rgb(191, 209, 186)'>Cost Per Item</th>
		<th style='background-color:rgb(191, 209, 186)'>Sub Total</th>
	</tr>";

	echo "<tr>
		<th style='background-color:rgb(191, 209, 500)'>Cyberpunk figure</th>
		<td style='background-color:rgb(199, 140, 211)'>$Toy1</td>
		<td style='background-color:rgb(199, 140, 211)'>$100</td>
		<td style='background-color:rgb(199, 140, 211)'>$toy1price</td>
	</tr>";
	echo "<tr>
		<th style='background-color:rgb(191, 209, 300)'>Batman and Bane figure</th>
		<td style='background-color:rgb(199, 140, 211)'>$Toy2</td>
		<td style='background-color:rgb(199, 140, 211)'>$150</td>
		<td style='background-color:rgb(199, 140, 211)'>$toy2price</td>
	</tr>";
echo "<tr>
		<th style='background-color:rgb(191, 209, 700)'>God of War</th>
		<td style='background-color:rgb(199, 140, 211)'>$Toy3</td>
		<td style='background-color:rgb(199, 140, 211)'>$200</td>
		<td style='background-color:rgb(199, 140, 211)'>$toy3price</td>
	</tr>";
echo "<tr>
		<th style='background-color:rgb(191, 209, 800)'>One Piece</th>
		<td style='background-color:rgb(199, 140, 211)'>$Toy4</td>
		<td style='background-color:rgb(199, 140, 211)'>$250</td>
		<td style='background-color:rgb(199, 140, 211)'>$toy4price</td>
	</tr>";

    echo "<tr>
		<th style='background-color:rgb(191, 209, 900)'>Spiderman</th>
		<td style='background-color:rgb(199, 140, 211)'>$Toy5</td>
		<td style='background-color:rgb(199, 140, 211)'>$300</td>
		<td style='background-color:rgb(199, 140, 211)'>$toy5price</td>
	</tr>";

echo "<tr>
		
		<th style='background-color:rgb(191, 209, 186)'>Shipping</th>
		<td style='background-color:rgb(199, 140, 211)' colspan='2'>$shipping</td>
		<td style='background-color:rgb(199, 140, 211)'>$shippingcharge</td>
</tr>";
echo "<tr>
		
		<th style='background-color:rgb(191, 209, 186)' colspan='3'>Total Cost</th>
		<td style='background-color:rgb(199, 140, 211)'>$total</td>
</tr>";




echo "</table>";
?>