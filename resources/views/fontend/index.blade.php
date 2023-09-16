<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>iDiscuss - Coding Forums</title>
    <style>
        body{
            background-color: rgb(251, 234, 214);
        }
        .colle{
            background-color: rgb(120, 54, 54);
            color: white;
        }
        .bgdark{
            background-color: rgb(120, 54, 54);
        }
        .nav_menu{
            color: yellow;
            margin: 15px;
        }
        .nav_menu:hover{
            color: rgb(255, 255, 199);
            text-decoration: none;
        }
        pre{
            color: white;
            font-size: 22px;
            font-weight: 800;
            font-family: cursive;
            margin: 0px;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bgdark">
        <a class="navbar-brand" href="{{url('/index')}}">
            <img src="https://i.etsystatic.com/8585009/r/il/8a2b63/1136267435/il_1080xN.1136267435_cegl.jpg"
                width="40" height="40" alt="Porojapoti_logo" style="border-radius: 50%;">
        </a>
        <a class="navbar-brand" href="{{url('/index')}}"><pre>প্রজাপতি</pre></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a href="{{url('/index')}}" class="nav_menu">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav_menu dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Collections
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#" class="nav_menu">Action</a>
                        <a class="dropdown-item" href="#" class="nav_menu">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#" class="nav_menu">Something else here</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav_menu" href="#">About us</a>
                </li>
                <li class="nav-item">
                    <a class="nav_menu" href="#">Contact us</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-warning my-2 my-sm-0 mr-4" type="submit">Search</button>
                <button class="btn btn-outline-warning my-2 my-sm-0 mx-1" type="submit">Sign up</button>
                <button class="btn btn-outline-warning my-2 my-sm-0 mx-1" type="submit">Login</button>
                <button class="btn btn-outline-warning my-2 my-sm-0 mx-1" type="submit">Logout</button>
            </form>
        </div>
    </nav>

    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item">
                <img class="d-block w-100"
                    src="https://i0.wp.com/pujadukaan.com/wp-content/uploads/2023/05/Ganesh-Puja-Items-scaled.jpg?fit=2560%2C1063&ssl=1"
                    alt="First slide" style="height:600px;">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="https://www.weddingsutra.com/wp-content/nitya_punit_01.jpg"
                    alt="Second slide" style="height:600px;">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100"
                    src="https://uploads-ssl.webflow.com/60829aab76a98d17b68f30ae/61fccb09c415ffa73901bd47_222.jpg"
                    alt="Third slide" style="height:600px;">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100"
                    src="https://media.istockphoto.com/id/1347198969/photo/portrait-of-indian-men-dressed-in-kurta-pajama-with-beautiful-indian-woman-wearing.jpg?s=612x612&w=0&k=20&c=fK6MmCpouiY97DfzXTKR8hXpzEmUtcnyXyGV2LKbMeo="
                    alt="Fourth slide" style="height:600px;">
            </div>
            <div class="carousel-item active">
                <img class="d-block w-100" src="https://miro.medium.com/v2/resize:fit:750/0*lSaN5aWWRjuCHWBM.jpg"
                    alt="Fifth slide" style="height:600px;">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="colle mt-3">
        <h1 class="text-center">COLLECTIONS</h1>
    </div>
    <div class="container my-3">
        <div class="row my-3" style="min-height:400px">
            <div class="col-md-4 my-3">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top"
                        src="https://cdn.sareeka.com/image/cache/data2022/designer-traditional-saree-for-engagement-227670-1000x1375.jpg"
                        alt="Card image cap" style="height:300px">
                    <div class="card-body" style="background-color: rgb(255, 216, 172);">
                        <h5 class="card-title" style="text-align:center;"><a href="#" style="color:black;">Saree</a>
                        </h5>
                        <a href="#" class="btn btn-warning">View</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 my-3">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top"
                        src="https://i.pinimg.com/736x/64/0f/62/640f6270ec72bb5c516ccd9826954a86.jpg"
                        alt="Card image cap" style="height:300px">
                    <div class="card-body" style="background-color: rgb(255, 216, 172);">
                        <h5 class="card-title" style="text-align:center;"><a href="#" style="color:black;">Churidar</a>
                        </h5>
                        <a href="#" class="btn btn-warning">View</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 my-3">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="https://5.imimg.com/data5/DB/XJ/MY-2363941/77.jpg"
                        alt="Card image cap" style="height:300px">
                    <div class="card-body" style="background-color: rgb(255, 216, 172);">
                        <h5 class="card-title" style="text-align:center;"><a href="#" style="color:black;">Lahinga</a>
                        </h5>
                        <a href="#" class="btn btn-warning">View</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 my-3">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top"
                        src="https://i.pinimg.com/550x/32/27/3b/32273b4ea59fbc30222ea41409d59ec9.jpg"
                        alt="Card image cap" style="height:300px">
                    <div class="card-body" style="background-color: rgb(255, 216, 172);">
                        <h5 class="card-title" style="text-align:center;"><a href="#" style="color:black;">Panjabi</a>
                        </h5>
                        <a href="#" class="btn btn-warning">View</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 my-3">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top"
                        src="https://d2wvwvig0d1mx7.cloudfront.net/data/org/194/media/img/cache/768x0/2586815_768x0.jpg"
                        alt="Card image cap" style="height:300px">
                    <div class="card-body" style="background-color: rgb(255, 216, 172);">
                        <h5 class="card-title" style="text-align:center;"><a href="#" style="color:black;">Neharu
                                Jacket</a></h5>
                        <a href="#" class="btn btn-warning">View</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 my-3">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top"
                        src="https://www.shoppersbd.com/media/catalog/product/cache/1/small_image/200x200/9df78eab33525d08d6e5fb8d27136e95/s/d/sd51d.jpg"
                        alt="Card image cap" style="height:300px">
                    <div class="card-body" style="background-color: rgb(255, 216, 172);">
                        <h5 class="card-title" style="text-align:center;"><a href="#" style="color:black;">Dhuti</a>
                        </h5>
                        <a href="#" class="btn btn-warning">View</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 my-3">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top"
                        src="https://5.imimg.com/data5/ANDROID/Default/2022/5/SX/MW/SZ/25396958/product-jpeg-500x500.jpg"
                        alt="Card image cap" style="height:300px">
                    <div class="card-body" style="background-color: rgb(255, 216, 172);">
                        <h5 class="card-title" style="text-align:center;"><a href="#" style="color:black;">Kurta</a>
                        </h5>
                        <a href="#" class="btn btn-warning">View</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 my-3">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="https://m.media-amazon.com/images/I/31M5MQ91ezL._AC_UY350_.jpg"
                        alt="Card image cap" alt="Card image cap" style="height:300px">
                    <div class="card-body" style="background-color: rgb(255, 216, 172);">
                        <h5 class="card-title" style="text-align:center;"><a href="#" style="color:black;">Pajama</a>
                        </h5>
                        <a href="#" class="btn btn-warning">View</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 my-3">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top"
                        src="https://cottonworld.net/cdn/shop/files/M-SHIRTS-50019-20662-PINK_1.jpg?v=1689226750&width=1280"
                        style="height:300px">
                    <div class="card-body" style="background-color: rgb(255, 216, 172);">
                        <h5 class="card-title" style="text-align:center;"><a href="#"
                                style="color:black;">Shirt-Pant</a></h5>
                        <a href="#" class="btn btn-warning">View</a>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="container-fluid bg-dark text-light">
        <p class="text-center mb-0">Copyright iDiscuss Coding Forums 2023 | All rights reserved</p>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
</body>

</html>