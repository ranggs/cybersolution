
//console.log(URL_API_DASHBOARD);

/* function ajaxCall() {
	this.send = function (data, url, method, success, type) {
		type = type || 'json';
		var successRes = function (data) {
			success(data);
		}
		var errorRes = function (e) {
			console.log(e);
			alert("Error found \nError Code: " + e.status + " \nError Message: " + e.statusText);
		}
		$.ajax({
			url: url,
			type: method,
			data: data,
			success: successRes,
			error: errorRes,
			dataType: type,
			timeout: 60000
		});
	}
}

function locationInfo() {
	var rootUrl = "{{url('apicountry')}}";
	var call = new ajaxCall();
	this.getCities = function (country, state) {
		$(".cities option:gt(0)").remove();
		var url = rootUrl + '/' + country + '/' + state;
		var method = "get";
		var data = {};
		var cityKey = "";
		var myCity = "{{auth()->user()->city}}";
		console.log(state + ", " + country);
		$('.cities').find("option:eq(0)").html("Please wait..");
		call.send(data, url, method, function (data) {
			$('.cities').find("option:eq(0)").html("Select City");
			if (data.tp == 1) {
				$.each(data['result'], function (key, val) {
					var option = $('<option />');
					option.attr('value', val.id).text(val.name);
					$('.cities').append(option);
					if (val.id == myCity) {
						cityKey = key;
					}
				});
				if (myCity != '') {
					document.getElementById("cityId").selectedIndex = cityKey + 1;
				}
				$(".cities").prop("disabled", false);
			} else {
				alert(data.msg);
			}
		});
	};
	this.getStates = function (id) {
		var id = parseInt(id) + 1;
		var myState = "{{auth()->user()->state}}";

		$(".states option:gt(0)").remove();
		$(".cities option:gt(0)").remove();
		var url = rootUrl + '/' + id;
		var method = "get";
		var data = {};
		var stateKey = "";
		$('.states').find("option:eq(0)").html("Please wait..");
		call.send(data, url, method, function (data) {
			$('.states').find("option:eq(0)").html("Select State");
			if (data.tp == 1) {
				$.each(data['result'], function (key, val) {
					var option = $('<option />');
					option.attr('value', val.id).text(val.name);
					$('.states').append(option);
					if (val.id == myState) {
						stateKey = key;
					}
				});
				if (myState != '') {
					document.getElementById("stateId").selectedIndex = stateKey + 1;
				}
				//$(".states").prop("disabled", false);
			} else {
				alert(data.msg);
			}
		});
	};
	this.getCountries = function () {
		var url = rootUrl + '/';
		var method = "get";
		var data = {};
		var myCountries = "{{auth()->user()->country}}";

		$('.countries').find("option:eq(0)").html("Please wait..");
		call.send(data, url, method, function (data) {
			$('.countries').find("option:eq(0)").html("Select Country");
			if (data.tp == 1) {
				$.each(data['result'], function (key, val) {
					var option = $('<option />');
					option.attr('value', val.id).text(val.name);
					$('.countries').append(option);
				});
				if (myCountries != '') {
					document.getElementById("countryId").selectedIndex = myCountries;
				}
				//$(".countries").prop("disabled", true);
			} else {
				alert(data.msg);
			}
		});
	};
}
$(function () { //ONLOAD
	var loc = new locationInfo();
	loc.getCountries();
	var countryId = "";
	var stateId = "";
	var myCountries = "{{auth()->user()->country}}";
	var myStates = "{{auth()->user()->state}}";

	if (myCountries != '') {
		myCountries = parseInt(myCountries - 1);
		loc.getStates(myCountries);

	}
	if (myStates != '' && myStates != '') {
		myCountries = parseInt(myCountries);
		myStates = parseInt(myStates);
		loc.getCities(myCountries, myStates);
	}

	$(".countries").on("change", function (ev) {
		countryId = $(this).val();
		if (countryId != '') {
			countryId = parseInt(countryId) - 1;
			loc.getStates(countryId);
		} else {
			$(".states option:gt(0)").remove();
		}
	});

	$(".states").on("change", function (ev) {
		var stateId = $(this).val()
		var countryId = $(".countries").val()
		if (stateId != '') {
			loc.getCities(countryId, stateId);
		} else {
			$(".cities option:gt(0)").remove();
		}
	});
}); */