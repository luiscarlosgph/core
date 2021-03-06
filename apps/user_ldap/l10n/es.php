<?php
$TRANSLATIONS = array(
"Failed to clear the mappings." => "Ocurrió un fallo al borrar las asignaciones.",
"Failed to delete the server configuration" => "No se pudo borrar la configuración del servidor",
"The configuration is valid and the connection could be established!" => "La configuración es válida y la conexión puede establecerse!",
"The configuration is valid, but the Bind failed. Please check the server settings and credentials." => "La configuración es válida, pero falló el Enlace. Por favor, compruebe la configuración del servidor y las credenciales.",
"The configuration is invalid. Please look in the ownCloud log for further details." => "La configuración no es válida. Por favor, busque en el log de ownCloud para más detalles.",
"Deletion failed" => "Falló el borrado",
"Take over settings from recent server configuration?" => "¿Asumir los ajustes actuales de la configuración del servidor?",
"Keep settings?" => "Mantener la configuración?",
"Cannot add server configuration" => "No se puede añadir la configuración del servidor",
"mappings cleared" => "Asignaciones borradas",
"Success" => "Éxito",
"Error" => "Error",
"Connection test succeeded" => "La prueba de conexión fue exitosa",
"Connection test failed" => "La prueba de conexión falló",
"Do you really want to delete the current Server Configuration?" => "¿Realmente desea eliminar la configuración actual del servidor?",
"Confirm Deletion" => "Confirmar eliminación",
"<b>Warning:</b> The PHP LDAP module is not installed, the backend will not work. Please ask your system administrator to install it." => "<b>Advertencia:</b> El módulo LDAP de PHP no está instalado, el sistema no funcionará. Por favor consulte al administrador del sistema para instalarlo.",
"Server configuration" => "Configuración del Servidor",
"Add Server Configuration" => "Agregar configuracion del servidor",
"Host" => "Servidor",
"You can omit the protocol, except you require SSL. Then start with ldaps://" => "Puede omitir el protocolo, excepto si requiere SSL. En ese caso, empiece con ldaps://",
"Base DN" => "DN base",
"One Base DN per line" => "Un DN Base por línea",
"You can specify Base DN for users and groups in the Advanced tab" => "Puede especificar el DN base para usuarios y grupos en la pestaña Avanzado",
"User DN" => "DN usuario",
"The DN of the client user with which the bind shall be done, e.g. uid=agent,dc=example,dc=com. For anonymous access, leave DN and Password empty." => "El DN del usuario cliente con el que se hará la asociación, p.ej. uid=agente,dc=ejemplo,dc=com. Para acceso anónimo, deje DN y contraseña vacíos.",
"Password" => "Contraseña",
"For anonymous access, leave DN and Password empty." => "Para acceso anónimo, deje DN y contraseña vacíos.",
"User Login Filter" => "Filtro de inicio de sesión de usuario",
"Defines the filter to apply, when login is attempted. %%uid replaces the username in the login action." => "Define el filtro a aplicar cuando se ha realizado un login. %%uid remplazrá el nombre de usuario en el proceso de login.",
"use %%uid placeholder, e.g. \"uid=%%uid\"" => "usar %%uid como comodín, ej: \"uid=%%uid\"",
"User List Filter" => "Lista de filtros de usuario",
"Defines the filter to apply, when retrieving users." => "Define el filtro a aplicar, cuando se obtienen usuarios.",
"without any placeholder, e.g. \"objectClass=person\"." => "Sin comodines, ej: \"objectClass=person\".",
"Group Filter" => "Filtro de grupo",
"Defines the filter to apply, when retrieving groups." => "Define el filtro a aplicar, cuando se obtienen grupos.",
"without any placeholder, e.g. \"objectClass=posixGroup\"." => "sin comodines, ej: \"objectClass=posixGroup\".",
"Connection Settings" => "Configuración de conexión",
"Configuration Active" => "Configuracion activa",
"When unchecked, this configuration will be skipped." => "Cuando deseleccione, esta configuracion sera omitida.",
"Port" => "Puerto",
"Backup (Replica) Host" => "Servidor de copia de seguridad (Replica)",
"Give an optional backup host. It must be a replica of the main LDAP/AD server." => "Dar un servidor de copia de seguridad opcional. Debe ser una réplica del servidor principal LDAP / AD.",
"Backup (Replica) Port" => "Puerto para copias de seguridad (Replica)",
"Disable Main Server" => "Deshabilitar servidor principal",
"Use TLS" => "Usar TLS",
"Do not use it additionally for LDAPS connections, it will fail." => "No lo use para conexiones LDAPS, Fallará.",
"Case insensitve LDAP server (Windows)" => "Servidor de LDAP no sensible a mayúsculas/minúsculas (Windows)",
"Turn off SSL certificate validation." => "Apagar la validación por certificado SSL.",
"Not recommended, use for testing only." => "No recomendado, sólo para pruebas.",
"Cache Time-To-Live" => "Cache TTL",
"in seconds. A change empties the cache." => "en segundos. Un cambio vacía la caché.",
"Directory Settings" => "Configuracion de directorio",
"User Display Name Field" => "Campo de nombre de usuario a mostrar",
"Base User Tree" => "Árbol base de usuario",
"One User Base DN per line" => "Un DN Base de Usuario por línea",
"User Search Attributes" => "Atributos de la busqueda de usuario",
"Optional; one attribute per line" => "Opcional; un atributo por linea",
"Group Display Name Field" => "Campo de nombre de grupo a mostrar",
"Base Group Tree" => "Árbol base de grupo",
"One Group Base DN per line" => "Un DN Base de Grupo por línea",
"Group Search Attributes" => "Atributos de busqueda de grupo",
"Group-Member association" => "Asociación Grupo-Miembro",
"Special Attributes" => "Atributos especiales",
"Quota Field" => "Cuota",
"Quota Default" => "Cuota por defecto",
"in bytes" => "en bytes",
"Email Field" => "E-mail",
"User Home Folder Naming Rule" => "Regla para la carpeta Home de usuario",
"Leave empty for user name (default). Otherwise, specify an LDAP/AD attribute." => "Vacío para el nombre de usuario (por defecto). En otro caso, especifique un atributo LDAP/AD.",
"Internal Username" => "Nombre de usuario interno",
"Internal Username Attribute:" => "Atributo Nombre de usuario Interno:",
"Override UUID detection" => "Sobrescribir la detección UUID",
"UUID Attribute:" => "Atributo UUID:",
"Username-LDAP User Mapping" => "Asignación del Nombre de usuario de un usuario LDAP",
"Clear Username-LDAP User Mapping" => "Borrar la asignación de los Nombres de usuario de los usuarios LDAP",
"Clear Groupname-LDAP Group Mapping" => "Borrar la asignación de los Nombres de grupo de los grupos de LDAP",
"Test Configuration" => "Configuración de prueba",
"Help" => "Ayuda"
);
$PLURAL_FORMS = "nplurals=2; plural=(n != 1);";
