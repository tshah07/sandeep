<html>
	<head>
	<link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/dojo/1.8.3/dojo/resources/dojo.css">
		<!-- <link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/dojo/1.8.3/dijit/themes/claro/claro.css" />
		<link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/dojo/1.8.3/dojox/grid/resources/Grid.css" />
		<link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/dojo/1.8.3/dojox/grid/resources/claroGrid.css" /> -->
		<link rel="stylesheet" href="//localhost:8080/sandeep/public/claro.css" />
		<link rel="stylesheet" href="//localhost:8080/sandeep/public/claro.css" />


	<script src="http://dojofoundation.org/packages/dgrid/js/dojo/dojo.js"></script>
	
	<script>
		var dojoConfig;
		(function(){
			var baseUrl = location.pathname.replace(/\/[^/]+$/, "/../../../js/");
			dojoConfig = {
				async: 1,
				cacheBust: "1.8.3-0.3.6",
				// Load dgrid and its dependencies from a local copy.
				// If we were loading everything locally, this would not
				// be necessary, since Dojo would automatically pick up
				// dgrid, xstyle, and put-selector as siblings of the dojo folder.
				packages: [
					{ name: "dgrid", location: baseUrl + "dgrid" },
					{ name: "xstyle", location: baseUrl + "xstyle" },
					{ name: "put-selector", location: baseUrl + "put-selector" }
				]
			};
		}());
	</script>

	</head>
	<body class="claro">
