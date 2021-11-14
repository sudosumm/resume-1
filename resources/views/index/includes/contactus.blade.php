<!--start contact us-->
<div id="contact_us">
    <br><br>
    <button type="button" class="btn btn-outline-dark btn-block" data-toggle="modal" data-target="#contact1">تماس با من</button>
    <div class="modal fade" id="contact1">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content modal-contact">
                <div class="modal-header">
                    <h3 class="modal-title">تماس با من</h3>
                </div>
                <div class="modal-body">
                    <span class="d-block">شماره تماس: <kbd>09365381442</kbd></span>
                    <span class="d-block">آدرس: <kbd>ایران - تهران ...</kbd></span>
                    <span class="d-block">ایمیل: <kbd>mohammadnezhadm2@gmail.com</kbd></span>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">بستن</button>
                </div>
            </div>
        </div>
    </div>


    {!! Form::open(['url' => url('index/create' ) , 'method' => 'post' ]) !!}

        <div class="form-group col-lg-12 col-md-12 mt-3">
{{--            <label for="name">نام و نام خانوادگی</label>--}}
           {!! Form::text('name', null , ['class' => 'form-control w-100 d-black', 'type' =>'text' , 'id' => 'name' ,'placeholder' =>'نام و نام خانوادگی را وارد کنید']) !!}
        </div>

        <div class="form-group col-lg-12 col-md-12 mt-3">
            {!! Form::text('email', null , ['class' => 'form-control w-100', 'type' =>'email' , 'id' => 'email' ,'placeholder' =>'ایمیل را وارد کنید' ]) !!}
{{--            <input class="form-control w-100" type="email" placeholder="ایمیل" name="email" required>--}}
        </div>

        <div class="form-group col-lg-12 col-md-12 mt-3">
            {!! Form::text('subject', null , ['class' => 'form-control w-100', 'type' =>'text' , 'id' => 'subject' ,'placeholder' =>'موضوع را وارد کنید' ]) !!}
{{--            <input class="form-control w-100" type="text" placeholder="موضوع" name="subject" required>--}}
        </div>

        <div class="form-group col-lg-12 col-md-12 mt-3" style="resize: none">
            {!! Form::textarea('comment', null , ['class' => 'form-control w-100', 'type' =>'text' , 'id' => 'comment' ,'placeholder' =>'متن را وارد کنید' ]) !!}
{{--            <textarea name="comment" id="comment" class="form-control w-100" placeholder="نظرات"></textarea>--}}
        </div>

        <div class="d-block mx-auto my-3">
            <button class="btn btn-success send" type="submit">ارسال</button>
            <button class="btn btn-warning send" type="reset">پاک کردن</button>
        </div>

    {!! Form::close() !!}


    <br><br>
</div>
<!--end contact us-->
