
<?php

/*****  Cookies    ****/
/**
 * cookies are a machanism for storing data in the remote
 * browser and thus tracking or identifying return users.
 * You can set specific data to be stored in the browser,
 * and retrieve it when the user vistis the site again.
 */

// set cookies
setcookie('name', 'Brad', time() + 86400 * 30);

if(isset($_COOKIE['name'])) {
    echo $_COOKIE['name'];
}
// for delete
setcookie('name', '', time() - 86400 );






