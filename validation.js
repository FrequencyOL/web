const myform = document.querySelector("#signup");

form.addEventListener('submit', formSubmitted);
myform.addEventListener('submit', formSubmitted);
function formSubmitted(event) {
	if(!myform.username.value){
		alert("Username should not be empty");
		event.preventDefault();
	} else if(!myform.username.value || myform.username.value.length > 12 ||
myform.username.value.length < 6 || myform.username.value.includes("@"))
{
alert("Username should be longer than 6 characters and less than 12");
event.preventDefault();
}
if(!myform.password.value){
	alert("Password should not be empty");
	event.preventDefault();
} else if(!myform.password.value || myform.password.value.length < 6 || myform.username.value.length > 12)
{
alert("Password should be longer than 6 characters and less than 16");
event.preventDefault();
} else if(myform.password.value == myform.password.value.toUpperCase()
|| myform.password.value == myform.password.value.toLowerCase())
{
alert("Password should contain at least one uppercase letter");
event.preventDefault();
}
}

