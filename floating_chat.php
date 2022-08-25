<style>
/* Button used to open the chat form - fixed at the bottom of the page */
.open-button {
  /* background-color: #02adc6; */
  background-color: transparent;
  color: white;
  /* padding: 16px 20px; */
  border: none;
  cursor: pointer;
  /* opacity: 0.8; */
  position: fixed;
  bottom: 23px;
  right: 28px;
  width: 70px;
  height: 50px;
  border-radius: 34px;
  /* width: 75px;
  height: 75px;
  border-radius: 50px; */
  z-index: 99;
}

/* The popup chat - hidden by default */
.chat-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}

/* Full-width textarea */
.form-container textarea {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
  resize: none;
  min-height: 200px;
}

/* When the textarea gets focus, do something */
.form-container textarea:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/send button */
.form-container .btn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
  width: 70px;
  height: 50px;
  border-radius: 34px;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}

.header .nav li a {
  font-weight: 600;
}

html.mm-opened body {
    overflow: hidden !important;
}

.header {
    z-index: 3;
}

.glyphicon {
    right: -15px !important;
	top: -10px;
}
</style>

<!-- <button class="open-button" onclick="openForm()"><span style="font-size:20px;" class="glyphicon">&#x2709;</span></button> -->
<button class="open-button" onclick="openForm()"><span style="font-size:20px;" class="glyphicon"><img draggable="false" role="img" width="52" height="60" style="border-radius: 100px 200px 150px 250px; /*height: 60px !important; max-width: 60px !important;*/" class="emoji" alt="Dr.Galen AI Bot Invictus" src="https://drgalen.org/assets/images/invictus-small.png"></span></button>

<div class="chat-popup" id="myForm">
  <form class="form-container">
	<iframe id="advanced_iframe" name="advanced_iframe" src="https://drgalen.org:8443" height="500px" style="width:100%; box-shadow: 0px 0px 10px #888; border: 1px solid white; border-radius:5px;" title="invictus"></iframe>  
    </br>
	<button type="button" class="btn cancel" onclick="closeForm()"><i class="fa fa-times" style="font-size:20px;" aria-hidden="true"></i></button>
  </form>
</div>

<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>
