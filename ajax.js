$("#call").click(function()
{
	var name = $("#name").val();
	var memo = $("#memo").val();
	
	if(name == "" || memo == "")
	{
		return;
	}
	
	// ajax =======================
	$.ajax(
	{
		type : 'POST',
		
		dataType : 'text',
		
		url : './call.php',
		
		data : 
		{
			name : name,
			memo : memo
		},
		
		success : function(data)
		{
			alert(data);
		}
	});
});
