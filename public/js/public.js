// 设置iframe高度

layui.use( ['jquery','element'], function (res) {
    var total = document.documentElement.clientHeight-60-33,
        $ = layui.jquery;
    console.log(total);
    $("#_container").css({'height':total});
} );
