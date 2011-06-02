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
                $this->Controls->Add($this->zoomHowPanel = new Panel(222, '17%', 555, 303));
				$this->zoomHowPanel->CSSClass = "zoomHowPanel";
				$this->zoomHowPanel->backColor = "#fff";
				$this->zoomHowPanel->CSSBorder= "7px solid #777";
			    $this->zoomHowPanel->CSSBorderRadius= "7px";
                $this->zoomHowPanel->Shifts[] = Shift::Location($this->zoomHowPanel);
				
				$this->zoomHowPanel->Controls->Add($this->mouseImg = new Image("http://gif.161.be/hand_mouse_wheel_scroll.gif", 10, 10, '50%', null));
				
                $this->zoomHowPanel->Controls->Add($this->ctrlImg = new Image("http://png.161.be/ctrl_key.png", 39, 111, 145, null));
				$this->mouseImg->Layout= Layout::Right;
				$this->zoomHowPanel->Controls->Add($this->zoomHowPlus = new Label("+"));
				$this->zoomHowPlus->CSSMargin= '133px 232px'; 
				$this->zoomHowPlus->FontSize= 33;
				$this->zoomHowPlus->Width= '100%';
				$this->zoomHowPlus->Height= '100%';

				$this->zoomHowPanel->Controls->Add($this->zoomHowLabel = new Label("Press \"Control + Scroll\" to Zoom."));
				$this->zoomHowLabel->CSSFontSize= 17;
				$this->zoomHowLabel->Width= '100%';
				$this->zoomHowLabel->Height= 14;
				$this->zoomHowLabel->CSSFontWeight= 'bold';
				$this->zoomHowLabel->CSSPadding= '11px 13px';
				$this->zoomHowLabel->backColor= '#F1F1F1'; 
				$this->zoomHowLabel->CSSDisplay= 'block'; 
				/* $grabImg = 'http://gif.mdm.cc/grab.gif';
				$this->zoomHowLabel->Cursor= URL($grabImg); */
				
				$this->zoomHowPanel->Controls->Add($this->closeZoomHow = new Button("Close", 505, 262, null, null));
				$this->closeZoomHow->BackColor= '#E1E0E0';
				/* $this->closeZoomHow->Border= '1px solid #888'; */
				$this->closeZoomHow->CSSPadding= '4px';
				$this->closeZoomHow->CSSBorderRadius= "2px";
				$this->closeZoomHow->Click = new ServerEvent($this, 'closeZ');
			    
        }
		
		public function closeZ(){
					$this->zoomHowPanel->Leave();
				}
				

}
	
?>