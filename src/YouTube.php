<?php
declare(strict_types=1);

namespace kdaviesnz\youtube;



class YouTube implements \IYouTube
{
    private $apiKey = "";
    private $yt;
    private $results;

    public function __construct(string $apiKey, string $keyword)
    {
        $this->apiKey = $apiKey;
        $this->yt = new \Madcoda\Youtube(array('key' => $apiKey));
        $this->results = json_encode(
            $this->searchByKeyword($keyword)
        );
    }

    public function __toString()
    {
       return $this->results;
    }

    private function searchByKeyword( $keyword ) {
        return $this->yt->search($keyword);
    }

}