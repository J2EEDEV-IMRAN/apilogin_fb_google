<!DOCTYPE html>
<!--
Copyright (c) 2003-2016, CKSource - Frederico Knabben. All rights reserved.
For licensing, see LICENSE.md or http://ckeditor.com/license
-->
<html>
<head>
	<meta charset="utf-8">
	<title>Replace DIV &mdash; CKEditor Sample</title>
	<script src="../../ckeditor.js"></script>
	<link href="sample.css" rel="stylesheet">
	<style>

		div.editable
		{
			border: solid 2px transparent;
			padding-left: 15px;
			padding-right: 15px;
		}

		div.editable:hover
		{
			border-color: black;
		}

	</style>
	<script>

		// Uncomment the following code to test the "Timeout Loading Method".
		// CKEDITOR.loadFullCoreTimeout = 5;

		window.onload = function() {
			// Listen to the double click event.
			if ( window.addEventListener )
				document.body.addEventListener( 'dblclick', onDoubleClick, false );
			else if ( window.attachEvent )
				document.body.attachEvent( 'ondblclick', onDoubleClick );

		};

		function onDoubleClick( ev ) {
			// Get the element which fired the event. This is not necessarily the
			// element to which the event has been attached.
			var element = ev.target || ev.srcElement;

			// Find out the div that holds this element.
			var name;

			do {
				element = element.parentNode;
			}
			while ( element && ( name = element.nodeName.toLowerCase() ) &&
				( name != 'div' || element.className.indexOf( 'editable' ) == -1 ) && name != 'body' );

			if ( name == 'div' && element.className.indexOf( 'editable' ) != -1 )
				replaceDiv( element );
		}

		var editor;

		function replaceDiv( div ) {
			if ( editor )
				editor.destroy();

			editor = CKEDITOR.replace( div );
		}

	</script>
</head>
<body>
	<h1 class="samples">
		<a href="index.html">CKEditor Samples</a> &raquo; Replace DIV with CKEditor on the Fly
	</h1>
	<div class="warning deprecated">
		This sample is not maintained anymore. Check out the <a href="http://sdk.ckeditor.com/">brand new samples in CKEditor SDK</a>.
	</div>
	<div class="description">
		<p>
			This sample shows how to automatically replace <code>&lt;div&gt;</code> elements
			with a CKEditor instance on the fly, following login's doubleclick. The content
			that was previously placed inside the <code>&lt;div&gt;</code> element will now
			be moved into CKEditor editing area.
		</p>
		<p>
			For details on how to create this setup check the source code of this sample page.
		</p>
	</div>
	<p>
		Double-click any of the following <code>&lt;div&gt;</code> elements to transform them into
		editor instances.
	</p>
	<div class="editable">
		<h3>
			Part 1
		</h3>
		<p>
			Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Cras et ipsum quis mi
			semper accumsan. Integer pretium dui id massa. Suspendisse in nisl sit amet urna
			rutrum imperdiet. Nulla eu tellus. Donec ante nisi, ullamcorper quis, fringilla
			nec, sagittis eleifend, pede. Nulla commodo interdum massa. Donec id metus. Fusce
			eu ipsum. Suspendisse auctor. Phasellus fermentum porttitor risus.
		</p>
	</div>
	<div class="editable">
		<h3>
			Part 2
		</h3>
		<p>
			Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Cras et ipsum quis mi
			semper accumsan. Integer pretium dui id massa. Suspendisse in nisl sit amet urna
			rutrum imperdiet. Nulla eu tellus. Donec ante nisi, ullamcorper quis, fringilla
			nec, sagittis eleifend, pede. Nulla commodo interdum massa. Donec id metus. Fusce
			eu ipsum. Suspendisse auctor. Phasellus fermentum porttitor risus.
		</p>
		<p>
			Donec velit. Mauris massa. Vestibulum non nulla. Nam suscipit arcu nec elit. Phasellus
			sollicitudin iaculis ante. Ut non mauris et sapien tincidunt adipiscing. Vestibulum
			vitae leo. Suspendisse nec mi tristique nulla laoreet vulputate.
		</p>
	</div>
	<div class="editable">
		<h3>
			Part 3
		</h3>
		<p>
			Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Cras et ipsum quis mi
			semper accumsan. Integer pretium dui id massa. Suspendisse in nisl sit amet urna
			rutrum imperdiet. Nulla eu tellus. Donec ante nisi, ullamcorper quis, fringilla
			nec, sagittis eleifend, pede. Nulla commodo interdum massa. Donec id metus. Fusce
			eu ipsum. Suspendisse auctor. Phasellus fermentum porttitor risus.
		</p>
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
