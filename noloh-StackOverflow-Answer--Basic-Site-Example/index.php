<?php
require_once('/NOLOH/NOLOH.php');

class StackOverflowExample extends WebPage
{
	function __construct()
	{
		parent::WebPage('StackOverflow 5672167');
		$nav = new Panel(0, 0, 600, 30);
		$chat = new Panel(0, $nav->Bottom, 200, 500);
		$content = new MarkupRegion('', $chat->Right, $chat->Top, 400, 350);
		$rooms = new Panel($content->Left, $content->Bottom, 400, 150);
		$footer = new Panel(0, $chat->Bottom, 600, 50);
		
		$chat->BackColor = Color::LightGreen;
		$content->BackColor = Color::Yellow;
		$rooms->BackColor = Color::Orange;
		$footer->BackColor = Color::Gray;
		
		$this->Controls->AddRange($nav, $chat, $content, $rooms, $footer);
		
		$sections = array('HOME', 'ABOUT', 'CONTACT', 'LOGIN');
			
		foreach($sections as $section)
			$nav->Controls->Add(new Link(null, $section, 0, 5))
				->Click = new ServerEvent($this, 'LoadSection', $content, $section);
				
		$nav->Controls->AllCSSMarginRight = '5px';
		$nav->Controls->AllLayout = Layout::Relative;
		$nav->CSSTextAlign = 'right';
		//Comet (Listener), Bind to Yahoo Flickr API through YQL
		$this->Controls->Add($listener = new Listener(
			'http://query.yahooapis.com/v1/public/yql?q=select%20source%20from%20flickr.photos.sizes%20WHERE%20photo_id%20in%20(select%20id%20from%20flickr.photos.recent)%20and%20label%3D%22Thumbnail%22',
			new ServerEvent($this, 'LoadImage', $chat)));
			
		//Default Section
		$this->LoadSection($content, URL::GetToken('section', 'HOME'));
	}
	function LoadSection($contentPanel, $section)
	{
		$section = strtolower($section);
		if(file_exists($file = 'Content/' . $section))
		{
			$contentPanel->Text = file_get_contents($file);
			URL::SetToken('section', $section);
		}
	}
	function LoadImage($chat)
	{
		foreach(simplexml_load_string(Listener::$Data)->results->size as $photo)
		{
			$url = $photo['source'];
			$chat->Controls->Add($image = new Image((string)$url, rand(0, $chat->Width), rand(0, 200), 100, 100));
			Animate::Top($image, $chat->Height - $image->Height, 3000);
			Animate::Opacity($image, Animate::Oblivion, 3000);
		}
	}
}
?>