# WPDebloatCollection
##### Updated 12-1-2024 | Project Status: Active
  
## What is this?
This collection of PHP snippets is designed to optimize, declutter, and enhance the functionality of WordPress. These snippets can disable unused features, remove admin nags and notices, and improve security (eg., a snippet that changes/redesigns the wordpress login page making it not look like a wordpress installation, or removing login error notices). To use these snippets, you should add them to a PHP snippets plugin or your ```functions.php``` file (though the latter is not recommended). Using a snippets plugin gives you greater control over where the snippets run, allowing you to configure them to execute only on specific pages, in the backend, or based on certain conditions.

#### Update: 12-1-2024
I wanted to provide a quick update: **This project is still active!** We will soon be uploading many of the scripts used for WordPress security hardening and optimization in our line of work at @InviseSolutions. During recent work, we've discovered default WordPress installations can be surprisingly vulnerable, allowing such features as unauthenticated user enumeration and a REST API that doesn't require authentication for POST events.

These snippets are designed for users who may not have the time or expertise to delve into logging and security configurations but still want to enhance their WordPress site's security and performance. Stay tuned for more updates and scripts to help you keep your site secure and clutter-free!

  
## Scripts / PHP Snippets Overview
##### A simple description next to each snippet will be featured below. 
  
#### ```remove_spam_admin_notices```
Filters spam admin notices and removes or hides them. Examples include activation, subscription, and "buy premium" nags. For us, it's really annoying to close 5-8 nag notices at the top of every admin page, thus this snippet was created


