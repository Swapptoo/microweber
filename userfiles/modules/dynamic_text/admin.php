<?php  only_admin_access(); ?>


<div class="mw-module-admin-wrap">
    <?php if (isset($params['backend'])): ?>
        <module type="admin/modules/info"/>
    <?php endif; ?>
    <div class="admin-side-content" style="max-width:100%;">

        <module type="dynamic_text/edit" />

        <br />
        <br />

        <module type="dynamic_text/list" />


    </div>
</div>