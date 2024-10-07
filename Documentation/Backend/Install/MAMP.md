**MAMP GUIDE for warehouse project** 

Note: MAMP is not recommended for production releases,

it can be used for fast  local testing, but it's not intended to be used on production servers. 

Also this need a rewrite for current project 
With Php and mysql already running on server laptop 

  


  
Then continue with the ANDROID section at the last pages of this document.

  -----------------------------
    
  
  
  
  
  

#### With No php and mysql installed (Easy mode)

  
  

Download and install desktop app: MAMP v6.3  
  

  
[MAMP](https://www.mamp.info/en/downloads/)

In the MAMP window, change the php version to 7.3.24 and press save.



  

MAMP will ask to start the servers, press “Yes”.
![[images/5f1113aee7756613d14f1f0229d673f2.png]]
  
  

In the MAMP window, go to “WebStart”.
![[images/41c8af3478000e234f6cfb7beb8886d1.png]]

  
  
  

A web page will open on default browser:  
click on MYSQL and then in phpmyadmin.
![[images/725fa08147d803118ab28f2e7cb6a054.png]]
  

  

PhpMyadmin page will open, press NEW 
![[images/b8f59103201341f92bf440020cd45a48.png]]

  

Fill “ikin” on database name and press create. 

  ![[images/1d0e750bfdf9af1bfbb3c6d232f6c8c8.png]]

  
  

Once the database is created, check ‘ikin’ DB is selected on the left and press import
![[images/25dab03bc115c115c57dec8afb433753.png]]
  
  

Press choose file and select ikin.sql file.

  ![[images/295ea6ff1ba6298f091ff9b483a547c5.png]]
  ![[images/8eec1aa358de217c8eb299bcc9c2b62a.png]]
  
  

If everything went fine you should see a success page like this. 
![[images/72f862e4082dafb3cf64114f634a5a4f.png]]

  
  

Go to /Users/YOURUSERNAME/Sites in file browser and delete localhost folder.

  ![[images/09ef54ac0b813df1f24487b39a1090ce.png]]

  
Unzip and drop ar-ikin-server.zip content in /Users/YOURUSERNAME/Sites

![[images/84393f1c299c4408c238518a682e1e88.png]]



