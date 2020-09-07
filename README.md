# Goldman Sachs Hackathon

As financial literacy is becoming increasingly accessible and also more diverse in nature, it is important that youths have access to the right information to help facilitate an apt investment plan for retirement. Our solution is to create a centralised solution that leverages on Goldman Sachs' extensive knowledge on the financial realm. This solution will be able to better help youths in making informed decisions when planning for their future. 

## Installation

Please ensure thay you've installed a web server and are able to process php files.

* Windows-friendly Web Server
  * [WAMP](https://sourceforge.net/projects/wampserver/)
  * [XAMPP](https://www.apachefriends.org/download.html)
* Macintosh-friendly Web Server
  * [MAMP](https://www.mamp.info/en/downloads/)
  * [XAMPP](https://www.apachefriends.org/download.html)


## Setting up

Ensure that the database parameters (located at include/ConnectionManager.php) have been set up accordingly:

```python
public function getConnection() {
	# Modify the following parameters
    $servername = 'db_server_name';
    $username = 'db_username';
    $password = '!db_password';
    $dbname = 'gshdb';

    . . .

    }
```

## Live view 
A live view of the project is available here: [http://ec2-18-140-60-54.ap-southeast-1.compute.amazonaws.com/app/1_welcome.html](http://ec2-18-140-60-54.ap-southeast-1.compute.amazonaws.com/app/1_welcome.html)
