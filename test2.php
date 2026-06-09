<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <title>Weekly Social Media Planner | Creative Startup NZ</title>
  <meta name="robots" content="noindex, nofollow">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&family=Oswald:wght@500;700&family=Roboto+Mono:wght@400;700&display=swap" rel="stylesheet">
  
  <style>
    /* BASE VARIABLES (DARK MODE DEFAULT) */
    :root {
      --base-bg: #1A1B1E;
      --panel-bg: #25262B;
      --text-main: #A6A7AB;
      --text-bright: #FFFFFF;
      --brand-orange: #FF6A00;
      --brand-green: #CCFF00;
      --border-color: #333333;
      --alert-red: #E57373;
    }
    
    /* LIGHT MODE OVERRIDES */
    body.light-mode {
      --base-bg: #F4F6F8;
      --panel-bg: #FFFFFF;
      --text-main: #4A4A4A;
      --text-bright: #111111;
      --border-color: #E0E0E0;
      --brand-green: #8DB300; /* Darkened green for light mode readability */
    }
    
    * { box-sizing: border-box; margin: 0; padding: 0; border-radius: 4px!important; }
    
    body {
      background-color: var(--base-bg); color: var(--text-main);
      font-family: 'Inter', sans-serif; line-height: 1.6;
      -webkit-font-smoothing: antialiased; display: flex;
      flex-direction: column; min-height: 100vh;
      transition: background-color 0.3s, color 0.3s;
    }
    
    /* CUSTOM SCROLLBAR */
    ::-webkit-scrollbar { width: 10px; height: 10px; }
    ::-webkit-scrollbar-track { background: var(--base-bg); border: 1px solid var(--border-color); }
    ::-webkit-scrollbar-thumb { background: var(--brand-orange); border: 1px solid var(--base-bg); }
    ::-webkit-scrollbar-thumb:hover { background: var(--brand-orange); filter: brightness(110%); }
    
    h1, h2, h3, h4 { font-family: 'Oswald', sans-serif; text-transform: uppercase; color: var(--text-bright); letter-spacing: 1px; }
    
    .mono-data { font-family: 'Roboto Mono', monospace; font-size: 0.85rem; color: var(--brand-orange); display: block; margin-bottom: 0.5rem; }
    
    .glass-box-container { max-width: 1400px; margin: 0 auto; padding: 2rem; display: grid; grid-template-columns: 350px 1fr 300px; gap: 2rem; flex-grow: 1; }
    .glass-box-full { max-width: 1400px; margin: 0 auto; padding: 0 2rem 2rem 2rem; display: block; width: 100%; }
    
    @media (max-width: 1100px) {
      .glass-box-container { grid-template-columns: 1fr; padding: 1rem; } 
      .glass-box-full { padding: 0 1rem 1rem 1rem; }
    }
    
    .panel { background-color: var(--panel-bg); border: 1px solid var(--border-color); padding: 1.5rem; transition: background-color 0.3s, border-color 0.3s; }
    .panel-header { border-bottom: 1px solid var(--border-color); padding-bottom: 0.5rem; margin-bottom: 1.5rem; font-size: 1.2rem; }
    
    input, textarea, select { width: 100%; background-color: var(--base-bg); border: 1px solid var(--border-color); color: var(--text-bright); padding: 0.75rem; font-family: 'Inter', sans-serif; margin-bottom: 1.5rem; transition: background-color 0.3s, color 0.3s, border-color 0.3s; }
    input:focus, textarea:focus, select:focus { outline: none; border-color: var(--brand-orange); }
    
    button { background-color: var(--brand-orange); color: #000; border: none; padding: 1rem; font-family: 'Oswald', sans-serif; text-transform: uppercase; font-weight: 700; cursor: pointer; width: 100%; transition: background-color 0.2s; margin-bottom: 1rem; }
    button:hover { filter: brightness(110%); }
    button.secondary { background-color: transparent; color: var(--text-main); border: 1px solid var(--border-color); }
    button.secondary:hover { color: var(--text-bright); border-color: var(--text-bright); }
    
    .media-preview { width: 100%; height: 150px; background-color: var(--base-bg); border: 1px solid var(--border-color); margin-bottom: 1.5rem; display: flex; align-items: center; justify-content: center; overflow: hidden; position: relative; }
    .media-preview img { width: 100%; height: 100%; object-fit: cover; filter: grayscale(100%); transition: filter 0.3s ease; }
    .media-preview:hover img { filter: grayscale(0%); }
    
    .calendar-wrapper { display: grid; gap: 1px; background-color: var(--border-color); border: 1px solid var(--border-color); }
    .calendar-day { background-color: var(--panel-bg); min-height: 150px; padding: 0.5rem; min-width: 120px; transition: background-color 0.3s; }
    .day-header { font-family: 'Inter', sans-serif; font-weight: bold; font-size: 0.85rem; color: var(--text-main); margin-bottom: 0.5rem; border-bottom: 1px solid var(--border-color); padding-bottom: 0.25rem; }
    
    .scheduled-item { background-color: var(--base-bg); border-left: 3px solid var(--brand-orange); padding: 0.5rem; margin-bottom: 0.5rem; font-size: 0.85rem; cursor: pointer; transition: border-color 0.3s; position: relative; }
    .scheduled-item:hover { border-left-color: var(--text-bright); }
    .scheduled-item.ready { border-left-color: #8DB300; opacity: 0.6; }
    .scheduled-item.missed { border-left-color: var(--alert-red); animation: pulse 2s infinite; }
    
    .delete-btn { color: var(--alert-red); font-weight: bold; float: right; cursor: pointer; padding: 0 4px; transition: color 0.2s; }
    .delete-btn:hover { color: var(--text-bright); }

    @keyframes pulse { 0% { opacity: 1; } 50% { opacity: 0.5; } 100% { opacity: 1; } }
    
    .group-list-item { display: flex; justify-content: space-between; align-items: center; padding: 0.5rem; border-bottom: 1px solid var(--border-color); font-size: 0.85rem; }
    
    nav { border-bottom: 1px solid var(--border-color); padding: 1rem 2rem; display: flex; justify-content: space-between; align-items: center; background-color: var(--panel-bg); }

    .video-wrapper { position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; border: 1px solid var(--border-color); margin-top: 1rem; }
    .video-wrapper iframe { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }

    /* Top Nav specific buttons */
    .nav-controls { display: flex; gap: 1rem; align-items: center; }
    .nav-btn { width: auto; padding: 0.5rem 1rem; margin: 0; font-size: 0.8rem; }
  </style>
</head>
<body>

  <div id="securityGate" style="position: fixed; top: 0; left: 0; width: 100vw; height: 100vh; background-color: var(--base-bg); z-index: 9999; display: flex; flex-direction: column; align-items: center; justify-content: center;">
    <div class="panel" style="width: 400px; text-align: center;">
      <h2 style="color: var(--brand-orange); margin-bottom: 1rem;">Secure Login</h2>
      <span class="mono-data" style="margin-bottom: 2rem;">Weekly Social Media Planner</span>
      
      <input type="text" id="clientName" placeholder="Username" autocomplete="off">
      <input type="password" id="clientKey" placeholder="Password">
      
      <button onclick="authenticateProtocol()">Log In</button>
      <span id="authStatus" style="font-size: 0.85rem; font-family: 'Inter', sans-serif; color: var(--alert-red); display: none; margin-top: 1rem;">ACCESS DENIED.</span>
    </div>
  </div>

  <div id="header"></div>
  <script src="/header.js"></script>

  <nav>
    <h2>Social Media Planner</h2>
    <div class="nav-controls">
      <span class="mono-data" style="margin:0; font-size: 0.75rem;">Status: <span style="color: #8DB300;">Active</span></span>
      <button id="alertBtn" class="nav-btn" style="background-color: #8DB300;" onclick="requestLocalPermissions()">Enable Alerts</button>
      <button id="themeToggle" class="secondary nav-btn" onclick="toggleTheme()">Toggle Light Mode</button>
    </div>
  </nav>

  <div class="glass-box-container">
    
    <div class="panel">
      <h3 class="panel-header">Create a Post</h3>
      
      <label class="mono-data">Where to post?</label>
      <select id="groupSelect">
        <option value="">Loading destinations...</option>
      </select>
      
      <label class="mono-data">What do you want to say?</label>
      <textarea id="postContent" rows="6" placeholder="Write your post content here..."></textarea>
      
      <label class="mono-data">Add an Image or Video</label>
      <input type="file" id="mediaInput" accept="image/png, image/jpeg, video/mp4, video/quicktime">
      <div class="media-preview" id="previewContainer">
        <span class="mono-data" style="color: var(--text-main);">No media selected</span>
      </div>
      
      <label class="mono-data">When should this go live?</label>
      <input type="datetime-local" id="scheduleTime">
      <button onclick="schedulePost()">Schedule Post</button>
      <button class="secondary" onclick="testPublish()">Post Now (Manual)</button>

      <h4 style="margin-top: 2.5rem; font-size: 0.9rem; text-align: center;">Need Help Scheduling?</h4>
      <div class="video-wrapper">
        <iframe src="https://www.youtube.com/embed/rZMmBRp3Ics" title="How to Schedule a Post" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
    </div>

    <div class="panel" style="overflow-x: auto;">
      <h3 class="panel-header">Your Content Calendar</h3>
      <div class="calendar-wrapper" id="calendarGrid"></div>
    </div>

    <div class="panel">
      <h3 class="panel-header">Manage Destinations</h3>
      <p style="font-size: 0.85rem; margin-bottom: 1rem;">Save the Facebook Groups, Pages, and LinkedIn Profiles you post to frequently.</p>
      
      <label class="mono-data">Platform</label>
      <select id="newGroupType" style="margin-bottom: 1rem;">
        <option value="fb_group">Facebook Group</option>
        <option value="fb_page">Facebook Page</option>
        <option value="linkedin">LinkedIn Profile/Page</option>
      </select>

      <label class="mono-data">Destination Name</label>
      <input type="text" id="newGroupName" placeholder="e.g., Local Community Group">
      
      <label class="mono-data">Link (URL)</label>
      <input type="text" id="newGroupId" placeholder="e.g., https://www.facebook.com/groups/...">
      
      <button class="secondary" onclick="addGroup()">Save Destination</button>
      
      <h4 style="margin-top: 2rem; margin-bottom: 1rem; font-size: 0.9rem;">Saved Destinations</h4>
      <div id="activeGroupsList"></div>
    </div>
  </div>

  <div class="glass-box-full">
    <div class="panel">
      <h3 class="panel-header">Tutorials & Support</h3>
      <p style="font-size: 0.85rem; margin-bottom: 1.5rem;">Watch this quick tutorial to understand how the browser notification and clipboard posting works.</p>
      
      <div style="max-width: 600px; margin: 0 auto 2rem auto;">
        <div class="video-wrapper">
          <iframe src="https://www.youtube.com/embed/bhQpNpldVA4" title="How the Posting Engine Works" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
      </div>

      <div style="text-align: center;">
        <a href="https://creativestartupnz.com" target="_blank" style="text-decoration: none; display: inline-block;">
          <button type="button" class="secondary" style="width: auto; padding: 1rem 2rem;">Return to Creative Startup NZ</button>
        </a>
      </div>
    </div>
  </div>
  
  <div id="footer"></div>
  <script src="/footer.js"></script>

  <script>
    // Light/Dark Mode Toggle Logic
    const themeBtn = document.getElementById('themeToggle');
    
    function toggleTheme() {
      document.body.classList.toggle('light-mode');
      if (document.body.classList.contains('light-mode')) {
        localStorage.setItem('csnz-theme', 'light');
        themeBtn.textContent = 'Toggle Dark Mode';
      } else {
        localStorage.setItem('csnz-theme', 'dark');
        themeBtn.textContent = 'Toggle Light Mode';
      }
    }

    // Check saved theme on load
    window.addEventListener('DOMContentLoaded', () => {
      if (localStorage.getItem('csnz-theme') === 'light') {
        document.body.classList.add('light-mode');
        themeBtn.textContent = 'Toggle Dark Mode';
      }
    });
    
    // Prevent dev tools inspecting (basic UI protection)
    document.addEventListener('contextmenu', event => event.preventDefault()); 
    document.onkeydown = function(e) {
      if (e.keyCode == 123 || 
         (e.ctrlKey && e.shiftKey && (e.keyCode == 'I'.charCodeAt(0) || e.keyCode == 'J'.charCodeAt(0))) || 
         (e.ctrlKey && e.keyCode == 'U'.charCodeAt(0))) {
        return false;
      }
    };
  </script>


  <script>
    let failedAttempts = 0;

    async function authenticateProtocol() {
      const name = document.getElementById('clientName').value.trim();
      const pass = document.getElementById('clientKey').value.trim();
      const statusText = document.getElementById('authStatus');

      if (!name || !pass) {
        statusText.innerText = "Please enter your username and password.";
        statusText.style.display = "block";
        return;
      }

      statusText.innerText = "Logging in...";
      statusText.style.color = "var(--brand-orange)";
      statusText.style.display = "block";

      // LIVE GOOGLE APPS SCRIPT ENDPOINT
      const GOOGLE_SCRIPT_URL = "https://script.google.com/macros/s/AKfycbzKUotMtnR4UiZ1-9kBi3V8rtrodthhmD02aVeP9R7it6nnbNMvJWVH4K7KEm46DgRn/exec"; 

      try {
        const response = await fetch(GOOGLE_SCRIPT_URL, {
          method: 'POST',
          headers: { 'Content-Type': 'text/plain;charset=utf-8' },
          body: JSON.stringify({ username: name, password: pass })
        });

        const result = await response.json();

        if (result.success === true) {
          statusText.innerText = "Login successful. Loading your planner...";
          statusText.style.color = "#8DB300";
          setTimeout(() => {
            document.getElementById('securityGate').style.display = 'none';
          }, 800);
        } else {
          registerStrike();
        }
      } catch (err) {
        console.error("Connection failed", err);
        registerStrike();
      }
    }

    function registerStrike() {
      failedAttempts++;
      const statusText = document.getElementById('authStatus');
      statusText.style.color = "var(--alert-red)";
      
      if (failedAttempts >= 3) {
        statusText.innerText = "Too many failed attempts. Redirecting for your security...";
        setTimeout(() => {
          window.location.href = "https://creativestartupnz.com/no-access.php";
        }, 1500);
      } else {
        statusText.innerText = `Incorrect login. Attempt ${failedAttempts} of 3.`;
      }
    }

    // Notification Logic
    function requestLocalPermissions() {
      if (!window.Notification) { alert("Your browser does not support desktop notifications."); return; }
      window.Notification.requestPermission().then(function(permission) {
        if (permission === "granted") {
          document.getElementById('alertBtn').style.display = 'none';
          alert("Alerts enabled! Keep this tab open in the background so we can notify you when it's time to post.");
        } else {
          alert("Permission denied. The planner will still track your posts, but you will not receive a popup alert on your screen.");
        }
      });
    }

    window.onload = function() {
      if (window.Notification && window.Notification.permission === "granted") {
        document.getElementById('alertBtn').style.display = 'none';
      }
    };

    setInterval(function() {
      if (!db) return;
      const transaction = db.transaction(["posts"], "readwrite");
      const store = transaction.objectStore("posts");
      const request = store.getAll();

      request.onsuccess = function() {
        const now = new Date().getTime();
        const posts = request.result;

        posts.forEach(function(post) {
          if (post.status === 'pending' && post.timestamp <= now) {
            post.status = 'triggered';
            store.put(post);

            if (window.Notification && window.Notification.permission === "granted") {
              const notif = new window.Notification("Time to Post!", {
                body: "Ready for deployment: " + post.groupName,
                requireInteraction: true
              });
              notif.onclick = function() {
                window.focus();
                executePublish(post);
                this.close();
              };
            } else {
              console.log("Missed alert for: " + post.groupName);
            }
            loadCalendar();
          }
        });
      };
    }, 10000);

    // Database Management
    let db;
    const requestDB = window.indexedDB.open("UniversalPostingDB", 2);

    requestDB.onupgradeneeded = function(event) {
      db = event.target.result;
      if (!db.objectStoreNames.contains("posts")) {
        db.createObjectStore("posts", { keyPath: "id", autoIncrement: true });
      }
      if (!db.objectStoreNames.contains("groups")) {
        db.createObjectStore("groups", { keyPath: "id" });
      }
    };

    requestDB.onsuccess = function(event) {
      db = event.target.result;
      initializeDefaultGroups(function() {
        loadGroups();
        loadCalendar();
      });
    };

    function initializeDefaultGroups(callback) {
      const transaction = db.transaction(["groups"], "readwrite");
      const store = transaction.objectStore("groups");

      store.put({ 
        id: 'smallbusinessnz', 
        name: 'Small Business NZ & Start-up evolution', 
        type: 'fb_group',
        url: 'https://www.facebook.com/groups/smallbusinessnz/' 
      });

      const deprecatedTargets = ['selwynbusinessnetwork', 'bdinetwork', '1153749230160602', '1520527927973558', '495603421207516', 'tgabuyandsellanything', '1482090815246918'];
      deprecatedTargets.forEach(targetId => store.delete(targetId));

      transaction.oncomplete = function() {
        if (callback) callback();
      };
    }

    function loadGroups() {
      const transaction = db.transaction(["groups"], "readonly");
      const store = transaction.objectStore("groups");
      const dbReq = store.getAll();

      dbReq.onsuccess = function() {
        const groups = dbReq.result;
        const select = document.getElementById('groupSelect');
        const list = document.getElementById('activeGroupsList');

        select.innerHTML = '<option value="">Select a destination...</option>';
        list.innerHTML = '';

        groups.forEach(function(group) {
          const groupUrl = group.url || ('https://www.facebook.com/groups/' + group.id + '/');

          const option = document.createElement('option');
          option.value = groupUrl;
          option.setAttribute('data-id', group.id);
          option.textContent = group.name;
          select.appendChild(option);

          const item = document.createElement('div');
          item.className = 'group-list-item';

          if (group.id === 'smallbusinessnz') {
            item.innerHTML = `<span>${group.name}</span> <span class="mono-data" style="margin:0; font-size: 0.65rem; color: #8DB300;">[CORE GROUP]</span>`;
          } else {
            item.innerHTML = `<span>${group.name}</span><button class="secondary" style="width: auto; padding: 0.2rem 0.5rem; margin: 0; font-size: 0.7rem;" onclick="removeGroup('${group.id}')">Remove</button>`;
          }
          list.appendChild(item);
        });
      };
    }

    function addGroup() {
      const type = document.getElementById('newGroupType').value;
      const name = document.getElementById('newGroupName').value.trim();
      const idOrUrl = document.getElementById('newGroupId').value.trim();

      if(!name || !idOrUrl) { alert("Please provide a name and a URL for your destination."); return; }

      let url = idOrUrl;
      if (type === 'fb_group' && !idOrUrl.startsWith('http')) {
        url = 'https://www.facebook.com/groups/' + idOrUrl + '/';
      } else if (!idOrUrl.startsWith('http')) {
        alert("For Facebook Pages and LinkedIn, please copy and paste the full https:// URL from your browser.");
        return;
      }

      const uniqueId = 'target_' + Date.now().toString();

      const transaction = db.transaction(["groups"], "readwrite");
      const store = transaction.objectStore("groups");
      
      store.put({ id: uniqueId, name: name, type: type, url: url });

      transaction.oncomplete = function() {
        document.getElementById('newGroupName').value = '';
        document.getElementById('newGroupId').value = '';
        loadGroups();
      };
    }

    function removeGroup(id) {
      if (id === 'smallbusinessnz') {
        alert("This is a core community group and cannot be removed.");
        return;
      }
      if(confirm("Are you sure you want to remove this saved destination?")) {
        const transaction = db.transaction(["groups"], "readwrite");
        const store = transaction.objectStore("groups");
        store.delete(id);
        transaction.oncomplete = function() { loadGroups(); };
      }
    }

    // Asset Management
    let currentMediaFile = null;

    document.getElementById('mediaInput').addEventListener('change', function(e) {
      const fileList = e.target.files;
      if (!fileList || fileList.length === 0) return;

      const file = fileList[0];
      currentMediaFile = file; 
      const preview = document.getElementById('previewContainer');

      if (file.type.startsWith('image/')) {
        const reader = new FileReader();
        reader.onload = function(event) {
          preview.innerHTML = '<img src="' + event.target.result + '" alt="Saved Image">';
        };
        reader.readAsDataURL(file);
      } else if (file.type.startsWith('video/')) {
        preview.innerHTML = '<span class="mono-data" style="text-align:center;">Video ready.<br>This will download automatically when you post.</span>';
      }
    });

    function clearInput() {
      document.getElementById('postContent').value = '';
      document.getElementById('previewContainer').innerHTML = '<span class="mono-data" style="color: var(--text-main);">No media selected</span>';
      document.getElementById('mediaInput').value = '';
      currentMediaFile = null;
      loadCalendar();
    }

    function schedulePost() {
      const groupSelectEl = document.getElementById('groupSelect');
      const targetUrl = groupSelectEl.value;
      const groupId = groupSelectEl.options[groupSelectEl.selectedIndex]?.getAttribute('data-id');
      const groupName = groupSelectEl.options[groupSelectEl.selectedIndex]?.text;
      const content = document.getElementById('postContent').value;
      const time = document.getElementById('scheduleTime').value;

      if (!content || !time || !targetUrl) { 
        alert('Please fill out the destination, your post text, and select a time to schedule.'); 
        return; 
      }

      const post = {
        groupId: groupId,
        groupName: groupName,
        targetUrl: targetUrl,
        content: content,
        mediaBlob: currentMediaFile, 
        mediaType: currentMediaFile ? currentMediaFile.type : null,
        timestamp: new Date(time).getTime(),
        status: 'pending'
      };

      const transaction = db.transaction(["posts"], "readwrite");
      const store = transaction.objectStore("posts");
      store.add(post);

      transaction.oncomplete = function() {
        alert('Post scheduled! Keep this browser tab open to receive your popup notification.');
        clearInput();
      };
    }

    // Execution Engine
    async function executePublish(post) {
      try {
        window.focus();
        let clipboardSuccess = false;

        if (post.mediaBlob) {
          if (post.mediaType.startsWith('image/')) {
            try {
              const clipboardItems = {
                'text/plain': new Blob([post.content], { type: 'text/plain' }),
                [post.mediaType]: post.mediaBlob
              };
              await navigator.clipboard.write([new ClipboardItem(clipboardItems)]);
              clipboardSuccess = true;
            } catch (combinedErr) {
              console.warn("Browser rejected combined image+text clipboard. Triggering fallback.");
              const url = URL.createObjectURL(post.mediaBlob);
              const a = document.createElement('a');
              a.href = url;
              a.download = 'Scheduled_Image_' + new Date().getTime() + '.png';
              document.body.appendChild(a);
              a.click();
              document.body.removeChild(a);
              setTimeout(() => URL.revokeObjectURL(url), 10000);
            }
          } else if (post.mediaType.startsWith('video/')) {
            const url = URL.createObjectURL(post.mediaBlob);
            const a = document.createElement('a');
            a.href = url;
            a.download = 'Scheduled_Video_' + new Date().getTime() + '.mp4';
            document.body.appendChild(a);
            a.click();
            document.body.removeChild(a);
            setTimeout(() => URL.revokeObjectURL(url), 10000);
            alert("Video downloaded to your computer. Text copied to your clipboard. Paste your text and attach the video to post.");
          }
        }

        if (!clipboardSuccess) {
          try {
            await navigator.clipboard.writeText(post.content);
            clipboardSuccess = true;
          } catch (textErr) {
            console.warn("Modern writeText failed. Engaging fallback copy.", textErr);
            
            const textArea = document.createElement("textarea");
            textArea.value = post.content;
            textArea.style.position = "fixed";
            textArea.style.left = "-999999px";
            textArea.style.top = "-999999px";
            document.body.appendChild(textArea);
            textArea.focus();
            textArea.select();

            try {
              document.execCommand('copy');
              clipboardSuccess = true;
            } catch (fallbackErr) {
              console.error('All clipboard methods failed.', fallbackErr);
            }
            document.body.removeChild(textArea);
          }
        }

        if (!clipboardSuccess) {
          throw new Error("Clipboard access blocked by browser.");
        }

        window.open(post.targetUrl, '_blank');

        post.status = 'executed';
        db.transaction(["posts"], "readwrite").objectStore("posts").put(post);
        loadCalendar();

      } catch (err) {
        console.error('Execution failed: ', err);
        alert('Action interrupted. Please ensure your browser allows clipboard access and pop-ups for this site.');
      }
    }

    function testPublish() {
      const targetUrl = document.getElementById('groupSelect').value;
      if(!targetUrl) { alert("Please select a destination first."); return; }

      let content = document.getElementById('postContent').value || "This is a manual test post.";
      executePublish({ 
        content: content, 
        targetUrl: targetUrl, 
        mediaBlob: currentMediaFile, 
        mediaType: currentMediaFile ? currentMediaFile.type : null 
      });
    }

    function deletePost(postId) {
      if(confirm("Are you sure you want to delete this scheduled post?")) {
        const transaction = db.transaction(["posts"], "readwrite");
        transaction.objectStore("posts").delete(postId);
        transaction.oncomplete = function() { loadCalendar(); };
      }
    }

    // Rendering Calendar
    function loadCalendar() {
      const grid = document.getElementById('calendarGrid');
      grid.innerHTML = '';

      const transaction = db.transaction(["posts"], "readonly");
      const store = transaction.objectStore("posts");
      const dbReq = store.getAll();

      dbReq.onsuccess = function() {
        const posts = dbReq.result;

        const uniqueDates = posts.map(p => new Date(p.timestamp).toDateString());
        const baseDates = [];
        const today = new Date();

        for(let i=0; i<7; i++) {
          const d = new Date(today);
          d.setDate(today.getDate() + i);
          baseDates.push(d.toDateString());
        }

        const allDates = [...new Set([...baseDates, ...uniqueDates])];
        allDates.sort((a, b) => new Date(a) - new Date(b));

        grid.style.gridTemplateColumns = `repeat(${allDates.length}, minmax(150px, 1fr))`;

        allDates.forEach(dateStr => {
          const dayDiv = document.createElement('div');
          dayDiv.className = 'calendar-day';
          dayDiv.id = 'day-' + dateStr;

          const d = new Date(dateStr);
          const days = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'];
          dayDiv.innerHTML = `<div class="day-header">${days[d.getDay()]} ${d.getDate()}/${d.getMonth()+1}</div>`;
          grid.appendChild(dayDiv);
        });

        posts.sort((a, b) => a.timestamp - b.timestamp).forEach(function(post) {
          const postDate = new Date(post.timestamp).toDateString();
          const targetDay = document.getElementById('day-' + postDate);

          if (targetDay) {
            const item = document.createElement('div');
            let statusClass = post.status === 'executed' ? 'ready' : (post.status === 'triggered' ? 'missed' : '');
            item.className = 'scheduled-item ' + statusClass;

            const d = new Date(post.timestamp);
            let hours = d.getHours();
            let minutes = d.getMinutes();
            const ampm = hours >= 12? 'PM' : 'AM';
            hours = hours % 12;
            if (!hours) hours = 12; 
            if (minutes < 10) minutes = '0' + minutes;

            item.innerHTML = `<span style="font-weight: bold; color: var(--text-bright);">${hours}:${minutes} ${ampm}</span><span class="delete-btn" title="Delete Post">X</span><br>${post.groupName}`;

            item.querySelector('.delete-btn').onclick = function(e) {
              e.stopPropagation();
              deletePost(post.id);
            };

            item.onclick = function(e) { 
              if(e.target.className !== 'delete-btn') {
                executePublish(post);
              }
            };
            targetDay.appendChild(item);
          }
        });
      };
    }
  </script>
</body>
</html>