$(document).ready(function(){

/**
 * nastavení CKEditoru pro vložení nové novinky
 */

CKEDITOR.editorConfig = function( config ) {
	
	config.uiColor = '#008B45';
	
	config.toolbar = [
		{ name: 'source', items: [ 'Source' ] },
//		{ name: 'clipboard', items: [ 'Cut', 'Copy', 'Paste' ] },
		{ name: 'changesTimeline', items: [ 'Undo', 'Redo' ] },
		{ name: 'basicstyles', groups: [ 'basicfontstyles', 'extendedfontstyles', 'list', 'special', 'link' ], 
			items: [ 'Bold', 'Italic', 'Underline', 'Strike', '-', 'Subscript', 'Superscript', '-', 'list', 'indent', 
				'-', 'SpecialChar', '-', 'Link', 'Unlink' ] }
	];
	
	// po vlastní implementaci funkce onload přestalo fungovat, nahrazeno ve funkci onload
	config.linkShowTargetTab = false;
	config.linkShowAdvancedTab = false;
	
	
};

CKEDITOR.on('instanceReady', function( ev ){
	var editor = ev.editor;
//	editor.getCommand('link').disable();

	CKEDITOR.volajici = editor;
	CKEDITOR.vlozOdkaz = function(odkaz){
		CKEDITOR.volajici.insertHtml(odkaz);
	};

	// nastaví dialog url
	dialogUrl.nastavDialogUrl(CKEDITOR.vlozOdkaz);

	editor.addCommand( 'link', {
		exec: function( editor ) {
			//editor.insertHtml('<a href="gdfgdgdfgd">rrrrrrrr</a>');
			//CKEDITOR.vlozOdkaz();
			// odkaz na text označený v textarea
			var oznacenyText = editor.getSelection().getSelectedText().toString();
			
			// zavolá Jquery UI dialog pro vložení odkazu
			dialogUrl.otevriDialogUrl(oznacenyText);
		}
	} );
});

	// Listen for the "pluginsLoaded" event, so we are sure that the
	// "dialog" plugin has been loaded and we are able to do our
	// customizations.
//	editor.on('pluginsLoaded', function() {
//		
//		editor.getCommand('link').disable();
//		
//		editor.addCommand( 'link', {
//			exec: function( editor ) {
//				alert( 'Executing a command for the editor name "' + editor.name + '"!' );
//			}
//		} );
		
		

//		// If our custom dialog has not been registered, do that now.
//		if ( !CKEDITOR.dialog.exists( 'myDialog' ) ) {
//		// We need to do the following trick to find out the dialog
//		// definition file URL path. In the real world, you would simply
//		// point to an absolute path directly, like "/mydir/mydialog.js".
//		var href = document.location.href.split( '/' );
//		href.pop();
//		href.push( 'assets/my_dialog.js' );
//		href = href.join( '/' );
//
//		// Finally, register the dialog.
//		CKEDITOR.dialog.add( 'myDialog', href );
//		}

		// Register the command used to open the dialog.
//		editor.addCommand( 'myDialogCmd', new CKEDITOR.dialogCommand( 'myDialog' ) );

		

//		// Add the a custom toolbar buttons, which fires the above
//		// command..
//		editor.ui.add( 'MyButton', CKEDITOR.UI_BUTTON, {
//		label: 'My Dialog',
//		command: 'myDialogCmd'
//		});
//	});
//});



//CKEDITOR.on('dialogDefinition', function(ev) {
//	
//	// z eventu získá jméno a definici dialogu.
//    var jmenoDialogu = ev.data.name;
//    var dialogDefinition = ev.data.definition;
//	
//	var editor = ev.editor;
//	
////	editor.getCommand('linkCommand').disable();
////	 editor.addCommand( 'linkCommand', {
////        exec: function( editor ) {
////            alert( 'Executing a command for the editor name "' + editor.name + '"!' );
////        }
////    } );
//	
//	//zamezí možnosti zmenšit a zvětšit jakýkoliv dialog
//	dialogDefinition.resizable = CKEDITOR.DIALOG_RESIZE_NONE;
//	
//	if (jmenoDialogu === 'link') {
//
//		// Získá referenci na záložku 'Link Info'.
//        var zalozkaInfo = dialogDefinition.getContents('info');
//		
//		// Přidá textové pole pro text odkazu.
//		zalozkaInfo.add( {
//			type: 'text',
//			label: 'Text odkazu',
//			id: 'textOdkazuPole',
//			validate: function() {
//				if ( this.getValue().length === 0 ) {
//					return 'Text odkazu nesmí být prázdný';
//				}
//			}
//		});
//		
//        // odstraní kolonku pro typ odkazu a protokol
//        zalozkaInfo.remove('linkType');
//        zalozkaInfo.remove('protocol');
//		
//		var poleUrl = zalozkaInfo.get('url');
//
//        // Get a reference to the "Target" tab and set default to '_blank'
////        var targetTab = dialogDefinition.getContents('target');
////        var targetField = targetTab.get('linkTargetType');
////        targetField['default'] = '_blank';
//		
//		// získáme odkaz na defaultní metodu onLoad
//		var defaultOnLoad = dialogDefinition.onLoad;
//		
//		dialogDefinition.onLoad = function () { 
//			// získáme odkaz na dialog
//			var dialog = CKEDITOR.dialog.getCurrent();
//			
//			// zavolá původní metodu onload
//			dialog.defaultOnLoad = defaultOnLoad; 
//			dialog.defaultOnLoad();
//			
////			// skryje panely cíl a rozšířené - není potřeba, nyní se nastavuje v konfiguraci
////			dialog.hidePage( 'advanced' );
////			dialog.hidePage( 'target' ); 	
//		};
//		// získáme odkaz na defaultní metodu onShow
//		var defaultOnShow = dialogDefinition.onShow;
//		dialogDefinition.onShow = function (){
//			// získáme odkaz na dialog
//			var dialog = CKEDITOR.dialog.getCurrent();
//			
//			// zavolá původní metodu onShow
//			dialog.defaultOnShow = defaultOnShow; 
//			dialog.defaultOnShow();
//			
//			// odkaz na text označený v textarea
//			var oznacenyText = editor.getSelection().getSelectedText().toString();
//			
//			// nastaví pole text odkazu na označený text
//			dialog.setValueOf('info', 'textOdkazuPole', oznacenyText);
//			
//		};
//    } 
//	
//});

});