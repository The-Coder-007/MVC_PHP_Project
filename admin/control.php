<?php
include_once('model.php'); // step 1 : load model in control
class Control extends model // step 2 : extends (inherit) model class
{



    function __construct()

    {

        session_start();
        model::__construct(); // step 3 - call model __construct for database connectivity
        $url = $_SERVER['PATH_INFO']; // PATH urldecode

        switch ($url) {

            case '/admin':

                if (isset($_REQUEST['submit'])) {

                    $username = $_REQUEST['username'];
                    $pass = md5($_REQUEST['pass']); // pass encripted 

                    $where = array("username" => $username, "pass" => $pass);
                    $res = $this->select_where('admin', $where);
                    $check = $res->num_rows; // 0 means false & 1 means true  check row wise condition

                    if ($check == 1) {

                        $data = $res->fetch_object(); // single data fetch 
                        $_SESSION['admin_name'] = $data->name;
                        $_SESSION['admin_img'] = $data->img;
                        $_SESSION['admin_id'] = $data->admin_id;
                        echo "<script>
							alert('Login Success !');
							window.location='dashboard';
						</script>";
                    } else {
                        echo "<script>
							alert('Login Failed !');
						</script>";
                    }
                }
                include_once('authent_login.php');
                break;
            case '/authent_logout':
                unset($_SESSION['admin_id']);
                unset($_SESSION['admin_name']);
                echo "<script>
						alert('Logout Success !');
						window.location='admin'
					</script>";
                include_once('authent_logout.php');
                break;
            case '/authent_register':
                if (isset($_REQUEST['submit'])) {
                    $img = $_FILES['img']['name'];
                    // image upload in project folder
                    $path = './upload/admin/' . $img;
                    $tmp_file = $_FILES['img']['tmp_name'];
                    move_uploaded_file($tmp_file, $path);
                    $name = $_REQUEST['name'];
                    $username = $_REQUEST['username'];
                    $pass = md5($_REQUEST['pass']);

                    $data = array(
                        "name" => $name,   "username" => $username, "pass" => $pass
                    );

                    $res = $this->insert('admin', $data);
                    if ($res) {
                        echo "<script>
							alert('Admin Addes Successfully !');
						</script>";
                    }
                }
                include_once('authent_register.php');
                break;
            case '/dashboard':
                include_once('index.php');
                break;
            case '/add_employee':
                if (isset($_REQUEST['submit'])) {
                    $name = $_REQUEST['full_name'];
                    $img = $_FILES['img']['name'];
                    // image upload in project folder
                    $path = './upload/employees/' . $img;
                    $tmp_file = $_FILES['img']['tmp_name'];
                    move_uploaded_file($tmp_file, $path);
                    $username = $_REQUEST['username'];
                    $pass = md5($_REQUEST['pass']);

                    $data = array(
                        "full_name" => $name, "img" => $img,  "username" => $username, "pass" => $pass
                    );

                    $res = $this->insert('employee', $data);
                    if ($res) {
                        echo "<script>
							alert('employee Addes Successfully !');
						</script>";
                    }
                }
                include_once('add_employee.php');
                break;

            case '/add_main_categories':
                if (isset($_REQUEST['submit'])) {
                    $title = $_REQUEST['title'];
                    $img = $_FILES['img']['name'];
                    // image upload in project folder
                    $path = './upload/main_category/' . $img;
                    $tmp_file = $_FILES['img']['tmp_name'];
                    move_uploaded_file($tmp_file, $path);
                    $data = array(
                        "title" => $title, "img" => $img
                    );

                    $res = $this->insert('main_categories', $data);
                    if ($res) {
                        echo "<script>
							alert('Main Category Addes Successfully !');
						</script>";
                    }
                }
                include_once('add_main_categories.php');
                break;

            case '/add_sub_categories':

                if (isset($_REQUEST['submit'])) {
                    $title = $_REQUEST['title'];
                    $img = $_FILES['img']['name'];
                    // image upload in project folder
                    $path = './upload/sub_category/' . $img;
                    $tmp_file = $_FILES['img']['tmp_name'];
                    move_uploaded_file($tmp_file, $path);
                    $data = array(
                        "title" => $title, "img" => $img
                    );

                    $res = $this->insert('sub_categories', $data);
                    if ($res) {
                        echo "<script>
							alert('Sub Category Addes Successfully !');
						</script>";
                    }
                }
                include_once('add_sub_categories.php');
                break;

            case '/add_movie_type':

                if (isset($_REQUEST['submit'])) {
                    $type = $_REQUEST['type'];
                    
                    $data = array(
                        "type" => $type
                    );

                    $res = $this->insert('movie_cate', $data);
                    if ($res) {
                        echo "<script>
							alert('Movie Type Addes Successfully !');
						</script>";
                    }
                }
                include_once('add_movie_type.php');
                break;

            case '/add_videos':
                $main_categories = $this->select('main_categories');
                $sub_categories = $this->select('sub_categories');
                $movie_type = $this->select('movie_cate');
                if (isset($_REQUEST['submit'])) {
                    $main_cat_id = $_REQUEST['main_cat_id'];
                    $sub_cat_id = $_REQUEST['sub_cat_id'];
                    $type_id = $_REQUEST['movie_type_id'];
                    $title = $_REQUEST['title'];

                    $img = $_FILES['img']['name'];
                    // image upload in project folder
                    $path = './upload/videos/' . $img;
                    $tmp_file = $_FILES['img']['tmp_name'];
                    move_uploaded_file($tmp_file, $path);

                    $release_year = $_REQUEST['release_year'];
                    $format = $_REQUEST['format'];
                    $quality = $_REQUEST['quality'];
                    $sort_desc = $_REQUEST['sort_desc'];
                    $long_desc = $_REQUEST['long_desc'];
                    $languages = $_REQUEST['languages'];
                    $writers = $_REQUEST['writers'];
                    $producers = $_REQUEST['producers'];
                    $licensor = $_REQUEST['licensor'];
                    $studios = $_REQUEST['studios'];
                    $sources = $_REQUEST['sources'];
                    $genres = $_REQUEST['genres'];
                    $duration = $_REQUEST['duration'];
                    $rating = $_REQUEST['rating'];
                    $cast = $_REQUEST['cast'];
                    $link = $_REQUEST['link'];

                    $data = array(
                        "main_cat_id" => $main_cat_id, "sub_cat_id" => $sub_cat_id, "movie_type_id" => $type_id, "title" => $title, "img" => $img,
                        "release_year" => $release_year, "format" => $format, "quality" => $quality, "sort_desc" => $sort_desc,
                        "long_desc" => $long_desc, "languages" => $languages, "writers" => $writers, "producers" => $producers, "licensor" => $licensor,
                        "studios" => $studios, "sources" => $sources, "genres" => $genres, "duration" => $duration, "rating" => $rating, "cast" => $cast, "link" => $link
                    );

                    $res = $this->insert('videos', $data);
                    if ($res) {
                        echo "<script>
							alert('Video Addes Successfully !');
						</script>";
                    }
                }
                include_once('add_videos.php');
                break;
            case '/form_basic':
                include_once('form_basic.php');
                break;
            case '/form':
                include_once('form.php');
                break;
            case '/manage_comment':
                $comment = $this->select('feedback');
                include_once('manage_comment.php');
                break;
            case '/manage_download':
                $download = $this->select('download');
                include_once('manage_download.php');
                break;
            case '/manage_employee':
                $employee = $this->select('employee');
                include_once('manage_employee.php');
                break;
            case '/manage_main_categories':
                $main_categories = $this->select('main_categories');
                include_once('manage_main_categories.php');
                break;
            case '/manage_sub_categories':
                $sub_categories = $this->select('sub_categories');
                include_once('manage_sub_categories.php');
                break;
            case '/manage_movie_type':
                $movie_type = $this->select('movie_cate');
                include_once('manage_movie_type.php');
                break;
            case '/manage_user':
                $users = $this->select('users');
                include_once('manage_user.php');
                break;
            case '/manage_videos':
                $videos = $this->select('videos');
                include_once('manage_videos.php');
                break;
            case '/manage_watchlist':
                $watchlist = $this->select('watchlist');
                include_once('manage_watchlist.php');
                break;
            case '/table_basic':
                include_once('table_basic.php');
                break;

            case '/delete':
                if (isset($_REQUEST['dcomment'])) {
                    $id = $_REQUEST['dcomment'];
                    $where = array("feedback_id" => $id);
                    $res = $this->delete_where('feedback', $where);
                    if ($res) {
                        echo "
                            <script>
                            alert('Comment deleted!');
                            window.location='manage_comment';
                            </script>
                        ";
                    }
                }

                if (isset($_REQUEST['ddownload'])) {
                    $id = $_REQUEST['ddownload'];
                    $where = array("download_id" => $id);
                    $res = $this->delete_where('download', $where);
                    if ($res) {
                        echo "
                            <script>
                            alert('download deleted!');
                            window.location='manage_download';
                            </script>
                        ";
                    }
                }

                if (isset($_REQUEST['demp'])) {
                    $id = $_REQUEST['demp'];

                    $where = array("employee_id" => $id);

                    $resdata = $this->select_where('employee', $where);
                    $fetch = $resdata->fetch_object();
                    $del_img = $fetch->img;


                    $res = $this->delete_where('employee', $where);
                    if ($res) {
                        unlink('upload/employees/' . $del_img); // delete image from path
                        echo "
                            <script>
                            alert('employee deleted!');
                            window.location='manage_employee';
                            </script>
                        ";
                    }
                }

                if (isset($_REQUEST['dmain_cat'])) {
                    $id = $_REQUEST['dmain_cat'];

                    $where = array("id" => $id);

                    $resdata = $this->select_where('main_categories', $where);
                    $fetch = $resdata->fetch_object();
                    $del_img = $fetch->img;


                    $res = $this->delete_where('main_categories', $where);
                    if ($res) {
                        unlink('upload/main_category/' . $del_img); // delete image from path
                        echo "
                            <script>
                            alert('Main categroy deleted!');
                            window.location='manage_main_categories';
                            </script>
                        ";
                    }
                }

                if (isset($_REQUEST['dsub_cat'])) {
                    $id = $_REQUEST['dsub_cat'];

                    $where = array("id" => $id);

                    $resdata = $this->select_where('sub_categories', $where);
                    $fetch = $resdata->fetch_object();
                    $del_img = $fetch->img;


                    $res = $this->delete_where('sub_categories', $where);
                    if ($res) {
                        unlink('upload/sub_category/' . $del_img); // delete image from path
                        echo "
                            <script>
                            alert('Sub categroy deleted!');
                            window.location='manage_sub_categories';
                            </script>
                        ";
                    }
                }

                if (isset($_REQUEST['dmovie_type'])) {
                    $id = $_REQUEST['dmovie_type'];

                    $where = array("type_id" => $id);

                    $resdata = $this->select_where('movie_cate', $where);
                    $fetch = $resdata->fetch_object();


                    $res = $this->delete_where('movie_cate', $where);
                    if ($res) {
                       
                        echo "
                            <script>
                            alert('Movie type deleted!');
                            window.location='manage_movie_type';
                            </script>
                        ";
                    }
                }

                if (isset($_REQUEST['dusers'])) {
                    $id = $_REQUEST['dusers'];

                    $where = array("id" => $id);

                    $resdata = $this->select_where('users', $where);
                    $fetch = $resdata->fetch_object();
                    $del_img = $fetch->img;


                    $res = $this->delete_where('users', $where);
                    if ($res) {
                        unlink('upload/users/' . $del_img); // delete image from path
                        echo "
                            <script>
                            alert('User deleted!');
                            window.location='manage_user';
                            </script>
                        ";
                    }
                }

                if (isset($_REQUEST['dvideos'])) {
                    $id = $_REQUEST['dvideos'];

                    $where = array("id" => $id);

                    $resdata = $this->select_where('videos', $where);
                    $fetch = $resdata->fetch_object();
                    $del_img = $fetch->img;


                    $res = $this->delete_where('videos', $where);
                    if ($res) {
                        unlink('upload/videos/' . $del_img); // delete image from path
                        echo "
                            <script>
                            alert('video deleted!');
                            window.location='manage_videos';
                            </script>
                        ";
                    }
                }

                if (isset($_REQUEST['dwatchlist'])) {
                    $id = $_REQUEST['dwatchlist'];

                    $where = array("watchlist_id" => $id);


                    $res = $this->delete_where('watchlist', $where);
                    if ($res) {

                        echo "
                            <script>
                            alert('watchlist deleted!');
                            window.location='manage_watchlist';
                            </script>
                        ";
                    }
                }
                break;


            case '/edit':
                if (isset($_REQUEST['emain_cat'])) {
                    $id = $_REQUEST['emain_cat'];

                    $where = array("id" => $id);
                    $res = $this->select_where('main_categories', $where);
                    $fetch = $res->fetch_object();

                    if (isset($_REQUEST['save'])) {
                        $title = $_REQUEST['title'];
                        if ($_FILES['img']['size'] > 0) {
                            // get old_img name
                            $old_img = $fetch->img;

                            $img = $_FILES['img']['name'];
                            $path = 'upload/main_category/' . $img;
                            $tmp_file = $_FILES['img']['tmp_name'];
                            move_uploaded_file($tmp_file, $path);

                            $data = array("title" => $title, "img" => $img);

                            $res = $this->update_where('main_categories', $data, $where);
                            if ($res) {
                                unlink('upload/main_category/' . $old_img);
                                echo "<script>
								alert('Categories Update Success !');
								window.location='manage_main_categories';
							</script>";
                            }
                        } else {
                            $data = array("title" => $title);
                            $res = $this->update_where('main_categories', $data, $where);
                            if ($res) {
                                echo "<script>
								alert('Categories Update Success !');
								window.location='manage_main_categories';
							</script>";
                            }
                        }
                    }
                }
                include_once('edit_main_categories.php');
                break;


            case '/edit_sub':
                if (isset($_REQUEST['esub_cat'])) {
                    $id = $_REQUEST['esub_cat'];

                    $where = array("id" => $id);
                    $res = $this->select_where('sub_categories', $where);
                    $fetch = $res->fetch_object();

                    if (isset($_REQUEST['save'])) {
                        $title = $_REQUEST['title'];
                        if ($_FILES['img']['size'] > 0) {
                            // get old_img name
                            $old_img = $fetch->img;

                            $img = $_FILES['img']['name'];
                            $path = 'upload/sub_category/' . $img;
                            $tmp_file = $_FILES['img']['tmp_name'];
                            move_uploaded_file($tmp_file, $path);

                            $data = array("title" => $title, "img" => $img);

                            $res = $this->update_where('sub_categories', $data, $where);
                            if ($res) {
                                unlink('upload/sub_category/' . $old_img);
                                echo "<script>
								alert('Sub Categories Update Success !');
								window.location='manage_sub_categories';
							</script>";
                            }
                        } else {
                            $data = array("title" => $title);
                            $res = $this->update_where('sub_categories', $data, $where);
                            if ($res) {
                                echo "<script>
								alert('Sub Categories Update Success !');
								window.location='manage_sub_categories';
							</script>";
                            }
                        }
                    }
                }
                include_once('edit_sub_categories.php');
                break;


            case '/edit_emp':
                if (isset($_REQUEST['e_emp'])) {
                    $id = $_REQUEST['e_emp'];

                    $where = array("employee_id" => $id);
                    $res = $this->select_where('employee', $where);
                    $fetch = $res->fetch_object();

                    if (isset($_REQUEST['save'])) {
                        $full_name = $_REQUEST['full_name'];
                        if ($_FILES['img']['size'] > 0) {
                            // get old_img name
                            $old_img = $fetch->img;

                            $img = $_FILES['img']['name'];
                            $path = 'upload/employees/' . $img;
                            $tmp_file = $_FILES['img']['tmp_name'];
                            move_uploaded_file($tmp_file, $path);

                            $data = array("full_name" => $full_name, "img" => $img);

                            $res = $this->update_where('employee', $data, $where);
                            if ($res) {
                                unlink('upload/employees/' . $old_img);
                                echo "<script>
								alert('Employee Update Success !');
								window.location='manage_employee';
							</script>";
                            }
                        } else {
                            $data = array("full_name" => $full_name);
                            $res = $this->update_where('sub_categories', $data, $where);
                            if ($res) {
                                echo "<script>
								alert('Employee Update Success !');
								window.location='manage_employee';
							</script>";
                            }
                        }
                    }
                }
                include_once('edit_employee.php');
                break;


            case '/edit_vid':
                $main_categories = $this->select('main_categories');
                $sub_categories = $this->select('sub_categories');
                $movie_type = $this->select('movie_cate');
                if (isset($_REQUEST['evideos'])) {
                    $id = $_REQUEST['evideos'];

                    $where = array("id" => $id);
                    $res = $this->select_where('videos', $where);
                    $fetch = $res->fetch_object();
                  
                    if (isset($_REQUEST['save'])) {
                        $main_cat_id = $_REQUEST['main_cat_id'];
                        $sub_cat_id = $_REQUEST['sub_cat_id'];
                        $movie_type_id = $_REQUEST['movie_type_id'];
                        $title = $_REQUEST['title'];
                        $release_year = $_REQUEST['release_year'];
                        $format = $_REQUEST['format'];
                        $quality = $_REQUEST['quality'];
                        $sort_desc = $_REQUEST['sort_desc'];
                        $long_desc = $_REQUEST['long_desc'];
                        $languages = $_REQUEST['languages'];
                        $writers = $_REQUEST['writers'];
                        $producers = $_REQUEST['producers'];
                        $licensor = $_REQUEST['licensor'] ?? ' ';
                        $studios = $_REQUEST['studios'];
                        $sources = $_REQUEST['sources'];
                        $genres = $_REQUEST['genres'];
                        $duration = $_REQUEST['duration'];
                        $rating = $_REQUEST['rating'];
                        $cast = $_REQUEST['cast'];
                        $link = $_REQUEST['link'] ?? ' ';
                        if ($_FILES['img']['size']  > 0) {
                            // get old_img name
                            $old_img = $fetch->img;

                            $img = $_FILES['img']['name'];
                            $path = './upload/videos/' . $img;
                            $tmp_file = $_FILES['img']['tmp_name'];
                            move_uploaded_file($tmp_file, $path);

                           
                            $data = array(
                                "main_cat_id" => $main_cat_id, "sub_cat_id" => $sub_cat_id, "movie_type_id" => $movie_type_id, "title" => $title, "img" => $img,
                                "release_year" => $release_year, "format" => $format, "quality" => $quality, "sort_desc" => $sort_desc,
                                "long_desc" => $long_desc, "languages" => $languages, "writers" => $writers, "producers" => $producers, "licensor" => $licensor,
                                "studios" => $studios, "sources" => $sources, "genres" => $genres, "duration" => $duration, "rating" => $rating, "cast" => $cast, "link" => $link
                            );

                            $res = $this->update_where('videos', $data, $where);
                            if ($res) {
                                unlink('./upload/videos/' . $old_img);
                                echo "<script>
								alert('videos Update Success !');
								window.location='manage_videos';
							</script>";
                            }
                        } else {
                            $data = array(
                                "main_cat_id" => $main_cat_id, "sub_cat_id" => $sub_cat_id, "movie_type_id" => $movie_type_id, "title" => $title, 
                                "release_year" => $release_year, "format" => $format, "quality" => $quality, "sort_desc" => $sort_desc,
                                "long_desc" => $long_desc, "languages" => $languages, "writers" => $writers, "producers" => $producers, "licensor" => $licensor,
                                "studios" => $studios, "sources" => $sources, "genres" => $genres, "duration" => $duration, "rating" => $rating, "cast" => $cast, "link" => $link
                            );
                            $res = $this->update_where('videos', $data, $where);
                            if ($res) {
                                echo "<script>
								alert('videos Update Success !');
								window.location='manage_videos';
							</script>";
                            }
                        }
                    }
                }
                include_once('edit_videos.php');
                break;

            case '/status':
                if (isset($_REQUEST['status_emp'])) {
                    $id = $_REQUEST['status_emp'];

                    $where = array("employee_id" => $id);

                    // get data
                    $resdata = $this->select_where('employee', $where);
                    $fetch = $resdata->fetch_object();
                    $status = $fetch->status;
                    if ($status == "Block") {
                        $data = array("status" => "Unblock");

                        $res = $this->update_where('employee', $data, $where);
                        if ($res) {
                            echo "<script>
							alert('employee Unblock Success!');
							window.location='manage_employee';
						</script>";
                        }
                    } else {
                        $data = array("status" => "Block");

                        $res = $this->update_where('employee', $data, $where);
                        if ($res) {

                            echo "<script>
							alert('employee Block Success!');
							window.location='manage_employee';
						</script>";
                        }
                    }
                }

                if (isset($_REQUEST['users_st'])) {
                    $id = $_REQUEST['users_st'];

                    $where = array("id" => $id);

                    // get data
                    $resdata = $this->select_where('users', $where);
                    $fetch = $resdata->fetch_object();
                    $status = $fetch->status;
                    if ($status == "Block") {
                        $data = array("status" => "Unblock");

                        $res = $this->update_where('users', $data, $where);
                        if ($res) {
                            echo "<script>
							alert('users Unblock Success!');
							window.location='manage_user';
						</script>";
                        }
                    } else {
                        $data = array("status" => "Block");

                        $res = $this->update_where('users', $data, $where);
                        if ($res) {
                            unset($_SESSION['uid']);
                            unset($_SESSION['full_name']);

                            echo "<script>
							alert('users Block Success!');
							window.location='manage_user';
						</script>";
                        }
                    }
                }
                break;
                // case '/error':
                //     include_once('error.php');
                //     break;

            default:
                include_once('error.php');
                break;
        }
    }
}

$Obj = new Control;
