# RedirectTest

## This is for learning purposes...

Tests the redirect functionality of the header method

This repository holds the files to a simple test: test the reditect functionality when the header method is included in a php script.

How does this work? Simple!

Note: all files necessary (which will essentially be 3) are included to test this functionality.

An HTML form that contains two form fields is sent via the POST method to a php file defined in the action. However, a redirect is also specified in the opening php script that conditionally executes when the form is submitted. 

The issue: If I set the action attribute to an empty string, then the redirect works! However, when I add a file for the php data to be sent to, the client directs to the file defined in the action attribute and not the redirect specified in the header method.

The goal is to redirect the user to a web page after the user submits form data to a php file.