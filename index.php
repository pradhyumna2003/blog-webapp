<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Blog | Home</title>
    <style>
        #logo-circle {
            display: inline-block;
            width: 50px;
            height: 50px;
            margin: 6px;
            background-color: #555;
        }
        .nav-item:hover{
            background-color: grey;
        }
        .header {
            position: fixed;
            top: 0;
            z-index: 1;
            width: 100%;
            background-color: #f1f1f1;
            }

            .header h2 {
            text-align: center;
            }

            .progress-container {
            width: 100%;
            height: 8px;
            background: #ccc;
            }
            .content {
            padding: 30px 0;
            margin: 80px auto 0 auto;
            width: 100%;
            }
            .progress-bar {
            height: 8px;
            background: #5a5a5a;
            width: 0%;
            }
            .carousel-bg{
                background-image: url('images/carsoule-bg.png');
                background-attachment: scroll;
                background-size: cover;
            }
            /* Default styles for all devices */
            .menu-sm-bar{
            display: none; /* Hide the element by default */
            }
            /* Media query to show the element on screens less than 920px wide */
            @media only screen and (max-width: 920px) {
                .menu-sm-bar {
                    display: block; /* Show the element on smaller screens */
                }
                #logo-circle {
                    display: inline-block;
                    width: 50px;
                    height: 50px;
                    margin: 6px;
                    background-color: #555;
                }
                #menu-icon{
                width:38px;
                height: 38px;
                }
            }

            @media (max-width: 920px) {
                .menu {
                    display: none;
                }
            }
            #menu-list{
                display: block;
            }
            #search{
                height: 38px;
                border:none;
                padding-right: 10px;
            }
            #search:focus{
                height: 38px;
                border:none;
                padding-right: 10px;
            }
    </style>
    <script>
        function content() {
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                console.log("success");
                document.getElementById("content-php").innerHTML=this.responseText;
            }else{
                console.log("failure");
                document.getElementById("content-php").appendChild="<h1>Something Went Wrong!</h1>"
            }
            };
            xmlhttp.open("GET", "content.php", true);
            xmlhttp.send();
        }
        function searchContent() {
            var sval=document.getElementById('search').value;
            if(sval.length>0){
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    console.log("success");
                    document.getElementById("search-php").innerHTML=this.responseText;
                }else{
                    console.log("failure");
                    document.getElementById("search-php").innerHTML="";
                }
                };
            }
            else{

            }
            
            xmlhttp.open("GET", "search.php?topic="+sval, true);
            xmlhttp.send();
        }
        setTimeout(content,0);
    </script>
</head>

<body>
    <!--  -->
    <div class="header">
        <div class="container-fluid">
            <div class="row justify-content-between bg-black">
                <div class="col align-self-center">
                    <div class="d-flex justify-content-start">
                        <div class="align-self-center">
                            <span id="logo-circle" class="rounded-5"></span>
                        </div>
                        <div class="align-self-center">
                            <strong style="color: white;">Blog Website</strong>
                        </div>
                    </div>
                </div>
                <div class="col align-self-center menu">
                    <ul class="nav justify-content-between" style="min-width: fit-content;">
                        <li class="nav-item" style="color: white;">
                          <a class="nav-link active" href="#" style="color: white;">Home</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#" style="color: white;">About Us</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#" style="color: white;">Contact Us</a>
                        </li>
                    </ul>
                </div>
                <div class="col align-self-center align-items-end menu" >
                    <div class="d-flex justify-content-end">
                        <a class="nav-link" href="#" style="color: white;" >Login / Sign up</a>
                    </div>
                </div>
                <div class="col align-self-center align-items-end menu-sm-bar" >
                    <div class="d-flex justify-content-end">
                        <img src="images/icon-menu.png" id="menu-icon" alt="image description" data-bs-toggle="offcanvas" data-bs-target="#menu" >
                    </div>
                </div>
            </div>
        </div>
        <div class="progress-container">
          <div class="progress-bar" id="myBar"></div>
        </div>  
    </div>
    <div class="offcanvas offcanvas-end" id="menu">
        <div class="offcanvas-header">
          <h1 class="offcanvas-title">Menu</h1>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
        </div>
        <div class="offcanvas-body">
          <p><a href="#" class="nav-link">Home</a></p>
          <p><a href="#" class="nav-link">About Us</a></p>
          <p><a href="#" class="nav-link">Contact us</a></p>
          <button class="btn btn-secondary" type="button">Login / Sign up</button>
        </div>
    </div>
    <div class="content " >
        
        <div class="container-fluid">
            <div class="container" style="padding-left: 10px;">
            
                <div class="d-flex align-items-stretch ">
                    <div class="p2 flex-grow-1 align-self-center" id="post-tag"><strong>Recent Post</strong></div>
                    <div class="p2 align-self-center"><input type="text" name="search" id="search" placeholder="Search by author or topic" ></div>
                    <div class="p2 align-self-center"><button class="btn btn-outline-secondary" type="button" name="search-btn" id="search-btn" onclick="searchContent()" style="height: 40px;">search</button></div>
                </div>
            
                
            </div>
            <div class="row d-flex justify-content-around mt-2" id="search-php">

            </div>
            <div class="row d-flex justify-content-around mt-2" id="content-php">
                <div class="col-sm-3 m-2 shadow align-self-center" style="width: 400px;">
                    <div class="p-2 m-2 bg-white">
                        <p><strong>Topic:</strong>IoT
                            <span class="align-self-center" style="float: right;">30K
                                <a href="#">   
                                    <img src="images/icons8-like-50.png" alt="" style="width: 20px;height:20px;">
                               </a>
                            </span> 
                                
                        </p>
                        <p>
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repellat doloribus repudiandae corrupti consectetur pariatur, voluptatem quidem exercitationem a nesciunt eaque! Error iusto nostrum perspiciatis harum. Ipsam explicabo saepe fuga dolor....<a href="#">readmore..</a>
                        </p>
                        <p><strong>Author:</strong>Ram
                            <span class="align-self-center" style="float: right;">
                                12.12.2023
                            </span> </p>
                        </p>
                    </div>
                </div>
                
                <div class="col-sm-3 m-2 shadow align-self-center" style="width: 400px;">
                    <div class="p-2 m-2 bg-white">
                        <p><strong>Topic:</strong>Computer networks
                            <span class="align-self-center" style="float: right;">30K
                                <a href="#">   
                                    <img src="images/icons8-like-50.png" alt="like" style="width: 20px;height:20px;">
                               </a>
                                </span> 
                        </p>
                        <p>
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repellat doloribus repudiandae corrupti consectetur pariatur, voluptatem quidem exercitationem a nesciunt eaque! Error iusto nostrum perspiciatis harum. Ipsam explicabo saepe fuga dolor....<a href="#">readmore..</a>
                        </p>
                        <p><strong>Author:</strong>Ram
                            <span class="align-self-center" style="float: right;">
                                12.12.2023
                            </span> </p>
                        </p>
                    </div>    
                </div>
                
                <div class="col-sm-3 m-2 shadow align-self-center" style="width: 400px;">
                    <div class="p-2 m-2 bg-white">
                        <p><strong>Topic:</strong>OS
                            <span class="align-self-center" style="float: right;">30K
                                <a href="#">   
                                    <img src="images/icons8-like-50.png" alt="" style="width: 20px;height:20px;">
                               </a>
                                </span> 
                        </p>
                        <p>
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repellat doloribus repudiandae corrupti consectetur pariatur, voluptatem quidem exercitationem a nesciunt eaque! Error iusto nostrum perspiciatis harum. Ipsam explicabo saepe fuga dolor....<a href="#">readmore..</a>
                        </p>
                        <p><strong>Author:</strong>Ram
                            <span class="align-self-center" style="float: right;">
                                12.12.2023
                            </span> </p>
                        </p>
                    </div>
                </div>
                <div class="col-sm-3 m-2 shadow align-self-center" style="width: 400px;">
                    <div class="p-2 m-2 bg-white">
                        <p><strong>Topic:</strong>IoT
                            <span class="align-self-center" style="float: right;">30K
                                <a href="#">   
                                    <img src="images/icons8-like-50.png" alt="" style="width: 20px;height:20px;">
                               </a>
                            </span> 
                                
                        </p>
                        <p>
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repellat doloribus repudiandae corrupti consectetur pariatur, voluptatem quidem exercitationem a nesciunt eaque! Error iusto nostrum perspiciatis harum. Ipsam explicabo saepe fuga dolor....<a href="#">readmore..</a>
                        </p>
                        <p><strong>Author:</strong>Ram
                            <span class="align-self-center" style="float: right;">
                                12.12.2023
                            </span> </p>
                        </p>
                    </div>
                </div>
                
                <div class="col-sm-3 m-2 shadow align-self-center" style="width: 400px;">
                    <div class="p-2 m-2 bg-white">
                        <p><strong>Topic:</strong>Computer networks
                            <span class="align-self-center" style="float: right;">30K
                                <a href="#">   
                                    <img src="images/icons8-like-50.png" alt="" style="width: 20px;height:20px;">
                               </a>
                                </span> 
                        </p>
                        <p>
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repellat doloribus repudiandae corrupti consectetur pariatur, voluptatem quidem exercitationem a nesciunt eaque! Error iusto nostrum perspiciatis harum. Ipsam explicabo saepe fuga dolor....<a href="#">readmore..</a>
                        </p>
                        <p><strong>Author:</strong>Ram
                            <span class="align-self-center" style="float: right;">
                                12.12.2023
                            </span> </p>
                        </p>
                    </div>    
                </div>
                
                <div class="col-sm-3 m-2 shadow align-self-center" style="width: 400px;">
                    <div class="p-2 m-2 bg-white">
                        <p><strong>Topic:</strong>OS
                            <span class="align-self-center" style="float: right;">30K
                                <a href="#">   
                                    <img src="images/icons8-like-50.png" alt="" style="width: 20px;height:20px;">
                               </a>
                                </span> 
                        </p>
                        <p>
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repellat doloribus repudiandae corrupti consectetur pariatur, voluptatem quidem exercitationem a nesciunt eaque! Error iusto nostrum perspiciatis harum. Ipsam explicabo saepe fuga dolor....<a href="#">readmore..</a>
                        </p>
                        <p><strong>Author:</strong>Ram
                            <span class="align-self-center" style="float: right;">
                                12.12.2023
                            </span> </p>
                        </p>
                    </div>
                </div>
                <div class="col-sm-3 m-2 shadow align-self-center" style="width: 400px;">
                    <div class="p-2 m-2 bg-white">
                        <p><strong>Topic:</strong>IoT
                            <span class="align-self-center" style="float: right;">30K
                                <a href="#">   
                                    <img src="images/icons8-like-50.png" alt="" style="width: 20px;height:20px;">
                               </a>
                            </span> 
                                
                        </p>
                        <p>
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repellat doloribus repudiandae corrupti consectetur pariatur, voluptatem quidem exercitationem a nesciunt eaque! Error iusto nostrum perspiciatis harum. Ipsam explicabo saepe fuga dolor....<a href="#">readmore..</a>
                        </p>
                        <p><strong>Author:</strong>Ram
                            <span class="align-self-center" style="float: right;">
                                12.12.2023
                            </span> </p>
                        </p>
                    </div>
                </div>
                
                <div class="col-sm-3 m-2 shadow align-self-center" style="width: 400px;">
                    <div class="p-2 m-2 bg-white">
                        <p><strong>Topic:</strong>Computer networks
                            <span class="align-self-center" style="float: right;">30K
                                <a href="#">   
                                    <img src="images/icons8-like-50.png" alt="" style="width: 20px;height:20px;">
                               </a>
                                </span> 
                        </p>
                        <p>
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repellat doloribus repudiandae corrupti consectetur pariatur, voluptatem quidem exercitationem a nesciunt eaque! Error iusto nostrum perspiciatis harum. Ipsam explicabo saepe fuga dolor....<a href="#">readmore..</a>
                        </p>
                        <p><strong>Author:</strong>Ram
                            <span class="align-self-center" style="float: right;">
                                12.12.2023
                            </span> </p>
                        </p>
                    </div>    
                </div>
                
                <div class="col-sm-3 m-2 shadow align-self-center" style="width: 400px;">
                    <div class="p-2 m-2 bg-white">
                        <p><strong>Topic:</strong>OS
                            <span class="align-self-center" style="float: right;">30K
                                <a href="#">   
                                    <img src="images/icons8-like-50.png" alt="" style="width: 20px;height:20px;">
                               </a>
                                </span> 
                        </p>
                        <p>
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repellat doloribus repudiandae corrupti consectetur pariatur, voluptatem quidem exercitationem a nesciunt eaque! Error iusto nostrum perspiciatis harum. Ipsam explicabo saepe fuga dolor....<a href="#">readmore..</a>
                        </p>
                        <p><strong>Author:</strong>Ram
                            <span class="align-self-center" style="float: right;">
                                12.12.2023
                            </span> </p>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="carousel slide carousel-bg" data-bs-ride="carousel" >
        <div class="carousel-inner"  style="padding: 20px;" >
            <div class="carousel-item active" style="height: 100px;">
                <div class="container-fluid">
                    <div class="row d-flex justify-content-center">
                        <div class="col align-items-end">
                            <img src="images/user-pp.png" class="rounded-circle" alt="Cinque Terre" width="100px" height="100px">
                        </div>
                        <div class="col align-item-start" style="color: white;">
                            <!-- <div class="carousel-caption" > -->
                                <p><strong><em>Pradhyumna</em> CEO</strong>!</p>
                              <!-- </div> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item" style="height: 100px;" st>
                <div class="container-fluid">
                    <div class="row d-flex justify-content-center">
                        <div class="col align-items-end">
                            <img src="images/user-pp.png" class="rounded-circle" alt="Cinque Terre" width="100px" height="100px">
                        </div>
                        <div class="col align-item-start" style="color: white;">
                            <!-- <div class="carousel-caption" > -->
                                <p><strong><em>Sreenivasan</em> CTO</strong>!</p>
                            <!-- </div> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item" style="height: 100px;">
                <div class="container-fluid">
                    <div class="row d-flex justify-content-center">
                        <div class="col align-items-end">
                            <img src="images/user-pp.png" class="rounded-circle" alt="Cinque Terre" width="100px" height="100px">
                        </div>
                        <div class="col align-item-start" style="color: white;">
                            <!-- <div class="carousel-caption" > --> 
                                <p><strong><em>Lingesh</em> Director</strong>!</p>
                            <!-- </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    <script>
        // When the user scrolls the page, execute myFunction 
        window.onscroll = function() {myFunction()};
        
        function myFunction() {
          var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
          var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
          var scrolled = (winScroll / height) * 100;
          document.getElementById("myBar").style.width = scrolled + "%";
        }
        </script>
        
</body>
</html> 