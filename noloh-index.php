<?php

require_once('NOLOH/NOLOH.php');

class Moving extends WebPage 
{

    public $mdmLogo;
    
	
	public function Moving()
	{
		parent::WebPage('Mass Distribution Media');
		$this->CSSFiles->Add('http://massdistributionmedia.com/style.css');
        
		$this->Controls->Add($this->mdmLogo = new Image("http://mdm.cc/logo-layoutv1_mdm.png", '27%', 39, null, null));
		$this->mdmLogo->Layout= Layout::Center;
		
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
        
	}
    
}