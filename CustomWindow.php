<?php

require_once('/NOLOH/NOLOH.php');

class CustomWindow extends WindowPanel
{
	function CustomWindow($title = 'Custom Window', $left = 0, $top = 0, $width = 200, $height = 300)
	{
		parent::WindowPanel($title, $left, $top, $width, $height);
		$corners = array(Library::ImagePath() . 'top_left.png', Library::ImagePath() . 'top_right.png',
						 Library::ImagePath() . 'bottom_left.png', Library::ImagePath() . 'bottom_right.png');
						 
		$borders = array(new Image(Library::ImagePath() . 'left.png'), 
						 new Image(Library::ImagePath() . 'top.png'),
						 new Image(Library::ImagePath() . 'right.png'),
						 new Image(Library::ImagePath() . 'bottom.png'));
			
		$this->SetCorners($corners);
		$this->SetBorder($borders);
		$this->SetButtons(new RolloverImage(Library::ImagePath() . 'btn_close.gif', Library::ImagePath() . 'btn_close_over.gif'), null);
		
		$this->SetTitleBar(26, 'url('. Library::ImagePath() . 'title_bg.png'.') repeat');
		$this->CloseImage->Top = 15;
		$this->TitleBar->Controls['Title']->FontSize = 13;
	}
}

class spawnWin extends WebPage

{

	function spawnWin()

	{

		$this->CustomWindow();

	}

}

?>