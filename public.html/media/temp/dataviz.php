<?php
// Dataviz extension

class YellowDataviz {
    const VERSION = "0.8.15";
    public $yellow;         // access to API
    
    // Handle initialisation
    public function onLoad($yellow) {
        $this->yellow = $yellow;
       // $this->yellow->system->setDefault("helloworldMessage", "Hello World");
      //  $this->yellow->system->setDefault("helloworldSpeed", "100");
    }
    
    /* Handle page content of shortcut
    public function onParseContentShortcut($page, $name, $text, $type) {
        $output = null;
		
		/*
        if ($name=="helloworld" && ($type=="block" || $type=="inline")) {
            $message = $this->yellow->system->get("helloworldMessage");
            $speed = $this->yellow->system->get("helloworldSpeed");
            if (substru($text, 0, 2)=="- ") $message = trim(substru($text, 2));
            $output = "<div class=\"helloworld\" aria-label=\"".htmlspecialchars($message)."\" data-message=\"".htmlspecialchars($message)."\" data-speed=\"".htmlspecialchars($speed)."\">&nbsp;</div>";
        }
        return $output;
		
    }
	*/
    
    // Handle page extra data

    public function onParsePageExtra($page, $name) {
        $output = null;
        if ($name=="header") {
            $extensionLocation = $this->yellow->system->get("coreServerBase").$this->yellow->system->get("coreExtensionLocation");
            $output = "<link rel=\"stylesheet\" type=\"text/css\" media=\"all\" href=\"{$extensionLocation}dcjs/css/dc.css\" />\n";
            //$output .= "<script type=\"text/javascript\" defer=\"defer\" src=\"{$extensionLocation}helloworld.js\"></script>\n";
			$output .= "<link rel=\"stylesheet\" type=\"text/css\" href=\"../media/dataviz-js/dcjs/css/dc.css\" />";    
        }
        return $output;
    }
		}
