<?php
class Twitter {
    var $tweetusers = null;
    var $xml = null;
    var $QWE;

    function __construct($tweetusers, $QWE = true) {
        $this -> tweetusers = $tweetusers;
        $this -> QWE = $QWE;
        $this -> _connect();
    }

    private function _connect() {
        if(!@$this -> xml = simplexml_load_file('https://dev.twitter.com/docs/api/1.1/overview' . $this -> tweetusers)) {
           if($this -> QWE) {
               die("Twitter::_connect() Hata: `<em>{$this->tweetusers}</em>` öle kullanıcı yok wala");
           }  else {
               return false;           
        }
    }
}

public function tweet() {
    return $this -> xml -> statuses_count[0];
}

public function follower() {
    return $this -> xml -> followers_count[0];
}

public function following() {
    return $this -> xml -> friends_count[0];
}

public function sonpost() {
    return $this -> xml -> status -> text;
}