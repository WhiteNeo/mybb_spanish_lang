<?php
/**
 * Autor: Dark Neo
 * Plugin: Sistema de Agradecimientos
 * Versión: 2.5.3
 * Archivo de Idioma del Plugin: espanol
 */
$l['thx_title'] = "Sistema de agradecimientos";
$l['thx_desc'] = "Agrega un botón para dar gracias en los foros que aplica, a los temas de usuarios";
$l['thx_config'] = "Configurar Plugin";
$l['thx_config_alerts'] = "Se ha detectado que tienes MyAlerts, pero no está bien configurado aún...";
$l['thx_config_alerts_thx'] = "El plugin de agradecimientos está listo para ser utilizado (Se detecto MyAlerts compatible con MyBB 1.8)";
$l['thx_config_alerts_thx_config'] = "El plugin esta listo, pero falta configurar que sea usado con MyAlerts en tus ajustes del plugin.";
$l['thx_config_alerts_none'] = "El plugin de agradecimientos está listo para ser utilizado, puedes agregarle <a href=\"{1}\">( MyAlerts 2.0 )</a> si asi lo deseas";
$l['thx_config_alerts_missing'] = "El plugin necesita integrarse con MyAlerts para funcionar correctamente {1}";
$l['thx_config_alerts_force_all'] = "Forzar alertas a todos los usuarios";
$l['thx_admin_thx_group'] = "Ajustes del sistema de agradecimientos";
$l['thx_admin_thx_group_opt1'] = "Agradecimientos permitidos por día para este grupo de usuarios:  ";
$l['thx_admin_thx_group_opt2'] = "Puntos de reputación a dar cuando se agradezcan los mensajes:  ";
$l['thx_admin_thx_group_opt3'] = "Puntos ganados cuando alguien agradece tus mensajes (Newpoints):  ";
$l['thx_admin_thx_group_opt4'] = "Puntos obtenidos cuando el usuario utiliza el botón gracias (Newpoints):  ";
$l['thx_disabled'] = "Plugin Desactivado";
$l['thx_opt_title'] = "[Plugin] Sistema de Agradecimientos";
$l['thx_opt_desc'] = "Configuración del plugin";
$l['thx_opt_enable'] = "Activar/Desactivar plugin";
$l['thx_opt_enable_desc'] = "Activar o desactivar el plugin, únicamente lo deshabilita (deja intactos los agradecimientos)";
$l['thx_count_title'] = "Mostrar conteo de agradecimientos";
$l['thx_count_desc'] = "Muestra los agradecimientos dados y recibidos en el mensaje";
$l['thx_counter_title'] = "Mostrar contador de agradecimientos";
$l['thx_counter_desc'] = "Muestra el total de agradecimientos recibidos debajo de cada mensajes";
$l['thx_del_title'] = "Los usuarios pueden eliminar sus agradecimientos";
$l['thx_del_desc'] = "Cada usuario puede eliminar los agradecimientos que haya dado";
$l['thx_date_title'] = "Mostrar fecha al alejar el raton";
$l['thx_date_desc'] = "Muestra la fecha del agradecimiento, cuando el raton paso por encima del texto";
$l['thx_temp_title'] = "Auto deteccion de plantillas";
$l['thx_temp_desc'] = "Detectar plantilla del postbit relacionando el codigo HTML! (solo funciona si \"Separar tablas\" esta Habilitado)";
$l['thx_table_title'] = "Separar tablas";
$l['thx_table_desc'] = "Si quiere mostrar los agradecimientos entre los mensajes <b>(no al final del mensaje)</b>, active esta opción.";
$l['thx_hide_title'] = "Utilizar etiqueta [???]";
$l['thx_hide_desc'] = "Oculta los contenidos entre la etiqueta <b>[???]</b>, hasta agradecer al tema. <div style=\"float:right;\"><b>Utilice la opción de abajo para establecer la etiqueta para ocultar contenidos</b></div>";
$l['thx_hidetag_title'] = "Etiqueta a utilizar para ocultar contenidos en sus mensajes Ej: [???]";
$l['thx_hidetag_desc'] = "Elija el texto para la etiqueta dentro de <b>[???]</b>, para utilizar (MyCode).<div style=\"float:right;\"><b>Debe habilitar la opción de arriba para utililzar esta función.<br />Ej de etiquetas a utilizar: oculto, hide, etc...</b></div>";
$l['thx_hidetag_value'] = "oculto";
$l['thx_ebutton_title'] = "Botón en el Editor";
$l['thx_ebutton_desc'] = "Mostrar el botón en el editor para el MyCode (Necesitas habilitar la etiqueta oculto.)";
$l['thx_fid_title'] = "Foros en los que aplica el sistema de agradecimientos";
$l['thx_fid_desc'] = "Elija de la lista los foros en los que se implementara el sistema de agradecimientos";
$l['thx_gid_title'] = "Grupos que pueden mirar los contenidos de la etiqueta [???]";
$l['thx_gid_desc'] = "Elije los grupos de usuarios que pueden ver todo el contenido sin tener que agradecer (revisar mensajes Admins por defecto)";
$l['thx_ngid_title'] = "Grupos que no pueden mirar los contenidos de la etiqueta [???] ni usar el sistema de gracias";
$l['thx_ngid_desc'] = "Elije los grupos de usuarios que no pueden ver el contenido oculto ni usar el sistema, no verán el boton gracias ni los contadores. <div style=\"float:right;\"><b>Por defecto: (Invitado, Cuenta por activar, Bloqueado)</b></div>";
$l['thx_rep_title'] = "Integrar este sistema a la reputación?";
$l['thx_rep_desc'] = "Habilitar o no el sistema de reputación de MyBB al agradecer a un tema, para la segunda y cuarta opción forzosamete necesitas instalar MyAlerts de Euan Torano o te dará error";
$l['thx_rep_op1'] = "Deshabilitar";
$l['thx_rep_op2'] = "Integrar MyAlerts";
$l['thx_rep_op3'] = "Integrar Reputacion";
$l['thx_rep_op4'] = "Integrar Reputacion + MyAlerts";
$l['thx_limit_title'] = "Limitar agradecimientos por día";
$l['thx_limit_desc'] = "Elija el monto total de agradecimientos permitidos por día en los grupos de usuario (Si elijes No se recomienda deshabilitar la tarea thanks per day)";
$l['thx_recount'] = "Recontar Agradecimientos";
$l['thx_can_recount'] = "Habilitar Reconteo de Agradecimientos";
$l['thx_recount_do'] = "Reconteo de Agradecimientos";
$l['thx_upgrade_do'] = "Actualizar el conteo de los agradecimientos";
$l['thx_recount_task_title'] = "Tarea";
$l['thx_recount_task_desc'] = "Envíos/Ciclo";
$l['thx_recount_update'] = "Actualizar contador de agradecimientos";
$l['thx_recount_update_desc'] = "Reconstruir información de agradecimientos dados/recibidos en sus mensajes.";
$l['thx_recount_update_button'] = "Actualizar";
$l['thx_counter_update'] = "Actualizar Contadores";
$l['thx_counter_update_desc'] = "Actualiza el conteo de agradecimientos";
$l['thx_confirm_next'] = '<p>Clic en CONTINUAR para hacer el conteo de los agradecimientos.</p><p>Si has llegado a ésta página es porque aún faltan contar agradecimentos por los envíos por ciclo elegidos</p><p>Da clic en Continuar hasta que el proceso finalice con exito.</p>';
$l['thx_confirm_button'] = "Continuar";
$l['thx_confirm_page'] = "# de página: ";
$l['thx_confirm_elements'] = "Elementos Restantes";
$l['thx_update_psuccess'] = "Se han reconstruido los agradecimientos con éxito";
$l['thx_update_tsuccess'] = "Se ha actualizado el conteo de agradecimientos con éxito";
$l['thx_guests_update'] = "Actualizar conteo de invitados";
$l['thx_guests_update_desc'] = "Actualizar conteo de agradecimientos dados por los invitados";
$l['thx_counter_guests_update'] = "Actualizar contador invitados";
$l['thx_counter_guests_update_desc'] = "Actualizar conteo de agradecimientos de los invitados";
$l['thx_update_pgsuccess'] = "Se han reconstruido los agradecimientos de los invitados con éxito";
$l['thx_update_gsuccess'] = "Se ha actualizado el conteo de agradecimientos de los invitados con éxito";
$l['thx_thankyou'] = "Gracias por el aporte";
$l['thx_alerts_title'] = "Agregar el sistema de alertas al agradecer?";
$l['thx_alerts_title_desc'] = "Agrega una alerta al usuario cuando alguien agradezca en sus mensajes (Necesitas el Sistema de Agradecimientos)";
$l['thx_alerts_install_error'] = "Debes tener instalador el plugin MyAlerts para agregar alertas en los mensajes, si lo instalas, puedes desactivar y activar este pllugin de nuevo, esto no elimina tus agradecimientos y te permite agregar alertas al agradecer utilizando MyAlerts";
$l['thx_antiflood_title'] = "Activar protección antiflood";
$l['thx_antiflood_desc'] = "Permite que se active una potección en segundos entre agradecimientos, elija deshabilitar si no desea utilizar esta función, o en su caso el intervalo en segundos de aantiflood";
$l['thx_antiflood_op1'] = "Deshabilitado";
$l['thx_antiflood_op2'] = "15";
$l['thx_antiflood_op3'] = "30";
$l['thx_antiflood_op4'] = "45";
$l['thx_antiflood_op5'] = "60";
$l['thx_install'] = "Se detectó un respaldo de datos de gracias, deseas cargarlo. Recuerda que deberás hacer un reconteo de gracias en la sección mantenimiento.<br>Elige No para crear una nueva tabla con registros nuevos";
$l['thx_uninstall'] = "Quieres eliminar todo ?<br>Elige No para crear un respaldo de tus agradecimientos dados y recibidos.";
$l['thx_question'] = "¿Estás seguro?";
$l['thx_avatar_modal_title'] = "Deseas mostrar el avatar en el popup de gracias";
$l['thx_avatar_modal_desc'] = "Coloca No para mostrar sólo los nombres de usuario";
$l['thx_only_first'] = "Sólo en el primer mensaje";
$l['thx_only_first_desc'] = "Habilita este ajuste para sólo mostrar los agradecimientos del primer mensaje";
$l['thx_guests'] = "Los invitados pueden usar el sistema de gracias ?";
$l['thx_guests_desc'] = "Coloca si, para que los invitados puedan agradecer los mensajes, se toma un flood de 30 segundos para ver el contenido.";
$l['thx_modal'] = "Deseas cargar los agradecimientos en una ventana nueva (modal) ?";
$l['thx_modal_desc'] = "Si está habilitado se mostrará el contador de gracias totales y una ventana de los últimos 12 agradecimientos máximo, de otro modo se mostrarán los agradecimientos en una lista debajo del mensaje.";
$l['thx_email'] = "Enviar un correo cuando alguien agradezca los mensajes ?";
$l['thx_email_desc'] = "Se agregará una casilla al crear los temas para habilitar o deshabilitar que los usuarios reciban un correo electrónico cuando alguien agradezca sus mensajes.";
$l['thx_mark_better'] = "Marcar el mensaje más agradecido ?";
$l['thx_mark_better_desc'] = "Mostrará el mensaje de otro color, por defecto verde cuando un mensaje sea el más agradecido de un tema, indicando que es el más agradecido.";
$l['thx_meter'] = "Mostrar medido de agradecimientos en la caja del mensaje ?";
$l['thx_meter_desc'] = "Muestra el porcentaje total de agradecimientos que tienen los usuarios en la vista de su caja de mensajes del foro.";
$l['thx_newpoints'] = "Utilizar Newpoints con este plugin ? (Necesitas tener instalado el plugin newpoints)";
$l['thx_newpoints_desc'] = "Si habilitas esta mejora deberás tener instalado el plugin Newpoints para mybb y agregar las preferencias para cada grupo al agradecer, del que recibe y el que agradece para los puntos a dar mediante newpoints.";