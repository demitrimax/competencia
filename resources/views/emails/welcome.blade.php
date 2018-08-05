@component('mail::message')
# Registro exitoso

Gracias por registrarse, hemos verificado y su pago ha sido aprobado.

Podrá iniciar sesión en el siguiente vinculo.

@component('mail::button', ['url' => 'http://www.maxeffortchallenge.com/iniciarsesion'])
Iniciar Sesión
@endcomponent

Si tiene alguna duda, podrá ponerse en contacto al correo eléctronico admin@maxeffortchallenge.com

Gracias,<br>
El equipo de Max Effort Challenge
@endcomponent
