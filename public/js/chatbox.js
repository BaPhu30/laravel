$("#btnChatBoxOn").click(function () {
    $("#chatBox").addClass("chat-box-on");
    $("#btnChatBoxOn").removeClass("chat-box-on");
});

$("#btnChatBoxOff").click(function () {
    $("#chatBox").removeClass("chat-box-on");
    $("#btnChatBoxOn").addClass("chat-box-on");
});

$("#inputMessage").keypress(function (e) {
    if (e.keyCode == 13) {
        const input = document.getElementById('inputMessage')
        console.log("hoand input", input.value)
        $('#inputMessage').val('');
    }
});

function onSelectUser(data) {
    const user_id = data?.id;
    const room_id = data?.room_id;

    console.log("hoand onSelectUser", data);
}
