function printit(){
    if (NS) {
        window.print() ;
    } else {
        var WebBrowser = '<OBJECT ID="WebBrowser1" WIDTH=0 HEIGHT=0 CLASSID="CLSID:8856F961-340A-11D0-A96B-00C04FD705A2"></OBJECT>';
    document.body.insertAdjacentHTML('beforeEnd', WebBrowser);
        WebBrowser1.ExecWB(6, 2);
    }
}
    
var NS = (navigator.appName == "Netscape");
var VERSION = parseInt(navigator.appVersion);
if (VERSION > 3) {
    document.write('<form><input type=button value="Imprimer cette page" name="Print" onClick="printit()"></form>');
}