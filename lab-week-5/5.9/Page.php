<?php

class Page {

    private $page;
    private $title;
    private $year;
    private $copyright;

    function __construct($title, $year, $copyright) {
        $this->page = '';
        $this->title = $title;
        $this->year = $year;
        $this->copyright = $copyright;
    }

    private function addHeader() {
        $this->page .= "<html><head><title>$this->title</title></head>";
    }

    private function addFooter() {
        $this->page .= "<footer><p>&#169;$this->copyright - $this->year<p></footer></html>";
    }

    public function addContent($content) {
        $this->addHeader();
        $this->page .= "<body>$content</body>";
        $this->addFooter();
    }

    public function get() {
        return $this->page;
    }

}

?>