<?php
return [
/**
 * @TranslationFile SPANISH
 * @authors Morgan, Zeo
 * @helpers [
        Goran - Whole spanish translation (https://www.gmodstore.com/users/Goran)
    ],
 * @file cosmo.php
 * @version 1.0.0

 * Welcome Translator!
 * Thank you for being one of the very few people willing to translate our new addon Cosmo.
 * This translation file is the only one you'll need to translate, as everything you need is located below.
 * Please take your time to ensure everything is correct and appropriate.
 * Upon sending this file back to the authors, please make sure to add your name next to the @helpers property so you can be properly credited.
 * With any notification messages and or success messages, please feel free to come up with your own slogan as long as it sends the same message.
 * if you see a string with a comment next to it, that's to give you more context.
 * Any string with a :variable name is referring to the variable passed into the message. (LEAVE THE VARIABLES)

 * How to translate
 * You'll see two strings, please only translate the string on the right side of the arrow as seen below
 * 'search' => 'ENTER YOUR TRANSLATION HERE',
 * Please also make sure that all of the strings you edit end with a comma (,)
 * If you need to use an apostrophe (') please escape it with a backslash (\) as seen below
 * 'example' => 'You\'re awesome!',
 **/

// TRANSLATIONS START //
    'errors' => [
        'no_api_key' => 'No se estableció Steam API Key alguna',
        'failed' => 'Fallo al obtener la información del servidor'
    ],

    'navbar' => [
        'profile' => 'Perfil',
        'visit_profile' => '¡Visita y actualiza tu perfil!',

        'management' => 'Administración',
        'manage_cosmo' => 'Gestionar Cosmo como administrador.',

        'logout' => 'Cerrar sesión',
        'login' => 'Iniciar sesión',

        'welcome_back' => 'Bienvenido de vuelta, :username',
        'notifications' => 'Notificaciones'
    ],


    'core' => [
        'home' => 'Inicio',
        'staff' => 'Staff',
        'threads' => 'Temas',
        'browse_threads' => 'Navegar entre todos los temas',
        'viewing_thread' => 'Viendo Tema',
        'forums' => 'Foros',
        'terms' => 'Términos de Servicio',
        'store' => 'Tienda',
        'success' => '¡Éxito!',
        'failed' => '¡Fallo!',
        'checkout' => 'Caja',
        'users' => 'Usuarios',
        'board' => 'Tabla',
        'edit' => 'Editar',

        'licensed_to' => 'Licenciado a :licensee',
        'created_by' => 'Creado por :author',

        'theme_specific' => [
            'group_members' => 'Miembros del grupo',
            'online_members' => 'Miembros en línea',
            'in-game_members' => 'Miembros en juego',
            'join_steam-group' => 'Únete a nuestro grupo de Steam',
            'players_online' => 'Jugadores en línea',
            'join_servers' => 'Únete a nuestros <span>Servidores</span>',
            'join_discord' => 'Únete a nuetro <span>Discord</span>',
        ],

        'confirmation' => '¿Estás seguro?',
        'cancel' => 'Cancelar',
    ],

    'store' => [
        'browse_packages' => 'Buscar  paquetes para :server!',
        'checkout' => 'Caja',
        'permanent' => 'Permanente',
        'non-permanent' => 'No Permanente',
        'login_to-checkout' => 'Inicia sesión para concretar',

        'coupon-code' => 'Cupón',
        'enter_coupon-code' => 'Ingresar Cupón',
        'gift-purchase' => 'Comprar como regalo',
        'enter_steamId' => 'Ingresa la SteamID',

        'finalize_purchase' => 'Finalizar Tu Compra',
        'tos_agree' => 'YPor la presente, estás de acuerdo con nuestros <a href="'.route('store.tos').'">Términos de Servicio</a>', // Translate around the link
        'checkout_with-paypal' => 'Pagar con PayPal',

        'complete_purchase' => 'Completar Tu Compra',
        'checking_out-package' => 'Estás adquiriendo :package', //"You are checking out package: VIP"
        'package_price' => 'Precio Del Paquete',

        'sub-total' => 'Sub Totales',
        'total' => 'Total: :sign:price',
        'servers' => 'Servidores',

        'monthly_goal' => 'Objetivo Mensual de Donaciones',
        'table' => [
            'top_donations' => 'Top Donaciones',
            'recent_donations' => 'Donaciones Recientes',
            'name' => 'Nombre',
            'amount' => 'Cantidad',
            'package' => 'Paquete',
        ],

        'select_server' => 'Conectar',
        'store_select_server' => 'Seleccionar',

        'success' => [
            'success' => '¡Pago Exitoso!',
            'msg' => 'Recibirás Tu Paquete Pronto...'
        ],
        'fail' => [
            'fail' => '¡El Pago Falló!',
            'msg' => 'El Pago Falló.... por favor, intenta más tarde',
        ],

        'sale' => [
            'time-left' => 'Tiempo restante: :time',
            'info' => '¡<b>Apúrese</b> y obtenga nuestros productos en descuento! <span>:percentage% de descuento</span>',
            'go_to_store' => 'IR A LA TIENDA',
        ],
    ],

    'forums' => [
        'polls' => 'Encuestas',
        'polls_desc' => 'Da tu palabra en la comunidad',
        'unanswered_polls' => 'Encuesta(s) sin responder',

        'search' => 'Buscar',
        'search_desc' => '¡Navegar en los foros!',

        'recent_activity' => 'Actividad Reciente',
        'recent_desc' => 'Actividad reciente en Nuestras Comunidades',

        'latest_threads' => 'Últimos Temas',
        'latest_threads-desc' => 'Los últimos temas de Nuestra Comunidad',

        'latest_posts' => 'Últimas Publicaciones',
        'latest_posts-desc' => 'Las últimas publicaciones de Nuestra Comunidiad ',

        'replies' => 'Respuestas',

        'threads' => [
            'locked' => 'CERRADO',
            'pinned' => 'ADHERIDO',

            'edit_thread' => 'Editar Tema',
            'editing_thread' => 'Editando Tema',
            'pin_thread' => 'Adherir Tema',
            'unpin_thread' => 'Desligar Tema',
            'lock_thread' => 'Cerrar Tema',
            'unlock_thread' => 'Desbloquear Tema',
            'move_thread' => 'Mover Tema',
            'delete_thread'=> 'Eliminar Tema',

            'create_thread' => 'Crear Tema',
            'update_thread' => 'Actualizar Tema',
            'thread_title' => 'Título del Tema',
            'post_reply' => 'Postear',

            'created_at' => 'Creado El',

            'posted_by' => 'Posteado por: ',

            'locked_no_reply' => '¡Este tema fue bloqueado, no puedes responder a él!',
        ],
        'posts' => [
            'editing_post' => 'Editar Post',
            'update_post' => 'Actualizar Post',
            'delete_post' => 'Eliminar Post'
        ]
    ],

    'users' => [
        'search_users' => 'Buscar Usuarios...',
        'no_users-found' => 'No se encontraron usuarios',

        'pills' => [
            'home'=> 'Inicio',
            'comments' => 'Comentarios',
            'threads' => 'Temas',
            'achievements' => 'Logros',
            'edit' => 'Editar Perfil',
        ],

        'welcome_to_profile' => '¡Bienvenido a mi perfil!',

        'user_joined' => 'Un usuario se unió',
        'comment' => 'Comentario',
        'editing_comment' => 'Editar Comentario',

        'edit' => [
            'display_name' => 'Nombre a mostrar',
            'avatar_image' => 'Avatar',
            'background_image' => 'Fondo',
            'biography' => 'Biografía',
            'signature' => 'Firma',
            'sync_steam' => 'Sincronizar con Steam',
            'sync_discord' => 'Sincronizar con Discord',
        ],

        'achievements' => [
            'unlock_more' => 'Desbloquear más...',
            'default' => 'Para desbloquear más logros continúa utilizando los foros y más de sus características.',
            'achievement_unlocked' => 'Este logro se desbloqueó hace' // "This achievement was unlocked" 1 day ago
        ],
    ],

    'actions' => [
        'close' => 'Cerrar',
        'save_changes' => 'Guardar Cambios',
        'go_back' => 'Atrás',
        'submit' => 'Enviar',
        'post' => 'Postear',
        'create' => 'Crear',
        'update' => 'Actualizar',
        'delete' => 'Eliminar'
    ],

    'notifications' => [
        'new_notif' => 'NUEVO',
        'notifications' => 'Notificaciones',
        'mark_all_as_read' => 'Marcar todos como leídos',
        'delete_all' => 'Eliminar Todos',
        'no_notifications' => 'No tienes Notificaciones',

        'reply_to_thread' => ':username ha respondido a tu tema',
        'unlocked_achievement' => 'Has obtenido el logro: :achievement',
        'profile_comment' => ':username ha comentado tu perfil',
        'profile_like' => ':username ha :state tu perfil',
        'thread_action' => ':admin ha :action tu tema: :title',
        'manage' => 'Administra tus Increíbles Notificaciones',
    ],

    'toastr_alerts' => [
        'marked_notifications' => '¡Has marcado todas tus notificaciones como leídas!',
        'cleared_notifications' => '¡Has eliminado todas tus notificaciones!',

        'update_post' => 'Post actualizado',
        'delete_post' => 'Post eliminado',

        'create_thread' => 'Tema creado exitosamente',
        'update_thread' => 'Tema actualizado exitosamente',
        'delete_thread' => '¡Tema eliminado exitosamente!',
        'pin_thread' => '¡Tema adherido exitosamente!',
        'unpin_thread' => '¡Tema desligado exitosamente!',
        'lock_thread' => '¡Tema cerrado exitosamente!',
        'unlock_thread' => '¡Tema reabierto exitosamente!',
        'move_thread' => '¡Tema movido exitosamente!',

        'application_cache' => '¡Memoria cache limpiada!',

        'create_board' => 'Tablero creado exitosamente',
        'update_board' => 'Tablero actualizado exitosamente',
        'delete_board' => '¡Tablero eliminado exitosamente!',
        'move_board' => '¡Ordenó los tableros exitosamente!',

        'create_category' => '¡Categoría creada exitosamente!',
        'update_category' => '¡Categoría actualizada exitosamente!',
        'delete_category' => '¡Categoría eliminada exitosamente!',

        'create_poll' => 'Encuestra creada exitosamente',
        'update_poll' => 'Encuesta actualizada exitosamente',
        'delete_poll' => '¡Encuesta eliminada exitosamente!',
        'open_poll' => '¡Estado de la encuesta establecido a abierta!',
        'close_poll' => '¡Estado de la encuesta establecido a abierta!',

        'update_configurations' => '¡Configuraciones generales actualizadas!',
        'update_meta' => '¡Configuraciones meta actualizadas!',
        'update_integration' => '¡Configuraciones de integraciones actualizadas!',
        'update_theme' => '¡Tema Global actualizado!',
        'update_settings' => '¡Configuraciones de la tienda actualizadas!',
        'update_tos' => '¡Términos de Servicio actualizados!',

        'create_role' => 'Nuevo rol creado con éxito',
        'update_role' => '¡Rol actualizado con éxito!',
        'delete_role' => '¡Rol eliminado con éxito!',

        'update_user' => '¡Usuario actualizado con éxito!',

        'create_feature' => '¡Característica creada con éxito!',
        'update_feature' => '¡Característica actualizada con éxito!',
        'delete_feature' => '¡Característica eliminada con éxito!',

        'create_footer-link' => '¡Nuevo enlace de pie de página creado!',
        'update_footer-link' => '¡Enlace de pie de página actualizado!',
        'delete_footer-link' => '¡Enlace de pie de página eliminado!',

        'create_nav-link' => '¡Nuevo enlace de navegación creado!',
        'update_nav-link' => '¡Enlace de navegación actualizado!',
        'delete_nav-link' => 'Enlace de navegación eliminado',

        'create_server' => '¡Nuevo servidor creado con éxito!',
        'update_server' => '¡Servidor actualizado con éxito!',
        'delete_server' => '¡Servidor eliminado con éxito!',

        'create_coupon' => '¡Nuevo cupón creado exitosamente!',
        'update_coupon' => '¡Cupón actualizado exitosamente!',
        'delete_coupon' => '¡Cupón eliminado exitosamente!',

        'invalid_coupon-code' => '¡El cupón es inválido!',
        'unusable_coupon-code' => '¡Este cupón no puede ser usado en este paquete!',
        'invalid_gift-steamId' => 'La SteamID es inválida!',

        'create_package' => '¡Nuevo paquete creado exitosamente!',
        'update_package' => '¡Paquete editado exitosamente!',
        'delete_package' => '¡Paquete eliminado exitosamente!',

        'create_sale' => '¡Oferta creada!',
        'update_sale' => '¡Oferta actualizada!',
        'delete_sale' => '¡Oferta eliminada!',

        'create_comment' => '¡Comentario publicado!',
        'update_comment' => '¡Comentario actualizado!',
        'delete_comment' => '¡Comentario eliminado!',

        'like_own_profile' => 'Lo sentimos, no puedes darle Me gusta a tu propio perfil :)',
        'remove_like' => '¡Me Gusta removido del perfil de :username!',
        'create_like' => '¡Me Gusta añadido al perfil de :username!',

        'update_profile' => '¡Perfil actualizado con éxito!',
    ],


    'management' => [
        'navigation' => [
            'dashboard' => 'Tablero',

            'general' => 'General',
            'configuration' => 'Configuración',
            'meta' => 'Meta',
            'users' => 'Usuarios',
            'roles' => 'Roles',

            'index' => 'Index',
            'components' => [
                'components' => 'Componentes',
                'nav-links' => 'Links de Nav.',
                'features' => 'Características',
                'servers' => 'Servidores',
                'integrations' => 'Integraciones',
                'footer-links' => 'Enlaces de Pie de Página'
            ],
            'theme' => 'Tema',

            'forums' => 'Foros',
            'categories' => 'Categorías',
            'boards' => 'Tableros',
            'polls' => 'Encuestas',

            'store' => 'Tienda',
            'settings' => 'Ajustes',
            'packages' => [
                'packages' => 'Paquetes',
                'create' => 'Crear',
                'manage' => 'Administrar'
            ],
            'coupon_code' => 'Cupón',
            'sales' => 'Ofertas',
            'tos' => 'TYCs',
            'transactions' => 'Transacciones',
            'profile' => 'Perfil',
            'exit_management' => 'Salir del modo administración',
            'logout' => 'Cerrar sesión',
        ],

        'core' => [
            'clear_cache' => 'Vaciar Cache',
            'check_for_updates' => 'Buscar Actualizaciones',

            'dashboard_title' => 'Tablero',
            'dashboard_small' => 'Estadísticas de la pag.',

            'configurations_title' => 'Configuraciones',
            'configurations_small' => 'Administrar Configuración',

            'meta_title' => 'Meta',
            'meta_small' => 'Adminstrar Meta del sitio',

            'users_title' => 'Usuarios',
            'users_small' => 'Administrar Usuarios',
            'users_search' => 'Buscar Usuarios...',
            'users_role' => 'Rol',

            'create_new_role' => 'Crear nuevo rol',
            'roles_role-name' => 'Nombre del Rol',
            'roles_role-display' => 'Nombre a mostrar del Rol',
            'roles_role-color' => 'Color del Rol',

            'create_new_nav' => 'Crear nuevo enlace',
            'nav_name' => 'Nombre del enlace',
            'nav_icon' => 'Ícono del enlace',
            'nav_color' => 'Color del enlace',
            'nav_url' => 'URL del enlace',
            'nav_category' => 'Categoría del enlace',

            'create_new_feature' => 'Crear nueva Característica',
            'feature_name' => 'Nombre de la Característica',
            'feature_icon' => 'Ícono de la Característica',
            'feature_color' => 'Color de la Característica',
            'feature_content' => 'Contenido de la Característica',

            'create_new_server' => 'Crear nuevo Servidor',
            'server_name' => 'Nombre del Servidor',
            'server_icon' => 'Ícono del Servidor',
            'server_color' => 'Color del Servidor',
            'server_image' => 'Imagen del Servidor',
            'server_ip' => 'IP del Servidor',
            'server_port' => 'Puerto del Servidor',
            'server_description' => 'Descripción del Servidor',

            'enable_steam-group_statistics' => 'Habilitar Estadísticas del Grupo de Steam',
            'enable_discord-widget' => 'Habilitar Widget para Discord',
            'enable_widget-bot' => 'Habilitar Widget para Bots',
            'enable_discord-sync' => 'Habilitar Sincronización con Discord',

            'create_new_link' => 'Crear nuevo Enlace',
            'link_name' => 'Nombre del Enlace',
            'link_url' => 'URL del Enlace',
            'link_category' => 'Categoría del Enlace',

            'theme_title' => 'Tema',
            'theme_small' => 'Administrar Temas',

            'create_new_category' => 'Crear nueva Categoría',
            'category_name' => 'Nombre de la Categoría',
            'category_desc' => 'Descripción de la Categoría',

            'create_new_board' => 'Crear nuevo Tablero',
            'board_name' => 'Nombre del Tablero',
            'board_icon' => 'Ícono del Tablero',
            'board_color' => 'Color del Tablero',
            'board_desc' => 'Descripción del Tablero',
            'board_category' => 'Categoría del Tablero',
            'board_permission_roles' => 'Roles con Acceso',

            'create_new_poll' => 'Crear nueva encuesta',
            'poll_title' => 'Título de la encuesta',
            'poll_description' => 'Descripción de la Encuesta',
            'poll_icon' => 'Ícono de la Encuesta',
            'poll_answers' => 'Respuestas para la Encuesta',
            'poll_answer' => 'Respuesta de la Encuesta',

            'store_settings_title' => 'Ajustes de la Tienda',
            'store_settings_small' => 'Administrar ajustes de la Tienda',

            'enable_monthly_goal' => 'Habilitar Objetivo Mensual',
            'monthly_goal' => 'Objetivo Mensual',
            'display_top_recent-donations' => 'Mostrar la mayor Donación y Donaciones Recientes',

            'paypal_client_id' => 'ID del cliente de PayPal',
            'paypal_client_secret' => 'Cliente secreto de PayPal',
            'paypal_webhook_id' => 'ID de la Webhook de PayPal',

            'enable_chargeback-bans' => 'Habilitar suspensiones por reembolso',
            'chargeback-ban' => '<code>Habilitar suspensiones por reembolso</code> - Cuando un usuario intente iniciar un reembolso a través de PayPal, su acceso a la página será suspendido.',

            'package_title' => 'Paquetes',
            'package_small' => 'Crear Paquetes',
            'create_new_package' => '¡Crear nuveo Paquete!',
            'package_name' => 'Nombre del Paquete',
            'package_price' => 'Precio del Paquete',
            'package_image' => 'Imagen del Paquete',
            'package_servers' => 'Servidores',
            'package_category' => 'Categoría',
            'package_description' => 'Descripción del Paquete',

            'create_new_coupon' => 'Crear nuevo Cupón',
            'coupon_code' => 'Código del Cupón',
            'coupon_percentage' => 'Porcentaje',
            'coupon_packages' => 'Paquetes',
            'coupon_packages_info' => 'Paquetes en los que este código es aplicable.',
            'coupon_package_use-amt' => 'Cantidad de Usos',
            'coupon_package_use-amt_info' => 'La cantidad de usos posibles de este código. 0 para ilimitados',
            'coupon_package_start-date' => 'Fecha de Inicio',
            'coupon_package_start-date_info' => 'Este cupón será activo a partir de la fecha establecida',
            'coupon_package_end-date' => 'Fecha de Expiración',
            'coupon_package_end-date_info' => 'A partir de esta fecha, el cupón se volverá inutilizable',

            'create_new_sale' => 'Crear nueva Oferta',
            'sale_title' => 'Título de la Oferta',
            'sale_percentage' => 'Porcentaje de Descuento',
            'sale_packages' => 'Paquetes en Oferta',
            'sale_start-date' => 'Inicio de Oferta',
            'sale_end-date' => 'Fecha de Expiración',

            'update_terms' => 'Actualizar TOS',

            'disable_maintenance' => 'Deshabilitar Mantenimiento',
            'enable_maintenance' => 'Habilitar Mantenimiento',

            'reinstall' => 'Reinstalar',
            'reinstall_confirm' => '¿Estás seguro de que deseas reinstalar la aplicación?',

            'toggle_dark_mode' => 'Activar Modo Oscuro',

            'yearly_sales' => 'Ventas Anuales',
            'monthly_sales' => 'Ventas Semanales',

            'stats' => [
                'earnings' => [
                    'total' => 'Ganancias Totales',
                    'monthly' => 'Ganancias Mensuales',
                    'weekly' => 'Ganancias Semanales',
                    'daily' => 'Ganancias Diarias',
                ],
                'total_packages' => 'Paquetes Totales',
                'total_purchases' => 'Compras Totales',
                'forum' => [
                    'categories' => 'Categorías Totales',
                    'boards' => 'Tableros Totales',
                    'threads' => 'Temas Totales',
                ],
                'users' => 'Usuarios Totales',
                'roles' => 'Roles Totales',
                'tickets' => 'Abrir Ticket de Soporte',
            ],
        ],

        'save_configurations' => 'Guardar Configuración',

    ]
];
