<section id="latest-blog">
      <div class="container-fluid  padding-small">
        <div class="row">
          <div class="col-md-12">
            <div class="display-header d-flex flex-wrap justify-content-between pb-3">
              <h2 class="display-2 display-2-small text-dark text-uppercase">Thông tin mới nhất</h2>
              <a href="#" class="btn btn-medium btn-arrow btn-normal position-relative">
                <span class="text-uppercase">Xem tất cả</span>            
                <svg class="arrow-right position-absolute" width="18" height="20">
                  <use xlink:href="#arrow-right"></use>
                </svg>
              </a>
            </div>
          </div>
        </div>
        <div class="row g-3 post-grid">
        
          <?= $this->render('article/article1') ?>
          <?= $this->render('article/article2') ?>
          <?= $this->render('article/article3') ?>
        
        </div>
      </div>
    </section>