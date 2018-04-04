
    getPoints();
// $(".box").click(function(){
//
//     checkIsRight();
//     if($('#times').val() <= 0){
//         layer.msg('Use out of times');
//         return false;
//     }
// });

var colors = ["#da9b9b", "#b5e4f3", "#6dc3de", "#c5c5e2", "#c2efbc"];
$(".line-box .box").each(function(i, v) {
    var div = $(this)
    div.css("background-color", colors[i])
});
var selection = {},
    total = 10,
    index = 0, // 记录次数
    indexArray = [];
var drag = function(obj) {
    obj.bind("mousedown", start);
    var boxPoints = {},
        transform ="",
        height,
        width;

    function start(event) {
        console.log(indexArray.length);
        checkLogin();

        if (indexArray.length >= 10) {
            layer.msg('Use out of times');

            return false;
        }

        indexArray.push(false)
        if (event.button == 0) {
            var that = $(event.target.id),
                id = event.target.id,
                top = event.target.offsetTop,
                left = event.target.offsetLeft,
                item = {}
            item.x = left
            item.y = top
            boxPoints[id] = item
            transform = event.target.style.transform
            width = event.target.offsetWidth
            height = event.target.offsetHeight
            event.target.style.opacity = '0.5'

            gapX = event.clientX - obj[0].offsetLeft;
            gapY = event.clientY - obj[0].offsetTop;
            $(document).bind("mousemove", move);
            $(obj).bind("mouseup", stop);

        }
        return false;
    }

    function move(event) {
        obj.css({
            "left": (event.clientX - gapX) + "px",
            "top": (event.clientY - gapY) + "px"
        });
        return false;
    }

    function stop(event) {
        checkIsRight();
        console.log("stop")
        $(document).unbind("mousemove", move);
        //$(event.target.id).unbind("mouseup", stop);
        $("#" + event.target.id).unbind("mouseup", stop);
        event.target.style.opacity = '1'
        // 对比是否落在对应box上
        var id = event.target.id,
            point = lineBoxPoint[id],
            point1 = boxPoints[id],
            cpPoint = lineBoxPoint[$(".line-box .box").eq(0).data("id")],
            cpLeft = cpPoint.x,
            cpTop = cpPoint.y,
            cpRight = lineBoxPoint[$(".line-box .box").eq($(".line-box .box").length - 1).data("id")].x + width,
            lastIndex = indexArray.length-1

        if (point) {
            if (event.clientX > point.x && event.clientX < point.x + width && event.clientY > point.y && event.clientY < point.y + height) {
                $(this).css({
                    "left": point.x + "px",
                    "top": point.y + "px",
                    "transform": "rotate(0)"
                });
                selection[id] = true;
                indexArray[lastIndex] = true;
                $(".tims").text(total - indexArray.length) ;
                return false;
            }
        }
        if(event.clientX > cpLeft && event.clientX < cpRight && event.clientY > cpTop && event.clientY < cpTop + height ) {
            index = index + 1;
            indexArray[lastIndex] = true;
        } else {
            if (indexArray[lastIndex] === false) {
                indexArray.splice(lastIndex,1);
            }
        }
        console.log('===');
        console.log(index);
        console.log(indexArray);
        console.log('===');
        $(".tims").text(total - indexArray.length)
        $(this).css({
            "left": point1.x + "px",
            "top": point1.y + "px",
        });
        return false;
    }
};

var lineBoxPoint = {}
$(".line-box .box").each(function(i, v) {
    var that = $(v),
        id = that.data("id"),
        top = that.offset().top,
        left = that.offset().left,
        item = {};
    item.x = left;
    item.y = top;
    lineBoxPoint[id] = item;
});
$(".wrapper .box").each(function(i, v) {
    (function(dom) {
        drag($(dom));
    })(v)
});

function checkLogin(){
    var user_id = "{:$user_id}";
    if(user_id == 0 ){
        layer.msg('Please login !');
        return false;
    }
}

function checkIsRight(){
    var str1 = 0 ;
    $(".wrapper").find('div').each(function(i, v) {
        var str = $(this).css('top').split("px") ;
        str1 = str1+ parseInt(str[0]);
    });
    if(str1 >= 2500){
        layer.msg('Congratulations on the right operation');
        // setTimeout(function(){//两秒后跳转
        //
        //          console.log();
        // },2000);

        return false;
    }
    console.log(str1);
}

function  getPoints() {
    // $.post("{:url('/user/getpoints')}",{points:11},function(result){
    //      console.log(result);
    // });
    $.ajax({
        type: "post",
        url: "{:url('/user/getpoints')}",
        data: {points:11},
        cache:false,
        async:true,
        dataType: "json",
        success: function (result) {
            console.log(result);
        }
    });
}
