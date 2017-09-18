/*
Michael Masterson
http://people.emich.edu/mmaster8/COSC436/012617/012617.js
COSC 436
Assignment 01/26/17
Winter 2017

This code is in the head of the 012617js.html file
created file for easiness to see javascript code.
*/

function calculateTotal ()
{
    var pen = parseInt(document.getElementById("penquantity").value);
    var pencil = parseInt(document.getElementById("pencilquantity").value);
    var paper = parseInt(document.getElementById("paperquantity").value);
    var staple = parseInt(document.getElementById("staplequantity").value);
    var penTotal = pen * 2;
    var pencilTotal = pencil * 1;
    var paperTotal = paper * 30;
    var stapleTotal = staple * 50;
    var realTotal = penTotal + pencilTotal + paperTotal + stapleTotal;
    document.getElementById("test").value=realTotal;
    }
