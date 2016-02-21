#check if user exist in the database.
#create a funciton to check if user exist.
function Login()
{
	if(empty($_POST['username']))
		{
			$this->HandleError("Username is empty!");
			return false;
		}

	if(empty($_POST['password'])))
		{
			$this->HanddleError("Password is empty!");
			return false;	
		}
	$username = trim($_POST['username']);
	$password = trim($_POST['password']);

	if(!$this->LoginDBCheck($username,$password)
		{
			return false;
		}

	session_start();
	$_SESSION[$this->GetLoginSessionVar() = $username;
	return true;
}

function LoginDBCheck($username,$password)
	{
		if(!$this->DBLogin())
		{
			$this->HandleError("Database login failed!");
		}
	}

	
