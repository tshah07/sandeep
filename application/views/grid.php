<?php

/*
 * This is a script to simplify dojo grid
 * all You need to do is pass array to this view and you will get grid for that data
 *
 * */
?>

<script>
	require(["dgrid/Grid", "dojo/domReady!"], function(Grid) {
	var data = <?php echo json_encode($gridData); ?>
	;

	var grid = new Grid({
		columns : {
			firstName : "First Name",
			lastName : "Last Name",
			email : "Email"
		}
	}, "grid");
	grid.renderArray(data);
	});
</script>
<div id="grid"></div>
