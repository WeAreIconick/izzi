import { __ } from '@wordpress/i18n';

const searchDialogTriggers = document.querySelectorAll( '.search_dialog__trigger' );

searchDialogTriggers.forEach( ( searchForm ) => {
    searchForm.addEventListener( 'click', ( event ) => {
        window.search_dialog.showModal();
    } );
} );
