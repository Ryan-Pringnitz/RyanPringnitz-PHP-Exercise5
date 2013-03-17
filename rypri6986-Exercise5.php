<!DOCTYPE html PUBLIC "-//W3C/DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
/*************************************
* Programmer: Ryan Pringnitz
* Bronco NetID: rypri6986
* Exercise #5
* CIS 2800: Internet Programming
* Spring 2013
* Due date: 03/17/13
* Date completed: 03/14/13
*************************************
* Program Explanation
*
* We make an array out of a text file and display that array as text on a web page.
**************************************/

-->
<html xmlns="http://wwww.w3.org/1999/xhtml">
<head>
<title>Throw some arrays on it! </title>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
</head>
<body>
<h2>I have created an array for you that opens a text file and displays the output</h2>
<?PHP

$file_handle = fopen("exercise5.txt", "rb"); // variable name of $file_handle, fopen to open exercise5.txt
// and rb stands for read binary.

while (!feof($file_handle) ) {
//feof looks for the end of the array inside our variable $file_handle 
$line_of_text = fgets($file_handle); // the variable line of text performs the fget function to retrieve the array from $file_handle
$parts = explode("|", $line_of_text); //we explode $line_of_text with the delimiter set to be | and name the explosion... $parts

echo("<pre>\n");
print_r($parts); //print the explosion!
echo("</pre>\n");  
}

fclose($file_handle); //the file pointed by $file_handle is closed.

?>
</body>
</html>
