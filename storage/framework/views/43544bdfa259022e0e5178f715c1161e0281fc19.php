<?php $__env->startSection('content'); ?>
      <div class="content-page">
         <div class="kk-new-page">
            <div class="container contact-page">
               <div class="row hidden-lg hidden-md hidden-sm">
                  <div class="col-xs-12 content-menu">
                     <ul>
                        <li><a href="#">Shop Online</a></li>
                        <li><a href="#">Hướng dẫn mua hàng</a></li>
                        <li><a href="#">Liên hệ</a></li>
                     </ul>
                  </div>
               </div>
               <div class="row headding-page">
                  <div class="col-md-12 col-xs-12">
                     <div class="contact-headding"><span>Liên hệ</span></div>
                  </div>
               </div>
               <div class="row contact-page">
                  <div class="col-md-12 col-xs-12">
                     <p>Vui lòng điền các thông tin sau:</p>
                  </div>
                  <form class="form-horizontal" id="commentforms" action="<?php echo url('lien-he'); ?>" method="POST" onsubmit="return checkform()">
                  <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                     <div class="col-md-6 col-xs-12">
                        <div class="form-contact">
                           <div class="col-lg-12 col-md-12 col-xs-12">
                              <div class="form-group row">
                                 <label for="inputName" class="col-lg-3 col-sm-2 col-xs-4 control-label">Họ tên <span>(*)</span></label>
                                 <div class="col-lg-9 col-sm-8 col-xs-8">
                                    <input name="data[name]" type="text" class="form-control input-small required" id="inputName">
                                 </div>
                              </div>
                              <div class="form-group">
                                 <label for="inputEmail" class="col-lg-3 col-sm-2 col-xs-4 control-label">Email <span>(*)</span></label>
                                 <div class="col-lg-9 col-sm-8 col-xs-8">
                                    <input name="data[email]" type="text" class="form-control input-small required" id="inputEmail">
                                 </div>
                              </div>
                              <div class="form-group">
                                 <label for="inputPhone" class="col-lg-3 col-sm-2 col-xs-4 control-label">Điện thoại <span>(*)</span></label>
                                 <div class="col-lg-9 col-sm-8 col-xs-8">
                                    <input name="data[phone]" type="text" class="form-control input-small required" id="inputPhone">
                                 </div>
                              </div>
                              <div class="form-group">
                                 <label for="inputTitle" class="col-lg-3 col-sm-2 col-xs-4 control-label">Tiêu đề <span>(*)</span></label>
                                 <div class="col-lg-9 col-sm-8 col-xs-8">
                                    <input name="data[subject]" type="text" class="form-control input-small required" id="inputTitle">
                                 </div>
                              </div>
                              <div class="form-group">
                                 <label for="inputMessage" class="col-lg-3 col-sm-2 col-xs-4 control-label">Nội dung</label>
                                 <div class="col-lg-9 col-sm-8 col-xs-8">
                                    <textarea name="data[message]" class="form-control input-small" id="inputMessage" rows="6"></textarea>
                                 </div>
                              </div>
                              <div class="form-group">
                                 <div class="col-sm-2 col-md-2"></div>
                                 <div class="col-sm-8 col-md-10">
                                    <button type="submit" class="kk-btn-send pull-right btn-contact">Gửi</button>
                                 </div>
                              </div>
                           </div>
                           <div class="clearfix"></div>
                        </div>
                     </div>
                     
                  </form>
               </div>
               <div class="row">
                  <div class="col-md-12">
                     <div class="head-lacate">
                        Hệ thống cửa hàng <span>K&K Fashion</span>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('kkshop.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>