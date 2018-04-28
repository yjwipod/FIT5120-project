var memberLogin = {
    passwdTip: "password not be empty",
    accountTip: "account not be empty",
    verifyTip: "verify code  not be empty",
    getPasswd: function () {
        return $.trim($("#password").val());
    },
    getAccount: function () {
        return $.trim($("#account").val());
    },
    getVerify: function () {
        return $.trim($("#imgcode").val());
    },

    ajaxLogin: function () {

        var _account = this.getAccount();
        var _passwd = this.getPasswd();
        var _verify = this.getVerify();

        if (_account.length == 0) {
            layer.msg(this.accountTip);
            return false;
        }

        if (_passwd.length == 0) {
            layer.msg(this.passwdTip);
            return false;
        }

        if (_verify.length == 0) {
            layer.msg(this.verifyTip);
            return false;
        }


        Tools.Ajax('POST', '/login', 'login_form', '/user/');
    }
};


var userRegister = {
    passwdTip: "password not be empty",
    com_passwdTip: "comfirm password not match password",
    accountTip: "account not be empty",
    emailTip: "email not be empty",
    emaiWrongTip: "email not right",
    verifyTip: "verify code  not be empty",
    getPasswd: function () {
        return $.trim($("#password").val());
    },
    getCfpasswd: function () {
        return $.trim($("#repassword").val());
    },
    getAccount: function () {
        return $.trim($("#account").val());
    },
    getVerify: function () {
        return $.trim($("#imgcode").val());
    },
    getEmail: function () {
        return $.trim($("#email").val());
    },


    saveInfo: function () {

        var _account = this.getAccount();
        var _email = this.getEmail();
        var _passwd = this.getPasswd();
        var _cpasswd = this.getCfpasswd();
        var _verify = this.getVerify();
        var reg = new RegExp("^[a-z0-9]+([._\\-]*[a-z0-9])*@([a-z0-9]+[-a-z0-9]*[a-z0-9]+.){1,63}[a-z0-9]+$");

        if (_account.length == 0) {
            layer.msg(this.accountTip);
            return false;
        }

        if (_email.length == 0) {
            layer.msg(this.emailTip);
            return false;
        } else if (!reg.test(_email)) { //正则验证不通过，格式不对
            layer.msg(this.emaiWrongTip);
            return false;
        }


        if (_passwd.length == 0) {
            layer.msg(this.passwdTip);
            return false;
        }

        if (_passwd != _cpasswd) {
            layer.msg(this.com_passwdTip);
            return false;
        }
        if (_verify.length == 0) {
            layer.msg(this.verifyTip);
            return false;
        }
        Tools.Ajax('POST', '/reg', 'reg_form', '/user/');
    }
};


//校验手机11位手机号码
function isValidMobile(mobile) {
    var rule = /^1\d{10}$/;
    return rule.test(mobile);
}

