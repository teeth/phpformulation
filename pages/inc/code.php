<div id="output">

<?php

$lesson = $_GET['lesson'];

if($lesson) {
include('lesson/'.$lesson.'.html');
}

else {
echo "<h1>Welcome to PHPFormulation</h1>";

?>

<div id="cont">
Hello. The website you are viewing will provide you with a tutorial on how to use a web form to send<br>
emails using PHP scripting language. There will be seven lessons to go through and each of them will<br>
provide you with a line by line description of the functions of the code. Sending emails using a web<br>
form will allow you to receive information, enquires and messages from the users of your website.<br>
This can beneficial if you have a website and you’re interested in getting some kind of output from<br>
your visitors. Below is a brief introduction to a web form and PHP.<br>
<br>
</div>

<h3>Web Form</h3>
<div id="cont">
A Web Form is used on a website to allow user input to be submitted to a server for processing. A <br>
Web Form can be customised with particular parameters that the webmaster would like to receive<br>
from the visitor. So a web form can be used to enter shipping and credit card details to place orders<br>
or it can be simply be used for a contact us page. So the visitor of the website fills out the provided<br>
form on the webpage. The web form contains such things as:<br>

<ul>
<li>Input fields for visitors to provide feedback, which include text fields, password fields, check<br>
boxes, radio buttons, sliders and more.</li>
<li>Labels to tell the user what the related input fields mean. Actions buttons to perform an action,<br>
such as submitting the form.</li>
<li>Messages to give feedback to the visitor based on their input.</li>
<li>It can also contain validation to ensure that the data submitted by the visitor is acceptable<br>
parameters.</li>
</ul>
</div>

<h3>PHP (Hypertext Preprocessor)</h3>
<div id="cont">
PHP is a server-side scripting language for creating dynamic web pages. You create pages with PHP<br>
and HTML. When a visitor opens the page, the server processes the PHP commands and then sends<br>
the results to the visitor's browser. PHP is Open Source and cross-platform. PHP runs on Windows<br>
NT and many Unix versions, and it can be built as an Apache module and as a binary that can run as a<br>
CGI (common gateway interface).<br>
<br>
</div>

<?php
echo "<center><a href='index.php?lesson=1'><img src='./images/bg.png' alt='START TUTORIAL HERE' border='0' style='border:0px'/></a></center>";
}
?>