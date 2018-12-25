$(document).ready(function()
{
    $("#btn-contract").click(function()
    {
        $("#contractModal").modal("show");
    });
    $("#contract-check").click(function()
    {
        location.href = "/Register/Step2";
    });
    $("#btn-ldap").click(function()
    {
        $("#ldapForm").submit();
    });
    $("#btn-check").click(function()
    {
        $("#infoForm").submit();
    });

    validate();
    autoSubmit();
});

function autoSubmit() {
    $('#ldapForm').keydown(function() {
        if (event.keyCode == 13) {
            $("#ldapForm").submit();
        }
    });
}

function validate() {
 $("#ldapForm").validate({
    rules: {
        ldapUser: "required",
        ldapPass: "required"
    },
    messages: {
        ldapUser: "請輸入LDAP帳號",
        ldapPass: "請輸入LDAP密碼"
    }
});
 $("#infoForm").validate({
 	rules: {
 		phone: {
 			required: true,
 			minlength: 8
 		},
 		email: {
 			required: true,
 			email: true
 		}
    },
    messages: {
    	phone: {
 			required: "請輸入您的電話號碼",
 			minlength: "電話號碼必須大於八位數"
 		},
 		email: {
 			required: "請輸入email地址",
 			email: "請輸入正確的email格式"
 		}
    }
});
}