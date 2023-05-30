[ Directorio recursos/ ]

En este directorio encontrarás los distintos útiles que usaremos en las playbooks y los roles, tanto archivos de configuración como una carpeta de backups donde se encontrarán almacenadas las copias de seguridad. A continuación daré una breve descripción sobre el contenido y proposito de cada fichero que se encuentra en esta carpeta.

[ backups ]

La carpeta backups, donde se almacenarán las distintas copias de seguridad que realiza el rol "mariadbBackup".
Estas copias de seguridad consisten en un fichero sql y se nombran con la fecha y hora de cuando se ejecutó la tarea encargada de realizar la copia.

[ config ]

El fichero config, sirve para deshabilitar el módulo de seguridad SELinux del sistema. Para cambiar la configuración hay que editar la linea que dice SELINUX=disabled, modificando el disabled por enforcing para activarlo o por disabled para mantenerlo deshabilitado.
