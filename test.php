<html>



<head>

    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/all.min.css" ">

<link rel=" stylesheet" href=" css/fontawesome.min.css" ">

</head>
<style>

    .form{
border: 3px solid;
width: 55%;
    }

    .form-control input{
       border: 3px solid #f0f0f0;
       border-radius: 4px;
       display: block;
       font-family: inherit;
       font-size: 14px;

       width: 50%;
       padding: 10px;
       margin: 5px;
      
       
    }

    .form-control label{
        display: inline-block;
        margin-bottom: 5px;
    }

    .form-control i{
        position:absolute;
        visibility: visible;
        top: 10px;
      
       

    }
.form-control small{
visibility: hidden;
position: absolute;
    
}

.form-control.success input {
    border-color:#2ee712;

}

.form-control.error input {
    border-color: #e74c3c;

}


.form-control.error i.fa-exclamation {
    border-color: #e74c3c;
    visibility: visible;

}

.form-control.success i.fa-circle-check {
    border-color:#2ee712;
    visibility: visible;

}
    
    
    </style>



<center>

<div class=" container">

    <div class="header">
        <h1> Create Test Form </h1>
    </div>



    <form class=" form" id="form">

        <div class=" form-control error">
            <label> First Name </label>
            <input type="text" placeholder="first name" id="username">
            <i class="fa-solid fa-circle-check"></i>
            <i class="fa-solid fa-exclamation"></i>
            <small> Error Message </small><br>
        </div>

        <div class=" form-control success">
            <label> Last Name </label>
            <input type="text" placeholder="last name">
            <i class="fa-solid fa-circle-check"></i>
            <i class="fa-solid fa-exclamation"></i>
            <small> Error Message </small><br>
        </div>

        <div class=" form-control">
            <label> Student ID </label>
            <input type="text" placeholder="student id">
            <i class="fa-solid fa-circle-check"></i>
            <i class="fa-solid fa-exclamation"></i>
            <small> Error Message </small><br>
        </div>

        <div class=" form-control">
            <label> Course</label>
            <input type="text" placeholder="course">
            <i class="fa-solid fa-circle-check"></i>
            <i class="fa-solid fa-exclamation"></i>
            <small> Error Message </small><br>
        </div>

        <div class=" form-control">
            <label> Email </label>
            <input type="text" placeholder="email" id="email">
            <i class="fa-solid fa-circle-check"></i>
            <i class="fa-solid fa-exclamation"></i>
            <small> Error Message </small><br>
        </div>




        <button> Submit</button>


        <p>Are you a Registered User? <a href=""> Log in </a></p>

        </center>

    </form>
    </div>

</html>