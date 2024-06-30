<?php include_once"Template/header.php";?> 
         <!-- header section starts -->

        <!-- header section starts -->


        <?php include_once"Template/nav.php";?> 
         

        

            

            <!-- home section starts -->
        

            <section class="home-projects">
                <h1 class="Heading-title"></h1>
            
                <div class="container-fluid text-center bg-grey">
                    <h4>The products include:</h4>
                    <div class="row text-center">
                      <div class="col-sm-6">
                        <div class="thumbnail">
                          <img class="fixed-size" src="Images/beef1.jpeg" alt="Paris">
                          <p><strong>Beef</strong></p>
                          <p>Amazing tender soft beef </p>
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="thumbnail">
                          <img class="fixed-size" src="Images/mutton1.jpeg" alt="New York">
                          <p><strong>Mutton</strong></p>
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing</p>
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="thumbnail">
                          <img class="fixed-size" src="Images/wool1.jpeg" alt="San Francisco">
                          <p><strong>Sheep wool</strong></p>
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing </p>
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="thumbnail">
                          <img class="fixed-size" src="Images/chickenmeat1.jpeg" alt="New York">
                          <p><strong>Chicken</strong></p>
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing</p>
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="thumbnail">
                          <img class="fixed-size" src="Images/honey1.jpeg" alt="New York">
                          <p><strong>Honey</strong></p>
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing</p>
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="thumbnail">
                          <img class="fixed-size" src="Images/milk1.jpeg" alt="New York">
                          <p><strong>Milk</strong></p>
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing</p>
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="thumbnail">
                          <img class="fixed-size" src="Images/chickenmeat.jpeg" alt="New York">
                          <p><strong>Sausages</strong></p>
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing</p>
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="thumbnail">
                          <img class="fixed-size" src="Images/fertilizer1 (1).jpeg" alt="New York">
                          <p><strong>Manure</strong></p>
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing</p>
                        </div>
                      </div>
                      </div>
                      <div class="load-more"><a href="animals.html" class="btn">Load More</a></div>
                 
            </section>
               
            <!-- home section ends -->
 
            <h2>Pricing Information</h2>
            <!--List of products and prices-->
    
            <table >
                <tr>
                    <th>SN</th>
                    <th>Product Name</th>
                    <th>Quantity</th>
                    <th>Unit Price</th>
                   
                </tr>
    
                <tr>
                    <td>1</td>
                    <td>Beef</td>
                    <td>Ikg</td>
                    <td>600 ksh per kg </td>
                   
                </tr>
    
                <tr>
                    <td>2</td>
                    <td>Eggs</td>
                    <td>1 tray-30 eggs</td>
                    <td>450 per tray</td>
                  
                </tr>
    
                <tr>
                    <td>3</td>
                    <td>Milk</td>
                    <td>500ml</td>
                    <td>170ksh per litre</td>
                    
                </tr>
    
                <tr>
                    <td>4</td>
                    <td>Honey</td>
                    <td>1kg</td>
                    <td>800ksh per kg</td>
                    
                </tr>
    
                <tr>
                    <td>5</td>
                    <td>Sausages</td>
                    <td>1kg</td>
                    <td>700ksh per kg</td>
                    
                </tr>
                <tr>
                    <td>6</td>
                    <td>Manure</td>
                    <td>3 tonnes</td>
                    <td>4500Ksh per tonne</td>
                  
                </tr>
                <tr>
                    <td>7</td>
                    <td>Wool</td>
                    <td>1kg</td>
                    <td>1000ksh per kg</td>
                
                </tr>
                <tr>
                    <td>8</td>
                    <td>Mutton</td>
                    <td>5000g</td>
                    <td>1200ksh per kg</td>
                   
                </tr>
            </table>

            <section class="form-section">
              <h2>Submit Goods and Services Details</h2>
              <form class="form">
                  <div class="form-group">
                      <label for="productName">Product Name:</label>
                      <input type="text" id="productName" name="productName" required>
                  </div>
                  <div class="form-group">
                      <label for="quantity">Quantity:</label>
                      <input type="number" id="quantity" name="quantity" required>
                  </div>
                  <div class="form-group">
                      <label for="unitPrice">Unit Price:</label>
                      <input type="number" id="unitPrice" name="unitPrice" required>
                  </div>
                  <div class="form-group">
                      <label for="description">Description:</label>
                      <textarea id="description" name="description" rows="4" required></textarea>
                  </div>
                  <button type="submit" class="btn">Submit</button>
              </form>
          </section>
    </body>
</html>