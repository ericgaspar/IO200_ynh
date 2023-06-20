<?php
// Database Settings
define('CMS_DB_HOSTNAME', 'localhost');
define('CMS_DB_USERNAME', '__DB_USER__');
define('CMS_DB_PASSWORD', '__DB_PWD__');
define('CMS_DB_DATABASE', '__DB_NAME__');

// CMS Settings
define('CMS_SECRETKEY', '__CMS_SECRETKEY__');
define('CMS_ORIGINAL_IMAGE_BASEPATH', '/storage/originals'); // photo originals folder (relative to website directory)
define('CMS_ORIGINAL_IMAGE_SUBFOLDERDEPTH', 2); // do not change this setting [integer]

// Website Settings
define('WEBSITE_SECRETKEY', '__WEBSITE_SECRETKEY__'); // max 16 characters
define('WEBSITE_TEMP_BASEPATH', '/storage/temp'); // temporary folder (relative to website directory)
define('WEBSITE_CACHE_IMAGE_BASEPATH', '/storage/cache'); // photo cache folder (relative to website directory)
define('WEBSITE_CACHE_IMAGE_SUBFOLDERDEPTH', 3); // do not change this setting [integer]
define('WEBSITE_CACHE_IMAGE_REVERSEPATH', true); // do not change this setting [boolean]
define('WEBSITE_URL', 'https://__DOMAIN__'); // website url without trailing slash
