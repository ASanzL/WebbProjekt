/**
 * Vizzit overlay SiteVision 4
 */
function VizzitSitevisionOverlay()
{
	var self = this;
	this.customer = 'qAU20m0N5TK6Z1nRBlycMQ==';
	this.pageId = '';
	this.login = '//www.vizzit.se/portal/';
	this.html = '<div id="vizzit-sitevision-overlay" class="pos-bot"><div class="vizzit-main-item"><div class="main-item-image"></div><div class="main-item-text">Vizzit</div></div><div class="vizzit-dropdown"><div class="vizzit-dropdown-item"><span id="vizzitLinkPortal">Portal</span></div><div class="vizzit-dropdown-item"><span id="vizzitLinkThisPage">This page</span></div><div class="vizzit-dropdown-item" onClick="vizzitSitevisionOverlayObject.moveOverlay();">Move button</div></div></div>';
	this.position = null;

	this.init = function()
	{
		// Attach event
		this.window();
	};

	this.run = function()
	{
		// Fetch pageId
		self.pageId = sv.PageContext.pageId;

		// Check if the person is in edit mode, then render the overlay
		if(sv.PageContext.inEditMode === true)
			self.render();
	}

	this.render = function()
	{
		// Create the initial holder element and render it
		var holder = document.createElement('div');
		holder.id = 'vizzit-sitevision-overlay-holder';
		holder.innerHTML = self.html;
		document.body.insertBefore(holder, document.body.firstChild);
		var portal = document.getElementById('vizzitLinkPortal');
		var thispage = document.getElementById('vizzitLinkThisPage');

		// Store the overlay HTML element
		var overlay = document.getElementById('vizzit-sitevision-overlay');
		self.position = self.getLastPos();
		overlay.className = self.position;
		
		// Set up click method
		var clickMethod = function(link)
		{
			window.open(self.makeLoginLink(link));
			return false;
		};

		// We need to set events on these because it's a span tag,
		// Because unfortunately when using an "a" tag with href,
		// sitevision's edit.js blocks them saying "invalid local url"
		if(window.addEventListener) // W3C DOM
		{
			portal.addEventListener('click', function(){ clickMethod('portal'); }, false);
			thispage.addEventListener('click', function(){ clickMethod('thispage'); }, false);
		} 
		else if(window.attachEvent) // IE DOM
		{
			portal.attachEvent('onclick', function(){ clickMethod('portal'); });
			thispage.attachEvent('onclick', function(){ clickMethod('thispage'); });
		}
	};

	/**
	 * Window onload event
	 * @return void
	 */
	this.window = function()
	{
		if(window.addEventListener) // W3C DOM
			window.addEventListener('load', self.run, false);
		else if(window.attachEvent) // IE DOM
			window.attachEvent("onload", self.run);
	};

	/**
	 * Toggles the positions of the overlay
	 * @return void
	 */
	this.moveOverlay = function()
	{
		// Store the html element
		var overlay = document.getElementById('vizzit-sitevision-overlay');

		// It's on top, move to bottom
		if(overlay.className === 'pos-top')
			overlay.className = 'pos-bot';

		// It's on bottom, move to top
		else if(overlay.className === 'pos-bot')
			overlay.className = 'pos-top';

		// It's neither, set default position as bot
		else
			overlay.className = 'pos-bot';

		// Store the new position in the variable and cookie
		self.position = overlay.className;
		document.cookie = "pos=" + self.position;
	};

	/**
	 * Make login link
	 * @param string tool
	 * @return string
	 */
	this.makeLoginLink = function(tool)
	{
		var href = this.login;
		href += '?data1=' + this.customer;
		href += '&p=' + this.pageId;
		href += '&t=' + tool;
		href += '&user=';
		href += '&login';
		return href;
	};

	/**
	 * Gets the last position of the overlay (pos-top, pos-bot, the latter being default value)
	 * @return string position
	 */
	this.getLastPos = function()
	{
		// Split the cookies into an array
		var cookies = document.cookie.split(';');

		// Loop through each cookie, when we find our cookie we'll return its value
		for(var i = 0; i < cookies.length; i++)
			if(cookies[i].indexOf('pos=') >= 0)
				return cookies[i].substr(cookies[i].indexOf('=') + 1);

		// Our cookie wasn't found, return the default value
		return 'pos-bot';
	};
}

var vizzitSitevisionOverlayObject = new VizzitSitevisionOverlay();
vizzitSitevisionOverlayObject.init();