<?php
// Dataviz extension

class YellowDataviz {
    const VERSION = "0.8.15";
    public $yellow;         // access to API
    
    // Handle initialisation
    public function onLoad($yellow) {
        $this->yellow = $yellow;
    }
	
	/*
	public function onParseContentShortcut($page, $name, $text, $type) {
        $output = null;
        if $name=="dataviz" 
	*/
    
    public function onParsePageExtra($page, $name) {
		// 
        $output = null;
        if ($name=="header") {
      
			$output .= "<link rel=\"stylesheet\" type=\"text/css\" href=\"../media/dataviz-js/dcjs/css/dc.css\" />";    
        }
        return $output;
    }
}