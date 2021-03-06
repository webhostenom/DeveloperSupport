<?php
include("sessions.php");

//Configuration Settings

$paypal[business]="$paypal_id";
$paypal[site_url]="$site_url/";
$paypal[image_url]="";
$paypal[success_url]="ppsuccess.php";
//$paypal[success_url]="php_paypal/ipn/ipn.php";
$paypal[cancel_url]="ppcancelled.php";
$paypal[notify_url]="ipn/ipn.php";
$paypal[return_method]="2"; //1=GET 2=POST
$paypal[currency_code]="$currency"; //[USD,GBP,JPY,CAD,EUR]
$paypal[lc]="US";

//$paypal[url]="http://www.paypal.com/cgi-bin/webscr";

if($Server == 0){
$paypal[url]="https://www.paypal.com/cgi-bin/webscr";
} elseif($Server == 1){
$paypal[url]="https://www.sandbox.paypal.com/cgi-bin/webscr";
}

$paypal[post_method]="$ppmethod"; //fso=fsockopen(); curl=curl command line libCurl=php compiled with libCurl support
$paypal[curl_location]="$curl_path";

$paypal[bn]="toolkit-php";
$paypal[cmd]="_xclick";

//Payment Page Settings
$paypal[display_comment]="0"; //0=yes 1=no
$paypal[comment_header]="Comments";
$paypal[continue_button_text]="Continue >>";
$paypal[background_color]=""; //""=white 1=black
$paypal[display_shipping_address]="1"; //""=yes 1=no
$paypal[display_comment]="1"; //""=yes 1=no


//Product Settings
$paypal[item_name]="$_POST[item_name]";
$paypal[item_number]="$_POST[item_number]";
$paypal[amount]="$_POST[amount]";
$paypal[on0]="Invoice";
$paypal[os0]="$_POST[os0]";
$paypal[on1]="$_POST[on1]";
$paypal[os1]="$_POST[os1]";
$paypal[quantity]="$_POST[quantity]";
$paypal[edit_quantity]=""; //1=yes ""=no
$paypal[invoice]="$_POST[invoice]";
$paypal[tax]="$_POST[tax]";

//Shipping and Taxes
$paypal[shipping_amount]="$_POST[shipping_amount]";
$paypal[shipping_amount_per_item]="";
$paypal[handling_amount]="";
$paypal[custom_field]="$PaypalAuthKey";

//Customer Settings
$paypal[firstname]="$_POST[firstname]";
$paypal[lastname]="$_POST[lastname]";
$paypal[address1]="$_POST[address1]";
$paypal[address2]="$_POST[address2]";
$paypal[city]="$_POST[city]";
$paypal[state]="$_POST[state]";
$paypal[zip]="$_POST[zip]";
$paypal[email]="$_POST[email]";
$paypal[phone_1]="$_POST[phone1]";
$paypal[phone_2]="$_POST[phone2]";
$paypal[phone_3]="$_POST[phone3]";

?>