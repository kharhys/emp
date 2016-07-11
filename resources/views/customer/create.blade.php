<form class = "steps-form">
  <div class = "step-form" data-next = ".step-form.step-two">
    <h2>Step 1</h2>
    <input type="email" placeholder = "Correo electrónico" class = "form-input">
    <input type="password" placeholder = "Contraseña" class = "form-input">
    <input type="password" placeholder = "Confirmar contraseña" class = "form-input">
    <button class = "form-input btn next-step" type = "button">Continuar</button>
  </div>
  <div class = "step-form step-two" data-next = ".step-form.step-three">
    <h2>Step 2</h2>
    <input type="email" placeholder = "Correo electrónico" class = "form-input">
    <input type="password" placeholder = "Contraseña" class = "form-input">
    <input type="password" placeholder = "Confirmar contraseña" class = "form-input">
    <button class = "form-input btn next-step" type = "button">Continuar</button>
  </div>
  <div class = "step-form step-three">
    <h2>Final Step</h2>
    <input type="text" placeholder = "Nombre" class = "form-input">
    <input type="text" placeholder = "Dirección" class = "form-input">
    <input type="phone" placeholder = "Celular" class = "form-input">
    <input type="text" placeholder = "Rut" class = "form-input">
    <button type = "submit" class = "form-input btn">Registrar</button>
  </div>
</form>
