<button id="chatToggleBtn" onclick="toggleChat()">
    <i class="bi bi-chat-dots-fill fs-4"></i>
</button>

<div id="chatBox">
    <div class="chat-header">
      <div class="d-flex align-items-center">
        <i class="bi bi-robot fs-4 me-2"></i>
        <span class="fw-bold">Asisten Hafida</span>
      </div>
      <button onclick="toggleChat()" class="btn-close btn-close-white btn-sm"></button>
    </div>

    <div id="chatBody" class="chat-body">
      <div class="bot-message">
        Halo! 👋 Selamat datang di Klinik Hafida. Ada yang bisa saya bantu?<br><br>
        <em>Coba ketik: "Jadwal", "Alamat", atau "BPJS".</em>
      </div>
    </div>

    <div class="chat-footer">
      <input type="text" id="chatInput" class="form-control form-control-sm" placeholder="Ketik pertanyaan..." onkeypress="handleEnter(event)">
      <button class="btn btn-success btn-sm" onclick="sendMessage()">
        <i class="bi bi-send-fill"></i>
      </button>
    </div>
</div>

<script>
    function toggleChat() {
      var chatBox = document.getElementById('chatBox');
      if (chatBox.style.display === 'none' || chatBox.style.display === '') {
        chatBox.style.display = 'flex';
        document.getElementById('chatInput').focus();
      } else {
        chatBox.style.display = 'none';
      }
    }

    function sendMessage() {
      var input = document.getElementById('chatInput');
      var message = input.value.trim();
      var chatBody = document.getElementById('chatBody');

      if (message !== "") {
        chatBody.innerHTML += `<div class="user-message">${message}</div>`;
        input.value = "";
        chatBody.scrollTop = chatBody.scrollHeight;

        var loadingID = "loading-" + Date.now();
        chatBody.innerHTML += `<div id="${loadingID}" class="bot-message"><em>Sedang mengetik...</em></div>`;
        chatBody.scrollTop = chatBody.scrollHeight;

        fetch('<?= base_url('chatbot/reply'); ?>', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-Requested-With': 'XMLHttpRequest'
            },
            body: JSON.stringify({ pesan: message })
        })
        .then(response => response.json())
        .then(data => {
            document.getElementById(loadingID).remove();
            chatBody.innerHTML += `<div class="bot-message">${data.balasan}</div>`;
            chatBody.scrollTop = chatBody.scrollHeight;
        })
        .catch(error => {
            console.error('Error:', error);
            document.getElementById(loadingID).remove();
            chatBody.innerHTML += `<div class="bot-message text-danger">Maaf, koneksi terputus. Coba lagi ya!</div>`;
        });
      }
    }

    function handleEnter(e) {
      if (e.key === 'Enter') {
        sendMessage();
      }
    }
</script>