<?php
session_start();

//config global
$head_title = "Ayopos";

$https = 'http://';
$link_apps = $https.'epos.id/';
$link_dashboard = $https.'dashboard.'.$link_apps;
$link_epos = $https.'epos.'.$link_apps;

if(empty($_SESSION['access_token'])){
    header("Location: ".$link_landing."login");
}

?>

<script>
var HTTP = "http://";
var URL_APPS = 'epos.id';
var URL_API_DASHBOARD = HTTP+'api-dashboard.'+URL_APPS+':8081/';
var URL_DASHBOARD = HTTP+'dashboard.'+URL_APPS+'/';
var URL_EPOS = HTTP+'epos.'+URL_APPS+'/';
var TOKEN = "<?php echo $_SESSION['access_token'];?>";

function auth_logout(){
    var settings = {
        "url": URL_API_DASHBOARD+"/api/auth/logout",
        "method": "POST",
        "timeout": 30,
        "headers": {
            "Authorization": "Bearer "+TOKEN
        },
    };
    
    $.ajax(settings).done(function (response) {
        window.location = URL_APPS
    });
}
</script>