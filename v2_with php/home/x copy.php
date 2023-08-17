<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filter Image</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
    <style>body,h1,ul,li{
      margin: 0;
      padding: 0;
  }
  body{
      background-color: #667d8e;
      font-family: Arial, "Helvetica Neue", Helvetica, sans-serif;
  }
  section{
      width: 85%;
      margin: 50px auto;
  }
  section h1{
      text-align: center;
      text-transform: uppercase;
      letter-spacing: 1px;
      text-shadow: 2px 2px 2px rgba(0, 0, 0, 0.5);
      color: white;
      font-size: 2em;
  }
  ul{
      width: 100%;
      display: flex;
      justify-content: center;
      margin-top: 10px;
      border-bottom: 2px solid rgba(255, 255, 255, 0.57);
      padding-bottom: 10px;
      box-sizing: border-box;
      margin-bottom: 10px;
  }
  ul li{
      list-style: none;
      background-color: rgba(255, 255, 255, 0.5);
      padding: 5px 10px;
      margin: 0 10px;
      cursor: pointer;
      font-size: 1.2em;
  }
  ul li.active{
      background-color: rgba(41, 255, 41, 0.897);
  }
  .product{
      width: 100%;
      padding: 0 10px;
      box-sizing: border-box;
      display: flex;
      justify-content: space-between;
      flex-wrap: wrap;
  }
  .product img{
      width: 200px;
      height: 180px;
      margin-bottom: 10px;
  }</style>
  </head>
<body>
    
    <section>
        <h1>Filter Image</h1>
        <ul>
            <?php 
            $con = mysqli_connect("localhost", "root", "", "modderhub") or die("Connect failed: %s\n" . $con->error);
            $query1="SELECT * FROM `tbl_categories` ";

            $result1 = mysqli_query($con, $query1);?>
            <li class="active">All Menu</li>
            <?php 
            while($row1=mysqli_fetch_array($result1))
										   { ?><li><?php echo $row1['cate_category']?></li><?php }?>

        </ul>

        <div class="product">
        <?php
											$i=0;
											$con = mysqli_connect("localhost", "root", "", "modderhub") or die("Connect failed: %s\n" . $con->error);
											$query=	"SELECT * FROM `tbl_products`";

											$result = mysqli_query($con, $query);
											while($row=mysqli_fetch_array($result))
										   {
                                            
											
											$query2="SELECT * FROM `tbl_categories where cate_id='".$row['prod_cid']."'";
											$result2 = mysqli_query($con, $query2);
                                            $i=explode(" ",$row['prod_photo']);
                                            $row2=mysqli_fetch_array($result2)

											// $query1="SELECT * FROM `tbl_products` where  regdet_lid='".$row['logdet_id']."'";
											// $result1 = mysqli_query($con, $query1);
											// $row1=mysqli_fetch_array($result1);
											// $i=$i+1;?>	
							
                                      <div  data-filter="<?php echo $row['cate_category']?>" class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up">
            <div class="icon-box icon-box-pink">
              <div class=""><i class=""><img style =' width:100px;border-radius:50%'src="../dashboard/assets/img/products/<?php echo $i[0];?>" alt="">
									</i></div>
              <h4 class="title"><a href=""><?php echo $row['prod_name']?></a></h4>
              <h4 class="title"><a href="">Rs.<?php echo $row['prod_price']?></a></h4>
              
              <p class="description"><?php echo $row['prod_desc']?></p>
              <form method='GET' ><button name='' class='btn btn-success'>order

              
              </button></form>
            </div>
          </div>
          <?php }?>
        </div>
    </section>

    <script>
        const liItem = document.querySelectorAll('ul li');
        const imgItem = document.querySelectorAll('.product img');

        liItem.forEach(li => {
           li.onclick = function() {
            //active
            liItem.forEach(li => {
                li.className = "";
            })
            li.className = "active";

            //Filter
            const value = li.textContent;
            imgItem.forEach(img => {
                img.style.display = 'none';
                if (img.getAttribute('data-filter') == value.toLowerCase() || value == "All Menu") {
                    img.style.display = 'block';
                }
            })
           }
        });
    </script>
</body>
</html>