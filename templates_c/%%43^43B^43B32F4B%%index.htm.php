<?php /* Smarty version 2.6.26, created on 2009-11-24 13:27:42
         compiled from index.htm */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title><?php echo $this->_tpl_vars['sm_config'][0]; ?>
</title>
<link href="<?php echo $this->_tpl_vars['t_dir']; ?>
css/common.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $this->_tpl_vars['t_dir']; ?>
css/layout.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $this->_tpl_vars['t_dir']; ?>
css/red.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div class="content border_bottom">
	 <ul id="sub_nav">
		 <li><a href="<?php echo $this->_tpl_vars['sm_config'][0]; ?>
">��Ϊ��ҳ</a></li>
		 <li><a href="#">�����ղ�</a></li>
		 <li class="nobg"><a href="#">��ϵ����</a></li>
	 </ul>
	      <img src="<?php echo $this->_tpl_vars['t_dir']; ?>
img/logo.gif" alt="��Ȼ֮��" name="logo" width="200" height="75" id="logo" /><br class="clear" />
</div>
<div class="content dgreen-bg">
     <div class="content">
	 <ul id="main_nav">
		 <li class="nobg"><a href="index.php">������ҳ</a></li>
		<?php unset($this->_sections['l']);
$this->_sections['l']['name'] = 'l';
$this->_sections['l']['loop'] = is_array($_loop=$this->_tpl_vars['sm_class']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['l']['show'] = true;
$this->_sections['l']['max'] = $this->_sections['l']['loop'];
$this->_sections['l']['step'] = 1;
$this->_sections['l']['start'] = $this->_sections['l']['step'] > 0 ? 0 : $this->_sections['l']['loop']-1;
if ($this->_sections['l']['show']) {
    $this->_sections['l']['total'] = $this->_sections['l']['loop'];
    if ($this->_sections['l']['total'] == 0)
        $this->_sections['l']['show'] = false;
} else
    $this->_sections['l']['total'] = 0;
if ($this->_sections['l']['show']):

            for ($this->_sections['l']['index'] = $this->_sections['l']['start'], $this->_sections['l']['iteration'] = 1;
                 $this->_sections['l']['iteration'] <= $this->_sections['l']['total'];
                 $this->_sections['l']['index'] += $this->_sections['l']['step'], $this->_sections['l']['iteration']++):
$this->_sections['l']['rownum'] = $this->_sections['l']['iteration'];
$this->_sections['l']['index_prev'] = $this->_sections['l']['index'] - $this->_sections['l']['step'];
$this->_sections['l']['index_next'] = $this->_sections['l']['index'] + $this->_sections['l']['step'];
$this->_sections['l']['first']      = ($this->_sections['l']['iteration'] == 1);
$this->_sections['l']['last']       = ($this->_sections['l']['iteration'] == $this->_sections['l']['total']);
?>
		 <li><a href="list.php?cid=<?php echo $this->_tpl_vars['sm_class'][$this->_sections['l']['index']]['id']; ?>
"><?php echo $this->_tpl_vars['sm_class'][$this->_sections['l']['index']]['name']; ?>
</a></li>
		<?php endfor; endif; ?>
	 </ul><br class="clear" />
	 </div>
</div>
<div class="content">
     <div id="left-nav-bar" class="bg_white">
	      <p id="top-contact-info">
		  ������<br />
		  �绰��<br />
		  OICQ��<br />
		  �ֻ���<br />
		  ��ַ��
		  </p>
		  <h2>������Ϣ</h2>
		  <ul>
			  <li><a href="#">ǧ����Ԫ���й� �Ƹ߹ɼ۷���</a></li>
			  <li><a href="#">ǧ����Ԫ���й� �Ƹ߹ɼ۷���</a></li>
			  <li><a href="#">ǧ����Ԫ���й� �Ƹ߹ɼ۷���</a></li>
			  <li><a href="#">ǧ����Ԫ���й� �Ƹ߹ɼ۷���</a></li>
		  </ul>
		  <h2>��ҵ��Ѷ</h2>
		  <ul>
			  <li><a href="#">ǧ����Ԫ���й� �Ƹ߹ɼ۷���</a></li>
			  <li><a href="#">ǧ����Ԫ���й� �Ƹ߹ɼ۷���</a></li>
			  <li><a href="#">ǧ����Ԫ���й� �Ƹ߹ɼ۷���</a></li>
			  <li><a href="#">ǧ����Ԫ���й� �Ƹ߹ɼ۷���</a></li>
		  </ul>
		  <h3><a href="#"><img src="<?php echo $this->_tpl_vars['t_dir']; ?>
img/sq-txt.gif" width="143" height="28" /></a></h3>
		  <h3><a href="#"><img src="<?php echo $this->_tpl_vars['t_dir']; ?>
img/log-txt.gif" width="120" height="27" /></a></h3>
		  <h3><a href="http://www.php100.com"><img src="<?php echo $this->_tpl_vars['t_dir']; ?>
img/loglt-txt.gif" width="143" height="27" /></a></h3>
	   <span id="hits">�����Ѿ���[122]�ε��</span>
  </div> 
  <div id="right-cnt">
	      <div class="col_center">
	        <div class="sub-title"><h2>�����</h2><span><a href="#" class="cblue">MORE</a></span><br class="clear" />
	        </div>
			<ul>
			<?php unset($this->_sections['l']);
$this->_sections['l']['name'] = 'l';
$this->_sections['l']['loop'] = is_array($_loop=$this->_tpl_vars['sm_news']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['l']['show'] = true;
$this->_sections['l']['max'] = $this->_sections['l']['loop'];
$this->_sections['l']['step'] = 1;
$this->_sections['l']['start'] = $this->_sections['l']['step'] > 0 ? 0 : $this->_sections['l']['loop']-1;
if ($this->_sections['l']['show']) {
    $this->_sections['l']['total'] = $this->_sections['l']['loop'];
    if ($this->_sections['l']['total'] == 0)
        $this->_sections['l']['show'] = false;
} else
    $this->_sections['l']['total'] = 0;
if ($this->_sections['l']['show']):

            for ($this->_sections['l']['index'] = $this->_sections['l']['start'], $this->_sections['l']['iteration'] = 1;
                 $this->_sections['l']['iteration'] <= $this->_sections['l']['total'];
                 $this->_sections['l']['index'] += $this->_sections['l']['step'], $this->_sections['l']['iteration']++):
$this->_sections['l']['rownum'] = $this->_sections['l']['iteration'];
$this->_sections['l']['index_prev'] = $this->_sections['l']['index'] - $this->_sections['l']['step'];
$this->_sections['l']['index_next'] = $this->_sections['l']['index'] + $this->_sections['l']['step'];
$this->_sections['l']['first']      = ($this->_sections['l']['iteration'] == 1);
$this->_sections['l']['last']       = ($this->_sections['l']['iteration'] == $this->_sections['l']['total']);
?>
			    <li><a href="view.php?id=<?php echo $this->_tpl_vars['sm_news'][$this->_sections['l']['index']]['id']; ?>
"><?php echo $this->_tpl_vars['sm_news'][$this->_sections['l']['index']]['title']; ?>
</a></li>
			<?php endfor; endif; ?>	
		  </div>
	      <div class="col_center right">
	        <div class="sub-title"><h2>��˾���</h2><span><a href="#" class="cblue">MORE</a></span><br class="clear" /></div>
			<p id="intro">
			��᳹��ʵ��ѧ��չ�۵��Ծ��Ժͼᶨ�Ժ���һ
�����߿�4�ſγ̹��⿼����¼ұ�����̫����Ⱦ����
�����������Ǹ����73����ڼ�������ǿ��Ů����Ա
������Ů��ѧ��������ץ��������μӱϱ�����Ů��ѧ��������ץ��������μӱ�...[<a href="#" class="cgray">��ϸ</a>]           </p>
		  </div><br class="clear" />
		  <div id="m_adv"><img src="<?php echo $this->_tpl_vars['t_dir']; ?>
img/m-adv.gif" width="630" height="146" /></div>
		  
		    <div class="pages"><h2>��Ʒչʾ</h2><span>��Ʒ���ࣺչʾ | չʾ | չʾ | չʾ | չʾ | չʾ | չʾ | չʾ | չʾ</span><div id="more"><a href="#" class="cblue">MORE</a></div>
		    <br class="clear" /></div>
			<ul id="products-list">
			    <li>
				<img src="<?php echo $this->_tpl_vars['t_dir']; ?>
img/product.jpg" alt=" " width="326" height="119" />
				<h3>��Ʒչʾ</h3>
				<ul>
				    <li>���</li>
				    <li>���أ�</li>
				    <li>�۸�1200 <span>[<a href="#" class="cdred">��ϸ</a>]</span></li>
				</ul>
				</li>
			    <li>
				<img src="<?php echo $this->_tpl_vars['t_dir']; ?>
img/product.jpg" alt=" " width="326" height="119" />
				<h3>��Ʒչʾ</h3>
				<ul>
				    <li>���</li>
				    <li>���أ�</li>
				    <li>�۸�1200 <span>[<a href="#" class="cdred">��ϸ</a>]</span></li>
				</ul>
				</li>
			    <li>
				<img src="<?php echo $this->_tpl_vars['t_dir']; ?>
img/product.jpg" alt=" " width="326" height="119" />
				<h3>��Ʒչʾ</h3>
				<ul>
				    <li>���</li>
				    <li>���أ�</li>
				    <li>�۸�1200 <span>[<a href="#" class="cdred">��ϸ</a>]</span></li>
				</ul>
				</li>
			    <li>
				<img src="<?php echo $this->_tpl_vars['t_dir']; ?>
img/product.jpg" alt=" " width="326" height="119" />
				<h3>��Ʒչʾ</h3>
				<ul>
				    <li>���</li>
				    <li>���أ�</li>
				    <li>�۸�1200 <span>[<a href="#" class="cdred">��ϸ</a>]</span></li>
				</ul>
				</li>
			</ul><br class="clear" />
  </div>
  
  <br class="clear" />
</div>
<div id="about">
     <div class="content">
	      <span class="left"><a href="#">������ҳ</a> | <a href="#">��˾����</a> | <a href="#">������֤</a> | <a href="#">��Ʒչʾ</a> | <a href="#">��Ƶ����</a> | <a href="#">������Ϣ</a> | <a href="#">��Ƹ��Ϣ</a> | <a href="#">�����</a> | <a href="#">��ҵ��Ѷ</a> | <a href="#">��ϵ����</a></span>
		  <span class="right">�ҵ��ʼ���<?php echo $this->_tpl_vars['sm_config'][5]; ?>
</span>
	 </div>
</div>
<p id="copyright">
</p>
</body>
</html>