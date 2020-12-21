/* var URL_APPS = 'http://127.0.0.1:8000/';
var URL_DASHBOARD = 'http://dashboard.epos.id/';
var URL_EPOS = 'http://epos.epos.id/';

function auth_logout(){
    var settings = {
            "url": "http://127.0.0.1:8000/api/auth/logout",
            "method": "POST",
            "timeout": 30,
            "headers": {
                "Authorization": "Bearer <?php echo $_SESSION['access_token'];?>"
            },
        };
        
        $.ajax(settings).done(function (response) {
            window.location = "http://epos.id/"
            console.log(response);
        });
} */