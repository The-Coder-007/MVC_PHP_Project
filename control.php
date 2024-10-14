<?php

include_once('./admin/model.php');
class Control extends model
{


    function __construct()
    {
        session_start();
        model::__construct();
        $url = $_SERVER['PATH_INFO']; // PATH urldecode

        switch ($url) {

            case '/home': 
                $videos = $this->select('videos');
                $return_upc = $this->select_where('videos',['movie_type_id'=>3]);
                while ($data = $return_upc->fetch_object()) {

                    $upcoming[] = $data;
                }
                $return_top = $this->select_where('videos',['movie_type_id'=>2]);
                while ($data = $return_top->fetch_object()) {

                    $top_rated[] = $data;
                }
                $return_pop = $this->select_where('videos',['movie_type_id'=>1]);
                while ($data = $return_pop->fetch_object()) {

                    $popular[] = $data;
                }
                // echo "<pre>";
                // print_r($arr);die;
                include_once('index.php');
                break;
            case '/top_rated':
                $videos = $this->select('videos');
                $return_top = $this->select_where('videos',['movie_type_id'=>2]);
                while ($data = $return_top->fetch_object()) {

                    $top_rated[] = $data;
                }
                include_once('top_rated.php');
                break;
           
            case '/blog_detail':
                include_once('../moviehub/pages/blog_detail.php');
                break;
            case '/popular':
                $videos = $this->select('videos');
                $return_pop = $this->select_where('videos',['movie_type_id'=>1]);
                while ($data = $return_pop->fetch_object()) {

                    $popular[] = $data;
                }
                include_once('popular.php');
                break;
            case '/login':
                if (isset($_REQUEST['submit'])) {

                    $username = $_REQUEST['username'];
                    $pass = md5($_REQUEST['pass']); // pass encripted 

                    $where = array("username" => $username, "pass" => $pass);
                    $res = $this->select_where('users', $where);
                    $check = $res->num_rows; // 0 means false & 1 means true  check row wise condition

                    if ($check == 1) {
                        $data = $res->fetch_object(); // single data fetch 
                        if ($data->status == "Unblock") {
                            $_SESSION['full_name'] = $data->full_name;
                            $_SESSION['uid'] = $data->id;
                            $_SESSION['img'] = $data->img;

                            echo "<script>
                        alert('Login Success !');
                        window.location='home'
                    </script>";
                        } else {
                            echo "<script>
                        alert('Your Account Blocked so Contacts us !');
                        window.location='home'
                    </script>";
                        }
                    } else {
                        echo "<script>
							alert('Login Failed due to wrong credential!');
						</script>";
                    }
                }
                include_once('./pages/login.php');
                break;
            case '/upcoming':
                $videos = $this->select('videos');
                $return_upc = $this->select_where('videos',['movie_type_id'=>3]);
                while ($data = $return_upc->fetch_object()) {

                    $upcoming[] = $data;
                }
                // echo "<pre>";
                // print_r($arr);die;
                include_once('upcoming.php');
                break;
                case '/signup':
                    if (isset($_REQUEST['signup'])) {
                
                    
                     
                        $name = $_REQUEST['full_name'];
                    $email = $_REQUEST['username'];
                        $img = $_FILES['img']['name'];
                    // image upload in project folder
                    $path = './admin/upload/users/' . $img;
                    $tmp_file = $_FILES['img']['tmp_name'];
                    move_uploaded_file($tmp_file, $path);
                    $phone = $_REQUEST['phone'];
                    $gender = $_REQUEST['gender'];
                    $pass = md5($_REQUEST['pass']);
                    $lang_arr = $_REQUEST['language'];
                        $lang = is_array($lang_arr) ? implode(',', $lang_arr) : '';

                    $data = array(
                        "full_name" => $name,
                            "username" => $email,
                            "img" => $img,
                            "phone" => $phone,
                            "gender" => $gender,
                            "pass" => $pass,
                            "language" => $lang
                    );

                        // Attempt to insert data into the 'users' table
                        $res = $this->insert('users', $data);
                
                        if ($res) {
                            echo "<script>
                            alert('Registered Successfully!');
                           
                            </script>";
                        } else {
                            // $error = mysqli_error($this->connection); // Fetching MySQL error
                            echo "<script>alert('Registration failed. Please try again. Error');</script>";
                        }
                    }
                    
                    include_once('./pages/signup.php');
                    break;
                
            case '/team':
                include_once('team.php');
                break;
            case '/profile':

                $where = array("id" => $_SESSION['uid']);
                $res = $this->select_where('users', $where);
                $fetch = $res->fetch_object();

                include_once('./pages/profile.php');
                break;

            case '/user_logout':
                unset($_SESSION['uid']);
                unset($_SESSION['full_name']);
                echo "<script>
							alert('Logout Success !');
							window.location='home'
						</script>";
                break;

            case '/edit_profile':

                if (isset($_REQUEST['eprofile'])) {
                    $id = $_REQUEST['eprofile'];

                    $where = array("id" => $id);
                    $res = $this->select_where('users', $where);
                    $fetch = $res->fetch_object();
                }
                if (isset($_REQUEST['save'])) {
                    $full_name = $_REQUEST['full_name'];

                    $username = $_REQUEST['username'];
                    $gender = $_REQUEST['gender'];
                    $lag_arr = $_REQUEST['language']; // get data in arr form
                    $lag = implode(',', $lag_arr);

                    $_SESSION['full_name'] = $full_name;
                    if ($_FILES['img']['size'] > 0) {
                        // get old_img name
                        $old_img = $fetch->img;

                        $img = $_FILES['img']['name'];
                        $path = './admin/upload/users/' . $img;
                        $tmp_file = $_FILES['img']['tmp_name'];
                        move_uploaded_file($tmp_file, $path);


                        $data = array("full_name" => $full_name, "img" => $img, "username" => $username, "gender" => $gender,  "language" => $lag);

                        $res = $this->update_where('users', $data, $where);
                        if ($res) {
                            unlink('./admin/upload/users/' . $old_img);
                            echo "<script>
								alert('profile Update Success !');
								window.location='./pages/profile';
							</script>";
                        }
                    } else {
                        $data = array("full_name" => $full_name, "username" => $username, "gender" => $gender,  "language" => $lag);
                        $res = $this->update_where('users', $data, $where);
                        if ($res) {
                            echo "<script>
								alert('Profile Update Success !');
								window.location='./pages/profile';
							</script>";
                        }
                    }
                }

                include_once('./pages/edit_profile.php');
                break;

                case '/movie_details':
                    $videos = $this->select('videos');
                    include_once('../moviehub/pages/single_movie.php');
                    break;

            default:
                echo "<h1 style'color:red; text-align:center'> Page Not Found </h1>";
                break;
        }
    }
}

$Obj = new Control;
