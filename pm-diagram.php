<?php

require_once('NOLOH/NOLOH.php');

/* Moving
An example demonstrating Shift and Animate
Difficulty level: Advanced */

class Moving extends WebPage 
{

	
	// This is the panel that will be moved around
	private $MovingPanel, $zoomHow;
	
	function Moving()
	{
		parent::WebPage('Project Process Diagram - MDM');
		$this->CSSFiles->Add('http://massdistributionmedia.com/style.css');
		$this->CSSFiles->Add('http://pm.mdm.cc/pm-style.css');
		// Instantiate our moving panel and give it some basic visual properties: a background color and a mouse cursor
		$this->Controls->Add($this->MovingPanel = new Panel(13, 13, 1673, 4535));
		$this->MovingPanel->CSSClass = 'pm-diagram-bg';
		$this->MovingPanel->Cursor = Cursor::URL("http://gif.161.be/grab.gif");
		/* The following line allows the user to drag the panel around.
		   It is read as "the MovingPanel Shifts its own Location."
		   Whenever a Shift static (rather than Shift::With, which we'll get to later) is added to a Control's Shifts
		   ArrayList, it is always understood that this is shifting while the mouse is held down, 
		   creating a dragging behavior; i.e., it will start when a user's left mouse button is pressed, 
		   and stop when that button is released. */
		$this->MovingPanel->Shifts[] = Shift::Location($this->MovingPanel);
		
		  $this->zoomHow();
		
	}
	
	    function zoomHow()
        {
                $this->Controls->Add($this->zoomHow = new Panel(77, 77, 333, 333));
                $this->zoomHow->CSSClass = 'zoomHow';
                $ctrlImg = new Image("http://png.161.be/ctrl_key.png", 10, 10, null, null);
                $this->Controls->Add($ctrlImg);
				$ctrlImg->Shifts[] = Shift::Location($this->zoomHow);
        }

}


                
       
		
?>