// Control del menú desplegable y hamburguesa
$(document).ready(function() {
    var isMobile = $(window).width() <= 1024;
    console.log('web.js cargado. isMobile=', isMobile);

    // Debug: conteo inicial de submenús
    console.log('M_layer2 count=', $('#M_ctgList2 .M_layer2').length, 'M_layer3 count=', $('#M_ctgList2 .M_layer3').length);

    // Delegated click handler para navegación y toggles en mobile
    $(document).on('click', '#M_ctgList2 a', function(e) {
        var $a = $(this);
        var href = $a.attr('href');
        var $li = $a.closest('li');
        var $childLayer2 = $li.children('.M_layer2');
        var $childLayer3 = $li.children('.M_layer3');

        // Si es mobile y el enlace de nivel 1 tiene submenú, solo toggle (no navegar)
        if (isMobile && $childLayer2.length && $a.parent().parent().hasClass('M_layer1')) {
            e.preventDefault();
            if ($childLayer2.hasClass('active')) {
                $childLayer2.removeClass('active');
            } else {
                $('#M_ctgList2 .M_layer2.active').not($childLayer2).removeClass('active');
                $childLayer2.addClass('active');
            }
            return;
        }

        // Si es mobile y el enlace de nivel 2 tiene submenú, solo toggle (no navegar)
        if (isMobile && $childLayer3.length && $a.parent().parent().hasClass('M_layer2')) {
            e.preventDefault();
            if ($childLayer3.hasClass('active')) {
                $childLayer3.removeClass('active');
            } else {
                $li.siblings().find('.M_layer3.active').removeClass('active');
                $childLayer3.addClass('active');
            }
            return;
        }

        // Para cualquier otro enlace (nivel 2 o 3 sin submenú), cerrar menú y navegar normalmente
        if (isMobile) {
            $('.global_nav').removeClass('global_nav_on');
            $('.menu-trigger').removeClass('active');
            // Permitir navegación
        }
        // En desktop, comportamiento normal (hover)
    });

    // Marcar items que NO tienen submenu nivel 3
    $('#M_ctgList2 .M_layer1').each(function() {
        var $this = $(this);
        var hasLayer3 = $this.find('.M_layer3').length > 0;
        if (!hasLayer3) {
            $this.addClass('no-submenu');
        } else {
            $this.addClass('has-submenu');
        }
    });


    // Botón cerrar menú hamburguesa (X)
    function ensureMenuCloseBtn() {
        if ($('#menu-close-btn').length === 0) {
            // Insertar el botón si no existe
            $('.global_nav').prepend('<button id="menu-close-btn" aria-label="Cerrar menú" style="display:none; position:fixed; bottom:24px; right:24px; z-index:3000; background:#fff; border:none; font-size:3.2rem; font-weight:900; color:#4838c7; width:64px; height:64px; border-radius:50%; box-shadow:0 2px 12px rgba(0,0,0,0.13); cursor:pointer;">×</button>');
        }
    }

    ensureMenuCloseBtn();

    function updateMenuCloseBtn() {
        var isMobileNow = $(window).width() <= 1024;
        var navOn = $('.global_nav').hasClass('global_nav_on');
        if (isMobileNow && navOn) {
            $('#menu-close-btn').show();
        } else {
            $('#menu-close-btn').hide();
        }
    }

    // Menú hamburguesa
    $('.menu-trigger').on('click', function(e) {
        e.preventDefault();
        $('.global_nav').toggleClass('global_nav_on');
        $(this).toggleClass('active');
        updateMenuCloseBtn();
        console.log('menu-trigger click -> global_nav_on=', $('.global_nav').hasClass('global_nav_on'));
    });

    // Botón cerrar menú hamburguesa (X)
    $(document).on('click', '#menu-close-btn', function() {
        $('.global_nav').removeClass('global_nav_on');
        $('.menu-trigger').removeClass('active');
        updateMenuCloseBtn();
    });

    $(window).on('resize', function() {
        updateMenuCloseBtn();
    });

    // Inicializar visibilidad del botón al cargar
    updateMenuCloseBtn();

    // Mover el search dentro del menú en mobile y restaurar en desktop
    var $hdSearch = $('#hd-search');
    var $searchOriginalParent = $hdSearch.parent();
    var $searchOriginalNext = $hdSearch.next();

    function moveSearchToMenu() {
        if ($('.global_nav_wrap').length && $hdSearch.length) {
            // evitar duplicados
            if (!$('.global_nav_wrap').find('#hd-search').length) {
                $('.global_nav_wrap').prepend($hdSearch);
            }
        }
    }

    function restoreSearch() {
        if ($hdSearch.length) {
            if ($searchOriginalNext.length) {
                $searchOriginalNext.before($hdSearch);
            } else {
                $searchOriginalParent.append($hdSearch);
            }
        }
    }

    // Cerrar menú hamburguesa al hacer clic en un enlace
    $('.global_nav a').on('click', function(e) {
        if (isMobile && $(this).closest('.M_layer1').length) {
            // No cerrar si es un link de menú con submenú
            if (!$(this).siblings('.M_layer2').length) {
                $('.global_nav').removeClass('global_nav_on');
                $('.menu-trigger').removeClass('active');
            }
        }
    });

    // Para desktop: mostrar/ocultar al hover
    if (!isMobile) {
        // Solo permitir hover en items que tienen submenu
        $('#M_ctgList2 .M_layer1.has-submenu').hover(
            function() {
                // Mouse entra
                var $submenu = $(this).find('.M_layer2');
                // Cerrar todos los demás
                $('#M_ctgList2 .M_layer2').not($submenu).removeClass('show').stop(true, true).slideUp(200);
                // Mostrar este
                $submenu.addClass('show').stop(true, true).slideDown(200);
            },
            function() {
                // Mouse sale
                $(this).find('.M_layer2').removeClass('show').stop(true, true).slideUp(200);
            }
        );

        // Para submenús (layer3): hover en layer2 - solo si tiene layer3
        $('#M_ctgList2 .M_layer2 li').hover(
            function() {
                var $layer3 = $(this).find('.M_layer3');
                if ($layer3.length > 0) {
                    $layer3.stop(true, true).slideDown(200);
                }
            },
            function() {
                var $layer3 = $(this).find('.M_layer3');
                if ($layer3.length > 0) {
                    $layer3.stop(true, true).slideUp(200);
                }
            }
        );
    } else {
        // Para mobile: click en lugar de hover — usar clases para evitar conflicto con CSS !important
        $('#M_ctgList2 .M_layer1 > a').on('click', function(e) {
            var $parent = $(this).parent();
            var $submenu = $parent.find('.M_layer2');

            if ($submenu.length) {
                if ($submenu.hasClass('active')) {
                    $submenu.removeClass('active');
                    console.log('M_layer2 ocultado:', $parent.attr('id'));
                } else {
                    // Cerrar otros submenús
                    $('#M_ctgList2 .M_layer2.active').not($submenu).removeClass('active');
                    $submenu.addClass('active');
                    console.log('M_layer2 mostrado:', $parent.attr('id'));
                }

                e.preventDefault();
            }
        });

        // Click en layer2 items — toggle M_layer3 con clase
        $('#M_ctgList2 .M_layer2 > li > a').on('click', function(e) {
            var $parent = $(this).parent();
            var $submenu = $parent.find('.M_layer3');

            if ($submenu.length) {
                if ($submenu.hasClass('active')) {
                    $submenu.removeClass('active');
                    console.log('M_layer3 ocultado en:', $parent.closest('.M_layer2').parent().attr('id'));
                } else {
                    // Cerrar otros layer3 dentro del mismo layer2
                    $parent.siblings().find('.M_layer3.active').removeClass('active');
                    $submenu.addClass('active');
                    console.log('M_layer3 mostrado en:', $parent.closest('.M_layer2').parent().attr('id'));
                }

                e.preventDefault();
            }
        });
        
    }

    // Responsivo: reiniciar cuando se redimensiona
    $(window).on('resize', function() {
        var wasDesktop = !isMobile;
        var newIsMobile = $(window).width() <= 1024;
        
        if (newIsMobile !== isMobile) {
            isMobile = newIsMobile;
            // Limpiar todos los estados
            $('#M_ctgList2 .M_layer2').removeClass('show').stop(true, true).hide();
            $('#M_ctgList2 .M_layer3').stop(true, true).hide();
            
            if (isMobile) {
                // Cambió a mobile: desactivar hover, activar click
                $('#M_ctgList2 .M_layer1.has-submenu').off('hover');
                moveSearchToMenu();
                // mantener el menú cerrado inicialmente
                $('.global_nav').removeClass('global_nav_on');
                $('.menu-trigger').removeClass('active');
            } else {
                // Cambió a desktop: reactivar hover
                restoreSearch();
                // refrescar para que hover se vuelva a enlazar
                location.reload();
            }
        }
    });

    // Inicial: si estamos en mobile mover el search dentro del menú
    if (isMobile) {
        moveSearchToMenu();
    } else {
        restoreSearch();
    }
});
