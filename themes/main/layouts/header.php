    <header id="header" class="site-header text-black">
      <nav id="header-nav" class="navbar navbar-expand-lg px-3 mb-3">
        <div class="container-fluid">
          <a class="navbar-brand" href="<?= Yii::getAlias('@web/') ?>">
            <img src="<?= Yii::getAlias('@web')  ?>/img/logo.png?v=2" class="logo logo-header">
          </a>
          <button class="navbar-toggler d-flex d-lg-none order-3 p-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#bdNavbar" aria-controls="bdNavbar" aria-expanded="false" aria-label="Toggle navigation">
            <svg class="navbar-icon" width="50" height="50">
              <use xlink:href="#navbar-icon"></use>
            </svg>
          </button>
          <div class="offcanvas offcanvas-end" tabindex="-1" id="bdNavbar" aria-labelledby="bdNavbarOffcanvasLabel">
            
            
            
            <div style="width:100%" class="d-flex justify-content-end d-social">
            	<ul class="list-unstyled fs-14 d-flex mb-0 justify-content-end top-header">
            		<li class="icon-link">
            			<img src="<?= Yii::getAlias('@web/img/icon-face.png') ?>" />
            		</li>
            		<li class="icon-link">
            			<img src="<?= Yii::getAlias('@web/img/icon-ins.png') ?>" />
            		</li>
            		<li class="icon-link">
            			<img src="<?= Yii::getAlias('@web/img/icon-youtube.png') ?>" />
            		</li>
            		<li class="icon-link">
            			<img src="<?= Yii::getAlias('@web/img/icon-twitter.png') ?>" />
            		</li>
            		<!-- <li class="icon-link">
            			|
            		</li>
            		<li class="icon-link">
            			<a href="#">
                          <svg class="user" width="18" height="18">
                            <use xlink:href="#user"></use>
                          </svg>
                        </a>
            		</li>
            		<li>
            			<a href="#">
                          <svg class="cart" width="18" height="18">
                            <use xlink:href="#cart"></use>
                          </svg>
                        </a>
            		</li> -->
            		<!-- <li>
            			<a href="tel:02943840058 ">
                            <span>0294.384.0058 </span>
                        </a>
            		</li> -->
            	</ul>
            </div>
            
            
            	
            <div class="offcanvas-header px-4 pb-0">
              <a class="navbar-brand" href="#">
                <img src="<?= Yii::getAlias('@web')  ?>/img/logo.png?v=2" class="logo logo-header">
              </a>
              <button type="button" class="btn-close btn-close-black" data-bs-dismiss="offcanvas" aria-label="Close" data-bs-target="#bdNavbar"></button>
            </div>
            <div class="offcanvas-body">
            	
              <ul id="navbar" class="navbar-nav text-uppercase justify-content-end align-items-center flex-grow-1 pe-3">
                <li class="nav-item dropdown">
                  <a class="nav-link me-4 active dropdown-toggle" href="#billboard" id="dropdownPages" data-bs-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false">Trang chủ</a><ul class="dropdown-menu list-unstyled" aria-labelledby="dropdownPages">
                    <li>
                      <a href="<?= Yii::getAlias('@web/') ?>" class="dropdown-item item-anchor">Trang chủ</a>
                    </li>
                    <li>
                      <a href="#" class="dropdown-item item-anchor">Trang chủ Nguyễn Trình</a>
                    </li>
                  </ul>
                </li>
               <!--  <li class="nav-item">
                  <a class="nav-link me-4" href="#about-us">Về chúng tôi</a>
                </li> -->
                
                <li class="nav-item dropdown me-4">
                  <a class="nav-link dropdown-toggle" href="#" id="dropdownPages" data-bs-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false">Hệ cửa</a>
                  <ul class="dropdown-menu list-unstyled" aria-labelledby="dropdownPages">
                    <li class="has-menu-sub2">
                    	<!-- <div style="width:200px;">
                    		<div style="width:50%;float:left;">fdsafasf 1
                    			fsdfdsaf <br/>
                    			fdsfsaf
                    		</div>
                    		<div style="width:50%;float:left">fdsafasf 2
                    			đầ<br/>
                    			fdsfsaf<br/>
                    		</div>
                    	</div> -->
                    	
                    	<ul class="list-unstyled menu-sub2" aria-labelledby="dropdownPages">
                    		<li>Hệ cửa đi</li>
                            <li>
                              <a href="#" class="dropdown-item item-anchor">Cửa nhôm</a>
                            </li>
                            <li>
                              <a href="#" class="dropdown-item item-anchor">Cửa thép vân gỗ</a>
                            </li>
                            <li>
                              <a href="#" class="dropdown-item item-anchor">Cửa nhựa</a>
                            </li>
                          </ul>
                          
                          <ul class="list-unstyled  menu-sub2" aria-labelledby="dropdownPages">
                          	<li>Hệ cửa sổ</li>
                            <li>
                              <a href="#" class="dropdown-item item-anchor">Cửa nhôm</a>
                            </li>
                            <li>
                              <a href="#" class="dropdown-item item-anchor">Cửa thép vân gỗ</a>
                            </li>
                            <li>
                              <a href="#" class="dropdown-item item-anchor">Cửa nhựa</a>
                            </li>
                          </ul>
                    	
                    </li>
                  </ul>
                </li>
                
                <!-- <li class="nav-item dropdown me-4">
                  <a class="nav-link dropdown-toggle" href="#" id="dropdownPages" data-bs-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false">Hệ cửa đi</a>
                  <ul class="dropdown-menu list-unstyled" aria-labelledby="dropdownPages">
                    <li>
                      <a href="#" class="dropdown-item item-anchor">Cửa đi một cánh</a>
                    </li>
                    <li>
                      <a href="#" class="dropdown-item item-anchor">Cửa đi hai cánh</a>
                    </li>
                    <li>
                      <a href="#" class="dropdown-item item-anchor">Cửa đi bốn cánh</a>
                    </li>
                  </ul>
                </li>
                
                <li class="nav-item dropdown me-4">
                  <a class="nav-link dropdown-toggle" href="#" id="dropdownPages" data-bs-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false">Hệ cửa sổ</a>
                  <ul class="dropdown-menu list-unstyled" aria-labelledby="dropdownPages">
                    <li>
                      <a href="#" class="dropdown-item item-anchor">Cửa sổ một cánh</a>
                    </li>
                    <li>
                      <a href="#" class="dropdown-item item-anchor">Cửa sổ hai cánh</a>
                    </li>
                    <li>
                      <a href="#" class="dropdown-item item-anchor">Cửa sổ ba cánh</a>
                    </li>
                  </ul>
                </li> -->
                
                <li class="nav-item">
                  <a class="nav-link me-4" href="#">Blogs</a>
                </li>
                
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="dropdownPages" data-bs-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false">Báo giá</a>
                  <ul class="dropdown-menu list-unstyled" aria-labelledby="dropdownPages">
                    <li>
                      <a href="#" class="dropdown-item item-anchor">Báo giá nhôm Xingfa</a>
                    </li>
                    <li>
                      <a href="#" class="dropdown-item item-anchor">Báo giá lắp đặt cửa nhôm tại Trà Vinh</a>
                    </li>
                    <li>
                      <a href="#" class="dropdown-item item-anchor">Báo giá lắp đặt cửa đi</a>
                    </li>
                    <li>
                      <a href="#" class="dropdown-item item-anchor">Báo giá lắp đặt cửa sổ</a>
                    </li>
                  </ul>
                </li>
                
                 <li class="nav-item">
                  <a class="nav-link me-4" href="#">Liên hệ</a>
                </li>
                
                <li class="nav-item">
                  <div class="user-items ps-5">
                    <ul class="d-flex justify-content-end list-unstyled">
                      <li class="search-item pe-3" data-bs-toggle="collapse" data-bs-target="#search-box" aria-controls="search-box" aria-expanded="false" aria-label="Toggle navigation">
                        <svg class="search" width="18" height="18">
                          <use xlink:href="#search"></use>
                        </svg>
                      </li>
                      <li class="pe-3">
                        <a href="#">
                          <svg class="user" width="18" height="18">
                            <use xlink:href="#user"></use>
                          </svg>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <svg class="cart" width="18" height="18">
                            <use xlink:href="#cart"></use>
                          </svg>
                        </a>
                      </li>
                    </ul>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </nav>    
    </header>