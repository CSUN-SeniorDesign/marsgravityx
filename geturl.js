function geturl(url_id)
{
	$.ajax({
		url: "geturl.php?urlid="+url_id,
		dataType: 'json',
		success: function(data){
			$('#urlset').html(data);
		}
	});
}