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
		$this->Controls->Add($this->mdmLogo = new Image("http://mdm.cc/logo-layoutv1_mdm.png", null, 13, null, null));
		$this->mdmLogo->CSSClass = 'mdmLogo';
		$this->mdmLogo->CSSMargin = "auto";
		$this->Controls->Add($this->MovingPanel = new Panel(13, 77, 1673, 4535));
		$this->MovingPanel->CSSClass = 'pm-diagram-bg';
		
		  $this->zoomHow();
	}
	
	   public function zoomHow()
        {
                $this->Controls->Add($this->zoomHowPanel = new Panel(null, '33%', 555, 377));
				$this->zoomHowPanel->CSSClass = "zoomHowPanel";
				$this->zoomHowPanel->backColor = "#fff";
				$this->zoomHowPanel->Controls->Add($this->mouseImg = new Image("http://gif.161.be/hand_mouse_wheel_scroll.gif", 10, 10, null, null));
                $this->zoomHowPanel->Controls->Add($this->ctrlImg = new Image("http://png.161.be/ctrl_key.png", 13, 33, '40%', null));
				$this->mouseImg->Layout= Layout::Right;
				$this->zoomHowPanel->Controls->Add($this->zoomHowLabel = new Label("Yo it's a label dogg"));
				$this->zoomHowPanel->Width = "99px";
				$this->zoomHowPanel->Controls->Add($this->closeZoomHow = new Button("Close", null, 3, null, null));
				$this->zoomHowPanel->Layout= Layout::Center;
				$this->closeZoomHow->Layout= Layout::Right;
				
				$this->closeZoomHow->Click = new ServerEvent($this, 'closeZ');
			    $this->zoomHowPanel->CSSBorder= "1px solid #777";
                $this->zoomHowPanel->Shifts[] = Shift::Location($this->zoomHowPanel);
        }
		
		public function closeZ(){
					$this->zoomHowPanel->Leave();
				}
				

}
	
?>