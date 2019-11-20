<?php    $connect = mysqli_connect("localhost", "wsx2793", "Djaakdi1213!!", "wsx2792") or die("connect fail");
                $id = $_GET[id];
                $number = $_GET[number];
                $query = "select title, content, date, id from border where number=$number";
                $result = $connect->query($query);
                $rows = mysqli_fetch_assoc($result);

                $title = $rows['title'];
                $content = $rows['content'];
                $usrid = $rows['id'];

                session_start();


                $URL = "./my_inde_story.php";

                if(!isset($_SESSION['id'])) {
        ?>              <script>
                                alert("권한이 없습니다.");
                                location.replace("<?php echo $URL?>");
                        </script>
        <?php   }
                else if($_SESSION['id']==$usrid) {
                  $query = "delete from border where number = $number";
                  $result = $connect->query($query);
                  if($result) {
                    ?>
                    <script>
                    alert("삭제되었습니다.");
                    location.replace("<?php echo $URL?>");
                    </script>
        <?php
                  }
        ?>

        <?php   }
                else {
        ?>              <script>
                                alert("권한이 없습니다.");
                                location.replace("<?php echo $URL?>");
                        </script>
        <?php   }
        ?>
