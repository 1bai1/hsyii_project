<div class="box">
    <div class="box-title c"><h1><i class="fa fa-table"></i>社区列表</h1><span class="back"><a class="btn" href="javascript:;" onclick="we.back();"><i class="fa fa-reply"></i>返回</a></span></div><!--box-title end-->
    <div class="box-detail">
    <?php  $form = $this->beginWidget('CActiveForm', get_form_list());?>
        <div class="box-detail-tab">
            <ul class="c"> 
                <li class="current">社区列表</li>
            </ul>
        </div><!--box-detail-tab end-->
        <div class="box-detail-bd">
        <div style="display:block;" class="box-detail-tab-item">
            <table>
    
     <tr>
        <td width="30%"><?php echo $form->labelEx($model, 'club_code'); ?></td>
        <td width="60%">
        <?php echo $form->textField($model, 'club_code', array('class' => 'input-text')); ?>
        <?php echo $form->error($model, 'club_code', $htmlOptions = array()); ?>
        </td>
    </tr>
    <tr>
        <td width="30%"><?php echo $form->labelEx($model, 'club_name'); ?></td>
        <td width="60%">
        <?php echo $form->textField($model, 'club_name', array('class' => 'input-text')); ?>
        <?php echo $form->error($model, 'club_name', $htmlOptions = array()); ?>
        </td>
    </tr>
        <tr>
        <td width="30%"><?php echo $form->labelEx($model, 'apply_club_gfnick'); ?></td>
        <td width="60%">
        <?php echo $form->textField($model, 'apply_club_gfnick', array('class' => 'input-text')); ?>
        <?php echo $form->error($model, 'apply_club_gfnick', $htmlOptions = array()); ?>
        </td>
    </tr>
   
        <tr>
        <td width="30%"><?php echo $form->labelEx($model, 'apply_club_id_card'); ?></td>
        <td width="60%">
        <?php echo $form->textField($model, 'apply_club_id_card', array('class' => 'input-text')); ?>
        <?php echo $form->error($model, 'apply_club_id_card', $htmlOptions = array()); ?>
        </td>
    </tr>
        <tr>
        <td width="30%"><?php echo $form->labelEx($model, 'apply_club_phone'); ?></td>
        <td width="60%">
        <?php echo $form->textField($model, 'apply_club_phone', array('class' => 'input-text')); ?>
        <?php echo $form->error($model, 'apply_club_phone', $htmlOptions = array()); ?>
        </td>
    </tr>
        <tr>
        <td width="30%"><?php echo $form->labelEx($model, 'apply_club_email'); ?></td>
        <td width="60%">
        <?php echo $form->textField($model, 'apply_club_email', array('class' => 'input-text')); ?>
        <?php echo $form->error($model, 'apply_club_email', $htmlOptions = array()); ?>
        </td>
    </tr>
   
         
                </table>
                 
            </div><!--box-detail-tab-item end   style="display:block;"-->
            
        </div><!--box-detail-bd end-->
        
        <div class="box-detail-submit"><button onclick="submitType='baocun'" class="btn btn-blue" type="submit">保存</button><button class="btn" type="button" onclick="we.back();">取消</button></div>
       
    <?php $this->endWidget(); ?>
    </div><!--box-detail end-->
</div><!--box end-->
