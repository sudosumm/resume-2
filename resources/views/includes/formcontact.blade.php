{!! Form::open(['url' => route ('contact.store' ) , 'method' => 'POST' , 'id'=>'comment-form']) !!}

<!-- contact result -->
<div id="contact-result"></div>
<!-- end of contact result -->

<div class="col-md-12">
    {!! Form::text('name', null , ['class' => 'form-control  input-box', 'type' =>'text' , 'id' => 'name','placeholder' =>'نام و نام خانوادگی' ]) !!}
    {{--        <input class="form-control input-box" type="text" name="name" placeholder="نام و نام خانوادگی">--}}
</div>
<div class="col-md-12">
    {!! Form::text('email', null , ['class' => 'form-control input-box', 'type' =>'email' , 'id' => 'email' ,'placeholder' =>'آدرس ایمیل' ]) !!}
    {{--        <input class="form-control input-box" type="email" name="email" placeholder="آدرس ایمیل">--}}
</div>
<div class="col-md-12">
    {!! Form::text('phone', null , ['class' => 'form-control input-box', 'type' =>'tel' , 'id' => 'phone' ,'placeholder' =>'شماره تلفن' ]) !!}
    {{--        <input class="form-control input-box" type="tel" name="phone" placeholder="شماره تلفن">--}}
</div>

<div class="col-md-12">
    {!! Form::text('subject', null , ['class' => 'form-control  input-box', 'type' =>'text' , 'id' => 'subject','placeholder' =>'موضوع پیغام' ]) !!}
    {{--        <input class="form-control input-box" type="text" name="subject" placeholder="موضوع پیغام">--}}
</div>

<div class="col-md-12">
    {!! Form::textarea('message', null , ['class' => 'form-control textarea-box' , 'rows' => '8' , 'type' =>'text' , 'id' => 'message' ,'placeholder' =>'پیغام خود را در این جا بنویسید . . .' ]) !!}
    {{--        <textarea class="form-control textarea-box" rows="8" name="message" placeholder="پیغام خود را در این جا بنویسید ..."></textarea>--}}
    <button class="btn" type="submit">ارسال</button>
</div>
{!! Form::close() !!}
