$("#btnChatBoxOn").click(function () {
    $("#chatBox").addClass("chat-box-on");
    $("#btnChatBoxOn").removeClass("chat-box-on");
});

$("#btnChatBoxOff").click(function () {
    $("#chatBox").removeClass("chat-box-on");
    $("#btnChatBoxOn").addClass("chat-box-on");
});

function onSelectUser(data) {
    const user_id = data?.id;
    const room_id = data?.room_id;

    

    console.log("hoand onSelectUser", data)
}