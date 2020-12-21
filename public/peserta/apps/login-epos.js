$("#login-btn").on("click", function (e) {
    e.preventDefault();

    // Remove alert box, if exist
    $(window.document).find(".alert").remove();

    var $tag = $(this);
    var $usernameInput = $("input[name=\"username\"]");
    var $passwordInput = $("input[name=\"password\"]");

    // Disable Button & Input fields
    var $btn = $tag.button("loading");
    $usernameInput.attr("disabled", "disabled");
    $passwordInput.attr("disabled", "disabled");

    if (!window.isDemo || (!username || password)) {
      username = $usernameInput.val();
      password = $passwordInput.val();
    }

    // Ajax request to verify access
    $.ajax({
        url: "index.php?action_type=LOGIN",
        type: "POST",
        dataType: "json",
        data: {username: username, password: password},
        success: function (response) {
          if (response.count_user_store > 1) {
            window.location = "store_select.php?redirect_to=" + (getParameterByName('redirect_to') && getParameterByName('redirect_to') !== "undefined" && getParameterByName('redirect_to') !== "null" ? getParameterByName('redirect_to') : '');
          } else {
            $.ajax({
              url: window.baseUrl + "/"+window.adminDir+"/dashboard.php?active_store_id=" + response.store_id,
              method: "GET",
              dataType: "json"
            }).
            then(function(response) {
              var alertMsg = response.msg;
              window.toastr.success(alertMsg, "Success!");
              window.location = getParameterByName('redirect_to') && getParameterByName('redirect_to') !== "undefined" && getParameterByName('redirect_to') !== "null" ? getParameterByName('redirect_to') : window.baseUrl + "/"+window.adminDir+"/dashboard.php";
            }, function(response) {
              var errorMsg = JSON.parse(response.responseText);
              var alertMsg = "<div>";
                  alertMsg += "<p>" + errorMsg.errorMsg + ".</p>";
                  alertMsg += "</div>";
              window.toastr.warning(alertMsg, "Warning!");
            });
          }
        },
        error: function (response) {

            // Enable Button & Input fields
            $btn.button("reset");
            $usernameInput.attr("disabled", false);
            $passwordInput.attr("disabled", false);

            // Show error message
            window.toastr.warning(JSON.parse(response.responseText).errorMsg, "Warning!");
        }
    });
});
