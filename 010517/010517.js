//Michael Masterson
//http://people.emich.edu/mmaster8/COSC436/010517/010517.js
//COSC 436
//Assignment 01/05/17
//Winter 2017

//load file to screen
function loadfileto()
{
	var loadfile = document.getElementById("loadfile").files[0];

	var fileReader = new FileReader();
	fileReader.onload = function(fileLoadedEvent)
	{
		var textFromFileLoaded = fileLoadedEvent.target.result;
		document.getElementById("displaytext").value = textFromFileLoaded;
	};
	fileReader.readAsText(loadfile, "UTF-8");
}

//save file to screen
function saveTextAsFile()
{
	var textToWrite = document.getElementById("displaytext").value;
	var textFileAsBlob = new Blob([textToWrite], {type:'text/plain'});
	var fileNameToSaveAs = document.getElementById("inputFileNameToSaveAs").value;

	var downloadLink = document.createElement("a");
	downloadLink.download = fileNameToSaveAs;
	downloadLink.innerHTML = "Download File";
	if (window.webkitURL != null)
	{
		// Chrome allows the link to be clicked
		// without actually adding it to the DOM.
		downloadLink.href = window.webkitURL.createObjectURL(textFileAsBlob);
	}
	else
	{
		// Firefox requires the link to be added to the DOM
		// before it can be clicked.
		downloadLink.href = window.URL.createObjectURL(textFileAsBlob);
		downloadLink.onclick = destroyClickedElement;
		downloadLink.style.display = "none";
		document.body.appendChild(downloadLink);
	}
	downloadLink.click();
}

//have a place where user can enter replacement string
replace()
{
	var text = document.getElementById("displaytext").innerHTML;
	var newtext = text.replace(/sample/g, '<b>hello</b>');
	newText = newText.replace(/&lt;b&gt;&lt;b&gt;/g,"&lt;b&gt;");
    newText = newText.replace(/&lt;\/b&gt;&lt;\/b&gt;/g,"&lt;/b&gt;");
	document.getElementById("displaytext").innerHTML = newtext;
}

//search string
function searchString(displaytext)
{
  var SearchTerm = document.getElementById("search").value;
  var TextSearch = document.getElementById("displaytext").value;
  var scan = document.getElementById("displaytext").value;
  var input = document.getElementById("displaytext");
  var innerHTML = input.innerHTML
  var index = innerHTML.indexOf(text);

  if (SearchTerm.length > 0 && TextSearch.indexOf(SearchTerm) > -1)
  {
    alert("String Found. Search Complete");
  }
  else
  {
    alert("No Data found in Text Area");
  }

  if (index >= 0)
  {
	  innerHTML = innerHTML.substring(0,index) + "<span class='highlight'>" +
		innerHTML.substring(index,index+displaytext.length) +
	  "</span>" + innerHTML.substring(index + displaytext.length);
	  input.innerHTML = innerHTML
  }
}

//scan for next occurrence of search string
function scan()
{
    var str = document.getElementById("displaytext").value;
    var n = str.scan(/sample/i);
    document.getElementById("demo").innerHTML = n;
}
