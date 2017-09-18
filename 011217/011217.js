//Michael Masterson
//http://people.emich.edu/mmaster8/COSC436/011217/011217.js
//COSC 436
//Assignment 01/12/17
//Winter 2017

//variables global
var test;
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
	if (window.webkitURL !== null)
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
function replace()
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
  var innerHTML = input.innerHTML;
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
	  input.innerHTML = innerHTML;
  }
}

//scan for next occurrence of search string
function scan()
{
    var str = document.getElementById("displaytext").value;
    var n = str.search("searchString(displaytext)");
    document.getElementById("demo").innerHTML = n;
}
// When the user enters a search string, create multiple regular expression
//patterns based off of that input.
function generateregex()
{
	test = ["sample", "test", "join", "center"];
	var regexp = new RegExp(test.join("|"));

document.getElementById("demo1").innerHTML = regexp;
}

//drop a single letter from the original text string
function removechar()
{
	var str = "sample";
	str = str.slice(0,-1);
	var str2 = str;
	 str2 = str2.slice(0,-2);
	 var str3 = str;
 	 str3 = str3.slice(0,-3);
	 var str4 = str;
 	 str4 = str4.slice(0,-4);
	 var str5 = str;
 	 str5 = str5.slice(0,-5);

	document.getElementById("demo2").innerHTML = str2;
	document.getElementById("demo4").innerHTML = str3;
	document.getElementById("demo5").innerHTML = str4;
	document.getElementById("demo6").innerHTML = str5;
	document.getElementById("demo7").innerHTML = str;
}

//swap neighboring pairs
function swap()
{
	var str = test;

	var array = [];

	array = str.join(str);

	//replace with swap
	var temp = array[0];
	array[0] = array[1];
	array[1] = temp;

	var newstr = array;
	document.getElementById("demo3").innerHTML = array;
}
