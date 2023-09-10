<?php

require_once __DIR__ . '/src/functions.php';
require_once __DIR__ . '/src/sendMail.php';
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
require_once __DIR__ . '/src/getPartnersImages.php';
require_once __DIR__ . '/src/getSliderImages.php';
require_once __DIR__ . '/src/updateImages.php';
require_once __DIR__ . '/src/removePartner.php';
require_once __DIR__ . '/src/login.php';
require_once __DIR__ . '/src/auth.php';
require_once __DIR__ . '/src/is_auth.php';
require_once __DIR__ . '/src/logout.php';
require_once __DIR__ . '/src/updateFile.php';


//ROUTES THAT DON'T NEED AUTHORIZATION

//AUTHORIZATION

router('POST', '/login$', function(){
  login();
});

router('POST', '/logout$', function(){
  logout();
});

router('GET', '/auth$', function(){
  auth();
});

//GET DEPARTMENTS INFO

router('GET', '/get-departments$', function(){
  getDepartments();
});

router('GET', '/get-department/(\w+)$', function($department){
  getDepartment($department);
});

router('GET', '/get-departments-slugs$', function(){
  getDepartmentsSlugs();
});

router('GET', '/get-department-partners/(\w+)$', function($department){
  getDepartmentPartners($department);
});

router('GET', '/get-department-footer-info/(\w+)$', function($department){
  getDepartmentFooterInfo($department);
});

//GET PARTNERS INFO

router('GET', '/get-partners$', function(){
  getPartners();
});

router('GET', '/get-partners-slugs$', function(){
  getPartnersSlugs();
});

router('GET', '/get-partners-images$', function(){
  getPartnersImages();
});

//GET ABOUT US INFO

router('GET', '/get-about-us$', function(){
  getAboutUs();
});

//GET SLIDER INFO

router('GET', '/get-slider-images$', function(){
  getSliderImages();
});

//SEND EMAIL

router('POST', '/send-mail$', function(){
  sendMail();
});


// if(!is_auth()){
// 	http_response_code(400);
//     echo json_encode(['message' => 'Authorization needed']);
//     return;
// }

//ROUTES THAT NEED AUTHORIZATION

router('POST', '/update-department/(\w+)$', function($department){
  updateDepartment($department);
});

router('POST', '/update-partner/(\w+)$', function($partner){
  updatePartner($partner);
});

router('POST', '/update-department-footer-info/(\w+)$', function($department){
  updateDepartmentFooterInfo($department);
});

router('POST', '/update-images/(\w+)$', function($folder){
  updateImages($folder);
});

router('POST', '/remove-partner/(\w+)$', function($partner){
  removePartner($partner);
});

router('POST', '/update-about-us$', function(){
  updateAboutUs();
});

router('POST', '/update-file$', function(){
  updateFile();
});

header("HTTP/1.0 404 Not Found");
echo '404 Not Found';
?>
