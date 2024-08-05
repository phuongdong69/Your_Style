<div class="full-width-container">
  <div class="main-container">
    <div class="flex-row">
      <div class="flex-col left-sidebar">
        <table border="1" class="news-table">
          <?php
          if (isset($listnews)) {
            extract($listnews);
          ?>
            <tr>
              <td>
                <div class="news-item">
                  <div class="news-title">
                    <?= $title ?>
                  </div>
                  <div class="news-detail">
                    <?= $detail ?>
                  </div>
                </div>
              </td>
            </tr>
          <?php
          }
          ?>
        </table>
      </div>
    </div>
  </div>
</div>
 
 <!-- <div class="row2 form_content">
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
                      </div> -->

                      