<style>
    
     .items{
           display:flex;
           flex-direction:row;
           background-color:white;
           box-shadow:5px 5px 5px 5px black;
           height:50px;align-items: center;
           margin-bottom:15px;
           width: 100%;
           
       }
       .items a{text-decoration:none; size:15px;}

       .item1{flex:1;}

       .item2{
           display:flex;
           flex-direction:row;
           height:50px;
           align-items: center;
           
       }
      .item2>div>a{
          color:white;
      }
body{margin:0px;padding:0px;}
       .item2 {
          /* margin-right:0px;*/
           height:40px;
       }
       .item2-2>a{
           color:black;
       }
       
       .item2 button{
           margin-right:5px;
           height:40px;
           background-color:red;
           color:white;
       }
       
       .item1 span{margin-left:30px;}
</style>
<div class="items" style="width:100%;background-color:teal;position:fixed;">
           <div class="item1"><img src="" alt="logo" srcset=""><span><a href="accueil.php">HOME</a></span><span><a href="rental.php" name="rental">RENTAL</a></span></div>
           <div class="item2">
                <div class="item2-2"><button><a href="log_out.php">LOGOUT</a></button></div>
            </div>
</div>

