var vGhostConf = {
	tagName : 'tgbyhnujm',
	bgColor : '#E6E8FA',
	bgOpacity : '0.7',
	marginLeft: '-280px',
	marginTop: '-272px'
};

jQuery.fn.vGhost = function(extRes){
	jQuery(this).click(function(){		
		loadUrl = jQuery(this).children('input:hidden').val();
		
		jQuery('<div>')
			.attr('id',"vbg")
			.width('100%')
			.height('100%')
			.css({
				'background-color' : (vGhostUserConf.bgColor) ? vGhostUserConf.bgColor : vGhostConf.bgColor,
				'left' : '0', 
				'opacity' : (vGhostUserConf.bgOpacity) ? vGhostUserConf.bgOpacity : vGhostConf.bgOpacity, 
				'position' : 'fixed', 
				'top' : '0', 
				'z-index': '1000'
			})
			.click(function(){
				if(jQuery('div#vsh').css('display') == 'block'){
					jQuery('div#vsh').hide().remove();
					jQuery(this).hide().remove();
				}
			})
			.appendTo('body');
		
		bgImage = (vGhostUserConf.bgImage) ? 'url('+vGhostUserConf.bgImage+')' : '';
		
		jQuery('<div>')
			.attr('id', "vsh")
			.width(680)
			.height(510)
			.css({
				'background-color': 'transparent', 
				'background-image': bgImage,
			    'background-position': 'center center',
			    'background-repeat': 'no-repeat',
				'border': 'medium none', 
				'left' : '50%', 
				'top' : '50%', 
				'position' : 'fixed', 
				'text-align' : 'left',
				'z-index' : '1002',
				'margin-left': (vGhostUserConf.marginLeft) ? vGhostUserConf.marginLeft : vGhostConf.marginLeft,
				'margin-top': (vGhostUserConf.marginTop) ? vGhostUserConf.marginTop : vGhostConf.marginLeft
			})
			.appendTo('body');
		
		
		try{
			jQuery("<p>").load(loadUrl, function(response, status, xhr) {	
				if(extRes){
					jQuery('<iframe>', {
						src: loadUrl,
						frameborder: 0
					})
					.height(315)
					.width(560)
					.appendTo('div#vsh');
				}
				else{
					if(jQuery(response).length == 0){
						jQuery('div#vsh').hide().remove();
						jQuery('div#vbg').hide().remove();
						if(vGhostUserConf.aMsg)
							alert(vGhostUserConf.aMsg);
						return;
					}
						
					jQuery('div#vsh').html(jQuery(this).html());
				}
			});
		}catch(e){
			jQuery('div#vsh').hide().remove();
			jQuery('div#vbg').hide().remove();
			if(vGhostUserConf.aMsg)
				alert(vGhostUserConf.aMsg);
		}
	});
};

