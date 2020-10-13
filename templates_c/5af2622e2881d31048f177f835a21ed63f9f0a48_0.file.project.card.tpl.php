<?php
/* Smarty version 3.1.36, created on 2020-10-13 20:32:05
  from '/home/robertb1/domains/rbcode.pl/public_html/includes/Smarty/templates/project.card.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5f85f2a52f8669_71485337',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5af2622e2881d31048f177f835a21ed63f9f0a48' => 
    array (
      0 => '/home/robertb1/domains/rbcode.pl/public_html/includes/Smarty/templates/project.card.tpl',
      1 => 1602613923,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f85f2a52f8669_71485337 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="col-md-6 col-sm-12">
  <div class="card realization-card">
    <div class="pb-2"><img src="images/Projekty/<?php echo $_smarty_tpl->tpl_vars['image']->value;?>
.png" class="card-img-top" alt="<?php echo $_smarty_tpl->tpl_vars['image']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
"></div>
      <div class="card-body text-center">
        <div class="realization-tags d-inline-block mb-3">
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tags']->value, 'tag');
$_smarty_tpl->tpl_vars['tag']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tag']->value) {
$_smarty_tpl->tpl_vars['tag']->do_else = false;
?> <small class="text-muted"><?php echo $_smarty_tpl->tpl_vars['tag']->value;?>
</small> <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div>
          	<h3 class="card-title"><a href="https://<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
" rel="nofollow" target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
" class="realization-title " ><?php echo $_smarty_tpl->tpl_vars['url']->value;?>
</a></h3>
          <p class="card-text"><?php echo $_smarty_tpl->tpl_vars['text']->value;?>
</p>
          <div class="slide-in d-flex justify-content-center mx-auto" id="slide-in">
            <a itemprop="url" href="/" class="btn btn-wycena" role="button" aria-pressed="true" title="Dowiedz się więcej na temat projektu" >Dowiedz się więcej</a>
            <div class="slide-eff"></div>
          </div>
      </div>
  </div>
</div>
<?php }
}
