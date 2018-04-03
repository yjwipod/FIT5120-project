var memberLogin = {
    passwdTip:"password not be empty",
    accountTip:"account not be empty",
    verifyTip:"verify code  not be empty",
    getPasswd:function(){
        return $.trim( $("#password").val() );
    },
    getAccount:function(){
        return $.trim( $("#account").val() );
    },
    getVerify:function(){
        return $.trim( $("#imgcode").val() );
    },

    ajaxLogin:function(){

        var _account = this.getAccount();
        var _passwd = this.getPasswd();
        var _verify = this.getVerify();

        if(_account.length==0) {
            layer.msg(this.accountTip);
            return false;
        }

        if( _passwd.length==0   ) {
            layer.msg(this.passwdTip);
            return false;
        }

        if( _verify.length==0 ) {
            layer.msg(this.verifyTip);
            return false;
        }


        Tools.Ajax('POST','/index/index/login','login_form','/index/index/user');
    }
};


var userRegister = {
    passwdTip:"password not be empty",
    com_passwdTip:"comfirm password not match password",
    accountTip:"account not be empty",
    verifyTip:"verify code  not be empty",
    getPasswd:function(){
        return $.trim( $("#password").val() );
    },
    getCfpasswd:function(){
        return $.trim( $("#repassword").val() );
    },
    getAccount:function(){
        return $.trim( $("#account").val() );
    },
    getVerify:function(){
        return $.trim( $("#imgcode").val() );
    },


    saveInfo:function() {
        var _account = this.getAccount();
        var _passwd = this.getPasswd();
        var _cpasswd = this.getCfpasswd();
        var _verify = this.getVerify();

        if(_account.length==0) {
            layer.msg(this.accountTip);
            return false;
        }

        if( _passwd.length==0   ) {
            layer.msg(this.passwdTip);
            return false;
        }

        if(  _passwd !=  _cpasswd  ) {
            layer.msg(this.com_passwdTip);
            return false;
        }
        if( _verify.length==0 ) {
            layer.msg(this.verifyTip);
            return false;
        }
        Tools.Ajax('POST','/index/index/reg','reg_form','/index/index/user');
    }
};



//校验手机11位手机号码
function isValidMobile( mobile ) {
    var rule = /^1\d{10}$/;
    return rule.test( mobile );
}

