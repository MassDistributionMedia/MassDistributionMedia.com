<?php

require_once('NOLOH/NOLOH.php');

class acmHome extends WebPage 
{
	private $amcLogo;
	
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
		
		$this->CSSFiles->Add('http://161.be/ac/style.css');
		
		$this->Controls->Add($this->amcLogo = new Image("http://161.be/ac/acm_logo.jpg", System::Auto, System::Auto, null, null));
		$this->amcLogo->Layout= System::Auto;
		
	}
	
}

?>