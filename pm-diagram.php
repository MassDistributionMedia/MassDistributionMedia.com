<?php

require_once('NOLOH/NOLOH.php');

class Moving extends WebPage 
{

    public $ctrlImg, $mouseImg, $closeHow, $mdmLogo, $zoomHowPlus,
    $arrowImg, $zoomPanel, $arrowPanel, $resetPanel, $zeroKey, 
    $nav1, $zoomLabel, $arrowLabel, $resetLabel, $mdmLabel, $howPanel, $pmPanel,
    $zoomArrowButton, $arrowResetButton, $resetArrowButton, $arrowZoombutton;
	
	
	public function Moving()
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
		
        $group = new Group();
        
        $this->Controls['hP'] = $this->howPanel = new Panel(222, 133, 555, 303);
        $this->howPanel->CasCSSBorder('7px solid #777')
    			->CasCSSBorderRadius('7px');
        $this->howPanel->Shifts[] = Shift::Location($this->howPanel, null, null);
        
        $this->howPanel->Controls->Add($this->mdmLabel = new Label("MDM"));
    			$this->mdmLabel->CasSetLocation(513, 13)
				->CasCSSFontSize(17)
				->CasHeight(14)
				->CasCSSFontWeight('bold')
				->CasColor('#777')
				->CasOpacity(7)
				->CasFont('Impact, Arial')
				->CasCursor(Cursor::Move);
								
		$this->howPanel->Controls->Add($this->closeHow = new Button("Close", 499, 267, null, null));
		$this->closeHow->CasBackColor('#E1E0E0')
				->CasColor('#333333')
				->CasBuoyant(true)			
				->CasCSSFontWeight('bold')
				->CasCSSPadding('4px')
				->CasCSSBorderRadius("2px");
		$this->closeHow->Click = new ServerEvent($this, 'closeZ');
        
        $group->AddRange($howPanel, 'zoom', 'arrow', 'reset');
        
        $this->nav1 = new NavHandler($howPanel, new ServerEvent($this, 'Create Section'), $group);
        
        $zoomArrowButton->Click = new ServerEvent($this->nav1, 'LaunchSection', 'arrow');
    	$arrowResetButton->Click = new ServerEvent($this->nav1, 'LaunchSection', 'reset');
		$resetArrowButton->Click = new ServerEvent($this->nav1, 'LaunchSection', 'arrow');
        $arrowZoomButton->Click = new ServerEvent($this->nav1, 'LaunchSection', 'zoom');
        
        $this->Controls->Add($group);

    }
    
        function CreateSection()
	{
		
		$section = NavHandler::$Section;
	
		$width = NavHandler::$Width;
		$height = NavHandler::$Height;
		
	
		switch($section)
		{
			case 'zoom':
				$object =  new Panel(null, null, null, null));
			    $object->CasWidth(555)
				->CasHeight(303)
				->CasCSSPadding('7px')
				->CasBackColor("#fff");
                
                $object->Controls->Add($this->mouseImg = new Image("http://gif.161.be/hand_mouse_wheel_scroll.gif", 10, 10, '50%', null));
				
                 $object->Controls->Add($this->ctrlImg = new Image("http://png.161.be/ctrl_key.png", 39, 111, 145, null));
				 $object->mouseImg->Layout= Layout::Right;
			     $object->zoomPanelPanel->Controls->Add($this->zoomHowPlus = new Label("+"));
		    	 $object->zoomHowPlus->CasCSSMargin('133px 239px') 
				->CasFontSize(33)
				->CasWidth('100%')
				->CasHeight('100%');
				
				 $object->Controls->Add($this->zoomLabel = new Label('Press "Control + Scroll" to Zoom.'));
				 $object->zoomLabel->CasCSSFontSize(17)
				->CasWidth('100%')
				->CasHeight(14)
				->CasCSSFontWeight('bold')
				->CasCSSPadding('11px 13px')
				->CasbackColor('#F1F1F1') 
				->CasCSSDisplay('block') 
				->CasCursor(Cursor::Move);
				
				 $object->Controls->Add($this->zoomArrowButton = new Button("Next", 449, 267, null, null));
			     $object->zoomArrowButton->CasBackColor('#E1E0E0')
				->CasColor('#333333')
				->CasCSSFontWeight('bold')
				->CasCSSPadding('4px')
				->CasCSSBorderRadius("2px");
				break;
                
                
			case 'arrow':
				$object =  new Panel(null, null, null, null));
				$object->CasWidth(555)
    			->CasHeight(303)
				->CasCSSPadding('7px')
				->CasBackColor("#fff");
				
				$object->Controls->Add($this->arrowImg = new Image("http://png.161.be/dec-arrow-keys.png", 137, 57, '50%', null));

				$object->Controls->Add($this->howLabel =("Use the arrow keys to navigate the diagram."));
				$object->howLabel->CasCSSFontSize(17)
				->CasWidth('100%')
				->CasHeight(14)
				->CasCSSFontWeight('bold')
				->CasCSSPadding('11px 13px')
				->CasBackColor('#F1F1F1') 
				->CasCSSDisplay('block') 
				->CasCursor(Cursor::Move);
				
				$object->Controls->Add($this->arrowKeyButton = new Button("Next", 449, 267, null, null));
				$object->arrowKeyButton->CasBackColor('#E1E0E0')
				->CasColor('#333333')
				->CasCSSFontWeight('bold')
				->CasCSSPadding('4px')
				->CasCSSBorderRadius("2px"); 
				
				$object->Controls->Add($this->arrowZoomButton = new Button("Back", 397, 267, null, null));
				$object->arrowZoomButton->CasBackColor('#E1E0E0')
				->CasColor('#333333')
				->CasCSSFontWeight('bold')
				->CasCSSPadding('4px')
				->CasCSSBorderRadius("2px");                
				break;
                
                
			case 'reset':
				$object =  new Panel(null, null, null, null));
				$object->CasWidth(555)
    			->CasHeight(303)
				->CasCSSPadding('7px')
				->CasBackColor("#fff");
                
                $object->Controls->Add($this->zeroKey = new Image("http://png.161.be/zero_key.png", 393, 113, null, 81));
								
                $object->Controls->Add($this->ctrlImg = new Image("http://png.161.be/ctrl_key.png", 77, 111, 145, null)); 
				$object->Controls->Add($this->zoomHowPlus = new Label("+")); */
				$object->zoomHowPlus->CasCSSMargin('133px 277px') 
				->CasFontSize(33)
				->CasWidth('100%')
				->CasHeight('100%'); 

		    	$object->Controls->Add($this->resetLabel = ("Press \"Control + 0\" to reset zoom."));
				$object->howLabel->CasCSSFontSize(17)
				->CasWidth('100%')
				->CasHeight(14)
				->CasCSSFontWeight('bold')
				->CasCSSPadding('11px 13px')
				->CasBackColor('#F1F1F1') 
				->CasCSSDisplay('block') 
				->CasCursor(Cursor::Move); 
				
				$object->Controls->Add($this->resetArrowButton = new Button("Back", 449, 267, null, null));
				$object->resetArrowButton->CasBackColor('#E1E0E0')
				->CasColor('#333333')
			    ->CasCSSFontWeight('bold')
				->CasCSSPadding('4px')
				->CasCSSBorderRadius("2px");
                
				break;
		}
		return $object;
	}
}
    
		
		public function closeZ(){
					Animate::Size($this->howPanel, 17, 55, 777, 777, 303);
					Animate::Location($this->howPanel, 0, 77, 777);
					Animate::Property($this->howPanel, 'style.borderWidth', 0, 777);
					
					$this->closeHow->Opacity = 0;
					$this->ctrlImg->Visible = false;
					$this->zoomHowPlus->Visible = false;
					$this->nextButton->Visible = false;
					$this->mdmLabel->Visible = false;
					$this->mouseImg->Visible = false;
					
					$this->zoomPanel->CSSPosition = 'fixed';
					Animate::Size($this->Panel, 17, 55, 777, 777, 303);
					
					Animate::Size($this->howLabel, 17, 55, 777, 555, 303);
					$this->howLabel->CasCursor(Cursor::Hand)
					->CasText('H <br> E <br> L <br> P')
					->CasCSSBorder('2px solid #777');
                    $this->howLabel->Click = new ServerEvent($this, 'openHelp');									
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
					Animate::Size($this->howLabel, 555, 14, 777, 17, 55);
					$this->howLabel->Cursor= Cursor::Move;
					$this->zoomPanel->CSSPosition = 'absolute';
					Animate::Size($this->zoomPanel, 555, 303, 777, 17, 55);
					$this->howLabel->Text= 'Press "Control + Scroll" to Zoom.';
					$this->howLabel->CSSBorder ='0px solid #777';	
					$this->howLabel->Click = null;
			
		}
}

?>