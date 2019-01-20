
<div class="Rectangle-2 col-12 col-sm-12 col-md-12 col-lg-9 col-xl-8">
    {{ Form::open(array('route' => 'leads.store', 'method'=>'POST')) }}
        @csrf
        {{ Form::label('access_data', trans('labels.access_data'),  ['class' => 'Dados-de-acesso']) }}
        <div class="form-group">
            {{ Form::input('text', 'name', null, [
                'placeholder' => trans('placeholders.name'), 
                'class' => 'form-control Rectangle-3 Nome'. "$errors->has('name') ? ' is-invalid' : ''", 
                'maxlength' => '150', 
                'required' => false,
                'autofocus' => true,
                'value' => old('name'),
            ]) }}
            @if ($errors->has('name'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
            @endif
        </div>
        <div class="form-group">
            {{ Form::input('email', 'email', null, [
                'placeholder' => trans('placeholders.email'), 
                'class' => 'form-control Rectangle-3'. "$errors->has('email') ? ' is-invalid' : ''", 
                'maxlength' => '150', 
                'required' => false,
                'autofocus' => true,
                'value' => old('email'),
            ]) }}
            @if ($errors->has('email'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </div>
        <div class="form-group">
            {{ Form::input('password', 'password', null, [
                'placeholder' => trans('placeholders.password'), 
                'class' => 'form-control Rectangle-3' . "$errors->has('password') ? ' is-invalid' : ''", 
                'maxlength' => '150', 
                'required' => false,
                'autofocus' => true,
                'value' => old('email'),
                'required'
            ]) }}
        </div>
        <div class="form-group ">
            {{ Form::input('password', 'password-confirm', null, [
                'placeholder' => trans('placeholders.password_confirm'), 
                'class' => 'form-control Rectangle-3', 
                'maxlength' => '150', 
                'required' => false,
                'autofocus' => true,
                'value' => old('email'),
                'required'
            ]) }}
        </div>
        {{ Form::label('company_data', trans('labels.company_data'),  ['class' => 'Dados-da-empresa']) }}

        <div class="form-group">
            <the-mask name="cnpj" id="cnpj" class="form-control" placeholder="{{trans('placeholders.cnpj')}}" :mask="['##.###.###/####-##']" />                          
        </div>
        <div class="form-group">
            {{ Form::input('text', 'social_name', null, [
                'placeholder' => trans('placeholders.social_name'), 
                'class' => 'form-control ', 
                'maxlength' => '150', 
                'required' => false,
                'autofocus' => true,
            ]) }}                            
        </div>
        <div class="form-group">
            {{ Form::input('text', 'fantasy_name', null, [
                'placeholder' => trans('placeholders.fantasy_name'), 
                'class' => 'form-control ', 
                'maxlength' => '150', 
                'required' => false,
                'autofocus' => true,
            ]) }}                            
        </div>
        <div class="form-group">
            {{ Form::input('url', 'site', null, [
                'placeholder' => trans('placeholders.site'), 
                'class' => 'form-control ', 
                'maxlength' => '150', 
                'required' => false,
                'autofocus' => true,
            ]) }}                            
        </div>
        <div class="form-group">
            <the-mask name="phone" id="phone" placeholder="{{trans('placeholders.telephone')}}" class="form-control" :mask="['(##) ####-####', '(##) #####-####']" />                          
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-6">
                    <div class="row">
                        <div class="checkbox">
                            {{ Form::checkbox('accept_terms', '1')}}
                            {{ Form::label('company_data', trans('labels.agree'),  ['class' => 'text-style-1']) }} 
                            {{ Form::label('company_data', trans('labels.service_terms'),  ['class' => 'Concordo-com-os-term' ]) }}
                        </div>
                    </div>
                </div>
                <div class="responsive col-12 col-md-12 col-lg-6 ">
                    {{ Form::submit(trans('buttons.create_account'), array('class' => 'Rectangle-12 CRIAR-CONTA')) }} 
                </div>
            </div>
        </div>
    {{ Form::close() }}
</div>

