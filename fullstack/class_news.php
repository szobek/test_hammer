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
