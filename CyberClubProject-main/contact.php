<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
    <title>Контактна форма</title>
</head>

<body class="contact-page">
    <header>
        <nav>
            <ul>
                <div class="logo-img">
                    <a href="">
                        <li><img src="images/TRU-vector.png" alt=""></li>
                    </a>
                </div>

                <div class="nav-btns">
                    <a href="index.php">
                        <li>Home</li>
                    </a>
                    <a href="event.php">
                        <li>Events</li>
                    </a>
                    <a href="team.php">
                        <li>Team</li>
                    </a>
                    <a href="contact.php">
                        <li>Contacts</li>
                    </a>
                </div>
                <div class="user">
                    <ul class="user-icon">
                    
                        <li><a href="#" class="icn"><i class="fa-solid fa-user icon-img"></i></a>
                            <ul>
                                <li><a href="#">Create</a></li>
                                <li><a href="#">My Events</a></li>
                                <li><a href="#">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </ul>
        </nav>
    </header>

    <section class="home-page">
        <article class="contact-form-article">
            <form class="contact-form">
                <h2>Свържете се с нас</h2>
                    <div>
                        <label for="fullName">Име и фамилия:</label><br>
                        <input type="text" id="fullName" name="fullName" placeholder="Вашите две имена" class="contact-inputs"><br>
                    </div>
                    <div>
                        <label for="email">Email</label><br>
                        <input type="text" id="email" name="email" class="contact-inputs" placeholder="Вашия Email адрес"><br>
                    </div>
                    <div>
                        <label for="subject">Относно:</label><br>
                        <textarea id="message" name="message" rows="4" placeholder="Напиши съобщение..."></textarea>
                    </div>
                    <div class="upload-btn">
                        <label for="file" class="custum-file-upload">
                            <div class="icon">
                                <svg viewBox="0 0 24 24" fill="" xmlns="http://www.w3.org/2000/svg">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M10 1C9.73478 1 9.48043 1.10536 9.29289 1.29289L3.29289 7.29289C3.10536 7.48043 3 7.73478 3 8V20C3 21.6569 4.34315 23 6 23H7C7.55228 23 8 22.5523 8 22C8 21.4477 7.55228 21 7 21H6C5.44772 21 5 20.5523 5 20V9H10C10.5523 9 11 8.55228 11 8V3H18C18.5523 3 19 3.44772 19 4V9C19 9.55228 19.4477 10 20 10C20.5523 10 21 9.55228 21 9V4C21 2.34315 19.6569 1 18 1H10ZM9 7H6.41421L9 4.41421V7ZM14 15.5C14 14.1193 15.1193 13 16.5 13C17.8807 13 19 14.1193 19 15.5V16V17H20C21.1046 17 22 17.8954 22 19C22 20.1046 21.1046 21 20 21H13C11.8954 21 11 20.1046 11 19C11 17.8954 11.8954 17 13 17H14V16V15.5ZM16.5 11C14.142 11 12.2076 12.8136 12.0156 15.122C10.2825 15.5606 9 17.1305 9 19C9 21.2091 10.7909 23 13 23H20C22.2091 23 24 21.2091 24 19C24 17.1305 22.7175 15.5606 20.9844 15.122C20.7924 12.8136 18.858 11 16.5 11Z" fill=""></path>
                                    </g>
                                </svg>
                            </div>
                            <div class="text">
                                <span>Прикачи файл</span>
                            </div>
                            <input id="file" type="file">
                        </label> 
                    </div>
                <div>
                    <button type="button" onclick="alert('Hello World!')">Изпрати</button>
                </div>

            </form>
        </article>
    </section>

    <!-- Footer -->
    <footer>
        <div class="site-footer">
            <div class="logo-img">
                <img src="images/TRU-vector.png" alt="">              
            </div>

            <div class="footer-btns">
                <h2>Quick Links</h2>
                <a href="index.php">
                    <p>Home</p>
                </a>
                <a href="event.php">
                    <p>Events</p>
                </a>
                <a href="team.php">
                    <p>Team</p>
                </a>
                <a href="contact.php">
                    <p>Contacts</p>
                </a>
            </div>

            <div class="footer-contacts">
                <h2>Contacts</h2>
                <h4>E-mail:</h4>
                <p>example@mail.bg</p>
                <h4>Phone:</h4>
                <p>0888832823</p>
                <h4>Address:</h4>
                <p>caasdasdsadasdaasdasdasd</p>
            </div>
        </div>
        
		<div class="copy-right-sec">
            <p>&copy; 2024 All rights reserved.</p>
		</div>
    </footer>
</body>

</html>