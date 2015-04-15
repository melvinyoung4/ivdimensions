<?php

Class StandardView extends Disco\classes\View {

    public function header(){
        return Template::build('header');
    }//header

    public function __construct(){

        $this->scriptSrc('http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js');
		$this->scriptSrc('/scripts/modernizr.js');
		$this->scriptSrc('/scripts/foundation.min.js');
		//$this->scriptSrc('/scripts/foundation.topbar.js');
		$this->scriptSrc('/scripts/js.js');
		$this->script('$(document).foundation();');
		$this->styleSrc('/css/foundation.min.css');
		//$this->styleSrc('/css/foundation.css');
		$this->scriptSrc('/scripts/foundation.magellan.js');
		
		//This is the video.js dependencies//
		//$this->scriptSrc('/scripts/video.js'); 
		//$this->scriptSrc('/scripts/videojs-Background.js'); 
		//$this->styleSrc('/css/video-js.css');
		
		//This is bigVideo.js dependencies
		//$this->scriptSrc('/scripts/bigvideo.js');
		//$this->styleSrc('/css/bigvideo.css');
		
		//This is the Vide dependencies
		$this->scriptSrc('/scripts/jquery.vide.min.js');
		
		//This is the Cool-Kitten dependencies
		$this->scriptSrc('/scripts/jquery.easing.1.3.js');
		$this->scriptSrc('/scripts/jquery.stellar.min.js');
		$this->scriptSrc('/scripts/scripts.js');
		//$this->scriptSrc('/scripts/waypoint.min.js');
		//$this->styleSrc('/css/grid.css');
		//$this->styleSrc('/css/normalize.css');
		//$this->styleSrc('/css/style.css');
		
		//This is the Slide dependencies
		//$this->styleSrc('/css/slick.css');
		//$this->styleSrc('/css/slick-theme.css');
		//$this->scriptSrc('/scripts/slick.min.js');
		//$this->scriptSrc('/scripts/slick.js');
		
		
		//This is the Animsition dependencies
		$this->styleSrc('/css/animsition.min.css');
		//$this->styleSrc('http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js');
		$this->scriptSrc('/scripts/jquery.animsition.js');
		
		
		//This is my, user-generated style sheets
		//$this->styleSrc('/css/hover-min.css');
		$this->styleSrc('/css/css.css');
		//$this->scriptSrc('http://use.typekit.net/yqc6iyy.js/');
		//$this->scriptSrc('http:try{Typekit.load();}catch(e){}');
		//$this->styleSrc('/css/top-bar.css');
		
		
		


    }//construct

    public function footer(){
        return Template::build('footer');
    }//footer

}//Standard

?>
