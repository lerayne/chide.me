<?php
/**
 * Created by PhpStorm.
 * User: M. Yegorov
 * Date: 2014-10-07
 * Time: 11:55
 */

//phpinfo();

?>

<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="UTF-8">
	<title>сhide.me!</title>

	<script src="<?= URL.LIB.'/jquery/dist/jquery.min.js' ?>" ></script>
	<script src="<?= URL.LIB.'/lodash/dist/lodash.min.js' ?>" ></script>
	<script src="<?= URL.LIB.'/platform/platform.js' ?>" ></script>

	<link rel="import" href="<?= URL.LIB.'/core-header-panel/core-header-panel.html'?>">
	<link rel="import" href="<?= URL.LIB.'/core-toolbar/core-toolbar.html'?>">
	<link rel="import" href="<?= URL.LIB.'/core-icons/core-icons.html'?>">
	<link rel="import" href="<?= URL.LIB.'/paper-button/paper-button.html'?>">
	<link rel="import" href="<?= URL.LIB.'/paper-tabs/paper-tabs.html'?>">
	<link rel="import" href="<?= URL.LIB.'/paper-fab/paper-fab.html'?>">

	<style>
		body, html {
			font-family: Calibri, Arial, sans-serif;
		}

		.content {
			background: #fff;
			margin: 60px 60px 60px 0;
		}

		core-toolbar paper-button {
			font-size: 0.8em;
			padding: 0.3em 0;
			min-width: 2em;
		}

		core-toolbar {
			height: auto;
			background-color: #d01716;
			color:white;
		}

		core-toolbar::shadow #bottomBar,
		/*core-toolbar::shadow #middleBar,*/
		core-toolbar::shadow #topBar
		{
			position: static;
		}

		core-toolbar::shadow .toolbar-tools {
			height: 50px;
		}

		paper-tab {
			font-weight: bold;
			text-transform: uppercase;
			cursor: pointer;
		}

		paper-tab::shadow #ink {
			color:#ccc
		}

		paper-tabs::shadow #selectionBar {
			background-color: #ccc;
		}
		
		paper-fab {
			background-color: #d01716;
			position: fixed;
			bottom:2em;
			right:3em;
		}
	</style>

</head>
<body fullbleed vertical layout>

	<core-header-panel flex>
		<core-toolbar>
			<div class="bottom">
				<div style="text-transform: uppercase; font-weight: bold"><span style="color:#ccc">chide</span>.me!</div>
			</div>

			<paper-tabs class="top" flex self-end selected="0">
				<paper-tab>Dashboard</paper-tab>
				<paper-tab>My chides</paper-tab>
			</paper-tabs>
		</core-toolbar>
		<div class="content" style="height:2000px">Contents</div>
		<paper-fab icon="add"></paper-fab>
	</core-header-panel>

</body>
</html>