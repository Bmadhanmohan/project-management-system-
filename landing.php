<?php
require 'init.php';
?>
<?php include 'head.php'; ?>
<style>
body{
    width:inherit;height:inherit;background:black;
}
img{
    width:120px;
    height:120px;
    position:fixed;
    top:52%;left:48%;
    z-index:-1;
}
.loader {
        transform: rotateZ(45deg);
        perspective: 1000px;
        border-radius: 20%;
        width: 198px;
        height: 198px;
        color: #fff;
        position:fixed;
        top:45%;left:45%;
      }
        .loader:before,
        .loader:after {
          content: '';
          display: block;
          position: absolute;
          top: 0;
          left: 0;
          width: inherit;
          height: inherit;
          border-radius: 50%;
          transform: rotateX(70deg);
          animation: 1s spin linear infinite;
        }
        .loader:after {
          color: #FF3D00;
          transform: rotateY(70deg);
          animation-delay: .4s;
        }
.txt{
   color:white;
   position:fixed;
  letter-spacing:50px;
    top:30%;left:35%;
    text-shadow:1px 1px 1px white,2px 2px 1px red,1px 1px 1px white,1px 1px 3px red,1px 1px 3px red;
}
      @keyframes rotate {
        0% {
          transform: translate(-50%, -50%) rotateZ(0deg);
        }
        100% {
          transform: translate(-50%, -50%) rotateZ(360deg);
        }
      }

      @keyframes rotateccw {
        0% {
          transform: translate(-50%, -50%) rotate(0deg);
        }
        100% {
          transform: translate(-50%, -50%) rotate(-360deg);
        }
      }

      @keyframes spin {
        0%,
        100% {
          box-shadow: .5em 0px 0 0px currentcolor;
        }
        12% {
          box-shadow: .5em .9em 0 0 currentcolor;
        }
        25% {
          box-shadow: 0 .5em 0 0px currentcolor;
        }
        37% {
          box-shadow: -.5em .9em 0 0 currentcolor;
        }
        50% {
          box-shadow: -.5em 0 0 0 currentcolor;
        }
        62% {
          box-shadow: -.5em -.9em 0 0 currentcolor;
        }
        75% {
          box-shadow: 0px -.9em 0 0 currentcolor;
        }
        87% {
          box-shadow: .5em -.5em 0 0 currentcolor;
        }
      }
   
</style>
<body>
   <div class="loader">

       </div>
       <img src="image/logo_bg.png"  >
              <h2 class="txt">Loading...</h2>
</body>