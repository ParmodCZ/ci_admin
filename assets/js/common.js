/**
 * @author Kishor Mali
 */


jQuery(document).ready(function(){
	
	jQuery(document).on("click", ".deleteUser", function(){
		var userId = $(this).data("userid"),
			hitURL = baseURL + "deleteUser",
			currentRow = $(this);
		
		var confirmation = confirm("Are you sure to delete this user ?");
		
		if(confirmation)
		{
			jQuery.ajax({
			type : "POST",
			dataType : "json",
			url : hitURL,
			data : { userId : userId } 
			}).done(function(data){
				console.log(data);
				currentRow.parents('tr').remove();
				if(data.status = true) { alert("User successfully deleted"); }
				else if(data.status = false) { alert("User deletion failed"); }
				else { alert("Access denied..!"); }
			});
		}
	});
	//deleteProperty
	jQuery(document).on("click", ".deleteProperty", function(){
		var propertyid = $(this).data("propertyid"),
			hitURL = baseURL + "deleteResidentialRentProperty",
			currentRow = $(this);
		
		var confirmation = confirm("Are you sure to delete this Property ?");
		
		if(confirmation)
		{
			jQuery.ajax({
			type : "POST",
			dataType : "json",
			url : hitURL,
			data : { propertyid : propertyid } 
			}).done(function(data){
				console.log(data);
				currentRow.parents('tr').remove();
				if(data.status = true) { alert("Property successfully deleted"); }
				else if(data.status = false) { alert("Property deletion failed"); }
				else { alert("Access denied..!"); }
			});
		}
	});
	
	//deleteResidentialResaleProperty
	jQuery(document).on("click", ".deleteResidentialResaleProperty", function(){
		var propertyid = $(this).data("propertyid"),
			hitURL = baseURL + "deleteResidentialResaleProperty",
			currentRow = $(this);
		
		var confirmation = confirm("Are you sure to delete this Property ?");
		
		if(confirmation)
		{
			jQuery.ajax({
			type : "POST",
			dataType : "json",
			url : hitURL,
			data : { propertyid : propertyid } 
			}).done(function(data){
				console.log(data);
				currentRow.parents('tr').remove();
				if(data.status = true) { alert("Property successfully deleted"); }
				else if(data.status = false) { alert("Property deletion failed"); }
				else { alert("Access denied..!"); }
			});
		}
	});
	
	jQuery(document).on("click", ".searchList", function(){
		
	});
	
	deletefun(moduleid,url,module='this'){
		var propertyid = moduleid,
			hitURL = baseURL + url,
			currentRow = $(this);
		
		var confirmation = confirm("Are you sure to delete this Property ?");
		
		if(confirmation)
		{
			jQuery.ajax({
			type : "POST",
			dataType : "json",
			url : hitURL,
			data : { propertyid : propertyid } 
			}).done(function(data){
				console.log(data);
				currentRow.parents('tr').remove();
				if(data.status = true) { alert("Property successfully deleted"); }
				else if(data.status = false) { alert("Property deletion failed"); }
				else { alert("Access denied..!"); }
			});
		}
	}
	
});
