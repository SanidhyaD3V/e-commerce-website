<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="<?php bloginfo('template_url') ?>/style.css" rel="stylesheet">
    <link href="<?php bloginfo('template_url') ?>/icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,1,1" />
    <!-- <link rel="stylesheet" href="/style.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
    <script>
        const filterInput = document.getElementById('filterInput');
const items = document.getElementById('items').getElementsByTagName('li');

filterInput.addEventListener('keyup', filterItems);

function filterItems() {
    const filterText = filterInput.value.toLowerCase();
    
    for (let i = 0; i < items.length; i++) {
        const item = items[i];
        const itemText = item.textContent.toLowerCase();
        
        if (itemText.indexOf(filterText) !== -1) {
            item.style.display = 'block';
        } else {
            item.style.display = 'none';
        }
    }
}

    </script>
    


</head>
<body>
    
<div class="container">
<nav style="" class="navbar navbar-expand-lg navbar-light  ">
  <div class=" container-fluid navcontainer">
    <a style="color:#A78364;" class="navbar-brand" href="#">Fastyle</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class=" navbar-nav  me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a style="color:#A78364;" class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">New Arrival</a>
        </li>
        <li class="nav-item ">
        <a class="nav-link" href="#">Features </a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Collection</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Popular</a>
        </li>
      </ul>
      <div style="width:300px;" class="d-flex justify-content-between">
        <span style="color:#A78364;" class="material-symbols-outlined">
        search
        </span>
        <span style="color:#A78364;" class="material-symbols-outlined">
        shopping_bag
        </span>
        <span style="color:#A78364;" class="material-symbols-outlined">
        mail
        </span>
</div>
    </div>
  </div>
</nav><br><br><br>
</div>

       
        <div class="container">
        <div  class="row no-gutters">
        
        <center><h2> Product List</h2></center><br><br><br>
        <div style="" class="col-lg-2">
            <div style="border:2px solid #A78364; height:700px;padding:10%;">
            <div>
                <span class="filter-by-price"  style="">Filter By Price</span> <span class="material-symbols-outlined spandrop filter-by-price-icon">
        keyboard_arrow_down
        </span>
                </div><br>

                <div class="all-filter">
                <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                <label class="all-filter"  for="vehicle1"> All Price</label><br><br>
                <input type="checkbox" id="vehicle2" name="vehicle2" value="100">
                <label class="all-filter" for="vehicle2"> $ 100 - $ 250</label><br><br>
                <input type="checkbox" id="vehicle3" name="vehicle3" value="250">
                <label class="all-filter" for="vehicle3"> $ 250 - $ 500</label><br><br>
                <input type="checkbox" id="vehicle3" name="vehicle3" value="500">
                <label class="all-filter" for="vehicle3"> $ 500 - $ 1000</label><br><br>
                <input type="checkbox" id="vehicle3" name="vehicle3" value="1500">
                <label class="all-filter" for="vehicle3"> $ 1500 - $ 3000</label><br><br>
                <hr>

                <div style=" height:300px;">
                <!-- <span> -->
                <!-- <h6 style="color:#A78364;" ></h6> -->
                <div>
                <span class="filter-by-price"  style="">Filter By Rating</span> <span class="material-symbols-outlined spandrop filter-by-price-icon">
        keyboard_arrow_down
        </span>
                </div><br>
                <!-- </span> -->
                
                

                <div class="">
                
                <div style="display:flex; " >
                <input type="checkbox" id="vehicle1" name="vehicle1" value="1">
                <span style="color:yellow;font-size:19px;margin-left:10px;position:relative;top:-2px; " class="material-symbols-outlined">
                star
                </span>
                
                </div>
                
                
                
                </div><br>

                <div class="">
                
                <div style="display:flex; " >
                <input type="checkbox" id="vehicle1" name="vehicle1" value="1">
                <span style="color:yellow;font-size:19px;margin-left:10px;position:relative;top:-2px; " class="material-symbols-outlined">
                star
                </span>
                <span style="color:yellow;font-size:19px;margin-left:10px;position:relative;top:-2px; " class="material-symbols-outlined">
                star
                </span>
                
                </div>
                
                
                
                </div><br>
                <div class="">
                
                <div style="display:flex; " >
                <input type="checkbox" id="vehicle1" name="vehicle1" value="1">
                <span style="color:yellow;font-size:19px;margin-left:10px;position:relative;top:-2px; " class="material-symbols-outlined">
                star
                </span>
                <span style="color:yellow;font-size:19px;margin-left:10px;position:relative;top:-2px; " class="material-symbols-outlined">
                star
                </span>
                <span style="color:yellow;font-size:19px;margin-left:10px;position:relative;top:-2px; " class="material-symbols-outlined">
                star
                </span>
                
                </div>
                
                
                
                </div><br>

                <div class="">
                
                <div style="display:flex; " >
                <input type="checkbox" id="vehicle1" name="vehicle1" value="1">
                <span style="color:yellow;font-size:19px;margin-left:10px;position:relative;top:-2px; " class="material-symbols-outlined">
                star
                </span>
                <span style="color:yellow;font-size:19px;margin-left:10px;position:relative;top:-2px; " class="material-symbols-outlined">
                star
                </span>
                <span style="color:yellow;font-size:19px;margin-left:10px;position:relative;top:-2px; " class="material-symbols-outlined">
                star
                </span>
                <span style="color:yellow;font-size:19px;margin-left:10px;position:relative;top:-2px; " class="material-symbols-outlined">
                star
                </span>
                </div>
                
                
                
                </div><br>

                <div class="">
                
                <div style="display:flex; " >
                <input type="checkbox" id="vehicle1" name="vehicle1" value="1">
                <span style="color:yellow;font-size:19px;margin-left:10px;position:relative;top:-2px; " class="material-symbols-outlined">
                star
                </span>
                <span style="color:yellow;font-size:19px;margin-left:10px;position:relative;top:-2px; " class="material-symbols-outlined">
                star
                </span>
                <span style="color:yellow;font-size:19px;margin-left:10px;position:relative;top:-2px; " class="material-symbols-outlined">
                star
                </span>
                <span style="color:yellow;font-size:19px;margin-left:10px;position:relative;top:-2px; " class="material-symbols-outlined">
                star
                </span>
                <span style="color:yellow;font-size:19px;margin-left:10px;position:relative;top:-2px; " class="material-symbols-outlined">
                star
                </span>
                </div>
                <hr>
                
                
                
                </div><br>
                <div>
                <span class="filter-by-price"  style="">Filter By Brand</span> <span class="material-symbols-outlined spandrop filter-by-price-icon">
        keyboard_arrow_down
        </span>
                </div><br>
                <div>
                <span class="filter-by-price"  style="">Filter By Size</span> <span class="material-symbols-outlined spandrop filter-by-price-icon">
        keyboard_arrow_down
        </span>
                </div><br>
                
                
            </div>
                
                </div>
                
            </div>
            

            
            
        </div>

        <div style=""  class="col-lg-10">
        <div class="viewline" style="display:flex;justify-content:space-between; ">
        <h6 style="color:#ccc;font-size: 12px;" class="totalprod">Viewing  <span  style="color:#000;">20</span>  of <span style="color:#000;">160</span> products</h6>
        <h6 style="color:#ccc;font-size: 12px;" class="totalprod-2">Sort by  <span  style="color:#000;">Newest Items</span> <span style="font-size:14px;" class="material-symbols-outlined spandrop">
        keyboard_arrow_down
        </span></h6>
        </div>
            <div class="row no-gutters">
                <!-- 1st Item -->
            <div style=""  class="col-lg-3 col-md-6 col-sm-12">
        <a style="text-decoration:none;" href="<?php bloginfo('template_url') ?>/productDetail.php">
          <div style=" " class="item">
            <div class="post-slide">
              <div class="post-img">
              <div style="background:yellow;position:relative;">
              <span style="color:red;background:#eee;position:absolute;right:15px; top:15px;padding:10px;box-shadow: 0 1px 30px 1px rgba(0,0,0,0.2);display:flex;text-align:center;justify-content:center;" class="material-symbols-outlined heart favorite">
                favorite
                </span>
              </div>
                <img style="border-radius:10px; height:230px; " src="<?php bloginfo('template_url') ?>/images/1.png"  alt="" width="100%">
                
                
              
              </div>
              <div class="post-content">
                <div style="display:flex; justify-content:space-between;" >
                <h3  class="post-title">
                  Knittled Sweater
                </h3>
                <span style="color:#000; position:relative;top:-6px;font-size:14px;" >4.5
                <span style="color:yellow;position:relative;top:3px;font-size:19px;" class="material-symbols-outlined">
                star
                </span>
                </span>
                </div>
                
                <p class="description">
                  <span style="letter-spacing:1px;font-size:20px;color:#A78364;font-weight:600"><span style="">$</span>100.00 </span>
                  <br>
                </p>
                <div class="color-selector">
    <div class="color-option" style="background-color: #A78364;" data-color="##A78364"></div>
    <div class="color-option" style="background-color: #56728B;" data-color="#56728B"></div>
    <div class="color-option" style="background-color: #F1B171;" data-color="#F1B171"></div>
    <div class="color-option" style="background-color: #F86F64;" data-color="#F86F64"></div>
    <!-- Add more color options as needed -->
</div><br>
<span  ><button style="background:rgba(201,190,177,0.6); color:#000;width:100%; "class="btn" type="button" name="button" href: >Add to Carts</button> </span>
              </div>
            </div>
          </div>
        </a>
        

        <!-- 2th item -->
            
        <!-- 6th item -->
          
      
    </div>

    <div style=""  class="col-lg-3 col-md-6 col-sm-12">
        <a style="text-decoration:none;" href="<?php bloginfo('template_url') ?>/productDetail.php">
          <div style=" " class="item">
            <div class="post-slide">
              <div class="post-img">
              <div style="background:yellow;position:relative;">
              <span style="color:#E4E0DA;background:#eee;position:absolute;right:15px; top:15px;padding:10px;box-shadow: 0 1px 30px 1px rgba(0,0,0,0.2);display:flex;text-align:center;justify-content:center;" class="material-symbols-outlined heart favorite">
                favorite
                </span>
              </div>
                <img style="border-radius:10px; height:230px; " src="<?php bloginfo('template_url') ?>/images/3.png"  alt="" width="100%">
                
                
              
              </div>
              <div class="post-content">
                <div style="display:flex; justify-content:space-between;" >
                <h3  class="post-title">
                  Knittled Sweater
                </h3>
                <span style="color:#000; position:relative;top:-6px;font-size:14px;" >4.5
                <span style="color:yellow;position:relative;top:3px;font-size:19px;" class="material-symbols-outlined">
                star
                </span>
                </span>
                </div>
                
                <p class="description">
                  <span style="letter-spacing:1px;font-size:20px;color:#A78364;font-weight:600"><span style="">$</span>100.00 </span>
                  <br>
                </p>
                <div class="color-selector">
    <div class="color-option" style="background-color: #A78364;" data-color="##A78364"></div>
    <div class="color-option" style="background-color: #56728B;" data-color="#56728B"></div>
    <div class="color-option" style="background-color: #F1B171;" data-color="#F1B171"></div>
    <div class="color-option" style="background-color: #F86F64;" data-color="#F86F64"></div>
    <!-- Add more color options as needed -->
</div><br>
<span  ><button style="background:rgba(201,190,177,0.6); color:#000;width:100%; "class="btn" type="button" name="button" href: >Add to Carts</button> </span>
              </div>
            </div>
          </div>
        </a>
        

        <!-- 2th item -->
            
        <!-- 6th item -->
          
      
    </div>

    <div style=""  class="col-lg-3 col-md-6 col-sm-12">
        <a style="text-decoration:none;" href="<?php bloginfo('template_url') ?>/productDetail.php">
          <div style=" " class="item">
            <div class="post-slide">
              <div class="post-img">
              <div style="background:yellow;position:relative;">
              <span style="color:red;background:#eee;position:absolute;right:15px; top:15px;padding:10px;box-shadow: 0 1px 30px 1px rgba(0,0,0,0.2);display:flex;text-align:center;justify-content:center;" class="material-symbols-outlined heart favorite">
                favorite
                </span>
              </div>
                <img style="border-radius:10px; height:230px; " src="<?php bloginfo('template_url') ?>/images/4.png"  alt="" width="100%">
                
                
              
              </div>
              <div class="post-content">
                <div style="display:flex; justify-content:space-between;" >
                <h3  class="post-title">
                  Knittled Sweater
                </h3>
                <span style="color:#000; position:relative;top:-6px;font-size:14px;" >4.5
                <span style="color:yellow;position:relative;top:3px;font-size:19px;" class="material-symbols-outlined">
                star
                </span>
                </span>
                </div>
                
                <p class="description">
                  <span style="letter-spacing:1px;font-size:20px;color:#A78364;font-weight:600"><span style="">$</span>100.00 </span>
                  <br>
                </p>
                <div class="color-selector">
    <div class="color-option" style="background-color: #A78364;" data-color="##A78364"></div>
    <div class="color-option" style="background-color: #56728B;" data-color="#56728B"></div>
    <div class="color-option" style="background-color: #F1B171;" data-color="#F1B171"></div>
    <div class="color-option" style="background-color: #F86F64;" data-color="#F86F64"></div>
    <!-- Add more color options as needed -->
</div><br>
<span  ><button style="background:rgba(201,190,177,0.6); color:#000;width:100%; "class="btn" type="button" name="button" href: >Add to Carts</button> </span>
              </div>
            </div>
          </div>
        </a>
        

        <!-- 2th item -->
            
        <!-- 6th item -->
          
      
    </div>

    <div style=""  class="col-lg-3 col-md-6 col-sm-12">
        <a style="text-decoration:none;" href="<?php bloginfo('template_url') ?>/productDetail.php">
          <div style=" " class="item">
            <div class="post-slide">
              <div class="post-img">
              <div style="background:yellow;position:relative;">
              <span style="color:red;background:#eee;position:absolute;right:15px; top:15px;padding:10px;box-shadow: 0 1px 30px 1px rgba(0,0,0,0.2);display:flex;text-align:center;justify-content:center;" class="material-symbols-outlined heart favorite">
                favorite
                </span>
              </div>
                <img style="border-radius:10px; height:230px; " src="<?php bloginfo('template_url') ?>/images/5.png"  alt="" width="100%">
                
                
              
              </div>
              <div class="post-content">
                <div style="display:flex; justify-content:space-between;" >
                <h3  class="post-title">
                  Knittled Sweater
                </h3>
                <span style="color:#000; position:relative;top:-6px;font-size:14px;" >4.5
                <span style="color:yellow;position:relative;top:3px;font-size:19px;" class="material-symbols-outlined">
                star
                </span>
                </span>
                </div>
                
                <p class="description">
                  <span style="letter-spacing:1px;font-size:20px;color:#A78364;font-weight:600"><span style="">$</span>100.00 </span>
                  <br>
                </p>
                <div class="color-selector">
    <div class="color-option" style="background-color: #A78364;" data-color="##A78364"></div>
    <div class="color-option" style="background-color: #56728B;" data-color="#56728B"></div>
    <div class="color-option" style="background-color: #F1B171;" data-color="#F1B171"></div>
    <div class="color-option" style="background-color: #F86F64;" data-color="#F86F64"></div>
    <!-- Add more color options as needed -->
</div><br>
<span  ><button style="background:rgba(201,190,177,0.6); color:#000;width:100%; "class="btn" type="button" name="button" href: >Add to Carts</button> </span>
              </div>
            </div>
          </div>
        </a>
        

        <!-- 2th item -->
            
        <!-- 6th item -->
          
      
    </div>

    <div style=""  class="col-lg-3 col-md-6 col-sm-12">
        <a style="text-decoration:none;" href="<?php bloginfo('template_url') ?>/productDetail.php">
          <div style=" " class="item">
            <div class="post-slide">
              <div class="post-img">
              <div style="background:yellow;position:relative;">
              <span style="color:red;background:#eee;position:absolute;right:15px; top:15px;padding:10px;box-shadow: 0 1px 30px 1px rgba(0,0,0,0.2);display:flex;text-align:center;justify-content:center;" class="material-symbols-outlined heart favorite">
                favorite
                </span>
              </div>
                <img style="border-radius:10px; height:230px; " src="<?php bloginfo('template_url') ?>/images/1.png"  alt="" width="100%">
                
                
              
              </div>
              <div class="post-content">
                <div style="display:flex; justify-content:space-between;" >
                <h3  class="post-title">
                  Knittled Sweater
                </h3>
                <span style="color:#000; position:relative;top:-6px;font-size:14px;" >4.5
                <span style="color:yellow;position:relative;top:3px;font-size:19px;" class="material-symbols-outlined">
                star
                </span>
                </span>
                </div>
                
                <p class="description">
                  <span style="letter-spacing:1px;font-size:20px;color:#A78364;font-weight:600"><span style="">$</span>100.00 </span>
                  <br>
                </p>
                <div class="color-selector">
    <div class="color-option" style="background-color: #A78364;" data-color="##A78364"></div>
    <div class="color-option" style="background-color: #56728B;" data-color="#56728B"></div>
    <div class="color-option" style="background-color: #F1B171;" data-color="#F1B171"></div>
    <div class="color-option" style="background-color: #F86F64;" data-color="#F86F64"></div>
    <!-- Add more color options as needed -->
</div><br>
<span  ><button style="background:rgba(201,190,177,0.6); color:#000;width:100%; "class="btn" type="button" name="button" href: >Add to Carts</button> </span>
              </div>
            </div>
          </div>
        </a>
        

        <!-- 2th item -->
            
        <!-- 6th item -->
          
      
    </div>

    <div style=""  class="col-lg-3 col-md-6 col-sm-12">
        <a style="text-decoration:none;" href="<?php bloginfo('template_url') ?>/productDetail.php">
          <div style=" " class="item">
            <div class="post-slide">
              <div class="post-img">
              <div style="background:yellow;position:relative;">
              <span style="color:red;background:#eee;position:absolute;right:15px; top:15px;padding:10px;box-shadow: 0 1px 30px 1px rgba(0,0,0,0.2);display:flex;text-align:center;justify-content:center;" class="material-symbols-outlined heart favorite">
                favorite
                </span>
              </div>
                <img style="border-radius:10px; height:230px; " src="<?php bloginfo('template_url') ?>/images/3.png"  alt="" width="100%">
                
                
              
              </div>
              <div class="post-content">
                <div style="display:flex; justify-content:space-between;" >
                <h3  class="post-title">
                  Knittled Sweater
                </h3>
                <span style="color:#000; position:relative;top:-6px;font-size:14px;" >4.5
                <span style="color:yellow;position:relative;top:3px;font-size:19px;" class="material-symbols-outlined">
                star
                </span>
                </span>
                </div>
                
                <p class="description">
                  <span style="letter-spacing:1px;font-size:20px;color:#A78364;font-weight:600"><span style="">$</span>100.00 </span>
                  <br>
                </p>
                <div class="color-selector">
    <div class="color-option" style="background-color: #A78364;" data-color="##A78364"></div>
    <div class="color-option" style="background-color: #56728B;" data-color="#56728B"></div>
    <div class="color-option" style="background-color: #F1B171;" data-color="#F1B171"></div>
    <div class="color-option" style="background-color: #F86F64;" data-color="#F86F64"></div>
    <!-- Add more color options as needed -->
</div><br>
<span  ><button style="background:rgba(201,190,177,0.6); color:#000;width:100%; "class="btn" type="button" name="button" href: >Add to Carts</button> </span>
              </div>
            </div>
          </div>
        </a>
        

        <!-- 2th item -->
            
        <!-- 6th item -->
          
      
    </div>
            </div>
        </div>
        
    </div>
        </div>
       
        <footer style="" class="master-footer pb-4 pt-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 col-lg-3 footer_about"> <h1 style="color:#fff;" > Fastyle<br>
</h1><br>
                    <div class="row text-white">
                        <div class="col-12">
                            <!-- <p><img src="http://wp.d3vtech.com/wp-content/themes/d3v-theme/images/icons8-location-pastel-glyph-16.png"> 5830 Granite Parkway, 100-203 Plano, TX 75024, USA</p> -->
                            <span class="footericon">
                                <span style="color:#fff;" class="material-symbols-outlined">mail </span>
                                <span style="position:relative;top:-6px;left: 6px;" >sanidhyap005@gmail.com</span>
                            </span>

                        </div>
                    </div>
                    <div class="row text-white">
                        <div class="col-12">
                        <span class="footericon">
                                <span style="color:#fff;" class="material-symbols-outlined">phone </span>
                                <span style="position:relative;top:-6px;left: 6px;" >0013198743</span>
                            </span>  
                        <!-- <p id="phone-text"><img src="http://wp.d3vtech.com/wp-content/themes/d3v-theme/images/icons8-phone-tanah-basah-glyph-16.png"> +1 (888) 999-6835</p> -->
                        </div>
                    </div>
                    
                </div>
                <div class="col-lg-9">
                    <div class="row">
                        <div class="col-md-4 col-lg-3">
                            <div  id="fooproduct" class="footer__links mb-3">
                                <h4>Products</h4>
                                <ul>
                                    <li><a href="http://wp.d3vtech.com/services/cloud-migration-and-management" title="Migration and Management">Categories</a></li>
                                    <li><a href="http://wp.d3vtech.com/services/gcp-devops-services" title="DevOps">New Arrival</a></li>
                                    <li><a href="http://wp.d3vtech.com/services/cloud-native-application-development" title="Cloud-Based Application Development">Popular</a></li>
                                    <li><a href="http://wp.d3vtech.com/services/cloud-app-modernization" title="App Modernization">Sale</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-3 pl-lg-5">
                            <div class="footer__links mb-3">
                                <h4>Company</h4>
                                <ul>
                                    <li><a href="http://wp.d3vtech.com/about" title="About Us">About </a></li>
                                    <li><a href="http://wp.d3vtech.com/about/how-we-work" title="How We Work">News</a></li>
                                    <!-- <li><a href="http://wp.d3vtech.com/google-cloud" title="Google Cloud">Google Cloud</a></li> -->
                                    <!-- <li><a href="http://wp.d3vtech.com/leadership" title="Leadership">Leadership</a></li> -->
                                    <li><a href="http://wp.d3vtech.com/careers" title="Careers">Careers</a></li>
                                    <li><a href="http://wp.d3vtech.com/contact" title="Contact">Services</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-3">
                            <div class="footer__links mb-3">
                                <h4>Support</h4>
                                <ul>
                                    <li><a href="http://wp.d3vtech.com/insights" title="Insights">Help Center</a></li>
                                    <li><a href="http://wp.d3vtech.com/case-studies" title="Case Studies">Delivery Services</a> </li>
                                    <li><a href="http://wp.d3vtech.com/cloud-news" title="Cloud News">Privacy Policy</a></li>
                                    <li><a href="http://wp.d3vtech.com/ebooks" title="eBooks">Terms Of Service</a></li>
                                    <!-- <li><a href="http://wp.d3vtech.com/whitepapers" title="whitepapers">Whitepapers</a></li> -->
                                </ul>
                            </div>
                        </div>
                        <div  class="col-md-12 col-lg-3">
                            <div class="footer__links newsletter">
                                <h4 style="position:relative;left:-6px;" >Join Our News Letter</h4>
								<form class="d-flex">
                                <input id="inpu" class="form-control me" type="search" placeholder="Type Your Email " aria-label="Search">
                                <button id="inpubtn" class="btn btn-outline-success" type="submit">Join</button>
                                </form>

                            </div>
                            
                        </div>
                    </div>
                    <div class="row" style="margin-top: -3%">
                        
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- <div class="copyright">
        <div class="container-fluid">
            <div class="row justify-content-between">
                <div class="col-xl-10"> Copyright 2022 @ D3V Technology Solutions. All rights reserved. <a href="/privacy-policy">Privacy Policy</a> and <a href="/terms-and-conditions">Terms and conditions</a> </div>
                <div class="col-xl-2"> Designed by <a href="/">D3V</a> </div>
            </div>
        </div>
    </div> -->


</body>
</html>