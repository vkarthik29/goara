if (!document.getElementById("r2v-player-placeholder")) {
document.write('<div id="r2v-player-placeholder"></div>');
}
/*if(document.getElementById("r2v-player-placeholder").hasChildNodes() || (parent.location.href == self.location.href)==false){

}else{ */
var fv = 'id=ova-jwplayer-container&file=<?php echo $org_file; ?>&plugins=<?php echo player_url(); ?>ova-1.0.swf&autostart=<?php echo $autostart; ?>&ova.ads=%5B%5BJSON%5D%5D%7B%22schedule%22%3A%5B%7B%22position%22%3A%22<?php echo $position;?>%22%2C%22tag%22%3A%22<?php echo $configxml; ?>%22%7D%5D%7D&ova.pluginmode=FLASH&controlbar.position=bottom&volume=<?php echo $volume;?>&ComscoreID=13192250&campaign_id=<?php echo $campaign_id;?>&duration=<?php echo $duration;?>';
var burl = '<?php echo player_url(); ?>';

var b = [
  '<object width="<?php echo $width; ?>" height="<?php echo $height;?>"   style="width:<?php echo $width; ?>px !important;height:<?php echo $height;?>px !important;" ><param name="movie" value="<?php echo player_url(); ?>r2vplayer.swf">',
  '<param name="base" value="<?php echo player_url(); ?>">',
  '<param name="codebase" value="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,0,0">',
  '<param name="FlashVars" value='+fv+' >',
  '<param name="allowDomain" value="any"><param name="allowScriptAccess" value="always">',
  '<embed src="'+burl+'r2vplayer.swf" base="<?php echo player_url(); ?>" width="<?php echo $width; ?>" height="<?php echo $height;?>" ',
  'type="application/x-shockwave-flash" pluginspage="http://www.adobe.com/go/getflashplayer" ',
  ' FlashVars='+fv+' allowScriptAccess="always" allowDomain="any" /></object>'
].join('');
document.write(b);
var track='<script language="JavaScript" type="text/javascript">function cpaDP() {var ifrm = document.createElement("IFRAME");ifrm.setAttribute("src", "http://www.securepaths.com/pixel.cgi?s=<?php echo $session_id; ?>&p=<?php echo $pub_id; ?>&a=<?php echo $regionid; ?>&cmp=<?php echo $campaign_id;?>&org=lgmzqtur75ldlplk4haw&rt=3_saleJS&ty=l&rf=" + encodeURIComponent(document.referrer) + "&rd=<?php echo $player_request_url; ?>");ifrm.style.width = 1 + "px";ifrm.style.height = 1 + "px";ifrm.frameBorder = 0;document.body.appendChild(ifrm);}cpaDP();</script><noscript><img src="http://www.securepaths.com/pixel.cgi?s=<?php echo $session_id; ?>&p=<?php echo $pub_id; ?>&a=<?php echo $regionid; ?>&cmp=<?php echo $campaign_id;?>&org=lgmzqtur75ldlplk4haw&rt=5_saleIMG&ty=l&rd=<?php echo $player_request_url; ?>"></noscript>';
document.write(track);
/*}*/
