<!doctype html>
<html>
<head>
     <link rel="Stylesheet" type="text/css" href="Stylesheet.css">
</head>
<body>

<div class="answer">


	
"The best way to avoid this type of exception is to always check for null when you did not create the object yourself."
 If the caller passes null, but null is not a valid argument for the method, then it's correct to throw the exception back at the caller because it's the caller's fault.
 Silently ignoring invalid input and doing nothing in the method is extremely poor advice because it hides the problem
 </div>
 </body>
 </html>