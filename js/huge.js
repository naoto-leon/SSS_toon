// JavaScript Document 



$(function () {
    sizing();
    $(window).resize(function() {
        sizing();
    });
});
 
function sizing(){
    $("particles-js-canvas-el").attr({height:$("#hoge").height()});
    $("particles-js-canvas-el").attr({width:$("#hoge").width()});
}
