var OxOfa97=["_form","windowType","controlWindow","noSuggestionSelection","- No suggestions -","sugg","suggestionList","misword","evaluatedText","txtsugg","replacementText","btnUndo","undoButton","addSuggestion","clearSuggestions","selectDefaultSuggestion","resetForm","setSuggestedText","enableUndo","disableUndo","","text","options","selectedIndex","value","length","selected","sugg_text","disabled"]; function controlWindow(Ox35){ this[OxOfa97[0x0]]=Ox35 ; this[OxOfa97[0x1]]=OxOfa97[0x2] ; this[OxOfa97[0x3]]=OxOfa97[0x4] ; this[OxOfa97[0x6]]=this[OxOfa97[0x0]][OxOfa97[0x5]] ; this[OxOfa97[0x8]]=this[OxOfa97[0x0]][OxOfa97[0x7]] ; this[OxOfa97[0xa]]=this[OxOfa97[0x0]][OxOfa97[0x9]] ; this[OxOfa97[0xc]]=this[OxOfa97[0x0]][OxOfa97[0xb]] ; this[OxOfa97[0xd]]=addSuggestion ; this[OxOfa97[0xe]]=clearSuggestions ; this[OxOfa97[0xf]]=selectDefaultSuggestion ; this[OxOfa97[0x10]]=resetForm ; this[OxOfa97[0x11]]=setSuggestedText ; this[OxOfa97[0x12]]=enableUndo ; this[OxOfa97[0x13]]=disableUndo ;}  ; function resetForm(){if(this[OxOfa97[0x0]]){ this[OxOfa97[0x0]].reset() ;} ;}  ; function setSuggestedText(){var Ox3a=this[OxOfa97[0x6]];var Oxb=this[OxOfa97[0xa]];var Oxe=OxOfa97[0x14];if((Ox3a[OxOfa97[0x16]][0x0][OxOfa97[0x15]])&&Ox3a[OxOfa97[0x16]][0x0][OxOfa97[0x15]]!=this[OxOfa97[0x3]]){ Oxe=Ox3a[OxOfa97[0x16]][Ox3a[OxOfa97[0x17]]][OxOfa97[0x15]] ;} ; Oxb[OxOfa97[0x18]]=Oxe ;}  ; function selectDefaultSuggestion(){var Ox3a=this[OxOfa97[0x6]];var Oxb=this[OxOfa97[0xa]];if(Ox3a[OxOfa97[0x16]][OxOfa97[0x19]]==0x0){ this.addSuggestion(this.noSuggestionSelection) ;} else { Ox3a[OxOfa97[0x16]][0x0][OxOfa97[0x1a]]=true ;} ; this.setSuggestedText() ;}  ; function addSuggestion(Ox3d){var Ox3a=this[OxOfa97[0x6]];if(Ox3d){var i=Ox3a[OxOfa97[0x16]][OxOfa97[0x19]];var Ox3e= new Option(Ox3d,OxOfa97[0x1b]+i); Ox3a[OxOfa97[0x16]][i]=Ox3e ;} ;}  ; function clearSuggestions(){var Ox3a=this[OxOfa97[0x6]];for(var Ox40=Ox3a[OxOfa97[0x19]]-0x1;Ox40>-0x1;Ox40--){if(Ox3a[OxOfa97[0x16]][Ox40]){ Ox3a[OxOfa97[0x16]][Ox40]=null ;} ;} ;}  ; function enableUndo(){if(this[OxOfa97[0xc]]){if(this[OxOfa97[0xc]][OxOfa97[0x1c]]==true){ this[OxOfa97[0xc]][OxOfa97[0x1c]]=false ;} ;} ;}  ; function disableUndo(){if(this[OxOfa97[0xc]]){if(this[OxOfa97[0xc]][OxOfa97[0x1c]]==false){ this[OxOfa97[0xc]][OxOfa97[0x1c]]=true ;} ;} ;}  ;