$("#btnChatBoxOn").click(function () {
  $("#chatBox").addClass("chat-box-on");
  $("#btnChatBoxOn").removeClass("chat-box-on");
  $("#list-user").empty();

  user_id = $(this).attr("user_id");

  $.ajax({
    type: "GET",
    url: "/api/get-chat-users",
    data: {
      user_id,
    },
    cache: false,
    success: function (res) {
      if (Array(res?.data) && res?.data.length > 0) {
        res?.data.forEach((e, index) => {
          const div = document.createElement("div");
          div.innerHTML = `
										<div
											id="userContainer_${index}"
											index="${index}"
											class="user-container"
											user_id="${e?.user_id}"
											onclick="onSelectUser({
												user_id: ${e?.user_id},
												room_id: ${e?.room_id},
												elementID: 'userContainer_${index}',
                        name: '${e?.name}'
											})"
										>
												<div class="user-avatar">
												<img src="${e?.avatar}"/> 
												</div>
												<div class="user-name-container">
												<div class="user-name">${e?.name}</div>
												<div class="new-message-container">
														<div class="message">${e?.text || ""}</div>
														<div class="message-date">${e?.text_created_at ||""}</div>
												</div>
												</div>
										</div>
										`;
          document.getElementById("list-user").appendChild(div);
        });
      }
    },
  });
});

$("#btnChatBoxOff").click(function () {
  $("#chatBox").removeClass("chat-box-on");
  $("#btnChatBoxOn").addClass("chat-box-on");
  $("#list-user").empty();
});

function onSelectUser(e) {
  user_id = $("#btnChatBoxOn").attr("user_id");
  $("#infoName").text(e?.name);
  $("#infoName").attr("user_id", e?.user_id)
  $("#infoName").attr("room_id", e?.room_id)

  if (e?.room_id === -1) {
    postCreateChat({
      fromUser: user_id,
      toUser: e?.user_id,
      elementID: e?.elementID,
    });
  } else {
    postJoinChat({
      room_id: e?.room_id,
      fromUser: user_id,
      toUser: e?.user_id,
    });
  }
}

function postCreateChat(e) {
  axios
    .post(`/api/create-chat`, {
      fromUser: e?.fromUser,
      toUser: e?.toUser,
    })
    .then((res) => {
      if (
        res?.status === 200 &&
        res.data &&
        res.data?.success &&
        !isNaN(Number(res.data?.data?.room_id))
      ) {
        room_id = res.data?.data?.room_id;

        // update new room_id
        $("#infoName").attr("room_id", room_id)

        // update function onclick
        $(`#${e?.elementID}`).attr(
          "onclick",
          `onSelectUser({
                  user_id: ${e?.toUser},
                  room_id: ${room_id},
                  elementID: '${e?.elementID}'
                })`
        );

        postJoinChat({
          room_id,
          fromUser: e?.fromUser,
          toUser: e?.toUser,
        });
      }
    })
    .catch((err) => {
      console.log("hoand createChat.err", err);
    });
}

function postJoinChat(e) {
  $("#viewChat").empty();
  
  axios
    .post(`/api/join-chat`, e)
    .then((res) => {
      if (
        res?.status === 200 &&
        res?.data &&
        res?.data?.success &&
        Array(res?.data?.data)
      ) {

        if(res?.data?.data.length > 0){
          res?.data?.data.forEach((e, index) => {
            const div = document.createElement('div');
            user_id = $("#btnChatBoxOn").attr("user_id");
  
            myMessage = String(e?.user_id) === String(user_id) ? 'my' : 'their'
  
            div.innerHTML = `
              <div class="chat-detail-container" index="${index}">
                <div class="detail-content-container">
                  <div class="${myMessage}-message-container">
                    <div class="content-message">${e?.text}</div>
                  </div>
                </div>
              </div>
              
          `
          // <div class="chat-detail-container">
          //       <div class="detail-date">19 Th01, 11:45</div>
          //       <div class="detail-content-container">
          //         <div class="my-message-container">
          //           <div class="content-message">Tôi helo Bạn</div>
          //         </div>
          //       </div>
          //     </div>
  
          document.getElementById("viewChat").appendChild(div);
          });
          $("#viewChat").animate({scrollTop:$("#viewChat")[0].scrollHeight}, 'slow')
        }else{
          $("#viewChat").empty();
        }
      }
    })
    .catch((err) => {
      console.log("hoand joinChat.err", err);
    });
}

$("#inputMessage").keypress(function (e) {
  if (e.keyCode == 13) {
    fromUser = $("#btnChatBoxOn").attr("user_id");
    const input = document.getElementById("inputMessage");
    text = $.trim(input.value);
    room_id = $("#infoName").attr("room_id");
    toUser = $("#infoName").attr("user_id");

    if (
      user_id &&
      toUser &&
      text &&
      !isNaN(Number(room_id))
    ) {
      axios
        .post(`/api/send-message`, {
          text,
          fromUser,
          room_id,
          toUser,
        })
        .then((res) => {
          console.log("hoand sendMessage.res",res)
          const div = document.createElement('div');
          div.innerHTML = `
            <div class="chat-detail-container">
              <div class="detail-content-container">
                <div class="my-message-container">
                  <div class="content-message">${text}</div>
                </div>
              </div>
            </div>
        `
          document.getElementById("viewChat").appendChild(div);
          $("#viewChat").animate({scrollTop:$("#viewChat")[0].scrollHeight}, 'slow')
        })
        .catch((err) => {
          console.log("hoand sendMessage.err", err);
        });
    }

    $("#inputMessage").val("");
  }
});
