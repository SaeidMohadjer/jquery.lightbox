jquery.lightbox
===============

A lightbox plugin for jQuery

<h3>Examples</h3>
<ul>
	<li><a href="repos.saeidmohadjer.com/jquery.lightbox/demo/lightbox.html">Lightbox (Modal)</a></li>
	<li><a href="repos.saeidmohadjer.com/jquery.lightbox/demo/lightbox_onload.html">Lightbox (Modal) on page load</a></li>
	<li><a href="repos.saeidmohadjer.com/jquery.lightbox/demo/lightbox_modeless.html">Lightbox (Modeless)</a></li>
	<li><a href="repos.saeidmohadjer.com/jquery.lightbox/demo/lightbox_modeless_with_curtain.html">Lightbox (Modeless with curtain)</a></li>
	<li><a href="repos.saeidmohadjer.com/jquery.lightbox/demo/lightbox_fixed.html">Fixed position</a></li>
</ul>

<p>Note: Popup's z-index should be set higher than all other element's z-index, otherwise those elements will not be covered by overlay curtain. Curtain's z-index is automatically set by js by deducting one from popup's z-index.</p>

<h3>API</h3>
<ul>
	<li><strong>modal</strong>: false [true]</li>
	<li><strong>has_curtain</strong>: true [false]</li>
	<li><strong>relative_to</strong>: 'window', ['parent']</li>
	<li><strong>top</strong>: center, [any integer value]</li>
	<li><strong>left</strong>: center, [any integer value]</li>
	<li><strong>onClosed</strong>: callback function</li>
	<li><strong>hide_browser_scrollbar</strong>: false, [true]</li>
	<li><strong>curtain.color</strong>: '#000' [color value in hexadecimal]</li>
	<li><strong>curtain.opacity</strong>: 0.6 [number between 0 and 1]</li>
</ul>
