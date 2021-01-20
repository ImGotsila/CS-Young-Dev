<?php 

session_start();
        if(isset($_POST['Username'])){
				//connection
                  include("connection.php");
				//รับค่า user & password
                  $Username = $_POST['Username'];
                  $Password = $_POST['Password'];
				//query 
                  $sql="SELECT * FROM admin Where admin_username='".$Username."' and admin_password='".$Password."' ";

                  $result = mysqli_query($con,$sql);
				
                  if(mysqli_num_rows($result)==1){

                      $row = mysqli_fetch_array($result);

                      $_SESSION["UserID"] = $row["id_admin"];
                      $_SESSION["User"] = $row["admin_fistname"]." ".$row["admin_lastname"];
                      $_SESSION["title"] = "CS-Yong Programer";
                      if($_SESSION["id_admin"]!==""){ //ถ้าเป็น admin ให้กระโดดไปหน้า admin_page.php

                        Header("Location: Home.php");
 
                      }

                      if ($_SESSION["Userlevel"]=="M"){  //ถ้าเป็น member ให้กระโดดไปหน้า user_page.php

                        Header("Location: Home.php");

                      }

                  }else{
                    echo "<script>";
                        echo "alert(\" user หรือ  password ไม่ถูกต้อง\");"; 
                        echo "window.history.back()";
                    echo "</script>";

                  }

        }else{

             Header("Location: index.php"); //user & password incorrect back to login again

        }
?>