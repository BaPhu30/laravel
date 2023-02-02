<div class="chat-box-container">
  <div class="chat-box-button chat-box-on" id="btnChatBoxOn">
    Chat
  </div>
  <div class="chat-box" id="chatBox">
    <div class="header-chat-box">
      <div class="header-left">
        <i class="header-title">Chat</i>
        <i class="header-number">(30)</i>
      </div>
      <div class="header-right">
        <i class="header-btn" id="btnChatBoxOff">
          Đóng chat
        </i>
      </div>
    </div>
    <div class="body-chat-box">
      <div class="body-left">
        <div class="info-container">
          <i class="info-name">Anh Hùng Xa Lộ</i>
        </div>
        <div class="chat-container">
          <div class="chat-view">
            <div class="chat-detail-container">
              <div class="detail-date">19 Th01, 11:45</div>
              <div class="detail-content-container">
                <div class="their-message-container">
                  <div class="content-message">Bạn helo Yôi</div>
                </div>
              </div>
            </div>
            <div class="chat-detail-container">
              <div class="detail-date">19 Th01, 11:45</div>
              <div class="detail-content-container">
                <div class="my-message-container">
                  <div class="content-message">Tôi helo Bạn</div>
                </div>
              </div>
            </div>
          </div>
          <div class="chat-input">
            <input
              style="width:100%" 
              placeholder="Nhập nội dung tin nhắn"
              id="inputMessage"
            ></input>
          </div>
        </div>
      </div>
      
    </div>
  </div>
</div>

<script type="text/javascript">
  function onSelectUser(params) {
    const user_id = "{{ optional(Session::get('user'))->id }}"
    const newBody = {
      user_id,
      to_user_id: params?.to_user_id,
    }
    axios.post(`/api{{config('endpoints.JOIN_CHAT')}}`, newBody)
      .then(res => {
        console.log("hoand", res);
      })
      .catch((err=>{
        console.log("hoand err",err)
      }))
}
</script>
