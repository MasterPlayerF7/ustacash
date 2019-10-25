# USTACASH

En el presente documento se explican las caracteristicas generales del sistema a desarrollar:

## Requerimientos funcionales

Primeramente, ustacash a de ser una aplicacion la cual pueda permitir los tres siguientes modulos de funcionalidades con sus items y subitems incluidos

+ Manejo de cuentas por parte de los usuarios
    + Creacion de cuenta
        + Nombres
        + Apellidos
        + Numero de documento de identidad
        + Email
        + Contraseña
        + Numero de celular
        + Localización

    + Borrado de cuenta
        + Pre-logeo usuario (requerido)
        + Contraseña del usuario
        + Confirmacion de borrado de cuenta

    + Actualizacion de datos
        + Pre-logeo usuario (requerido)
        + Llenado del formulario de actualizacion (igual que el de creacion)
        + Contraseña del usuario

    + Actualizacion de contraseña
        + Pre-logeo usuario (requerido)
        + Contraseña nueva
        + Contraseña nueva (confirmación)
        + Contraseña anterior

    + Generacion de reportes asociados a la cuenta
        + Reporte de transferencias (uso de JSON en campo tipo 'text')
        + Reporte de datos del usuario (visible por los administradores)
        
+ Transacciones
    + Transferencia de fondos de una cuenta a otra
        + Pre-Logeo usuario (requerido)
        + Cuenta de destino (numero de mobil)
        + Monto de transferencia

    + Deposito de fondos (uso de postman para testeo)
        + Pre-Logeo o Verificacion del administrador (requerido)
        + Monto de deposito
    
    + Retiro de fondos
        + Pre-Logeo usuario (requerido)
        + Entidad asociada a ustacash *(revision en DB)*
        + Reporte de fondos *(visualizacion)*
        + Monto de retiro
    
    + Solicitud de transferencia
        + Pre-Logeo usuario (requerido)
        + Cuenta (por numero de mobil)
    
+ Manejo de cuentas por parte de administradores
    + Creacion de administrador (uso de postman para testeo)
        + Pre-Logueo o Verificiacion superadmin (requerido)
        + Nombre de admin a crear
        + Contraseña de admin a crear
        + Verificacion de contraseña admin a crear
        
    + Cambio de contraseñas en cuentas de usuario
        + Pre-Logeo admin (requerido)
        + Numero mobil del usuario
        + Contraseña nueva
        + Confirmacion de contraseña
        
    + Eliminacion de una cuenta de usuario
        + Pre-Logeo admin (requerido)
        + Numero mobil del usuario
        + Contraseña del admin
        + Confirmacion de contraseña admin
        
    + Actualizacion de datos de la cuenta asociada al administrador
        + Pre-Logeo admin (requerido)
        + Busqueda del admin a actualizar
        + Llenado del formulario de actualizacion (igual que el de creacion)
        
    + Creacion de una alianza
        + Pre-Logeo superadmin (requerido)
        + Nombre de la alianza
        + Entidad con la que se realiza
        + Fecha de creacion
        + Fecha de finalizacion

**siempre ha de existir un super-administrador que crea administradores**

## Requerimientos no funcionales

- La estetica de la interfaz grafica es indiferente durante la fase de desarrollo
- Se requiere que el diseño de la interfaz no sea responsive durante la fase de desarrollo

## Requerimientos tecnicos

- Uso de Laravel 5.7
- Uso de la libreria bootstrap
- Uso de CSS Grid, para una rapida transicion a diseño responsive
- La base de datos se debe desarrollar en mysql

El alcance de esta aplicacion ha de estar dado EXCLUSIVA Y UNICAMENTE SOBRE LOS PUNTOS QUE SE HAN ENUNCIADO, NO SE TOMARÁN EN CUENTA OTRAS FUNCIONALIDADES ADICIONALES, UNICA Y EXCLUSIVAMENTE LO QUE SE MENCIONA EN ESTE DOCUMENTO y en el formato IEEE de requerimientos son el alcance del presente proyecto.
