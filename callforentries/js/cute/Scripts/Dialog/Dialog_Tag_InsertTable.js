var OxObaeb=["rowSpan","removeNode","parentNode","firstChild","colSpan","nodeName","TABLE","Map","rowIndex","rows","length","cells","cellIndex","innerHTML","cell","\x26nbsp;","Can\x27t Get The Position ?","RowCount","ColCount","Unknown Error , pos ",":"," already have cell","Unknown Error , Unable to find bestpos","tbody","uniqueID","richDropDown","list_Templates","subcolumns","addcolumns","subcolspan","addcolspan","btn_row_dialog","btn_cell_dialog","inp_cell_width","inp_cell_height","btn_cell_editcell","tabledesign","subrows","addrows","subrowspan","addrowspan","display","style","none","disabled","width","value","height","ValidNumber","","\x3Ctable\x3E\x3Ctr\x3E\x3Ctd height=\x2224\x22\x3E\x3C/td\x3E\x3C/tr\x3E\x3C/table\x3E","\x3Ctable\x3E\x3Ctr\x3E\x3Ctd\x3E\x3C/td\x3E\x3Ctd\x3E\x3C/td\x3E\x3C/tr\x3E\x3C/table\x3E","\x3Ctable\x3E\x3Ctr\x3E\x3Ctd\x3E\x3C/td\x3E\x3Ctd\x3E\x3C/td\x3E\x3Ctd\x3E\x3C/td\x3E\x3C/tr\x3E\x3C/table\x3E","\x3Ctable border=\x220\x22 cellpadding=\x220\x22 cellspacing=\x220\x22\x3E\x3Ctr\x3E\x3Ctd valign=\x22top\x22 colspan=\x222\x22\x3E\x3C/td\x3E\x3C/tr\x3E","\x3Ctr\x3E\x3Ctd valign=\x22top\x22 rowspan=\x222\x22\x3E\x3C/td\x3E\x3Ctd valign=\x22top\x22\x3E\x3C/td\x3E\x3C/tr\x3E","\x3Ctr\x3E\x3Ctd valign=\x22top\x22\x3E\x3C/td\x3E\x3C/tr\x3E\x3C/table\x3E","\x3Ctr\x3E\x3Ctd valign=\x22top\x22\x3E\x3C/td\x3E\x3Ctd valign=\x22top\x22 rowspan=\x222\x22\x3E\x3C/td\x3E\x3C/tr\x3E\x3Ctr\x3E\x3Ctd valign=\x22top\x22\x3E\x3C/td\x3E\x3C/tr\x3E\x3C/table\x3E","\x3Ctable border=\x220\x22 cellpadding=\x220\x22 cellspacing=\x220\x22\x3E\x3Ctr\x3E\x3Ctd valign=\x22top\x22 colspan=\x223\x22\x3E\x3C/td\x3E\x3C/tr\x3E","\x3Ctr\x3E\x3Ctd valign=\x22top\x22\x3E\x3C/td\x3E\x3Ctd valign=\x22top\x22\x3E\x3C/td\x3E\x3Ctd valign=\x22top\x22\x3E\x3C/td\x3E\x3C/tr\x3E","\x3Ctr\x3E\x3Ctd valign=\x22top\x22 colspan=\x223\x22\x3E\x3C/td\x3E\x3C/tr\x3E\x3C/table\x3E","DIV","onclick","bgColor","#d4d0c8","onmouseover","onmouseout","ondblclick","contains","ToggleBorder","backgroundColor","highlight","cssText","runtimeStyle","background-color:gray","onload","body","document","csstext","font:normal 11px Tahoma;background-color:windowtext;","isOpen"]; function Table_GetCellFromMap(Ox409,Ox40a,Ox40b){var Ox40c=Ox409[Ox40a];if(Ox40c){return Ox40c[Ox40b];} ;}  ; function Table_CanSubRowSpan(Oxa){return Oxa[OxObaeb[0x0]]>0x1;}  ; function Element_RemoveNode(element,Ox40f){if(element[OxObaeb[0x1]]){ element.removeNode(Ox40f) ;return ;} ;var p=element[OxObaeb[0x2]];if(!p){return ;} ;if(Ox40f){ p.removeChild(element) ;return ;} ;while(true){var Ox15e=element[OxObaeb[0x3]];if(!Ox15e){break ;} ; p.insertBefore(Ox15e,element) ;} ; p.removeChild(element) ;}  ; function Table_CanSubColSpan(Oxa){return Oxa[OxObaeb[0x4]]>0x1;}  ; function Table_GetTable(Oxdc){for(;Oxdc!=null;Oxdc=Oxdc[OxObaeb[0x2]]){if(Oxdc[OxObaeb[0x5]]==OxObaeb[0x6]){return Oxdc;} ;} ;return null;}  ; function Table_SubRowSpan(Oxa){var Ox7=Table_GetTable(Oxa);var Ox147=Table_CalculateTableInfo(Ox7);var Ox409=Ox147[OxObaeb[0x7]];var Ox82=Table_GetCellPositionFromMap(Ox409,Oxa);var Ox413=Ox7[OxObaeb[0x9]].item(Oxa[OxObaeb[0x2]][OxObaeb[0x8]]+Oxa[OxObaeb[0x0]]-0x1);var Ox414=0x0;for(var i=0x0;i<Ox413[OxObaeb[0xb]][OxObaeb[0xa]];i++){var Ox415=Ox413[OxObaeb[0xb]].item(i);var Ox416=Table_GetCellPositionFromMap(Ox409,Ox415);if(Ox416[OxObaeb[0xc]]<Ox82[OxObaeb[0xc]]){ Ox414=i+0x1 ;} ;} ;for(var i=0x0;i<Oxa[OxObaeb[0x4]];i++){var Ox15e=Ox413.insertCell(Ox414);if(Browser_IsOpera()){ Ox15e[OxObaeb[0xd]]=OxObaeb[0xe] ;} else {if(Browser_IsGecko()||Browser_IsSafari()){ Ox15e[OxObaeb[0xd]]=OxObaeb[0xf] ;} ;} ;} ; Oxa[OxObaeb[0x0]]-- ;}  ; function Table_GetCellPositionFromMap(Ox409,Oxa){for(var Ox1f0=0x0;Ox1f0<Ox409[OxObaeb[0xa]];Ox1f0++){var Ox40c=Ox409[Ox1f0];for(var Ox11b=0x0;Ox11b<Ox40c[OxObaeb[0xa]];Ox11b++){if(Ox40c[Ox11b]==Oxa){return {rowIndex:Ox1f0,cellIndex:Ox11b};} ;} ;} ;throw ( new Error(-0x1,OxObaeb[0x10]));}  ; function Table_GetCellMap(Ox7){return Table_CalculateTableInfo(Ox7)[OxObaeb[0x7]];}  ; function Table_GetRowCount(Oxdc){return Table_CalculateTableInfo(Oxdc)[OxObaeb[0x11]];}  ; function Table_GetColCount(Oxdc){return Table_CalculateTableInfo(Oxdc)[OxObaeb[0x12]];}  ; function Table_CalculateTableInfo(Oxdc){var Ox7=Table_GetTable(Oxdc);var Ox41c=Ox7[OxObaeb[0x9]];for(var Ox29=Ox41c[OxObaeb[0xa]]-0x1;Ox29>=0x0;Ox29--){var Ox41d=Ox41c.item(Ox29);if(Ox41d[OxObaeb[0xb]][OxObaeb[0xa]]==0x0){ Element_RemoveNode(Ox41d,true) ;continue ;} ;} ;var Ox41e=Ox41c[OxObaeb[0xa]];var Ox41f=0x0;var Ox420= new Array(Ox41c.length);for(var Ox421=0x0;Ox421<Ox41e;Ox421++){ Ox420[Ox421]=[] ;} ; function Ox422(Ox29,Ox15e,Oxa){while(Ox29>=Ox41e){ Ox420[Ox41e]=[] ; Ox41e++ ;} ;var Ox423=Ox420[Ox29];if(Ox15e>=Ox41f){ Ox41f=Ox15e+0x1 ;} ;if(Ox423[Ox15e]!=null){throw ( new Error(-0x1,OxObaeb[0x13]+Ox29+OxObaeb[0x14]+Ox15e+OxObaeb[0x15]));} ; Ox423[Ox15e]=Oxa ;}  ; function Ox424(Ox29,Ox15e){var Ox423=Ox420[Ox29];if(Ox423){return Ox423[Ox15e];} ;}  ;for(var Ox421=0x0;Ox421<Ox41c[OxObaeb[0xa]];Ox421++){var Ox41d=Ox41c.item(Ox421);var Ox425=Ox41d[OxObaeb[0xb]];for(var Ox14=0x0;Ox14<Ox425[OxObaeb[0xa]];Ox14++){var Oxa=Ox425.item(Ox14);var Ox426=Oxa[OxObaeb[0x0]];var Ox427=Oxa[OxObaeb[0x4]];var Ox423=Ox420[Ox421];var Ox428=-0x1;for(var Ox429=0x0;Ox429<Ox41f+Ox427+0x1;Ox429++){if(Ox426==0x1&&Ox427==0x1){if(Ox423[Ox429]==null){ Ox428=Ox429 ;break ;} ;} else {var Ox42a=true;for(var Ox42b=0x0;Ox42b<Ox426;Ox42b++){for(var Ox42c=0x0;Ox42c<Ox427;Ox42c++){if(Ox424(Ox421+Ox42b,Ox429+Ox42c)!=null){ Ox42a=false ;break ;} ;} ;} ;if(Ox42a){ Ox428=Ox429 ;break ;} ;} ;} ;if(Ox428==-0x1){throw ( new Error(-0x1,OxObaeb[0x16]));} ;if(Ox426==0x1&&Ox427==0x1){ Ox422(Ox421,Ox428,Oxa) ;} else {for(var Ox42b=0x0;Ox42b<Ox426;Ox42b++){for(var Ox42c=0x0;Ox42c<Ox427;Ox42c++){ Ox422(Ox421+Ox42b,Ox428+Ox42c,Oxa) ;} ;} ;} ;} ;} ;var Oxca={}; Oxca[OxObaeb[0x11]]=Ox41e ; Oxca[OxObaeb[0x12]]=Ox41f ; Oxca[OxObaeb[0x7]]=Ox420 ;for(var Ox29=0x0;Ox29<Ox41e;Ox29++){var Ox423=Ox420[Ox29];for(var Ox15e=0x0;Ox15e<Ox41f;Ox15e++){} ;} ;return Oxca;}  ; function Table_SubColSpan(Oxa){var Ox7=Table_GetTable(Oxa); Oxa[OxObaeb[0x2]].insertCell(Oxa[OxObaeb[0xc]]+0x1)[OxObaeb[0x0]]=Oxa[OxObaeb[0x0]] ; Oxa[OxObaeb[0x4]]-- ;}  ; function Table_CanAddRowSpan(Oxa){var Ox7=Table_GetTable(Oxa);var Ox147=Table_CalculateTableInfo(Ox7);var Ox409=Ox147[OxObaeb[0x7]];var Ox82=Table_GetCellPositionFromMap(Ox409,Oxa);var Ox42f=0x0;for(var Ox15e=0x0;Ox15e<Oxa[OxObaeb[0x4]];Ox15e++){var Ox430=Table_GetCellFromMap(Ox409,Ox82[OxObaeb[0x8]]+Oxa[OxObaeb[0x0]],Ox82[OxObaeb[0xc]]+Ox15e);if(Ox430==null){return false;} ;if(Ox42f!=0x0&&Ox42f!=Ox430[OxObaeb[0x0]]){return false;} ; Ox42f=Ox430[OxObaeb[0x0]] ;var Ox431=Table_GetCellPositionFromMap(Ox409,Ox430);if(Ox431[OxObaeb[0xc]]<Ox82[OxObaeb[0xc]]){return false;} ;if(Ox431[OxObaeb[0xc]]+Ox430[OxObaeb[0x4]]>Ox82[OxObaeb[0xc]]+Oxa[OxObaeb[0x4]]){return false;} ;} ;return true;}  ; function Table_AddRow(Oxa){var Ox7=Table_GetTable(Oxa);var Ox147=Table_CalculateTableInfo(Ox7);var Ox409=Ox147[OxObaeb[0x7]];var Ox41f=Ox147[OxObaeb[0x12]];var Ox41e=Ox147[OxObaeb[0x11]];var Ox41d;if(!Browser_IsSafari()){ Ox41d=Ox7.insertRow(-0x1) ;} else {var Ox13a=document.createElement(OxObaeb[0x17]); Ox7.appendChild(Ox13a) ; Ox41d=Ox13a.insertRow(-0x1) ;} ;for(var i=0x0;i<Ox41f;i++){var Ox15e=Ox41d.insertCell(-0x1);if(Browser_IsOpera()){ Ox15e[OxObaeb[0xd]]=OxObaeb[0xe] ;} else {if(Browser_IsGecko()||Browser_IsSafari()){ Ox15e[OxObaeb[0xd]]=OxObaeb[0xf] ;} ;} ;} ;}  ; function Table_AddCol(Oxa){var Ox7=Table_GetTable(Oxa);for(var Ox29=0x0;Ox29<Ox7[OxObaeb[0x9]][OxObaeb[0xa]];Ox29++){var Ox41d=Ox7[OxObaeb[0x9]].item(Ox29);var Ox15e=Ox41d.insertCell(-0x1);if(Browser_IsOpera()){ Ox15e[OxObaeb[0xd]]=OxObaeb[0xe] ;} else {if(Browser_IsGecko()||Browser_IsSafari()){ Ox15e[OxObaeb[0xd]]=OxObaeb[0xf] ;} ;} ;} ;}  ; function Table_CleanUpTableInfo(Ox7,Ox147){var Ox41c=Ox7[OxObaeb[0x9]];for(var Ox29=Ox41c[OxObaeb[0xa]]-0x1;Ox29>=0x0;Ox29--){var Ox41d=Ox41c.item(Ox29);if(Ox41d[OxObaeb[0xb]][OxObaeb[0xa]]==0x0){ Element_RemoveNode(Ox41d,true) ;continue ;} ;} ;var Ox409=Ox147[OxObaeb[0x7]];var Ox41f=Ox147[OxObaeb[0x12]];var Ox41e=Ox147[OxObaeb[0x11]];for(var Ox421=0x1;Ox421<Ox41e;Ox421++){var Ox435=true;for(var Ox14=0x0;Ox14<Ox41f;Ox14++){if(Table_GetCellFromMap(Ox409,Ox421-0x1,Ox14)!=Table_GetCellFromMap(Ox409,Ox421,Ox14)){ Ox435=false ;break ;} ;} ;if(Ox435){for(var Ox14=0x0;Ox14<Ox41f;Ox14++){var Oxa=Table_GetCellFromMap(Ox409,Ox421,Ox14);if(Oxa){if(Oxa[OxObaeb[0x0]]>0x1){ Oxa[OxObaeb[0x0]]=Oxa[OxObaeb[0x0]]-0x1 ;} ; Ox14+=Oxa[OxObaeb[0x4]]-0x1 ;} ;} ;} ;} ;for(var Ox14=0x1;Ox14<Ox41f;Ox14++){var Ox435=true;for(var Ox421=0x0;Ox421<Ox41e;Ox421++){if(Table_GetCellFromMap(Ox409,Ox421,Ox14-0x1)!=Table_GetCellFromMap(Ox409,Ox421,Ox14)){ Ox435=false ;break ;} ;} ;if(Ox435){for(var Ox421=0x0;Ox421<Ox41e;Ox421++){var Oxa=Table_GetCellFromMap(Ox409,Ox421,Ox14);if(Oxa){if(Oxa[OxObaeb[0x4]]>0x1){ Oxa[OxObaeb[0x4]]=Oxa[OxObaeb[0x4]]-0x1 ;} ; Ox421+=Oxa[OxObaeb[0x0]]-0x1 ;} ;} ;} ;} ;}  ; function Table_SubRow(Oxa){var Ox7=Table_GetTable(Oxa);var Ox147=Table_CalculateTableInfo(Ox7);var Ox409=Ox147[OxObaeb[0x7]];var Ox41f=Ox147[OxObaeb[0x12]];var Ox41e=Ox147[OxObaeb[0x11]];if(Ox41e==0x0){return ;} ;var Ox437={};var Ox421=Ox41e-0x1;for(var Ox14=0x0;Ox14<Ox41f;Ox14++){var Oxa=Table_GetCellFromMap(Ox409,Ox421,Ox14);if(Oxa){if(Ox437[Oxa[OxObaeb[0x18]]]){continue ;} ; Ox437[Oxa[OxObaeb[0x18]]]=true ;if(Oxa[OxObaeb[0x0]]==0x1){ Element_RemoveNode(Oxa,true) ;} else { Oxa[OxObaeb[0x0]]=Oxa[OxObaeb[0x0]]-0x1 ;} ;} ;} ; Ox147[OxObaeb[0x11]]-- ; Table_CleanUpTableInfo(Ox7,Ox147) ;}  ; function Table_CanAddColSpan(Oxa){var Ox7=Table_GetTable(Oxa);var Ox147=Table_CalculateTableInfo(Ox7);var Ox409=Ox147[OxObaeb[0x7]];var Ox82=Table_GetCellPositionFromMap(Ox409,Oxa);var Ox439=0x0;for(var Ox29=0x0;Ox29<Oxa[OxObaeb[0x0]];Ox29++){var Ox430=Table_GetCellFromMap(Ox409,Ox82[OxObaeb[0x8]]+Ox29,Ox82[OxObaeb[0xc]]+Oxa.colSpan);if(Ox430==null){return false;} ;if(Ox439!=0x0&&Ox439!=Ox430[OxObaeb[0x4]]){return false;} ; Ox439=Ox430[OxObaeb[0x4]] ;var Ox431=Table_GetCellPositionFromMap(Ox409,Ox430);if(Ox431[OxObaeb[0x8]]<Ox82[OxObaeb[0x8]]){return false;} ;if(Ox431[OxObaeb[0x8]]+Ox430[OxObaeb[0x0]]>Ox82[OxObaeb[0x8]]+Oxa[OxObaeb[0x0]]){return false;} ;} ;return true;}  ; function Table_AddRowSpan(Oxa){var Ox7=Table_GetTable(Oxa);var Ox147=Table_CalculateTableInfo(Ox7);var Ox409=Ox147[OxObaeb[0x7]];var Ox82=Table_GetCellPositionFromMap(Ox409,Oxa);var Ox42f=0x0;for(var Ox15e=0x0;Ox15e<Oxa[OxObaeb[0x4]];Ox15e++){var Ox430=Table_GetCellFromMap(Ox409,Ox82[OxObaeb[0x8]]+Oxa[OxObaeb[0x0]],Ox82[OxObaeb[0xc]]+Ox15e);if(Ox42f==0x0){ Ox42f=Ox430[OxObaeb[0x0]] ;} ; Element_RemoveNode(Ox430,true) ;} ; Oxa[OxObaeb[0x0]]=Oxa[OxObaeb[0x0]]+Ox42f ;for(var Ox421=0x0;Ox421<Oxa[OxObaeb[0x0]];Ox421++){for(var Ox14=0x0;Ox14<Oxa[OxObaeb[0x4]];Ox14++){ Ox147[OxObaeb[0x7]][Ox82[OxObaeb[0x8]]+Ox421][Ox82[OxObaeb[0xc]]+Ox14]=Oxa ;} ;} ; Table_CleanUpTableInfo(Ox7,Ox147) ;}  ; function Table_AddColSpan(Oxa){var Ox7=Table_GetTable(Oxa);var Ox147=Table_CalculateTableInfo(Ox7);var Ox409=Ox147[OxObaeb[0x7]];var Ox82=Table_GetCellPositionFromMap(Ox409,Oxa);var Ox439=0x0;for(var Ox29=0x0;Ox29<Oxa[OxObaeb[0x0]];Ox29++){var Ox430=Table_GetCellFromMap(Ox409,Ox82[OxObaeb[0x8]]+Ox29,Ox82[OxObaeb[0xc]]+Oxa.colSpan);if(Ox439==0x0){ Ox439=Ox430[OxObaeb[0x4]] ;} ; Element_RemoveNode(Ox430,true) ;} ; Oxa[OxObaeb[0x4]]+=Ox439 ;for(var Ox421=0x0;Ox421<Oxa[OxObaeb[0x0]];Ox421++){for(var Ox14=0x0;Ox14<Oxa[OxObaeb[0x4]];Ox14++){ Ox147[OxObaeb[0x7]][Ox82[OxObaeb[0x8]]+Ox421][Ox82[OxObaeb[0xc]]+Ox14]=Oxa ;} ;} ; Table_CleanUpTableInfo(Ox7,Ox147) ;}  ; function Table_SubCol(Oxa){var Ox7=Table_GetTable(Oxa);var Ox147=Table_CalculateTableInfo(Ox7);var Ox409=Ox147[OxObaeb[0x7]];var Ox41f=Ox147[OxObaeb[0x12]];var Ox41e=Ox147[OxObaeb[0x11]];if(Ox41e==0x0){return ;} ;var Ox437={};var Ox14=Ox41f-0x1;for(var Ox421=0x0;Ox421<Ox41e;Ox421++){var Oxa=Table_GetCellFromMap(Ox409,Ox421,Ox14);if(Ox437[Oxa[OxObaeb[0x18]]]){continue ;} ; Ox437[Oxa[OxObaeb[0x18]]]=true ;if(Oxa[OxObaeb[0x4]]==0x1){ Element_RemoveNode(Oxa,true) ;} else { Oxa[OxObaeb[0x4]]=Oxa[OxObaeb[0x4]]-0x1 ;} ;} ; Ox147[OxObaeb[0x12]]-- ; Table_CleanUpTableInfo(Ox7,Ox147) ;}  ;var richDropDown=Window_GetElement(window,OxObaeb[0x19],true);var list_Templates=Window_GetElement(window,OxObaeb[0x1a],true);var subcolumns=Window_GetElement(window,OxObaeb[0x1b],true);var addcolumns=Window_GetElement(window,OxObaeb[0x1c],true);var subcolspan=Window_GetElement(window,OxObaeb[0x1d],true);var addcolspan=Window_GetElement(window,OxObaeb[0x1e],true);var btn_row_dialog=Window_GetElement(window,OxObaeb[0x1f],true);var btn_cell_dialog=Window_GetElement(window,OxObaeb[0x20],true);var inp_cell_width=Window_GetElement(window,OxObaeb[0x21],true);var inp_cell_height=Window_GetElement(window,OxObaeb[0x22],true);var btn_cell_editcell=Window_GetElement(window,OxObaeb[0x23],true);var tabledesign=Window_GetElement(window,OxObaeb[0x24],true);var subrows=Window_GetElement(window,OxObaeb[0x25],true);var addrows=Window_GetElement(window,OxObaeb[0x26],true);var subrowspan=Window_GetElement(window,OxObaeb[0x27],true);var addrowspan=Window_GetElement(window,OxObaeb[0x28],true); btn_cell_editcell[OxObaeb[0x2a]][OxObaeb[0x29]]=OxObaeb[0x2b] ; UpdateState=function UpdateState_InsertTable(){ btn_cell_editcell[OxObaeb[0x2c]]=btn_row_dialog[OxObaeb[0x2c]]=btn_cell_dialog[OxObaeb[0x2c]]=GetElementCell()==null ;}  ; SyncToView=function SyncToView_InsertTable(){var Ox44f=GetElementCell();if(Ox44f){ inp_cell_width[OxObaeb[0x2e]]=Ox44f[OxObaeb[0x2d]] ; inp_cell_height[OxObaeb[0x2e]]=Ox44f[OxObaeb[0x2f]] ;} ;}  ; SyncTo=function SyncTo_InsertTable(element){var Ox44f=GetElementCell();if(Ox44f){try{ Ox44f[OxObaeb[0x2d]]=inp_cell_width[OxObaeb[0x2e]] ; Ox44f[OxObaeb[0x2f]]=inp_cell_height[OxObaeb[0x2e]] ;} catch(er){ alert(CE_GetStr(OxObaeb[0x30])) ;} ;} ;}  ; function selectTemplate(Ox11d){var Ox452=OxObaeb[0x31];switch(Ox11d){case 0x1: Ox452=OxObaeb[0x32] ;break ;case 0x2: Ox452=OxObaeb[0x33] ;break ;case 0x3: Ox452=OxObaeb[0x34] ;break ;case 0x4: Ox452=OxObaeb[0x35] ; Ox452=Ox452+OxObaeb[0x36] ; Ox452=Ox452+OxObaeb[0x37] ;break ;case 0x5: Ox452=OxObaeb[0x35] ; Ox452=Ox452+OxObaeb[0x38] ;break ;case 0x6: Ox452=OxObaeb[0x39] ; Ox452=Ox452+OxObaeb[0x3a] ; Ox452=Ox452+OxObaeb[0x3b] ;break ;default:break ;;;;;;;;} ;try{var Oxcf=document.createElement(OxObaeb[0x3c]); Oxcf[OxObaeb[0xd]]=Ox452 ;var Ox7=Oxcf.children(0x0); ApplyTable(Ox7,element) ; ApplyTable(Ox7,tabledesign) ; HandleTableChanged() ; hidePopup() ;} catch(x){} ;}  ; subcolumns[OxObaeb[0x3d]]=function subcolumns_onclick(){ Table_SubCol(GetElementCell()) ; Table_SubCol(currentcell) ; HandleTableChanged() ;}  ; addcolumns[OxObaeb[0x3d]]=function addcolumns_onclick(){ Table_AddCol(GetElementCell()) ; Table_AddCol(currentcell) ; HandleTableChanged() ;}  ; subrows[OxObaeb[0x3d]]=function subrows_onclick(){ Table_SubRow(GetElementCell()) ; Table_SubRow(currentcell) ; HandleTableChanged() ;}  ; addrows[OxObaeb[0x3d]]=function addrows_onclick(){ Table_AddRow(currentcell) ; Table_AddRow(GetElementCell()) ; HandleTableChanged() ;}  ; subcolspan[OxObaeb[0x3d]]=function subcolspan_onclick(){ Table_SubColSpan(GetElementCell()) ; Table_SubColSpan(currentcell) ; HandleTableChanged() ;}  ; addcolspan[OxObaeb[0x3d]]=function addcolspan_onclick(){ Table_AddColSpan(GetElementCell()) ; Table_AddColSpan(currentcell) ; HandleTableChanged() ;}  ; subrowspan[OxObaeb[0x3d]]=function subrowspan_onclick(){ Table_SubRowSpan(GetElementCell()) ; Table_SubRowSpan(currentcell) ; HandleTableChanged() ;}  ; addrowspan[OxObaeb[0x3d]]=function addrowspan_onclick(){ Table_AddRowSpan(GetElementCell()) ; Table_AddRowSpan(currentcell) ; HandleTableChanged() ;}  ; function InitDesignTableCells(){for(var Ox29=0x0;Ox29<tabledesign[OxObaeb[0x9]][OxObaeb[0xa]];Ox29++){var Ox41d=tabledesign[OxObaeb[0x9]][Ox29];for(var Ox15e=0x0;Ox15e<Ox41d[OxObaeb[0xb]][OxObaeb[0xa]];Ox15e++){var Oxa=Ox41d[OxObaeb[0xb]][Ox15e]; Oxa.removeAttribute(OxObaeb[0x2d]) ; Oxa.removeAttribute(OxObaeb[0x2f]) ; Oxa[OxObaeb[0x2d]]=OxObaeb[0x31] ; Oxa[OxObaeb[0x2f]]=OxObaeb[0x31] ; Oxa[OxObaeb[0x3e]]=OxObaeb[0x3f] ; Oxa[OxObaeb[0x40]]=cell_mouseover ; Oxa[OxObaeb[0x41]]=cell_mouseout ; Oxa[OxObaeb[0x3d]]=cell_click ; Oxa[OxObaeb[0x42]]=cell_dblclick ;} ;} ;}  ; function Element_Contains(element,Ox106){if(!Browser_IsOpera()){if(element[OxObaeb[0x43]]){return element.contains(Ox106);} ;} ;for(;Ox106!=null;Ox106=Ox106[OxObaeb[0x2]]){if(element==Ox106){return true;} ;} ;return false;}  ; function HandleTableChanged(){if(!Element_Contains(tabledesign,currentcell)){ SetCurrentCell(tabledesign.rows(0x0).cells(0x0)) ;} ; InitDesignTableCells() ; UpdateButtonStates() ; editor.ExecCommand(OxObaeb[0x44]) ; editor.ExecCommand(OxObaeb[0x44]) ;}  ; function cell_mouseover(){var Oxa=this; Oxa[OxObaeb[0x2a]][OxObaeb[0x45]]=OxObaeb[0x46] ;}  ; function cell_mouseout(){var Oxa=this; Oxa[OxObaeb[0x2a]][OxObaeb[0x45]]=OxObaeb[0x3f] ;}  ; function cell_click(){var Oxa=this; SetCurrentCell(Oxa) ;}  ; function cell_dblclick(){var Oxa=this; SetCurrentCell(Oxa) ;}  ; btn_cell_editcell[OxObaeb[0x3d]]=function btn_cell_editcell_onclick(){var Oxa=GetElementCell();var Ox19e=editor.EditInWindow(Oxa.innerHTML,window);if(Ox19e!=null&&Ox19e!==false){ Oxa[OxObaeb[0xd]]=Ox19e ;} ;}  ; btn_cell_dialog[OxObaeb[0x3d]]=function btn_cell_dialog_onclick(){ editor.SetNextDialogWindow(window) ; editor.ShowTagDialogWithNoCancellable(GetElementCell()) ;}  ; btn_row_dialog[OxObaeb[0x3d]]=function btn_row_dialog_onclick(){ editor.SetNextDialogWindow(window) ; editor.ShowTagDialogWithNoCancellable(GetElementCell().parentNode) ;}  ; btn_row_dialog[OxObaeb[0x2a]][OxObaeb[0x29]]=btn_cell_dialog[OxObaeb[0x2a]][OxObaeb[0x29]]=OxObaeb[0x2b] ;var currentcell=null; function GetElementCell(){if(currentcell==null){return null;} ;return element[OxObaeb[0x9]][currentcell[OxObaeb[0x2]][OxObaeb[0x8]]][OxObaeb[0xb]][currentcell[OxObaeb[0xc]]];}  ; function SetCurrentCell(Oxa){if(currentcell!=null){if(Browser_IsWinIE()){ currentcell[OxObaeb[0x48]][OxObaeb[0x47]]=OxObaeb[0x31] ;} else { currentcell[OxObaeb[0x2a]][OxObaeb[0x47]]=OxObaeb[0x31] ;} ;} ; currentcell=Oxa ;if(Browser_IsWinIE()){ currentcell[OxObaeb[0x48]][OxObaeb[0x47]]=OxObaeb[0x49] ;} else { currentcell[OxObaeb[0x2a]][OxObaeb[0x47]]=OxObaeb[0x49] ;} ; UpdateButtonStates() ; SyncToViewInternal() ;}  ; function UpdateButtonStates(){ subcolspan[OxObaeb[0x2c]]=!Table_CanSubColSpan(currentcell) ; addcolspan[OxObaeb[0x2c]]=!Table_CanAddColSpan(currentcell) ; subrowspan[OxObaeb[0x2c]]=!Table_CanSubRowSpan(currentcell) ; addrowspan[OxObaeb[0x2c]]=!Table_CanAddRowSpan(currentcell) ; subrows[OxObaeb[0x2c]]=Table_GetRowCount(currentcell)<0x2 ; subcolumns[OxObaeb[0x2c]]=Table_GetColCount(currentcell)<0x2 ;}  ; function ApplyTable(src,Ox469){if(Browser_IsSafari()){ Ox469[OxObaeb[0x2a]][OxObaeb[0x2f]]=OxObaeb[0x31] ;} ;for(var Ox29=Ox469[OxObaeb[0x9]][OxObaeb[0xa]]-0x1;Ox29>=0x0;Ox29--){ Ox469[OxObaeb[0x9]][Ox29].removeNode(true) ;} ;for(var Ox29=0x0;Ox29<src[OxObaeb[0x9]][OxObaeb[0xa]];Ox29++){var Ox46a=src[OxObaeb[0x9]][Ox29];var Ox46b;if(!Browser_IsSafari()){ Ox46b=Ox469.insertRow(-0x1) ;} else {var Ox13a=document.createElement(OxObaeb[0x17]); Ox469.appendChild(Ox13a) ; Ox46b=Ox13a.insertRow(-0x1) ;} ; Ox46b[OxObaeb[0x2a]][OxObaeb[0x47]]=Ox46a[OxObaeb[0x2a]][OxObaeb[0x47]] ;for(var Ox15e=0x0;Ox15e<Ox46a[OxObaeb[0xb]][OxObaeb[0xa]];Ox15e++){var Ox46c=Ox46a[OxObaeb[0xb]][Ox15e];var Ox46d=Ox46b.insertCell(-0x1); Ox46d[OxObaeb[0x0]]=Ox46c[OxObaeb[0x0]] ; Ox46d[OxObaeb[0x4]]=Ox46c[OxObaeb[0x4]] ; Ox46d[OxObaeb[0x2a]][OxObaeb[0x47]]=Ox46c[OxObaeb[0x2a]][OxObaeb[0x47]] ;if(Browser_IsOpera()){ Ox46d[OxObaeb[0xd]]=OxObaeb[0xe] ;} else {if(Browser_IsGecko()||Browser_IsSafari()){ Ox46d[OxObaeb[0xd]]=OxObaeb[0xf] ;} ;} ;} ;} ;}  ; window[OxObaeb[0x4a]]=function window_onload(){ ApplyTable(element,tabledesign) ; InitDesignTableCells() ; SetCurrentCell(tabledesign[OxObaeb[0x9]][0x0][OxObaeb[0xb]][0x0]) ;}  ; function updateList(){}  ;var oPopup;if(Browser_IsWinIE()){ oPopup=window.createPopup() ;} else { richDropDown[OxObaeb[0x2a]][OxObaeb[0x29]]=OxObaeb[0x2b] ;} ; function selectTemplates(){if(Browser_IsWinIE()){ oPopup[OxObaeb[0x4c]][OxObaeb[0x4b]][OxObaeb[0xd]]=list_Templates[OxObaeb[0xd]] ; oPopup[OxObaeb[0x4c]][OxObaeb[0x4b]][OxObaeb[0x2a]][OxObaeb[0x4d]]=OxObaeb[0x4e] ; oPopup.show(0x0,0x20,0x17c,0xdc,richDropDown) ;} ;}  ; function hidePopup(){if(Browser_IsWinIE()){if(oPopup){if(oPopup[OxObaeb[0x4f]]){ oPopup.hide() ;} ;} ;} ;}  ;