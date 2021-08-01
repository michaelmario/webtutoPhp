

// Make this function external like I did in the video
function _(x) {
	return document.getElementById(x);
}

_("introbtn").addEventListener('click', () => {
	if (_("intro").style.display === "block") {
		_("intro").style.display = "none";
	} else {
		_("intro").style.display = "block";
	}

})
_("baslisebtn").addEventListener('click', function () {
	if (_("baliseScript").style.display !== "block") {
		_("baliseScript").style.display = "block";
		_("baliseScript").classList.toggle("mystyle");
	} else {
		_("baliseScript").style.display = "none";
		_("baliseScript").classList.toggle("mystyle");
	}
});
_("dataTypebtn").addEventListener('click', function () {
	if (_("dataType").style.display !== "block") {
		_("dataType").style.display = "block";

	} else {
		_("dataType").style.display = "none";

	}
});
_("pageDynamique").addEventListener('click', function () {
	if (_("dynamiquePage").style.display !== "block") {
		_("dynamiquePage").style.display = "block";

	} else {
		_("dynamiquePage").style.display = "none";

	}
});
function shiftpage(e) {
	if (e.id === "JavaScript") {
		_("franceInfoContainer").style.display = "block";
		_("page2Container").style.display = "none";


	} else if (e.id === "PHP") {
		_("franceInfoContainer").style.display = "none";
		_("page2Container").style.display = "block";
	}


}
let url = "https://www.francetvinfo.fr/sports.rss";
var xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        myFunction(this);
    }
};
xhttp.open("GET", url, true);
xhttp.send();

function myFunction(xml) {
    var x, i, xmlDoc, txt;
    xmlDoc = xml.responseXML;
    txt = "";
    x = xmlDoc.getElementsByTagName('title');
    for (i = 0 ; i <x.length; i++) {
        txt += x[i].childNodes[0].nodeValue + "<hr>";
    }
    _("output").innerHTML =txt;
}

 function openModal(){
	_('mauriModal').style.display='block';
}
function openLogin(){
	_('loginModal').style.display='block';
}


