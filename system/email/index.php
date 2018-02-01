<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Simple Ajax Contact Form</title>
<link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div class="form-style" id="contact_form">
    <div class="form-style-heading">Please Contact Us</div>
    <div id="contact_results"></div>
    <form id="contact_body" method="post" action="contact_me.php">
        <label for="name"><span>Name <span class="required">*</span></span>
            <input type="text" name="name" data-required="true"/>
        </label>
        <label for="email"><span>Email <span class="required">*</span></span>
            <input type="email" name="email" data-required="true"/>
        </label>
        <label><span>Phone <span class="required">*</span></span>
            <input type="number" name="phone1" maxlength="3" placeholder="+91" />&mdash;
            <input type="number" name="phone2" maxlength="15" data-required="true"/>
        </label>
        <label><span>Attachment</span>
            <input type="file" name="file_attach[]" multiple/>
        </label>
        
            <label for="subject"><span>Regarding</span>
            <select name="subject">
            <option value="General Question">General Question</option>
            <option value="Advertise">Advertisement</option>
            <option value="Partnership">Partnership Oppertunity</option>
            </select>
        </label>
        <label for="message"><span>Message <span class="required">*</span></span>
            <textarea name="message" data-required="true"></textarea>
        </label>
        <label><span>&nbsp;</span>
        	<button type="submit">Submit</button>
        </label>
    </form>
</div>


<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
<script type="text/javascript">
var allowed_file_size 	= "1048576"; //1 MB allowed file size
var allowed_file_types 	= ['image/png', 'image/gif', 'image/jpeg', 'image/pjpeg', 'application/x-zip-compressed', 'application/pdf']; //Allowed file types
var border_color 		= "#C2C2C2"; //initial input border color
var maximum_files 		= 2; //Maximum number of files allowed

$("#contact_body").submit(function(e){
    e.preventDefault(); //prevent default action 
	proceed = true;
	
	//simple input validation
	$($(this).find("input[data-required=true], textarea[data-required=true]")).each(function(){
            if(!$.trim($(this).val())){ //if this field is empty 
                $(this).css('border-color','red'); //change border color to red   
                proceed = false; //set do not proceed flag
            }
            //check invalid email
            var email_reg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/; 
            if($(this).attr("type")=="email" && !email_reg.test($.trim($(this).val()))){
                $(this).css('border-color','red'); //change border color to red   
                proceed = false; //set do not proceed flag              
            }   
	}).on("input", function(){ //change border color to original
		 $(this).css('border-color', border_color);
	});
	
	//check file size and type before upload, works in modern browsers
	if(window.File && window.FileReader && window.FileList && window.Blob){
		var total_files_size = 0;
		if(this.elements['file_attach[]'].files.length > maximum_files){
            alert( "Can not select more than "+maximum_files+" file(s)");
            proceed = false;			
		}
		$(this.elements['file_attach[]'].files).each(function(i, ifile){
			if(ifile.value !== ""){ //continue only if file(s) are selected
                if(allowed_file_types.indexOf(ifile.type) === -1){ //check unsupported file
                    alert( ifile.name + " is unsupported file type!");
                    proceed = false;
                }
             total_files_size = total_files_size + ifile.size; //add file size to total size
			}
		}); 
       if(total_files_size > allowed_file_size){ 
            alert( "Make sure total file size is less than 1 MB!");
            proceed = false;
        }
	}
	
	//if everything's ok, continue with Ajax form submit
	if(proceed){ 
		var post_url = $(this).attr("action"); //get form action url
		var request_method = $(this).attr("method"); //get form GET/POST method
		var form_data = new FormData(this); //Creates new FormData object
		
		$.ajax({ //ajax form submit
			url : "ajax.php",
			type: request_method,
		   data:$("form").serialize(),
			dataType : "json",
			contentType: false,
			cache: false,
			processData:false
		}).done(function(res){ //fetch server "json" messages when done
			if(res.type == "error"){
				$("#contact_results").html('<div class="error">'+ res.text +"</div>");
			}
			if(res.type == "done"){
				$("#contact_results").html('<div class="success">'+ res.text +"</div>");
			}
		});
	}
});
</script>

</body>
</html>
