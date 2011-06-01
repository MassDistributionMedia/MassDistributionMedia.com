<?php

require_once('NOLOH/NOLOH.php');

class Moving extends WebPage 
{

	private $MovingPanel, $zoomHowPanel, $ctrlImg, $mouseImg, $zoomHowLabel, $closeZoomHow, $zoomHow;
	
	function Moving()
	{
		parent::WebPage('Project Process Diagram - MDM');
		$this->CSSFiles->Add('http://massdistributionmedia.com/style.css');
		$this->CSSFiles->Add('http://pm.mdm.cc/pm-style.css');
		$this->Controls->Add($this->MovingPanel = new Panel(13, 13, 1673, 4535));
		$this->MovingPanel->CSSClass = 'pm-diagram-bg';
		
		  $this->zoomHow();
	}
	
	   public function zoomHow()
        {
                $this->Controls->Add($this->zoomHowPanel = new Panel(77, 77, 333, 333));
                $this->zoomHow->CSSClass = 'zoomHow';
				$this->zoomHowPanel->Controls->Add($this->mouseImg = new Image("http://gif.161.be/hand_mouse_wheel_scroll.gif", 10, 10, null, null));
                $this->zoomHowPanel->Controls->Add($this->ctrlImg = new Image("http://png.161.be/ctrl_key.png", 13, 33, '50%', null));
				$this->zoomHowPanel->Controls->Add($this->zoomHowLabel = new Label("Yo it's a label dogg"));
				$this->zoomHowPanel->Controls->Add($this->closeZoomHow = new Button("Close"));
				
				$this->$closeZoomHow->Click = new ServerEvent($this, 'closeZ');
			/* $this->zoomHow->Controls->Add::Border("2pm solid pink"); */
                $this->zoomHowPanel->Shifts[] = Shift::Location($this->zoomHowPanel);
        }
		
		public function closeZ(){
					$this->zoomHowPanel->Leave();
				}
				

}
	
?>