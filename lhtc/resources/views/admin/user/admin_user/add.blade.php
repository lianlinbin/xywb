@extends('admin.public.parent')
@section('content')
                <!-- Text Input -->
                <div class="block-area" id="text-input">
                    <h3 class="block-title">Text Input</h3>
                    
                    <p>Text Inputs with different sizes by height and column.</p>
                    
                    <form action="/users" method="post">
                        {{ csrf_field() }}
                        <div class='row'>
                            <div class="col-lg-6">
                                <input type="text" class="form-control m-b-10" name="name">
                                <input type="text" class="form-control m-b-10" name="age">
                                <select class="form-control m-b-10" name="sex">
                                    <option>--请选择--</option>
                                    <option value="1">男</option>
                                    <option value="2">女</option>
                                </select>
                                <input type="submit" class="btn btn-info" value="添加用户">
                            </div>
                        </div>
                    </form>
                    
                </div>
@endsection
