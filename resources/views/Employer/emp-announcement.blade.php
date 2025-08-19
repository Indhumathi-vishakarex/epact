<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Employee Dashboard</title>

<link rel="icon" type="image/x-icon" href="{{ asset('assets/img/epact-globe.webp') }}">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500;600&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet">
<link href="{{ asset('css/faq.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/colors.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/epact.css') }}" rel="stylesheet">
<link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">


    <!-- Text editor's -->

</head>

<body>
    <style>
        body {
            background: #f4f7fa;
            padding: 0 !important;
            font-family: 'Jost', sans-serif;
        }
        
        .announcement-card {
            background: #fff;
            max-height: fit-content;
            border-radius: 15px;
            padding: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.08);
            margin-bottom: 20px;
        }
        
        .profile-img {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            object-fit: contain;
            margin-right: 15px;
        }
        
        .announcement-text {
            font-size: 16px;
            margin-top: 10px;
        }
        
        .bottom-icons {
            display: flex;
            justify-content: space-between;
            margin-top: 10px;
            font-size: 14px;
        }
        
        .bottom-icons i {
            margin-right: 5px;
            color: #7c7c7c;
            cursor: pointer;
        }
        
        .badge-small {
            font-size: 10px;
            position: relative;
            top: 15px;
            padding: 2px 6px;
        }
        
        .bottom-icons span {
            color: #7c7c7c;
            font-weight: 500;
        }
        
        .comment-wrapper {
            margin-top: 10px;
        }
        
        .comments .comment-box {
            background: #f8f9fa;
            padding: 10px;
            border-radius: 10px;
            margin-bottom: 8px;
            font-size: 14px;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.05);
        }
        
        .comments .comment-box .reply-box {
            margin-left: 25px;
            margin-top: 8px;
        }
        
        .view-all-btn {
            background-color: transparent;
            color: #4aace0;
            border: none;
            font-size: 14px;
            font-weight: 600;
            margin-bottom: 8px;
            cursor: pointer;
        }
        
        .reply-input {
            margin-top: 8px;
        }
        
        .reply-btn {
            font-size: 13px;
            color: #0d6efd;
            cursor: pointer;
        }
        
        textarea {
            resize: none;
        }
        /* announcement area */
        
        .announcement {
            height: 100vh;
            margin-bottom: 20px;
            scrollbar-width: thin;
            overflow-x: hidden;
            overflow-y: scroll;
        }
        
        .announcement-area {
            display: flex;
            justify-content: space-between;
            gap: 10px;
        }
        
        @media (max-width: 768px) {
            .announcement-area {
                display: block;
            }
        }
        
        .input-group .form-control {
            border-radius: 25px 0 0 25px;
            resize: none;
        }
        
        .input-group .btn {
            border-radius: 0 25px 25px 0;
            padding: 0 15px;
        }
        
        [data-role="editor-toolbar"] {
            display: flex;
            flex-wrap: wrap;
            gap: 5px;
            overflow-x: auto;
            overflow-y: hidden;
            max-width: 100%;
            scrollbar-width: thin;
            padding: 5px;
            border-radius: 8px;
            background: #f9f9f9;
        }
        
        #editor {
            min-height: auto;
            max-height: 250px;
            height: 250px;
            background-color: white;
            border-collapse: separate;
            border: 1px solid rgb(204, 204, 204);
            padding: 4px;
            box-sizing: content-box;
            -webkit-box-shadow: rgba(0, 0, 0, 0.0745098) 0px 1px 1px 0px inset;
            box-shadow: rgba(0, 0, 0, 0.0745098) 0px 1px 1px 0px inset;
            border-top-right-radius: 3px;
            border-bottom-right-radius: 3px;
            border-bottom-left-radius: 3px;
            border-top-left-radius: 3px;
            overflow: scroll;
            outline: none;
            border: 1px solid #ddd;
            scrollbar-width: none;
            background: #fff;
            color: #000;
            /* Makes sure text is visible */
        }
        
        #editor * {
            font-family: inherit;
            font-size: inherit;
        }
        
        .dropdown-menu {
            z-index: 9999;
            /* fix hidden dropdown issue */
        }
        
        .btn-group>.btn,
        .btn-group>.dropdown-menu,
        .btn-group>.popover {
            height: 41px !important;
            padding: 10px !important;
        }
        
        .nice-select {
            display: none;
        }
        
        .hero-unit {
            background-color: #fff;
        }
        
        .editor-tool-btn {
            border: 1px solid rgba(0, 0, 0, 0.415);
            color: rgba(0, 0, 0, 0.463);
            width: fit-content;
        }
    </style>
    <!-- START HEADER -->
   
    <!-- Navigation -->
    @include('Employer.partials.header')
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
                         @include('Employer.partials.sidebar')
            <!-- Main Content -->
            <main class="col-md-8 ms-sm-auto col-lg-10 content mb-5">
                <h3 class="px-2">Announcement</h3>
                <p class="mb-3 px-2 w-75 text-sm-muted">We are excited to have you onboard.</p>
                <!-- Top Navbar -->
                <nav class="navbar top-nav navbar-expand-lg navbar-white bg-none shadow-sm px-3">
                    <!-- <a class="navbar-brand fw-bold" href="#">🏢 EPact</a> -->
                    <ul class="navbar-nav ms-auto d-flex flex-row gap-3">
                        <!-- Announcements -->
                        <li class="nav-item position-relative">
                            <a href="{{route('emp-announcement')}}" class="nav-link">
                                <i class="bi bi-megaphone fs-5"></i>
                                <span class="badge rounded-pill bg-danger position-absolute top-0 start-100 translate-middle text-danger badge-small fw-bold">.</span>
                            </a>
                        </li>
                        <!-- Notifications -->
                        <li class="nav-item position-relative">
                            <a href="{{route('emp-notification')}}" class="nav-link">
                                <i class="bi bi-bell fs-5"></i>
                                <span class="badge rounded-pill bg-danger position-absolute top-0 start-100 translate-middle text-danger badge-small fw-bold">.</span>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- Single Announcement Card -->
                <div class="announcement-area">

                    <div class="announcement col col-md-8">
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
                                <img src="./assets/img/slider-5.jpg" alt="" class="img-post img-fluid">
                            </div>
                            <hr style="color: #0000003b;">
                            <div class="bottom icons" style=" max-width: 100%; width: 100%;">
                                <div>
                                    <span onclick="toggleLike(this)" style="cursor: pointer;" class="likeBtn">
    <i class="bi bi-heart heartIcon"></i>
    <span class="likeCount" style="margin-right: 10px;">12</span>
                                    </span>

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
                                <img src="./assets/img/slider-5.jpg" alt="" class="img-post img-fluid">
                            </div>
                            <hr style="color: #0000003b;">
                            <div class="bottom icons" style=" max-width: 100%; width: 100%;">
                                <div>
                                    <span onclick="toggleLike(this)" style="cursor: pointer;" class="likeBtn">
    <i class="bi bi-heart heartIcon"></i>
    <span class="likeCount" style="margin-right: 10px;">12</span>
                                    </span>

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
                                <img src="./assets/img/slider-5.jpg" alt="" class="img-post img-fluid">
                            </div>
                            <hr style="color: #0000003b;">
                            <div class="bottom icons" style=" max-width: 100%; width: 100%;">
                                <div>
                                    <span onclick="toggleLike(this)" style="cursor: pointer;" class="likeBtn">
    <i class="bi bi-heart heartIcon"></i>
    <span class="likeCount" style="margin-right: 10px;">12</span>
                                    </span>

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
                                <div>
                                    <span onclick="toggleLike(this)" style="cursor: pointer;" class="likeBtn">
    <i class="bi bi-heart heartIcon"></i>
    <span class="likeCount" style="margin-right: 10px;">12</span>
                                    </span>

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
                    <div class="announcement-card col-md-4 mx-auto">
                        <h4 class="mb-4">Post a New Announcement</h4>

                        <!-- Toolbar -->
                        <div class="editor-toolbar mb-2 d-flex flex-wrap gap-2">
                            <select class="form-select form-select-sm w-auto" onchange="execCmd('fontSize', this.value)">
                  <option value="">Font Size</option>
                  <option value="1">Small</option>
                  <option value="3">Normal</option>
                  <option value="5">Large</option>
                  <option value="7">Huge</option>
               </select>

                            <!-- Image -->
                            <input type="file" style="line-height: 47px;" id="imageUploader" onchange="uploadImage()" class="form-control form-control-sm w-100">

                        </div>

                        <!-- Editor -->
                        <div id="editor" contenteditable="true">Go ahead&hellip;</div>

                        <button class="btn-custom w-100 mt-3" onclick="postAnnouncement()">Post Announcement</button>
                    </div>
                    <div class="modal fade" id="uploadModal" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content text-center p-4" style="display: flex; gap: 30px; flex-direction: row;">
                                <div class="spinner-border text-primary" role="status">
                                    <span class="visually-hidden">Uploading...</span>
                                </div>
                                <h5>Uploading Announcement...</h5>
                            </div>
                        </div>
                    </div>
            </main>
            </div>
        </div>
        {{-- <div id="footer"></div> --}}
         @include('Frontend.layouts.footer')

        <!-- jQuery for section toggling -->
        <script src="./js/pages.js"></script>
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/rangeslider.js"></script>
        <script src="assets/js/jquery.nice-select.min.js"></script>
        <script src="assets/js/slick.js"></script>
        <script src="assets/js/counterup.min.js"></script>
        <script src="assets/js/custom.js"></script>
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
        </script>
        <style>

        </style>
        <script>
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
        </script>

        <!-- Post comment text editor -->
        <script>
            $(function() {
                function initToolbarBootstrapBindings() {
                    var fonts = ['Serif', 'Sans', 'Arial', 'Arial Black', 'Courier',
                            'Courier New', 'Comic Sans MS', 'Helvetica', 'Impact', 'Lucida Grande', 'Lucida Sans', 'Tahoma', 'Times',
                            'Times New Roman', 'Verdana'
                        ],
                        fontTarget = $('[title=Font]').siblings('.dropdown-menu');
                    $.each(fonts, function(idx, fontName) {
                        fontTarget.append($('<li><a data-edit="fontName ' + fontName + '" style="font-family:\'' + fontName + '\'">' + fontName + '</a></li>'));
                    });
                    $('a[title]').tooltip({
                        container: 'body'
                    });
                    $('.dropdown-menu input').click(function() {
                            return false;
                        })
                        .change(function() {
                            $(this).parent('.dropdown-menu').siblings('.dropdown-toggle').dropdown('toggle');
                        })
                        .keydown('esc', function() {
                            this.value = '';
                            $(this).change();
                        });

                    $('[data-role=magic-overlay]').each(function() {
                        var overlay = $(this),
                            target = $(overlay.data('target'));
                        overlay.css('opacity', 0).css('position', 'absolute').offset(target.offset()).width(target.outerWidth()).height(target.outerHeight());
                    });
                    if ("onwebkitspeechchange" in document.createElement("input")) {
                        var editorOffset = $('#editor').offset();
                        $('#voiceBtn').css('position', 'absolute').offset({
                            top: editorOffset.top,
                            left: editorOffset.left + $('#editor').innerWidth() - 35
                        });
                    } else {
                        $('#voiceBtn').hide();
                    }
                };

                function showErrorAlert(reason, detail) {
                    var msg = '';
                    if (reason === 'unsupported-file-type') {
                        msg = "Unsupported format " + detail;
                    } else {
                        console.log("error uploading file", reason, detail);
                    }
                    $('<div class="alert"> <button type="button" class="close" data-dismiss="alert">&times;</button>' +
                        '<strong>File upload error</strong> ' + msg + ' </div>').prependTo('#alerts');
                };
                initToolbarBootstrapBindings();
                $('#editor').wysiwyg({
                    fileUploadError: showErrorAlert
                });
                window.prettyPrint && prettyPrint();
            });
        </script>
        <div id="fb-root"></div>
        <script>
            (function(i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function() {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                    m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
            ga('create', 'UA-37452180-6', 'github.io');
            ga('send', 'pageview');
        </script>
        <script>
            (function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s);
                js.id = id;
                js.src = "http://connect.facebook.net/en_GB/all.js#xfbml=1";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
        </script>

        <script>
            ! function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (!d.getElementById(id)) {
                    js = d.createElement(s);
                    js.id = id;
                    js.src = "http://platform.twitter.com/widgets.js";
                    fjs.parentNode.insertBefore(js, fjs);
                }
            }(document, "script", "twitter-wjs");
        </script>

        <script>
            $(document).ready(function() {
                $('#editor').wysiwyg({
                    toolbarSelector: '[data-role=editor-toolbar]',
                    fileUploadError: function(reason, detail) {
                        console.error("Upload Error", reason, detail);
                    }
                });
            });

            function execCmd(command, value = null) {
                document.execCommand(command, false, value);
            }

            function uploadImage() {
                const input = document.getElementById('imageUploader');
                if (input.files && input.files[0]) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        execCmd('insertImage', e.target.result);
                    };
                    reader.readAsDataURL(input.files[0]);
                }
            }

            function postAnnouncement() {
                const content = document.getElementById('editor').innerHTML;

                // Show loading animation using SweetAlert2
                Swal.fire({
                    title: 'Posting...',
                    html: 'Please wait while we upload your announcement.',
                    didOpen: () => {
                        Swal.showLoading();
                    },
                    allowOutsideClick: false,
                    allowEscapeKey: false,
                    showConfirmButton: false
                });

                // Simulate a delay (e.g., uploading to server)
                setTimeout(() => {
                    Swal.fire({
                        icon: 'success',
                        title: 'Announcement Posted!',
                        html: `<div style="text-align: left;"></div>`,
                        confirmButtonText: 'Close',
                        width: '40rem'
                    });

                    console.log("Posted Content:", content);
                }, 2000);
            }
        </script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

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