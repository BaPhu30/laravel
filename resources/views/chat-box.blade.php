<div class="chat-box-container">
  <div class="chat-box-button chat-box-on" id="btnChatBoxOn" user_id="{{Session::get('user')->id}}">
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
          <div class="info-name" id="infoName"></div>
        </div>
        <div class="chat-container">
          <div class="chat-view" id="viewChat"></div>
          <div class="chat-input">
            <input
              style="width:100%" 
              placeholder="Nhập nội dung tin nhắn"
              id="inputMessage"
            ></input>
          </div>
        </div>
      </div>
      <div class="body-right">
        <div class="search-box">Khung search</div>
        <div class="list-user" id="list-user"></div>
      </div>
    </div>
  </div>
</div>
