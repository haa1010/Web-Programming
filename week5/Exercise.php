<style>
    .nested-html {
        border: 1px solid rebeccapurple;
        border-radius: 5px;
        width: fit-content;
        padding: 10px;
        min-width: 350px;
    }

    .page-list {
        display: inline-block;
        text-align: left;
        min-width: 350px;
    }

    body {
        text-align: center;
    }
</style>

<?php
class Page
{
    private $page, $title, $copyright, $filename;
    private $year;

    function __construct($year, $title)
    {
        $this->title = $title;
        $this->year = $year;
        $this->copyright = "Copyright @" . $this->year;
        $this->filename = $this->filename;

        $this->addHeader();
    }

    function __destruct()
    {
        $this->addFooter();
    }

    private function addHeader()
    {
        $this->page .= "<html><head><title>" . $this->title . "</title></head>" . PHP_EOL . "<body><h1>" . $this->title . "</h1>" . PHP_EOL;
    }

    private function addFooter()
    {
        $this->page .= "</body><footer>" . $this->copyright. "</footer></html>";

        file_put_contents($this->title . ".html", $this->page);
    }

    function getPage()
    {
        return $this->page;
    }

    function getTitle()
    {
        return $this->title;
    }

    function addContent($content)
    {
        $this->page .= "<p>" . $content . "</p>";
    }
}


$a = new Page("2021", "page 1");
$a->addContent("this is page 1");
$a->addContent("page 1.2");

$b = new Page("2020", "page 2");
$b->addContent("this is page 2");
$b->addContent("page 2.2");

$c = new Page("2020-2021", "page 3");
$c->addContent("this is page 3");
$c->addContent("page 3.2");

$pageList = array($a, $b, $c);
print "<h1>";
echo count($pageList);
print " page(s) created as follow:</h1> <h3>(Click on page for more details)</h3><div class = \"page-list\">";

foreach ($pageList as $key => $pg) {

    print "<h1>" . ($key + 1) . ". <a href=\"/" . $pg->getTitle() . ".html\">" . $pg->getTitle() . "</a></h1><div class = \" nested-html\">";
    echo $pg->getPage();
    print "</div>";
}
print "</div>";
