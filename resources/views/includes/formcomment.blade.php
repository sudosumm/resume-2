{!! Form::open(['url' => route ('comment.store' ) , 'method' => 'POST' , 'id'=>'comment-form']) !!}
<div class="col-md-5 ">
    {!! Form::text('name', null , ['class' => 'form-control  input-box', 'type' =>'text' , 'id' => 'name','placeholder' =>'نام و نام خانوادگی' ]) !!}

</div>

<div class="col-md-5 ">
    {!! Form::text('email', null , ['class' => 'form-control input-box', 'type' =>'email' , 'id' => 'email' ,'placeholder' =>'ایمیل را وارد کنید' ]) !!}

</div>

<div class="col-md-10 ">
    {!! Form::textarea('message', null , ['class' => 'form-control textarea-box' , 'rows' => '8' , 'type' =>'text' , 'id' => 'message' ,'placeholder' =>'متن را وارد کنید' ]) !!}

</div>
<div class="col-md-5 comment-require ">
    <p>تمامی فیلدها اجباری هستند .</p>
</div>
<div class="col-md-5 comment-require ">
    <button class="btn pull-left" type="submit">ارسال پیام</button>
</div>

{!! Form::close() !!}
