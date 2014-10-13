jquery.lightbox
===============

A lightbox plugin for jQuery

<h3>Examples</h3>
<ul>
	<li><a href="http://repos.saeidmohadjer.com/jquery.lightbox/demo/lightbox.html">Lightbox (Modal)</a></li>
	<li><a href="http://repos.saeidmohadjer.com/jquery.lightbox/demo/lightbox_onload.html">Lightbox (Modal) on page load</a></li>
	<li><a href="http://repos.saeidmohadjer.com/jquery.lightbox/demo/lightbox_modeless.html">Lightbox (Modeless)</a></li>
	<li><a href="http://repos.saeidmohadjer.com/jquery.lightbox/demo/lightbox_modeless_with_curtain.html">Lightbox (Modeless with curtain)</a></li>
	<li><a href="http://repos.saeidmohadjer.com/jquery.lightbox/demo/lightbox_fixed.html">Fixed position</a></li>
</ul>

<p>Note: Popup's z-index should be set higher than all other element's z-index, otherwise those elements will not be covered by overlay curtain. Curtain's z-index is automatically set by js by deducting one from popup's z-index.</p>

<h3>Options</h3>
<ul>
	<li><strong>modal</strong>: false (default), true</li>
	<li><strong>has_curtain</strong>: true (default), false</li>
	<li><strong>relative_to</strong>: 'window' (default), 'parent'</li>
	<li><strong>top</strong>: center (default), any integer value</li>
	<li><strong>left</strong>: center (default), any integer value</li>
	<li><strong>onClosed</strong>: callback function runs when lightbox is closed</li>
	<li><strong>hide_browser_scrollbar</strong>: false (default), true</li>
	<li><strong>curtain.color</strong>: '#000' (default), any color value in hexadecimal</li>
	<li><strong>curtain.opacity</strong>: 0.6 (default), any number between 0 and 1</li>
</ul>
