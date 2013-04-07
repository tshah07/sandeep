<?php

/*
 * This is a script to simplify dojo grid
 * all You need to do is pass array to this view and you will get grid for that data
 *
 * */
?>

<script>
	require(["dgrid/Grid", "dojo/domReady!"], function(Grid) {
		var data = [{
			first : "Bob",
			last : "Barker",
			age : 89
		}, {
			first : "Vanna",
			last : "White",
			age : 55
		}, {
			first : "Pat",
			last : "Sajak",
			age : 65
		}];

		var grid = new Grid({
			columns : {
				first : "First Name",
				last : "Last Name",
				age : "Age"
			}
		}, "grid");
		grid.renderArray(data);
	}); 
</script>
<div id="grid"></div>
<?php

foreach ($gridData as $row) {

	echo $row['firstName'] . "<br>";
}
?>