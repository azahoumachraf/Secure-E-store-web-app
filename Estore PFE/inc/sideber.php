<div class="side-menu animate-dropdown outer-bottom-xs">
              <div class="head"><i class="icon fa fa-align-justify fa-fw"></i>Categories</div>
              <nav class="yamm megamenu-horizontal" role="navigation">
                <ul class="nav">
          <?php
            $query = "SELECT * FROM category order by id Asc";
            $insert_category = $db->select($query);
            if ($insert_category) {
            while ( $result = $insert_category->fetch_assoc()) {
              $category=$result['categorys'];
          ?>
                  <li>
                    <a href="showmore.php?product_cat=<?php echo $category;?>"><i class="<?php echo $result['cat_icon'];?>" aria-hidden="true"></i><?php echo " ".$category;?></a>
                          
                  </li>
                <?php }}?>
                </ul>
              </nav>
            </div>