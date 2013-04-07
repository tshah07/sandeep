<?php

/*
 * This is a script to simplify dojo grid
 * all You need to do is pass array to this view and you will get grid for that data
 *
 * Pass data under variable $data['gridData'] in controller , under $gridData
 * */
?>

<script>
	require(["dgrid/Grid", "dojo/domReady!"], function(Grid) {
	var data = <?php echo json_encode($gridData); ?>
		;
	
	var grid = new Grid({
	columns : {
		<?php
			$colomn = (array_keys($gridData[0]));
			
			foreach ($colomn as $key) {
				echo $key . ":\"" . $key . "\",";
			}
		?>
		}
		}, "grid");
		grid.renderArray(data);
		});
	</script>
	<div id="grid"></div>

