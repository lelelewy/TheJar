Make sure your are able to access server at:
http://ec2-54-197-187-11.compute-1.amazonaws.com/
You will see a Red Hat Bannner Test Page if it works.

//=====================================================//

To Access Server Download:
Putty for Windows (Ask for .ppk key needed)
username: ec2-user

//=====================================================//

For Macs follow these directions (Ask for .pem key needed)
http://docs.aws.amazon.com/AWSEC2/latest/UserGuide/AccessingInstancesLinux.html#AccessingInstancesLinuxSSHClient
username: ec2-user

Use ssh in terminal for Mac
//=====================================================//

To send files and get files download filezila

Add the key go to edit -> settings click sftp, then add keyfile find the file and click ok.

host: http://ec2-54-197-187-11.compute-1.amazonaws.com
username: ec2-user
port: 22

local files on left and server files on right, drag files in either way. 

files are only allowed to be transfered to /home/ec2-user/Program

from there use "sudo cp <filename> <directory folder>"
for example while in /home/ec2-user/Program "cp test.php /var/www/html/test.php" without quotes

the apache server is listed under /var/www/html/

if you have a php file that you need to be tested or viewed it would go there!

Ask if you need help!
