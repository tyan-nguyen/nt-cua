
    <section class="product-tabs mt-5">
      <div class="container">
        <div class="row">
          <div class="tabs-listing">
            <nav>
              <div class="nav nav-tabs d-flex justify-content-center" id="nav-tab" role="tablist">
                <button class="nav-link active text-uppercase px-5 py-3 text-primary" id="nav-home-tab" data-bs-toggle="tab"
                  data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home"
                  aria-selected="true">Description</button>
                <button class="nav-link text-uppercase px-5 py-3 text-primary" id="nav-information-tab" data-bs-toggle="tab"
                  data-bs-target="#nav-information" type="button" role="tab" aria-controls="nav-information"
                  aria-selected="false">Additional information</button>
                <button class="nav-link text-uppercase px-5 py-3 text-primary" id="nav-shipping-tab" data-bs-toggle="tab"
                  data-bs-target="#nav-shipping" type="button" role="tab" aria-controls="nav-shipping"
                  aria-selected="false">Shipping & Return</button>
                <button class="nav-link text-uppercase px-5 py-3 text-primary" id="nav-review-tab" data-bs-toggle="tab"
                  data-bs-target="#nav-review" type="button" role="tab" aria-controls="nav-review"
                  aria-selected="false">Reviews</button>
              </div>
            </nav>
            <div class="tab-content py-5" id="nav-tabContent">
              <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                <h5>Product Description</h5>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros.
                  Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec
                  nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim
                  pellentesque felis. Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula
                  vulputate sem tristique cursus.
                <ul>
                  <li>Donec nec justo eget felis facilisis fermentum.</li>
                  <li>Suspendisse urna viverra non, semper suscipit pede.</li>
                  <li>Aliquam porttitor mauris sit amet orci.</li>
                </ul> Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis
                eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede.
                Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim
                pellentesque felis. Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula
                vulputate sem tristique cursus. </p>
              </div>
              <div class="tab-pane fade" id="nav-information" role="tabpanel" aria-labelledby="nav-information-tab">
                <h5>It is Comfortable and Best</h5>
                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                  pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
                  anim id est laborum. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                  fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                  deserunt mollit anim id est laborum.</p>
              </div>
              <div class="tab-pane fade" id="nav-shipping" role="tabpanel" aria-labelledby="nav-shipping-tab">
                <h5>Returns Policy</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce eros justo, accumsan non dui sit amet.
                  Phasellus semper volutpat mi sed imperdiet. Ut odio lectus, vulputate non ex non, mattis sollicitudin
                  purus. Mauris consequat justo a enim interdum, in consequat dolor accumsan. Nulla iaculis diam purus,
                  ut vehicula leo efficitur at.</p>
                <p>Interdum et malesuada fames ac ante ipsum primis in faucibus. In blandit nunc enim, sit amet pharetra
                  erat aliquet ac.</p>
                <h5>Shipping</h5>
                <p>Pellentesque ultrices ut sem sit amet lacinia. Sed nisi dui, ultrices ut turpis pulvinar. Sed
                  fringilla ex eget lorem consectetur, consectetur blandit lacus varius. Duis vel scelerisque elit, et
                  vestibulum metus. Integer sit amet tincidunt tortor. Ut lacinia ullamcorper massa, a fermentum arcu
                  vehicula ut. Ut efficitur faucibus dui Nullam tristique dolor eget turpis consequat varius. Quisque a
                  interdum augue. Nam ut nibh mauris.</p>
              </div>
              <div class="tab-pane fade" id="nav-review" role="tabpanel" aria-labelledby="nav-review-tab">
                <div class="review-box review-style1 d-flex">
                  <div class="review-item d-flex">
                    <div class="row g-4">
                      <div class="col-md-3">
                        <div class="image-holder">
                          <img src="<?= Yii::getAlias('@web') ?>/images/review-image1.jpg" alt="review" class="rounded-circle img-fluid">
                        </div>
                      </div>
                      <div class="col-md-7">
                        <div class="review-content">
                          <div class="rating-container d-flex align-items-center">
                            <div class="rating" data-rating="1" onclick="rate(1)">
                              <svg width="32" height="32">
                                <use xlink:href="#star-solid"></use>
                              </svg>
                            </div>
                            <div class="rating" data-rating="2" onclick="rate(1)">
                              <svg width="32" height="32">
                                <use xlink:href="#star-solid"></use>
                              </svg>
                            </div>
                            <div class="rating" data-rating="3" onclick="rate(1)">
                              <svg width="32" height="32">
                                <use xlink:href="#star-solid"></use>
                              </svg>
                            </div>
                            <div class="rating" data-rating="4" onclick="rate(1)">
                              <svg width="32" height="32">
                                <use xlink:href="#star-outline"></use>
                              </svg>
                            </div>
                            <div class="rating" data-rating="5" onclick="rate(1)">
                              <svg width="32" height="32">
                                <use xlink:href="#star-outline"></use>
                              </svg>
                            </div>
                          </div>
                          <div class="review-header">
                            <span class="author-name">Serena Wilson</span>
                            <span class="review-date">– 07/05/2023</span>
                          </div>
                          <p>Vitae tortor condimentum lacinia quis vel eros donec ac. Nam at lectus urna duis convallis
                            convallis</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="review-item d-flex">
                    <div class="row g-4">
                      <div class="col-md-3">
                        <div class="image-holder">
                          <img src="<?= Yii::getAlias('@web') ?>/images/review-image2.jpg" alt="review" class="rounded-circle img-fluid">
                        </div>
                      </div>
                      <div class="col-md-7">
                        <div class="review-content">
                          <div class="rating-container d-flex align-items-center">
                            <div class="rating" data-rating="1" onclick="rate(1)">
                              <svg width="32" height="32">
                                <use xlink:href="#star-solid"></use>
                              </svg>
                            </div>
                            <div class="rating" data-rating="2" onclick="rate(1)">
                              <svg width="32" height="32">
                                <use xlink:href="#star-solid"></use>
                              </svg>
                            </div>
                            <div class="rating" data-rating="3" onclick="rate(1)">
                              <svg width="32" height="32">
                                <use xlink:href="#star-solid"></use>
                              </svg>
                            </div>
                            <div class="rating" data-rating="4" onclick="rate(1)">
                              <svg width="32" height="32">
                                <use xlink:href="#star-outline"></use>
                              </svg>
                            </div>
                            <div class="rating" data-rating="5" onclick="rate(1)">
                              <svg width="32" height="32">
                                <use xlink:href="#star-outline"></use>
                              </svg>
                            </div>
                          </div>
                          <div class="review-header">
                            <span class="author-name">Jenny Willis</span>
                            <span class="review-date">– 07/05/2023</span>
                          </div>
                          <p>Vitae tortor condimentum lacinia quis vel eros donec ac. Nam at lectus urna duis convallis
                            convallis</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>    

 