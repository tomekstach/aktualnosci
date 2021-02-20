var vGhostUserConf = {
	tagName : 'video',
	extRes: false,
	bgColor : '#E6E8FA',
	bgOpacity : '0.7',
	bgImage : "http://www.assecobs.pl/WAPRO/resources/images/ajax-loader.gif",
	marginLeft: '-280px',
	marginTop: '-272px',
	aMsg : 'Niestety film nie moĹźe zostaÄ zaprezentowany. SprĂłbuj ponownie za jakiĹ czas.'
};

jQuery().ready(function(){
	if(typeof vGhostUserConf == 'undefined') vGhostUserConf = vGhostConf;
	tagName = (vGhostUserConf.tagName) ? vGhostUserConf.tagName : vGhostConf.tagName;
	jQuery('p[name="'+ tagName +'"]').each(function(){
		jQuery(this).vGhost(vGhostUserConf.extRes);
	});
});
