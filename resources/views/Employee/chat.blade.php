<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Employee Dashboard</title>
  <!-- Favicon -->
<link rel="icon" type="image/x-icon" href="{{ asset('assets/img/epact-globe.webp') }}">

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500;600&display=swap" rel="stylesheet">

<!-- Bootstrap Icons -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

<!-- Custom CSS -->
<link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet">
<link href="{{ asset('css/faq.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/colors.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/epact.css') }}" rel="stylesheet">
<link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
<link href="{{ asset('style.css') }}" rel="stylesheet">

</head>

<body>

    <style>
        .chat-box {
            width: 83%;
            background: white;
            border-right: 1px solid #ddd;
            border-bottom: 1px solid #ddd;
            border-radius: 5px;
            display: flex;
            padding: 0;
            margin: 0;
            flex-direction: column;
        }
        
        .chat-header {
            background-color: #139e77;
            color: white;
            padding: 15px 10px;
            font-weight: bold;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .chat-header .count {
            background: white;
            color: #139e77;
            padding: 2px 8px;
            border-radius: 12px;
            font-size: 0.8rem;
        }
        
        .chat-messages {
            position: relative;
            padding: 10px;
            overflow-y: scroll;
            flex: 1;
            max-height: 450px;
            z-index: 1;
        }
        /* .chat-messages::before {
  content: "";
  position: absolute;  
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-image: url('../assets/img/28719144-86dc0f70-73b1-11e7-911d-60d70fcded21~3.png');
  background-size: cover;
  background-repeat: repeat;
  background-position: center;
  opacity: 0.3;
  z-index: 0;
  pointer-events: none;
} */
        
        .message {
            margin-bottom: 15px;
            display: flex;
            align-items: flex-start;
        }
        
        .message img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            margin-right: 10px;
        }
        
        .message .content {
            max-width: 75%;
            padding: 10px;
            border-radius: 8px;
            font-size: 0.9rem;
            position: relative;
        }
        
        .message.received .content {
            background-color: #d3d3d3;
            color: #000;
        }
        
        .message.sent {
            flex-direction: row-reverse;
        }
        
        .message.sent div {
            position: relative;
            justify-items: self-end;
        }
        
        .message.sent img {
            margin-left: 10px;
            margin-right: 0;
        }
        
        .message.sent .content {
            background-color: #139e77;
            color: #fff;
        }
        
        .meta {
            font-size: 0.75rem;
            margin-top: 4px;
            color: #555;
        }
        
        .chat-input {
            display: flex;
            box-shadow: -2px 3px 8px -2px #0960475a;
            margin: 20px;
            width: 50%;
            align-self: center;
            border-radius: 10px;
            border-radius: 52px;
            border: 1px solid rgba(0, 128, 0, 0.421);
        }
        
        .chat-input input {
            flex: 1;
            padding: 10px 10px;
            border: none;
            border-radius: 52px 0 0 52px;
        }
        
        .file-upload-label {
            padding: 10px 0px 6px 23px;
        }
        
        .chat-input button {
            background-color: #139e77;
            color: white;
            border: none;
            border-radius: 50%;
            cursor: pointer;
            height: 50px;
            width: 50px;
            margin: 5px;
        }
        
        @media (max-width: 780px) {
            .sidebar-toggle {
                background: #139e77;
                height: 37px;
            }
        }
    </style>
    <!-- START HEADER -->
     @include('Employee.partials.header')
    <div class="container-fluid">
           @include('Employee.partials.sidebar')

            <!-- Main Content -->
            <div class="chat-box">
                <div class="chat-header">
                    <i class="bi bi-headset me-2"> Support & Contact</i> <span class="count">20</span>
                </div>
                <div class="chat-messages" id="chatMessages">
                    <div class="message received">
                        <img src="https://i.pravatar.cc/40?img=5" alt="Timona" />
                        <div class="before-content">
                            <div class="content">
                                For what reason would it be advisable for me to think about business content?
                            </div>
                            <div class="meta"> HR • 23 Jan 2:00 PM</div>
                        </div>
                    </div>
                    <div class="message sent">
                        <img src="https://i.pravatar.cc/40?img=12" alt="Sarah" />
                        <div>
                            <div class="content">
                                Thank you for your believe in our supports
                            </div>
                            <div class="meta">Kishore Anand • 23 Jan 2:05 PM</div>
                        </div>
                    </div>
                    <div class="message received">
                        <img src="https://i.pravatar.cc/40?img=5" alt="Timona" />
                        <div class="before-content">
                            <div class="content">
                                For what reason would it be advisable for me to think about business content?
                            </div>
                            <div class="meta"> HR • 23 Jan 2:00 PM</div>
                        </div>
                    </div>
                    <div class="message sent">
                        <img src="https://i.pravatar.cc/40?img=12" alt="Sarah" />
                        <div>
                            <div class="content">
                                Thank you for your believe in our supports
                            </div>
                            <div class="meta">Kishore Anand • 23 Jan 2:05 PM</div>
                        </div>
                    </div>
                    <div class="message received">
                        <img src="https://i.pravatar.cc/40?img=5" alt="Timona" />
                        <div class="before-content">
                            <div class="content">
                                For what reason would it be advisable for me to think about business content?
                            </div>
                            <div class="meta"> HR • 23 Jan 2:00 PM</div>
                        </div>
                    </div>
                    <div class="message sent">
                        <img src="https://i.pravatar.cc/40?img=12" alt="Sarah" />
                        <div>
                            <div class="content">
                                Thank you for your believe in our supports
                            </div>
                            <div class="meta">Kishore Anand • 23 Jan 2:05 PM</div>
                        </div>
                    </div>
                    <div class="message received">
                        <img src="https://i.pravatar.cc/40?img=5" alt="Timona" />
                        <div class="before-content">
                            <div class="content">
                                For what reason would it be advisable for me to think about business content?
                            </div>
                            <div class="meta"> HR • 23 Jan 2:00 PM</div>
                        </div>
                    </div>
                    <div class="message sent">
                        <img src="https://i.pravatar.cc/40?img=12" alt="Sarah" />
                        <div>
                            <div class="content">
                                Thank you for your believe in our supports
                            </div>
                            <div class="meta">Kishore Anand • 23 Jan 2:05 PM</div>
                        </div>
                    </div>
                    <div class="message received">
                        <img src="https://i.pravatar.cc/40?img=5" alt="Timona" />
                        <div class="before-content">
                            <div class="content">
                                For what reason would it be advisable for me to think about business content?
                            </div>
                            <div class="meta"> HR • 23 Jan 2:00 PM</div>
                        </div>
                    </div>
                    <div class="message sent">
                        <img src="https://i.pravatar.cc/40?img=12" alt="Sarah" />
                        <div>
                            <div class="content">
                                Thank you for your believe in our supports
                            </div>
                            <div class="meta">Kishore Anand • 23 Jan 2:05 PM</div>
                        </div>
                    </div>
                </div>
                <div class="chat-input d-flex align-items-center">
                    <label for="fileInput" class="me-2 file-upload-label">
            <i class="bi bi-paperclip" style="font-size: 1.4rem; cursor: pointer;"></i>
        </label>
                    <input type="file" id="fileInput" accept="image/*,audio/*,.pdf,.doc,.docx,.txt" style="display: none;" multiple onchange="handleFile(event)">

                    <input type="text" id="messageInput" class="form-control me-2" placeholder="Type Message ..." />

                    <button onclick="sendMessage()" class="btn btn-success">
            <i class="bi bi-send-fill"></i>
        </button>
                </div>
            </div>


            </main>
        </div>
    </div>

    <footer class="footer skin-light-footer" style="background-color: white; box-shadow:0 8px 12px 0px;">
        <div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <img src="../assets/img/w-Epact.png" class="img-footer img-flio
                                " alt="logo">
                            <div class="footer-add">
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo</p>
                            </div>
                            <div class="foot-socials">
                                <ul>
                                    <li><a href="JavaScript:Void(0);" target="_blank"><i class="fa-brands fa-facebook"></i></a></li>
                                    <li><a href="JavaScript:Void(0);" target="_blank"><i class="fa-brands fa-twitter"></i></a></li>
                                    <li><a href="JavaScript:Void(0);" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
                                    <li><a href="JavaScript:Void(0);" target="_blank"><i class="fa-brands fa-youtube"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 ps-xl-5">
                        <div class="footer-widget">
                            <h4 class="widget-title">The Company</h4>
                            <ul class="footer-menu">
                                <li><a href="../index.html"><i class="fa-solid fa-angle-double-right"></i> Home</a></li>
                                <li><a href="../about.html"><i class="fa-solid fa-angle-double-right"></i> About Us</a></li>
                                <li><a href="../pricing.html"><i class="fa-solid fa-angle-double-right"></i> Pricing</a></li>
                                <li><a href="../faq.html"><i class="fa-solid fa-angle-double-right"></i> FAQ</a></li>
                                <li><a href="../contact.html"><i class="fa-solid fa-angle-double-right"></i> Contact Us</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <h4 class="widget-title">Quick Links</h4>
                            <ul class="footer-menu">
                                <li><a href="../employee-login.html"><i class="fa-solid fa-angle-double-right"></i> Employee Login</a></li>
                                <li><a href="JavaScript:Void(0);"><i class="fa-solid fa-angle-double-right"></i> Employer Login</a></li>
                                <li><a href="../terms.html"><i class="fa-solid fa-angle-double-right"></i> Terms & Conditions</a></li>
                                <li><a href="../privacy.html"><i class="fa-solid fa-angle-double-right"></i> Privacy Policy</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <h4 class="widget-title">Contact Us On</h4>
                            <div class="vl-elfo-group">
                                <div class="vl-elfo-icon"><i class="fa-solid fa-phone-volume"></i></div>
                                <div class="vl-elfo-caption">
                                    <h6>Call Us</h6>
                                    <p><a href="tel:02033765250">020 3376 5250</a></p>
                                </div>
                            </div>
                            <div class="vl-elfo-group">
                                <div class="vl-elfo-icon"><i class="fa-regular fa-envelope"></i></div>
                                <div class="vl-elfo-caption">
                                    <h6>Drop A Mail</h6>
                                    <p><a href="mailto:info@epact.com">info@epact.com</a></p>
                                </div>
                            </div>
                            <div class="vl-elfo-group">
                                <div class="vl-elfo-icon" style="width: revert-layer !important; "><i class="fa-solid fa-map-marker-alt"></i></div>
                                <div class="vl-elfo-caption">
                                    <h6>Reach Us</h6>
                                    <p>Unit 5, EN1 1SP, United Kingdom</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>


        <div class="footer-bottom" style="height: 4vh !important;">
            <div class="container">
                <div class="row align-items-center justify-content-between">

                    <div class="col-12 text-center">
                        <p class="mb-0">&copy; 2025 <a href="index.html">Winngoo EPact</a>. All Rights Reserved</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- jQuery for section toggling -->
  <!-- External JS (jQuery & Bootstrap) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- Local JS -->
<script src="{{ asset('assets/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/rangeslider.js') }}"></script>
<script src="{{ asset('assets/js/jquery.nice-select.min.js') }}"></script>
<script src="{{ asset('assets/js/slick.js') }}"></script>
<script src="{{ asset('assets/js/counterup.min.js') }}"></script>
<script src="{{ asset('assets/js/custom.js') }}"></script>

<!-- External CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">



    <script src="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"></script>
    <script>
        function sendMessage() {
            const input = document.getElementById('messageInput');
            const text = input.value.trim();
            if (!text) return;

            const now = new Date();
            const time = now.toLocaleTimeString([], {
                hour: '2-digit',
                minute: '2-digit'
            });

            const messageHTML = `
        <div class="message sent">
          <img src="https://i.pravatar.cc/40?img=12" alt="You" />
          <div>
            <div class="content">${text}</div>
            <div class="meta">You • ${time}</div>
          </div>
        </div>
      `;

            const container = document.getElementById('chatMessages');
            container.innerHTML += messageHTML;
            container.scrollTop = container.scrollHeight;
            input.value = '';
        }

        function handleFile(event) {
            const file = event.target.files[0];
            if (!file) return;

            const fileType = file.type;
            const reader = new FileReader();

            reader.onload = function(e) {
                let content;

                if (fileType.startsWith('image/')) {
                    content = `<img src="${e.target.result}" alt="Image" style="max-width: 150px; border-radius: 8px;">`;
                } else if (fileType.startsWith('audio/')) {
                    content = `<audio controls><source src="${e.target.result}" type="${fileType}">Your browser does not support audio.</audio>`;
                } else {
                    content = `<a href="${e.target.result}" download="${file.name}">${file.name}</a>`;
                }

                const messageContainer = document.getElementById("messages");
                const msg = document.createElement("div");
                msg.className = "message sent";
                msg.innerHTML = content + `<div class="timestamp">${getCurrentTime()}</div>`;
                messageContainer.appendChild(msg);

                messageContainer.scrollTop = messageContainer.scrollHeight;
            };

            reader.readAsDataURL(file);
        }


        // Add 'active' class to current nav link
      // Add 'active' class to current nav link
const links = document.querySelectorAll('#sidebarNav .nav-link');
const currentPage = window.location.pathname;

links.forEach(link => {
    const href = link.getAttribute('href');
    if (currentPage === href || currentPage.endsWith(href) || href.endsWith(currentPage.split("/").pop())) {
        link.classList.add('active');
    }
});

    </script>
</body>

</html>