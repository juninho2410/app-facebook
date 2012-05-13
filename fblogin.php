<?php
include('lib/db.php');
require 'lib/facebook.php';
require 'lib/fbconfig.php';
// Connection...
$user = $facebook->getUser();
if ($user)
 {
 $logoutUrl = $facebook->getLogoutUrl();
 try {
 $userdata = $facebook->api('/me');
 } catch (FacebookApiException $e) {
error_log($e);
$user = null;
 }
$_SESSION['facebook']=$_SESSION;
$_SESSION['userdata'] = $userdata;
$_SESSION['logout'] =  $logoutUrl;
header("Location: home.php");
}
else
{ 
$loginUrl = $facebook->getLoginUrl(array( 
'scope' => 'user_about_me,user_activities,user_birthday,user_checkins,user_education_history,user_events,user_groups,user_hometown,user_interests,user_likes,user_location,user_notes,user_online_presence,user_photo_video_tags,user_photos,user_relationships,user_relationship_details,user_religion_politics,user_status,user_videos,user_website,user_work_history,email,read_friendlists,read_insights,read_mailbox,read_requests,read_stream,xmpp_login,ads_management,create_event,manage_friendlists,manage_notifications,offline_access,publish_checkins,publish_stream,rsvp_event,sms,publish_actions,manage_pages'
));
echo '<a href="'.$loginUrl.'"><img src="facebook.png" title="Login with Facebook" /></a>';
 }
 ?>
<h1>Facebook SDK Login - Basic Information</h1>
<h4><a href='http://9lessons.info'>9lessons.info</a></h4>