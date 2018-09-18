$(document).ready(function() {
    // 导航栏
    $(".logoImg").click(function() {
        $(".navList").slideToggle(200);
    });
    // 导航栏下拉菜单--hover
    $(".hoverDropDown").hover(function() {
        $(this).addClass("dropdownHover");
        $(this).find("ul").slideToggle(200);
    });
    $(".hoverDropDown").mouseover(function() {
        $(this).addClass("dropdownHover");
    });
    $(".hoverDropDown").mouseout(function() {
        $(this).removeClass("dropdownHover");
    });

    //测试代码，显示下拉框
    // $(".hoverDropDown ul").css("display","block");

    // 搜索框
    jQuery.fn.slideLeft = function(speed) {
        if (!($(this).is(":hidden"))) {
            $(this).animate({
                width: "hide"
            }, speed);
        } else {
            $(this).animate({
                width: "show"
            }, speed);
        }
    };

    var phone = window.matchMedia('(max-width:768px)');
    $(".searchIco").click(function() {
        if(phone.matches){
            $('.searchIco').hide();
            $(".search").slideToggle(100);
            // $(".search").show();
        }else{
            $(".search").slideLeft(300);
        }
        
        $(".search form input").focus();
    });

    // 点击其他地方，隐藏搜索框
    $(document).mousedown(function(e) {
        if (!($(".search").is(":hidden"))) {
            // 点击的地方的父节点是否为.search
            if ($(e.target).parents(".search").length == 0) {
                $(".search").slideLeft(300);
                if(phone.matches){
                    $('.searchIco').show();
                }
            }
        }
    });
    // END-

    // 登录弹出框
    // var modalHeight=$(".modal-dialog").height();
    // var screenHeight = ($(window).height()-modalHeight/2);
    // console.log(screenHeight);
    // $(".modal-dialog").css("margin",screenHeight+"px");

    // tab标签页
    $(".listTab li a").hover(function() {
        $(".listTab li").removeClass("active");
        $(this).parent().addClass("active");
        var tabId = $(this).attr("data-tab");
        $(".tabContent>div").removeClass("active");
        $(tabId).addClass("active");
    });

    // 检测body高度，设定footer在底部
    if($(window).height()<$(document.body).height()){
        $('.foot').removeClass('footposition');
    }

    if(phone.matches){
        $('.foot').removeClass('footposition');
    }
});