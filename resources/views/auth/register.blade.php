<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="Rectangle-2">
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
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
                        <div class="form-group">
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
                            {{ Form::input('text', 'cnpj', null, [
                                'placeholder' => trans('placeholders.cnpj'), 
                                'class' => 'form-control ', 
                                'maxlength' => '150', 
                                'required' => false,
                                'autofocus' => true,
                            ]) }}                            
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
                            {{ Form::input('text', 'site', null, [
                                'placeholder' => trans('placeholders.site'), 
                                'class' => 'form-control ', 
                                'maxlength' => '150', 
                                'required' => false,
                                'autofocus' => true,
                            ]) }}                            
                        </div>
                        <div class="form-group">
                            {{ Form::input('text', 'telephone', null, [
                                'placeholder' => trans('placeholders.telephone'), 
                                'class' => 'form-control ', 
                                'maxlength' => '150', 
                                'required' => false,
                                'autofocus' => true,
                            ]) }}                            
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

