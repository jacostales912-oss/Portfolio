document.addEventListener("DOMContentLoaded", () => {

  /* ================= CHAT ================= */

  const launcher = document.getElementById("chatLauncher");
  const chatBox = document.getElementById("chatBox");
  const closeChat = document.getElementById("closeChat");
  const sendBtn = document.getElementById("sendMsg");
  const input = document.getElementById("chatInput");
  const messages = document.getElementById("chatMessages");

  if (launcher && chatBox) {
    launcher.onclick = () => chatBox.style.display = "flex";
    closeChat.onclick = () => chatBox.style.display = "none";

    sendBtn.onclick = sendMessage;
    input.addEventListener("keypress", e => { if (e.key === "Enter") sendMessage(); });
  }

  function sendMessage() {
    if (!input.value.trim()) return;

    const userMsg = document.createElement("div");
    userMsg.className = "user-msg";
    userMsg.innerText = input.value;
    messages.appendChild(userMsg);

    input.value = "";
    messages.scrollTop = messages.scrollHeight;

    showTyping();
  }

  function showTyping() {
    const typing = document.createElement("div");
    typing.className = "bot-msg typing";
    typing.innerText = "Norman is typing...";
    messages.appendChild(typing);

    setTimeout(() => {
      typing.remove();
      autoReply();
    }, 1200);
  }

  function autoReply() {
    const replies = [
      "Appreciate you hittin’ me up 🤝 I’m on that grind fr, check my socials if you need more info."
    ];

    const reply = document.createElement("div");
    reply.className = "bot-msg";
    reply.innerText = replies[Math.floor(Math.random() * replies.length)];
    messages.appendChild(reply);
    messages.scrollTop = messages.scrollHeight;
  }

  /* ================= IMAGE MODAL ================= */

  const profilePic = document.getElementById("profilePic");
  const modal = document.getElementById("imgModal");
  const modalImg = document.getElementById("modalImg");
  const captionText = document.getElementById("caption");
  const closeModal = document.querySelector("#imgModal .close");

  if (profilePic && modal) {
    profilePic.onclick = () => {
      modal.style.display = "block";
      modalImg.src = profilePic.src;
      captionText.innerHTML = profilePic.alt;
    };

    closeModal.onclick = () => modal.style.display = "none";

    modal.onclick = (e) => {
      if (e.target === modal) modal.style.display = "none";
    };
  }


 const container = document.getElementById("three-container");

if (container) {

    const scene = new THREE.Scene();

    const camera = new THREE.PerspectiveCamera(
        60,
        container.clientWidth / container.clientHeight,
        0.1,
        1000
    );
    camera.position.set(3, 3, 5);

    const renderer = new THREE.WebGLRenderer({ alpha: true, antialias: true });
    renderer.setSize(container.clientWidth, container.clientHeight);
    renderer.setPixelRatio(window.devicePixelRatio);
    container.appendChild(renderer.domElement);

    // ===== ORBIT CONTROLS =====
    const controls = new THREE.OrbitControls(camera, renderer.domElement);
    controls.enableDamping = true;
    controls.enableZoom = false;

    // ===== LIGHTS =====
    const ambient = new THREE.AmbientLight(0xffffff, 0.8);
    scene.add(ambient);

    const point = new THREE.PointLight(0xffffff, 1);
    point.position.set(5, 5, 5);
    scene.add(point);

    // ===== DARK / LIGHT MODE COLOR =====
    const isDark = document.body.classList.contains("dark-mode");

    const cubeColor = isDark ? 0xf5f5f5 : 0x000000;
    const edgeColor = 0x8b5cf6;

    // ===== RUBIK STYLE CUBE =====
    const group = new THREE.Group();

    const boxGeo = new THREE.BoxGeometry(0.9, 0.9, 0.9);

    for (let x = -1; x <= 1; x++) {
        for (let y = -1; y <= 1; y++) {
            for (let z = -1; z <= 1; z++) {

                const material = new THREE.MeshStandardMaterial({
                    color: cubeColor,
                });

                const cube = new THREE.Mesh(boxGeo, material);
                cube.position.set(x, y, z);

                const edges = new THREE.EdgesGeometry(boxGeo);
                const line = new THREE.LineSegments(
                    edges,
                    new THREE.LineBasicMaterial({ color: edgeColor })
                );
                cube.add(line);

                group.add(cube);
            }
        }
    }

    scene.add(group);

    // ===== ANIMATE =====
    function animate() {
        requestAnimationFrame(animate);
        group.rotation.y += 0.002;
        controls.update();
        renderer.render(scene, camera);
    }

    animate();

    // ===== RESIZE FIX =====
    window.addEventListener("resize", () => {
        const w = container.clientWidth;
        const h = container.clientHeight;

        camera.aspect = w / h;
        camera.updateProjectionMatrix();
        renderer.setSize(w, h);
    });
}


});
document.addEventListener("DOMContentLoaded", () => {
    const modeToggleBtn = document.getElementById('modeToggleBtn');
    const modeOptions = document.getElementById('modeOptions');
    const lightModeBtn = document.getElementById('lightMode');
    const darkModeBtn = document.getElementById('darkMode');
    const body = document.body;

    // Apply saved theme on load
    if(localStorage.getItem('theme')) {
        body.setAttribute('data-theme', localStorage.getItem('theme'));
    }

    // Show/hide options
    modeToggleBtn.addEventListener('click', () => {
        modeOptions.classList.toggle('hidden');
    });

    // Light Mode
    lightModeBtn.addEventListener('click', () => {
        body.setAttribute('data-theme', 'light');
        localStorage.setItem('theme', 'light');
        modeOptions.classList.add('hidden');
    });

    // Dark Mode
    darkModeBtn.addEventListener('click', () => {
        body.setAttribute('data-theme', 'dark');
        localStorage.setItem('theme', 'dark');
        modeOptions.classList.add('hidden');
    });

    // Close popup on click outside
    document.addEventListener('click', (e) => {
        if (!modeToggleBtn.contains(e.target) && !modeOptions.contains(e.target)) {
            modeOptions.classList.add('hidden');
        }
    });
});
const images = document.querySelectorAll(".gallery-card-images img");
const modal = document.getElementById("galleryModal");
const modalImg = document.getElementById("modalImg");
const closeBtn = document.querySelector(".close");
const nextBtn = document.querySelector(".next");
const prevBtn = document.querySelector(".prev");

let currentIndex = 0;

images.forEach((img, index) => {
    img.addEventListener("click", () => {
        modal.style.display = "flex";
        modalImg.src = img.src;
        captionText.innerText = img.alt;
        currentIndex = index;
    });
});

function showImage(index) {
    if (index < 0) currentIndex = images.length - 1;
    if (index >= images.length) currentIndex = 0;

    modalImg.src = images[currentIndex].src;
    captionText.innerText = images[currentIndex].alt;
}

nextBtn.addEventListener("click", () => {
    currentIndex++;
    showImage(currentIndex);
});

prevBtn.addEventListener("click", () => {
    currentIndex--;
    showImage(currentIndex);
});

closeBtn.addEventListener("click", () => {
    modal.style.display = "none";
});

modal.addEventListener("click", (e) => {
    if (e.target === modal) modal.style.display = "none";
});


