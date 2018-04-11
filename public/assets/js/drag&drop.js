window.onload = function () {
    function initPos() {
        $("#imgHest").animate({
            left: '+=' + Math.random() * 600,
            top: '+=' + Math.random() * 300
        });
        $("#imgHeal").animate({
            left: '+=' + Math.random() * 600,
            top: '+=' + Math.random() * 300
        });
        $("#imgNorm").animate({
            left: '+=' + Math.random() * 600,
            top: '+=' + Math.random() * 300
        });
        $("#imgUnh").animate({
            left: '+=' + Math.random() * 600,
            top: '+=' + Math.random() * 300
        });
        $("#imgUnhest").animate({
            left: '+=' + Math.random() * 600,
            top: '+=' + Math.random() * 300
        });

    };




    //var imgs;
    //imgs = $("#images li");
    ////$(document).ready(function () {
    ////    var drag = {};
    ////    imgs = $("#images li");
    ////    imgs.draggable({
    ////        stack: { group: '#images li', min: 1 },
    ////        start: function () {
    ////            $this = $(this);
    ////            if ($this.attr('id') === 'instructions') { $this.fadeOut().remove(); }
    ////            drag.startTime = new Date();
    ////            drag.startPos = $this.position();
    ////        }
    ////    });
    ////});



    //$(window).load(function initPos () {
    //    $w = $(window);
    //    imgs.css({
    //        position: 'absolute',
    //        left: $w.width() / 2 - imgs.width(),
    //        top: $w.height() / 2 - imgs.height()

    //    });
    //    for (var i = 0; imgs[i]; i++) {
    //        $(imgs[i]).animate({
    //            left: '+=' + Math.random() * 1500,
    //            top: '+=' + Math.random() * 1500
    //        });
    //    }
    //});

    $(document).ready(function () {
        var i = 0,num = 10;

        function checkCorrect() {
            // if ($("#hec").css("visibility") === "visible") {
                // alert(33);
               // window.location.reload();
            // };
            if (i === 4) {
                alert("You have ranked the food level correctly, Congratulations! \nYou can try this again!");
                layer.alert('Good JOb !!! ', {icon: 6});
                setTimeout( window.location.href='/health' , 3000);
                // window.location.reload();

            }
        }
        
        initPos();

        $("#foodLevel").droppable($("#imgHest, #imgHeal, #imgNorm, #imgUnh, #imgUnhest").draggable({
            revert: "valid",
            containment: "#foodRankingPlayground",
            scroll: false
        }));

        if (user_id == 0) {
            layer.msg('Please login !');
            $('.foodImg').draggable('disable');
            return false;
        }else{
            $('.foodImg').draggable({
                start: function(event, ui){
                    if(num == 0){
                        layer.msg('Use out of times ');
                        return false;
                    }
                    $("#note").val(0);
                },
                drag: function(event, ui) {  },
                stop: function(event, ui) {
                    num--;
                    console.log(num);
                    if( $("#note").val() != 1){
                        // alert($(this).data('dec'));
                        $("#w_tips").children('p').text($(this).data('dec'));
                    }
                }
            });
        }


        $("#slotHest").droppable({
            accept: "#imgHest",

            drop: function (event, ui) {
                // alert(22);
                // console.log(event);
                // console.log(ui);
                //$(this).css("background", "greenyellow");
                $("#hec").css("visibility", "visible");
                $("#imgHest").draggable({ revert: "invalid" });
                $("#imgHest").draggable('disable');
                //document.images[i].ondragstart = function () { return false; };
                document.getElementsByTagName('img')[0].onmousedown = function (e) {
                    e.preventDefault()
                };
                i++;
                $("#note").val(1);
                $("#w_tips").children('p').text('');
                checkCorrect();

            },
            out: function (event, ui) {
                // alert(222);
                // $(this).css("background", "transparent");
            },
            over:function (event,ui) {
                // alert(333);
            },


        });

        $("#slotHeal").droppable({
            accept: "#imgHeal",
            drop: function (event, ui) {
                //$(this).css("background", "greenyellow");
                $("#hc").css("visibility", "visible");
                $("#imgHeal").draggable({ revert: "invalid" });
                $("#imgHeal").draggable('disable');
                //document.images[i].ondragstart = function () { return false; };
                document.getElementsByTagName('img')[1].onmousedown = function (e) {
                    e.preventDefault()
                };
                i++;
                $("#note").val(1);
                $("#w_tips").children('p').text('');
                checkCorrect();
            },
            out: function (event, ui) {
                // alert(11);
                // $(this).css("background", "transparent");
                // $("#imgHeal").draggable({ revert: "valid" });
            },
            over:function (event,ui) {

            }
        });

        $("#slotNorm").droppable({
            accept: "#imgNorm",
            drop: function (event, ui) {
                //$(this).css("background", "greenyellow");
                $("#noc").css("visibility", "visible");
                $("#imgNorm").draggable({ revert: "invalid" });
                $("#imgNorm").draggable('disable');
                //document.images[i].ondragstart = function () { return false; };
                document.getElementsByTagName('img')[2].onmousedown = function (e) {
                    e.preventDefault()
                };
                i++;
                $("#note").val(1);
                $("#w_tips").children('p').text('');
                checkCorrect();
            },
            out: function (event, ui) {
                //$(this).css("background", "transparent");
                // $("#imgNorm").draggable({ revert: "valid" });
            }
        });

        $("#slotUnh").droppable({
            accept: "#imgUnh",
            drop: function (event, ui) {

                //$(this).css("background", "greenyellow");
                $("#uhc").css("visibility", "visible");
                $("#imgUnh").draggable({ revert: "invalid" });
                $("#imgUnh").draggable('disable');
                //document.images[i].ondragstart = function () { return false; };
                document.getElementsByTagName('img')[3].onmousedown = function (e) {
                    e.preventDefault()
                };
                i++;
                $("#note").val(1);
                $("#w_tips").children('p').text('');
                checkCorrect();
            },
            out: function (event, ui) {
                //$(this).css("background", "transparent");
                $("#imgUnh").draggable({ revert: "valid" });
            },
            over:function (event,ui) {

            }
        });

        $("#slotUnhest").droppable({
            accept: "#imgUnhest",
            drop: function (event, ui) {

                //$(this).css("background", "greenyellow");
                $("#uhec").css("visibility", "visible");
                $("#imgUnhest").draggable({ revert: "invalid" });
                $("#imgUnhest").draggable('disable');
                //document.images[i].ondragstart = function () { return false; };
                document.getElementsByTagName('img')[4].onmousedown = function (e) {
                    e.preventDefault()
                };
                i++;
                $("#note").val(1);
                $("#w_tips").children('p').text('');
                checkCorrect();
            },
            out: function (event, ui) {
                //$(this).css("background", "transparent");
                $("#imgUnhest").draggable({ revert: "valid" });
            },
            over:function (event,ui) {

            }
        });
    });
};

//window.onload
//    = function () {

//        $(document).ready(function () {

//            $("#food1").draggable();
//            $("#food2").draggable();
//            $("#food3").draggable();
//            $("#food4").draggable();
//            $("#food5").draggable();
//            window.onload = function () {
//                for (var i = 0; i < document.getElementsByTagName("div").length; i++) {
//                    document.getElementsByTagName("div")[i].onmousedown = function () {
//                        this.style.zIndex = 5;
//                    }
//                    document.getElementsByTagName("div")[i].onmouseout = function () {
//                        this.style.zIndex = 1;
//                    }
//                }
//            }

//        });
//    };

