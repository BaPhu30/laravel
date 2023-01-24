$("#btnChatBoxOn").click(function () {
    $("#chatBox").addClass("chat-box-on");
    $("#btnChatBoxOn").removeClass("chat-box-on"); 
});

$("#btnChatBoxOff").click(function () {
    $("#chatBox").removeClass("chat-box-on");
    $("#btnChatBoxOn").addClass("chat-box-on");
});
