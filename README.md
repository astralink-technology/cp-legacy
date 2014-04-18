#CP-LEGACY
PHP legacy functions

### Helper Functions

##### errorLog `Released v0.1`

Error Log for apache

````
http://{{host-name}}/helper/errorLog
````
**Parameters**

`POST` `Message` - Log Message

##### verify `Released v0.1`

Verification of password for old PHP5.5 password_compat library
 
````
http://{{host-name}}/helper/verify
````
**Parameters**

`POST` `InputPassword` - Password input from users

`POST` `HashedPassword` - Hashed password retrieved from the database