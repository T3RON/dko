var usernameRegex = /[a-zA-Z0-9_-]{3,16}/;
var emailRegex=/^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/i;
var passwordRegex = /[a-zA-Z0-9_\-~/\!@#$%^&*\s]{6,18}/;
var confirmpasswordRegex = /[a-zA-Z0-9_\-~/\!@#$%^&*\s]{6,18}/;
var firstnameRegex = /^[a-zA-Z]+(([',. -][a-zA-Z ])?[a-zA-Z]*)*$/ig;
var lastnameRegex = /^[a-zA-Z]+(([',. -][a-zA-Z ])?[a-zA-Z]*)*$/ig;
var username1Regex = /(([a-zA-Z0-9_-]{3,16})|(^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$))/;
var password1Regex = /[a-zA-Z0-9_\-~/\!@#$%^&*\s]{6,18}/;
var fpEmailRegex=/^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/i;

$('#username').keydown(function () {
    if (usernameRegex.test($(this).val())) {
        $(this).removeClass('invalid');
        $(this).addClass('valid');
    } else {
        $(this).removeClass('valid');
        $(this).addClass('invalid');
    }
    if($(this).val() == ""){
        $(this).removeClass("invalid")
        $(this).removeClass("valid")
    }
})
$('#email').keydown(function () {
    if (emailRegex.test($(this).val())) {
        $(this).removeClass('invalid');
        $(this).addClass('valid');
    } else {
        $(this).removeClass('valid');
        $(this).addClass('invalid');
    }
    if($(this).val() == ""){
        $(this).removeClass("invalid")
        $(this).removeClass("valid")
    }
})

$('#password').keydown(function () {
    if (passwordRegex.test($(this).val())) {
        $(this).removeClass('invalid');
        $(this).addClass('valid');
    } else {
        $(this).removeClass('valid');
        $(this).addClass('invalid');
    }
    if($(this).val() == ""){
        $(this).removeClass("invalid")
        $(this).removeClass("valid")
    }
})
$('#confirm-password').keydown(function () {
    if (confirmpasswordRegex.test($(this).val())) {
        $(this).removeClass('invalid');
        $(this).addClass('valid');
    } else {
        $(this).removeClass('valid');
        $(this).addClass('invalid');
    }
    if($(this).val() == ""){
        $(this).removeClass("invalid")
        $(this).removeClass("valid")
    }
})
$('#firstname').keydown(function () {
    if (firstnameRegex.test($(this).val())) {
        $(this).removeClass('invalid');
        $(this).addClass('valid');
    } else {
        $(this).removeClass('valid');
        $(this).addClass('invalid');
    }
    if($(this).val() == ""){
        $(this).removeClass("invalid")
        $(this).removeClass("valid")
    }
})
$('#lastname').keydown(function () {
    if (lastnameRegex.test($(this).val())) {
        $(this).removeClass('invalid');
        $(this).addClass('valid');
    } else {
        $(this).removeClass('valid');
        $(this).addClass('invalid');
    }
    if($(this).val() == ""){
        $(this).removeClass("invalid")
        $(this).removeClass("valid")
    }
})
$('#username1').keydown(function () {
    if (username1Regex.test($(this).val())) {
        $(this).removeClass('invalid');
        $(this).addClass('valid');
    } else {
        $(this).removeClass('valid');
        $(this).addClass('invalid');
    }
    if($(this).val() == ""){
        $(this).removeClass("invalid")
        $(this).removeClass("valid")
    }
})
$('#password1').keydown(function () {
    if (password1Regex.test($(this).val())) {
        $(this).removeClass('invalid');
        $(this).addClass('valid');
    } else {
        $(this).removeClass('valid');
        $(this).addClass('invalid');
    }
    if($(this).val() == ""){
        $(this).removeClass("invalid")
        $(this).removeClass("valid")
    }
})
$('#fpEmail').keydown(function () {
    if (fpEmailRegex.test($(this).val())) {
        $(this).removeClass('invalid');
        $(this).addClass('valid');
    } else {
        $(this).removeClass('valid');
        $(this).addClass('invalid');
    }
    if($(this).val() == ""){
        $(this).removeClass("invalid")
        $(this).removeClass("valid")
    }
})
