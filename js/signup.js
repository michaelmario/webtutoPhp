function restrict(elem){
	var tf = _(elem);
	var rx = new RegExp;
	if(elem == "email"){
		rx = /[' "]/gi;
	} else if(elem == "username"){
		rx = /[^a-z0-9]/gi;
	}
	tf.value = tf.value.replace(rx, "");
}
function emptyElement(x){
	_(x).innerHTML = "";
}
function checkusername(){
	var u = _("username").value;
	if(u != ""){
		_("unamestatus").innerHTML = 'checking ...';
		var ajax = ajaxObj("POST", "signup.php");
        ajax.onreadystatechange = function() {
	        if(ajaxReturn(ajax) == true) {
	            _("unamestatus").innerHTML = ajax.responseText;
	        }
        }
        ajax.send("usernamecheck="+u);
	}
}
 function checkPassword(){
     let pass1 = _('pass1').value;
     let pass2 = _('pass2').value;
     if(pass2 != pass1){
        _('passCheck').innerHTML = "<strong class='w3-text-red'>to password pas bon ta!</strong>";
     }else{
        _('passCheck').innerHTML = "<strong class='w3-text-green'>to capave continue </strong>"; 
     }

}
function signup(){
	var u = _("username").value;
	var e = _("email").value;
	var p1 = _("pass1").value;
	var p2 = _("pass2").value;
	var c = _("country").value;
	var g = _("gender").value;
	var status = _("status");
	if(u == "" || e == "" || p1 == "" || p2 == "" || c == "" || g == ""){
		status.innerHTML = "<strong class='w3-text-red'>Fill out all of the form data </strong>";
	} else if(p1 != p2){
		status.innerHTML = "<strong class='w3-text-red'>Your password fields do not match </strong>";
	} else if( _("terms").style.display == "none"){
		status.innerHTML = "Please view the terms of use";
	} 
	else {
		_("signupbtn").style.display = "none";
		status.innerHTML = 'please wait ...';
		var ajax = ajaxObj("POST", "signup.php");
        ajax.onreadystatechange = function() {
	        if(ajaxReturn(ajax) == true) {
	            if(ajax.responseText != "signup_success"){
					status.innerHTML = ajax.responseText;
					_("signupbtn").style.display = "block";
				} else {
					window.scrollTo(0,0);
					_("signupform").innerHTML = "OK "+u+", check your email inbox and junk mail box at <u>"+e+"</u> in a moment to complete the sign up process by activating your account. You will not be able to do anything on the site until you successfully activate your account.";
				}
	        }
        }
        ajax.send("u="+u+"&e="+e+"&p="+p1+"&c="+c+"&g="+g);
	}
}
function openTerms(){
	_("terms").style.display = "block";
	emptyElement("status");
}
let checkTerms = _("check");
checkTerms.addEventListener('click',()=>{
	if(checkTerms !="" ){
		checkTerms = true;	
   }else{
	checkTerms = false;	
}
console.log(checkTerms);
})
