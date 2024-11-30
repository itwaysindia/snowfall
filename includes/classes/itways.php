<?php 
class itways extends db{
   
    public function getConnection() {
        return $this->mysqli;
    }




    function login() {
        // Sanitize input to prevent SQL injection
         $email = $this->mysqli->real_escape_string($_POST['email']);
         $password = md5($email . $_POST['password']);
    
        // Query the database to check for active user with the provided email and password
        $data = $this->mysqli->query("SELECT * FROM users WHERE email = '$email' AND password = '$password' AND status = 'active'");
    
        if ($data->num_rows) {
            // If user exists and login is successful
            $data_obj = $data->fetch_object();
    
            @session_start();
            $_SESSION['admin'] = $data_obj->id;
    
            // Set session variables for user details
            $_SESSION['email'] = $data_obj->email;
            $_SESSION['usertype'] = $data_obj->usertype;
            $_SESSION['name'] = $data_obj->name;
    
            // Set "Remember Me" cookie if checkbox is checked
            if (isset($_POST['remember_me'])) {
                $token = hash('sha256', $data_obj->id . $data_obj->email);  // Generate a secure token
                setcookie('remember_me', $token, time() + 86400, '/', '', true, true);  // Set cookie for 24 hours
                setcookie('user_id', $data_obj->id, time() + 86400, '/', '', true, true);
            }
    
            // Redirect to dashboard upon successful login
            $_SESSION['suc'] = "Login successful, welcome back!";
            header('Location: ../dashboard/');  // Redirect to dashboard
            exit;
        } else {
            if(isset($_GET['error'])){
                $i = $_GET['error'];
                $i++;
            }else{
                $i = 1;
            }
            // If login fails, show error message
            $_SESSION['fal'] = "Invalid email or password. Please try again.";
            header('Location: ?error='. $i);  // Redirect back to login page
            exit;
        }
    }


    function logout()
	{
		session_start();
		session_destroy();
		
		// Clear cookies
        setcookie('remember_me', '', time() - 3600, '/');
        setcookie('user_id', '', time() - 3600, '/');

		header("location: ?logout");
		die;
	}


    
    
	function check_session()
	{
	 @session_start();
        if (empty($_SESSION['admin'])) {
            // Check if "Remember Me" cookie is set and valid
            if (isset($_COOKIE['remember_me']) && isset($_COOKIE['user_id'])) {
                $user_id = $_COOKIE['user_id'];
                $token = $_COOKIE['remember_me'];

                // Validate the token from the cookie
                $data = $this->mysqli->query("SELECT * FROM user WHERE id = '$user_id' AND status='active'");
                if ($data->num_rows) {
                    $data_obj = $data->fetch_object();
                    $valid_token = hash('sha256', $data_obj->id . $data_obj->username);
                    if ($token === $valid_token) {
                        // Restore the session
                        $_SESSION['admin'] = $data_obj->id;
                        return true;
                    }
                }
            }

            // If session and cookie are both not valid, redirect to login
            session_destroy();
            header("location: ".BASE_URL);
            die;
        }
    }



    
	function userdata()
	{
		@session_start();
		$user = @$_SESSION['admin'];
		if ($user) {
			$data = $this->mysqli->query("SELECT * FROM users where id = $user ");
			if ($data->num_rows) {
				return $data->fetch_object();
			} else {
				$itways = new itways();
				$itways->logout();
			}
		}
	}


    function getQuery($sql)
	{

		$data = $this->mysqli->query($sql);
		if ($data->num_rows == '1') {
			$row[] = $data->fetch_object();
		} else {

			while ($r = $data->fetch_object()) {
				$row[] = $r;
			}
		}
		return @$row;
	}


	function get($table)
	{

		$data = $this->mysqli->query("SELECT * FROM $table order by id desc ");
		if ($data->num_rows == '1') {
			$row[] = $data->fetch_object();
		} else {
			while ($r = $data->fetch_object()) {
				$row[] = $r;
			}
		}
		return @$row;
	}

	function count($sql)
	{
		$data = $this->mysqli->query($sql);
		$row_count =   $data->num_rows;
		return $row_count;
	}
	function countTable($table)
	{
		$data = $this->mysqli->query("SELECT * FROM $table");
		$row_count =   $data->num_rows;
		return $row_count;
	}


	function getid($table, $id)
	{

		$data = $this->mysqli->query("SELECT * FROM $table where id = $id ");
		if ($data->num_rows == '1') {
			$row[] = $data->fetch_object();
		} else {
			while ($r = $data->fetch_object()) {
				$row[] = $r;
			}
		}
		return @$row;
	}
	function getwhere($table, $where)
	{
		//echo ("SELECT * FROM $table where $where ");
		//die;
		$data = $this->mysqli->query("SELECT * FROM $table where $where ");
		if ($data->num_rows == '1') {
			$row[] = $data->fetch_object();
		} else {
			while ($r = $data->fetch_object()) {
				$row[] = $r;
			}
		}
		return @$row;
	}
	function delete($table, $where, $location)
	{
		//echo "delete FROM $table where $where ";
		//die;
		$data = $this->mysqli->query("delete FROM $table where $where ");
		if ($data) {
			$_SESSION['suc'] = $_GET['source'] . ' deleted successfully';
		} else {
			$_SESSION['fal'] = 'Opps! not deleted';
		}
		header("location: $location");
		die;
	}





	function uri()
	{
		$dir = basename(getcwd());
		$path = $_SERVER['PHP_SELF'];
		$filename = basename($path, ".php");
		return $dir . '/' . $filename . '/';
	}

	function cwd()
	{
		$dir = basename(getcwd());

		return $dir . '/';
	}


	function no_access()
	{
		$_SESSION['fal'] = 'You are not permitted to access this page!';
		echo 	'<div class="alert alert-danger" >
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
						<strong>Failed </strong> ' . $_SESSION['fal'] . '
					</div>';
		unset($_SESSION['fal']);
	}


	function slider($page1)
{
	echo "<script>console.log('Current Page: ')</script>";
    $page2 = trim($_SERVER['REQUEST_URI'], '/'); // Get current URI without leading/trailing slashes
    if ($page1 == $page2) {
        echo 'active'; // Return class for active menu item
    }
}



	function message()
	{
		$position = 'top-right';
		if (@$_SESSION['suc']) {
			// echo '<div class="alert alert-success alert-dismissible fade show" id="alert-success" role="alert">
			// 		<strong>Success:</strong> ' . $_SESSION['suc'] . '
			// 		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			// 	  </div>';
			$message = $_SESSION['suc'];
			$this->popupAlert($message, 'success', $position);
		} elseif (@$_SESSION['fal']) {
			// echo '<div class="alert alert-danger alert-dismissible fade show" id="alert-failed" role="alert">
			// 		<strong>Failed:</strong> ' . $_SESSION['fal'] . '
			// 		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			// 	  </div>';
			$message = $_SESSION['fal'];
			$this->popupAlert($message, 'danger', $position);

		}
	
		unset($_SESSION['suc']);
		unset($_SESSION['fal']);
	
		// Include JavaScript to auto-dismiss the alert
		echo '<script>
				setTimeout(function() {
					var alertSuccess = document.getElementById("alert-success");
					var alertFailed = document.getElementById("alert-failed");
					if (alertSuccess) {
						alertSuccess.classList.remove("show");
						alertSuccess.classList.add("fade");
					}
					if (alertFailed) {
						alertFailed.classList.remove("show");
						alertFailed.classList.add("fade");
					}
				}, 5000);
			</script>';
	}
	

	function popupAlert($message, $type = 'success', $position = 'top-right')
{
    // Map position class for styling
    $positionClass = '';
    switch ($position) {
        case 'top-right':
            $positionClass = 'position-absolute top-0 end-0 p-3';
            break;
        case 'bottom-right':
            $positionClass = 'position-absolute bottom-0 end-0 p-3';
            break;
        case 'top-left':
            $positionClass = 'position-absolute top-0 start-0 p-3';
            break;
        case 'bottom-left':
            $positionClass = 'position-absolute bottom-0 start-0 p-3';
            break;
        default:
            $positionClass = 'position-absolute top-0 end-0 p-3'; // Default to top-right
    }

    // Alert class based on type
    $alertClass = $type === 'success' ? 'alert-success' : 'alert-danger';

    // Output the alert HTML
    echo '<div class="' . $positionClass . '" id="popup-alert" style="z-index: 1055;">
            <div class="alert ' . $alertClass . ' alert-dismissible fade show shadow" role="alert">
                <strong>' . ucfirst($type) . ':</strong> ' . $message . '
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
          </div>';

    // Include JavaScript for auto-dismiss with transition
    echo '<script>
            document.addEventListener("DOMContentLoaded", function () {
                const alertElement = document.getElementById("popup-alert");
                if (alertElement) {
                    setTimeout(function () {
                        alertElement.querySelector(".alert").classList.remove("show");
                        alertElement.querySelector(".alert").classList.add("fade");
                        setTimeout(function () {
                            alertElement.remove();
                        }, 500); // Wait for fade-out transition
                    }, 5000); // 5 seconds before hiding
                }
            });
        </script>';
}




    function csrf()
	{
		@session_start();
		$token = bin2hex(random_bytes(32)); // Generate a random token
		$_SESSION['csrf_token'] = $token; // Store the token in the session
		return $token;
	}




	function getStr($param){
		return isset($_GET[$param]) ? $this->sanitize($_GET[$param]) : null;
	}



    
}


?>