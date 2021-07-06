<?php

require_once __DIR__ . '/src/functions.php';
require_once __DIR__ . '/src/sendMail.php';
require_once __DIR__ . '/src/getSlides.php';
require_once __DIR__ . '/src/getDepartmentsSlugs.php';
require_once __DIR__ . '/src/getDepartment.php';
require_once __DIR__ . '/src/getDepartments.php';
require_once __DIR__ . '/src/getDepartmentPartners.php';
require_once __DIR__ . '/src/updateDepartment.php';
require_once __DIR__ . '/src/getPartnersSlugs.php';
require_once __DIR__ . '/src/getPartners.php';
require_once __DIR__ . '/src/updatePartner.php';
require_once __DIR__ . '/src/getAboutUs.php';
require_once __DIR__ . '/src/updateAboutUs.php';
require_once __DIR__ . '/src/getDepartmentFooterInfo.php';
require_once __DIR__ . '/src/updateDepartmentFooterInfo.php';

// Default index page
//router('GET', '^/api/$', function() {
//    echo '<a href="users">List users</a><br>';
//});
//
//// GET request to /users
//router('GET', '^/api/users$', function() {
//    echo '<a href="users/1000">Show user: 1000</a>';
//});
//
//// With named parameters
//router('GET', '^/api/users/(?<id>\d+)$', function($params) {
//    echo "You selected User-ID: ";
//    var_dump($params);
//});
//
//// POST request to /users
//router('POST', '^/api/users$', function() {
//    header('Content-Type: application/json');
//    $json = json_decode(file_get_contents('php://input'), true);
//    echo json_encode(['result' => 1]);
//});


router('GET', '^/get-slides/(\w+)$', function($department){
  getSlides($department);
});
router('GET', '^/get-department-partners/(\w+)$', function($department){
  getDepartmentPartners($department);
});
router('GET', '^/get-department/(\w+)$', function($department){
  getDepartment($department);
});
router('POST', '^/update-department/(\w+)$', function($department){
  updateDepartment($department);
});
router('POST', '^/update-partner/(\w+)$', function($partner){
  updatePartner($partner);
});
router('GET', '^/get-department-footer-info/(\w+)$', function($department){
  getDepartmentFooterInfo($department);
});
router('POST', '^/update-department-footer-info/(\w+)$', function($department){
  updateDepartmentFooterInfo($department);
});

//router('GET', '^/api/get-slides/(\w+)$', function($department){
//  getSlides($department);
//});
//router('GET', '^/api/get-department-partners/(\w+)$', function($department){
//  getDepartmentPartners($department);
//});
//router('GET', '^/api/get-department/(\w+)$', function($department){
//  getDepartment($department);
//});


router('POST', '^/api/send-mail$', function(){
  sendMail();
});
router('GET', '^/api/get-departments-slugs$', function(){
  getDepartmentsSlugs();
});
router('GET', '^/api/get-departments$', function(){
  getDepartments();
});
router('GET', '^/api/get-partners-slugs$', function(){
  getPartnersSlugs();
});
router('GET', '^/api/get-partners$', function(){
  getPartners();
});
router('GET', '^/api/get-about-us$', function(){
  getAboutUs();
});
router('POST', '^/api/update-about-us$', function(){
  updateAboutUs();
});

header("HTTP/1.0 404 Not Found");
echo '404 Not Found';
?>
