function loadJS(filename) {
	console.log(filename)
	
	var fileref=document.createElement("link")
	fileref.setAttribute("rel", "stylesheet")
	fileref.setAttribute("type", "text/css")
	fileref.setAttribute("href", filename)
	
	if (typeof fileref!="undefined")
	{
		  var mydiv = document.getElementById("scripts")
		  mydiv.appendChild(fileref)
	}
}

function loadCSS(filename)
{
	console.log(filename)
	var fileref=document.createElement("link")
	fileref.setAttribute("rel", "stylesheet")
	fileref.setAttribute("type", "text/css")
	fileref.setAttribute("href", filename)
	
	if (typeof fileref!="undefined")
		  document.getElementsByTagName("head")[0].appendChild(fileref)
}