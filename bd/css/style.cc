
body {
	background: url(../img/bg.jpg) left top repeat;
    font-family: 'Roboto', sans-serif;
    font-size: 16px;
    font-weight: 300;
    color: #888;
    line-height: 30px;
    text-align: center;
}

strong { font-weight: 500; }

a, a:hover, a:focus {
	color: #19b9e7;
	text-decoration: none;
    -o-transition: all .3s; -moz-transition: all .3s; -webkit-transition: all .3s; -ms-transition: all .3s; transition: all .3s;
}

h1, h2 {
	margin-top: 10px;
	font-size: 38px;
    font-weight: 100;
    color: #555;
    line-height: 50px;
}

h3 {
	font-size: 22px;
    font-weight: 300;
    color: #555;
    line-height: 30px;
}

img { max-width: 100%; }

::-moz-selection { background: #19b9e7; color: #fff; text-shadow: none; }
::selection { background: #19b9e7; color: #fff; text-shadow: none; }


.btn-link-1 {
	display: inline-block;
	height: 50px;
	margin: 5px;
	padding: 16px 20px 0 20px;
	background: #19b9e7;
	font-size: 16px;
    font-weight: 300;
    line-height: 16px;
    color: #fff;
    -moz-border-radius: 4px; -webkit-border-radius: 4px; border-radius: 4px;
}
.btn-link-1:hover, .btn-link-1:focus, .btn-link-1:active { outline: 0; opacity: 0.6; color: #fff; }

.btn-link-1.btn-link-1-facebook { background: #4862a3; }
.btn-link-1.btn-link-1-twitter { background: #55acee; }
.btn-link-1.btn-link-1-google-plus { background: #dd4b39; }

.btn-link-1 i {
	padding-right: 5px;
	vertical-align: middle;
	font-size: 20px;
	line-height: 20px;
}

.btn-link-2 {
	display: inline-block;
	height: 50px;
	margin: 5px;
	padding: 15px 20px 0 20px;
	background: rgba(0, 0, 0, 0.3);
	border: 1px solid #fff;
	font-size: 16px;
    font-weight: 300;
    line-height: 16px;
    color: #fff;
    -moz-border-radius: 4px; -webkit-border-radius: 4px; border-radius: 4px;
}
.btn-link-2:hover, .btn-link-2:focus, 
.btn-link-2:active, .btn-link-2:active:focus { outline: 0; opacity: 0.6; background: rgba(0, 0, 0, 0.3); color: #fff; }


/***** Top content *****/

.inner-bg {
    padding: 60px 0 80px 0;
}

.top-content .description {
	margin: 20px 0 10px 0;
}

.top-content .description a:hover, 
.top-content .description a:focus { border-bottom: 1px dotted #19b9e7; }

.form-box {
	margin-top: 70px;
}

.form-top {
	overflow: hidden;
	padding: 0 25px 15px 25px;
	background: #f3f3f3;
	-moz-border-radius: 4px 4px 0 0; -webkit-border-radius: 4px 4px 0 0; border-radius: 4px 4px 0 0;
	text-align: left;
}

.form-top-left {
	float: left;
	width: 75%;
	padding-top: 25px;
}

.form-top-left h3 { margin-top: 0; }

.form-top-right {
	float: left;
	width: 25%;
	padding-top: 5px;
	font-size: 66px;
	color: #ddd;
	line-height: 100px;
	text-align: right;
}

.form-bottom {
	padding: 25px 25px 30px 25px;
	background: #eee;
	-moz-border-radius: 0 0 4px 4px; -webkit-border-radius: 0 0 4px 4px; border-radius: 0 0 4px 4px;
	text-align: left;
}

.form-bottom form textarea {
	height: 100px;
}

.form-bottom form button.btn {
	width: 100%;
}

.form-bottom form .input-error {
	border-color: #19b9e7;
}

.social-login {
	margin-top: 35px;
}

.social-login-buttons {
	margin-top: 25px;
}

.middle-border {
	min-height: 300px;
	margin-top: 170px;
	border-right: 1px solid #ddd;
}


/***** Footer *****/

footer {
	padding-bottom: 70px;
}

footer .footer-border {
	width: 200px;
	margin: 0 auto;
	padding-bottom: 30px;
	border-top: 1px solid #ddd;
}

footer a:hover, footer a:focus { border-bottom: 1px dotted #19b9e7; }


/***** Media queries *****/

@media (min-width: 992px) and (max-width: 1199px) {}

@media (min-width: 768px) and (max-width: 991px) {}

@media (max-width: 767px) {
	
	.middle-border { min-height: auto; margin: 65px 30px 0 30px; border-right: 0; border-top: 1px solid #ddd; }
	
}

@media (max-width: 415px) {
	
	h1, h2 { font-size: 32px; }

}

