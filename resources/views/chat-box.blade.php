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
            <textarea name="content" rows="3" style="width:100%" placeholder="Nhập nội dung tin nhắn"></textarea>
          </div>
        </div>
      </div>
      <div class="body-right">
        <div class="search-box">Khung search</div>
        <div class="list-user">
          @foreach ($users as $user)
          <div 
            class="user-container" 
            onclick="onSelectUser({
            id: {{$user->id}},
            room_id: 12,
            })" id="{{$user->id}}"
          >
            <div class="user-avatar">
              <img src="{{$user->avatar}}"/> 
            </div>
            <div class="user-name-container">
              <div class="user-name">{{ $user->name }}</div>
              <div class="new-message-container">
                <div class="message">Xin 50 chục bạn ê</div>
                <div class="message-date">20:20</div>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
</div>
