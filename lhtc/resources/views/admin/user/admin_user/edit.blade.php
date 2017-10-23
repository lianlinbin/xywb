@extends('admin.public.parent')
@section('content')
                <!-- Text Input -->
                <div class="block-area" id="text-input">
                    <h3 class="block-title">Text Input</h3>
                    
                    <p>Text Inputs with different sizes by height and column.</p>
                    
                    <form action="{{ url('users/'.$user->id) }}" method="post">
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
                        <div class='row'>
                            <div class="col-lg-6">
                                <input type="text" class="form-control m-b-10" name="name" value="{{ $user->name }}">
                                <input type="text" class="form-control m-b-10" name="age" value="{{ $user->age }}">
                                <select class="form-control m-b-10" name="sex">
                                    <option>--请选择--</option>
                                    <option value="1" @if($user->sex == 1) selected @endif>男</option>
                                    <option value="2" @if($user->sex == 2) selected @endif>女</option>
                                </select>
                                <input type="submit" class="btn btn-info" value="修改用户">
                            </div>
                        </div>
                    </form>
                    
                </div>
@endsection
            