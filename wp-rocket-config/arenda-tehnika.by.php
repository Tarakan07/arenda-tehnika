<?php
defined( 'ABSPATH' ) || exit;

$rocket_cookie_hash = 'f37f549c6029448fdbdd4e0771ef19c5';
$rocket_logged_in_cookie = 'wordpress_logged_in_f37f549c6029448fdbdd4e0771ef19c5';
$rocket_cache_mobile_files_tablet = 'desktop';
$rocket_cache_mobile = 1;
$rocket_cache_reject_uri = '/(.+/)?feed/?.+/?|/(?:.+/)?embed/|/(index\.php/)?wp\-json(/.*|$)';
$rocket_cache_reject_cookies = 'wp-postpass_|wptouch_switch_toggle|comment_author_|comment_author_email_';
$rocket_cache_reject_ua = 'facebookexternalhit|WhatsApp';
$rocket_cache_query_strings = array();
$rocket_secret_cache_key = '';
$rocket_cache_ssl = 1;
$rocket_do_caching_mobile_files = 0;
$rocket_cache_ignored_parameters = array(
  'utm_source' => 1,
  'utm_medium' => 1,
  'utm_campaign' => 1,
  'utm_expid' => 1,
  'utm_term' => 1,
  'utm_content' => 1,
  'mtm_source' => 1,
  'mtm_medium' => 1,
  'mtm_campaign' => 1,
  'mtm_keyword' => 1,
  'mtm_cid' => 1,
  'mtm_content' => 1,
  'pk_source' => 1,
  'pk_medium' => 1,
  'pk_campaign' => 1,
  'pk_keyword' => 1,
  'pk_cid' => 1,
  'pk_content' => 1,
  'fb_action_ids' => 1,
  'fb_action_types' => 1,
  'fb_source' => 1,
  'fbclid' => 1,
  'campaignid' => 1,
  'adgroupid' => 1,
  'adid' => 1,
  'gclid' => 1,
  'age-verified' => 1,
  'ao_noptimize' => 1,
  'usqp' => 1,
  'cn-reloaded' => 1,
  '_ga' => 1,
  'sscid' => 1,
  'gclsrc' => 1,
  '_gl' => 1,
  'mc_cid' => 1,
  'mc_eid' => 1,
  '_bta_tid' => 1,
  '_bta_c' => 1,
  'trk_contact' => 1,
  'trk_msg' => 1,
  'trk_module' => 1,
  'trk_sid' => 1,
  'gdfms' => 1,
  'gdftrk' => 1,
  'gdffi' => 1,
  '_ke' => 1,
  'redirect_log_mongo_id' => 1,
  'redirect_mongo_id' => 1,
  'sb_referer_host' => 1,
  'mkwid' => 1,
  'pcrid' => 1,
  'ef_id' => 1,
  's_kwcid' => 1,
  'msclkid' => 1,
  'dm_i' => 1,
  'epik' => 1,
  'pp' => 1,
);
$rocket_cache_mandatory_cookies = '';
$rocket_cache_dynamic_cookies = array();
