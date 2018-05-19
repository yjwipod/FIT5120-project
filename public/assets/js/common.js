// Tools.Ajax('POST','/index/index/test','test_from','/index/member/order_list');
var Tools = {
    /**
     *
     * @param t  传输类型
     * @param u  路径
     * @param f  表单名
     * @param g  跳转连接
     * @constructor
     */
    Ajax: function (t, u, f, g) {
        $.ajax({
            type: t,
            url: u,
            data: $('#' + f).serializeArray(),
            dataType: "json",
            success: function (data) {
                if (!$.isPlainObject(data) || $.isEmptyObject(data)) {
                    layer.msg("someting wrong~");
                    return false;
                } else {
                    console.log(data);
                    // layer.msg(data.msg.mobile);
                    // return false;
                    if (data.status && 1 == data.status) {
                        layer.msg(data.msg);
                        setTimeout(function () {
                            window.location.href = g+data.user_id;
                        }, 500);
                    } else {
                        // alert(data.msg);
                        layer.msg(data.msg);
                        re_verify();
                    }

                    // (data.status && 1==data.status) ? window.location.href = g :layer.msg( data.msg );
                }

            },
            complete: function () {
                layer.close(this.layerIndex);
                console.log('ok');
            },
            beforeSend: function () {
                this.layerIndex = layer.load(0, {shade: [0.5, '#393D49']});
                console.log(this);
            },
            error: function () {
                layer.alert('User name exists.', {
                    title: "Error",
                    skin: 'layui-layer-molv'
                    , btn: 'OK'
                    , shift: 4 //动画类型
                });
            }
        });
    },
};
