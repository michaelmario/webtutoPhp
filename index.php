<?php include_once('head.php'); ?>

<body>
    <!-- The Modal -->
    <div id="mauriModal" class="w3-modal">
        <div class="w3-modal-content">
            <div class="w3-container w3-indigo w3-center">
                <span onclick="document.getElementById('mauriModal').style.display='none'" class="w3-button w3-display-topright">&times;</span>
                <h2>Sign Up Here</h2>
            </div>
            <div class="w3-container w3-center">
                <form name="signupform" id="signupform" onsubmit="return false;">
                    <div class="w3-col m3 sm12">
                        <label>Username:</label>
                        <input id="username" type="text" onblur="checkusername()" onkeyup="restrict('username')" maxlength="16">
                        <span id="unamestatus"></span>
                    </div>
                    <div class="w3-col m3 sm12">
                        <label>Email Address:</label>
                        <input id="email" type="email" onfocus="emptyElement('status')" onkeyup="restrict('email')" maxlength="88">
                    </div>
                    <div class="w3-col m3 sm12">
                        <label>Create Password:</label>
                        <input id="pass1" type="password" onfocus="emptyElement('status')" maxlength="16">
                    </div>
                    <div class="w3-col m3 sm12">
                        <label>Confirm Password:</label>
                        <input id="pass2" type="password" onfocus="emptyElement('status')" maxlength="16" onkeyup="checkPassword()">
                        <span id="passCheck"></span>
                    </div>
                    <div class="w3-col m3 sm12">
                        <label>Gender:</label>
                        <select id="gender" onfocus="emptyElement('status')">
                            <option value=""></option>
                            <option value="m">Male</option>
                            <option value="f">Female</option>
                        </select>
                    </div>
                    <div class="w3-col m3 sm12">
                        <label>Country:</label>
                        <select id="country" onfocus="emptyElement('status')">
                            <?php include_once("template_country_list.php"); ?>
                        </select>
                    </div>
                    <br /><br />
                    <div class="w3-col m12 sm12 w3-margin">
                      <button class="w3-button w3-green w3-hover-black" id="signupbtn" onclick="signup()">Create Account</button>
                        <span id="status"></span>
                        <div class="w3-col m3 sm12">
                            <div>
                                <a href="#" onclick="return false" onmousedown="openTerms()">
                                View the Terms Of Use
                            </a>
                        </div>
                        </div>
                        <div class="w3-margin-top" id="terms" style="display:none;">
                            <input class="form-check-input" type="checkbox" value="" id="check" required="">
                            <label class="form-check-label" for="invalidCheck2">
                                 BY SUBMITTING THIS FORM, I AGREE THAT THE INFORMATION
                                 SEIZURES ARE EXPLOITED AS PART OF THE REQUEST FOR
                                 PROPOSALS AND THE COMMERCIAL RELATIONSHIP WHICH MAY
                                 RESULT.
                            </label>

                        </div>
                    </div>
                </form>
            </div>
            <footer class="w3-container w3-indigo w3-center">
                <h3>MauriCode Academy Learning Channel<br>
                    <small class="w3-text-orange">Tutoriel en créole Mauricien</small>
                </h3>
                <p>&copy;2021 MauricodeAcademy</p>
            </footer>
        </div>
    </div>
    <header>
        <nav>
            <h1>MauriCode Academy Learning Channel<br>
                <small>Tutoriel en créole Mauricien</small>
                <h1>
        </nav>
    </header>
    <main>
        <?php include_once("template_pageTop.php"); ?>
        <section class="w3-container">
            <div class="w3-row">
                <div class="w3-col m4 s12">
                    <aside class="w3-container">
                        <p class="w3-center">
                            <strong>
                                Visiter le site MauricodeAcademy à l'url:<br>
                                mauricodeacademy.web.app
                            </strong>
                        </p>
                        <?php include_once('button.php'); ?>
                    </aside>
                </div>
                <div class="w3-col m8 s12">
                    <?php include_once('front_page.php'); ?>
                </div>
        </section>
    </main>
    <?php include_once("template_pageBottom.php"); ?>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script type="text/javascript">
        <?php include 'js/main.js'; ?>
    </script>
    <script type="text/javascript">
        <?php include 'js/ajax.js'; ?>
    </script>
    <script type="text/javascript">
        <?php include 'js/signup.js'; ?>
    </script>
</body>

</html>