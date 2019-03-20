<?php
session_start();
include ('system/database.php');
include ('employee.cls.php');
$obj_comp = new component_inc ;




$f1=$_FILES['product_img']['name'];
$randomFileName = time().$f1;
$path='upload/'.$randomFileName;
$t=$_FILES['product_img']['tmp_name'];
move_uploaded_file($t,$path);

$insert_array=  array(
'product_no' => $_POST['product_no'],
'product_price' => $_POST['product_price'],
'product_img' => $randomFileName,
'cabinet' => $_POST['cabinet'],
'product_weight' => $_POST['product_weight'],
'product_dimensions' => $_POST['product_dimensions'],
'processor_brand' => $_POST['processor_brand'],
'processor_type' => $_POST['processor_type'],
'ram_size' => $_POST['ram_size'],
'ram_type' => $_POST['ram_type'],
'hard_disk_size' => $_POST['hard_disk_size'],
'hard_disk_tech' => $_POST['hard_disk_tech'],
'operating_system' => $_POST['operating_system'],
'g_card' => $_POST['g_card'],
'additional_information' => $_POST['additional_information'],   
'tag' => $_POST['tag'],   


);








$ip=$_SERVER['REMOTE_ADDR'];


//$browser= $_SERVER['HTTP_USER_AGENT'];
$user_agent = $_SERVER['HTTP_USER_AGENT'];

function getOS() { 

    global $user_agent;

    $os_platform  = "Unknown OS Platform";

    $os_array     = array(
                          '/windows nt 10/i'      =>  'Windows 10',
                          '/windows nt 6.3/i'     =>  'Windows 8.1',
                          '/windows nt 6.2/i'     =>  'Windows 8',
                          '/windows nt 6.1/i'     =>  'Windows 7',
                          '/windows nt 6.0/i'     =>  'Windows Vista',
                          '/windows nt 5.2/i'     =>  'Windows Server 2003/XP x64',
                          '/windows nt 5.1/i'     =>  'Windows XP',
                          '/windows xp/i'         =>  'Windows XP',
                          '/windows nt 5.0/i'     =>  'Windows 2000',
                          '/windows me/i'         =>  'Windows ME',
                          '/win98/i'              =>  'Windows 98',
                          '/win95/i'              =>  'Windows 95',
                          '/win16/i'              =>  'Windows 3.11',
                          '/macintosh|mac os x/i' =>  'Mac OS X',
                          '/mac_powerpc/i'        =>  'Mac OS 9',
                          '/linux/i'              =>  'Linux',
                          '/ubuntu/i'             =>  'Ubuntu',
                          '/iphone/i'             =>  'iPhone',
                          '/ipod/i'               =>  'iPod',
                          '/ipad/i'               =>  'iPad',
                          '/android/i'            =>  'Android',
                          '/blackberry/i'         =>  'BlackBerry',
                          '/webos/i'              =>  'Mobile'
                    );

    foreach ($os_array as $regex => $value)
        if (preg_match($regex, $user_agent))
            $os_platform = $value;

    return $os_platform;
}

function getBrowser() {

    global $user_agent;

    $browser        = "Unknown Browser";

    $browser_array = array(
                            '/msie/i'      => 'Internet Explorer',
                            '/firefox/i'   => 'Firefox',
                            '/safari/i'    => 'Safari',
                            '/chrome/i'    => 'Chrome',
                            '/edge/i'      => 'Edge',
                            '/opera/i'     => 'Opera',
                            '/netscape/i'  => 'Netscape',
                            '/maxthon/i'   => 'Maxthon',
                            '/konqueror/i' => 'Konqueror',
                            '/mobile/i'    => 'Handheld Browser'
                     );

    foreach ($browser_array as $regex => $value)
        if (preg_match($regex, $user_agent))
            $browser = $value;

    return $browser;
}


$user_os        = getOS();
$user_browser   = getBrowser();

//$device_details = "<strong>Browser: </strong>".$user_browser."<br /><strong>Operating System: </strong>".$user_os."";

//print_r($device_details);

//echo("<br /><br /><br />".$_SERVER['HTTP_USER_AGENT']."");



// exit;

$activety_array=  array(
    // 'component_name' => $_POST['c_name'],
    // 'component_details' => $_POST['c_dis'],
    // 'component_price' => $_POST['c_price'],
    // 'component_image' => $randomFileName,

    'component_name' => "PRE_ASSEMBLE PC",
    'username' => $_SESSION['userName'],
    'time' => date('Y-m-d H:i:s'),
    'ip_address' => $ip,
    'browser' => $user_browser,
    'component_price' => $_POST['product_price'],
    'operating_system' => $user_os,
    'purpose' => "INSERT",
        
        
        
    
);
     
$insert_activety= $obj_comp->InsertIntoactivetyDetails($activety_array);
     

$insert= $obj_comp->InsertIntoPCProduct($insert_array);
     if ($insert) {
        
        header('Location:product_pc_list.php');
        exit();

       
    }else {
        header('Location:create.php');
        exit();


}



?>