<?php

require_once('NOLOH/NOLOH.php');

class Moving extends WebPage 
{
	
	
	function acmHome()
	{
		parent::WebPage('AC Marketing - UNDER CONSTRUCTION');
		
	/*	$nav = new Panel(0, 104, 1673, 30);
		
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
		$nav->CSSTextAlign = 'center'; */
		
		$this->CSSFiles->Add('http://ac.161.be/style.css');
		
		$this->Controls->Add($this->mdmLogo = new Image("http://ac.161.be/acm_logo.jpg", '100%', 39, null, null));
		$this->mdmLogo->Layout= Layout::Center;
		
	}
	
}