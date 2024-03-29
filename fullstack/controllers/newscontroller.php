<?php


class setNews
{
   public function __construct()
   {
      if (!isset($_SESSION)) session_start();
      require_once "../connectToDb.php";
      if (isset($_REQUEST["function"])) {


         switch ($_REQUEST["function"]) {
            case "delete":
               $this->deleteNews($_REQUEST["id"]);
               break;
            case "update":
               $this->updateNewsView($_REQUEST["id"]);
               break;
            case "saveAfterEdit":
               $this->updateNews($_REQUEST["id"]);
               break;
            case "createNewsView":
               $this->createView();
               break;
            case "createNews":
               $this->saveNewsToDB();
               break;
            case "upload_img":
               $this->uploadImage();
               break;
            default:
               die("Error");
         }
      }
   }


   public static function  getNewsDate(String $stamp): String
   {
      return $stamp;
   }

   private function deleteNews(int $id)
   {
      $success = false;

      $result = open("DELETE FROM `news` WHERE `id`=?", [$id]);
      $success = ($result > 0) ? true : false;
      if ($success) {
         header('Location: /views/admin.php');
      } else {
         echo "Hiba törlés közben";
      }
   }

   private function updateNewsView(int $id)
   {
      $result = open("SELECT * FROM `news` WHERE `id`=?", [$id]);

      include "../views/createAndUpdate.php";
   }

   private function updateNews(int $id)
   {
      $title = $_REQUEST["title"];
      $desc = $_REQUEST["desc"];
      $content = $_REQUEST["content"];
      $img = $_REQUEST["img_url"];
      open("UPDATE `news` SET title=?,content=?,news_desc=?,image_url=? WHERE `id`=?", [$title, $content, $desc, $img, $id]);
      header('Location: /views/admin.php');
   }

   private function createView()
   {
      include "../views/createAndUpdate.php";
   }

   private function saveNewsToDB()
   {
      $title = $_REQUEST["title"];
      $content = $_REQUEST["content"];
      $desc = $_REQUEST["desc"];
      $img = $_REQUEST["img_url"];
      $result = open("INSERT INTO `news` (`id`, `title`, `author`, `created`, `content`, `image_url`, `news_desc`) 
    VALUES (NULL, ?, '1', current_timestamp(),? , ?, ?)", [$title, $content, $img, $desc]);
      if ($result === []) header('Location: /views/admin.php');
      else header('Location: newscontroller.php?function=createNewsView');
   }

   private function uploadImage()
   {
      $filetype = array('png', 'jpeg',);
      foreach ($_FILES as $key) {
         //var_dump($key);die();
         $name = time() . $key['name'];

         $path = '../uploaded/' . $name;
         $file_ext =  pathinfo($name, PATHINFO_EXTENSION);
         if (in_array(strtolower($file_ext), $filetype)) {
            if ($key['size'] < 10000000) {
               //var_dump($key);
               move_uploaded_file($key['tmp_name'], $path);
               echo $name;
            } else {
               echo "FILE_SIZE_ERROR";
            }
         } else {
            echo "FILE_TYPE_ERROR";
         }
      }
   }
}
new setNews();
