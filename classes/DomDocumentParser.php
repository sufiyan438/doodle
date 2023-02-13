<?php

class DomDocumentParser{

    private $doc;

    public function __construct($url){
        $options = array(
                'http'=>array('method'=>"GET", 'header'=>"User-Agent: doodleBot/0.1\n")
        );
        $context = stream_context_create($options);

        $this->doc = new DomDocument();
        //DomDocument is an inbuilt class

        @$this->doc->loadHTML(file_get_contents($url, false, $context));
        //@ symbol prevents warnings from popping up on webpages
    }

    public function getLinks(){
        return $this->doc->getElementsByTagName("a");
        /*getElementsByTagName is an inbuilt PHP func bcoz of DomDocument
        it gets all the links in reecekenny.com and stores them in $doc by targeting anchor tags*/
    }

    public function gettTitleTags(){
        return $this->doc->getElementsByTagName("title");
    }

    public function getMetaTags(){
        return $this->doc->getElementsByTagName("meta");
    }

    public function getImages(){
        return $this->doc->getElementsByTagName("img");
    }
}

?>