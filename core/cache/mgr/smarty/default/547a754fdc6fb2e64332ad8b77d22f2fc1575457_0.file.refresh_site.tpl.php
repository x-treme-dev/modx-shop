<?php
/* Smarty version 3.1.44, created on 2023-05-08 19:47:32
  from 'W:\domains\revo-shop-business.local\manager\templates\default\system\refresh_site.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.44',
  'unifunc' => 'content_645927a4a46de5_29623952',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '547a754fdc6fb2e64332ad8b77d22f2fc1575457' => 
    array (
      0 => 'W:\\domains\\revo-shop-business.local\\manager\\templates\\default\\system\\refresh_site.tpl',
      1 => 1683537653,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_645927a4a46de5_29623952 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modx-page-header">
<h2><?php echo $_smarty_tpl->tpl_vars['_lang']->value['refresh_title'];?>
</h2>
</div>

<div class="padding modx-page">
<p><?php echo $_smarty_tpl->tpl_vars['published']->value;?>
</p>
<p><?php echo $_smarty_tpl->tpl_vars['unpublished']->value;?>
</p>

<hr />

<p><?php echo $_smarty_tpl->tpl_vars['_lang']->value['cache_files_deleted'];?>
</p>

<?php if ($_smarty_tpl->tpl_vars['results']->value['deleted_files_count'] > 0) {?>
<ul>
<?php
$__section_fileIdx_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['results']->value['deleted_files']) ? count($_loop) : max(0, (int) $_loop));
$__section_fileIdx_0_total = $__section_fileIdx_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_fileIdx'] = new Smarty_Variable(array());
if ($__section_fileIdx_0_total !== 0) {
for ($__section_fileIdx_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_fileIdx']->value['index'] = 0; $__section_fileIdx_0_iteration <= $__section_fileIdx_0_total; $__section_fileIdx_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_fileIdx']->value['index']++){
?>
    <li><?php echo $_smarty_tpl->tpl_vars['results']->value['deleted_files'][(isset($_smarty_tpl->tpl_vars['__smarty_section_fileIdx']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_fileIdx']->value['index'] : null)];?>
</li>
<?php
}
}
?>
</ul>
<?php }?>

</div><?php }
}
