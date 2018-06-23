<div class="form-group m-form__group row">
    <div class="col-lg-12">
        <label class="required">Nombre</label>
        {{ Form::text('name', '',array('class'=>'form-control m-input','id'=>'nombre','placeholder'=>'Ingrese su nombre')) }} 
        <div class="form-control-feedback text-danger" style="display:none;text-transform:ca;" id="error_name"></div>
    </div>
</div>
<div class="form-group m-form__group row">
    <div class="col-lg-12">
        <label class="required">Email</label>
        {{ Form::text('email', '',array('class'=>'form-control m-input','id'=>'email','placeholder'=>'Ingrese su email')) }} 
        <div class="form-control-feedback text-danger" style="display:none;text-transform:ca;" id="error_email"></div>
    </div>
</div>
<div class="form-group m-form__group row">
    <div class="col-lg-12">
        <label class="required">Teléfono</label>
        {{ Form::text('telefono', '',array('class'=>'form-control m-input','id'=>'telefono','placeholder'=>'Ingrese su teléfono')) }} 
        <div class="form-control-feedback text-danger" style="display:none;text-transform:ca;" id="error_telefono"></div>
    </div>
</div>
<div class="form-group m-form__group row">
    <div class="col-lg-12">
        <label class="required">Contraseña</label>
        {{ Form::password('contrasena', array('class'=>'form-control m-input','id'=>'contrasena','placeholder'=>'Ingrese su contraseña','autocomplete'=>'new-password')) }} 
        <div class="form-control-feedback text-danger" style="display:none;text-transform:ca;" id="error_password"></div>
    </div>
</div>
<div class="form-group m-form__group row">
    <div class="col-lg-12">
        <label class="required">Tipo de Usuario</label>
        {{ Form::select('tipo_usuario',$tipo_usuario,'',array('class'=>'form-control m-input','id'=>'tipo_usuario','placeholder'=>'Seleccione')) }} 
        <div class="form-control-feedback text-danger" style="display:none;text-transform:ca;" id="error_tipo_usuario"></div>
    </div>
</div>