
             
<div class="col-md-10 col-md-offset-2 well">
 

    
    <?php echo $this->Form->create($user,['role="form" data-toggle="validator"']); ?>
   
    
    <fieldset>
		<legend><H1>Nuevo usuario</H1></legend>
		
    <div class="form-group">
    <?php 
    echo $this->Form->input('first_name', array(
			'label' => 'Nombre',
			'class' => 'form-control',
                        'placeholder' => 'Introduce el nombre'	
		));
    ?>
    <div class="help-block with-errors"></div>
    </div>
                
    <div class="form-group has-feedback">
    <?php 
    echo $this->Form->input('last_name', array(
			'label' => 'Apellidos',
			'class' => 'form-control',
                        'placeholder' => 'Introduce los apellidos'	
		));
    ?>
    <div class="help-block with-errors"></div>
    </div>  
                
                
     
    <div class="form-group">
       <label for="last-name">Contraseña</label>
    <div class="form-inline row">
        
    <div class="form-group col-sm-4">
    <?php 
    echo $this->Form->input('password', array(
			'label' => '',
			'class' => 'form-control',
                        'type' => 'password',
                        'data-minlength' => '6',
                        'id' => 'inputPassword',
                        'placeholder' => 'Introduce Contraseña'	
		));
    ?>
    <div class="help-block">Minimo 6 caracteres</div>
    </div> 
        <div class="form-group col-sm-6">
        <input type="password" class="form-control" id="inputPasswordConfirm" data-match="#inputPassword" data-match-error="Ups! Las contraseñas no coinciden" placeholder="Repita Contraseña" required>
        <div class="help-block with-errors"></div>
      
      </div>
    </div> 
    </div> 

    <div class="form-group">
    <?php 
    echo $this->Form->input('email', array(
			'label' => 'Email',
			'class' => 'form-control',
                        'placeholder' => 'Introduce un email'	
		));
    ?>
    <div class="help-block with-errors"></div>
    </div>
   
                
    <div class="form-group">
    <?php 
    echo $this->Form->input('role', array(
			'label' => 'Rol',
			'class' => 'form-control',
                        'placeholder' => 'Introduce el rol de usuario'	
		));
    ?>
    <div class="help-block with-errors"></div>
    </div>
                
                
 
   
                
                
                
                
 <?php echo $this->Form->end(); ?>               
 
     <?php echo $this->Form->submit('Alta de usuario', array(
			'div' => 'form-group',
			'class' => 'btn btn-primary'
)); ?> 
    
    
    
   
    
    
    
</div>  

</div>