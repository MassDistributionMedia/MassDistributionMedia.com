<?php

require_once('NOLOH/NOLOH.php');

class Moving extends WebPage 
{

	private $MovingPanel, $zoomHowPanel, $ctrlImg, $mouseImg, $zoomHowLabel, $closeZoomHow, $mdmLogo;
	
	function Moving()
	{
		parent::WebPage('Project Process Diagram - MDM');
		$this->CSSFiles->Add('http://massdistributionmedia.com/style.css');
		$this->CSSFiles->Add('http://pm.mdm.cc/pm-style.css');
		$this->Controls->Add($this->mdmLogo = new Image("http://mdm.cc/logo-layoutv1_mdm.png", '50%', 13, null, null));
		$this->Controls->Add($this->MovingPanel = new Panel(13, 77, 1673, 4535));
		$this->MovingPanel->CSSClass = 'pm-diagram-bg';
		
		  $this->zoomHow();
	}
	
	   public function zoomHow()
        {
                $this->Controls->Add($this->zoomHowPanel = new Panel('50%', '50%', 333, 333));
				$this->zoomHowPanel->Controls->Add($this->mouseImg = new Image("http://gif.161.be/hand_mouse_wheel_scroll.gif", 10, 10, null, null));
                $this->zoomHowPanel->Controls->Add($this->ctrlImg = new Image("http://png.161.be/ctrl_key.png", 13, 33, '50%', null));
				$this->zoomHowPanel->Controls->Add($this->zoomHowLabel = new Label("Yo it's a label dogg"));
				$this->zoomHowPanel->Controls->Add($this->closeZoomHow = new Button("Close"));
				
				$this->closeZoomHow->Click = new ServerEvent($this, 'closeZ');
			    $this->zoomHowPanel->Border= "2pm solid pink";
                $this->zoomHowPanel->Shifts[] = Shift::Location($this->zoomHowPanel);
        }
		
		public function closeZ(){
					$this->zoomHowPanel->Leave();
				}
				

}
	
?>