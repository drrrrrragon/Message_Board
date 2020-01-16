<div class="container-fluid main-content">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="thumbnail">
                <?php echo validation_errors();
                      echo form_open('message/update/'.$id) ?>
                    <!-- 嵌套栅格系统 -->
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                        <h4 class="page-header"><span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp<?=$title?></h4>
                        </div>

                        <div class="col-md-8 col-md-offset-2">
                            <!-- 输入框组 姓名-->
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon">Name</div>
                                    <input type="text" name="name" id="name" class="form-control" value="<?=$list[0]->name?>">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-8 col-md-offset-2">
                            <!-- 输入框组 邮箱-->
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon">Email</span>
                                    <input type="email" id="email" name="email" class="form-control" value="<?=$list[0]->email?>">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-8 col-md-offset-2">
                            <!-- 输入框组 留言-->
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon">Message</span>
                                    <textarea name="content" id="content" rows="3" class="form-control"><?=$list[0]->content?></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-md-offset-6">
                            <!-- 两个按钮 -->
                            <div class="text-right">
                                <a class="btn btn-warning" href="<?php echo site_url('message');?>" role="button"><span class="glyphicon glyphicon-chevron-left"></a>
                                <button type="submit" name="submit" class="btn btn-success"><span class="glyphicon glyphicon-ok"></button>
                            </div>
                        </div>

                    </div><!-- inline-row-end -->
                </form><!-- form-end -->
                
            </div><!-- thumbnail-end -->
        </div><!-- col-end -->
    </div><!-- row-end -->
</div><!-- container-end -->