<?php
//Require the composer autoloader. 
require(dirname(dirname(__FILE__)).'/vendor/autoload.php');

//setup the application
\Disco\classes\App::instance()->setUp();


/**
 * YOUR APPLICATION LOGIC GOES BELOW
 * ---------------------------------
*/



// Swap the View Service With an Extended View Class.
App::make('View','StandardView');

Router::get('/',function(){
	Template::with('index');
	View::title('IV DIMENSIONS Learned Design');	
});

Router::get('/about',function(){
	Template::with('about');
	View::title('Who is Mel Young?');	
});

Router::get('/interests',function(){
	Template::with('interests');
	View::title('What does Mel like to do?');	
});

Router::get('/portfolio/index',function(){
	Template::with('portfolio/index');
	View::title('IV DIMENSIONal work');	
});

Router::get('/portfolio/lumen',function(){
	Template::with('portfolio/lumen');
	View::title('Lumen Camera Repair');	
});


Router::get('/portfolio/relic',function(){
	Template::with('portfolio/relic');
	View::title('Relic Magazine');	
});

Router::get('/portfolio/manufacturingconsent',function(){
	Template::with('portfolio/manufacturingconsent');
	View::title('Manufacturing Consent by Noam Chomsky');	
});

Router::get('/portfolio/perversion',function(){
	Template::with('portfolio/perversion');
	View::title('Perversion Magazine');	
});

Router::get('/portfolio/quango',function(){
	Template::with('portfolio/quango');
	View::title('Our Quango');	
});

Router::get('/portfolio/rhinos',function(){
	Template::with('portfolio/rhinos');
	View::title('Jacksonville Zoo Rhino Exhibit redesign');	
});

Router::get('/portfolio/illustrations',function(){
	Template::with('portfolio/illustrations');
	View::title('Illustration projects');
});


Router::get('/contact',function(){
	Template::with('contact');
	View::title('Reach Mel');	
});




/**
 * ---------------------------------
 * YOUR APPLICATION LOGIC STAYS ABOVE 
*/
App::tearDown();
