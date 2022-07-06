<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact_Page</title>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>

    <!--alert messages start
    <div class="alert-success">
        <span>Message Sent! Thank you for contacting us.</span>

    </div>

    <div class="alert-success">
        <span>Something went wrong! please try again.</span>
     </div>
     alert messages end-->


    <div class="contact-section">
        <div class="contact-info">
            <div><i class="fas fa-map-marker-alt"></i> Address, City, Country</div>
            <div><i class="fas fa-envelope"></i> sanzida15-2305@diu.edu.bd ,</div>
            <div><i class="fas fa-envelope"></i> hridoy15-2249@diu.edu.bd .</div>
            <div><i class="fas fa-phone"></i> +880195-9400533 ,</div>
            <div><i class="fas fa-phone"></i> +880177-2506062 </div>
            <div><i class="fas fa-clock"></i> 24 Hours Open</div>

        </div>
        
        <div class="contact-form">
           
<form action="contact" method="POST">
  @csrf
  <input type="text" name="name" class="text-box" placeholder="name">
  <input type="text" name="email" class="text-box" placeholder="email">
  <input type="text" name="message" class="text-box" placeholder="message"><br><br>
  <button type="submit">Submit</button>
</form>
        </div>

    </div>
    <style type="text/css">
        @import url('https://www.google.com/url?sa=i&url=https%3A%2F%2Fsaradhikuwait.com%2Fcontact-information%2F&psig=AOvVaw2Sy-wt0ph06OMbfPcSRJMR&ust=1641804480030000&source=images&cd=vfe&ved=0CAsQjRxqFwoTCNDe58GkpPUCFQAAAAAdAAAAABAO');

*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "poppins", sans-serif;
}

body{
    min-height: 100vh;
    background-image: url(https://media.istockphoto.com/photos/-picture-id1311934969?b=1&k=20&m=1311934969&s=170667a&w=0&h=UQ3F8CE5zam5mT5swIliZ9nO7dhX4ZzsALMufFdv6Ys=);
    background-repeat: no-repeat; 
    background-size: cover;
    display: flex;
    justify-content: center;
    align-items: center;
    
}
.contact-info{
    color: #fff;
    max-width: 500px;
    line-height: 65px;
    padding-left: 50px;
    font-size: 18px;
    margin-right: 800px;
    margin-top: 35px;
}
.contact-info i{
    font-size: 25px;
}

.contact-form{
    max-width: 700px;
    margin-right: 50px;
}

.contact-info, .contact-info{
    flex: 1;
}

.contact-section h2{
    color: #fff;
    text-align: center;
    font-size: 45px;
    text-transform: uppercase;
    margin-top: 50px;
}
.contact-form .text-box{
    background: #000;
    color: #fff;
    border: none;
    width: calc(50% - 10px);
    height: 50px;
    padding: 12px;
    font-size: 15px;
    border-radius: 5px;
    box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
    margin-bottom: 20px;
    opacity: 0.9;

}
   .contact-form textarea{
       background: #000;
       color: #fff;
       border: none;
       width: 100%;
       padding: 12px;
       font-size: 15px;
       min-height: 200px;
       max-height: 400px;
       resize: vertical;
       border-radius: 5px;
       box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
       margin-bottom: 20px;
       opacity: 0.9;
   }
   .contact-form .send-btn{
       float: right;
       background: #2E94E3;
       color: #fff;
       border: none;
       width: 120px;
       height: 40px;
       font-size: 15px;
       font-weight: 600;
       text-transform: uppercase;
       letter-spacing: 2px;
       border-radius: 5px;
       cursor: pointer;
       transition-property: background;
   }
   .contact-form .send-btn:hover{
       background: #0582E3;
   }
   
   @media screen and (max-width: 950px){
    .contact-section{
        flex-direction: column;
    }

    .contact-info, .contact-form{
        margin: 30px 50px;
    }

    .contact-section h2{
          font-size: 30px;
          
    }
    .contact-form .text-box{
        width: 100%;
    }

}
   
.alert-success span{
    z-index: 1;
    background: #D4EDDA;
    font-size: 18px;
    padding: 20px 40PX;
    min-width: 420px;
    position: fixed;
    right: 0;
    top: 10px;
    border-left: 8px solid #3AD66E;
    border-radius: 4px;
}
.alert-success{
    z-index: 1;
    background: #fff3CD;
    font-size: 18px;
    padding: 20px 40PX;
    min-width: 420px;
    position: fixed;
    right: 0;
    top: 10px;
    border-left: 8px solid #FFA502;
    border-radius: 4px;
}
button{
  height: 40px;
  width: 80px;
  background: black;
  color: red;
  font-size: 15px;
  margin-left: 650px;
  border-radius: 25px;
}
    </style>
</body>

</html>