<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:62:"D:\www\tpcms\public/../application/admin\view\cmodel\mlst.html";i:1543655352;s:54:"D:\www\tpcms\application\admin\view\common\header.html";i:1543226272;s:52:"D:\www\tpcms\application\admin\view\common\left.html";i:1543655614;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
	
	<!-- start: Meta -->
	<meta charset="utf-8" />
	<title>SimpliQ - Flat & Responsive Bootstrap Admin Template</title>
	<meta name="description" content="SimpliQ - Flat & Responsive Bootstrap Admin Template." />
	<meta name="author" content="Łukasz Holeczek" />
	<meta name="keyword" content="SimpliQ, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina" />
	<!-- end: Meta -->
	
	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<!-- end: Mobile Specific -->
	
	<!-- start: CSS -->
	<link href="/static/admin/css/bootstrap.min.css" rel="stylesheet" />
	<link href="/static/admin/css/bootstrap-responsive.min.css" rel="stylesheet" />
	<link href="/static/admin/css/style.min.css" rel="stylesheet" />
	<link href="/static/admin/css/style-responsive.min.css" rel="stylesheet" />
	<link href="/static/admin/css/retina.css" rel="stylesheet" />
	<!-- end: CSS -->
	

	<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<link id="ie-style" href="/static/admin/css/ie.css" rel="stylesheet">
	<![endif]-->
	
	<!--[if IE 9]>
		<link id="ie9style" href="/static/admin/css/ie9.css" rel="stylesheet">
	<![endif]-->
	
	<!-- start: Favicon and Touch Icons -->
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="/static/admin/ico/apple-touch-icon-144-precomposed.png" />
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="/static/admin/ico/apple-touch-icon-114-precomposed.png" />
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="/static/admin/ico/apple-touch-icon-72-precomposed.png" />
	<link rel="apple-touch-icon-precomposed" href="/static/admin/ico/apple-touch-icon-57-precomposed.png" />
	<link rel="shortcut icon" href="/static/admin/ico/favicon.png" />
	<!-- end: Favicon and Touch Icons -->	
		
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<style>
		#content{
			min-height:600px;
		}
	</style>
</head>

<body>
		<!-- start: Header -->
	<div class="navbar">
		<div class="navbar-inner">
			<div class="container-fluid">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<a id="main-menu-toggle" class="hidden-phone open"><i class="icon-reorder"></i></a>		
				<div class="row-fluid">
				<a class="brand span2" href="index.html"><span>SimpliQ</span></a>
				</div>		
				<!-- start: Header Menu -->
				<div class="nav-no-collapse header-nav">
					<ul class="nav pull-right">
						<li class="dropdown hidden-phone">
							<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
								<i class="icon-warning-sign"></i>
							</a>
							<ul class="dropdown-menu notifications">
								<li class="dropdown-menu-title">
 									<span>You have 11 notifications</span>
								</li>	
                            	<li>
                                    <a href="#">
										<span class="icon blue"><i class="icon-user"></i></span>
										<span class="message">New user registration</span>
										<span class="time">1 min</span> 
                                    </a>
                                </li>
								<li>
                                    <a href="#">
										<span class="icon green"><i class="icon-comment-alt"></i></span>
										<span class="message">New comment</span>
										<span class="time">7 min</span> 
                                    </a>
                                </li>
								<li>
                                    <a href="#">
										<span class="icon green"><i class="icon-comment-alt"></i></span>
										<span class="message">New comment</span>
										<span class="time">8 min</span> 
                                    </a>
                                </li>
								<li>
                                    <a href="#">
										<span class="icon green"><i class="icon-comment-alt"></i></span>
										<span class="message">New comment</span>
										<span class="time">16 min</span> 
                                    </a>
                                </li>
								<li>
                                    <a href="#">
										<span class="icon blue"><i class="icon-user"></i></span>
										<span class="message">New user registration</span>
										<span class="time">36 min</span> 
                                    </a>
                                </li>
								<li>
                                    <a href="#">
										<span class="icon yellow"><i class="icon-shopping-cart"></i></span>
										<span class="message">2 items sold</span>
										<span class="time">1 hour</span> 
                                    </a>
                                </li>
								<li class="warning">
                                    <a href="#">
										<span class="icon red"><i class="icon-user"></i></span>
										<span class="message">User deleted account</span>
										<span class="time">2 hour</span> 
                                    </a>
                                </li>
								<li class="warning">
                                    <a href="#">
										<span class="icon red"><i class="icon-shopping-cart"></i></span>
										<span class="message">Transaction was canceled</span>
										<span class="time">6 hour</span> 
                                    </a>
                                </li>
								<li>
                                    <a href="#">
										<span class="icon green"><i class="icon-comment-alt"></i></span>
										<span class="message">New comment</span>
										<span class="time">yesterday</span> 
                                    </a>
                                </li>
								<li>
                                    <a href="#">
										<span class="icon blue"><i class="icon-user"></i></span>
										<span class="message">New user registration</span>
										<span class="time">yesterday</span> 
                                    </a>
                                </li>
                                <li class="dropdown-menu-sub-footer">
                            		<a>View all notifications</a>
								</li>	
							</ul>
						</li>
						<!-- start: Notifications Dropdown -->
						<li class="dropdown hidden-phone">
							<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
								<i class="icon-tasks"></i>
							</a>
							<ul class="dropdown-menu tasks">
								<li>
									<span class="dropdown-menu-title">You have 17 tasks in progress</span>
                            	</li>
								<li>
                                    <a href="#">
										<span class="header">
											<span class="title">iOS Development</span>
											<span class="percent"></span>
										</span>
                                        <div class="taskProgress progressSlim progressBlue">80</div> 
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
										<span class="header">
											<span class="title">Android Development</span>
											<span class="percent"></span>
										</span>
                                        <div class="taskProgress progressSlim progressYellow">47</div> 
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
										<span class="header">
											<span class="title">Django Project For Google</span>
											<span class="percent"></span>
										</span>
                                        <div class="taskProgress progressSlim progressRed">32</div> 
                                    </a>
                                </li>
								<li>
                                    <a href="#">
										<span class="header">
											<span class="title">SEO for new sites</span>
											<span class="percent"></span>
										</span>
                                        <div class="taskProgress progressSlim progressGreen">63</div> 
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
										<span class="header">
											<span class="title">New blog posts</span>
											<span class="percent"></span>
										</span>
                                        <div class="taskProgress progressSlim progressPink">80</div> 
                                    </a>
                                </li>
								<li>
                            		<a class="dropdown-menu-sub-footer">View all tasks</a>
								</li>	
							</ul>
						</li>
						<!-- end: Notifications Dropdown -->
						<!-- start: Message Dropdown -->
						<li class="dropdown hidden-phone">
							<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
								<i class="icon-envelope"></i>
							</a>
							<ul class="dropdown-menu messages">
								<li>
									<span class="dropdown-menu-title">You have 9 messages</span>
								</li>	
                            	<li>
                                    <a href="#">
										<span class="avatar"><img src="img/avatar.jpg" alt="Avatar" /></span>
										<span class="header">
											<span class="from">
										    	Łukasz Holeczek
										     </span>
											<span class="time">
										    	6 min
										    </span>
										</span>
                                        <span class="message">
                                            Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                        </span>  
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
										<span class="avatar"><img src="img/avatar2.jpg" alt="Avatar" /></span>
										<span class="header">
											<span class="from">
										    	Megan Abott
										     </span>
											<span class="time">
										    	56 min
										    </span>
										</span>
                                        <span class="message">
                                            Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                        </span>  
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
										<span class="avatar"><img src="img/avatar3.jpg" alt="Avatar" /></span>
										<span class="header">
											<span class="from">
										    	Kate Ross
										     </span>
											<span class="time">
										    	3 hours
										    </span>
										</span>
                                        <span class="message">
                                            Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                        </span>  
                                    </a>
                                </li>
								<li>
                                    <a href="#">
										<span class="avatar"><img src="img/avatar4.jpg" alt="Avatar" /></span>
										<span class="header">
											<span class="from">
										    	Julie Blank
										     </span>
											<span class="time">
										    	yesterday
										    </span>
										</span>
                                        <span class="message">
                                            Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                        </span>  
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
										<span class="avatar"><img src="img/avatar5.jpg" alt="Avatar" /></span>
										<span class="header">
											<span class="from">
										    	Jane Sanders
										     </span>
											<span class="time">
										    	Jul 25, 2012
										    </span>
										</span>
                                        <span class="message">
                                            Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                        </span>  
                                    </a>
                                </li>
								<li>
                            		<a class="dropdown-menu-sub-footer">View all messages</a>
								</li>	
							</ul>
						</li>
						<!-- end: Message Dropdown -->
						<li>
							<a class="btn" href="#">
								<i class="icon-wrench"></i>
							</a>
						</li>
						<!-- start: User Dropdown -->
						<li class="dropdown">
							<a class="btn account dropdown-toggle" data-toggle="dropdown" href="#">
								<div class="avatar"><img src="img/avatar.jpg" alt="Avatar" /></div>
								<div class="user">
									<span class="hello">Welcome!</span>
									<span class="name">Łukasz Holeczek</span>
								</div>
							</a>
							<ul class="dropdown-menu">
								<li class="dropdown-menu-title">
									
								</li>
								<li><a href="#"><i class="icon-user"></i> Profile</a></li>
								<li><a href="#"><i class="icon-cog"></i> Settings</a></li>
								<li><a href="#"><i class="icon-envelope"></i> Messages</a></li>
								<li><a href="login.html"><i class="icon-off"></i> Logout</a></li>
							</ul>
						</li>
						<!-- end: User Dropdown -->
					</ul>
				</div>
				<!-- end: Header Menu -->
				
			</div>
		</div>
	</div>
	<!-- start: Header -->
	
		<div class="container-fluid-full">
		<div class="row-fluid">
				
			<!-- start: Main Menu -->
			<div id="sidebar-left" class="span2">
				
				<div class="row-fluid actions">
													
					<input type="text" class="search span12" placeholder="...">
				
				</div>	
				
				<div class="nav-collapse sidebar-nav">
					<ul class="nav nav-tabs nav-stacked main-menu">
						<li>
							<a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet"> 基本设置</span></a>
							<ul>
								<li><a class="submenu" href="infrastructure.html"><i class="icon-hdd"></i><span class="hidden-tablet"> 基本设置</span></a></li>
							</ul>	
						</li>
						<li>
							<a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet"> 栏目设置</span></a>
							<ul style="display: block;">
								<li><a class="submenu" href="/index.php/admin/cate/clst"><i class="icon-hdd"></i><span class="hidden-tablet"> 栏目列表</span></a></li>								
								<li><a class="submenu" href="<?php echo url('cate/add'); ?>"><i class="icon-hdd"></i><span class="hidden-tablet"> 添加栏目</span></a></li>								
							</ul>	
						</li>
						<li>
							<a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet"> 模型设置</span></a>
							<ul style="display: block;">
								<li><a class="submenu" href="/index.php/admin/cmodel/mlst"><i class="icon-hdd"></i><span class="hidden-tablet"> 模型列表</span></a></li>								
								<li><a class="submenu" href="<?php echo url('cmodel/add'); ?>"><i class="icon-hdd"></i><span class="hidden-tablet"> 添加模型</span></a></li>								
							</ul>	
						</li>
						<li><a href="ui.html"><i class="icon-eye-open"></i><span class="hidden-tablet"> UI Features</span></a></li>
						<li><a href="widgets.html"><i class="icon-dashboard"></i><span class="hidden-tablet"> Widgets</span></a></li>
						<li>
							<a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet"> Example Pages</span> <span class="label">3</span></a>
							<ul>
								<li><a class="submenu" href="infrastructure.html"><i class="icon-hdd"></i><span class="hidden-tablet"> Infrastructure</span></a></li>
								<li><a class="submenu" href="messages.html"><i class="icon-envelope"></i><span class="hidden-tablet"> Messages</span></a></li>
								<li><a class="submenu" href="tasks.html"><i class="icon-tasks"></i><span class="hidden-tablet"> Tasks</span></a></li>
							</ul>	
						</li>
						<li><a href="form.html"><i class="icon-edit"></i><span class="hidden-tablet"> Forms</span></a></li>
						<li><a href="chart.html"><i class="icon-list-alt"></i><span class="hidden-tablet"> Charts</span></a></li>
						<li><a href="typography.html"><i class="icon-font"></i><span class="hidden-tablet"> Typography</span></a></li>
						<li><a href="gallery.html"><i class="icon-picture"></i><span class="hidden-tablet"> Gallery</span></a></li>
						<li><a href="table.html"><i class="icon-align-justify"></i><span class="hidden-tablet"> Tables</span></a></li>
						<li><a href="calendar.html"><i class="icon-calendar"></i><span class="hidden-tablet"> Calendar</span></a></li>
						<li><a href="file-manager.html"><i class="icon-folder-open"></i><span class="hidden-tablet"> File Manager</span></a></li>
						<li><a href="icon.html"><i class="icon-star"></i><span class="hidden-tablet"> Icons</span></a></li>
						<li><a href="login.html"><i class="icon-lock"></i><span class="hidden-tablet"> Login Page</span></a></li>
					</ul>
				</div>
			</div>
			<!-- end: Main Menu -->
						
			<!-- start: Content -->
			<div id="content" class="span10">
				<div class="box span12">
					<div class="box-header">
						<h2><i class="icon-table"></i>模型列表</h2>
					</div>
					<div class="box-content">
						<div id="DataTables_Table_0_wrapper" class="dataTables_wrapper" role="grid"><div class="row-fluid"><div class="span6"><div id="DataTables_Table_0_length" class="dataTables_length"><label><select size="1" name="DataTables_Table_0_length" aria-controls="DataTables_Table_0"><option value="10" selected="selected">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> records per page</label></div></div><div class="span6"><div class="dataTables_filter" id="DataTables_Table_0_filter"><label>Search: <input type="text" aria-controls="DataTables_Table_0"></label></div></div></div><table class="table table-striped table-bordered bootstrap-datatable datatable dataTable" id="DataTables_Table_0" aria-describedby="DataTables_Table_0_info">
						  <thead>
							  <tr role="row"><th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Username: activate to sort column descending" style="width: 5%;text-align:center;">模型id</th><th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Date registered: activate to sort column ascending" style="width:40%;text-align:center;">模型名称</th><th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Role: activate to sort column ascending" style="width: 20%; text-align:center">附加表</th><th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 20%; text-align:center">状态</th><th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Actions: activate to sort column ascending" style="text-align:center;">操作</th></tr>
						  </thead>   
					<style>
						.cate_list td:first-child span{
							display: inline-block;
							width:16px;
							height: 16px;
							margin:0 auto;
							text-align: center;
							line-height: 16px;
							border:1px solid #000;
							vertical-align: middle;
						}

						.cate_list td{
							vertical-align: middle;							
						}

						.cate_list td:first-child{
							line-height:45px;
							text-align: center;	
							cursor: pointer;													
						}
					</style>
					  <tbody role="alert" aria-live="polite" aria-relevant="all" class='cate_list'>
					  		<?php if(is_array($data) || $data instanceof \think\Collection || $data instanceof \think\Paginator): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?>
						  		<tr class="odd">
									<td class="  sorting_1" style='text-align:center;'><?php echo $val['id']; ?></td>
									<td class="center "><?php echo $val['m_name']; ?></td>
									<td class="center " style='text-align:center;'><?php echo $val['m_table']; ?></td>
									<td class="center " style='text-align:center;'>
										<span class="label <?php if(($val['m_status'] == 1)): ?>label-important<?php else: ?>label-success<?php endif; ?>" style='cursor:pointer;'><?php if(($val['m_status'] == 0)): ?>未启用<?php else: ?>启用<?php endif; ?></span>
										<input type="hidden" value='<?php echo $val['id']; ?>' class='cateid'>
									</td>
									<td class="center" style='text-align:center'>									
										<a class="btn btn-info" href="<?php echo url('edit',['m_id'=>$val['id']]); ?>">
											<i class="icon-edit "></i>                                            
										</a>
										<a class="btn btn-danger" href="<?php echo url('del',['id'=>$val['id']]); ?>">
											<i class="icon-trash "></i> 
										</a>
									</td>								
								</tr>
							<?php endforeach; endif; else: echo "" ;endif; ?>
					</tbody>
					</table>
					<style>						
						.pagination li{
							display: inline-block;	
							padding:0 8px;						
						}
					</style>
					</div>            
					</div>
				</div>
			</div>
			<!-- end: Content -->
				
				</div><!--/fluid-row-->
				
		<div class="modal hide fade" id="myModal">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">×</button>
				<h3>Settings</h3>
			</div>
			<div class="modal-body">
				<p>Here settings can be configured...</p>
			</div>
			<div class="modal-footer">
				<a href="#" class="btn" data-dismiss="modal">Close</a>
				<a href="#" class="btn btn-primary">Save changes</a>
			</div>
		</div>
		
		<div class="clearfix"></div>
		
		<footer>
			<p>
				<span style="text-align:left;float:left">Copyright &copy; 2014.Company name All rights reserved.More Templates <a href="http://www.cssmoban.com/" target="_blank" title="模板之家">模板之家</a> - Collect from <a href="http://www.cssmoban.com/" title="网页模板" target="_blank">网页模板</a></span>
			</p>

		</footer>
				
	</div><!--/.fluid-container-->

	<!-- start: JavaScript-->
		<script src="/static/admin/js/jquery-1.10.2.min.js"></script>
		<script src="/static/admin/js/jquery-migrate-1.2.1.min.js"></script>	
		<script src="/static/admin/js/jquery-ui-1.10.3.custom.min.js"></script>	
		<script src="/static/admin/js/jquery.ui.touch-punch.js"></script>	
		<script src="/static/admin/js/modernizr.js"></script>	
		<script src="/static/admin/js/bootstrap.min.js"></script>	
		<script src="/static/admin/js/jquery.cookie.js"></script>	
		<script src='js/fullcalendar.min.js'></script>	
		<script src='js/jquery.dataTables.min.js'></script>
		<script src="/static/admin/js/excanvas.js"></script>
		<script src="/static/admin/js/jquery.flot.js"></script>
		<script src="/static/admin/js/jquery.flot.pie.js"></script>
		<script src="/static/admin/js/jquery.flot.stack.js"></script>
		<script src="/static/admin/js/jquery.flot.resize.min.js"></script>
		<script src="/static/admin/js/jquery.flot.time.js"></script>
		
		<script src="/static/admin/js/jquery.chosen.min.js"></script>	
		<script src="/static/admin/js/jquery.uniform.min.js"></script>		
		<script src="/static/admin/js/jquery.cleditor.min.js"></script>	
		<script src="/static/admin/js/jquery.noty.js"></script>	
		<script src="/static/admin/js/jquery.elfinder.min.js"></script>	
		<script src="/static/admin/js/jquery.raty.min.js"></script>	
		<script src="/static/admin/js/jquery.iphone.toggle.js"></script>	
		<script src="/static/admin/js/jquery.uploadify-3.1.min.js"></script>	
		<script src="/static/admin/js/jquery.gritter.min.js"></script>	
		<script src="/static/admin/js/jquery.imagesloaded.js"></script>	
		<script src="/static/admin/js/jquery.masonry.min.js"></script>	
		<script src="/static/admin/js/jquery.knob.modified.js"></script>	
		<script src="/static/admin/js/jquery.sparkline.min.js"></script>	
		<script src="/static/admin/js/counter.min.js"></script>	
		<script src="/static/admin/js/raphael.2.1.0.min.js"></script>
		<script src="/static/admin/js/justgage.1.0.1.min.js"></script>	
		<script src="/static/admin/js/jquery.autosize.min.js"></script>	
		<script src="/static/admin/js/retina.js"></script>
		<script src="/static/admin/js/jquery.placeholder.min.js"></script>
		<script src="/static/admin/js/wizard.min.js"></script>
		<script src="/static/admin/js/core.min.js"></script>	
		<script src="/static/admin/js/charts.min.js"></script>	
		

		<script>			
			$(function(){			
				var sec=$("#selecttype");
				var rect=$('.rect');
				sec.change(function(){
					// console.log($(this).val());
					if($(this).val()==2){					
						rect.fadeIn();
					}
				});

				var cate=$('.cate_list');
				var fadeout=cate.find('.odd td:nth-of-type(4) .label');				
				fadeout.click(function(){
					var n=$(this).html();
					var m_id=$(this).next().val();
					
					if(n=="未启用"){
						$(this).html('启用')
						.css('background','red');
						chide(m_id,1);						
					}
					else{
						$(this).html('未启用')
						.css('background','#78cd51');
						chide(m_id,0);
					}
				});

				function chide(m_id,n){
					$.ajax({
						datetype:'json',
						data:{'m_id':m_id,'act':n},
						url:'act'
					}).done(function(data){						
					});
				}

				var cate_list=$('.cate_list');
				var lsst=cate_list.find('tr[level=0]').show();

				var o=cate_list.find('td:first-child span');
				o.click(function(){
					if($(this).html()=='+'){
						var aid=$(this).parents('tr').attr('aid');
						cate_list.find('tr[pid='+aid+']').show();
						$(this).html('-');
					}
					else{
						var aid=$(this).parents('tr').attr('aid');
						cate_list.find('tr[pid='+aid+']').hide();
						$(this).html('+');	
					}
				})				
			});
		</script>

		<script src="/static/admin/js/custom.min.js"></script>
	<!-- end: JavaScript-->
	
		
</body>
</html>