$(document).ready(function(){
	
window.dialogUrl = {
	dialogDiv: $('#dialog_url'),
	textPole: $("#text_odkazu"),
	urlPole: $("#url"),	
	vsechnaPole: $([]).add(this.textPole).add(this.urlPole),	
	tipy: $(".validateTips"),
	
	nastavDialogUrl: function (funkceProZapisOdkazu){
		dialogObjekt = this;
		this.dialogDiv.dialog({
			autoOpen: false,
			modal: true,
			buttons: {
				"Vytvoř odkaz": function() {
					dialogObjekt.vsechnaPole.removeClass( "ui-state-error" );

					if(dialogObjekt.spravneVyplneno()){
						funkceProZapisOdkazu(vytvorOdkaz(dialogObjekt.urlPole.val(), dialogObjekt.textPole.val()));
						$(this).dialog( "close" );
					}
				},
				Cancel: function() {
					$(this).dialog( "close" );
				}
			},
			close: function() {
				dialogObjekt.vsechnaPole.val( "" ).removeClass( "ui-state-error" );
			}
		});
	},

	otevriDialogUrl: function (oznacenyText){
		this.dialogDiv.dialog( "open" );
		this.textPole.val(oznacenyText);
	},
			
	aktualizujTipy: function (textTipu) {
		this.tipy.text(textTipu).addClass("ui-state-highlight");
		dialogObjekt = this;
		setTimeout(function() {
			dialogObjekt.tipy.removeClass( "ui-state-highlight", 1500 );
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
	}
	
	
};

});
