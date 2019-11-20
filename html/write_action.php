<?php
                $connect = mysqli_connect("localhost", "wsx2793", "Djaakdi1213!!", "wsx2792") or die("fail");

                $id = $_POST['name'];                      //Writer
                $pw = $_POST['pw'];                        //Password
                $title = $_POST['title'];                  //Title
                $content = nl2br($_POST['ir1']);
                $image = $_POST['profileImage'];              //Content
                $date = date('y-m-d h:i:s');            //Date

                $URL = './my_inde_story.php';                   //return URL





                // $result = $connect->query($query);
                if($title != ""){

                  echo "<pre>", print_r($_FILES['profileImage']['name']), "</pre>";

                  $profileImageName = time() . '_' . $_FILES['profileImage']['name'];

                  $target = '/var/www/html/' . $profileImageName;
                  if($_FILES['profileImage']['tmp_name']) {
                  move_uploaded_file($_FILES['profileImage']['tmp_name'], $target);
                  $query = "insert into border (number,title, content, image, date, hit, id, password)
                          values(null,'$title', '$content', '$profileImageName', '$date',0, '$id', '$pw')";

                }else {
                  $query = "insert into border (number,title, content, image, date, hit, id, password)
                          values(null,'$title', '$content', null, '$date',0, '$id', '$pw')";
                        }
                          mysqli_query($connect, $query);
                  echo "<script> alert(\"글이 등록되었습니다.\"); location.replace(\"$URL\");</script>";
                } else {
                  echo "<script> alert(\"제목을 적어주세요.\"); history.back();</script>";
                }


?>
