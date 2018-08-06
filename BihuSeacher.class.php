<?php
/**
@author : Riley Ge <rlge@live.com>
@Version : 1.0
*/
class BihuSearcher
{
	var $keyword        	=	"testing";
    public $urlList     	=	array();
    public $titleList       =   array();
    public $snapContentList =   array();
	var $page   		    =	1;
	var $pageSize   	    =	20;

	function __construct() {
	}

	function getpagedata($url)
	{
		return file_get_contents($url);
	}

	function fetchUrlList()
	{
        $url = 'http://www.google.com/search?q='.$this->keyword.'+site%3Abihu.com&safe=off&ie=utf8&num='.$this->pageSize.'&start='.($this->page*$this->pageSize-$this->pageSize);
        $data=file_get_contents($url);
        echo $data;
        $patten = '@<div\s*class="g">\s*<h3\s*class="r">\s*<a[^<>]*href="[^<>]*?q=(https://[a-zA-Z.]*bihu.com/[^<>]*)&amp;sa[^<>]*>(.*)</a>\s*</h3>[\s\S]*<span\s*class="st">([\s\S]*)</span>@isU';
        preg_match_all($patten, $data, $matches);

		for ($j = 0; $j < count($matches[1]); $j++) {
            array_push($this->urlList, $matches[1][$j]);
            array_push($this->titleList, $matches[2][$j]);
            array_push($this->snapContentList, $matches[3][$j]);
		}		
	}

	function getInfoList($keyword, $pageNo = 1, $pageSize = 20) {
		$this->keyword=$keyword;
        $this->page = $pageNo;
        $this->pageSize = $pageSize;
		// $this->initGoogle();
		// $this->pause();
		// $this->setPreference();
		// $this->pause();
		$this->fetchUrlList();
		// return $this->urlList;
	}
}
?>