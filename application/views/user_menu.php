                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <span class="fa fa-user fa-fw fa-2x"></span>
                    <span><?=explode('@', $CurrentUser->email)[0]?></span>
                    </a>
                     <ul class="dropdown-menu">
                     	<li class="user-header">
                     		 	<span class="btn-glyphicon fa fa-user fa-4x img-circle text-aqua"></span>
                     		 <p><span><?=$CurrentUser->first_name.' '.$CurrentUser->last_name?></span>
                     		 	<small></small>
                     		 </p>
                     	</li>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                  	<div class="pull-left">
                      <a href="<?=base_url()?>notification/view_all" class="btn btn-default btn-flat"><span class="fa fa-bell-o fa-fw"></span>Notifications</a>
                    </div>
                    <div class="pull-right">
                      <a href="<?=base_url('acl/logout')?>" class="btn btn-default btn-flat"><span class="fa fa-sign-out fa-fw"></span>Sign out</a>
                    </div>
                  </li>
                  </ul>