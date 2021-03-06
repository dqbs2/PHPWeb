<div class="tab-bar">
    <ul class="tab">
        <li class="tab-item"><a href="<?php echo url('Kefu-add'); ?>">添加客服</a></li>
        <li class="tab-item"><a href="<?php echo url('Kefu'); ?>">客服列表</a></li>
        <li class="tab-item current"><a href="<?php echo SELF_URL; ?>">编辑客服</a></li>
    </ul>
    <ul class="context">
        <li><?php if($prev){ ?><a href="<?php echo url('Kefu-edit', $prev['id']); ?>" data-target="replace">上一条</a><?php } ?></li>
        <li><?php if($next){ ?><a href="<?php echo url('Kefu-edit', $next['id']); ?>" data-target="replace">下一条</a><?php } ?></li>
    </ul>
</div>
<div class="content">
    <form action="<?php echo url('Kefu-update'); ?>" method="post">
        <table class="edit">
            <tr>
                <td align="right" width="60">类型：</td>
                <td>
                    <select name="type">
                        <?php
                        $kefuType = C('KEFU_TYPE');
                        foreach($kefuType as $key=>$val){
                            if($key == $data['type']){
                                echo "<option value='{$key}' selected='selected'>{$val}</option>";
                            }else{
                                echo "<option value='{$key}'>{$val}</option>";
                            }
                        }
                        ?>
                    </select>
                    <a class="gray" href="//shang.qq.com/v3/widget/consult.html" target="_blank">开通QQ会话功能</a>
                </td>
            </tr>
            <tr>
                <td align="right">号码：</td>
                <td><input class="ime" name="account" type="text" value="<?php echo $data['account'] ?>" size="38" autofocus required title="请输入客服号码"></td>
            </tr>
            <tr>
                <td align="right">名称：</td>
                <td><input name="name" type="text" value="<?php echo $data['name']?>" size="38" required title="请输入客服名称"></td>
            </tr>
            <tr>
                <td align="right">排序：</td>
                <td>
                    <input name="orderly" type="text" data-type="float" value="<?php echo $data['orderly']; ?>" size="6" maxlength="6">
                    <span class="separator">|</span>
                    <label><?php checkbox('is_show', '1', $data['is_show']); ?> 前台显示</label>
                </td>
            </tr>
        </table>
        <ul class="tool-bar">
            <li><button type="submit" name="submit" class="btn btn-blue">保存</button></li>
            <li><button type="reset" class="btn">重置</button></li>
            <li><button type="button" class="btn" onClick="history.back()">返回</button></li>
        </ul>
        <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
    </form>
</div>
<script src="<?php js('admin/js/kefu'); ?>"></script>