<?php
function my_theme_enqueue_styles() {
    wp_enqueue_style( 'style-css',plugin_dir_url(__FILE__) . 'admin/style.css' ); 
    wp_enqueue_script( 'jquery-min','https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js' );
    wp_enqueue_style( 'css-select2','https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css'
     ); 
    wp_enqueue_style( 'bootstrap','https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' ); 
    wp_enqueue_style( 'bootstrap4','https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css' ); 
    wp_enqueue_style( 'datatable','https://cdn.datatables.net/fixedcolumns/4.0.2/css/fixedColumns.dataTables.min.css' );
    wp_enqueue_style( 'select','https://cdn.datatables.net/select/1.3.4/css/select.dataTables.min.css' );
    wp_enqueue_style( 'datatables','https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css' );
    wp_enqueue_style( 'datatable-button','https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css' );
    wp_enqueue_style( 'datatable-date','https://cdn.datatables.net/datetime/1.1.2/css/dataTables.dateTime.min.css' );  
    wp_enqueue_style( 'datatable-colrorder','https://cdn.datatables.net/colreorder/1.5.5/css/colReorder.dataTables.min.css' ); 
    wp_enqueue_style( 'datatable-checkboxes','//gyrocode.github.io/jquery-datatables-checkboxes/1.2.12/css/dataTables.checkboxes.css' );
    wp_enqueue_script( 'searchPanes','https://cdn.datatables.net/searchpanes/2.0.0/js/dataTables.searchPanes.min.js' );
    wp_enqueue_script( 'datetime','https://cdn.datatables.net/plug-ins/1.11.5/dataRender/datetime.js' );
    wp_enqueue_script( 'dataTables-min','https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js' );
    wp_enqueue_script( 'jquery-3','https://code.jquery.com/jquery-3.5.1.js' );
    wp_enqueue_script( 'checkboxes','//gyrocode.github.io/jquery-datatables-checkboxes/1.2.12/js/dataTables.checkboxes.min.js' );
    wp_enqueue_script( 'fixedcolumns','https://cdn.datatables.net/fixedcolumns/4.0.2/js/dataTables.fixedColumns.min.js' );
    wp_enqueue_script( 'dataTables-select' ,'https://cdn.datatables.net/select/1.3.4/js/dataTables.select.min.js');
    wp_enqueue_script( 'dataTables-net' ,'https://cdn.datatables.net/datetime/1.1.2/js/dataTables.dateTime.min.js');
    wp_enqueue_script( 'colReorder' ,'https://cdn.datatables.net/colreorder/1.5.5/js/dataTables.colReorder.min.js');
    wp_enqueue_script( 'dataTables.buttons' ,'https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js');
    wp_enqueue_script( 'pdfmake-min' ,'https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js');
    wp_enqueue_script( 'vfs_fonts' ,'https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js');
    wp_enqueue_script( 'buttons-html5' ,'https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js');
    wp_enqueue_script( 'buttons-print' ,'https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js');
    wp_enqueue_script( 'popper-js' ,'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js');
    wp_enqueue_script( 'stackpath-bootstrapcdn' ,'https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js');
    wp_enqueue_script( 'stackpath-boots','https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js');
    wp_enqueue_script( 'stackpath-bootsee','https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min');
    wp_enqueue_script( 'select2','https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js');
    

}
add_action( 'admin_enqueue_scripts', 'my_theme_enqueue_styles' );

// this is commit
