<!DOCTYPE HTML>
<html lang="en">

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">

<title><?php
if(is_home() || is_front_page()) {
echo $sitename;
echo ' | ';
echo $sitedesc;
}
elseif(is_404()){
echo '404 Error (Page Not Found) - ';
echo $sitename;
}
else{
echo trim(wp_title('', false));
echo ' - ';
echo $sitename;
} ?></title>
  
<style>
  <?php include 'style.css'; ?>
</style>
  
<?php if (is_page('cart') || is_page('checkout')) { ?>
<link rel="stylesheet" id="select2-css" href="<?php echo site_url(); ?>/wp-content/plugins/woocommerce/assets/css/select2.css">
<?php } ?>

<?php wp_head(); ?>
</head>

<body>
  
