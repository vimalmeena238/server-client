<?php
$ch = curl_init();
//check whether the folder the exists
if(!(file_exists('C:/Apache24/htdocs/test')))
{
  //create the folder
  mkdir('C:/Apache24/htdocs/test');
  //give permission to the folder
  chmod('C:/Apache24/htdocs/test', 0777);
}

//check whether the file exists
if (file_exists('C:/Apache24/htdocs/test/'. $_FILES["file"]["name"]))
{
  //echo $_FILES["file"]["name"] . " already exists. ";
  unlink('C:/Apache24/htdocs/test/'. $_FILES["file"]["name"]);
}
$info = pathinfo($_FILES['file']['name']);
$ext = $info['extension']; // get the extension of the file
$newname = "test.".$ext;
$target = 'C:/Apache24/htdocs/test/'.$newname;
move_uploaded_file( $_FILES['file']['tmp_name'], $target); 
//move the file into the new folder
//move_uploaded_file($_FILES["file"]["tmp_name"],'C:/Apache24/htdocs/test/'. $_FILES["file"]["name"]);
curl_setopt($ch, CURLOPT_URL, "http://192.168.0.102/pitt.py");
curl_setopt($ch, CURLOPT_HEADER, 0);

// grab URL and pass it to the browser
curl_exec($ch);
//unlink('C:/Apache24/htdocs/test/'.$newname;);

?>
