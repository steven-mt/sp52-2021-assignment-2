function validateForm() {
	
	// Validate name
	var x = document.forms["form"]["name"].value
	if (x == "") {
		alert("Name must be filled out.")
		return false
	}

	// Validate email
	x = document.forms["form"]["email"].value
	if (x == "") {
		alert("Email must be filled out.")
		return false
	}

	// Validate birthday
	x = document.forms["form"]["birthday"].value
	x = new Date(x)
	var today = new Date()
	if (isNaN(x.getTime()) || (x >= today)) {
		alert("Please enter a valid date.")
		return false
	}

	// Validate checkboxes
	x = document.querySelectorAll("input[ name^='prod[' ]")
	var valid = false
	for (var i=0, l=x.length; i<l; i++) {
		if (x[i].checked) {
			valid = true
			break
		}
	}
	if (valid == false) {
		alert("Please select at least one product.")
		return false
	}
}