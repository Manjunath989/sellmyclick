<!doctype html>
<html lang="en">
  <head>
    <title>Upload image</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <!--styles css-->  
    <?php include_once "styles.php"; ?>
    <!--styles css--> 
  </head>
  <body>
  <!--navbar-->
  <?php include_once "header.php"; ?>
  <!--end of navbar-->


  <br><br>
<div class="container-fluid m-0 p-0" >
<br>
<h1 class= "text-center">Upload Your Image</h1><br>
<div class="row">

<div class="col-md-2"></div>
<div class="col-md-8 container card" style="background-image:url('images/upload.jpeg'); width:100%;height:auto;">
	
	
		<br>
				<div class="title">
					<h3 class="text-center">Please Fill In The Details Below</h3>
					<hr>
<form class="text-center" action="thank-you.php">

	
   Image Name<br>
<input type="text" name="imageName" value="" class="w-50 stsf-b"  ><br><br>

Image Catergory<br>
  <select name="imageCategory" class="w-50 stsf-b">
    
    <option value="education">Education</option>
    <option value="technology">Technology</option>
    <option value="architecture">Architecture</option>
	<option value="nature">Nature</option>
	<option value="interior">Interior</option>
	<option value="Adventure">Adventure</option>
	<option value="Monuments">Monuments</option>
	<option value="Photography">Photography</option>
  <option value="Photography">Others</option>
  </select><br>	<br><br>
  <input type="text" name="imageName" value="" class="w-50 stsf-b" placeholder="Write tags here..." ><br><br>
   </form>

   <div class="container-fluid" >

    <div class="row">
      <div class="col-md-3">
      </div>
      <div class="col-md-8" >
<h4>Select the check boxes to choose your need...</h4>
   <form  class="text-justify"> 
    <div class="checkbox">
      <label><input type="checkbox" value="">1.Do you need resize of your photo?</label>
    </div>
    <div class="checkbox">
      <label><input type="checkbox" value="">2.do you need croping of perticular thing or place ?</label>
    </div>
    <div class="checkbox">
      <label><input type="checkbox" value="">3.Do you need retouch up of ur picture ?(Click check to see the effects)</label>
    </div>
   
  </form>


     <form>
   <div class="checkbox">
      <label><input type="checkbox" value="">4.Do you want to remove background of your image?</label>
    </div>
    <div class="checkbox">
      <label><input type="checkbox" value="">5.Do you want to change the color of your image?</label>
    </div>
    <div class="checkbox">
      <label><input type="checkbox" value="">Not what you looking for?</label>

    </div>
      <textarea rows="4" cols="50" name="comment" form="usrform"  class="w-200 stsf-b" placeholder="Write your need here ...">
</textarea>
  </form>
  </div>
  <div class="col-md-1">
      </div>
</div>
</div><br>
<form class="text-center" action="thank-you.php">
<input type="text" name="cost" value="" class="w-50 stsf-b" disabled="" placeholder="Cost of Editing: 5+5+5+5=20rs" ><br><br>
        <label class="btn btn-info " for="upload-file-selector">
              

<input id="fileupload" type="file" multiple="multiple" /></label><br>
<hr />
<b>Live Preview</b>
<br />
<br />
<div id="dvPreview">
</div>

<br>
    You can upload photos that are .JPEG, .JPG, or .PNG.<br>Max file size 25mb       <br>
	

      <label><input type="checkbox" value="">&nbsp I Agree <a href="#">Terms and Conditions</a></label><br><br>
<input type ="submit" class="btn-danger w-50" >

<br><br>
   
     </form> 
	 
	 </div>
	 </div>
<div class="col-md-2"></div>	
	
	
</div>	
</div>	
<br><br>
<script type="text/javascript">
window.onload = function () {
    var fileUpload = document.getElementById("fileupload");
    fileUpload.onchange = function () {
        if (typeof (FileReader) != "undefined") {
            var dvPreview = document.getElementById("dvPreview");
            dvPreview.innerHTML = "";
            var regex = /^([a-zA-Z0-9\s_\\.\-:])+(.jpg|.jpeg|.gif|.png|.bmp)$/;
            for (var i = 0; i < fileUpload.files.length; i++) {
                var file = fileUpload.files[i];
                if (regex.test(file.name.toLowerCase())) {
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        var img = document.createElement("IMG");
                        img.height = "100";
                        img.width = "100";
                        img.src = e.target.result;
                        dvPreview.appendChild(img);
                    }
                    reader.readAsDataURL(file);
                } else {
                    alert(file.name + " is not a valid image file.");
                    dvPreview.innerHTML = "";
                    return false;
                }
            }
        } else {
            alert("This browser does not support HTML5 FileReader.");
        }
    }
};
</script>

	

  <!--footer-->
  <?php include_once "footer.php"; ?>
  <!-- end of footer-->    
  <?php include_once "script.php"; ?>
  </body>
</html>