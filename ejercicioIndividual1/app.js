var a =[1,2,3,4,5,6,7,8,9,10];
var num1=5;
var num2=45;
var multiplicacion=0;
while(num2>num1){
	for(var i=0;i<10;i++){
		multiplicacion=num1*a[i];
		console.log("La tabla del 10 del valor ", num1,"serìa: ",multiplicacion);
	}
	num1++;
	console.log("---------------------------------------------------------------");
}
for(var i=0;i<10;i++){
	multiplicacion=num2*a[i];
	console.log("La tabla del 10 del valor ", num1,"serìa: ",multiplicacion);
}







///console.log("La del 5 serìa");
///for(var i=0;i<a.length;i++){
	//for(var j=1;j<11;j++){
		//multiplicacion=a[i]*j;
		//console.log("La multiplicaciòn del ìndice ", a[i] ," x ",j,"es de: ",multiplicacion);
	//}
	//console.log("Y la del" ,a[i+1]," serìa");
//}
