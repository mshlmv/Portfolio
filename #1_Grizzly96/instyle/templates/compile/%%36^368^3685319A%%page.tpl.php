<?php /* Smarty version 2.6.22, created on 2015-07-10 00:34:17
         compiled from static/page.tpl */ ?>
<div class="v_space">
</div>

<div class="pages">
	<a href="/instyle/static/" class="go_back">&larr; Вернуться назад</a>

	<h2><?php echo $this->_tpl_vars['static']['name']; ?>
</h2>

	<form action="/instyle/static/" method="POST">
		<div class="margin_bottom_20">
     		<span id="switch_text" class="switch" onclick="javascript:switching();">Meta-данные</span>
     	</div>

  		<div id="switch_div">
  			<table cellpadding="0" cellspacing="0" width="70%" class="static_table">
  				<tr>
  					<td width="100px">
  						Title
  					</td>
  					<td>
  						<input class="input-550" type="text" size="70" name="title" value="<?php echo $this->_tpl_vars['static']['title']; ?>
" />
  					</td>
  				</tr>
  				<tr>
  					<td>
  						Description
  					</td>
  					<td>
  						<textarea name="meta_description mceNoEditor" class="meta mceNoEditor" style="width: 550px;"><?php echo $this->_tpl_vars['static']['meta_description']; ?>
</textarea>
  					</td>
  				</tr>
  				<tr>
  					<td>
  						Keywords
  					</td>
  					<td>
  						<textarea name="meta_keywords mceNoEditor" class="meta mceNoEditor" style="width: 550px;"><?php echo $this->_tpl_vars['static']['meta_keywords']; ?>
</textarea>
  					</td>
  				</tr>
  			</table>
  		</div>

  		<table cellpadding="0" cellspacing="0" width="70%" class="static_table">
  			<tr>
  				<td width="100px">
  					Текст
  				</td>
  				<td>
  					<textarea class="textarea_2" name="body"><?php echo $this->_tpl_vars['static']['body']; ?>
</textarea>
  				</td>
  			</tr>
  			<tr>
  				<td>
  					Текст в правой части
  				</td>
  				<td>
  					<textarea class="textarea_3" name="right_body"><?php echo $this->_tpl_vars['static']['right_body']; ?>
</textarea>
  				</td>
  			</tr>
  			<tr>
  				<td>
  					&nbsp;
  				</td>
  				<td class="padding_top_50">
  					<input type="submit" value="Сохранить" />
  				</td>
  			</tr>
  		</table>

 		<input type="hidden" name="id" value="<?php echo $this->_tpl_vars['static']['id']; ?>
" />
   		<input type="hidden" name="action" value="edit" />
     	<input type="hidden" name="type" value="<?php echo $this->_tpl_vars['static']['type']; ?>
" />
      </form>
  	</div>

  	<div class="clear_both"></div>
</div>

