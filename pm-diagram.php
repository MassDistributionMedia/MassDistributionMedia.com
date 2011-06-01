<?php

require_once('NOLOH/NOLOH.php');

class Moving extends WebPage 
{

	private $MovingPanel, $zoomHow, $ctrlImg;
	
	function Moving()
	{
		parent::WebPage('Project Process Diagram - MDM');
		$this->CSSFiles->Add('http://massdistributionmedia.com/style.css');
		$this->CSSFiles->Add('http://pm.mdm.cc/pm-style.css');
		$this->Controls->Add($this->MovingPanel = new Panel(13, 13, 1673, 4535));
		$this->MovingPanel->CSSClass = 'pm-diagram-bg';
		
		  $this->zoomHow();
	}
	
	  function zoomHow()
        {
                $this->Controls->Add($this->zoomHow = new Panel(77, 77, 333, 333));
                $this->zoomHow->CSSClass = 'zoomHow';
                $this->zoomHow->Controls->Add($this->ctrlImg = new Image("http://png.161.be/ctrl_key.png", 10, 10, '33%', '33%'));
                $this->zoomHow->Shifts[] = Shift::Location($this->zoomHow);
        }

}
	
?>