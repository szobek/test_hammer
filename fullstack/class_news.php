<?php
class News{
    private $id;
    private $title;
    private $created;
    private $author;
    private $desc;
    private $content;
    private $image;


    public function __construct(int $id,String $title = "",String $created = "",String $author = "",String $desc = "",String $content = "",String $image = "") {
        $this->id=$id;
        $this->title = $title;
        $this->author = $author;
        $this->created = $created;
        $this->desc = $desc;
        $this->content = $content;
        $this->image = $image;
    }
   
    public function getTitle() {
        return $this->title;
    }
    
    
    public function getCreated() {
        return $this->created;
    }

    public function getAuthor() {
        return $this->author;
    }

    public function getDesc() {
        return $this->desc;
    }

    public function getContent() {
        return $this->content;
    }

    public function getImage() {
        return $this->image;
    }

    public function getId(){
        return $this->id;
    }

    function obj_to_text():String{
        return "A hír címe: $this->title, a szerző: $this->author,dátum: $this->created... ";
    }

    function obj_to_json(){
        return json_encode(
            [
            "id"=>$this->id,
            "title"=>$this->title,
            "author"=>$this->author,
            "created"=>$this->created,
            "desc"=>$this->desc,
            "content"=>$this->content,
            "image"=>$this->image,
            ]
        );
    }


}

$news_db = [
    "0" => new News(16, "Teszt hír", "2022-02-22", "szobek", "desription", "A teljes hír", "image"),
    "1" => new News(12, "Teszt hír", "2022-02-22", "szobek", "desription", "A teljes hír", "image"),
    "2" => new News(2, "In hac habitasse platea dictumst.", "2022-03-22", "szobek", "desription", "A teljes hír", "image"),
    "3" => new News(5, "Mauris eget tortor eget est pulvinar sagittis.", "2022-06-01", "szobek", "desription", "A teljes hír", "image"),
    "4" => new News(66, "Donec tempus mattis elit et dictum.", "2022-02-11", "szobek", "desription of news...", "A teljes hír", "image"),
    "5" => new News(1, "Nulla tempor augue vel odio viverra mollis.", "2022-09-22", "szobek", "desription", "A teljes hír", "image"),
    "6" => new News(28, "Sed varius porta eros.", "2022-05-14", "szobek", "desription", "A teljes hír", "image"),
    "7" => new News(14, "Donec sed dolor non sem efficitur convallis eget non magna.", "2022-06-06", "szobek", "desription", "A teljes hír", "image"),
    "8" => new News(23, "Sed egestas, libero ac convallis faucibus.", "2022-02-22", "szobek", "desription", "A teljes hír", "image"),
    "9" => new News(3, "Curabitur maximus diam in lorem efficitur aliquet. ", "2022-02-09", "szobek", "desription", "A teljes hír", "image"),
    "10" => new News(4, "Cras viverra, libero eu consequat aucto.", "2022-12-22", "szobek", "desription", "A teljes hír", "image"),
];