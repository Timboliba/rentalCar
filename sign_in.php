<link rel="stylesheet" href="css/sign_in.css">
<div align="center" id="sign">
   <form method="post" action="validation_signIn.php">
        <div>
            <span>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
  <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
</svg>
            </span>
            <input type="text" placeholder="User Name" name="username" id="0">
            <span id="username"></span>
        </div>
        <div>
            <span>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-key-fill" viewBox="0 0 16 16">
  <path d="M3.5 11.5a3.5 3.5 0 1 1 3.163-5H14L15.5 8 14 9.5l-1-1-1 1-1-1-1 1-1-1-1 1H6.663a3.5 3.5 0 0 1-3.163 2zM2.5 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                </svg>
            </span>
            <input type="password" placeholder="PassWord" name="password" id="1">
            <span id="password"></span>
        </div>
        <div>
            <input type="submit" id="sign_in"  value="Login" name="sign_in">
        </div>
   </form>
   <script src="js/jQuery_v3.6.0_min.js"></script>
   <script src="js/form_validation_signIn.js"></script>
   <div>
        Create a count <a data-role="youhavenotacount" style="color:blue;">here</a>
   </div>
</div>

