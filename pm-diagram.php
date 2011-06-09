<?php

require_once('NOLOH/NOLOH.php');

class Moving extends WebPage 
{

	public $pmPanel, $zoomHowPanel, $ctrlImg, $mouseImg, $zoomHowLabel, $closeHow, $mdmLogo, $zoomHowPlus, $howArrowsPanel, $howPanel, $nextArrowButton, $howZoomPanel, $arrowImg, $zoomArrowLabel, $backArrowButton, $homeLink, $aboutLink, $contactLink, $servicesLink, $headerPanel, $howResetPanel, $backResetButton, $zeroKey, $resetLabel, $mdmLabel, $closeHowButton, $zoomArrowButton, $backButton, $nextButton;
	
	
	function Moving()
	{
		parent::WebPage('Project Process Diagram - MDM');
		$this->CSSFiles->Add('http://massdistributionmedia.com/style.css');
		$this->CSSFiles->Add('http://pm.mdm.cc/pm-style.css');
		
		$this->Controls->Add($this->mdmLogo = new Image("http://mdm.cc/logo-layoutv1_mdm.png", '27%', 39, null, null));
		$this->mdmLogo->Layout= Layout::Center;
		$this->Controls->Add($this->pmPanel = new Panel(13, 177, 1673, 4535));
		$this->pmPanel->CSSClass = 'pm-diagram-bg';
		
		$nav = new Panel(0, 104, 1673, 30);
		
		$sections = array(
			'Home' => 'http://massdistributionmedia.com', 
			'About' => 'http://massdistributionmedia.com/about.html', 
			'Contact' => 'http://massdistributionmedia.com/contact.php', 
			'Products' => 'http://massdistributionmedia.com/portfolio.html');
		
				$this->Controls->AddRange($nav);

			
		foreach($sections as $section => $link)
			$nav->Controls->Add(new Link($link, $section, 0, 5))
				->Click = new ServerEvent($this, null, null, $section);
				
		$nav->Controls->AllCSSMarginRight = '31px';
		$nav->Controls->AllLayout = Layout::Relative;
		$nav->CSSTextAlign = 'center';
		
		$this->howTour();
	}
	
	   public function howTour()
        {
				$this->Controls['hP'] = $this->howPanel = new Panel(222, 133, 555, 303);
				$this->howPanel->CSSBorder='7px solid #777';
				$this->howPanel->CSSBorderRadius='7px';
				$this->howZoom();
                $this->howPanel->Shifts[] = Shift::Location($this->howPanel, null, null);
								
				$this->howPanel->Controls->Add($this->closeHow = new Button("Close", 499, 267, null, null));
				$this->closeHow->BackColor= '#E1E0E0';
				$this->closeHow->Color= '#333333';
				$this->closeHow->Buoyant= true;				
				$this->closeHow->CSSFontWeight= 'bold';
				$this->closeHow->CSSPadding= '4px';
				$this->closeHow->CSSBorderRadius= "2px";
				$this->closeHow->Click = new ServerEvent($this, 'closeZ');
			    
        }
		
		public function closeZ(){
					Animate::Size($this->howPanel, 17, 55, 777, 777, 303);
					Animate::Location($this->howPanel, 0, 77, 777);
					$this->closeHow->Opacity = 0;
					$this->ctrlImg->Visible = false;
					$this->zoomHowPlus->Visible = false;
					$this->nextButton->Visible = false;
					$this->mdmLabelHolder->Visible = false;
					$this->mouseImg->Visible = false;
					/* $this->howPanel->BackColor= "transparent"; */
					Animate::Property($this->howPanel, 'style.background', 'transparent', 777);
					Animate::Property($this->howPanel, 'style.borderWidth', 0, 777);
					Animate::Size($this->zoomHowLabel, 17, 55, 777, 555, 303);
					$this->zoomHowLabel->Cursor= Cursor::Hand;
					$this->howZoomPanel->CSSPosition = 'fixed';
					Animate::Size($this->howZoomPanel, 17, 55, 777, 777, 303);
					$this->zoomHowLabel->Text= 'H <br> E <br> L <br> P';
					$this->zoomHowLabel->CSSBorder ='2px solid #777';
                    $this->zoomHowLabel->Click = new ServerEvent($this, 'openHelp');
					/* $this->variableOne->CSSMargin =  $this->variableTwo->CSSMargin =  '133px 277px'; */
									
				}
				
		public function openHelp(){
				Animate::Size($this->howPanel, 555, 303, 777, 15, 55);
					Animate::Location($this->howPanel, 222, 133, 777);
					Animate::Opacity($this->closeHow, 100, 1333);
					$this->ctrlImg->Visible = true;
					$this->zoomHowPlus->Visible = true;
					$this->nextButton->Visible = true;
					$this->mdmLabel->Visible = true;
					$this->mouseImg->Visible = true;
					Animate::Property($this->howPanel, 'style.borderWidth', 7, 777);
					Animate::Size($this->zoomHowLabel, 555, 14, 777, 17, 55);
					$this->zoomHowLabel->Cursor= Cursor::Move;
					$this->howZoomPanel->CSSPosition = 'absolute';
					Animate::Size($this->howZoomPanel, 555, 303, 777, 17, 55);
					$this->zoomHowLabel->Text= 'Press "Control + Scroll" to Zoom.';
					$this->zoomHowLabel->CSSBorder ='0px solid #777';	
					$this->zoomHowLabel->Click = null;
			
		}
				
		public function zoomArrows(){
					$this->howZoomPanel->Visible = false;
					$this->howArrows();
				}
				
		public function arrowZoom(){
					$this->howArrowsPanel->Visible = false;
					$this->howZoomPanel->Visible = true;
				}
				
		public function arrowReset(){
					$this->howArrowsPanel->Visible = false;
					$this->howReset();
				}
				
		public function resetArrow(){
					$this->howArrowsPanel->Visible = true;
					$this->howResetPanel->Visible = false;
				}
				
				public function howZoom(){
				$this->howPanel->Controls->Add($this->howZoomPanel = new Panel(null, null, null, null));
				$this->howZoomPanel->CasWidth(555)
				->CasHeight(303)
				->CasCSSPadding('7px')
				->CasBackColor("#fff");
				
				$this->howZoomPanel->Controls->Add($this->mouseImg = new Image("http://gif.161.be/hand_mouse_wheel_scroll.gif", 10, 10, '50%', null));
				
                $this->howZoomPanel->Controls->Add($this->ctrlImg = new Image("http://png.161.be/ctrl_key.png", 39, 111, 145, null));
				$this->mouseImg->Layout= Layout::Right;
				$this->howZoomPanel->Controls->Add($this->zoomHowPlus = new Label("+"));
				$this->zoomHowPlus->CasCSSMargin('133px 239px') 
				->CasFontSize(33)
				->CasWidth('100%')
				->CasHeight('100%');
				
				$this->howZoomPanel->Controls->Add($this->zoomHowLabel = new Label('Press "Control + Scroll" to Zoom.'));
				$this->zoomHowLabel->CasCSSFontSize(17)
				->CasWidth('100%')
				->CasHeight(14)
				->CasCSSFontWeight('bold')
				->CasCSSPadding('11px 13px')
				->CasbackColor('#F1F1F1') 
				->CasCSSDisplay('block') 
				->CasCursor(Cursor::Move);

				$this->howZoomPanel->Controls->Add($this->mdmLabel = new Label("MDM"));
				$this->mdmLabel->CasSetLocation(513, 13)
				->CasCSSFontSize(17)
				->CasHeight(14)
				->CasCSSFontWeight('bold')
				->CasColor('#777')
				->CasOpacity(7)
				->CasFont('Impact, Arial')
				->CasCursor(Cursor::Move);
				
				$this->howZoomPanel->Controls->Add($this->nextButton = new Button("Next", 449, 267, null, null));
				$this->nextButton->CasBackColor('#E1E0E0')
				->CasColor('#333333')
				->CasCSSFontWeight('bold')
				->CasCSSPadding('4px')
				->CSSBorderRadius("2px");
				$this->nextButton->Click = new ServerEvent($this, 'zoomArrows');
				
			/*	if($howPanel->Left = -555){
				System::Alert('Press "Control + Scroll" to Zoom.');
					}
				*/
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
				
				$this->howArrowsPanel->Controls->Add($this->mdmLabel = new Label("MDM"));
				$this->mdmLabel->SetLocation(513, 13);
				$this->mdmLabel->CSSFontSize= 17;
				$this->mdmLabel->Height= 14;
				$this->mdmLabel->CSSFontWeight= 'bold';
				$this->mdmLabel->Color= '#777';
				$this->mdmLabel->Opacity=7;
				$this->mdmLabel->Font='Impact, Arial';
				$this->mdmLabel->Cursor= Cursor::Move;
				
				$this->howArrowsPanel->Controls->Add($this->nextArrowButton = new Button("Next", 449, 267, null, null));
				$this->nextArrowButton->BackColor= '#E1E0E0';
				$this->nextArrowButton->Color= '#333333';
				$this->nextArrowButton->CSSFontWeight= 'bold';
				$this->nextArrowButton->CSSPadding= '4px';
				$this->nextArrowButton->CSSBorderRadius= "2px";
				$this->nextArrowButton->Click = new ServerEvent($this, 'arrowReset');
				
				$this->howArrowsPanel->Controls->Add($this->backArrowButton = new Button("Back", 397, 267, null, null));
				$this->backArrowButton->BackColor= '#E1E0E0';
				$this->backArrowButton->Color= '#333333';
				$this->backArrowButton->CSSFontWeight= 'bold';
				$this->backArrowButton->CSSPadding= '4px';
				$this->backArrowButton->CSSBorderRadius= "2px";
				$this->backArrowButton->Click = new ServerEvent($this, 'arrowZoom');
					
				}			
				
				public function howReset(){
				$this->howPanel->Controls->Add($this->howResetPanel = new Panel(null, null, null, null));
				$this->howResetPanel->Width= 555;
				$this->howResetPanel->Height= 303;
				$this->howResetPanel->BackColor= '#fff';
				$this->howResetPanel->CSSPadding= '7px';
				
				
				$this->howResetPanel->Controls->Add($this->zeroKey = new Image("http://png.161.be/zero_key.png", 393, 113, null, 81));
								
                $this->howResetPanel->Controls->Add($this->ctrlImg = new Image("http://png.161.be/ctrl_key.png", 77, 111, 145, null));
				$this->howResetPanel->Controls->Add($this->zoomHowPlus = new Label("+"));
				$this->zoomHowPlus->CSSMargin= '133px 277px'; 
				$this->zoomHowPlus->FontSize= 33;
				$this->zoomHowPlus->Width= '100%';
				$this->zoomHowPlus->Height= '100%';

				$this->howResetPanel->Controls->Add($this->resetLabel = new Label("Press \"Control + 0\" to reset zoom."));
				$this->resetLabel->CSSFontSize= 17;
				$this->resetLabel->Width= '100%';
				$this->resetLabel->Height= 14;
				$this->resetLabel->CSSFontWeight= 'bold';
				$this->resetLabel->CSSPadding= '11px 13px';
				$this->resetLabel->BackColor= '#F1F1F1'; 
				$this->resetLabel->CSSDisplay= 'block'; 
				$this->resetLabel->Cursor= Cursor::Move;
				
				$this->howResetPanel->Controls->Add($this->mdmLabel = new Label("MDM"));
				$this->mdmLabel->SetLocation(513, 13);
				$this->mdmLabel->CSSFontSize= 17;
				$this->mdmLabel->Height= 14;
				$this->mdmLabel->CSSFontWeight= 'bold';
				$this->mdmLabel->Color= '#777';
				$this->mdmLabel->Opacity=7;
				$this->mdmLabel->Font='Impact, Arial';
				$this->mdmLabel->Cursor= Cursor::Move;

				
				$this->howResetPanel->Controls->Add($this->backResetButton = new Button("Back", 449, 267, null, null));
				$this->backResetButton->BackColor= '#E1E0E0';
				$this->backResetButton->Color= '#333333';
				$this->backResetButton->CSSFontWeight= 'bold';
				$this->backResetButton->CSSPadding= '4px';
				$this->backResetButton->CSSBorderRadius= "2px";
				$this->backResetButton->Click = new ServerEvent($this, 'resetArrow');
					
				}			

}
	
?>