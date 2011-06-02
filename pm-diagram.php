<?php

error_reporting(E_ALL & ~E_NOTICE);
ini_set('display_errors', '1');

require_once('NOLOH/NOLOH.php');

class Moving extends WebPage 
{

	private $MovingPanel, $zoomHowPanel, $ctrlImg, $mouseImg, $zoomHowLabel, $closeZoomHow, $mdmLogo, $zoomHowPlus, $nextButton,  $howArrowsPanel, $howPanel, $nextArrowButton, $howZoomPanel, $arrowImg, $zoomArrowLabel, $backArrowButton, $homeLink, $aboutLink, $contactLink, $servicesLink;
	
	
	function Moving()
	{
		parent::WebPage('Project Process Diagram - MDM');
		$this->CSSFiles->Add('http://massdistributionmedia.com/style.css');
		$this->CSSFiles->Add('http://pm.mdm.cc/pm-style.css');
		
		$this->Controls['homeLink'] = $this->homeLink = new Link('http://massdistributionmedia.com', 'Home', 31, 116, 80, 24);
		$this->Controls['aboutLink'] = $this->aboutLink = new Link('http://massdistributionmedia.com', 'About', 31, 116, 80, 24);
		$this->Controls['contactLink'] = $this->contactLink = new Link('http://massdistributionmedia.com', 'Contact', 31, 116, 80, 24);
		$this->Controls['servicesLink'] = $this->servicesLink = new Link('http://massdistributionmedia.com', 'Products', 31, 116, 80, 24);
		$this->homeLink->CSSDisplay = 'block';
		$this->aboutLink->CSSDisplay = 'block';
		$this->contactLink->CSSDisplay = 'block';
		$this->servicesLink->CSSDisplay = 'block';
		
	/*	$this->homeLink->Layout = Layout::Relative;
		$this->aboutLink->Layout = Layout::Relative;
		$this->contactLink->Layout = Layout::Relative;
		$this->servicesLink->Layout = Layout::Relative; */
		
		$this->homeLink->CSSMarginLeft = $this->homeLink->CSSMarginRight = System::Auto;
		$this->aboutLink->CSSMarginLeft = $this->aboutLink->CSSMarginRight = System::Auto;
		$this->contactLink->CSSMarginLeft = $this->contactLink->CSSMarginRight = System::Auto;
		$this->servicesLink->CSSMarginLeft = $this->servicesLink->CSSMarginRight = System::Auto;
		
		$this->Controls->Add($this->mdmLogo = new Image("http://mdm.cc/logo-layoutv1_mdm.png", '27%', 39, null, null));
		$this->mdmLogo->Layout= Layout::Center;
		$this->Controls->Add($this->MovingPanel = new Panel(13, 177, 1673, 4535));
		$this->MovingPanel->CSSClass = 'pm-diagram-bg';
		
		$this->howTour();
	}
	
	   public function howTour()
        {
				$this->Controls['hP'] = $this->howPanel = new Panel(222, 133, 555, 303); 
				$this->howPanel->CSSBorder= "7px solid #777";
				$this->howPanel->CSSBorderRadius= "7px";
				$this->howZoom();
                $this->howPanel->Shifts[] = Shift::Location($this->howPanel);
				
				$this->howPanel->Controls->Add($this->closeZoomHow = new Button("Close", 499, 267, null, null));
				$this->closeZoomHow->BackColor= '#E1E0E0';
				$this->closeZoomHow->Color= '#333333';
				$this->closeZoomHow->Buoyant= true;				
				$this->closeZoomHow->CSSFontWeight= 'bold';
				$this->closeZoomHow->CSSPadding= '4px';
				$this->closeZoomHow->CSSBorderRadius= "2px";
				$this->closeZoomHow->Click = new ServerEvent($this, 'closeZ');
			    
        }
		
		public function closeZ(){
					$this->howPanel->Leave();
				}
				
		public function nextArrows(){
					$this->howZoomPanel->Visible = false;
					$this->howArrows();
				}
				
		public function arrowZoom(){
					$this->howArrowsPanel->Visible = false;
					$this->howZoomPanel->Visible = true;
				}
				
				public function howZoom(){
				$this->howPanel->Controls->Add($this->howZoomPanel = new Panel(null, null, null, null));
				$this->howZoomPanel->Width= 555;
				$this->howZoomPanel->Height= 303;
				$this->howZoomPanel->CSSPadding= '7px';
				$this->howZoomPanel->backColor = "#fff";
				
				$this->howZoomPanel->Controls->Add($this->mouseImg = new Image("http://gif.161.be/hand_mouse_wheel_scroll.gif", 10, 10, '50%', null));
				
                $this->howZoomPanel->Controls->Add($this->ctrlImg = new Image("http://png.161.be/ctrl_key.png", 39, 111, 145, null));
				$this->mouseImg->Layout= Layout::Right;
				$this->howZoomPanel->Controls->Add($this->zoomHowPlus = new Label("+"));
				$this->zoomHowPlus->CSSMargin= '133px 239px'; 
				$this->zoomHowPlus->FontSize= 33;
				$this->zoomHowPlus->Width= '100%';
				$this->zoomHowPlus->Height= '100%';

				$this->howZoomPanel->Controls->Add($this->zoomHowLabel = new Label("Press \"Control + Scroll\" to Zoom."));
				$this->zoomHowLabel->CSSFontSize= 17;
				$this->zoomHowLabel->Width= '100%';
				$this->zoomHowLabel->Height= 14;
				$this->zoomHowLabel->CSSFontWeight= 'bold';
				$this->zoomHowLabel->CSSPadding= '11px 13px';
				$this->zoomHowLabel->backColor= '#F1F1F1'; 
				$this->zoomHowLabel->CSSDisplay= 'block'; 
				$this->zoomHowLabel->Cursor= Cursor::Move;
				
				$this->howZoomPanel->Controls->Add($this->nextButton = new Button("Next", 449, 267, null, null));
				$this->nextButton->BackColor= '#E1E0E0';
				$this->nextButton->Color= '#333333';
				$this->nextButton->CSSFontWeight= 'bold';
				$this->nextButton->CSSPadding= '4px';
				$this->nextButton->CSSBorderRadius= "2px";
				$this->nextButton->Click = new ServerEvent($this, 'nextArrows');
					
				}
				
				public function howArrows(){
				$this->howPanel->Controls->Add($this->howArrowsPanel = new Panel(null, null, null, null));
				$this->howArrowsPanel->Width= 555;
				$this->howArrowsPanel->Height= 303;
				$this->howArrowsPanel->BackColor= '#fff';
				$this->howArrowsPanel->CSSPadding= '7px';
				$this->howArrowsPanel->Controls->Add($this->arrowImg = new Image("http://png.161.be/dec-arrow-keys.png", 137, 57, '50%', null));

				$this->howArrowsPanel->Controls->Add($this->zoomArrowLabel = new Label("Use the arrow keys to navigate the diagram."));
				$this->zoomArrowLabel->CSSFontSize= 17;
				$this->zoomArrowLabel->Width= '100%';
				$this->zoomArrowLabel->Height= 14;
				$this->zoomArrowLabel->CSSFontWeight= 'bold';
				$this->zoomArrowLabel->CSSPadding= '11px 13px';
				$this->zoomArrowLabel->BackColor= '#F1F1F1'; 
				$this->zoomArrowLabel->CSSDisplay= 'block'; 
				$this->zoomArrowLabel->Cursor= Cursor::Move;
				
				$this->howArrowsPanel->Controls->Add($this->nextArrowButton = new Button("Next", 449, 267, null, null));
				$this->nextArrowButton->BackColor= '#E1E0E0';
				$this->nextArrowButton->Color= '#333333';
				$this->nextArrowButton->CSSFontWeight= 'bold';
				$this->nextArrowButton->CSSPadding= '4px';
				$this->nextArrowButton->CSSBorderRadius= "2px";
				
				$this->howArrowsPanel->Controls->Add($this->backArrowButton = new Button("Back", 449, 267, null, null));
				$this->backArrowButton->BackColor= '#E1E0E0';
				$this->backArrowButton->Color= '#333333';
				$this->backArrowButton->CSSFontWeight= 'bold';
				$this->backArrowButton->CSSPadding= '4px';
				$this->backArrowButton->CSSBorderRadius= "2px";
				$this->backArrowButton->Click = new ServerEvent($this, 'arrowZoom');
					
				}				

}
	
?>