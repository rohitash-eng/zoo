jQuery.validator.addMethod("isAlphaNum", function (value, element) {
    //var re =  /^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-+.><"':{}()|;`~]).{6,}$/;
    var re =  /^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-+.><"':{}()\[\]|\\;\/`~_]).{6,}$/;
    if (!re.test(value)) { 
        return false;
    }else{
      return true;
    }
    return false;
}, "Please enter atleast one uppercase letter, one lowercase letter, one digit and one special character.");
