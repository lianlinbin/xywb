@extends('admin.public.parent')
@section('content')
            
<div class="row-content am-cf">
    <div class="row">
        <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
            <div class="widget am-cf">
                <div class="widget-head am-cf">
                    <div class="widget-title  am-cf">微博</div>
                </div>
                
                <div class="widget-body  am-fr">
                    <div class="am-u-sm-12 am-u-md-12 am-u-lg-3">
                        <div class="am-input-group am-input-group-sm tpl-form-border-form cl-p">
                            
                            <input type="text" class="am-form-field ">
                            
                            <span class="am-input-group-btn">
                            
                            <button class="am-btn  am-btn-default am-btn-success tpl-table-list-field am-icon-search" type="button"></button>
                            </span>
                        </div>
                    </div>
                    <br>
                    <br>
                    <div class="am-u-sm-12">
                        <div class="row">
                            <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
                            <div class="widget am-cf">

                            <!-- 表单 -->
                            <div class="widget-head am-cf">
                                <div class="widget-title am-fl">转发列表</div>
                                <div class="widget-function am-fr">
                                <a href="javascript:;" class="am-icon-cog"></a>
                                </div>
                            </div>
                            <form name='myform' action="" method='post' style='display:none'>
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                            </form>
                            <div class="widget-body  widget-body-lg am-fr">
                                <table width="100%" class="am-table am-table-compact am-table-striped tpl-table-black " id="example-r">
                                    <thead>
                                        <tr>
                                            <th>微博</th>
                                            <th>转发人</th>
                                            <th>描述</th>
                                            <th>转发数</th>
                                            <th>操作</th>
                                        </tr>
                                    </thead>
                                    <tbody>  
                                        @foreach($zip as $user)              
                                        <tr class="gradeX">
                                            <td>{{ $user->wb_id }}</td>
                                            <td>{{ $user->user_id }}</td>
                                            <td>{{ $user->describe }}</td>
                                            <td>{{ $user->joint }}</td>
                                            <td>
                                                <div class="tpl-table-black-operation">
                                                    <a href="javascript:;">
                                                        <i class="am-icon-pencil"></i> 参看
                                                    </a>
                                                    <a href="javascript:doWbDel({{ $user->wb_id }})" class="tpl-table-black-operation-del">
                                                        <i class="am-icon-trash"></i> 删除
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            </div>
                            </div>
                        </div>
                    </div>

                    <div class="am-u-lg-12 am-cf">

                        分页
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection