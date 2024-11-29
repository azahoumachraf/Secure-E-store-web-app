<div class="header-nav animate-dropdown">
        <div class="container">
          <div class="yamm navbar navbar-default" role="navigation">
            <div class="navbar-header">
              <button data-target="#mc-horizontal-menu-collapse" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
              <span class="sr-only">navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              </button>
            </div>
            <div class="nav-bg-class">
              <div class="navbar-collapse collapse" id="mc-horizontal-menu-collapse">
                <div class="nav-outer">
                  <ul class="nav navbar-nav">
                    <li class="dropdown hidden-sm">
                      <a href="index.php">Home</a>
                    </li>
                     <?php
                        $query = "SELECT * FROM category order by id Asc";
                        $insert_category = $db->select($query);
                        if ($insert_category) {
                        while ( $result = $insert_category->fetch_assoc()) {
                          $category=$result['categorys'];
                      ?>
                    <li class="dropdown hidden-sm">
                      <a href="showmore.php?product_cat=<?php echo $category;?>"><?php echo $category?></a>
                    </li>
                  <?php }}?>
                  </ul>
                  <div class="clearfix"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>