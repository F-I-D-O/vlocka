$(document).ready(function(){
	
window.dialogUrl = {
	dialogDiv: $('#dialog_url'),
	textPole: $("#text_odkazu"),
	urlPole: $("#url"),	
	vsechnaPole: $([]).add(this.textPole).add(this.urlPole),	
	tipy: $(".validateTips"),
	
	nastavDialogUrl: function (funkceProZapisOdkazu){
		this.dialogDiv.dialog({
			autoOpen: false,
			modal: true,
			draggable: false,
			resizable: false,
			width: 800,
			buttons: {
				"Vytvoř odkaz": function() {
					dialogUrl.vsechnaPole.removeClass( "ui-state-error" );

					if(dialogUrl.spravneVyplneno()){
						funkceProZapisOdkazu(vytvorOdkaz(dialogUrl.urlPole.val(), dialogUrl.textPole.val()));
						$(this).dialog( "close" );
					}
				},
				Cancel: function() {
					$(this).dialog( "close" );
				}
			},
			close: function() {
				dialogUrl.vsechnaPole.val( "" ).removeClass( "ui-state-error" );
			}
		});
		this.urlPole.on("paste", this.vlozenaUrl);
	},

	otevriDialogUrl: function (oznacenyText){
		this.dialogDiv.dialog( "open" );
		this.textPole.val(oznacenyText);
		if(jeOdkaz(oznacenyText)){
			this.urlPole.val(oznacenyText);
		}
		else{
			this.urlPole.val("");
		}
	},
			
	aktualizujTipy: function (textTipu) {
		this.tipy.text(textTipu).addClass("ui-state-highlight");
		setTimeout(function() {
			dialogUrl.tipy.removeClass( "ui-state-highlight", 1500 );
		} , 500 );
	},

	spravneVyplneno: function (){
		if(this.jeValidniText() && this.jeValidniUrl()){
			return true;
		}
		else{
			return false;
		}

	},

	jeValidniText: function (){
		if(this.textPole.val().length < 1){
			this.textPole.addClass( "ui-state-error" );
			this.aktualizujTipy("Text odkazu nesmí být prázdný  - musíš zadat text odkazu nebo nejdřív označit text");
			return false;
			} 
		else{
			return true;
		}
	},

	jeValidniUrl: function (){
		return true;
	},
	
	vlozenaUrl: function(){
		urlPole = dialogUrl.urlPole;
		textPole = dialogUrl.textPole;
		
		setTimeout(function(){
			if(jeOdkaz(urlPole.val()) && textPole.val().length < 1){
				textPole.val(urlPole.val()) ;
			}
		}, 100);
	}
	
};

});
