@extends('admin.public.parent')
@section('content')
            <div class="row-content am-cf">
                <div class="row">
                    <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
                        <div class="widget am-cf">
                            <div class="widget-head am-cf">
                                <div class="widget-title  am-cf">用户列表</div>
                            </div>
                            <div class="widget-body  am-fr">
                                <div class="am-u-sm-12 am-u-md-12 am-u-lg-3">
                                    <form action="/admin/users" method="post">
                                        {{ csrf_field() }}
	                                    <div class="am-input-group am-input-group-btnsm tpl-form-border-form cl-p">
	                                        <input type="text" class="am-form-field" name="name">
	                                        <span class="am-input-group-btn">
	                                            <input class="am-btn  am-btn-default am-btn-success tpl-table-list-field am-icon-search" type="submit">
	                                        </span>
	                                    </div>
                                    </form>
                                </div>
                                <div class="am-u-sm-11">
                                    <table width="100%" class="am-table am-table-compact am-table-striped tpl-table-black " id="example-r">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>昵称</th>
                                                <th>手机号</th>
                                                <th>操作</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        	@foreach($users as $user)
	                                            <tr class="gradeX">
	                                                <td>{{ $user->user_id }}</td>
	                                                <td>{{ $user->nickname }}</td>
	                                                <td>{{ $user->login_name }}</td>
	                                                <td>
	                                                    <div class="tpl-table-black-operation">
	                                                        <a href="javascript:;">
	                                                             启用
	                                                        </a>
	                                                        <a href="{javascript:;}" class="tpl-table-black-operation-del">
	                                                             删除
	                                                        </a>
	                                                    </div>
	                                                </td>
	                                            </tr>
                                            @endforeach
                                                                               
                                            <!-- more data -->
                                        </tbody>
                                    </table>
                                    
                                </div>
                                <div class="am-u-lg-1 am-cf">
                                    <div class="am-fr">
										{{ $users->appends($where)->links() }}
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                
@endsection