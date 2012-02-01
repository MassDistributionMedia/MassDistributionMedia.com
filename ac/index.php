<?php

require_once('NOLOH/NOLOH.php');

class acmHome extends WebPage 
{
	private $amcLogo, $contactLabel;
	
	function acmHome()
	{
		parent::WebPage('AC Marketing - UNDER CONSTRUCTION', 'New Jersey Marketing, Marketing, Art All Night, Events, Event Planning, NJ, New Jersey', 'THE marketing company in New Jersey, directors of Art All Night along with many others', 'http://161.be/ac/favicon.ico');
		
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
		$this->CSSFiles->Add('http://fonts.googleapis.com/css?family=News+Cycle');
		
		$this->Controls->Add($this->amcLogo = new Image("http://161.be/ac/acm_logo.jpg", 33, 33, null, null));
		$this->amcLogo->Layout= System::Auto;
		
		$this->Controls->Add($this->contactLabel = new Label('<br> ACMarketingServices.com is UNDER CONSTRUCTION. <br>
		 But please drop us a line via the following: <br><br><strong>
		 April Sette - sette.acmarketing@gmail.com <br>
		 Cathy Campbell - campbell.acmarketing@gmail.com <br>
		 609.865.9200 <br>
1337 Route 33, Hamilton, NJ 08690-1230 <br></strong>
		', 33, 33));
		$this->contactLabel->CasFont('News Cycle, Arial')
		->CasFontSize(13)
		->CasLayout(Layout::Relative)
		->CasSetSize('100%', '100%');

		
	}
	
}

?>