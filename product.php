<?php
define('PAGE', 'Product');
define('TITLE', 'Product');
// Including Header File
include('includes/header.php');

// Including Connection file
require_once('connection.php');
?>
<style>
  #open {
    display: none;
  }

  .sidebar-icon {
    color: #777;
    cursor: pointer;
  }

  .sidebar {
    transition: all 1s ease-in-out;
  }

  .sidebar-icon:hover {
    color: #555;
  }

  /* Card > Card Image Containe r > Span(discount) */

  .card .card-img-container span.discount {
    background-color: green;
    color: white;
    border-radius: 50%;
    padding: 8px;
    font-size: 17px;
    position: absolute;
    top: 4px;
    right: 1px;
    transform: rotate(14deg);
  }
</style>
<!-- ====================================================== -->

<i class="sidebar-icon fas fa-arrow-right" onclick="OpenSidebar()" id="open"></i>

<!-- ====================================================== -->

<div class="container-fluid card-container">
  <!-- Start Container Fluid && Card Container -->
  <div class="row">
    <!-- Start Row -->

    <div class="col-md-2" id="side_bar">
      <!-- Start Column 3 -->
      <div class="sidebar">
        <!-- Start Sidebar -->
        <!-- ====================================================== -->
        <!-- Icon For Hide Show Side Bar -->
        <i class="sidebar-icon fas fa-times" onclick="CloseSidebar()" style="float: right;margin-top: 1rem;"></i>
        <!-- =============================================== -->
        <h4 class="heading text-muted">Show result for </h4>

        <div class="deparment">
          <!-- Start Deparment -->
          <h5 class="titile">Main Category Name</h5>

          <ul class="sidebar-ul">
            <!-- Start Sidebar Ul -->
            <li class="sidebar-links">Sub Category Name</li>
            <li class="sidebar-links">Sub Category Name</li>
            <li class="sidebar-links">Sub Category Name</li>
            <li class="sidebar-links">Sub Category Name</li>
            <li class="sidebar-links">Sub Category Name</li>
            <li class="sidebar-links">Sub Category Name</li>
            <li class="sidebar-links">Sub Category Name</li>
            <li class="sidebar-links">Sub Category Name</li>
            <li class="sidebar-links">Sub Category Name</li>
            <li class="sidebar-links">Sub Category Name</li>
            <li class="sidebar-links">Sub Category Name</li>
          </ul><!-- End Sidebar Ul -->

        </div><!-- End Deparment -->

        <hr>

        <!-- =============================================== -->

        <h4 class="heading text-muted">Refine by</h4>

        <div class="certified">
          <!-- Start Certified -->
          <h5 class="titile">ETF Cart Certified</h5>

          <ul class="sidebar-ul">
            <!-- Start Sidebar Ul -->
            <li class="sidebar-links checkboxes">
              <!-- Start Sidebar linkd && Checkboxes -->
              <input type="checkbox">
              <p> Loremipsum</p>
            </li><!-- End Sidebar linkd && Checkboxes -->

            <li class="sidebar-links checkboxes">
              <!-- Start Sidebar linkd && Checkboxes -->
              <input type="checkbox">
              <p> Loremipsum</p>
            </li><!-- End Sidebar linkd && Checkboxes -->
          </ul><!-- End Sidebar Ul -->

        </div><!-- End Certified -->

        <!-- =============================================== -->

        <div class="brand">
          <!-- Start Brand -->
          <h5 class="titile">From Our Brands</h5>

          <ul class="sidebar-ul">
            <!-- Start Sidebar ul -->
            <li class="sidebar-links checkboxes">
              <!-- Start Sidebar Links && Checkboxes -->
              <input type="checkbox">
              <p> Loremipsum</p>
            </li><!-- End Sidebar Links && Checkboxes -->
          </ul><!-- End Sidebar ul -->

        </div><!-- End Brand -->

        <!-- =============================================== -->

        <div class="certified">
          <!-- Start Certified -->
          <h5 class="titile">Featured Brands</h5>
          <ul class="sidebar-ul ">
            <!-- Start Sidebar Ul -->

            <li class="sidebar-links checkboxes">
              <!-- Start Sidebar Links && Checkboxes -->
              <input type="checkbox">
              <p> Loremipsum</p>
            </li><!-- End Sidebar Links && Checkboxes -->

            <li class="sidebar-links checkboxes">
              <!-- Start Sidebar Links && Checkboxes -->
              <input type="checkbox">
              <p> Loremipsum</p>
            </li><!-- End Sidebar Links && Checkboxes -->


            <li class="sidebar-links checkboxes">
              <!-- Start Sidebar Links && Checkboxes -->
              <input type="checkbox">
              <p> Loremipsum</p>
            </li><!-- End Sidebar Links && Checkboxes -->

            <li class="sidebar-links checkboxes">
              <!-- Start Sidebar Links && Checkboxes -->
              <input type="checkbox">
              <p> Loremipsum</p>
            </li><!-- End Sidebar Links && Checkboxes -->

            <li class="sidebar-links checkboxes">
              <!-- Start Sidebar Links && Checkboxes -->
              <input type="checkbox">
              <p> Loremipsum</p>
            </li><!-- End Sidebar Links && Checkboxes -->

          </ul><!-- End Sidebar Ul -->
        </div><!-- End Certified -->


        <!-- =============================================== -->


        <div class="availability">
          <!-- Start Availability -->
          <h5 class="titile">Avg. Customer Review</h5>
          <ul class="sidebar-ul cut-reviews">
            <!-- Start Sidebar ul && Cut Reviews -->

            <li class="sidebar-links">
              <!-- Start Sidebar Links -->
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="far fa-star"></i>
              <span class="review-up">& Up</span>
            </li><!-- End Sidebar Links -->

            <li class="sidebar-links">
              <!-- Start Sidebar Links -->
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="far fa-star"></i>
              <i class="far fa-star"></i>
              <span class="review-up">& Up</span>
            </li><!-- End Sidebar Links -->

            <li class="sidebar-links">
              <!-- Start Sidebar Links -->
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="far fa-star"></i>
              <i class="far fa-star"></i>
              <i class="far fa-star"></i>
              <span class="review-up">& Up</span>
            </li><!-- End Sidebar Links -->

            <li class="sidebar-links">
              <!-- Start Sidebar Links -->
              <i class="fas fa-star"></i>
              <i class="far fa-star"></i>
              <i class="far fa-star"></i>
              <i class="far fa-star"></i>
              <i class="far fa-star"></i>
              <span class="review-up">& Up</span>
            </li><!-- End Sidebar Links -->

          </ul><!-- End Sidebar ul && Cut Reviews -->
        </div><!-- End Availability -->

        <!-- =============================================== -->

        <div class="arrival">
          <!-- Start Arrival -->
          <h5 class="titile">New & Upcoming</h5>

          <ul class="sidebar-ul">
            <!-- Start Sidebar Ul -->
            <li class="sidebar-links">Loremipsum</li>
            <li class="sidebar-links">Loremipsum</li>
          </ul><!-- End Sidebar Ul -->

        </div><!-- End Arrival -->

        <!-- =============================================== -->

        <div class="price">
          <!-- Start Price -->
          <h5 class="titile">Price</h5>

          <ul class="sidebar-ul price">
            <!-- Start Sidebar Ul && Price -->
            <li class="sidebar-links">Under Rs.500</li>
            <li class="sidebar-links">Rs.500 to Rs.1500</li>
            <li class="sidebar-links">Rs.1500 to Rs.2500</li>
            <li class="sidebar-links">Rs.2500 to Rs.3500</li>
            <li class="sidebar-links">Rs.3500 to Above</li>

            <li class="sidebar-links price-range">
              <!-- Start Price Range -->
              <span class="price-type">Rs.</span>
              <input type="text" placeholder="Min">
              <span class="price-type">Rs.</span>
              <input type="text" placeholder="Max">
              <button>Go</button>
            </li><!-- End Price Range -->

          </ul><!-- End Sidebar Ul && Price -->
        </div><!-- End Price -->

        <!-- =============================================== -->

        <div class="avalibality">
          <!-- Start Avalibality -->
          <h5 class="titile">Availability</h5>

          <ul class="sidebar-ul">
            <!-- Start Sidebar UL -->
            <li class="sidebar-links checkboxes"><input type="checkbox">
              <p> Loremipsum</p>
            </li>
          </ul><!-- End Sidebar UL -->

        </div><!-- End Avalibality -->


      </div><!-- End Sidebar -->
    </div><!-- End Column 3 -->


    <!-- ============================= -->

    <div class="col-md-9">
      <!-- Start Column 9 -->

      <!-- Start php -->
      <?php
      $sql = "SELECT * FROM product";
      $result = mysqli_query($con, $sql);
      if ($result->num_rows > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
          $imgUrl = "assets/images/products/" . $row['pimg'];
      ?>
          <!-- End php -->
          <div class="col-lg-4 col-md-4 col-md-12" style="margin: 0; padding:0;">
            <!-- Start COlumn 4 -->
            <div class="card" style="text-align:left;">
              <!-- Start Card -->
              <div class="inner-card">
                <!-- Start Inner Card -->

                <!-- =======================================================
                  ======================================================= -->
                <div class="card-img-container">
                  <?php if ($row['padprice'] > 1) {
                    echo '<span class="discount">Sale</span>';
                  } else {
                    echo '';
                  }
                  ?>
                  <!-- Start Card Image Container -->
                  <img class="card-img-top" src="<?php echo $imgUrl; ?>" style="width:100%; max-height:250px;" alt="Card image cap">
                </div><!-- End Card Image Container -->

                <!-- =======================================================
                  ======================================================= -->
                <div class="card-body">
                  <!-- Start Card Body -->

                  <span class="price d-flex">
                    <!-- Start Price && d-flex(display flex) -->
                    <!-- ================ -->
                    <h4 class="mt-4 text-success">
                      <?php
                      if ($row['padprice'] > 1) {
                        echo "Rs." . $row['padprice'];
                      } else {
                        echo "Rs" . $row['psprice'];
                      }
                      ?></h4>

                    <!-- ================ -->
                    <h5 class="text-danger">
                      <?php
                      if ($row['padprice'] < 1) {
                        echo '';
                      } else {
                        echo "Rs." . $row['psprice'];
                      }
                      ?></h5>
                  </span><!-- End Price && d-flex(display flex) -->

                  <h4 class="card-title"><?php echo $row['pname'] ?></h4>
                  <h6 class="card-subtitle mb-2 text-muted">Style: VA33TXRJ5</h6>
                  <p class="card-text">
                    <?php
                    $limit = substr($row['pdesc'], 0, 100); // Setting text Length / Limit
                    $row['pdesc'] = substr($limit, 0, strrpos($limit, ' ')) . '...';
                    echo $row['pdesc'];
                    ?>
                  </p>
                </div><!-- End Card Body -->

                <!-- =======================================================
                  ======================================================= -->
                <div class="card-button">
                  <!-- Start Card Button -->
                  <?php
                  echo '<form action="product-detail" method="POST">';

                  echo '<input type="hidden" name="id" value=' . $row["id"] . '>

                    <button class="btn btn-primary mt-2" name="view-detail" type="submit"><i class="fas fa-eye"></i> View Detail</button>';

                  echo '</form>';

                  ?>
                </div><!-- End Card Button -->

              </div><!-- End Inner Card -->
            </div><!-- End Card -->
          </div><!-- End Column 4 -->

          <!-- Start Php -->
        <?php
        }
      } else {
        ?>
        <!-- End Php -->

        <p class="alert-danger">No Record Found</p>

        <!-- Start Php -->
      <?php
      }
      ?>
      <!-- End Php -->

    </div><!-- End Column 9 -->
  </div><!-- End Row -->
</div><!-- End Container Fluid && Card Container -->

<script>
  function CloseSidebar() {
    document.getElementById("side_bar").style.display = "none";
    document.getElementById("side_bar").style.transition = "all 1s ease-in;";
    document.getElementById("open").style.display = "block";
  }

  function OpenSidebar() {
    document.getElementById("side_bar").style.display = "block";
    document.getElementById("side_bar").style.transition = "all 1s ease-in;";
    document.getElementById("open").style.display = "none";
  }
</script>


</body>

</html>