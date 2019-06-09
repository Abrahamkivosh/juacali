$(function(){"use strict";if($('.audio-player').length){
	var myPlaylist=new jPlayerPlaylist({jPlayer:"#jquery_jplayer_1",cssSelectorAncestor:"#jp_container_1"}
	,[
        {title:"Ngeli ni ya Ngenge",artist:"Jua Cali",mp3:"http://www.jplayer.org/audio/mp3/TSP-01-Cro_magnon_man.mp3",
    oga:"http://www.jplayer.org/audio/ogg/TSP-01-Cro_magnon_man.ogg"},
    {title:"Your Face",artist:"Ministry"
	,mp3:"http://www.jplayer.org/audio/mp3/TSP-05-Your_face.mp3",oga:"http://www.jplayer.org/audio/ogg/TSP-05-Your_face.ogg"}



],
	{swfPath:"js/plugins",supplied:"oga, mp3",
	wmode:"window",useStateClassSkin:true,autoBlur:false,
	smoothPlayBar:true,keyEnabled:true,playlistOptions:{autoPlay:false}});
	$("#jquery_jplayer_1").on($.jPlayer.event.ready+' '+$.jPlayer.event.play,
	function(event){var current=myPlaylist.current;var playlist=myPlaylist.playlist;
	$.each(playlist,function(index,obj){if(index==current)
		{$(".jp-now-playing").html("<div class='jp-track-name'>"+obj.title+"</div> <div class='jp-artist-name'>"+obj.artist+"</div>");}});
	$('.jp-volume-bar').mousedown(function(){var parentOffset=$(this).offset(),width=$(this).width();$(window).mousemove(
		function(e){var x=e.pageX-parentOffset.left,volume=x/width
if(volume>1){$("#jquery_jplayer_1").jPlayer("volume",1);}
else if(volume<=0){$("#jquery_jplayer_1").jPlayer("mute");}else{$("#jquery_jplayer_1").jPlayer("volume",volume);$("#jquery_jplayer_1").jPlayer("unmute");}});
	return false;}).mouseup(function(){$(window).unbind("mousemove");});var timeDrag=false;$('.jp-play-bar').mousedown(function(e){timeDrag=true;updatebar(e.pageX);});
	$(document).mouseup(function(e){if(timeDrag){timeDrag=false;updatebar(e.pageX);}});$(document).mousemove(function(e){if(timeDrag){updatebar(e.pageX);}});
	var updatebar=function(x){var progress=$('.jp-progress');var position=x-progress.offset().left;var percentage=100*position/progress.width();if(percentage>100){percentage=100;}
if(percentage<0){percentage=0;}
$("#jquery_jplayer_1").jPlayer("playHead",percentage);$('.jp-play-bar').css('width',percentage+'%');};$('#playlist-toggle, #playlist-text, #playlist-wrap li a').unbind().on('click',
	function(){$('#playlist-wrap').fadeToggle();$('#playlist-toggle, #playlist-text').toggleClass('playlist-is-visible');});$('.hide_player').unbind().on('click',function(){$('.audio-player').toggleClass('is_hidden');
	$(this).html($(this).html()=='<i class="fa fa-angle-down"></i> HIDE'?'<i class="fa fa-angle-up"></i> SHOW PLAYER':'<i class="fa fa-angle-down"></i> HIDE');});$('body').unbind().on('click','.audio-play-btn',
	function(){$('.audio-play-btn').removeClass('is_playing');$(this).addClass('is_playing');var playlistId=$(this).data('playlist-id');myPlaylist.play(playlistId);});});}});
