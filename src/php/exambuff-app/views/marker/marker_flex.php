<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000"
		id="viewer" width="100%" height="100%"
		codebase="http://fpdownload.macromedia.com/get/flashplayer/current/swflash.cab">
		<param name="movie" value="<?=base_url()?><?=$this->config->item('marker');?>.swf" />
		<param name="quality" value="high" />
		<param name="allowScriptAccess" value="sameDomain" />
		<embed src="<?=base_url()?><?=$this->config->item('marker');?>.swf" 
			quality="high" 
			width="100%"
			height="100%"
			align="middle"
			play="true"
			loop="false"
			quality="high"
			allowScriptAccess="sameDomain"
			type="application/x-shockwave-flash"
			pluginspage="http://www.adobe.com/go/getflashplayer">
		</embed>
</object>