                      <div class="row2 form_content">
                        <div class="row2 mb10 formds_loai">
                          <table border="1">

                            <?php
                            if (isset($listnews)) {
                              extract($listnews);
                            ?>

                              <div class="newss">
                                <div>
                                  <div class="title">
                                    <?= $title ?>
                                  </div>
                                  <div class="detail">
                                    <?= $detail ?>
                                  </div>
                                </div>
                              </div>
                            <?php
                            }
                            ?>
                          </table>
                        </div>
                      </div>