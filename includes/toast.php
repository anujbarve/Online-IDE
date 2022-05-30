<?php 

function toast_register_page($message){
    
if(isset($message)){
    if($message == "logged_out"){
        echo 'tata.info("Info Message","User Logged Out",{
            position: "br",
            duration: 5000
        })';
    }elseif($message == "invaliduid"){
        echo 'tata.error("Invalid Input","Invalid Username",{
            position: "br",
            duration: 5000
        })';
    }elseif($message == "invalidemail"){
        echo 'tata.error("Invalid Input","Invalid email",{
            position: "br",
            duration: 5000
        })';
    }elseif($message == "passwordsdontmatch"){
        echo 'tata.error("Invalid Input","Passwords does not match",{
            position: "br",
            duration: 5000
        })';
    }elseif($message == "usernametaken"){
        echo 'tata.error("Invalid Input","Username already taken please try another username",{
            position: "br",
            duration: 5000
        })';
    }elseif($message == "emptyInput"){
        echo 'tata.info("Invalid Input","Please fill all the fields",{
            position: "br",
            duration: 5000
        })';
    }
}

}

function toast_login_page($message){
    
    if(isset($message)){
        if($message == "emptyinput"){
            echo 'tata.info("Empty Input","Please Enter all the fields ",{
                position: "br",
                duration: 5000
            })';
        }elseif($message == "wronglogin"){
            echo 'tata.error("Invalid Input","Wrong Login Credentials",{
                position: "br",
                duration: 5000
            })';
        }
    }
}

function toast_compiler_page($message){
    
    if(isset($message)){
        if($message == "code_saved_successfully"){
            echo 'tata.success("Code Saved","Code Saved Successfully",{
                position: "br",
                duration: 5000
            })';
        }elseif($message == "file_updated_successfully"){
            echo 'tata.success("File Updates","File Updated Successfully",{
                position: "br",
                duration: 5000
            })';
        }elseif($message == "success"){
            echo 'tata.success("Code Success","Code Compiled Successfully",{
                position: "br",
                duration: 5000
            })';
        }elseif($message == "new_post_uploaded_successfully"){
            echo 'tata.success("Post Success","Post Uploaded Successfully",{
                position: "br",
                duration: 5000
            })';
        }elseif($message == "post_updated_successfully"){
            echo 'tata.success("Post Success","Post Updated Successfully",{
                position: "br",
                duration: 5000
            })';
        }elseif($message == "post_delete"){
            echo 'tata.info("Post Info","Post Deleted Successfully",{
                position: "br",
                duration: 5000
            })';
        }
        elseif($message == "error"){
            echo 'tata.error("Code Error","Error while compiling",{
                position: "br",
                duration: 5000
            })';
        }

    }
    
}
?>