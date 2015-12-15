<?php
session_start();

// Set the lang variable to our default
$lang = 'en'; 

// Get the lang query string from the URL
switch(perch_get('lang')) {
    // set the lang variable according to the query string
    case 'en':
        $lang = 'en';
        break;
    case 'it':
        $lang = 'it';
        break;
    // if there is no query string, check for a session cookie
    default: 
        if (isset($_SESSION['lang'])) {
            $lang = $_SESSION['lang'];
        }
        break;
}
// set our session cookie to whatever the lang variable is
$_SESSION['lang'] = $lang;

// make the $lang variable available in HTML templates
PerchSystem::set_var('lang', $lang);

?>

<!doctype html>
<html class="no-js" lang="<?php echo $lang;?>">
<head>
  <title><?php perch_pages_title(); ?></title>
	<?php perch_page_attributes(); ?>
</head>