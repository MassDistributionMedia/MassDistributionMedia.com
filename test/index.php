<?php
/* HelloWorld
An example demonstrating an Alert of HelloWorld
Difficulty level: Beginner */

//Includes NOLOH for your project. This is all you need to do to use NOLOH.
require_once('/NOLOH.php');

/* Your application must have one class that extends WebPage,
   this will be used as the starting point for your application. */
class HelloWorld extends WebPage
{
	/* Constructor of your class, this automatically gets called
	   when a new instance of HelloWorld is created. NOLOH will create
	   this initial instance for you. */
	function HelloWorld()
	{
		/* Calls the WebPage's constructor. This must be done to
		   ensure that WebPage is properly instantiated. The 
		   parameter specifies a string to be displayed in the
		   browser's title bar on top. */
		parent::WebPage('Hello World in NOLOH');
		/* Calls NOLOH's built-in Alert function, which displays
		   text and waits for a user to click "OK." Some programming
		   also languages refer to this concept as a "MessageBox." */
		System::Alert('Hello World');
	}
}
?>