function validateForm() {
	var x = document.forms["myForm"]["Fname"].value;
		if (x == "") {
		alert("Name is required");
		return false;
	}
	var x = document.forms["myForm"]["Lname"].value;
		if (x == "") {
		alert("Name is required");
		return false;
	}
		
	var x = document.forms["myForm"]["email"].value;
		if (x == "") {
			alert("Email is required");
			return false;
		}

	var x = document.forms["myForm"]["phone"].value;
		if (x == "") {
		alert("Name is required");
		return false;
	}
}


