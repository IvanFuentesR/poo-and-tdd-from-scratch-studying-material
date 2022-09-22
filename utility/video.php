<?php

class Video {

    private $type;
    private $duration;
    private $published = false;
    private $title;
    private $playStatus;

    public function __construct(string $type = 'mp4', float $duration = 8.90, string $title = 'default') {
        $this->type = $type;
        $this->duration = $duration;
        $this->title = $title;
    }

    public function play() {
        if ($this->getPublished()) {
            $this->playStatus = true;
            return "The video is playing";
        }

        return "The video is not published yet";
    }

    public function pause() {
        if ($this->getPublished()) {
            $this->playStatus = false;
            return "The video is paused";
        }
        return "";
    }

    public function __destruct()
    {
        var_dump('Destroying instance of ' . get_class());
    }

    public function setType (string $type) {
        $this->type = $type;
    }

    public function getType () {
        return $this->type;
    }

    public function setDuration (float $duration) {
        $this->duration = $duration;
    }

    public function getDuration () {
        return $this->duration;
    }

    public function setTitle (string $title) {
        $this->title = $title;
    }

    public function getTitle () {
        return $this->title;
    }

    public function setPublished (bool $published) {
        $this->published = $published;
    }

    private function getPublished () {
        return $this->published;
    }

} 

header('Content-Type:text/plain', true);
$introduction = new Video();
$introduction->setPublished(true);
$introduction->setTitle('Introduction to OOP');
echo $instroduction->getTitle() . PHP_EOL;
echo $introduction->play(), PHP_EOL, $introduction->pause(), PHP_EOL;
$video2 = new Video();

echo $video2->play(), PHP_EOL, $video2->pause(), PHP_EOL;

?>