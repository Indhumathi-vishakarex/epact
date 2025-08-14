<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Announcement</title>
   <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/epact-globe.webp') }}">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500;600&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet">
<link href="{{ asset('css/faq.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/colors.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/epact.css') }}" rel="stylesheet">
<link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
<link href="{{ asset('style.css') }}" rel="stylesheet">


    <!-- Text editor's -->

</head>

<body>
    <style>
        .announcement-area {
            display: flex;
            justify-content: space-between;
            gap: 10px;
        }
        
        .announcement {
            height: 100vh;
            margin-bottom: 20px;
            scrollbar-width: thin;
            overflow-x: hidden;
            overflow-y: scroll;
        }
    </style>
    <!-- START HEADER -->
   
  @include('Employee.partials.header')
    @include('Employee.partials.sidebar')
   

            <!-- Sidebar -->
          

            <!-- Main Content -->
            <main class="col-md-8 ms-sm-auto col-lg-10 content mb-5">
                <h3 class="px-2">Announcement</h3>
                <p class="mb-3 px-2 w-75 text-sm-muted">We are excited to have you onboard.</p>
                <!-- Top Navbar -->
             

                  {{-- announcement and notification --}}
            
             @include('Employee.partials.navbar')
                <!-- Single Announcement Card -->
                <div class="announcement-area">

                    <div class="announcement col col-md-8">
                        <div class="announcement-card col-md-12">
                            <div class="d-flex align-items-center">
                                {{-- <img src="../assets/img/author-1.png" class="profile-img" alt="profile"> --}}
                                <div>
                                    <h6 class="mb-0">Haritha Prakash</h6>
                                    <small class="text-muted">Web Designer • Mar 25, 2:00pm</small>
                                </div>
                            </div>
                            <div class="announcement-text">
                                Welcome to Winnogoo! 🎉 We are excited to have you onboard. Stay tuned for weekly updates and announcements here! We are excited to have you onboard. Stay tuned for weekly updates and announcements here!
                            </div>
                            <div class="img-post mt-3">
                                <img src="../assets/img/slider-5.jpg" alt="" class="img-post img-fluid">
                            </div>
                            <hr style="color: #0000003b;">
                            <div class="bottom icons" style=" max-width: 100%; width: 100%;">
                                <div class="mt-3">
                                    <span onclick="toggleLike(this)" style="cursor: pointer;" class="likeBtn">
    <i class="bi bi-heart heartIcon"></i>
    <span class="likeCount" style="margin-right: 10px;">12</span>
                                    </span>
                                    <i class="bi bi-chat-left" onclick="toggleCommentSection(this)"></i> <span>4</span>
                                    <div class="comment-wrapper d-none mt-3">
                                        <div class="comments"></div>
                                        <button class="view-all-btn d-none">View All Comments</button>
                                        <div class="d-flex mt-2">
                                            <input type="text" class="form-control rounded-pill px-3 comment-input me-2" style="height: 50px;" placeholder="Write a comment...">
                                            <button class="btn btn-primary rounded-circle d-flex align-items-center justify-content-center" style="  width: 40px; height: 40px; margin-top: 8px; background: none; color: green;" onclick="postComment(this)">
                                       <i class="bi bi-send-fill"></i>
                                    </button>
                                        </div>
                                    </div>
                                </div>
                                <!-- <i class="bi bi-share"></i> -->
                            </div>
                        </div>
                        <div class="announcement-card col-md-12">
                            <div class="d-flex align-items-center">
                                <img src="../assets/img/author-1.png" class="profile-img" alt="profile">
                                <div>
                                    <h6 class="mb-0">Haritha Prakash</h6>
                                    <small class="text-muted">Web Designer • Mar 25, 2:00pm</small>
                                </div>
                            </div>
                            <div class="announcement-text">
                                Welcome to Winnogoo! 🎉 We are excited to have you onboard. Stay tuned for weekly updates and announcements here! We are excited to have you onboard. Stay tuned for weekly updates and announcements here!
                            </div>
                            <div class="img-post mt-3">
                                <img src="../assets/img/slider-5.jpg" alt="" class="img-post img-fluid">
                            </div>
                            <hr style="color: #0000003b;">
                            <div class="bottom icons" style=" max-width: 100%; width: 100%;">
                                <div class="mt-3">
                                    <span onclick="toggleLike(this)" style="cursor: pointer;" class="likeBtn">
    <i class="bi bi-heart heartIcon"></i>
    <span class="likeCount" style="margin-right: 10px;">12</span>
                                    </span>
                                    <i class="bi bi-chat-left" onclick="toggleCommentSection(this)"></i> <span>4</span>
                                    <div class="comment-wrapper d-none mt-3">
                                        <div class="comments"></div>
                                        <button class="view-all-btn d-none">View All Comments</button>
                                        <div class="d-flex mt-2">
                                            <input type="text" class="form-control rounded-pill px-3 comment-input me-2" style="height: 50px;" placeholder="Write a comment...">
                                            <button class="btn btn-primary rounded-circle d-flex align-items-center justify-content-center" style="  width: 40px; height: 40px; margin-top: 8px; background: none; color: green;" onclick="postComment(this)">
                                       <i class="bi bi-send-fill"></i>
                                    </button>
                                        </div>
                                    </div>
                                </div>
                                <!-- <i class="bi bi-share"></i> -->
                            </div>
                        </div>
                        <div class="announcement-card col-md-12">
                            <div class="d-flex align-items-center">
                                <img src="../assets/img/author-1.png" class="profile-img" alt="profile">
                                <div>
                                    <h6 class="mb-0">Haritha Prakash</h6>
                                    <small class="text-muted">Web Designer • Mar 25, 2:00pm</small>
                                </div>
                            </div>
                            <div class="announcement-text">
                                Welcome to Winnogoo! 🎉 We are excited to have you onboard. Stay tuned for weekly updates and announcements here! We are excited to have you onboard. Stay tuned for weekly updates and announcements here!
                            </div>
                            <div class="img-post mt-3">
                                <img src="../assets/img/slider-5.jpg" alt="" class="img-post img-fluid">
                            </div>
                            <hr style="color: #0000003b;">
                            <div class="bottom icons" style=" max-width: 100%; width: 100%;">
                                <div class="mt-3">
                                    <span onclick="toggleLike(this)" style="cursor: pointer;" class="likeBtn">
    <i class="bi bi-heart heartIcon"></i>
    <span class="likeCount" style="margin-right: 10px;">12</span>
                                    </span>
                                    <i class="bi bi-chat-left" onclick="toggleCommentSection(this)"></i> <span>4</span>
                                    <div class="comment-wrapper d-none mt-3">
                                        <div class="comments"></div>
                                        <button class="view-all-btn d-none">View All Comments</button>
                                        <div class="d-flex mt-2">
                                            <input type="text" class="form-control rounded-pill px-3 comment-input me-2" style="height: 50px;" placeholder="Write a comment...">
                                            <button class="btn btn-primary rounded-circle d-flex align-items-center justify-content-center" style="  width: 40px; height: 40px; margin-top: 8px; background: none; color: green;" onclick="postComment(this)">
                                       <i class="bi bi-send-fill"></i>
                                    </button>
                                        </div>
                                    </div>
                                </div>
                                <!-- <i class="bi bi-share"></i> -->
                            </div>
                        </div>
                        <div class="announcement-card col-md-12">
                            <div class="d-flex align-items-center">
                                <img src="../assets/img/author-1.png" class="profile-img" alt="profile">
                                <div>
                                    <h6 class="mb-0">Haritha Prakash</h6>
                                    <small class="text-muted">Web Designer • Mar 25, 2:00pm</small>
                                </div>
                            </div>
                            <div class="announcement-text">
                                Welcome to Winnogoo! 🎉 We are excited to have you onboard. Stay tuned for weekly updates and announcements here! We are excited to have you onboard. Stay tuned for weekly updates and announcements here!
                            </div>
                            <div class="img-post mt-3">
                                <img src="../assets/img/slider-5.jpg" alt="" class="img-post img-fluid">
                            </div>
                            <hr style="color: #0000003b;">
                            <div class="bottom icons" style=" max-width: 100%; width: 100%;">
                                <div class="mt-3">
                                    <span onclick="toggleLike(this)" style="cursor: pointer;" class="likeBtn">
    <i class="bi bi-heart heartIcon"></i>
    <span class="likeCount" style="margin-right: 10px;">12</span>
                                    </span>
                                    <i class="bi bi-chat-left" onclick="toggleCommentSection(this)"></i> <span>4</span>
                                    <div class="comment-wrapper d-none mt-3">
                                        <div class="comments"></div>
                                        <button class="view-all-btn d-none">View All Comments</button>
                                        <div class="d-flex mt-2">
                                            <input type="text" class="form-control rounded-pill px-3 comment-input me-2" style="height: 50px;" placeholder="Write a comment...">
                                            <button class="btn btn-primary rounded-circle d-flex align-items-center justify-content-center" style="  width: 40px; height: 40px; margin-top: 8px; background: none; color: green;" onclick="postComment(this)">
                                       <i class="bi bi-send-fill"></i>
                                    </button>
                                        </div>
                                    </div>
                                </div>
                                <!-- <i class="bi bi-share"></i> -->
                            </div>
                        </div>
                        <!-- Post New Announcement -->
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
                                    <li><a href="./index.html"><i class="fa-solid fa-angle-double-right"></i> Home</a></li>
                                    <li><a href="./about.html"><i class="fa-solid fa-angle-double-right"></i> About Us</a></li>
                                    <li><a href="./pricing.html"><i class="fa-solid fa-angle-double-right"></i> Pricing</a></li>
                                    <li><a href="./faq.html"><i class="fa-solid fa-angle-double-right"></i> FAQ</a></li>
                                    <li><a href="./contact.html"><i class="fa-solid fa-angle-double-right"></i> Contact Us</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6">
                            <div class="footer-widget">
                                <h4 class="widget-title">Quick Links</h4>
                                <ul class="footer-menu">
                                    <li><a href="../login.html"><i class="fa-solid fa-angle-double-right"></i> Employer Login</a></li>
                                    <li><a href="../employee-login.html"><i class="fa-solid fa-angle-double-right"></i> Employee Login</a></li>
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
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/rangeslider.js') }}"></script>
<script src="{{ asset('assets/js/jquery.nice-select.min.js') }}"></script>
<script src="{{ asset('assets/js/slick.js') }}"></script>
<script src="{{ asset('assets/js/counterup.min.js') }}"></script>
<script src="{{ asset('assets/js/custom.js') }}"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

        <script>
            let liked = false;
            let likeCount = 12; // set to current value

            function toggleLike(el) {
                const heartIcon = el.querySelector(".heartIcon");
                const countSpan = el.querySelector(".likeCount");
                let count = parseInt(countSpan.innerText);

                const isLiked = heartIcon.classList.contains("bi-heart-fill");

                if (!isLiked) {
                    heartIcon.classList.remove("bi-heart");
                    heartIcon.classList.add("bi-heart-fill");
                    el.style.color = "red";
                    countSpan.innerText = count + 1;
                } else {
                    heartIcon.classList.remove("bi-heart-fill");
                    heartIcon.classList.add("bi-heart");
                    el.style.color = "grey";
                    countSpan.innerText = count - 1;
                }
            }

            function toggleSidebar() {
                const sidebar = document.getElementById('sidebarNav');
                const toggleBtn = document.getElementById('sidebarToggle');
                sidebar.classList.toggle('show');
                toggleBtn.style.display = sidebar.classList.contains('show') ? 'none' : 'block';
            }

            function toggleCollapse(id) {
                const target = document.getElementById(id);
                const all = document.querySelectorAll('.collapse');
                all.forEach(el => {
                    if (el !== target) el.classList.remove('show');
                });
                target.classList.toggle('show');
            }

            function setupSectionToggles() {
                document.querySelectorAll(".module-link").forEach(link => {
                    link.addEventListener("click", function(e) {
                        e.preventDefault();
                        const targetId = this.dataset.target;
                        document.querySelectorAll(".module-section").forEach(section => {
                            section.style.display = "none";
                        });
                        const targetSection = document.getElementById(targetId);
                        if (targetSection) targetSection.style.display = "block";
                        if (window.innerWidth <= 768) toggleSidebar();
                    });
                });
            }


            // Link active Nav
            document.addEventListener('DOMContentLoaded', function() {
                const currentPath = window.location.pathname.split("/").pop(); // e.g. add-emp.html
                const navLinks = document.querySelectorAll(".nav-link");

                navLinks.forEach(link => {
                    const href = link.getAttribute("href");
                    if (href && href.includes(currentPath)) {
                        // Highlight the current page link
                        link.classList.add("active");

                        // Expand its parent dropdown (if any)
                        const parentCollapse = link.closest(".collapse");
                        if (parentCollapse) {
                            parentCollapse.classList.add("show");

                            // Set the toggle button's aria-expanded to true
                            const toggle = document.querySelector(`[data-bs-toggle="collapse"][href="#${parentCollapse.id}"]`);
                            if (toggle) {
                                toggle.setAttribute("aria-expanded", "true");
                            }
                        }
                    }
                });
            });
            const allComments = new Map();

            // ✅ Default 4 comments loaded on each card
            function initializeDefaultComments(card) {
                if (allComments.has(card)) return;

                const defaultComments = [{
                    id: Date.now() + 1,
                    text: "Welcome aboard!",
                    replies: []
                }, {
                    id: Date.now() + 2,
                    text: "Looking forward to the journey.",
                    replies: []
                }, {
                    id: Date.now() + 3,
                    text: "Feel free to ask questions here.",
                    replies: []
                }, {
                    id: Date.now() + 4,
                    text: "We will have weekly fun activities!",
                    replies: []
                }];
                allComments.set(card, defaultComments);
            }

            function toggleCommentSection(icon) {
                const wrapper = icon.closest('.announcement-card').querySelector('.comment-wrapper');
                wrapper.classList.toggle('d-none');
                const card = icon.closest('.announcement-card');
                initializeDefaultComments(card);
                renderComments(card);
            }

            function postComment(button) {
                const card = button.closest('.announcement-card');
                const input = card.querySelector('.comment-input');
                const text = input.value.trim();
                if (!text) return;

                if (!allComments.has(card)) initializeDefaultComments(card);
                allComments.get(card).push({
                    id: Date.now(),
                    text,
                    replies: []
                });

                input.value = '';
                renderComments(card);
            }

            function renderComments(card) {
                const commentArea = card.querySelector('.comments');
                const viewAllBtn = card.querySelector('.view-all-btn');
                const comments = allComments.get(card) || [];
                commentArea.innerHTML = '';

                const visibleCount = 2;
                comments.forEach((comment, index) => {
                    const box = document.createElement('div');
                    box.className = 'comment-box';
                    if (index >= visibleCount) box.classList.add('extra-comment', 'd-none');

                    box.innerHTML = `
            <div><strong>User</strong></div>
            <div>${comment.text}</div>
            <div class="reply-btn mt-1 text-secondary" style="cursor:pointer;" onclick="toggleReplyBox(this)"><i class="fa-solid fa-reply mx-2"></i>Reply</div>
            <div class="reply-box d-none">
                <textarea class="form-control form-control-sm reply-input" rows="1" placeholder="Reply..."></textarea>
                <button class="btn btn-sm btn-success mt-1">Post Reply</button>
            </div>
        `;

                    // Reply Posting
                    box.querySelector('button').addEventListener('click', function() {
                        const replyInput = box.querySelector('.reply-input');
                        const replyText = replyInput.value.trim();
                        if (!replyText) return;
                        comment.replies.push({
                            id: Date.now(),
                            text: replyText
                        });
                        replyInput.value = '';
                        renderComments(card);
                    });

                    // Append Replies
                    comment.replies.forEach(reply => {
                        const replyEl = document.createElement('div');
                        replyEl.className = 'comment-box reply-box';
                        replyEl.innerHTML = `<div><strong>User</strong></div><div>${reply.text}</div>`;
                        box.appendChild(replyEl);
                    });

                    commentArea.appendChild(box);
                });

                // View All Button logic
                if (comments.length > visibleCount) {
                    viewAllBtn.classList.remove('d-none');
                    viewAllBtn.onclick = function() {
                        const extras = commentArea.querySelectorAll('.extra-comment');
                        const isHidden = extras[0].classList.contains('d-none');
                        extras.forEach(el => el.classList.toggle('d-none'));
                        viewAllBtn.innerHTML = isHidden ?
                            '<i class="bi bi-chat-left-dots me-1"></i> Hide Comments' :
                            '<i class="bi bi-chat-left-dots me-1"></i> View All Comments';
                    };
                    viewAllBtn.innerHTML = '<i class="bi bi-chat-left-dots me-1"></i> View All Comments';
                } else {
                    viewAllBtn.classList.add('d-none');
                }
            }

            function toggleReplyBox(el) {
                el.nextElementSibling.classList.toggle('d-none');
            }

            // ✅ On page load, initialize all announcement cards
            document.addEventListener('DOMContentLoaded', function() {
                document.querySelectorAll('.announcement-card').forEach(card => {
                    initializeDefaultComments(card);
                    renderComments(card);
                });
            });

            // <!-- Post comment text editor -->
        </script>
        <!-- <div id="fb-root"></div> -->

        <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
        <!-- <div id="editor" ></div> -->
        <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
        <script>
            var quill = new Quill('#editor', {
                theme: 'snow'
            });
        </script>

</body>

</html>