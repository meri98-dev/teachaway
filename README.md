# teachaway
Coding Challenge

To install Coding Challenge on your local computer please follow this instructions:

---Part One--- 
	
	##Getting Project Files

1. Copy the URL of the repository. In this case the URL is https://github.com/meri98-dev/teachaway.git
2. On your web server folder open command prompt
3. On the command line write the following command: git clone https://github.com/meri98-dev/teachaway.git

---Part Two--- 
	
	##Connecting with database

4. After the process is done open your web server database for example localhost/phpmyadmin
5. Create a database for example teachaway
6. Go to the database you just created -> Import -> Choose File -> Go (teachaway.sql should be uploaded)
7. On the files in the folder teachaway go to teachaway/wp-config.php and enter database name, username and password according to your local computer data.

---Part Three--- 

	##Setting up Virtual Host 

7. Setting up Virtual Host for our project.
8. Open Run and enter the following path C:\xampp\apache\conf\extra\httpd-vhosts.conf
9. Follow the example below to create the same virtual host for your project 

			##<VirtualHost *:80>
			    ##ServerAdmin webmaster@dummy-host.example.com
			    ##DocumentRoot "C:/xampp/htdocs/dummy-host.example.com"
			    ##ServerName dummy-host.example.com
			    ##ServerAlias www.dummy-host.example.com
			    ##ErrorLog "logs/dummy-host.example.com-error.log"
			    ##CustomLog "logs/dummy-host.example.com-access.log" common
			##</VirtualHost>

10. Save this and open Run. Enter the following path C:\Windows\System32\drivers\etc
11. Open file hosts with Notepad 
12. Enter the IP adress and the host name. Each entry should be kept on an individual line. 
    The IP address should be placed in the first column followed by the corresponding host name. 
    The IP address and the host name should be separated by at least one space.
    Exp:    127.0.0.1	local.teachaway.com  
13. Save this file. If it cannot be saved you should run the file as administrator before making this change.
14. Restart the computer

---Part Four --- 

	##Activating theme and plugins

15. On you browser enter the URL you decided for your website, in our case local.teachaway.com
16. Go to local.teachaway.com/wp-admin and enter the following credentials 
		username: teachawayadmin
		password: testing!
17. On the  left there is the wordpress dashboard, go to Appereance - Themes and activate Understrap, if it is not already activated
18. Go to Plugins and activate Advanced Custom Fields PRO and Safe SVG, if they are not activated. 
