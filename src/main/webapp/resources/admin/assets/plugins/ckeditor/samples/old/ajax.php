<!DOCTYPE html>
<!--
Copyright (c) 2003-2016, CKSource - Frederico Knabben. All rights reserved.
For licensing, see LICENSE.md or http://ckeditor.com/license
-->
<html>
<head>
	<meta charset="utf-8">
	<title>Ajax &mdash; CKEditor Sample</title>
	<script src="../../ckeditor.js"></script>
	<link rel="stylesheet" href="sample.css">
	<script>

		var editor, html = '';

		function createEditor() {
			if ( editor )
				return;

			// Create a new editor inside the <div id="editor">, setting its value to html
			var config = {};
			editor = CKEDITOR.appendTo( 'editor', config, html );
		}

		function removeEditor() {
			if ( !editor )
				return;

			// Retrieve the editor contents. In an Ajax application, this data would be
			// sent to the server or used in any other way.
			document.getElementById( 'editorcontents' ).innerHTML = html = editor.getData();
			document.getElementById( 'contents' ).style.display = '';

			// Destroy the editor.
			editor.destroy();
			editor = null;
		}

	</script>
</head>
<body>
	<h1 class="samples">
		<a href="index.html">CKEditor Samples</a> &raquo; Create and Destroy Editor Instances for Ajax Applications
	</h1>
	<div class="warning deprecated">
		This sample is not maintained anymore. Check out its <a href="http://sdk.ckeditor.com/samples/saveajax.html">brand new version in CKEditor SDK</a>.
	</div>
	<div class="description">
		<p>
			This sample shows how to create and destroy CKEditor instances on the fly. After the removal of CKEditor the content created inside the editing
			area will be displayed in a <code>&lt;div&gt;</code> element.
		</p>
		<p>
			For details of how to create this setup check the source code of this sample page
			for JavaScript code responsible for the creation and destruction of a CKEditor instance.
		</p>
	</div>
	<p>Click the buttons to create and remove a CKEditor instance.</p>
	<p>
		<input onclick="createEditor();" type="button" value="Create Editor">
		<input onclick="removeEditor();" type="button" value="Remove Editor">
	</p>
	<!-- This div will hold the editor. -->
	<div id="editor">
	</div>
	<div id="contents" style="display: none">
		<p>
			Edited Contents:
		</p>
		<!-- This div will be used to display the editor contents. -->
		<div id="editorcontents">
		</div>
	</div>
	<div id="footer">
		<hr>
		<p>
			CKEditor - The text editor for the Internet - <a class="samples" href="http://ckeditor.com/">http://ckeditor.com</a>
		</p>
		<p id="copy">
			Copyright &copy; 2003-2016, <a class="samples" href="http://cksource.com/">CKSource</a> - Frederico
			Knabben. All rights reserved.
		</p>
	</div>
</body>
</html>
