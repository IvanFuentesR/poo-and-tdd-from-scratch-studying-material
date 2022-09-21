<?php

class Video {

    public $type;
    public $duration;
    public $published = false;
    public $title;

    public function play() {
        return $this->published ? "The video is playing" : "The video is not published yet";
    }

    public function pause() {
        return $this->published ? "The video is paused" : "";
    }
}

header('Content-Type:text/plain', true);
$introduction = new Video();
$introduction->published = true;
echo $introduction->play(), PHP_EOL, $introduction->pause(), PHP_EOL;
$video2 = new Video();
echo $video2->play(), PHP_EOL, $video2->pause(), PHP_EOL;

?>