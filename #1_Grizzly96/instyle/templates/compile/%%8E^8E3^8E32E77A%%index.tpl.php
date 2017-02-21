<?php /* Smarty version 2.6.22, created on 2015-07-09 17:52:41
         compiled from upload/index.tpl */ ?>
  	<div class="v_space">
    	</div>

    	<div class="catalog">
    		<a href="/instyle/upload/add" class="add_link">Загрузить файл</a>

    		<table cellpadding="0" cellspacing="1" class="files_table">
  					<tr>
  						<td class="first_files_td_header">
  							Тип
  						</td>
  						<td class="second_files_td_header">
  							Комментарий
  						</td>
  						<td class="third_files_td_header">
  							Ссылка
  						</td>
  						<td class="last_td">
  						</td>
  					</tr>

  					<?php unset($this->_sections['y']);
$this->_sections['y']['name'] = 'y';
$this->_sections['y']['start'] = (int)0;
$this->_sections['y']['loop'] = is_array($_loop=$this->_tpl_vars['upload']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['y']['show'] = true;
$this->_sections['y']['max'] = $this->_sections['y']['loop'];
$this->_sections['y']['step'] = 1;
if ($this->_sections['y']['start'] < 0)
    $this->_sections['y']['start'] = max($this->_sections['y']['step'] > 0 ? 0 : -1, $this->_sections['y']['loop'] + $this->_sections['y']['start']);
else
    $this->_sections['y']['start'] = min($this->_sections['y']['start'], $this->_sections['y']['step'] > 0 ? $this->_sections['y']['loop'] : $this->_sections['y']['loop']-1);
if ($this->_sections['y']['show']) {
    $this->_sections['y']['total'] = min(ceil(($this->_sections['y']['step'] > 0 ? $this->_sections['y']['loop'] - $this->_sections['y']['start'] : $this->_sections['y']['start']+1)/abs($this->_sections['y']['step'])), $this->_sections['y']['max']);
    if ($this->_sections['y']['total'] == 0)
        $this->_sections['y']['show'] = false;
} else
    $this->_sections['y']['total'] = 0;
if ($this->_sections['y']['show']):

            for ($this->_sections['y']['index'] = $this->_sections['y']['start'], $this->_sections['y']['iteration'] = 1;
                 $this->_sections['y']['iteration'] <= $this->_sections['y']['total'];
                 $this->_sections['y']['index'] += $this->_sections['y']['step'], $this->_sections['y']['iteration']++):
$this->_sections['y']['rownum'] = $this->_sections['y']['iteration'];
$this->_sections['y']['index_prev'] = $this->_sections['y']['index'] - $this->_sections['y']['step'];
$this->_sections['y']['index_next'] = $this->_sections['y']['index'] + $this->_sections['y']['step'];
$this->_sections['y']['first']      = ($this->_sections['y']['iteration'] == 1);
$this->_sections['y']['last']       = ($this->_sections['y']['iteration'] == $this->_sections['y']['total']);
?>
  						<tr>
  							<td class="simple_td">
  								<img src="http://funburg.ru/instyle/images/<?php echo $this->_tpl_vars['upload'][$this->_sections['y']['index']]['type']; ?>
.gif" width="25px" />
  							</td>
  							<td class="simple_td">
  								<?php echo $this->_tpl_vars['upload'][$this->_sections['y']['index']]['comment']; ?>
</br>
  								<a href="/instyle/upload/<?php echo $this->_tpl_vars['upload'][$this->_sections['y']['index']]['id']; ?>
" class="persents_95">Редактировать</a>
  							</td>
  							<td class="simple_td">
  								<a href="<?php echo $this->_tpl_vars['upload'][$this->_sections['y']['index']]['link']; ?>
"><?php echo $this->_tpl_vars['upload'][$this->_sections['y']['index']]['link']; ?>
</a>
  							</td>
  						</tr>
  					<?php endfor; endif; ?>
  					<tr>
  						<td colspan="3" class="files_total_td">
  							Всего <b><?php echo $this->_sections['y']['total']; ?>
 файла</b> объемом <b><?php echo $this->_tpl_vars['upload'][0]['sum']; ?>
 кб</b>
  						</td>
  					</tr>
  				</table>
    	</div>