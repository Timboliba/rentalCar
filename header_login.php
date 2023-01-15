<style>
     .items{
           display:flex;
           flex-direction:row;
           background-color:white;
           box-shadow:5px 5px 5px 5px black;
           height:50px;align-items: center;
           
       }
       .items a{text-decoration:none; size:15px;}

       .item1{flex:1;}

       .item2{
           display:flex;
           flex-direction:row;
           height:50px;
           align-items: center;
           
       }
      .item2 div a{
          color:white;
      }

       .item2 button{
           margin-right:10px;
           height:40px;
       }
       
       .item1 span{margin-left:30px;}
</style>
<div class="items">
           <div class="item1"><img src="" alt="logo" srcset=""><span><a href="accueil.php">HOME</a></span><span><a href="rental.php">RENTAL</a></span></div>
           <div class="item2">
                <div class="item2-1"><button style="background-color:rgb(44, 10, 240);"><a href="register.php">REGISTER</a></button></div>
                <div class="item2-2"><button  style="background-color:rgb(113, 5, 146);"><a href="sign_in.php">SIGNIN</a></button></div>
           </div>
</div>