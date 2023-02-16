<link rel="stylesheet" href="css/sign_up.css">
<div id="inscription" align="center">
    
    <div id="form">
    <h1>Inscription</h1>
        <!--form method="post" action="validation_signUp.php"-->
            
            <div>
                <input type="text" placeholder="First Name" class="input" id="0"><br><span id="err0"></span>
            </div>
            <div>
                <input type="text" placeholder="Last Name" class="input" id="1"><br><span id="err1"></span>
            </div>
            <div>
                <input type="text" placeholder="User Name" class="input" id="2"><br><span id="err2"></span>
            </div>
            <div>
                <input type="password" placeholder="PassWord" class="input" id="3"><br><span id="err3"></span>
            </div>
            <div>
                <input type="text" placeholder="Address" class="input" id="4"><br><span id="err4"></span>
            </div>
            <div>
                <input type="email" placeholder="E-mail" class="input" id="5"><br><span id="err5"></span>
            </div>
            <div>
                <input type="tel" placeholder="Phone Number" class="input" id="6"><br><span id="err6"></span>
            </div>
            <div>
                <input type="text" placeholder="Passport Number / CIN" class="input" id="7"><br><span id="err7"></span>
            </div>
        </div>
        <div>
            <button id="btn_submit">Registration</button>
        </div>
    </div>
    <!--form-->
       <center>You have a count ? click <a  data-role="youhaveacount" style="color:blue">here</a></center>
    </div>
</div>
<script src="js/jQuery_v3.6.0_min.js"></script>
<script src="js/form_validation_signUp.js"></script>

