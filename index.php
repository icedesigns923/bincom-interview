<?php


for( $i=1; $i<=1000000; $i++ ){
	if ($i % 3==0 ) {
		echo $i; 
	} else if ($i % 10==0) {
		echo  "<strong>$i</strong> <br>"; 
	} 
	
	else { echo "<i>$i</i> <br>";

}


}
?>