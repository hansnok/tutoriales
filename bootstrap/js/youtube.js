var channelName = '';
var channelid = 'UCgP-Uk-fjyjoFwmfNEATZcA';

$(document).ready(function(){
	$.get(
			"https://www.googleapis.com/youtube/v3/channels",{
				part: 'contentDetails',
				//forUsername: channelName,
				id: channelid,
				key: 'AIzaSyCjsuMFWsH4iAegunMyvu8wjmJCyrr_EgE'},
				function(data){
					$.each(data.items, function(i, item){
						console.log(item);
						pid = item.contentDetails.relatedPlaylists.uploads ;
						getVids(pid);
					})		
				}
	);
	
	function getVids(pid){
		$.get(
				"https://www.googleapis.com/youtube/v3/playlistItems",{
					part: 'snippet',
					maxResults: 3,
					playlistId: pid,
					key: 'AIzaSyCjsuMFWsH4iAegunMyvu8wjmJCyrr_EgE'},	
					function(data){
						var output;
						$.each(data.items, function(i, item){
							console.log(item);
							videTitle = item.snippet.title;
							videoId = item.snippet.resourceId.videoId;
							
							output = '<div class="col-md-4"><br><iframe frameborder="0" allowfullscreen width="300" height="250" src=\"//www.youtube.com/embed/'+videoId+'\"</div>'
							
							//Append to results listStyleType
							$('#results').append(output);
						})
						
					}
		);
		
	}
	
});