
LESU 
===================
### LARAVEL Eset Server Update ###
The **LESU** is a script that can help you to run a sever update for eset products.


----------


Screen-Shots
-------------

Admin Dashboard:

![admin dashboard](https://github.com/ayooby/nod32-server-update/blob/master/public/asset/admin-panel.png?raw=true)

User Creation:

![User Creation page](https://github.com/ayooby/nod32-server-update/blob/master/public/asset/user-creation.png?raw=true)

> **What's Working:**

> - Create User.
> - Delete User.
> - Disable expired User.


#### <i class="icon-info"></i> What's NOT Working

 - User Edit.
 - Admin Edit, Create.
 - Password Generator.




### <i class="icon-hdd"></i> **Installing**

 1. Install via terminal
 
 clone LESU

 `git clone https://github.com/ayooby/eset-server-update.git`
 
   `composer update`
   

   `php artisan migrate`

 2. Install on shared hosting
 
LESU can work on shared hosts perfectly.
This link may help you:
[Deploy Laravel on Shared Host](http://blog.kongnir.com/2015/09/25/setting-up-laravel-5-on-shared-hosting-server/)


#### <i class="icon-pencil"></i> Creating User

Admin dashboard Login URL is:
[http://example.com/auth/login](http://example.com/auth/login)

Default user/pass for admin dashboard is:  ***admin/admin***
[http://example.com/auth/login](http://example.com/auth/login)

to create new user click on add user this sample url:
[http://example.com/admin/create](http://example.com/admin/create)


#### <i class="icon-hdd"></i> where to add update files

You should upload all update files in
 **storage/updates** 
 folder.

#### <i class="icon-hdd"></i> What is right URL to get Updates

URL for download updates ESET products is:
[http://example.com/down/](http://example.com/down/)

<i class="icon-info"></i> change update address
You can also change address for download updates in Route file in:

`app/Http/routes.php`

change these line to your desire address:
` get('/down', ['uses' => 'FileController@index']);`
  `get('/down/{file_name}', ['uses' => 'FileController@getByfile']);`
  `get('/down/{folder}/{file_name}', ['uses' => 'FileController@getFileByFolder']); `



----------



### Support LESU

Just tell me what should i add to this project.


