<?php

require_once('NOLOH/NOLOH.php');

class Moving extends WebPage 
{

	private $MovingPanel, $zoomHowPanel, $ctrlImg, $mouseImg, $zoomHowLabel, $closeZoomHow, $mdmLogo, $zoomHowPlus;
	
	function Moving()
	{
		parent::WebPage('Project Process Diagram - MDM');
		$this->CSSFiles->Add('http://massdistributionmedia.com/style.css');
		$this->CSSFiles->Add('http://pm.mdm.cc/pm-style.css');
		$this->Controls->Add($this->mdmLogo = new Image("http://mdm.cc/logo-layoutv1_mdm.png", null, 33, null, null));
		$mdmLogo->Layout= Layout::Center;
		$this->Controls->Add($this->MovingPanel = new Panel(13, 111, 1673, 4535));
		$this->MovingPanel->CSSClass = 'pm-diagram-bg';
		
		  $this->zoomHow();
	}
	
	   public function zoomHow()
        {
                $this->Controls->Add($this->zoomHowPanel = new Panel(222, '19%', 555, 303));
				$this->zoomHowPanel->CSSClass = "zoomHowPanel";
				$this->zoomHowPanel->backColor = "#fff";
				$this->zoomHowPanel->Controls->Add($this->mouseImg = new Image("http://gif.161.be/hand_mouse_wheel_scroll.gif", 10, 10, '50%', null));
                $this->zoomHowPanel->Controls->Add($this->ctrlImg = new Image("http://png.161.be/ctrl_key.png", 13, 111, 145, null));
				$this->mouseImg->Layout= Layout::Right;
				$this->zoomHowPanel->Controls->Add($this->zoomHowPlus = new Label("+"));
				$this->zoomHowPlus->Align= Layout::Center;
				$this->zoomHowPlus->CSSMarginTop= 111; 
				$this->zoomHowPlus->FontSize= 33;
				$this->zoomHowPlus->Width= '100%';
				$this->zoomHowPlus->Height= '100%';

				$this->zoomHowPanel->Controls->Add($this->zoomHowLabel = new Label("Yo it's a label dogg"));
				$this->zoomHowPanel->Controls->Add($this->closeZoomHow = new Button("Close", null, 3, null, null));
				$this->closeZoomHow->Layout= Layout::Right;
				
				$this->closeZoomHow->Click = new ServerEvent($this, 'closeZ');
			    $this->zoomHowPanel->CSSBorder= "7px solid #777";
			    $this->zoomHowPanel->CSSBorderRadius= "7px";
                $this->zoomHowPanel->Shifts[] = Shift::Location($this->zoomHowPanel);
        }
		
		public function closeZ(){
					$this->zoomHowPanel->Leave();
				}
				

}
	
?>