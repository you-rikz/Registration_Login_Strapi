<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"/>
    <title>Successful Page</title>
</head>
<body>

<div class="card">
       <div class="content">
           <div class="front">
               <h3 class="title">Hey</h3>
               <p class="subtitle">Hover me</p>
           </div>
            
           <div class="back">
               <p class="description">
                <h1><i class="fa-solid fa-circle-check fa-2x"></i></h1>
                   Congratulations, your account has been succesfully created.
               </p>
               <a class="fancy" href="login-form.php">
                <span class="top-key"></span>
                <span class="text">Continue</span>
                <span class="bottom-key-1"></span>
                <span class="bottom-key-2"></span>
              </a>
            
           </div>
        
       </div>
   </div>
    
</body>
<style>
    body{
        
    background: url(https://www.auf.edu.ph/images/BYA.jpg);
    background-size: cover;
    }
    .card {
  width: 15rem;
  padding-top: 15rem;
  padding-left: 50rem;
  cursor: pointer;

}

.content {
    height: 10rem;
    border: none;
    border-radius: 10px;
  text-align: center;
  position: relative;
  transition: all 2.25s;
  background-color: rgb(178, 192, 57);
  padding: 5em;
  transform-style: preserve-3d;
}

.card:hover .content {
  transform: rotateY(0.5turn);
}

.front,
.back {
    border: none;
    border-radius: 10px;
  position: absolute;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  padding: 2em;
  transform-style: preserve-3d;
  backface-visibility: hidden;
}

.title {
  transform: translateZ(5rem);
  font-size: 2rem;
}

.subtitle {
  transform: translateZ(2rem);
}

.back {
  transform: rotateY(0.5turn);
  background-color: #009bff;
}

.description {
  transform: translateZ(3rem);
}

.fancy {
 background-color: transparent;
 border: 2px solid #000;
 border-radius: 0;
 box-sizing: border-box;
 color: #fff;
 cursor: pointer;
 display: inline-block;
 float: right;
 font-weight: 700;
 letter-spacing: 0.05em;
 margin: 0;
 outline: none;
 overflow: visible;
 padding: 1.25em 2em;
 position: relative;
 text-align: center;
 text-decoration: none;
 text-transform: none;
 transition: all 0.3s ease-in-out;
 user-select: none;
 font-size: 13px;
}

.fancy::before {
 content: " ";
 width: 1.5625rem;
 height: 2px;
 background: black;
 top: 50%;
 left: 1.5em;
 position: absolute;
 transform: translateY(-50%);
 transform-origin: center;
 transition: background 0.3s linear, width 0.3s linear;
}

.fancy .text {
 font-size: 1.125em;
 line-height: 1.33333em;
 padding-left: 2em;
 display: block;
 text-align: center;
 transition: all 0.3s ease-in-out;
 text-transform: uppercase;
 text-decoration: none;
 color: black;
}

.fancy .top-key {
 height: 2px;
 width: 1.5625rem;
 top: -2px;
 left: 0.625rem;
 position: absolute;
 background: #e8e8e8;
 transition: width 0.5s ease-out, left 0.3s ease-out;
}

.fancy .bottom-key-1 {
 height: 2px;
 width: 1.5625rem;
 right: 1.875rem;
 bottom: -2px;
 position: absolute;
 background: #e8e8e8;
 transition: width 0.5s ease-out, right 0.3s ease-out;
}

.fancy .bottom-key-2 {
 height: 2px;
 width: 0.625rem;
 right: 0.625rem;
 bottom: -2px;
 position: absolute;
 background: #e8e8e8;
 transition: width 0.5s ease-out, right 0.3s ease-out;
}

.fancy:hover {
 color: white;
 background: black;
}

.fancy:hover::before {
 width: 0.9375rem;
 background: white;
}

.fancy:hover .text {
 color: white;
 padding-left: 1.5em;
}

.fancy:hover .top-key {
 left: -2px;
 width: 0px;
}

.fancy:hover .bottom-key-1,
 .fancy:hover .bottom-key-2 {
 right: 0;
 width: 0;
}
    </style>
</html>