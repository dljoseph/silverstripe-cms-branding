<div class="ss-loading-screen">
	<div class="loading-logo"<% if $SiteConfig.CustomCMSLoading %> style="background: transparent url('$SiteConfig.CustomCMSLoading.AbsoluteURL') no-repeat 50% 50%"<% end_if %>>
		<img class="loading-animation" src="$ModulePath(frameworkadmin)/images/spinner.gif" alt="<% _t('CMSLoadingScreen_ss.LOADING','Loading...') %>" />
		<noscript><p class="nojs-warning"><span class="message notice"><% _t('CMSLoadingScreen_ss.REQUIREJS','The CMS requires that you have JavaScript enabled.') %></span></p></noscript>
	</div>
</div>
